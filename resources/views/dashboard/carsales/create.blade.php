<x-layout :title="trans('carsales.actions.create')" :breadcrumbs="['dashboard.carsales.create']">
    {{ BsForm::resource('carsales')->post(route('dashboard.carsales.store')) }}
    @component('dashboard::components.box')
        @slot('title', trans('carsales.actions.create'))

        @include('dashboard.carsales.partials.form')

        @slot('footer')
            {{ BsForm::submit()->label(trans('carsales.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>