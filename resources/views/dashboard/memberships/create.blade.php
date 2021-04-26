<x-layout :title="trans('memberships.actions.create')" :breadcrumbs="['dashboard.memberships.create']">
    {{ BsForm::resource('memberships')->post(route('dashboard.memberships.store')) }}
    @component('dashboard::components.box')
        @slot('title', trans('memberships.actions.create'))

        @include('dashboard.memberships.partials.form')

        @slot('footer')
            {{ BsForm::submit()->label(trans('memberships.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>