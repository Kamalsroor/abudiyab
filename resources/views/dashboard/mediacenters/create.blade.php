<x-layout :title="trans('mediacenters.actions.create')" :breadcrumbs="['dashboard.mediacenters.create']">
    {{ BsForm::resource('mediacenters')->post(route('dashboard.mediacenters.store')) }}
    @component('dashboard::components.box')
        @slot('title', trans('mediacenters.actions.create'))

        @include('dashboard.mediacenters.partials.form')

        @slot('footer')
            {{ BsForm::submit()->label(trans('mediacenters.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>