<?php

namespace App\Http\Controllers\Frontend;

use App\Events\FeedbackSent;
use Illuminate\Routing\Controller;
use App\Http\Requests\Frontend\ContactRequest;
use App\Models\Branch;
use App\Models\Car;
use App\Models\Work;
use App\Models\CarsInStock;
use App\Models\Partner;
use App\Models\Custmerrequest;
use App\Models\WorkCandidates;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Category;
use App\Models\Membership;
use Carbon\Carbon;
use App\Models\Carsale;
use App\Models\Mediacenter;
use App\Models\Offer;
use App\Models\Region;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Settings;
use Artesaos\SEOTools\Facades\SEOMeta;
use Cache;
use App\Models\Subscribe;
use Illuminate\Support\Facades\Crypt;

class FrontendController extends Controller
{

    use SEOToolsTrait;



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expire = Carbon::now()->addMinutes(10);



        $allCategories = Cache::remember('allCategories', $expire, function() {
            return Category::get();
        });
        // $showFirstCatInCatgories   =  Car::where('category_id' , $allCategories->first()->id)->get();

        $showFirstCatInCatgories = Cache::remember('showFirstCatInCatgories', $expire, function() use($allCategories) {
            return Car::where('category_id' , $allCategories->first()->id)->get();
        });

        $firstcar   = $showFirstCatInCatgories->first();
        $todaydate = Carbon::today();

        $offers =  Offer::where('is_work',1)->where('type',4)->whereDate('from' ,'<=' , $todaydate)->whereDate('to' ,'>=' , $todaydate)->with('cars')->get();
        // dd();
        // $offers =  Car::whereHas('offers',function($q) use($todaydate){
        //     $q->where('is_work',1)->where('type',4)->whereDate('from' ,'<=' , $todaydate)->whereDate('to' ,'>=' , $todaydate);
        // })->with('offers')->get();
        // dd($offers[0]->offers()->where('is_work',1)->where('type',4)->whereDate('from' ,'<=' , $todaydate)->whereDate('to' ,'>=' , $todaydate)->first());



        $sliders = Cache::remember('sliders', $expire, function() {
            return Slider::where('is_mobile',0)->limit(6)->get();
        });
        $miniSliders = Cache::remember('miniSliders', $expire, function() {
            return Slider::where('is_mobile',1)->get();
        });
        $partners = Cache::remember('partners', $expire, function() {
            return Partner::get();
        });
        $deleteSubscripe=0;
        if(request('email') != null)
        {
           $email=Crypt::decrypt(request('email'));
           $deleteSubscripe=Subscribe::where('email',$email);
           $deleteSubscripe->delete();
           $deleteSubscripe=1;
        }
        session()->forget('deleteSubscripe');
        session()->push('deleteSubscripe', $deleteSubscripe);
        $this->seo()->setTitle(Settings::locale(app()->getLocale())->get('seo_home_title'));
        $this->seo()->setDescription(Settings::locale(app()->getLocale())->get('seo_home_description'));
        SEOMeta::addMeta('twitter:image', optional(Settings::instance('seo_home_image'))->getFirstMediaUrl('seo_home_image') , 'property');
        SEOMeta::addMeta('og:image', optional(Settings::instance('seo_home_image'))->getFirstMediaUrl('seo_home_image') , 'property');
        SEOMeta::setKeywords(Settings::locale(app()->getLocale())->get('seo_home_keywords'));

