<x-layout :title="trans('area_pricings.trashed')" :breadcrumbs="['dashboard.area_pricings.trashed']">
    @include('dashboard.area_pricings.partials.filter')

    @component('dashboard::components.table-box')

        @slot('title')
            @lang('area_pricings.actions.list') ({{ count_formatted($area_pricings->total()) }})
        @endslot

        <thead>
        <tr>
            <th colspan="100">
                <x-check-all-force-delete
                        type="{{ \App\Models\AreaPricing::class }}"
                        :resource="trans('area_pricings.plural')"></x-check-all-force-delete>
                <x-check-all-restore
                        type="{{ \App\Models\AreaPricing::class }}"
                        :resource="trans('area_pricings.plural')"></x-check-all-restore>
            </th>
        </tr>
        <tr>
            <th>
                <x-check-all></x-check-all>
            </th>
            <th>@lang('area_pricings.attributes.name')</th>
            <th>@lang('area_pricings.attributes.deleted_at')</th>
            <th style="width: 160px">...</th>
        </tr>
        </thead>
        <tbody>
        @forelse($area_pricings as $area_pricing)
            <tr>
                <td class="text-center">
                  <x-check-all-item :model="$area_pricing"></x-check-all-item>
                </td>
                <td>
                    <a href="{{ route('dashboard.area_pricings.show', $area_pricing) }}"
                       class="text-decoration-none text-ellipsis">
                        {{ $area_pricing->name }}
                    </a>
                </td>

                <td>{{ $area_pricing->deleted_at->format('Y-m-d') }}</td>

                <td style="width: 160px">
                    @include('dashboard.area_pricings.partials.actions.show')
                    @include('dashboard.area_pricings.partials.actions.restore')
                    @include('dashboard.area_pricings.partials.actions.forceDelete')
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="100" class="text-center">@lang('area_pricings.empty')</td>
            </tr>
        @endforelse

        @if($area_pricings->hasPages())
            @slot('footer')
                {{ $area_pricings->links() }}
            @endslot
        @endif
    @endcomponent
</x-layout>
