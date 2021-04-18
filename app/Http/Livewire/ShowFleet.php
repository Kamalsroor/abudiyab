<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Branch;
use App\Models\Car;
use App\Models\Category;
use App\Models\CarsInStock;
use App\Models\addToFavorite;
use Auth;
use Carbon\Carbon;
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
        'addToFavorite' => 'addToFavorite'
    ];
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
        $dayPlusOne=Carbon::today()->add(1, 'day');
        $dayPlusTwo=Carbon::today()->add(2, 'day');
        $this->dayOneFormated=$dayPlusOne->format('Y-m-d');
        $this->dayTwoFormated=$dayPlusTwo->format('Y-m-d');
        $this->receivingDate=$this->dayOneFormated;
        $this->deliveryDate=$this->dayTwoFormated;

    }
    public function render()
    {
        if($this->receivingDate < $this->dayOneFormated)
        {
            $this->receivingDate= $this->dayOneFormated;
        }
        if($this->deliveryDate < $this->dayTwoFormated)
        {
            $this->deliveryDate= $this->dayTwoFormated;
        }
        if($this->receivingDate > $this->deliveryDate)
        {
            $this->deliveryDate= date('Y-m-d', strtotime($this->receivingDate. ' + 1 days'));
        }
        if ($car_id = session()->get('car_id') && Auth()->check()) {
            # code...
            $addToFavorite = addToFavorite::create([
                'car_id' => $car_id ,
                'user_id' =>  Auth()->id(),
            ]);

            // $errorData = [
            //     'title' => 'تم اضافة السياره للمفضله بنجاح',
            //     'type' => 'success',
            // ];

            $this->isAlert=true;
            session()->forget('car_id');
            // $this->dispatchBrowserEvent('sweetalert', $errorData);
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
            return Category::filter()->get();
        });

        $regionSelect=Branch::Region;
        $this->dispatchBrowserEvent('changeRender');

        return view('livewire.show-fleet',[
            'cars' => $car,
            'regionSelect' => $regionSelect,
        ]);
    }

    public function search()
    {

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
    public function showBrnaches()
    {
    }
    public function booking($car_id)
    {

        if ($this->dervery_branch_id != null && $this->dervery_branch_id != 0 && $this->receivingDate != null && $this->deliveryDate != null )
         {
            $carInBranch =  CarsInStock::where('car_id',$car_id)->where('branch_id', $this->receiving_branch_id)->get();
            $car_in_stock = CarsInStock::where('car_id',$car_id)->where('count','>',0)->whereHas('branch', function($q){
                $q->where('code', $this->region ?? 1);
            })->with('branch')->get();
            if ($carInBranch->count() > 0) {
                if ($carInBranch->first()->count > 0) {
                 return redirect()->to('/booking?car_id='.$car_id.
                                                    '&receiving_branch='.$this->receiving_branch_id .
                                                    '&delivery_branch='.$this->dervery_branch_id .
                                                    '&receiving_date='.$this->receivingDate.
                                                    '&delivery_date='.$this->deliveryDate  );
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
                'text' => 'test',
                'type' => 'error',
            ];
            $this->dispatchBrowserEvent('sweetalert', $errorData);
        }
        else{

            $errorData = [
                'title' => 'يرجي اختيار فرع الاستلام والتسليم',
                'text' => 'test',
                'type' => 'error',
            ];
            $this->dispatchBrowserEvent('sweetalert', $errorData);


        }

    }

    public function Category($cat)
    {
        dd($cat);
    }
}

















