<x-layout :title="$purchaserequest->name" :breadcrumbs="['dashboard.purchaserequests.show', $purchaserequest]">
    <div class="row">
        <div class="col-md-6">
            @component('dashboard::components.box')
                @slot('class', 'p-0')
                @slot('bodyClass', 'p-0')

                <table class="table table-striped table-middle">
                    <tbody>
                    <tr>
                        <th width="200">@lang('purchaserequests.attributes.username')</th>
                        <td>{{ $purchaserequest->customer->name }}</td>
                    </tr>
                    <tr>
                        <th width="200">@lang('purchaserequests.attributes.carname')</th>
                        <td>{{ $purchaserequest->car->name }}</td>
                    </tr>
                    <tr>
                        <th width="200">@lang('purchaserequests.attributes.carmodel')</th>
                        <td>{{ $purchaserequest->car->model }}</td>
                    </tr>
                    <tr>
                        <th width="200">@lang('purchaserequests.attributes.carbrand')</th>
                        <td>{{ $purchaserequest->car->manufactory->name }}</td>
                    </tr>
                    <tr>
                        <th width="200">@lang('purchaserequests.attributes.price')</th>
                        <td>{{ $purchaserequest->price }}</td>
                    </tr>
                    </tbody>
                </table>

                @slot('footer')
                    @include('dashboard.purchaserequests.partials.actions.edit')
                    @include('dashboard.purchaserequests.partials.actions.delete')
                @endslot
            @endcomponent
        </div>
    </div>
</x-layout>
