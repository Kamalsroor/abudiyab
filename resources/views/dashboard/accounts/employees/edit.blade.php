<x-layout :title="$employee->name" :breadcrumbs="['dashboard.employees.edit', $employee]">
    {{ BsForm::resource('employees')->putModel($employee, route('dashboard.employees.update', $employee), ['files' => true]) }}
    @component('dashboard::components.box')
        @slot('title', trans('employees.actions.edit'))
        @include('dashboard.accounts.employees.partials.form')

        @slot('footer')
            {{ BsForm::submit()->label(trans('employees.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>
