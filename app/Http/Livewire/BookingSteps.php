<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Car;
use App\Models\Branch;
use App\Models\Order;
use App\Models\CarsInStock;
use Carbon\Carbon;
use App\Payment\MasterCardPayment;
class BookingSteps extends Component
{
    public $currentStep = 1;
    public $data ;
    public $diff ;
    public $car ;
    public $features_added = [];
    public $price;
    public $js;
    public $order;
    public $order_id;
    public $receiving_branch;
    protected $queryString = ['order_id'];
    public $delivery_branch;
    public $paymentType;
    public $successMsg = '';
    public $selectedtypes;
    public $visa_buy=0;
    public $start_date=0;
    public $end_date=0;
    public $featureArray=[
        'baby_seat_price'=>'مقعد اطفال',
        'shield_price'=>'درع أبو ذياب',
        'insurance_price'=>'تأمين مميز',
        'open_kilometers_price'=>'كيلو متر مفتوح',
        'navigation_price'=>'نظام الملاحة',
        'home_delivery_price'=>'خدمه التوصيل للمنزل',
        'intercity_price'=>'شحن بين المدن'
    ];
    public $addedFeatureArray=[];
    public $features_price=0;
    public $car_price=0;

    protected $listeners = [
        'payment:cancelled' => 'paymentCancelled',
        'payment:complete' => 'paymentComplete'
    ];


    public function mount()
    {

        $this->car = Car::find($this->data['car_id']);
        $reciving_date=$this->data['receiving_date'];
        $delivery_date=$this->data['delivery_date'];
        $this->start_date=$reciving_date;
        $this->end_date=$delivery_date;

        $delivery_date = Carbon::parse($delivery_date);
        $reciving_date = Carbon::parse($reciving_date);
        $this->diff = $delivery_date->diffInDays($reciving_date);
        $this->price = ($this->car->price1 * $this->diff) ;
        $this->receiving_branch = Branch::find($this->data['receiving_branch']);
        $this->delivery_branch = Branch::find($this->data['delivery_branch']);
    }



    public function render()
    {


        if ($this->order_id == null) {
            $this->order_id = $this->order ? $this->order->id : null ;
        }

        if ($this->order == null && $this->order_id != null) {
            $this->order = Order::find($this->order_id);
            $this->features_added = $this->order->features_added;
            $this->start_date = $this->order->delivery_date;
            $this->end_date = $this->order->reciving_date;
            $this->visa_buy =  $this->order->visa_buy ? 0.15 : 0;
            $this->car = $this->order->car;
            $this->paymentType = $this->order->payment_type;

            $orderID =  $this->order->id;
            $merchantID = "TEST3000000721";
            $merchantPassword = "0c7fb828291074dc52486465bbf18e69";
            $getOrderDetailsSandBox = MasterCardPayment::getOrderDetailsSandBox($orderID, $merchantID, $merchantPassword);
            if ($getOrderDetailsSandBox['result'] == "SUCCESS"  &&  $getOrderDetailsSandBox['status'] == "CAPTURED") {
                $this->order->update([
                    'payment_status' => $getOrderDetailsSandBox['result']
                    // 'payment_data' => $getOrderDetailsSandBox['result']
                ]);
                $this->currentStep = 5;
            }
            if ($this->order->payment_status == "SUCCESS") {
                $this->currentStep = 5 ;
            }else{
                if ($this->paymentType == "visa"   || $this->paymentType == "mada") {

                    $sessionID = MasterCardPayment::createSessionSandBox($orderID, $merchantID, $merchantPassword);
                    $totalPrice = $this->price;
                    $siteName = "test";
                    $paymentData = [
                        'merchant' => $merchantID,
                        'order_amount' => $totalPrice,
                        'order_currency' => config('BankPayment.currency'),
                        'order_id' => $orderID,
                        'session_id' => $sessionID,
                        'merchant_name' => $siteName,
                    ];
                    $this->dispatchBrowserEvent('say-goodbye', $paymentData);

                    $this->currentStep = 4 ;
                }elseif($this->paymentType == "cash"   || $this->paymentType == "points"){
                    $this->order->update([
                        'payment_status' => "SUCCESS",
                    ]);
                    $this->currentStep = 5 ;
                }
            }
        }


        $features_price = 0 ;
        foreach ($this->features_added as $key => $value) {
            if ($key == "home_delivery_price" ||$key == "intercity_price" ) {
                $features_price += $value;
            }else{
                $features_price += $value * $this->diff;
            }
            if($value==0)
            {
                unset($this->addedFeatureArray[$key]);
                unset($this->features_added[$key]);
            }
            if($value!='' || $value!=0)
            {
                array_push($this->addedFeatureArray,$key);
            }
        }
        if($this->visa_buy==0.15)
        {
            $this->visa_buy=$this->visa_buy*$this->car->price1*$this->diff;
        }

        // $mandate = 3 ;
        $mandate = 0 ;
        $this->car_price=($this->car->price1 * $this->diff);
        $this->features_price=$features_price;
        $this->price = (($this->car->price1 * $this->diff)+$mandate-$this->visa_buy) + $features_price;
        return view('livewire.booking-steps');
    }



    /**
     * Write code on Method
     */
    public function firstStepSubmit()
    {
        // $validatedData = $this->validate([
        //     'name' => 'required',
        //     'price' => 'required|numeric',
        //     'detail' => 'required',
        // ]);
        $this->currentStep = 2;


    }

