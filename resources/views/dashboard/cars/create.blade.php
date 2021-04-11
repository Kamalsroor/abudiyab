<x-layout :title="trans('cars.actions.create')" :breadcrumbs="['dashboard.cars.create']">
    {{ BsForm::resource('cars')->post(route('dashboard.cars.store')) }}
    @component('dashboard::components.box')
        @slot('title', trans('cars.actions.create'))

        @include('dashboard.cars.partials.form')

        @slot('footer')
            {{ BsForm::submit()->label(trans('cars.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>