<x-layout :title="trans('carsales.plural')" :breadcrumbs="['dashboard.carsales.index']">
    @include('dashboard.carsales.partials.filter')

    @component('dashboard::components.table-box')
        @slot('title')
            @lang('carsales.actions.list') ({{ $carsales->total() }})
        @endslot

        <thead>
        <tr>
          <th colspan="100">
            <div class="d-flex">
                <x-check-all-delete
                    type="{{ \App\Models\Carsale::class }}"
                    :resource="trans('carsales.plural')"></x-check-all-delete>
                <x-import-excel
                            model="{{ \App\Models\Carsale::class }}"
                            import="{{ \App\Imports\CarsalesImport::class }}"
                            exportResource="{{ App\Http\Resources\CarsaleResource::class }}"
                            :resource="trans('carsales.plural')"></x-import-excel>
                <x-export-excel
                            model="{{ \App\Models\Carsale::class }}"
                            export="{{ \App\Exports\Export::class }}"
                            resource="{{ App\Http\Resources\CarsaleResource::class }}"
                            fileName="Carsales"
                            ></x-export-excel>
                <div class="ml-2 d-flex justify-content-between flex-grow-1">
                    @include('dashboard.carsales.partials.actions.create')
                    @include('dashboard.carsales.partials.actions.trashed')
                </div>
            </div>
          </th>
        </tr>
        <tr>
            <th style="width: 30px;" class="text-center">
              <x-check-all></x-check-all>
            </th>
            <th>@lang('carsales.attributes.name')</th>
            <th>@lang('carsales.attributes.model')</th>
            <th>@lang('carsales.attributes.brand')</th>
            <th>@lang('carsales.attributes.couter')</th>
            <th>@lang('carsales.attributes.color_interior')</th>
            <th>@lang('carsales.attributes.color_exterior')</th>
            <th>@lang('carsales.attributes.quantity')</th>
            <th>@lang('carsales.attributes.for_sale')</th>
            <th>@lang('carsales.attributes.sold')</th>
            <th>@lang('carsales.attributes.created_at')</th>
            <th style="width: 160px">...</th>
        </tr>
        </thead>
        <tbody>
        @forelse($carsales as $carsale)
            <tr>
                <td class="text-center">
                  <x-check-all-item :model="$carsale"></x-check-all-item>
                </td>
                <td>
                    <a href="{{ route('dashboard.carsales.show', $carsale) }}"
                       class="text-decoration-none text-ellipsis">
                        {{ $carsale->car->name }}
                    </a>
                </td>
                <td>
                    <a href="{{ route('dashboard.carsales.show', $carsale) }}"
                       class="text-decoration-none text-ellipsis">
                        {{ $carsale->car->model }}
                    </a>
                </td>
                <td>
                    <a href="{{ route('dashboard.carsales.show', $carsale) }}"
                       class="text-decoration-none text-ellipsis">
                        {{ $carsale->car->manufactory->name }}
                    </a>
                </td>
                <td>
                    <a href="{{ route('dashboard.carsales.show', $carsale) }}"
                       class="text-decoration-none text-ellipsis">
                        {{ $carsale->couter }}
                    </a>
                </td>
                <td>
                    <a href="{{ route('dashboard.carsales.show', $carsale) }}"
                       class="text-decoration-none text-ellipsis">
                        {{ $carsale->color_interior }}
                    </a>
                </td>
                <td>
                    <a href="{{ route('dashboard.carsales.show', $carsale) }}"
                       class="text-decoration-none text-ellipsis">
                        {{ $carsale->color_exterior }}
                    </a>
                </td>
                <td>
                    <a href="{{ route('dashboard.carsales.show', $carsale) }}"
                       class="text-decoration-none text-ellipsis">
                        {{ $carsale->quantity }}
                    </a>
                </td>
                <td>
                    <a href="{{ route('dashboard.carsales.show', $carsale) }}"
                       class="text-decoration-none text-ellipsis">
                        {{ $carsale->for_sale }}
                    </a>
                </td>
                <td>
                    <a href="{{ route('dashboard.carsales.show', $carsale) }}"
                       class="text-decoration-none text-ellipsis">
                        {{ $carsale->sold }}
                    </a>
                </td>
                <td>{{ $carsale->created_at->format('Y-m-d') }}</td>

                <td style="width: 160px">
                    @include('dashboard.carsales.partials.actions.show')
                    @include('dashboard.carsales.partials.actions.edit')
                    @include('dashboard.carsales.partials.actions.delete')
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="100" class="text-center">@lang('carsales.empty')</td>
            </tr>
        @endforelse

        @if($carsales->hasPages())
            @slot('footer')
                {{ $carsales->links() }}
            @endslot
        @endif
    @endcomponent
</x-layout>
