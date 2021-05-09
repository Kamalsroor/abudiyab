<?php

namespace App\Payment;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class MasterCardPayment extends Controller
{
    /*
	*
	*	Initialize Payment Request Properties.
	*
	*/

	/*
	*	Merchant ID in QNB Payment System.
	*/
	private static $merchantID;

	/*
	*	Merchant Password in QNB Payment System.
	*/
	private static $merchantPassword;

	/*
	*	Order ID in Your System.
	*/
	private static $orderID;

	/*
	*	Total Price of Order in Your System.
	*/
	private static $totalPrice;

	/*
	*	Session ID Order Created in Your System.
	*/
	private static $sessionID;

	/*
	*	Site Name for Your System.
	*/
	private static $siteName;

	/*
	*	Site Address for Your System.
	*/
	private static $siteAddress;

	/*
	*	Site Email for Your System.
	*/
	private static $siteEmail;

	/*
	*	Site Phone for Your System.
	*/
	private static $sitePhone;

	/*
	*	Site Logo for Your System.
	*/
	private static $siteLogoURL;

	/*
	*	The Configured Merchant ID from UPG
	*/
	private static $mID;

	/*
	*	The Configured Terminal ID from UPG for the Merchant.
	*/
	private static $tID;

	/*
	*	Upon completion of the Request Success Payment, you will be redirect to this URL.
	*/
	private static $successURL;

	/*
	*	Upon completion of the Request Failer Payment, you will be redirect to this URL.
	*/
	private static $failURL;

	/*
	*	Your Secure Hash key of Your Account in QNB.
	*/
	private static $secureHashkey;

	/*
	*	Create Session SandBox for Payment via MasterCard Or Visa
	*/
	public static function createSessionSandBox($orderID, $merchantID, $merchantPassword)
	{


		self::$orderID = $orderID;
		self::$merchantID = $merchantID;
		self::$merchantPassword = $merchantPassword;

        $data = [
			'correlationId' => "123",
			'session' => [
				'authenticationLimit' => 10,
            ]
		];

        // $test = MasterCardPayment::createSessionSandBox();
        $response = Http::contentType("application/json")
        ->withBasicAuth('merchant.'.self::$merchantID, self::$merchantPassword)
        ->withHeaders([
            'Accept' => 'application/json'
        ])->post(config('BankPayment.ApiUrl'). '/merchant/'.self::$merchantID.'/session', $data)->json();

        self::$sessionID = $response;

        if (self::$sessionID['result'] == "SUCCESS") {
            # code...
            return self::$sessionID['session']['id'];
        }
	}

	/*
	*	Create Session SandBox for Payment via MasterCard Or Visa
	*/
	public static function createTransactionAuthorize($orderID, $merchantID, $merchantPassword , $sessionID)
	{


		self::$orderID = $orderID;
		self::$merchantID = $merchantID;
		self::$merchantPassword = $merchantPassword;
        // PAY
        // 'apiOperation' => "VERIFY",
        // 'apiOperation' => "AUTHORIZE",
        // 'apiOperation' => "CAPTURE",
        $data = [
			'apiOperation' => "AUTHORIZE",
			'order' => [
				'amount' => 10,
				'currency' => "SAR"
            ],
            'session' => [
                'id' => $sessionID,
            ],
            'sourceOfFunds' => [
                'type' => 'CARD',
                'provided' => [
                    'card' => [
                        'nameOnCard' => 'kamal salah',
                        'number' => '5297411991746553',
                        'expiry' => [
                            'month' => '06',
                            'year' => '23',
                        ],
                        'securityCode' => '578',
                    ],

                ],
            ]
		];


   

        $response = Http::contentType("application/json")
        ->withBasicAuth('merchant.'.self::$merchantID, self::$merchantPassword)
        ->withHeaders([
            'Accept' => 'application/json'
        ])->put(config('BankPayment.ApiUrl'). '/merchant/'.self::$merchantID.'/order/'.self::$orderID.'/transaction/1088', $data)->json();

        self::$sessionID = $response;
        return self::$sessionID ;
        // if (self::$sessionID['result'] == "SUCCESS") {
        //     # code...
        //     return self::$sessionID['session']['id'];
        // }
	}

