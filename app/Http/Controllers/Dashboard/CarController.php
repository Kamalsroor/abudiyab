<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Car;
use Illuminate\Routing\Controller;
use App\Http\Requests\Dashboard\CarRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CarController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * CarController constructor.
     */
    public function __construct()
    {
        $this->authorizeResource(Car::class, 'car');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::filter()->paginate();

        return view('dashboard.cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\CarRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CarRequest $request)
    {

        $request->merge([
            'price1' => str_replace(',' , '' , $request->price1 ?? 0),
            'price2' => str_replace(',' , '' , $request->price2 ?? 0),
            'price_from_2month_to_6month' => str_replace(',' , '' , $request->price_from_2month_to_6month ?? 0),
            'price_after_from_2month_to_6month' => str_replace(',' , '' , $request->price_after_from_2month_to_6month ?? 0),
            'price_from_1year_to_2years' => str_replace(',' , '' , $request->price_from_1year_to_2years ?? 0),
            'price_after_from_1year_to_2years' => str_replace(',' , '' , $request->price_after_from_1year_to_2years ?? 0),
            'price_from_2year_to_3years' => str_replace(',' , '' , $request->price_from_2year_to_3years ?? 0),
            'price_after_from_2year_to_3years' => str_replace(',' , '' , $request->price_after_from_2year_to_3years ?? 0),
            'price_from_2month_to_6month' => str_replace(',' , '' , $request->price_from_2month_to_6month ?? 0),
            'baby_seat_price' => str_replace(',' , '' , $request->baby_seat_price ?? 0),
            'shield_price' => str_replace(',' , '' , $request->shield_price ?? 0),
            'insurance_price' => str_replace(',' , '' , $request->insurance_price ?? 0),
            'open_kilometers_price' => str_replace(',' , '' , $request->open_kilometers_price ?? 0),
            'navigation_price' => str_replace(',' , '' , $request->navigation_price ?? 0),
            'home_delivery_price' => str_replace(',' , '' , $request->home_delivery_price ?? 0),
            'intercity_price' => str_replace(',' , '' , $request->intercity_price ?? 0),
        ]);


        $car = Car::create($request->all());

        $car->addAllMediaFromTokens();

        flash(trans('cars.messages.created'));

        return redirect()->route('dashboard.cars.show', $car);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Car $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        $offers = $car->offers ;
        return view('dashboard.cars.show', compact('car','offers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Car $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        return view('dashboard.cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\CarRequest $request
     * @param \App\Models\Car $car
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CarRequest $request, Car $car)
    {

        $request->merge([
            'price1' => str_replace(',' , '' , $request->price1 ?? 0),
            'price2' => str_replace(',' , '' , $request->price2 ?? 0),
            'price_from_2month_to_6month' => str_replace(',' , '' , $request->price_from_2month_to_6month ?? 0),
            'price_after_from_2month_to_6month' => str_replace(',' , '' , $request->price_after_from_2month_to_6month ?? 0),
            'price_from_1year_to_2years' => str_replace(',' , '' , $request->price_from_1year_to_2years ?? 0),
            'price_after_from_1year_to_2years' => str_replace(',' , '' , $request->price_after_from_1year_to_2years ?? 0),
            'price_from_2year_to_3years' => str_replace(',' , '' , $request->price_from_2year_to_3years ?? 0),
            'price_after_from_2year_to_3years' => str_replace(',' , '' , $request->price_after_from_2year_to_3years ?? 0),
            'price_from_2month_to_6month' => str_replace(',' , '' , $request->price_from_2month_to_6month ?? 0),
            'baby_seat_price' => str_replace(',' , '' , $request->baby_seat_price ?? 0),
            'shield_price' => str_replace(',' , '' , $request->shield_price ?? 0),
            'insurance_price' => str_replace(',' , '' , $request->insurance_price ?? 0),
            'open_kilometers_price' => str_replace(',' , '' , $request->open_kilometers_price ?? 0),
            'navigation_price' => str_replace(',' , '' , $request->navigation_price ?? 0),
            'home_delivery_price' => str_replace(',' , '' , $request->home_delivery_price ?? 0),
            'intercity_price' => str_replace(',' , '' , $request->intercity_price ?? 0),
        ]);

        // dd($request->all());

        $car->update($request->all());

        $car->addAllMediaFromTokens();

        flash(trans('cars.messages.updated'));

        return redirect()->route('dashboard.cars.show', $car);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Car $car
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Car $car)
    {
        $car->delete();

        flash(trans('cars.messages.deleted'));

        return redirect()->route('dashboard.cars.index');
    }

   /**
     * Display a listing of the trashed resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trashed()
    {
        $this->authorize('viewTrash', Car::class);

        $cars = Car::onlyTrashed()->paginate();

        return view('dashboard.cars.trashed', compact('cars'));
    }

    /**
     * Display the specified trashed resource.
     *
     * @param \App\Models\Car $car
     * @return \Illuminate\Http\Response
     */
    public function showTrashed(Car $car)
    {
        return view('dashboard.cars.show', compact('car'));
    }

    /**
     * Restore the trashed resource.
     *
     * @param \App\Models\Car $car
     * @return \Illuminate\Http\RedirectResponse
     */
    public function restore(Car $car)
    {
        $this->authorize('restore', $car);

        $car->restore();

        flash()->success(trans('cars.messages.restored'));

        return redirect()->route('dashboard.cars.trashed');
    }

    /**
     * Force delete the specified resource from storage.
     *
     * @param \App\Models\Car $car
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function forceDelete(Car $car)
    {
        $this->authorize('forceDelete', $car);

        $car->forceDelete();

        flash(trans('cars.messages.deleted'));

        return redirect()->route('dashboard.cars.trashed');
    }
}
