<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Car;
use App\Models\Branch;
use App\Models\Order;
use App\Models\CarsInStock;
use App\Models\Custmerrequest;
use Carbon\Carbon;
use GuzzleHttp\Client;
use App\Payment\MasterCardPayment;
use Settings;

class BookingSteps extends Component
{
    public $currentStep = 1;
    public $data ;
    public $diff ;
    public $car ;
    public $features_added = [];
    public $price;
    public $openPayment = false;
    public $isTermsandConditions = false;
    public $paymentData;
    public $js;
    public $order;
    public $delivery_date;
    public $reciving_date;
    public $order_id;
    public $receiving_branch;
    protected $queryString = ['order_id'];
    public $delivery_branch;
    public $paymentType;
    public $successMsg = '';
    public $selectedtypes;
    public $visa_buy=0;
    public $authorization_fee=0;
    public $start_date=0;
    public $end_date=0;
    public $membership_discount=0;
    public $promotional_discount=10;
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
    public $total=0;

    protected $listeners = [
        'payment:cancelled' => 'paymentCancelled',
        'payment:complete' => 'paymentComplete',
        'openPayment' => 'openPayment'
    ];


    public function mount()
    {
        $this->car = Car::find($this->data['car_id']);
        $this->reciving_date=$this->data['receiving_date'];
        $this->delivery_date=$this->data['delivery_date'];
        $this->start_date=$this->reciving_date;
        $this->end_date=$this->delivery_date;
        $this->delivery_date = Carbon::parse($this->delivery_date);
        $this->reciving_date = Carbon::parse($this->reciving_date);
        $this->diff = $this->delivery_date->diffInDays($this->reciving_date);
        $this->price = ($this->car->price1 * $this->diff) ;
        $this->receiving_branch = Branch::find($this->data['receiving_branch']);
        $this->delivery_branch = Branch::find($this->data['delivery_branch']);
        $this->membership_discount = ((Auth()->user()->membership->rental_discount /100) * ($this->car->price1));
        $this->promotional_discount = (($this->car->offers[0]->discount_value /100) * ($this->car->price1));
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
            $this->visa_buy =  $this->order->visa_buy ? 1 : 0;
            $this->car = $this->order->car;
            $this->paymentType = $this->order->payment_type;

            $orderID =  $this->order->id;
            // $merchantID = "TEST3000000721";
            // $merchantPassword = "0c7fb828291074dc52486465bbf18e69";
            $merchantID = "3000000721";
            $merchantPassword = "8c9e1db3899b93bd92348bc176cc109c";
            $getOrderDetailsSandBox = MasterCardPayment::getOrderDetailsSandBox($orderID, $merchantID, $merchantPassword);
            if ($getOrderDetailsSandBox['result'] == "SUCCESS"  &&  $getOrderDetailsSandBox['status'] == "CAPTURED") {
                $this->order->update([
                    'payment_status' => $getOrderDetailsSandBox['result']
                    // 'payment_data' => $getOrderDetailsSandBox['result']
                ]);
                $this->currentStep = 5;
            }
            // $orderAmount =
            // $RefundOrderByTransaction = MasterCardPayment::RefundOrderByTransaction($orderID, $merchantID, $merchantPassword , $this->order->price);
            // dd($getOrderDetailsSandBox );

            if ($this->order->payment_status == "SUCCESS") {
                $this->currentStep = 5 ;
            }else{
                if ($this->paymentType == "visa"   || $this->paymentType == "mada") {

                    $sessionID = MasterCardPayment::createSessionSandBox($orderID, $merchantID, $merchantPassword);
                    $totalPrice = $this->total;
                    $siteName = "test";
                    $this->paymentData = [
                        'merchant' => $merchantID,
                        'order_amount' => $totalPrice,
                        'order_currency' => config('BankPayment.currency'),
                        'order_id' => $orderID,
                        'session_id' => $sessionID,
                        'merchant_name' => $siteName,
                    ];
                    $this->openPayment = true ;
                    // $this->dispatchBrowserEvent('openPayment', $paymentData);
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
            if ($key == "home_delivery_price" ||$key == "intercity_price" ||$key == "baby_seat_price" ||$key == "navigation_price" ) {
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

        // $mandate = 3 ;
        $mandate = 0 ;
        $this->car_price = ($this->car->price1 * $this->diff);
        $this->features_price = $features_price;
        $visa_buy = 0;
        if ($this->visa_buy) {
        $visa_buy = $this->car_price * (Settings::get('visa_offer') / 100) ; //visa discount amount
        }

        $this->price = ($this->car_price - $visa_buy ) + $features_price + $this->authorization_fee ;
        $this->total = $this->price - $this->membership_discount - $this->promotional_discount;
        return view('livewire.booking-steps');
    }



    public function openPayment()
    {
        if ($this->openPayment) {
            $this->dispatchBrowserEvent('openPayment', $this->paymentData);
        }
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
        $this->authorization_fee=3;
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
        $Custmerrequest = Custmerrequest::where('user_id',auth()->id())->where('is_confirmed','confirmed')->orderBy('created_at', 'DESC')->first();
        $currentDate= now();
        if(isset($Custmerrequest->id_expiry_date) && isset($Custmerrequest->driver_id_expiry_date))
        {
            $idExpireDate= $Custmerrequest->id_expiry_date;
            $driverIdExpireDate= $Custmerrequest->driver_id_expiry_date;
        }
        $this->order = Order::updateOrCreate([
            'id' => $this->order ? $this->order->id : 0
        ],[
            'user_id' => Auth()->id(),
            'delivery_date' => $this->end_date,
            'reciving_date' => $this->start_date,
            'price' => $this->total,
            'status' => "pending",
            'days' => $this->diff,
            'features_added' => $this->features_added,
            'receiving_branch_id' => $this->receiving_branch->id,
            'delivery_branch' => $this->delivery_branch->id,
            'visa_buy' => $this->visa_buy ? 1 : 0,
            'car_id' => $this->car->id,
            'car_price' => $this->car_price,
            'membership_discount' => $this->membership_discount ,
            'promotional_discount' => $this->promotional_discount ,
            'authorization_fee' =>  $this->authorization_fee ,
        ]);

        if(!Auth()->check())
        {
            $current_url=url()->previous().'&order_id='.$this->order->id;
            session()->push('redircitURl', $current_url);
            $this->dispatchBrowserEvent('notLogin');
            $this->currentStep = 2;
        }else{
            if(isset($idExpireDate) && isset($driverIdExpireDate))
            {
                if($currentDate->lt($idExpireDate) && $currentDate->lt($driverIdExpireDate))
                {
                    if($this->visa_buy != 0 || $this->visa_buy != false ){
                        $this->paymentType = "visa";
                        $this->thirdStepSubmit();
                    }
                    else{
                        $this->currentStep = 3;
                    }
                }
                else{
                    $errorData = [
                        'title' => 'يرجي تحديث البيانات الشخصيه',
                        'type' => 'error',
                    ];
                    $this->dispatchBrowserEvent('sweetalert', $errorData);
                }
            }
            else
            {
                $errorInformationData = [
                    'title' => 'يرجي انتظار قبول البيانات',
                    'type' => 'error',
                ];
                $this->dispatchBrowserEvent('sweetalert', $errorInformationData);
            }

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
            'user_id' => Auth()->id(),
            'delivery_date' => $this->end_date,
            'reciving_date' => $this->start_date,
            'price' => $this->total,
            'status' => "pending",
            'payment_type' => $this->paymentType,
            'days' => $this->diff,
            'features_added' => $this->features_added,
            'receiving_branch_id' => $this->receiving_branch->id,
            'delivery_branch' => $this->delivery_branch->id,
            'visa_buy' => $this->visa_buy ? 1 : 0,
            'car_id' => $this->car->id,
            'car_price' => $this->car_price,
            'membership_discount' => $this->membership_discount ,
            'promotional_discount' => $this->promotional_discount ,
            'authorization_fee' =>  $this->authorization_fee ,
        ]);



        if ($this->paymentType == "visa" || $this->paymentType == "mada") {
            $orderID =  $this->order->id;
            $merchantID = "3000000721";
            $merchantPassword = "8c9e1db3899b93bd92348bc176cc109c";
            // $merchantID = "TEST3000000721";
            // $merchantPassword = "0c7fb828291074dc52486465bbf18e69";

            $sessionID = MasterCardPayment::createSessionSandBox($orderID, $merchantID, $merchantPassword);
            // dd($sessionID);
            // $createTransactionAuthorize = MasterCardPayment::createTransactionAuthorize($orderID, $merchantID, $merchantPassword,$sessionID);
            // dd($createTransactionAuthorize);

            $successURL = "completeCallback";
            $failURL = "errorCallback";
            $totalPrice = $this->total;
            // $totalPrice = 5;
            $siteName = "test";
            $siteAddress = "tetst";
            $siteEmail = "kamal.s.sroor@gmail.com";
            $sitePhone = "01012316954";
            $siteLogoURL = "https://abudiyab.test/";
            $this->paymentData = [
                'merchant' => $merchantID,
                'order_amount' => $totalPrice,
                'order_currency' => config('BankPayment.currency'),
                'order_id' => $orderID,
                'session_id' => $sessionID,
                'merchant_name' => $siteName,
            ];
            // dd($this->paymentData );
            $this->dispatchBrowserEvent('openPayment', $this->paymentData);
        }else{

            // 'عميلنا العزيز شكرا لتعاملك مع أبو ذياب طلبك قيد التنفيذ،رقم الحجز هو 14913,  للاستعلام عن الحجز فضلاً الاتصال بالرقم المجاني 920026600'
            $this->order->update([
                'payment_status' => "SUCCESS"
                // 'payment_data' => $getOrderDetailsSandBox['result']
            ]);

            $smsText = " تم حجز سيارة " . $this->car->name . " من خلال موقع ابو ذياب لتأجير السيارت رقم العمليه " . $this->order->id ;
            $smsPhone = "+966554001171";
            // $smsPhone = "+201012316954";

            $client = new Client();
            $res = $client->get('http://sms.netpowers.net/http/api.php?id=abudiyab&password=abudiyab1171&to='.$smsPhone.'&sender=ABUDIYAB&msg='.$smsText);
        }

        $this->currentStep = $this->paymentType == "visa"   || $this->paymentType == "mada" ? 4 : 5;
    }

    /**
     * Write code on Method
     */
    public function paymentCancelled()
    {
        $this->currentStep = 1;
    }


    /**
     * Write code on Method
     */
    public function paymentComplete()
    {

        $orderID =  $this->order->id;
        // $merchantID = "TEST3000000721";
        // $merchantPassword = "0c7fb828291074dc52486465bbf18e69";
        $merchantID = "3000000721";
        $merchantPassword = "8c9e1db3899b93bd92348bc176cc109c";
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

            $smsText = " تم حجز سيارة " . $this->car->name . " من خلال موقع ابو ذياب لتأجير السيارت رقم العمليه " . $this->order->id ;
            $smsPhone = "+966554001171";
            // $smsPhone = "+201012316954";

            $client = new Client();
            $res = $client->get('http://sms.netpowers.net/http/api.php?id=abudiyab&password=abudiyab1171&to='.$smsPhone.'&sender=ABUDIYAB&msg='.$smsText);

            $this->currentStep = 5 ;
        }else{
            if ($this->paymentType == "visa"   || $this->paymentType == "mada") {

                $sessionID = MasterCardPayment::createSessionSandBox($orderID, $merchantID, $merchantPassword);
                $totalPrice = $this->total;
                $siteName = "test";
                $this->paymentData = [
                    'merchant' => $merchantID,
                    'order_amount' => $totalPrice,
                    'order_currency' => config('BankPayment.currency'),
                    'order_id' => $orderID,
                    'session_id' => $sessionID,
                    'merchant_name' => $siteName,
                ];
                $this->dispatchBrowserEvent('openPayment', $this->paymentData);

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


                $smsText = " تم حجز سيارة " . $this->car->name . " من خلال موقع ابو ذياب لتأجير السيارت رقم العمليه " . $this->order->id ;
                $smsPhone = "+966554001171";
                // $smsPhone = "+201012316954";

                $client = new Client();
                $res = $client->get('http://sms.netpowers.net/http/api.php?id=abudiyab&password=abudiyab1171&to='.$smsPhone.'&sender=ABUDIYAB&msg='.$smsText);

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
        if($step != 0)
        {
            $this->currentStep = $step;
        }
        else{
            redirect(route('front.fleet'));
        }
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
