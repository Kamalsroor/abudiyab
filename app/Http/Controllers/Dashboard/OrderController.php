<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Order;
use Illuminate\Routing\Controller;
use App\Http\Requests\Dashboard\OrderRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * OrderController constructor.
     */
    public function __construct()
    {
        $this->authorizeResource(Order::class, 'order');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::filter()->latest()->paginate();

        return view('dashboard.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\OrderRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(OrderRequest $request)
    {
        $order = Order::create($request->all());

        flash(trans('orders.messages.created'));

        return redirect()->route('dashboard.orders.show', $order);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $TotalFeatures = 0;

        foreach ($order->features_added as $key => $value) {
            $TotalFeatures += $value * $order->days;
        }

        $order->markAsRead();


        return view('dashboard.orders.show', compact('order','TotalFeatures'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        return view('dashboard.orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\OrderRequest $request
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(OrderRequest $request, Order $order)
    {
        $order->update($request->all());

        flash(trans('orders.messages.updated'));

        return redirect()->route('dashboard.orders.show', $order);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Order $order
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Order $order)
    {
        $order->delete();

        flash(trans('orders.messages.deleted'));

        return redirect()->route('dashboard.orders.index');
    }

    /**
     * Display a listing of the trashed resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trashed()
    {
        $this->authorize('viewTrash', Order::class);

        $orders = Order::onlyTrashed()->paginate();

        return view('dashboard.orders.trashed', compact('orders'));
    }

    /**
     * Display the specified trashed resource.
     *
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function showTrashed(Order $order)
    {
        return view('dashboard.orders.show', compact('order'));
    }

    /**
     * Restore the trashed resource.
     *
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\RedirectResponse
     */
    public function restore(Order $order)
    {
        $this->authorize('restore', $order);

        $order->restore();

        flash()->success(trans('orders.messages.restored'));

        return redirect()->route('dashboard.orders.trashed');
    }

    /**
     * Force delete the specified resource from storage.
     *
     * @param \App\Models\Order $order
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function forceDelete(Order $order)
    {
        $this->authorize('forceDelete', $order);

        $order->forceDelete();

        flash(trans('orders.messages.deleted'));

        return redirect()->route('dashboard.orders.trashed');
    }

       /**
     * Mark the selected messages as read.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function read(Request $request)
    {
        Order::query()
            ->whereIn('id', $request->input('items', []))
            ->update(['read_at' => now()]);

        return redirect()->route('dashboard.orders.index');
    }

    /**
     * Mark the selected messages as unread.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function unread(Request $request)
    {
        Order::query()
            ->whereIn('id', $request->input('items', []))
            ->update(['read_at' => null]);

        return redirect()->route('dashboard.orders.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Order $order
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function confirmation(Order $order)
    {
        $order->markAsConfirmed();

        flash(trans('orders.messages.confirmed'));

        return redirect()->route('dashboard.orders.show',$order);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Order $order
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function rejected(Request $request , Order $order)
    {
        $order->markAsRejected($request->status ?? null);
        flash(trans('orders.messages.rejected'));

        return redirect()->route('dashboard.orders.show',$order);
    }


}
