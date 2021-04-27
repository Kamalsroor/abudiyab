<x-layout :title="$region->name" :breadcrumbs="['dashboard.regions.show', $region]">
    <div class="row">
        <div class="col-md-6">
            @component('dashboard::components.box')
                @slot('class', 'p-0')
                @slot('bodyClass', 'p-0')

                <table class="table table-striped table-middle">
                    <tbody>
                    <tr>
                        <th width="200">@lang('regions.attributes.name')</th>
                        <td>{{ $region->name }}</td>
                    </tr>
                    <tr>
                        <th width="200">@lang('regions.attributes.code')</th>
                        <td>{{ $region->code }}</td>
                    </tr>
                    </tbody>
                </table>

                @slot('footer')
                    @include('dashboard.regions.partials.actions.edit')
                    @include('dashboard.regions.partials.actions.delete')
                @endslot
            @endcomponent
        </div>
    </div>
</x-layout>
