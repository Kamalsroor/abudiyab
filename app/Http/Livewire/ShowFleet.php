<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Branch;
use App\Models\Car;
use App\Models\Category;
use App\Models\CarsInStock;
use App\Models\addToFavorite;
use App\Models\Order;
use Auth;
use Carbon\Carbon;
use DateInterval;
use DateTime;
use Illuminate\Support\Facades\Date;

class ShowFleet extends Component
{
    use WithPagination;
    public $searchTerm;
    public $branches;
   // public $cars;
    public $categories;
    protected $queryString = ['searchTerm','priceRange'];
    public $region;
    public $priceRange;
    public $carArraySelect;
    public $dervery_branches;
    public $dervery_branch_id;
    public $receiving_branch_id;
    public $receivingDate;
    public $deliveryDate;
    public $filterPriceCategory='DESC';
    public $filterCategory= [];
    public $priceRangeNewStart , $priceRangeNewEnd ;
    protected $listeners = [
        'addToFavorite' => 'addToFavorite',
        'redirectToBookingSteps' => 'redirectToBookingSteps'
    ];
    public $toBooking=false;
    public $rec_date;
    public $del_date;
    public $isAlert=false;
    public $dayOneFormated='';
    public $dayTwoFormated='';
    public $addedItems=[];
    public $addCarId=false;
    public $carAdded=[];

    public function mount()
    {
        $date = new DateTime();
        $recievingInterval = new DateInterval('P1D');
        $this->dayOneFormated=$date->add($recievingInterval)->format('Y-m-d\TH:i');
        $deliveryInterval = new DateInterval('P1D');
        $this->dayTwoFormated=$date->add($deliveryInterval)->format('Y-m-d\TH:i');

        $this->receivingDate=$this->dayOneFormated;
        $this->deliveryDate=$this->dayTwoFormated;

        // 2021-04-19T06:47:54
    }
    public function render()
    {
        if(Auth()->check())
        {
            if(session()->get('log_in'))
            {
                session()->forget('log_in');
                $this->toBooking=true;
            }
        }
        if($this->receivingDate >= $this->deliveryDate)
        {
            $this->dayTwoFormated= date('Y-m-d\TH:i', strtotime($this->receivingDate. ' + 1 days'));
            $this->deliveryDate= date('Y-m-d\TH:i', strtotime($this->receivingDate. ' + 1 days'));
        }
        if ($car_id = session()->get('car_id') && Auth()->check()) {
            # code...
            $addToFavorite = addToFavorite::create([
                'car_id' => session()->get('car_id') ,
                'user_id' =>  Auth()->id(),
            ]);
            session()->forget('car_id');
        }

        $priceRangeNew = null ;
        $this->priceRangeNewStart = $this->priceRangeNewStart == null ? 10  : $this->priceRangeNewStart;
        $this->priceRangeNewEnd = $this->priceRangeNewEnd == null ? 3000 : $this->priceRangeNewEnd;
            if ($this->priceRange != null) {
                $priceRangeNew = explode (  "," , $this->priceRange );
                $this->priceRangeNewStart = $priceRangeNew[0];
                $this->priceRangeNewEnd = $priceRangeNew[1];
            }

        $car_in_stock = [];
        if ($this->searchTerm) {
            $car_in_stock = CarsInStock::where('car_id',$this->searchTerm)->where('count','>',0)->pluck('branch_id')->toArray();
        }
        $this->branches = Branch::where(function($q) {
            if($this->region){
                $q->where('code' , $this->region);
            }
        })->get();
        $this->dervery_branches = Branch::where(function($q) use($car_in_stock) {
            if($this->region){
                $q->where('code' , $this->region);
            }
            if( $this->searchTerm != null){
                $q->whereIn('id' , $car_in_stock);
            }
        })->get();
        $this->carArraySelect = Car::all();
        $car = Car::where(function($q) use($priceRangeNew) {
            if ($this->searchTerm) {
                $q->where('id' ,$this->searchTerm);
            }
            if ($priceRangeNew) {
                $q->whereBetween('price1' ,$priceRangeNew);
            }

        })->where(function($q) {
            if($this->filterCategory){
                $q->whereIn('category_id' , $this->filterCategory);
            }
        });
        if ($this->filterPriceCategory == "modelasc") {
            $car= $car->orderBy('model','ASC')->paginate(7);
        }elseif($this->filterPriceCategory == "modeldes"){
            $car= $car->orderBy('model','DESC')->paginate(7);

        }else{
            $car = $car->orderBy('price1',$this->filterPriceCategory)->paginate(7);
        }

        $this->categories = cache()->remember('categories', 2*4, function () {
            return Category::filter()->orderBy('orderBy_numper')->get();
        });

        $regionSelect=Branch::Region;
        $this->dispatchBrowserEvent('changeRender');
        if(Auth()->check())
        {
            $i=0;
            foreach($car as $item )
            {
                $car[$i]->price1=$item->price1 - ((Auth()->user()->membership->rental_discount /100) * $item->price1);
                $i++;
            }
        }
        return view('livewire.show-fleet',[
            'cars' => $car,
            'regionSelect' => $regionSelect,
        ]);
    }

