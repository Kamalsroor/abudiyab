<x-layout :title="$carsale->name" :breadcrumbs="['dashboard.carsales.show', $carsale]">
    <div class="row">
        <div class="col-md-6">
            @component('dashboard::components.box')
                @slot('class', 'p-0')
                @slot('bodyClass', 'p-0')

                <table class="table table-striped table-middle">
                    <tbody>
                    <tr>
                        <th width="200">@lang('carsales.attributes.name')</th>
                        <td>{{ $carsale->name }}</td>
                    </tr>
                    </tbody>
                </table>

                @slot('footer')
                    @include('dashboard.carsales.partials.actions.edit')
                    @include('dashboard.carsales.partials.actions.delete')
                @endslot
            @endcomponent
        </div>
    </div>
</x-layout>
