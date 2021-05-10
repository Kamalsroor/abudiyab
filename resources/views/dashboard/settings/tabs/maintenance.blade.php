<x-layout :title="trans('settings.tabs.car_sales')" :breadcrumbs="['dashboard.settings.index']">
    {{ BsForm::resource('settings')->patch(route('dashboard.settings.update')) }}
    @component('dashboard::components.box')

        @bsMultilangualFormTabs
            {{ BsForm::text('maintenance_title')->value(Settings::locale($locale->code)->get('maintenance_title')) }}
            {{ BsForm::textarea('maintenance_content')
                ->attribute('class', 'form-control textarea')
                ->value(Settings::locale($locale->code)->get('maintenance_content')) }}
        @endBsMultilangualFormTabs
        <table>
            <th>
                مقاس الصورة
            </th>
            <td>
                1440*500
            </td>
        </table>
        {{ BsForm::image('maintenance_backgraund')->collection('maintenance_backgraund')->files(optional(Settings::instance('maintenance_backgraund'))->getMediaResource('maintenance_backgraund')) }}


        @slot('footer')
            {{ BsForm::submit()->label(trans('settings.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>
