<x-layout :title="$purchaserequest->name" :breadcrumbs="['dashboard.purchaserequests.edit', $purchaserequest]">
    {{ BsForm::resource('purchaserequests')->putModel($purchaserequest, route('dashboard.purchaserequests.update', $purchaserequest)) }}
    @component('dashboard::components.box')
        @slot('title', trans('purchaserequests.actions.edit'))

        @include('dashboard.purchaserequests.partials.form')

        @slot('footer')
            {{ BsForm::submit()->label(trans('purchaserequests.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>