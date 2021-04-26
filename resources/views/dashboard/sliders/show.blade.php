<x-layout :title="$slider->name" :breadcrumbs="['dashboard.sliders.show', $slider]">
    <div class="row">
        <div class="col-md-12">
            @component('dashboard::components.box')
                @slot('class', 'p-0')
                @slot('bodyClass', 'p-0')

                <table class="table table-striped table-middle">
                    <tbody>
                    <tr>
                        <th width="200">@lang('sliders.attributes.name')</th>
                        <td>{{ $slider->name }}</td>
                    </tr>
                    <tr>
                        <th width="200">@lang('sliders.attributes.name')</th>
                        <td>{{ $slider->is_mobile ? 'اظهار في الهاتف'  : 'تظهر في الشاشه الكبيرة'}}</td>
                    </tr>


                    <tr>
                        <th width="200">@lang('sliders.attributes.first_header')</th>
                        <td>{{ $slider->first_header}}</td>
                    </tr>

                    <tr>
                        <th width="200">@lang('sliders.attributes.second_header')</th>
                        <td>{{ $slider->second_header}}</td>
                    </tr>
                    @if($slider->getFirstMedia())
                        <tr>
                            <th width="200">@lang('sliders.attributes.image')</th>
                            <td>
                                <file-preview :media="{{ $slider->getMediaResource() }}"></file-preview>
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>

                @slot('footer')
                    @include('dashboard.sliders.partials.actions.edit')
                    @include('dashboard.sliders.partials.actions.delete')
                @endslot
            @endcomponent
        </div>
    </div>
</x-layout>