    /**
     * Write code on Method
     */
    public function secondStepSubmit()
    {
        // $validatedData = $this->validate([
        //     'status' => 'required',
        // ]);
        if(Auth()->user()== null)
        {
            $this->dispatchBrowserEvent('notLogin');
        }
        $this->order = Order::updateOrCreate([
            'id' => $this->order ? $this->order->id : 0
        ],[
            'delivery_date' => $this->start_date,
            'reciving_date' => $this->end_date,
            'price' => $this->price,
            'days' => $this->diff,
            'features_added' => $this->features_added,
            'receiving_branch_id' => $this->receiving_branch->id,
            'delivery_branch' => $this->delivery_branch->id,
            'visa_buy' => $this->visa_buy ? 1 : 0,
            'car_id' => $this->car->id,
        ]);
        if($this->visa_buy != 0 || $this->visa_buy != false ){
             $this->paymentType = "visa";
             $this->thirdStepSubmit();
        }else{
            $this->currentStep = 3;
        }
    }

    public function addedFeature(){
        // dd($this->addedFeatureArray);
    }
    public function thirdStepSubmit()
    {
        $validatedData = $this->validate([
            'paymentType' => 'required',
        ]);


        $this->order = $this->order->updateOrCreate([
            'id' => $this->order ? $this->order->id : 0
        ],[
            'delivery_date' => $this->start_date,
            'reciving_date' => $this->end_date,
            'price' => $this->price,
            'payment_type' => $this->paymentType,
            'days' => $this->diff,
            'features_added' => $this->features_added,
            'receiving_branch_id' => $this->receiving_branch->id,
            'delivery_branch' => $this->delivery_branch->id,
            'visa_buy' => $this->visa_buy ? 1 : 0,
            'car_id' => $this->car->id,
        ]);




        if ($this->paymentType == "visa" || $this->paymentType == "mada") {
            $orderID =  $this->order->id;
            $merchantID = "TEST3000000721";
            $merchantPassword = "0c7fb828291074dc52486465bbf18e69";
            $sessionID = MasterCardPayment::createSessionSandBox($orderID, $merchantID, $merchantPassword);
            $successURL = "completeCallback";
            $failURL = "errorCallback";
            $totalPrice = $this->price;
            $siteName = "test";
            $siteAddress = "tetst";
            $siteEmail = "kamal.s.sroor@gmail.com";
            $sitePhone = "01012316954";
            $siteLogoURL = "https://abudiyab.test/";
            $paymentData = [
                'merchant' => $merchantID,
                'order_amount' => $totalPrice,
                'order_currency' => config('BankPayment.currency'),
                'order_id' => $orderID,
                'session_id' => $sessionID,
                'merchant_name' => $siteName,
            ];
            $this->dispatchBrowserEvent('say-goodbye', $paymentData);
        }


        $this->currentStep = $this->paymentType == "visa"   || $this->paymentType == "mada" ? 4 : 5;
    }

    /**
     * Write code on Method
     */
    public function paymentCancelled()
    {
        $this->currentStep = 3;
    }


    /**
     * Write code on Method
     */
    public function paymentComplete()
    {

        $orderID =  $this->order->id;
        $merchantID = "TEST3000000721";
        $merchantPassword = "0c7fb828291074dc52486465bbf18e69";
        $getOrderDetailsSandBox = MasterCardPayment::getOrderDetailsSandBox($orderID, $merchantID, $merchantPassword);
        if ($getOrderDetailsSandBox['result'] == "SUCCESS"  &&  $getOrderDetailsSandBox['status'] == "CAPTURED") {
            $this->order->update([
                'payment_status' => $getOrderDetailsSandBox['result']
                // 'payment_data' => $getOrderDetailsSandBox['result']
            ]);
            $this->currentStep = 5;
        }
        if ($this->order->payment_status == "SUCCESS") {

            $car_in_stock = CarsInStock::where('car_id',$this->order->car_id)->where('branch_id' , $this->order->delivery_branch )->get();
            if ($car_in_stock->count() > 0) {
                $car_in_stock = $car_in_stock->first();
                $car_in_stock->count --;
                $car_in_stock->save();
            }

            $this->currentStep = 5 ;
        }else{
            if ($this->paymentType == "visa"   || $this->paymentType == "mada") {

                $sessionID = MasterCardPayment::createSessionSandBox($orderID, $merchantID, $merchantPassword);
                $totalPrice = $this->price;
                $siteName = "test";
                $paymentData = [
                    'merchant' => $merchantID,
                    'order_amount' => $totalPrice,
                    'order_currency' => config('BankPayment.currency'),
                    'order_id' => $orderID,
                    'session_id' => $sessionID,
                    'merchant_name' => $siteName,
                ];
                $this->dispatchBrowserEvent('say-goodbye', $paymentData);

                $this->currentStep = 4 ;
            }else{
                $this->order->update([
                    'payment_status' => "SUCCESS",
                ]);

                $car_in_stock = CarsInStock::where('car_id',$this->order->car_id)->where('branch_id' , $this->order->delivery_branch )->get();
                if ($car_in_stock->count() > 0) {
                    $car_in_stock = $car_in_stock->first();
                    $car_in_stock->count --;
                    $car_in_stock->save();
                }



                $this->currentStep = 5 ;
            }
        }


        // $this->currentStep = 5;
    }
    /**
     * Write code on Method
     */
    public function back($step)
    {
        $this->currentStep = $step;
    }

    /**
     * Write code on Method
     */
    public function clearForm()
    {
        $this->name = '';
        $this->price = '';
        $this->detail = '';
        $this->status = 1;
    }
}
