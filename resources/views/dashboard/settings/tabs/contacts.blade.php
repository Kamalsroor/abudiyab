<x-layout :title="trans('settings.tabs.contacts')" :breadcrumbs="['dashboard.settings.index']">
    {{ BsForm::resource('settings')->patch(route('dashboard.settings.update')) }}
    @component('dashboard::components.box')

        {{ BsForm::text('email')->value(Settings::get('email')) }}
        {{ BsForm::text('phone')->value(Settings::get('phone')) }}
        {{ BsForm::text('branch_name')->value(Settings::get('branch_name')) }}
        {{ BsForm::text('address')->value(Settings::get('address')) }}
        {{ BsForm::text('facebook')->value(Settings::get('facebook')) }}
        {{ BsForm::text('twitter')->value(Settings::get('twitter')) }}
        {{ BsForm::text('instagram')->value(Settings::get('instagram')) }}
        {{ BsForm::text('youtube')->value(Settings::get('youtube')) }}
        {{ BsForm::text('linkedin')->value(Settings::get('linkedin')) }}
        {{ BsForm::text('whatsapp')->value(Settings::get('whatsapp')) }}
        {{ BsForm::text('apple')->value(Settings::get('apple')) }}
        {{ BsForm::text('android')->value(Settings::get('android')) }}
        {{ BsForm::text('huawei')->value(Settings::get('huawei')) }}

        @bsMultilangualFormTabs
        {{ BsForm::text('footer_subscripe_title')->value(Settings::locale($locale->code)->get('footer_subscripe_title')) }}
        @endBsMultilangualFormTabs


        @slot('footer')
            {{ BsForm::submit()->label(trans('settings.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>
