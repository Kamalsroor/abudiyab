<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Offer;
use App\Models\Car;
use Illuminate\Routing\Controller;
use App\Http\Requests\Dashboard\OfferRequest;
use App\Models\Branch;
use Carbon\Carbon;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DateTime;

class OfferController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * OfferController constructor.
     */
    public function __construct()
    {
        $this->authorizeResource(Offer::class, 'offer');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = Offer::filter()->paginate();

        return view('dashboard.offers.index', compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $limits = range(0, 100);
        $limits[0] = trans('offers.actions.Unlimit');
        $dateTomorrow = new DateTime('tomorrow');

        return view('dashboard.offers.create' , compact('limits','dateTomorrow'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\OfferRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(OfferRequest $request)
    {

        $data = $request->all();

        switch ($data['type']) {
            case 0:
                $data['value'] = null ;
                break;
            case 1:
                $data['value'] = $data['car_id'] ;
                break;
            case 2:
                $data['value'] = null ;
                break;
            case 3:
                $data['value'] = $data['category_id'] ;
                break;
            case 4:
                $data['value'] = $data['single_car_id'] ;
                break;
        }

        unset($data['car_id']);
        unset($data['category_id']);
        unset($data['single_car_id']);
        $todaydate = Carbon::today();
        switch ($data['type']) {
            case 0:
                // $offerCount = Offer::where('type' , 0)->whereDate('from' ,'<=' , $todaydate)->whereDate('from' ,'<=' , $todaydate)->count();
                // if ($offerCount) {
                //     # code...
                // }
                break;
            case 4:
                // $offerCount = Offer::where('type' , 0)->whereDate('from' ,'<=' , $todaydate)->whereDate('from' ,'<=' , $todaydate)->whereHas('cars' , function($q) use($data){


                //     $q->where('id' , $data['value']);
                // })->count();

                // dd($data['value']);

                // if ($offerCount) {
                //     # code...
                // }
                break;
        }

        $offer = Offer::create($data);


        switch ($data['type']) {
            case 0:
                $cars = Car::get();
                foreach ($cars as  $car) {
                    $car->offers()->attach([$offer->id]);
                }
                break;
            case 1:
                $cars = Car::whereIn('id',$data['value'])->get();
                foreach ($cars as  $car) {
                    $car->offers()->attach([$offer->id]);
                }
                // $data['value'] = $data['car_id'] ;
                break;
            case 2:
                $data['value'] = null ;
                break;
            case 3:
                $data['value'] = $data['category_id'] ;
                break;
            case 4:
                $cars = Car::where('id',$data['value'])->get();
                foreach ($cars as  $car) {
                    $car->offers()->sync([$offer->id]);
                }
                break;
        }


        $offer->addAllMediaFromTokens();

        flash(trans('offers.messages.created'));

        return redirect()->route('dashboard.offers.show', $offer);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Offer $offer
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $offer)
    {
        $Text = "";
        if ($offer->type == 1 || $offer->type == 4 ){
            $cars = $offer->cars;
            foreach ($cars as $car) {
                $Text .= $car->name ." , ";
            }
            $Text = rtrim($Text, " ,");
        }
        if ($offer->type == 3){
            $Categoryies = Cat::whereIn('id' ,$offer->value )->get();
            $CategText = "";
            foreach ($Categoryies as $Category) {
                $CategText .= $Category->name ." , ";
            }
            $CategText = rtrim($CategText, " ,");
        }





        return view('dashboard.offers.show', compact('offer','Text'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Offer $offer
     * @return \Illuminate\Http\Response
     */
    public function edit(Offer $offer)
    {
        $limits = range(0, 100);
        $limits[0] = trans('offers.actions.Unlimit');
        $dateTomorrow = new DateTime('tomorrow');
        $branch_value = null;
        if ($offer->branch_type == "fixed") {
            $branch_value = Branch::whereIn('id',$offer->branch_value)->pluck('id');
        }



        return view('dashboard.offers.edit', compact('offer','limits','dateTomorrow','branch_value'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\OfferRequest $request
     * @param \App\Models\Offer $offer
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(OfferRequest $request, Offer $offer)
    {

        $data = $request->all();

        switch ($data['type']) {
            case 0:
                $data['value'] = null ;
                break;
            case 1:
                $data['value'] = $data['car_id'] ;
                break;
            case 2:
                $data['value'] = null ;
                break;
            case 3:
                $data['value'] = $data['category_id'] ;
                break;
            case 4:
                $data['value'] = $data['single_car_id'] ;
                break;
        }

        unset($data['car_id']);
        unset($data['category_id']);
        unset($data['single_car_id']);
        $old_type = $offer->type ;
        $offer->update($request->all());

        if ($old_type == 0 || $old_type == 1 || $old_type == 4) {
            $offer->cars()->detach();
        }

        switch ($data['type']) {
            case 0:
                $cars = Car::get();
                foreach ($cars as  $car) {
                    $car->offers()->sync([$offer->id]);
                }
                break;
            case 1:
                $cars = Car::whereIn('id',$data['value'])->get();
                foreach ($cars as  $car) {
                    $car->offers()->sync([$offer->id]);
                }
                // $data['value'] = $data['car_id'] ;
                break;
            case 2:
                $data['value'] = null ;
                break;
            case 3:
                $data['value'] = $data['category_id'] ;
                break;
            case 4:
                $cars = Car::where('id',$data['value'])->get();
                foreach ($cars as  $car) {
                    $car->offers()->sync([$offer->id]);
                }
                break;
        }


        $offer->addAllMediaFromTokens();

        flash(trans('offers.messages.updated'));

        return redirect()->route('dashboard.offers.show', $offer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Offer $offer
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Offer $offer)
    {
        $offer->delete();

        flash(trans('offers.messages.deleted'));

        return redirect()->route('dashboard.offers.index');
    }

   /**
     * Display a listing of the trashed resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trashed()
    {
        $this->authorize('viewTrash', Offer::class);

        $offers = Offer::onlyTrashed()->paginate();

        return view('dashboard.offers.trashed', compact('offers'));
    }

    /**
     * Display the specified trashed resource.
     *
     * @param \App\Models\Offer $offer
     * @return \Illuminate\Http\Response
     */
    public function showTrashed(Offer $offer)
    {
        return view('dashboard.offers.show', compact('offer'));
    }

    /**
     * Restore the trashed resource.
     *
     * @param \App\Models\Offer $offer
     * @return \Illuminate\Http\RedirectResponse
     */
    public function restore(Offer $offer)
    {
        $this->authorize('restore', $offer);

        $offer->restore();

        flash()->success(trans('offers.messages.restored'));

        return redirect()->route('dashboard.offers.trashed');
    }

    /**
     * Force delete the specified resource from storage.
     *
     * @param \App\Models\Offer $offer
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function forceDelete(Offer $offer)
    {
        $this->authorize('forceDelete', $offer);

        $offer->forceDelete();

        flash(trans('offers.messages.deleted'));

        return redirect()->route('dashboard.offers.trashed');
    }
}
