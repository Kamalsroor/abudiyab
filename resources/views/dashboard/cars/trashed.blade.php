<x-layout :title="trans('cars.trashed')" :breadcrumbs="['dashboard.cars.trashed']">
    @include('dashboard.cars.partials.filter')

    @component('dashboard::components.table-box')

        @slot('title')
            @lang('cars.actions.list') ({{ count_formatted($cars->total()) }})
        @endslot

        <thead>
        <tr>
            <th colspan="100">
                <x-check-all-force-delete
                        type="{{ \App\Models\Car::class }}"
                        :resource="trans('cars.plural')"></x-check-all-force-delete>
                <x-check-all-restore
                        type="{{ \App\Models\Car::class }}"
                        :resource="trans('cars.plural')"></x-check-all-restore>
            </th>
        </tr>
        <tr>
            <th>
                <x-check-all></x-check-all>
            </th>
            <th>@lang('cars.attributes.name')</th>
            <th>@lang('cars.attributes.deleted_at')</th>
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

                <td>{{ $car->deleted_at->format('Y-m-d') }}</td>

                <td style="width: 160px">
                    @include('dashboard.cars.partials.actions.show')
                    @include('dashboard.cars.partials.actions.restore')
                    @include('dashboard.cars.partials.actions.forceDelete')
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
