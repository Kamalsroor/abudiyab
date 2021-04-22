<x-layout :title="$work->title" :breadcrumbs="['dashboard.works.edit', $work]">
    {{ BsForm::resource('works')->putModel($work, route('dashboard.works.update', $work)) }}
    @component('dashboard::components.box')
        @slot('title', trans('works.actions.edit'))

        @include('dashboard.works.partials.form')

        @slot('footer')
            {{ BsForm::submit()->label(trans('works.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>
