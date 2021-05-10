<x-layout :title="trans('settings.tabs.fleet')" :breadcrumbs="['dashboard.settings.index']">
    {{ BsForm::resource('settings')->patch(route('dashboard.settings.update')) }}
    @component('dashboard::components.box')
        @bsMultilangualFormTabs
            {{ BsForm::text('fleet_title')->value(Settings::locale($locale->code)->get('fleet_title')) }}
            {{ BsForm::textarea('fleet_content')
                ->attribute('class', 'form-control textarea')
                ->value(Settings::locale($locale->code)->get('fleet_content')) }}
        @endBsMultilangualFormTabs
        {{ BsForm::image('fleet_background')->collection('fleet_background')->files(optional(Settings::instance('fleet_background'))->getMediaResource('fleet_background')) }}


        @slot('footer')
            {{ BsForm::submit()->label(trans('settings.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>
