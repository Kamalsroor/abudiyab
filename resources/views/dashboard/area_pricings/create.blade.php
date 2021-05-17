<x-layout :title="trans('area_pricings.actions.create')" :breadcrumbs="['dashboard.area_pricings.create']">
    {{ BsForm::resource('area_pricings')->post(route('dashboard.area_pricings.store')) }}
    @component('dashboard::components.box')
        @slot('title', trans('area_pricings.actions.create'))

        @include('dashboard.area_pricings.partials.form')

        @slot('footer')
            {{ BsForm::submit()->label(trans('area_pricings.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>