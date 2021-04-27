<x-layout :title="trans('employees.actions.create')" :breadcrumbs="['dashboard.employees.create']">
    {{ BsForm::resource('employees')->post(route('dashboard.employees.store')) }}
    @component('dashboard::components.box')
        @slot('title', trans('employees.actions.create'))

        @include('dashboard.accounts.employees.partials.form')

        @slot('footer')
            {{ BsForm::submit()->label(trans('employees.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>
