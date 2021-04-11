<x-layout :title="$partner->name" :breadcrumbs="['dashboard.partners.edit', $partner]">
    {{ BsForm::resource('partners')->putModel($partner, route('dashboard.partners.update', $partner)) }}
    @component('dashboard::components.box')
        @slot('title', trans('partners.actions.edit'))

        @include('dashboard.partners.partials.form')

        @slot('footer')
            {{ BsForm::submit()->label(trans('partners.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>