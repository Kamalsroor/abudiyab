<x-layout :title="$custmerrequest->name" :breadcrumbs="['dashboard.custmerrequests.edit', $custmerrequest]">
    {{ BsForm::resource('custmerrequests')->putModel($custmerrequest, route('dashboard.custmerrequests.update', $custmerrequest)) }}
    @component('dashboard::components.box')
        @slot('title', trans('custmerrequests.actions.edit'))

        @include('dashboard.custmerrequests.partials.form')

        @slot('footer')
            {{ BsForm::submit()->label(trans('custmerrequests.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>