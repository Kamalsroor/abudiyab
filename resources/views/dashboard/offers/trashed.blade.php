<x-layout :title="trans('offers.trashed')" :breadcrumbs="['dashboard.offers.trashed']">
    @include('dashboard.offers.partials.filter')

    @component('dashboard::components.table-box')

        @slot('title')
            @lang('offers.actions.list') ({{ count_formatted($offers->total()) }})
        @endslot

        <thead>
        <tr>
            <th colspan="100">
                <x-check-all-force-delete
                        type="{{ \App\Models\Offer::class }}"
                        :resource="trans('offers.plural')"></x-check-all-force-delete>
                <x-check-all-restore
                        type="{{ \App\Models\Offer::class }}"
                        :resource="trans('offers.plural')"></x-check-all-restore>
            </th>
        </tr>
        <tr>
            <th>
                <x-check-all></x-check-all>
            </th>
            <th>@lang('offers.attributes.name')</th>
            <th>@lang('offers.attributes.deleted_at')</th>
            <th style="width: 160px">...</th>
        </tr>
        </thead>
        <tbody>
        @forelse($offers as $offer)
            <tr>
                <td class="text-center">
                  <x-check-all-item :model="$offer"></x-check-all-item>
                </td>
                    <td>
                    <a href="{{ route('dashboard.offers.show', $offer) }}"
                       class="text-decoration-none text-ellipsis">

                        <img src="{{ $offer->getFirstMediaUrl() }}"
                             alt="Product 1"
                             class="img-circle img-size-32 mr-2" style="height: 32px;">
                        {{ $offer->name }}
                    </a>
                </td>

                <td>{{ $offer->deleted_at->format('Y-m-d') }}</td>

                <td style="width: 160px">
                    @include('dashboard.offers.partials.actions.show')
                    @include('dashboard.offers.partials.actions.restore')
                    @include('dashboard.offers.partials.actions.forceDelete')
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="100" class="text-center">@lang('offers.empty')</td>
            </tr>
        @endforelse

        @if($offers->hasPages())
            @slot('footer')
                {{ $offers->links() }}
            @endslot
        @endif
    @endcomponent
</x-layout>
