<x-layout :title="trans('works.actions.create')" :breadcrumbs="['dashboard.works.create']">
    {{ BsForm::resource('works')->post(route('dashboard.works.store')) }}
    @component('dashboard::components.box')
        @slot('title', trans('works.actions.create'))

        @include('dashboard.works.partials.form')

        @slot('footer')
            {{ BsForm::submit()->label(trans('works.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>
