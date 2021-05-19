<?php

namespace App\Http\Livewire;

use App\Models\AreaPricing;
use Livewire\Component;
use App\Models\Car;
use App\Models\Branch;
use App\Models\Order;
use App\Models\CarsInStock;
use App\Models\Custmerrequest;
use Carbon\Carbon;
use GuzzleHttp\Client;
use App\Payment\MasterCardPayment;
use Cookie;
use Illuminate\Support\Facades\Http;
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
    public $promotional_discount=0;
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
    public $visa_price=0;
    public $AreaPricing=0;
    public $nameOnCard;
    public $CardNumber;
    public $expiry_month;
    public $expiry_year;
    public $securityCode;
    protected $listeners = [
        'payment:cancelled' => 'paymentCancelled',
        'payment:complete' => 'paymentComplete',
        'openPayment' => 'openPayment'
    ];
    public $merchantID;
    public $merchantPassword;

    public function mount()
    {
        $this->car = Car::find($this->data['car_id']);
        $this->reciving_date=$this->data['receiving_date'];
        $this->delivery_date=$this->data['delivery_date'];

        $this->merchantID = config('BankPayment.merchantID');
        $this->merchantPassword  = config('BankPayment.merchantPassword');
        $offerLast = $this->car->offers->last();
        if ($offerLast) {
            if($offerLast->to->lt(now()))
            {
                $this->promotional_discount = 0;
            }
            else
            {
                if($offerLast->discount_type == "percentage")
                {
                    $this->promotional_discount = (($offerLast->discount_value /100) * ($this->car->price1));
                }
                else if($offerLast->discount_type == 'fixed')
                {
                    $this->promotional_discount = $offerLast->discount_value;
                }
            }
        }

        $this->start_date=$this->reciving_date;
        $this->end_date=$this->delivery_date;
        $this->delivery_date = Carbon::parse($this->delivery_date);
        $this->reciving_date = Carbon::parse($this->reciving_date);
        $this->diff = $this->delivery_date->diffInDays($this->reciving_date);
        $this->price = ($this->car->price1 * $this->diff) ;
        $this->receiving_branch = Branch::find($this->data['receiving_branch']);
        $this->delivery_branch = Branch::find($this->data['delivery_branch']);
        if ($this->receiving_branch->code != $this->delivery_branch->code) {
            $sAreaPricing = AreaPricing::where('region_id' ,$this->receiving_branch->code )->where('region_to_id',$this->delivery_branch->code)->first()  ;
            $this->AreaPricing =  $sAreaPricing ?  $sAreaPricing->price : 0 ;
        }


        $this->membership_discount = ((Auth()->user()->membership->rental_discount /100) * ($this->car->price1));
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
            $getOrderDetailsSandBox = MasterCardPayment::getOrderDetailsSandBox($orderID, $this->merchantID, $this->merchantPassword);
            if ($getOrderDetailsSandBox['result'] == "SUCCESS"  &&  $getOrderDetailsSandBox['status'] == "CAPTURED") {
                $this->order->update([
                    'payment_status' => $getOrderDetailsSandBox['result']
                ]);
                $this->currentStep = 5;
            }

            if ($this->order->payment_status == "SUCCESS") {
                $this->currentStep = 5 ;
            }else{
                if ($this->paymentType == "visa"   || $this->paymentType == "mada") {

                    $sessionID = MasterCardPayment::createSessionSandBox($orderID, $this->merchantID, $this->merchantPassword);
                    $totalPrice = $this->total;
                    $siteName = "test";
                    $this->paymentData = [
                        'merchant' => $this->merchantID,
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
        $this->visa_price=$visa_buy;
        }

        $this->price = ($this->car_price - $visa_buy ) + $features_price + $this->authorization_fee ;
        $this->total = $this->price + $this->AreaPricing - $this->membership_discount - $this->promotional_discount;
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
                        // $this->thirdStepSubmit();
                        $this->currentStep = 3;
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
            'nameOnCard' => ['required_if:paymentType,visa','sometimes','nullable', 'string','max:200'],
            'CardNumber' => ['required_if:paymentType,visa','sometimes','nullable', 'numeric','digits_between:10,20'],
            'expiry_month' => ['required_if:paymentType,visa','sometimes','nullable','max:2'],
            'expiry_year' => ['required_if:paymentType,visa','sometimes','nullable','max:2'],
            'securityCode' => ['required_if:paymentType,visa','sometimes','nullable','numeric','digits_between:2,4'],
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


            $orderID = $orderID;
            $orderData = [
                'orderID' => $orderID,
                'merchantID' => $this->merchantID,
                'merchantPassword' => $this->merchantPassword,
            ];
            $data = [
                'correlationId' => "123",
                'session' => [
                    'authenticationLimit' => 10,
                ]
            ];
            // $test = MasterCardPayment::createSessionSandBox();
            $response = Http::contentType("application/json")
            ->withBasicAuth('merchant.'.$this->merchantID, $this->merchantPassword)
            ->withHeaders([
                'Accept' => 'application/json'
            ])->post(config('BankPayment.ApiUrlTest'). '/merchant/'.$this->merchantID.'/session', $data)->json();
            $sessionID = $response;

            if ($sessionID['result'] == "SUCCESS") {

                $sessionID =   $sessionID['session']['id'];
                $orderData['sessionID'] = $sessionID ;
                $data = [
                    'sourceOfFunds' => [
                        "provided" => [
                            "card" => [
                                "nameOnCard" => $this->nameOnCard,
                                "number" => $this->CardNumber,
                                "expiry" => [
                                  "month" => $this->expiry_month,
                                  "year" => $this->expiry_year
                                ],
                                "securityCode" => $this->securityCode
                            ]
                        ]
                    ],
                ];
                $orderData['securityCode'] = $data['sourceOfFunds']['provided']['card']['securityCode'] ;


                $response = Http::contentType("application/json")
                ->withBasicAuth('merchant.'.$this->merchantID, $this->merchantPassword)
                ->withHeaders([
                    'Accept' => 'application/json'
                ])->put(config('BankPayment.ApiUrlTest'). '/merchant/'.$this->merchantID.'/session/'.$sessionID, $data)->json();

                if(isset($response['session']) && $response['session']['updateStatus'] == "SUCCESS"){
                    $sessionID =   $response['session']['id'];
                    $data = [
                        '3DSecure' => [
                            "authenticationRedirect" => [
                                "responseUrl" => route('api.payment.pay', [$orderID,$sessionID]),
                                "pageGenerationMode" => "SIMPLE"
                            ],
                        ],
                        "apiOperation" => "CHECK_3DS_ENROLLMENT",
                        "order" => [
                            "amount" =>  $this->total,
                            "currency" => "SAR"
                        ],
                        "session" => [
                            "id" =>  $sessionID,
                        ],
                    ];

                    $orderData['amount'] = $this->total;
                    $orderData['currency'] = "SAR";
                    $response = Http::contentType("application/json")
                    ->withBasicAuth('merchant.'.$this->merchantID, $this->merchantPassword)
                    ->withHeaders([
                        'Accept' => 'application/json'
                    ])->put(config('BankPayment.ApiUrlTest'). '/merchant/'.$this->merchantID.'/3DSecureId/3dsID_'.$orderID, $data)->json();
                    // dd($response , $sessionID );

                    if(isset($response['error']) ){
                        $errorInformationData = [
                            'title' => $response['error']['explanation'],
                            'type' => 'error',
                        ];
                        $this->dispatchBrowserEvent('sweetalert', $errorInformationData);
                    }else{
                        $htmlBodyContent = $response['3DSecure']['authenticationRedirect']['simple']['htmlBodyContent'];

                        $this->dispatchBrowserEvent('openPaymenthtmlBodyContent', $htmlBodyContent);
                        $this->currentStep =  4 ;

                    }


                }else{
                    $errorInformationData = [
                        'title' => $response['error']['explanation'],
                        'type' => 'error',
                    ];
                    $this->dispatchBrowserEvent('sweetalert', $errorInformationData);

                }


            }


        }else{

            $this->order->update([
                'payment_status' => "SUCCESS"
            ]);

            $smsText = "- تم حجز سيارة " . $this->car->name . " من خلال موقع ابو ذياب لتأجير السيارت رقم العمليه " . $this->order->id ;
            $smsPhone = "+966554001171";
            // $smsPhone = "+201012316954";

            $client = new Client();
            $res = $client->get('http://sms.netpowers.net/http/api.php?id=abudiyab&password=abudiyab1171&to='.$smsPhone.'&sender=ABUDIYAB&msg='.$smsText);
            $this->currentStep = 5;
        }

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

        $getOrderDetailsSandBox = MasterCardPayment::getOrderDetailsSandBox($orderID, $this->merchantID, $this->merchantPassword);


        if ($getOrderDetailsSandBox['result'] == "SUCCESS"  &&  $getOrderDetailsSandBox['status'] == "CAPTURED") {
            $this->order->update([
                'payment_status' => $getOrderDetailsSandBox['result']
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

            $smsText = "- تم حجز سيارة " . $this->car->name . " من خلال موقع ابو ذياب لتأجير السيارت رقم العمليه " . $this->order->id ;
            $smsPhone = "+966554001171";
            // $smsPhone = "+201012316954";

            $client = new Client();
            $res = $client->get('http://sms.netpowers.net/http/api.php?id=abudiyab&password=abudiyab1171&to='.$smsPhone.'&sender=ABUDIYAB&msg='.$smsText);

            $this->currentStep = 5 ;
        }else{
            if ($this->paymentType == "visa"   || $this->paymentType == "mada") {

                $sessionID = MasterCardPayment::createSessionSandBox($orderID, $this->merchantID, $this->merchantPassword);
                $totalPrice = $this->total;
                $siteName = "test";
                $this->paymentData = [
                    'merchant' => $this->merchantID,
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


                $smsText = "- تم حجز سيارة " . $this->car->name . " من خلال موقع ابو ذياب لتأجير السيارت رقم العمليه " . $this->order->id ;
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
        $this->authorization_fee=0;

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
