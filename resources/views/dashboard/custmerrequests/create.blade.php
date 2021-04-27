<x-layout :title="trans('custmerrequests.actions.create')" :breadcrumbs="['dashboard.custmerrequests.create']">
    {{ BsForm::resource('custmerrequests')->post(route('dashboard.custmerrequests.store')) }}
    @component('dashboard::components.box')
        @slot('title', trans('custmerrequests.actions.create'))

        @include('dashboard.custmerrequests.partials.form')

        @slot('footer')
            {{ BsForm::submit()->label(trans('custmerrequests.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>