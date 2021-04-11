<x-layout :title="trans('sliders.plural')" :breadcrumbs="['dashboard.sliders.index']">
    @include('dashboard.sliders.partials.filter')

    @component('dashboard::components.table-box')
        @slot('title')
            @lang('sliders.actions.list') ({{ $sliders->total() }})
        @endslot

        <thead>
        <tr>
          <th colspan="100">
            <div class="d-flex">
                <x-check-all-delete
                    type="{{ \App\Models\Slider::class }}"
                    :resource="trans('sliders.plural')"></x-check-all-delete>
                <x-import-excel
                            model="{{ \App\Models\Slider::class }}"
                            import="{{ \App\Imports\SlidersImport::class }}"
                            exportResource="{{ App\Http\Resources\SliderResource::class }}"
                            :resource="trans('sliders.plural')"></x-import-excel>
                <x-export-excel
                            model="{{ \App\Models\Slider::class }}"
                            export="{{ \App\Exports\Export::class }}"
                            resource="{{ App\Http\Resources\SliderResource::class }}"
                            fileName="Sliders"
                            ></x-export-excel>
                <div class="ml-2 d-flex justify-content-between flex-grow-1">
                    @include('dashboard.sliders.partials.actions.create')
                    @include('dashboard.sliders.partials.actions.trashed')
                </div>
            </div>
          </th>
        </tr>
        <tr>
            <th style="width: 30px;" class="text-center">
              <x-check-all></x-check-all>
            </th>
            <th>@lang('sliders.attributes.name')</th>
            <th>@lang('sliders.attributes.created_at')</th>
            <th style="width: 160px">...</th>
        </tr>
        </thead>
        <tbody>
        @forelse($sliders as $slider)
            <tr>
                <td class="text-center">
                  <x-check-all-item :model="$slider"></x-check-all-item>
                </td>
                <td>
                    <a href="{{ route('dashboard.sliders.show', $slider) }}"
                       class="text-decoration-none text-ellipsis">

                        <img src="{{ $slider->getFirstMediaUrl() }}"
                             alt="Product 1"
                             class="img-circle img-size-32 mr-2" style="height: 32px;">
                        {{ $slider->name }}
                    </a>
                </td>
                <td>{{ $slider->created_at->format('Y-m-d') }}</td>

                <td style="width: 160px">
                    @include('dashboard.sliders.partials.actions.show')
                    @include('dashboard.sliders.partials.actions.edit')
                    @include('dashboard.sliders.partials.actions.delete')
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="100" class="text-center">@lang('sliders.empty')</td>
            </tr>
        @endforelse

        @if($sliders->hasPages())
            @slot('footer')
                {{ $sliders->links() }}
            @endslot
        @endif
    @endcomponent
</x-layout>