    public function search()
    {

    }
    public function dehydrate(){
        $this->dispatchBrowserEvent('filterCategory',$this->filterCategory);

    }
    public function addToFavorite($id)
    {
        if (!Auth()->check()) {
            $current_url=url()->previous();
            session()->push('redircitURl', $current_url);
            session(['car_id' => $id]);

            $this->dispatchBrowserEvent('notLogin');
        }else{
            $isAdded=addToFavorite::where('user_id',Auth()->id())->where('car_id',$id)->get();
            if(!count($isAdded))
            {

                $addToFavorite = addToFavorite::create([
                    'car_id' => $id ,
                    'user_id' =>  Auth()->id(),
                ]);
                // $this->carAdded[$id]=true;
            }
            else
            {
                    $isAdded->each->delete();
            }
        }
    }
    public function redirectToBookingSteps()
    {
        return redirect()->to(session()->get('redirect'));
    }
    public function booking($car_id)
    {

            if ($this->dervery_branch_id != null && $this->receiving_branch_id != 0 && $this->receivingDate != null && $this->deliveryDate != null )
            {
                $carInBranch =  CarsInStock::where('car_id',$car_id)->where('branch_id', $this->receiving_branch_id)->get();
                $car_in_stock = CarsInStock::where('car_id',$car_id)->where('count','>',0)->whereHas('branch', function($q){
                    $q->where('code', $this->region ?? 1);
                })->with('branch')->get();
                if ($carInBranch->count() > 0) {
                    if ($carInBranch->first()->count > 0) {
                        if(!Auth()->check())
                        {
                            $current_url=url()->previous();
                            session()->push('redircitURl', $current_url);
                            session(['log_in' => true]);
                            session(['redirect' => '/booking?car_id='.$car_id.
                            '&receiving_branch='.$this->receiving_branch_id .
                            '&delivery_branch='.$this->dervery_branch_id .
                            '&receiving_date='.$this->receivingDate.
                            '&delivery_date='.$this->deliveryDate]);

                            $this->dispatchBrowserEvent('notLogin');
                        }
                        else{
                            $runindOrder=Order::where('user_id',Auth()->id())->orderBy('created_at','desc')->first();
                            if(!isset($runindOrder) || $runindOrder->status == 'done')
                            {
                                session(['redirect' => '/booking?car_id='.$car_id.
                                '&receiving_branch='.$this->receiving_branch_id .
                                '&delivery_branch='.$this->dervery_branch_id .
                                '&receiving_date='.$this->receivingDate.
                                '&delivery_date='.$this->deliveryDate]);
                                $modelData = [
                                    'title' => 'أو مشابهة - ماذا تعني؟',
                                    'body' => 'تلتزم شركة ابو ذياب بتوفير نفس الموديل وسنة الصنع التي قمت باختيارها وقت الحجز و في حال عدم توفر السيارة المختارة عند تنفيذ الحجز تلتزم ابو ذياب بتوفير سيارة من نفس الفئة ونفس سنة الصنع او سنة صنع اعلى، وفي حال عدم توفر سيارة من نفس الفئة يتم الترقية لفئة اعلى بدون اي تكاليف أضافية',
                                    'booking'=>1
                                ];
                                $this->dispatchBrowserEvent('fleetalert',$modelData);
                            }
                            else{

                                $modelData = [
                                    'title' => 'غير متاح الحجز في الوقتي الحالي بسبب وجود حجز سابق تحت الإجراء
                                    برجاء التواصل علي الرقم الموحد
                                    920026600',
                                    'body' => ''
                                ];
                                $this->dispatchBrowserEvent('fleetalert',$modelData);
                            }

                        }
                    }else{
                        $branche_names = [];
                        foreach ($car_in_stock as $value) {
                            $branche_names[] =  $value->branch->name;
                        }
                        $carNotFound['title'] = "هذه السياره متوفره فقط في فروع " ;
                        if($car_in_stock->count() == 0)
                        {
                            $carNotFound['title'] = "هذه السياره غير متوفره الان " ;
                        }
                        $carNotFound['body']=$branche_names;

                        $this->dispatchBrowserEvent('fleetalert', $carNotFound);
                    }
                }else{
                    $branche_names = [];
                    foreach ($car_in_stock as $value) {
                        $branche_names[] = $value->branch->name;
                    }
                    $carNotFound['title'] = "هذه السياره متوفره فقط في فروع " ;
                    $carNotFound['body']=$branche_names;
                    if($car_in_stock->count() == 0)
                    {
                        $carNotFound['title'] = "هذه السياره غير متوفره الان " ;
                    }

                    $this->dispatchBrowserEvent('fleetalert', $carNotFound);
                }

            }
            else if($this->dervery_branch_id != null && $this->dervery_branch_id != 0){
                $errorData = [
                    'title' => 'يرجي اختيار وقت الاستلام والتسليم',
                    'body' => '',
                ];
                $this->dispatchBrowserEvent('fleetalert', $errorData);
            }
            else{

                $errorData = [
                    'title' => 'يرجي اختيار فرع الاستلام والتسليم',
                    'body' => '',
                ];
                $this->dispatchBrowserEvent('fleetalert', $errorData);


            }

    }

    public function Category($cat)
    {
        dd($cat);
    }
}

















