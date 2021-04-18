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
                        <td>{{ $order->car->name }}</td>
                    </tr>

                    <tr>
                        <th width="200">@lang('orders.attributes.recieving_date')</th>
                        <td>{{ $order->reciving_date->format('Y-m-d') }}</td>
                    </tr>


                    <tr>
                        <th width="200">@lang('orders.attributes.booking_days')</th>
                        <td>{{ $order->days}}</td>
                    </tr>

                    <tr>
                        <th width="200">@lang('orders.attributes.recieving_branch')</th>
                        <td>{{ $order->receivingBranch->name}}</td>
                    </tr>




                    </tbody>
                </table>







                @slot('footer')
                    @include('dashboard.orders.partials.actions.edit')
                    @include('dashboard.orders.partials.actions.delete')
                @endslot
            @endcomponent
        </div>
        <div class="col-md-6">
            @component('dashboard::components.box')
                @slot('class', 'p-0')
                @slot('bodyClass', 'p-0')

                <table class="table table-striped table-middle">
                    <tbody>


                    <tr>
                        <th width="200">@lang('orders.attributes.delivery_branch')</th>
                        <td>{{ $order->deliveryBranch->name }}</td>
                    </tr>

                    <tr>
                        <th width="200">@lang('orders.attributes.payment_type')</th>
                        <td>{{ $order->payment_type }}</td>
                    </tr>
                    <tr>
                        <th width="200">@lang('orders.attributes.payment_status')</th>
                        <td>{{ $order->payment_status == "SUCCESS" ? "تم الدفع" : "لم يتم تأكيد الدفع"  }}</td>
                    </tr>

                    <tr>
                        <th width="200">@lang('orders.attributes.created_at')</th>
                        <td>{{ $order->created_at->format('Y-m-d') }}</td>
                    </tr>

                    </tbody>
                </table>







            @endcomponent
        </div>
    </div>
</x-layout>
