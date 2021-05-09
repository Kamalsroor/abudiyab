<x-layout :title="trans('settings.tabs.car_sales')" :breadcrumbs="['dashboard.settings.index']">
    {{ BsForm::resource('settings')->patch(route('dashboard.settings.update')) }}
    @component('dashboard::components.box')
            <div class="row">
                <div class="col-4">
                    {{ BsForm::number('visa_offer')->max(100)->value(Settings::get('visa_offer'))}}
                </div>
            </div>

        @slot('footer')
            {{ BsForm::submit()->label(trans('settings.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>