	/*
	*	Create Session Live for Payment via MasterCard Or Visa
	*/
	public static function createSessionTest($orderID, $merchantID, $merchantPassword)
	{
		self::$orderID = $orderID;
		self::$merchantID = $merchantID;
		self::$merchantPassword = $merchantPassword;

        $data = [
			'apiOperation' => config('BankPayment.apiOperation'),
			'interaction' => [
                'operation' => 'PURCHASE'
            ],
			'order' => [
				'id' => self::$orderID,
				'currency' => config('BankPayment.currency')
			]
		];


        // $test = MasterCardPayment::createSessionSandBox();
        $response = Http::contentType("application/json")
        ->withBasicAuth('merchant.'.self::$merchantID, self::$merchantPassword)
        ->withHeaders([
            'Accept' => 'application/json'
        ])->post(config('BankPayment.ApiUrl'). '/merchant/'.self::$merchantID.'/session', $data)->json();

        self::$sessionID = $response;

        if (self::$sessionID['result'] == "SUCCESS") {
            # code...
            return self::$sessionID['session']['id'];
        }
	}

	/*
	*	Create SandBox Payment via MasterCard Or Visa
	*/
	public static function createPaymentSandBox($successURL, $failURL, $merchantID, $orderID, $totalPrice, $sessionID, $siteName, $siteAddress, $siteEmail, $sitePhone, $siteLogoURL)
	{
		self::$successURL = $successURL;
		self::$failURL = $failURL;
		self::$orderID = $orderID;
		self::$merchantID = $merchantID;
		self::$totalPrice = $totalPrice;
		self::$sessionID = $sessionID;
		self::$siteName = $siteName;
		self::$siteAddress = $siteAddress;
		self::$siteEmail = $siteEmail;
		self::$sitePhone = $sitePhone;
        self::$siteLogoURL = $siteLogoURL;

		// $js = '<script src="'.config('BankPayment.checkOutSandBoxUrl').'" data-error="'.self::$failURL.'" data-complete="'.self::$successURL.'"></script>';

		$js = '<script type="text/javascript">$(window).on("load", function() {Checkout.showLightbox();});';
		$js .= "Checkout.configure({merchant: '".self::$merchantID."',order: {amount: function() {return '".self::$totalPrice."';},currency: '".config('BankPayment.currency')."',description: 'Order Number: ".self::$orderID."',id: '".self::$orderID."'},session: {id: '".self::$sessionID."'},interaction: {merchant: {name: '".self::$siteName."',address: {line1: '".self::$siteAddress."'},email  : '".self::$siteEmail."',phone  : '".self::$sitePhone."',logo   : '".self::$siteLogoURL."'},locale : 'en_US',theme : 'default',}});</script>";

		return $js;
	}

	/*
	*	Create Live Payment via MasterCard Or Visa
	*/
	public static function createPaymentLive($successURL, $failURL, $merchantID, $orderID, $totalPrice, $sessionID, $siteName, $siteAddress, $siteEmail, $sitePhone, $siteLogoURL)
	{
		self::$successURL = $successURL;
		self::$failURL = $failURL;
		self::$orderID = $orderID;
		self::$merchantID = $merchantID;
		self::$totalPrice = $totalPrice;
		self::$sessionID = $sessionID;
		self::$siteName = $siteName;
		self::$siteAddress = $siteAddress;
		self::$siteEmail = $siteEmail;
		self::$sitePhone = $sitePhone;
		self::$siteLogoURL = $siteLogoURL;

		$js = '<script src="'.config('BankPayment.checkOutLiveUrl').'" data-error="'.self::$failURL.'" data-complete="'.self::$successURL.'"></script>';

		$js .= '<script type="text/javascript">$(window).on("load", function() {Checkout.showLightbox();});';

		$js .= "Checkout.configure({merchant: '".self::$merchantID."',order: {amount: function() {return '".self::$totalPrice."';},currency: 'EGP',description: 'Order Number: ".self::$orderID."',id: '".self::$orderID."'},session: {id: '".self::$sessionID."'},interaction: {merchant: {name: '".self::$siteName."',address: {line1: '".self::$siteAddress."'},email  : '".self::$siteEmail."',phone  : '".self::$sitePhone."',logo   : '".self::$siteLogoURL."'},locale : 'en_US',theme : 'default',}});</script>";

		return $js;
	}

	/*
	*	Get Order Details SandBox for Payment via MasterCard Or Visa
	*/
	public static function getOrderDetailsSandBox($orderID, $merchantID, $merchantPassword)
	{
		self::$orderID = $orderID;
		self::$merchantID = $merchantID;
		self::$merchantPassword = $merchantPassword;

        $response = Http::contentType("application/json")
        ->withBasicAuth('merchant.'.self::$merchantID, self::$merchantPassword)
        ->withHeaders([
            'Accept' => 'application/json'
        ])->get(config('BankPayment.ApiUrl'). '/merchant/'.self::$merchantID.'/order/'.self::$orderID)->json();
        return $response;
	}

