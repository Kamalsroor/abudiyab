<x-layout :title="trans('settings.tabs.about')" :breadcrumbs="['dashboard.settings.index']">
    {{ BsForm::resource('settings')->patch(route('dashboard.settings.update')) }}
    @component('dashboard::components.box')
       @bsMultilangualFormTabs
        {{ BsForm::text('home_links_title')->value(Settings::locale($locale->code)->get('home_links_title')) }}
        {{ BsForm::textarea('home_description')
        ->attribute('class', 'form-control textarea')
        ->value(Settings::locale($locale->code)->get('home_description')) }}
        @endBsMultilangualFormTabs
            {{ BsForm::image('home_links_backgraund')->collection('home_links_backgraund')->files(optional(Settings::instance('home_links_backgraund'))->getMediaResource('home_links_backgraund')) }}

        <hr>
        @bsMultilangualFormTabs
        {{ BsForm::text('seo_home_title')->value(Settings::locale($locale->code)->get('seo_home_title')) }}
        {{ BsForm::text('seo_home_keywords')->value(Settings::locale($locale->code)->get('seo_home_keywords')) }}
        {{ BsForm::textarea('seo_home_description')
        ->attribute('class', 'form-control ')
        ->value(Settings::locale($locale->code)->get('seo_home_description')) }}

        @endBsMultilangualFormTabs
            {{ BsForm::image('seo_home_image')->collection('seo_home_image')->files(optional(Settings::instance('seo_home_image'))->getMediaResource('seo_home_image')) }}

        @slot('footer')
            {{ BsForm::submit()->label(trans('settings.actions.save')) }}
        @endslot
    @endcomponent



    {{ BsForm::close() }}
</x-layout>
