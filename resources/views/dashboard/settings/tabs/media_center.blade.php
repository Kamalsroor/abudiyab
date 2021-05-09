<x-layout :title="trans('settings.tabs.car_sales')" :breadcrumbs="['dashboard.settings.index']">
    {{ BsForm::resource('settings')->patch(route('dashboard.settings.update')) }}
    @component('dashboard::components.box')

        @bsMultilangualFormTabs
            {{ BsForm::text('media_center_title')->value(Settings::locale($locale->code)->get('media_center_title')) }}
            {{ BsForm::textarea('media_center_content')
                ->attribute('class', 'form-control textarea')
                ->value(Settings::locale($locale->code)->get('media_center_content')) }}
        @endBsMultilangualFormTabs
        <table>
            <th>
                مقاس الصورة
            </th>
            <td>
                1440*500
            </td>
        </table>
        {{ BsForm::image('media_center_background')->collection('media_center_background')->files(optional(Settings::instance('media_center_background'))->getMediaResource('media_center_background')) }}


        @slot('footer')
            {{ BsForm::submit()->label(trans('settings.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>
