<x-layout :title="trans('manufactories.actions.create')" :breadcrumbs="['dashboard.manufactories.create']">
    {{ BsForm::resource('manufactories')->post(route('dashboard.manufactories.store')) }}
    @component('dashboard::components.box')
        @slot('title', trans('manufactories.actions.create'))

        @include('dashboard.manufactories.partials.form')

        @slot('footer')
            {{ BsForm::submit()->label(trans('manufactories.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>