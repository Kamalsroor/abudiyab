<x-layout :title="trans('partners.actions.create')" :breadcrumbs="['dashboard.partners.create']">
    {{ BsForm::resource('partners')->post(route('dashboard.partners.store')) }}
    @component('dashboard::components.box')
        @slot('title', trans('partners.actions.create'))

        @include('dashboard.partners.partials.form')

        @slot('footer')
            {{ BsForm::submit()->label(trans('partners.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>