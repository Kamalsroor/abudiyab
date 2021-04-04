<x-layout :title="$car->name" :breadcrumbs="['dashboard.cars.edit', $car]">
    {{ BsForm::resource('cars')->putModel($car, route('dashboard.cars.update', $car)) }}
    @component('dashboard::components.box')
        @slot('title', trans('cars.actions.edit'))

        @include('dashboard.cars.partials.form')

        @slot('footer')
            {{ BsForm::submit()->label(trans('cars.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>