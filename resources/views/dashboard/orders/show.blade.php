<x-layout :title="$order->name" :breadcrumbs="['dashboard.orders.show', $order]">
    <div class="row">
        <div class="col-md-6">
            @component('dashboard::components.box')
                @slot('class', 'p-0')
                @slot('bodyClass', 'p-0')

                <table class="table table-striped table-middle">
                    <tbody>
                    <tr>
                        <th width="200">@lang('orders.attributes.name')</th>
                        <td>{{ $order->name }}</td>
                    </tr>
                    </tbody>
                </table>

                @slot('footer')
                    @include('dashboard.orders.partials.actions.edit')
                    @include('dashboard.orders.partials.actions.delete')
                @endslot
            @endcomponent
        </div>
    </div>
</x-layout>
