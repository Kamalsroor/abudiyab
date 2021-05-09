<x-layout :title="$addition->name" :breadcrumbs="['dashboard.additions.edit', $addition]">
    {{ BsForm::resource('additions')->putModel($addition, route('dashboard.additions.update', $addition)) }}
    @component('dashboard::components.box')
        @slot('title', trans('additions.actions.edit'))

        @include('dashboard.additions.partials.form')

        @slot('footer')
            {{ BsForm::submit()->label(trans('additions.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>