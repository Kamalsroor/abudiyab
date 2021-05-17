<x-layout :title="trans('settings.tabs.branches')" :breadcrumbs="['dashboard.settings.index']">
    {{ BsForm::resource('settings')->patch(route('dashboard.settings.update')) }}
    @component('dashboard::components.box')
       @bsMultilangualFormTabs
        {{ BsForm::text('branches_title')->value(Settings::locale($locale->code)->get('branches_title')) }}
        @endBsMultilangualFormTabs
        <table>
            <th>
                مقاس الصورة
            </th>
            <td>
                1440*500
            </td>
        </table>
            {{ BsForm::image('branches_backgraund')->collection('branches_backgraund')->files(optional(Settings::instance('branches_backgraund'))->getMediaResource('branches_backgraund')) }}


            <hr/>
            @bsMultilangualFormTabs
            {{ BsForm::text('seo_branche_title')->value(Settings::locale($locale->code)->get('seo_branche_title')) }}
            {{ BsForm::text('seo_branche_keywords')->value(Settings::locale($locale->code)->get('seo_branche_keywords')) }}
            {{ BsForm::textarea('seo_branche_description')
            ->attribute('class', 'form-control ')
            ->value(Settings::locale($locale->code)->get('seo_branche_description')) }}

            @endBsMultilangualFormTabs
                {{ BsForm::image('seo_branche_image')->collection('seo_branche_image')->files(optional(Settings::instance('seo_branche_image'))->getMediaResource('seo_branche_image')) }}


        @slot('footer')
            {{ BsForm::submit()->label(trans('settings.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>