        return view('frontend.main2', compact('sliders','miniSliders','showFirstCatInCatgories','allCategories','firstcar','partners','offers'));
    }


    public function branches()
    {
        $branches = Branch::all();
        $regions=Region::all();


        $this->seo()->setTitle(Settings::locale(app()->getLocale())->get('seo_branche_title'));
        $this->seo()->setDescription(Settings::locale(app()->getLocale())->get('seo_branche_description'));
        SEOMeta::addMeta('twitter:image', optional(Settings::instance('seo_branche_image'))->getFirstMediaUrl('seo_branche_image') , 'property');
        SEOMeta::addMeta('og:image', optional(Settings::instance('seo_branche_image'))->getFirstMediaUrl('seo_branche_image') , 'property');
        SEOMeta::setKeywords(Settings::locale(app()->getLocale())->get('seo_branche_keywords'));



        return view('frontend.branches', compact('branches','regions'));
    }


    public function MediaCenter()
    {
        $news=Mediacenter::all();
        return view('frontend.media_center',compact('news'));
    }


    public function CarSales()
    {
        $cars=Carsale::with('car','car.manufactory')->get();
        $models=[];
        foreach($cars as $car)
        {
            if(!in_array($car->car->model,$models))
            {
                $models[]=$car->car->model;
            }
        }

        $this->seo()->setTitle(Settings::locale(app()->getLocale())->get('seo_car_sales_title'));
        $this->seo()->setDescription(Settings::locale(app()->getLocale())->get('seo_car_sales_description'));
        SEOMeta::addMeta('twitter:image', optional(Settings::instance('seo_car_sales_image'))->getFirstMediaUrl('seo_car_sales_image') , 'property');
        SEOMeta::addMeta('og:image', optional(Settings::instance('seo_car_sales_image'))->getFirstMediaUrl('seo_car_sales_image') , 'property');
        SEOMeta::setKeywords(Settings::locale(app()->getLocale())->get('seo_car_sales_keywords'));

        return view('frontend.car_sales', compact('cars','models'));
    }

    public function NewsDetails($new)
    {
        $newdetails=Mediacenter::find($new);
        $relateditems = Mediacenter::inRandomOrder()->limit(3)->get();

        return view('frontend.news-details',compact('newdetails','relateditems'));
    }

    public function services()
    {
        $this->seo()->setTitle(Settings::locale(app()->getLocale())->get('seo_maintenance_title'));
        $this->seo()->setDescription(Settings::locale(app()->getLocale())->get('seo_maintenance_description'));
        SEOMeta::addMeta('twitter:image', optional(Settings::instance('seo_maintenance_image'))->getFirstMediaUrl('seo_maintenance_image') , 'property');
        SEOMeta::addMeta('og:image', optional(Settings::instance('seo_maintenance_image'))->getFirstMediaUrl('seo_maintenance_image') , 'property');
        SEOMeta::setKeywords(Settings::locale(app()->getLocale())->get('seo_maintenance_keywords'));

        return view('frontend.services');
    }


    public function PointsProgram()
    {
        return view('frontend.points_program');
    }


    public function MembershipCards()
    {
        $Memberships  = Membership::all();


        return view('frontend.membership_cards',compact('Memberships'));
    }
    public function bookingModal(Request $request)
    {
        $branches=Branch::all();
        $car_id = $request->car_id;
        return view('layouts.frontend.include.booking_modal',compact('branches','car_id'));
    }

    public function favorite()
    {
        // if(count(Auth()->user()->userFavorite)){

        // }
        // dd(Auth()->user()->userFavorite);
        return view('frontend.favorite');
    }

    public function payment2()
    {
        return view('frontend.payment2');
    }

    public function messageEmail()
    {
        return view('frontend.message-email');
    }

    public function recruitment()
    {
        $works=Work::all();
        return view('frontend.recruitment',compact('works'));
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
        if ($request->receivingBrancheInput != null && $request->deliveryBrancheInput != null && $request->receivingDateInput != null && $request->deliveryDateInput != null )
        {
            $carInBranch =  CarsInStock::where('car_id',$request->car_id)->where('branch_id', $request->receivingBrancheInput)->get();
            if ($carInBranch->count() > 0) {
                    $data = [
                        'car_id' => $request->car_id ,
                        'receiving_branch' => $request->receivingBrancheInput  ,
                        'delivery_branch' => $request->deliveryBrancheInput  ,
                        'receiving_date' => $request->receivingDateInput ,
                        'delivery_date' => $request->deliveryDateInput ,
                    ] ;
                    return view('frontend.booking-steps',compact('data'));
            }
            else{
                $errorData = [
                    'title' => 'يرجي اختيار فرع الاستلام والتسليم',
                    'text' => 'test',
                    'type' => 'error',
                ];
                // $this->dispatchBrowserEvent('sweetalert', $errorData);
                return redirect()->back()->with('success', 'your message,here');
            }
        }
       else{
           $errorData = [
               'title' => 'يرجي اختيار فرع الاستلام والتسليم',
               'text' => 'test',
               'type' => 'error',
           ];
       }

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
    public function profile()
    {
        $is_confirmed = true ;
        $user = Custmerrequest::where('user_id',auth()->id())->orderBy('created_at', 'DESC')->first();
        // dd($user->getFirstMediaUrl('identityBack'));
        if($user){

            $newRequest = $user;

           if($user->is_confirmed != "confirmed"){

                $is_confirmed = false ;
                $user = Custmerrequest::where('user_id',auth()->id())->where('is_confirmed' , 'confirmed')->orderBy('created_at', 'DESC')->first();
           }
        }

        return view('frontend.profile',compact('user','is_confirmed','newRequest'));
    }
    public function addCandidates(Request $request)
    {
        $extension=['pdf','doc','docx','jpg','png'];
        $request->validate([
            'cv' => 'required|mimes:pdf,doc,docx,jpg,png',
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required|max:11',
            'expected_salary' => 'required',
            'jobname' => 'required',
          ]);
        // $exist=WorkCandidates::where(function($q) use($request) {
        //     $q->where('email' , $request->email)->orWhere('phone' , $request->phone);
        // })->first();
        // if($exist)
        // {
        //     dd('email Exist');
        // }
        // else{
            if($request->file('cv') !=null)
            {
                if(in_array($request->file('cv')->extension(),$extension))
                {
                    $WorkCandidates = WorkCandidates::create([
                        'name'=>$request->name,
                        'email'=>$request->email,
                        'phone'=>$request->phone,
                        'expected_salaray'=>$request->expected_salary,
                        'cv'=>$request->file('cv')->getClientOriginalName(),
                        'work_id'=>$request->jobname,
                    ]);

                    $WorkCandidates->addMediaFromRequest('cv')->toMediaCollection('cv');

                    // $uploadedFile = $request->file('cv');
                    // $filename = time().$uploadedFile->getClientOriginalName();
                    // Storage::disk('local')->putFileAs(
                    //     'public/cv/'.$filename,
                    //     $uploadedFile,
                    //     $filename
                    // );
                }
                else{
                    dd('this exetension is not allowed');
                }
            }
        flash()->overlay(" ", trans('works.messages.send'));
        return redirect()->back();

    }
    public function collectiontest(){
        $arr=['name' => 'sayed','email' => 'sayed@gmail.com','age' => 25];
        $users=[];
        Custmerrequest::get()->each(function($value,$key){
            global $users;
            $users[]=$value->only('user_id');
        });
        dd($users);
        // dd(collect($arr)->only('name','email'));
    }

}
