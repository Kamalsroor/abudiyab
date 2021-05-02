<x-layout :title="trans('mediacenters.trashed')" :breadcrumbs="['dashboard.mediacenters.trashed']">
    @include('dashboard.mediacenters.partials.filter')

    @component('dashboard::components.table-box')

        @slot('title')
            @lang('mediacenters.actions.list') ({{ count_formatted($mediacenters->total()) }})
        @endslot

        <thead>
        <tr>
            <th colspan="100">
                <x-check-all-force-delete
                        type="{{ \App\Models\Mediacenter::class }}"
                        :resource="trans('mediacenters.plural')"></x-check-all-force-delete>
                <x-check-all-restore
                        type="{{ \App\Models\Mediacenter::class }}"
                        :resource="trans('mediacenters.plural')"></x-check-all-restore>
            </th>
        </tr>
        <tr>
            <th>
                <x-check-all></x-check-all>
            </th>
            <th>@lang('mediacenters.attributes.name')</th>
            <th>@lang('mediacenters.attributes.deleted_at')</th>
            <th style="width: 160px">...</th>
        </tr>
        </thead>
        <tbody>
        @forelse($mediacenters as $mediacenter)
            <tr>
                <td class="text-center">
                  <x-check-all-item :model="$mediacenter"></x-check-all-item>
                </td>
                    <td>
                    <a href="{{ route('dashboard.mediacenters.show', $mediacenter) }}"
                       class="text-decoration-none text-ellipsis">

                        <img src="{{ $mediacenter->getFirstMediaUrl() }}"
                             alt="Product 1"
                             class="img-circle img-size-32 mr-2" style="height: 32px;">
                        {{ $mediacenter->name }}
                    </a>
                </td>

                <td>{{ $mediacenter->deleted_at->format('Y-m-d') }}</td>

                <td style="width: 160px">
                    @include('dashboard.mediacenters.partials.actions.show')
                    @include('dashboard.mediacenters.partials.actions.restore')
                    @include('dashboard.mediacenters.partials.actions.forceDelete')
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="100" class="text-center">@lang('mediacenters.empty')</td>
            </tr>
        @endforelse

        @if($mediacenters->hasPages())
            @slot('footer')
                {{ $mediacenters->links() }}
            @endslot
        @endif
    @endcomponent
</x-layout>
