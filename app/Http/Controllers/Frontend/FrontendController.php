<?php

namespace App\Http\Controllers\Frontend;

use App\Events\FeedbackSent;
use Illuminate\Routing\Controller;
use App\Http\Requests\Frontend\ContactRequest;
use Auth;
use App\Models\Branch;
use App\Models\Car;
use App\Models\Partner;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Category;
use Illuminate\Support\Facades\Http;
use App\Payment\MasterCardPayment;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use Livewire\Component;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $showCategories = Category::orderBy('id', 'ASC')->take(4)->get();
        $allCategories  = Category::all();
        $showCategoriesCars = Car::where('category_id' , $showCategories->first()->id)->get();
        $partners   =  Partner::all();
        $sliders    =   Slider::all();
        $firstcar   =  Car::where('category_id' , $showCategories->first()->id)->first();
        return view('frontend.main2', compact('sliders','showCategories','showCategoriesCars','allCategories','firstcar','partners'));
    }


    public function branches()
    {
        $branches = Branch::all();
        $background=Setting::all();
        return view('frontend.branches', compact('branches'));
    }


    public function MediaCenter()
    {
        return view('frontend.media_center');
    }


    public function CarSales()
    {
        return view('frontend.car_sales');
    }


    public function services()
    {
        return view('frontend.services');
    }


    public function PointsProgram()
    {
        return view('frontend.points_program');
    }


    public function MembershipCards()
    {
        return view('frontend.membership-cards');
    }


    public function favorite()
    {
        return view('frontend.favorite');
    }



    function getUserIP()
    {
        // Get real visitor IP behind CloudFlare network
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
                $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
                $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];

        if(filter_var($client, FILTER_VALIDATE_IP))
        {
            $ip = $client;
        }
        elseif(filter_var($forward, FILTER_VALIDATE_IP))
        {
            $ip = $forward;
        }
        else
        {
            $ip = $remote;
        }

        return $ip;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fleet()
    {

        return view('frontend.fleet');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function booking(Request $request)
    {

        $data = $request->all() ;
        return view('frontend.booking-steps',compact('data'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\ServiceRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function contactForm(ContactRequest $request)
    {
        $feedback = Feedback::create($request->all());

        event(new FeedbackSent($feedback));

        // flash(trans('feedback.messages.sent'))->success();
        flash()->overlay(" ", trans('feedback.messages.sent'));

        return redirect()->back();
    }


}
