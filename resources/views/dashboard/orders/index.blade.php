<x-layout :title="trans('orders.plural')" :breadcrumbs="['dashboard.orders.index']">
    @include('dashboard.orders.partials.filter')

    @component('dashboard::components.table-box')
        @slot('title')
            @lang('orders.actions.list') ({{ $orders->total() }})
        @endslot

        <thead>
        <tr>
          <th colspan="100">
            <div class="d-flex">
                <x-check-all-delete
                    type="{{ \App\Models\Order::class }}"
                    :resource="trans('orders.plural')"></x-check-all-delete>
                <x-import-excel
                            model="{{ \App\Models\Order::class }}"
                            import="{{ \App\Imports\OrdersImport::class }}"
                            exportResource="{{ App\Http\Resources\OrderResource::class }}"
                            :resource="trans('orders.plural')"></x-import-excel>
                <x-export-excel
                            model="{{ \App\Models\Order::class }}"
                            export="{{ \App\Exports\Export::class }}"
                            resource="{{ App\Http\Resources\OrderResource::class }}"
                            fileName="Orders"
                            ></x-export-excel>
                <div class="ml-2 d-flex justify-content-between flex-grow-1">
                    @include('dashboard.orders.partials.actions.create')
                    @include('dashboard.orders.partials.actions.trashed')
                </div>
            </div>
          </th>
        </tr>
        <tr>
            <th style="width: 30px;" class="text-center">
              <x-check-all></x-check-all>
            </th>
            <th>@lang('orders.attributes.name')</th>
            <th>@lang('orders.attributes.recieving_date')</th>
            <th>@lang('orders.attributes.booking_days')</th>
            <th>@lang('orders.attributes.recieving_branch')</th>
            <th>@lang('orders.attributes.delivery_branch')</th>
            <th>@lang('orders.attributes.payment_type')</th>
            <th>@lang('orders.attributes.created_at')</th>
            <th style="width: 160px">...</th>



        
            {{-- <th>@lang('orders.attributes.name')</th> --}}

            {{-- 'features_added' => 'features added', --}}
        </tr>
        </thead>
        <tbody>
        @forelse($orders as $order)
            <tr>
                <td class="text-center">
                  <x-check-all-item :model="$order"></x-check-all-item>
                </td>
                <td>
                    <a href="{{ route('dashboard.orders.show', $order) }}"
                       class="text-decoration-none text-ellipsis">
                        {{ $order->car->name }}
                    </a>
                </td>
                <td>{{ $order->reciving_date->format('Y-m-d') }}</td>
                <td>{{ $order->days}}</td>
                <td>{{ $order->receiving_branch_id}}</td>
                <td>{{ $order->delivery_branch }}</td>
                <td>{{ $order->payment_type }}</td>
                <td>{{ $order->created_at->format('Y-m-d') }}</td>
                

            
                {{-- <td>{{ $order-> }}</td> --}}

                <td style="width: 160px">
                    @include('dashboard.orders.partials.actions.show')
                    @include('dashboard.orders.partials.actions.edit')
                    @include('dashboard.orders.partials.actions.delete')
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="100" class="text-center">@lang('orders.empty')</td>
            </tr>
        @endforelse

        @if($orders->hasPages())
            @slot('footer')
                {{ $orders->links() }}
            @endslot
        @endif
    @endcomponent
</x-layout>
