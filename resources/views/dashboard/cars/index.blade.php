<x-layout :title="trans('cars.plural')" :breadcrumbs="['dashboard.cars.index']">
    @include('dashboard.cars.partials.filter')

    @component('dashboard::components.table-box')
        @slot('title')
            @lang('cars.actions.list') ({{ $cars->total() }})
        @endslot

        <thead>
        <tr>
          <th colspan="100">
            <div class="d-flex">
                <x-check-all-delete
                    type="{{ \App\Models\Car::class }}"
                    :resource="trans('cars.plural')"></x-check-all-delete>
                <x-import-excel
                            model="{{ \App\Models\Car::class }}"
                            import="{{ \App\Imports\CarsImport::class }}"
                            exportResource="{{ App\Http\Resources\CarResource::class }}"
                            :resource="trans('cars.plural')"></x-import-excel>
                <x-export-excel
                            model="{{ \App\Models\Car::class }}"
                            export="{{ \App\Exports\Export::class }}"
                            resource="{{ App\Http\Resources\CarResource::class }}"
                            fileName="Cars"
                            ></x-export-excel>
                <div class="ml-2 d-flex justify-content-between flex-grow-1">
                    @include('dashboard.cars.partials.actions.create')
                    @include('dashboard.cars.partials.actions.trashed')
                </div>
            </div>
          </th>
        </tr>



        <tr>
            <th style="width: 30px;" class="text-center">
              <x-check-all></x-check-all>
            </th>
            <th>@lang('cars.attributes.name')</th>
            <th>@lang('cars.attributes.code')</th>
            <th>@lang('categories.singular')</th>
            {{-- <th>@lang('branches.singular')</th> --}}
            <th>@lang('manufactories.singular')</th>
            <th>@lang('cars.attributes.price2')</th>
            <th>@lang('cars.attributes.price1')</th>
            <th>@lang('cars.attributes.created_at')</th>
            <th style="width: 160px">...</th>
        </tr>
        </thead>
        <tbody>
        @forelse($cars as $car)
            <tr>
                <td class="text-center">
                  <x-check-all-item :model="$car"></x-check-all-item>
                </td>
                <td>
                    <a href="{{ route('dashboard.cars.show', $car) }}"
                       class="text-decoration-none text-ellipsis">

                        <img src="{{ $car->getFirstMediaUrl() }}"
                             alt="Product 1"
                             class="img-circle img-size-32 mr-2" style="height: 32px;">
                        {{ $car->name }}
                    </a>
                </td>
                    <td>{{ $car->code }}</td>
                    <td>{{ $car->category ? $car->category->name : "" }}</td>
                    {{-- <td>{{ $car->branch->name }}</td> --}}
                    <td>{{ $car->manufactory ? $car->manufactory->name : "" }}</td>
                    <td>{{ $car->price2 }}</td>
                    <td>{{ $car->price1 }}</td>

                <td>{{ $car->created_at->format('Y-m-d') }}</td>

                <td style="width: 160px">
                    @include('dashboard.cars.partials.actions.show')
                    @include('dashboard.cars.partials.actions.edit')
                    @include('dashboard.cars.partials.actions.delete')
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="100" class="text-center">@lang('cars.empty')</td>
            </tr>
        @endforelse

        @if($cars->hasPages())
            @slot('footer')
                {{ $cars->links() }}
            @endslot
        @endif
    @endcomponent
</x-layout>
