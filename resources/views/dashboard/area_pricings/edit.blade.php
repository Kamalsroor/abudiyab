<x-layout :title="$area_pricing->name" :breadcrumbs="['dashboard.area_pricings.edit', $area_pricing]">
    {{ BsForm::resource('area_pricings')->putModel($area_pricing, route('dashboard.area_pricings.update', $area_pricing)) }}
    @component('dashboard::components.box')
        @slot('title', trans('area_pricings.actions.edit'))

        @include('dashboard.area_pricings.partials.form')

        @slot('footer')
            {{ BsForm::submit()->label(trans('area_pricings.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>