<x-layout :title="trans('settings.tabs.points')" :breadcrumbs="['dashboard.settings.index']">
    {{ BsForm::resource('settings')->patch(route('dashboard.settings.update')) }}
    @component('dashboard::components.box')

        @bsMultilangualFormTabs
            {{ BsForm::text('points_title')->value(Settings::locale($locale->code)->get('points_title')) }}
            {{ BsForm::textarea('points_content')
                ->attribute('class', 'form-control textarea')
                ->value(Settings::locale($locale->code)->get('points_content')) }}
        @endBsMultilangualFormTabs
        <table>
            <th>
                مقاس الصورة
            </th>
            <td>
                1440*500
            </td>
        </table>
        {{ BsForm::image('points_background')->collection('points_background')->files(optional(Settings::instance('points_background'))->getMediaResource('points_background')) }}


        @slot('footer')
            {{ BsForm::submit()->label(trans('settings.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>
