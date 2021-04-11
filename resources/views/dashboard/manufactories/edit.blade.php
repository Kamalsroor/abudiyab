<x-layout :title="$manufactory->name" :breadcrumbs="['dashboard.manufactories.edit', $manufactory]">
    {{ BsForm::resource('manufactories')->putModel($manufactory, route('dashboard.manufactories.update', $manufactory)) }}
    @component('dashboard::components.box')
        @slot('title', trans('manufactories.actions.edit'))

        @include('dashboard.manufactories.partials.form')

        @slot('footer')
            {{ BsForm::submit()->label(trans('manufactories.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>