<x-layout :title="trans('carsales.trashed')" :breadcrumbs="['dashboard.carsales.trashed']">
    @include('dashboard.carsales.partials.filter')

    @component('dashboard::components.table-box')

        @slot('title')
            @lang('carsales.actions.list') ({{ count_formatted($carsales->total()) }})
        @endslot

        <thead>
        <tr>
            <th colspan="100">
                <x-check-all-force-delete
                        type="{{ \App\Models\Carsale::class }}"
                        :resource="trans('carsales.plural')"></x-check-all-force-delete>
                <x-check-all-restore
                        type="{{ \App\Models\Carsale::class }}"
                        :resource="trans('carsales.plural')"></x-check-all-restore>
            </th>
        </tr>
        <tr>
            <th>
                <x-check-all></x-check-all>
            </th>
            <th>@lang('carsales.attributes.name')</th>
            <th>@lang('carsales.attributes.deleted_at')</th>
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
                        {{ $carsale->name }}
                    </a>
                </td>

                <td>{{ $carsale->deleted_at->format('Y-m-d') }}</td>

                <td style="width: 160px">
                    @include('dashboard.carsales.partials.actions.show')
                    @include('dashboard.carsales.partials.actions.restore')
                    @include('dashboard.carsales.partials.actions.forceDelete')
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
