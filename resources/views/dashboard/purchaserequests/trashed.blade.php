<x-layout :title="trans('purchaserequests.trashed')" :breadcrumbs="['dashboard.purchaserequests.trashed']">
    @include('dashboard.purchaserequests.partials.filter')

    @component('dashboard::components.table-box')

        @slot('title')
            @lang('purchaserequests.actions.list') ({{ count_formatted($purchaserequests->total()) }})
        @endslot

        <thead>
        <tr>
            <th colspan="100">
                <x-check-all-force-delete
                        type="{{ \App\Models\Purchaserequest::class }}"
                        :resource="trans('purchaserequests.plural')"></x-check-all-force-delete>
                <x-check-all-restore
                        type="{{ \App\Models\Purchaserequest::class }}"
                        :resource="trans('purchaserequests.plural')"></x-check-all-restore>
            </th>
        </tr>
        <tr>
            <th>
                <x-check-all></x-check-all>
            </th>
            <th>@lang('purchaserequests.attributes.name')</th>
            <th>@lang('purchaserequests.attributes.deleted_at')</th>
            <th style="width: 160px">...</th>
        </tr>
        </thead>
        <tbody>
        @forelse($purchaserequests as $purchaserequest)
            <tr>
                <td class="text-center">
                  <x-check-all-item :model="$purchaserequest"></x-check-all-item>
                </td>
                <td>
                    <a href="{{ route('dashboard.purchaserequests.show', $purchaserequest) }}"
                       class="text-decoration-none text-ellipsis">
                        {{ $purchaserequest->name }}
                    </a>
                </td>

                <td>{{ $purchaserequest->deleted_at->format('Y-m-d') }}</td>

                <td style="width: 160px">
                    @include('dashboard.purchaserequests.partials.actions.show')
                    @include('dashboard.purchaserequests.partials.actions.restore')
                    @include('dashboard.purchaserequests.partials.actions.forceDelete')
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="100" class="text-center">@lang('purchaserequests.empty')</td>
            </tr>
        @endforelse

        @if($purchaserequests->hasPages())
            @slot('footer')
                {{ $purchaserequests->links() }}
            @endslot
        @endif
    @endcomponent
</x-layout>
