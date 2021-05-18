<x-layout :title="$area_pricing->name" :breadcrumbs="['dashboard.area_pricings.show', $area_pricing]">
    <div class="row">
        <div class="col-md-6">
            @component('dashboard::components.box')
                @slot('class', 'p-0')
                @slot('bodyClass', 'p-0')

                <table class="table table-striped table-middle">
                    <tbody>
                    <tr>
                        <th width="200">@lang('area_pricings.attributes.name')</th>
                        <td>{{ $area_pricing->name }}</td>
                    </tr>
                    </tbody>
                </table>

                @slot('footer')
                    @include('dashboard.area_pricings.partials.actions.edit')
                    @include('dashboard.area_pricings.partials.actions.delete')
                @endslot
            @endcomponent
        </div>
    </div>
</x-layout>
