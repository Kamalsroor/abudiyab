<x-layout :title="trans('settings.tabs.branches')" :breadcrumbs="['dashboard.settings.index']">
    {{ BsForm::resource('settings')->patch(route('dashboard.settings.update')) }}
    @component('dashboard::components.box')
       @bsMultilangualFormTabs
        {{ BsForm::text('branches_title')->value(Settings::locale($locale->code)->get('branches_title')) }}
        @endBsMultilangualFormTabs
            {{ BsForm::image('branches_backgraund')->collection('branches_backgraund')->files(optional(Settings::instance('branches_backgraund'))->getMediaResource('branches_backgraund')) }}
        @slot('footer')
            {{ BsForm::submit()->label(trans('settings.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>
