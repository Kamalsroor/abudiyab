<x-layout :title="$carsale->name" :breadcrumbs="['dashboard.carsales.edit', $carsale]">
    {{ BsForm::resource('carsales')->putModel($carsale, route('dashboard.carsales.update', $carsale)) }}
    @component('dashboard::components.box')
        @slot('title', trans('carsales.actions.edit'))

        @include('dashboard.carsales.partials.form')

        @slot('footer')
            {{ BsForm::submit()->label(trans('carsales.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>