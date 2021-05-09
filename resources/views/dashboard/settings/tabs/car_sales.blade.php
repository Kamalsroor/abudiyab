<x-layout :title="trans('settings.tabs.car_sales')" :breadcrumbs="['dashboard.settings.index']">
    {{ BsForm::resource('settings')->patch(route('dashboard.settings.update')) }}
    @component('dashboard::components.box')

        @bsMultilangualFormTabs
            {{ BsForm::text('car_sales_title')->value(Settings::locale($locale->code)->get('car_sales_title')) }}
            {{ BsForm::textarea('car_sales_content')
                ->attribute('class', 'form-control textarea')
                ->value(Settings::locale($locale->code)->get('car_sales_content')) }}
        @endBsMultilangualFormTabs
        <table>
            <th>
                مقاس الصورة
            </th>
            <td>
                1440*500
            </td>
        </table>
        {{ BsForm::image('car_sales_backgraund')->collection('car_sales_backgraund')->files(optional(Settings::instance('car_sales_backgraund'))->getMediaResource('car_sales_backgraund')) }}


        @slot('footer')
            {{ BsForm::submit()->label(trans('settings.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>
