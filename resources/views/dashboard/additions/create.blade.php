<x-layout :title="trans('additions.actions.create')" :breadcrumbs="['dashboard.additions.create']">
    {{ BsForm::resource('additions')->post(route('dashboard.additions.store')) }}
    @component('dashboard::components.box')
        @slot('title', trans('additions.actions.create'))

        @include('dashboard.additions.partials.form')

        @slot('footer')
            {{ BsForm::submit()->label(trans('additions.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>