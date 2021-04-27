<?php

namespace App\Support;

use Firebase\Auth\Token\Verifier;
use Illuminate\Support\Facades\Config;
use Illuminate\Auth\AuthenticationException;
use GuzzleHttp\Client;

class Sms
{
    protected $verifierId;
    /*
     * @throws \Illuminate\Auth\AuthenticationException
     * @return \Lcobucci\JWT\Token
     */
    public static function SendSms($phone,$body)
    {

        $smsText = $body;
        $smsPhone = $phone;
        $url = "http://sms.netpowers.net/http/api.php?id=abudiyab&password=abudiyab1171&to={$smsPhone}&sender=ABUDIYAB&msg={$smsText}";
        try {
            $client = new Client();
            $res = $client->get($url);
            return true;
        } catch (\Throwable $e) {
            throw new AuthenticationException('Invalid access token!');
        }
    }
}
