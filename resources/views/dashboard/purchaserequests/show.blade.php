<x-layout :title="$purchaserequest->name" :breadcrumbs="['dashboard.purchaserequests.show', $purchaserequest]">
    <div class="row">
        <div class="col-md-6">
            @component('dashboard::components.box')
                @slot('class', 'p-0')
                @slot('bodyClass', 'p-0')

                <table class="table table-striped table-middle">
                    <tbody>
                    <tr>
                        <th width="200">@lang('purchaserequests.attributes.name')</th>
                        <td>{{ $purchaserequest->name }}</td>
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
