<x-layout :title="$mediacenter->title" :breadcrumbs="['dashboard.mediacenters.edit', $mediacenter]">
    {{ BsForm::resource('mediacenters')->putModel($mediacenter, route('dashboard.mediacenters.update', $mediacenter)) }}
    @component('dashboard::components.box')
        @slot('title', trans('mediacenters.actions.edit'))

        @include('dashboard.mediacenters.partials.form')

        @slot('footer')
            {{ BsForm::submit()->label(trans('mediacenters.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>
