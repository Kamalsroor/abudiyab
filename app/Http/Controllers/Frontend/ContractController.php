<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class ContractController extends Controller
{
    //
    //     orders
    // contracts
    public function getContracts()
    {
        $reservation=Auth::user()->reservation();
        $contracts=Auth::user()->contracts();
        return view('frontend.contracts',compact('reservation','contracts'));
    }
    public function privacyPolicy(){
        return view('frontend.privicy_policy');
    }
}
