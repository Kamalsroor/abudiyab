<x-layout :title="$membership->name" :breadcrumbs="['dashboard.memberships.edit', $membership]">
    {{ BsForm::resource('memberships')->putModel($membership, route('dashboard.memberships.update', $membership)) }}
    @component('dashboard::components.box')
        @slot('title', trans('memberships.actions.edit'))

        @include('dashboard.memberships.partials.form')

        @slot('footer')
            {{ BsForm::submit()->label(trans('memberships.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>