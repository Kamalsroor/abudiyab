<x-layout :title="trans('purchaserequests.actions.create')" :breadcrumbs="['dashboard.purchaserequests.create']">
    {{ BsForm::resource('purchaserequests')->post(route('dashboard.purchaserequests.store')) }}
    @component('dashboard::components.box')
        @slot('title', trans('purchaserequests.actions.create'))

        @include('dashboard.purchaserequests.partials.form')

        @slot('footer')
            {{ BsForm::submit()->label(trans('purchaserequests.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>