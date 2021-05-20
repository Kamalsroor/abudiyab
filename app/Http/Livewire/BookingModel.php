<?php

namespace App\Http\Livewire;

use App\Models\Branch;
use App\Models\CarsInStock;
use Cache;
use Carbon\Carbon;
use Livewire\Component;
use DateInterval;
use DateTime;
class BookingModel extends Component
{
    public $car_id;
    public $branches;
    public $dervery_branch_id;
    public $receiving_branch_id;
    public $deliveryDate;
    public $receivingDate;
    public $region;
     public $dayOneFormated='';
    public $dayTwoFormated='';
    protected $listeners = [
        'setCarId' => 'setCarId'
    ];
    public function mount()
    {
        $date = new DateTime();
        $recievingInterval = new DateInterval('P1D');
        $this->dayOneFormated=$date->add($recievingInterval)->format('Y-m-d\TH:i');
        $deliveryInterval = new DateInterval('P1D');
        $this->dayTwoFormated=$date->add($deliveryInterval)->format('Y-m-d\TH:i');

        $this->receivingDate=$this->dayOneFormated;
        $this->deliveryDate=$this->dayTwoFormated;
        // $this->branches = Branch::get();

        $expire = Carbon::now()->addMinutes(10);

        $this->branches = Cache::remember('branches', $expire, function() {
            return Branch::get();
        });


    }

    public function render()
    {
        if($this->receivingDate >= $this->deliveryDate)
        {
            $this->dayTwoFormated= date('Y-m-d\TH:i', strtotime($this->receivingDate. ' + 1 days'));
            $this->deliveryDate= date('Y-m-d\TH:i', strtotime($this->receivingDate. ' + 1 days'));
        }
        return view('livewire.booking-model');
    }
    public function setCarId($id)
    {
        $this->car_id=$id;
    }
    public function booking($car_id)
    {
        if ($this->dervery_branch_id != null && $this->receiving_branch_id != null && $this->receivingDate != null && $this->deliveryDate != null )
         {
            $carInBranch =  CarsInStock::where('car_id',$car_id)->where('branch_id', $this->receiving_branch_id)->get();

            $this->region=Branch::find($this->receiving_branch_id)->code;
            $car_in_stock = CarsInStock::where('car_id',$car_id)->where('count','>',0)->whereHas('branch', function($q){
                $q->where('code', $this->region ?? 1);
            })->with('branch')->get();
            if ($carInBranch->count() > 0) {
                if ($carInBranch->first()->count > 0) {

                    if(!Auth()->check())
                    {
                        $current_url=url()->previous();
                        session()->push('redircitURl', '/booking?car_id='.$car_id.
                        '&receiving_branch='.$this->receiving_branch_id .
                        '&delivery_branch='.$this->dervery_branch_id .
                        '&receiving_date='.$this->receivingDate.
                        '&delivery_date='.$this->deliveryDate);
                        session(['log_in' => true]);
                        $this->dispatchBrowserEvent('notLogin');
                    }
                    else{
                        return redirect()->to('/booking?car_id='.$car_id.
                                                           '&receiving_branch='.$this->receiving_branch_id .
                                                           '&delivery_branch='.$this->dervery_branch_id .
                                                           '&receiving_date='.$this->receivingDate.
                                                           '&delivery_date='.$this->deliveryDate  );
                    }
                }else{
                    $branche_names = "";
                    foreach ($car_in_stock as $value) {
                        $branche_names .= " - " . $value->branch->name;
                    }
                    $carNotFound['title'] = "هذه السياره متوفره فقط في فروع ". $branche_names ;
                    if($car_in_stock->count() == 0)
                    {
                        $carNotFound['title'] = "هذه السياره غير متوفره الان " ;
                    }
                    $this->dispatchBrowserEvent('sweetalert', $carNotFound);
                }
            }else{
                $branche_names = "";
                foreach ($car_in_stock as $value) {
                    $branche_names .= " / " . $value->branch->name;
                }
                $carNotFound['title'] = "هذه السياره متوفره فقط في فروع ". $branche_names ;
                if($car_in_stock->count() == 0)
                {
                    $carNotFound['title'] = "هذه السياره غير متوفره الان " ;

                }

                $this->dispatchBrowserEvent('sweetalert', $carNotFound);
            }

        }
        else if($this->dervery_branch_id != null && $this->dervery_branch_id != 0){
            $errorData = [
                'title' => 'يرجي اختيار وقت الاستلام والتسليم',
                'type' => 'error',
            ];
            $this->dispatchBrowserEvent('sweetalert', $errorData);
        }
        else{

            $errorData = [
                'title' => 'يرجي اختيار فرع الاستلام والتسليم',
                'type' => 'error',
            ];
            $this->dispatchBrowserEvent('sweetalert', $errorData);

        }

    }
}
