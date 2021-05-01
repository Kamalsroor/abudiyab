<x-layout :title="trans('offers.actions.create')" :breadcrumbs="['dashboard.offers.create']">
    {{ BsForm::resource('offers')->post(route('dashboard.offers.store')) }}
    @component('dashboard::components.box')
        @slot('title', trans('offers.actions.create'))

        @include('dashboard.offers.partials.form')

        @slot('footer')
            {{ BsForm::submit()->label(trans('offers.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>