	/*
	*	Get Order Details Live for Payment via MasterCard Or Visa
	*/
	public static function getOrderDetailsSandLive($orderID, $merchantID, $merchantPassword)
	{
		self::$orderID = $orderID;
		self::$merchantID = $merchantID;
		self::$merchantPassword = $merchantPassword;

		$curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, config('BankPayment.ApiUrl')."merchant/".self::$merchantID."/order/".self::$orderID."/");
        curl_setopt($curl, CURLOPT_USERPWD, 'merchant.'.self::$merchantID.':'.self::$merchantPassword.'');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);
        $jsonData = json_decode($response);

        return $jsonData;
	}

	/*
	*	Create SandBox Payment via Meeza Digital
	*/
	public static function createPaymentMeezaSandBox($successURL, $failURL, $mID, $tID, $orderID, $totalPrice)
	{
		self::$successURL = $successURL;
		self::$failURL = $failURL;
		self::$orderID = $orderID;
		self::$mID = $mID;
		self::$tID = $tID;
		self::$totalPrice = $totalPrice;

		$js = '<script src="'.config('BankPayment.MeezaJSSandBoxUrl').'"></script>';

		$js .= '<script type="text/javascript">$(document).ready(function() {$(window).on("load", function() {';

		$js .= "Lightbox.Checkout.configure = {OrderId: '',paymentMethodFromLightBox: 2,MID: ".self::$mID.",TID: ".self::$tID.",AmountTrxn: ".self::$totalPrice.",MerchantReference: '".self::$orderID."',completeCallback: function (data) {console.log(data);var sendData = 'orderId=' + data.MerchantReference + '&Amount=' + data.Amount + '&Currency=' + data.Currency + '&PayerAccount=' + data.PayerAccount + '&PayerName=' + data.PayerName + '&PaidThrough=' + data.PaidThrough + '&SystemReference=' + data.SystemReference + '&NetworkReference=' + data.NetworkReference;$.ajax({type: 'POST',url : '".self::$successURL."',data: sendData,success: function(da) {alert('success Payment and Date Send To Success URL with Ajax POST Request');}});},errorCallback: function () {window.location = '".self::$failURL."';},cancelCallback:function () {window.location = ".self::$failURL.";}};Lightbox.Checkout.showLightbox(); });});</script>";

		return $js;
	}

	/*
	*	Create Live Payment via Meeza Digital
	*/
	public static function createPaymentMeezaLive($successURL, $failURL, $mID, $tID, $orderID, $totalPrice)
	{
		self::$successURL = $successURL;
		self::$failURL = $failURL;
		self::$orderID = $orderID;
		self::$mID = $mID;
		self::$tID = $tID;
		self::$totalPrice = $totalPrice;

        $js = '<script src="'.config('BankPayment.MeezaJSLiveBoxUrl').'"></script>';

		$js .= '<script type="text/javascript">$(document).ready(function() {$(window).on("load", function() {';

		$js .= "Lightbox.Checkout.configure = {OrderId: '',paymentMethodFromLightBox: 2,MID: ".self::$mID.",TID: ".self::$tID.",AmountTrxn: ".self::$totalPrice.",MerchantReference: '".self::$orderID."',completeCallback: function (data) {console.log(data);var sendData = 'orderId=' + data.MerchantReference + '&Amount=' + data.Amount + '&Currency=' + data.Currency + '&PayerAccount=' + data.PayerAccount + '&PayerName=' + data.PayerName + '&PaidThrough=' + data.PaidThrough + '&SystemReference=' + data.SystemReference + '&NetworkReference=' + data.NetworkReference;$.ajax({type: 'POST',url : '".self::$successURL."',data: sendData,success: function(da) {alert('success Payment and Date Send To Success URL with Ajax POST Request');}});},errorCallback: function () {window.location = '".self::$failURL."';},cancelCallback:function () {window.location = ".self::$failURL.";}};Lightbox.Checkout.showLightbox(); });});</script>";

		return $js;
	}


   	/*
	*	Refund Order By Transaction
	*/
	public static function RefundOrderByTransaction($orderID, $merchantID, $merchantPassword , $orderAmount)
	{
		self::$orderID = $orderID;
		self::$merchantID = $merchantID;
		self::$merchantPassword = $merchantPassword;
        $transaction = Str::random(30);
        $data = [
			'apiOperation' => "REFUND",
            'transaction' => [
                'amount' => $orderAmount,
				'currency' => config('BankPayment.currency')
            ]
		];

        $response = Http::contentType("application/json")
        ->withBasicAuth('merchant.'.self::$merchantID, self::$merchantPassword)
        ->withHeaders([
            'Accept' => 'application/json'
        ])->put(config('BankPayment.ApiUrl'). '/merchant/'.self::$merchantID.'/order/'.self::$orderID.'/transaction/'.$transaction, $data)->json();
        return $response;
	}
}
