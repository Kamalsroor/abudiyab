<x-layout :title="trans('orders.trashed')" :breadcrumbs="['dashboard.orders.trashed']">
    @include('dashboard.orders.partials.filter')

    @component('dashboard::components.table-box')

        @slot('title')
            @lang('orders.actions.list') ({{ count_formatted($orders->total()) }})
        @endslot

        <thead>
        <tr>
            <th colspan="100">
                <x-check-all-force-delete
                        type="{{ \App\Models\Order::class }}"
                        :resource="trans('orders.plural')"></x-check-all-force-delete>
                <x-check-all-restore
                        type="{{ \App\Models\Order::class }}"
                        :resource="trans('orders.plural')"></x-check-all-restore>
            </th>
        </tr>
        <tr>
            <th>
                <x-check-all></x-check-all>
            </th>
            <th>@lang('orders.attributes.name')</th>
            <th>@lang('orders.attributes.deleted_at')</th>
            <th style="width: 160px">...</th>
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
                        {{ $order->name }}
                    </a>
                </td>

                <td>{{ $order->deleted_at->format('Y-m-d') }}</td>

                <td style="width: 160px">
                    @include('dashboard.orders.partials.actions.show')
                    @include('dashboard.orders.partials.actions.restore')
                    @include('dashboard.orders.partials.actions.forceDelete')
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
