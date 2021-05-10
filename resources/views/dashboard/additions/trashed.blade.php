<x-layout :title="trans('additions.trashed')" :breadcrumbs="['dashboard.additions.trashed']">
    @include('dashboard.additions.partials.filter')

    @component('dashboard::components.table-box')

        @slot('title')
            @lang('additions.actions.list') ({{ count_formatted($additions->total()) }})
        @endslot

        <thead>
        <tr>
            <th colspan="100">
                <x-check-all-force-delete
                        type="{{ \App\Models\Addition::class }}"
                        :resource="trans('additions.plural')"></x-check-all-force-delete>
                <x-check-all-restore
                        type="{{ \App\Models\Addition::class }}"
                        :resource="trans('additions.plural')"></x-check-all-restore>
            </th>
        </tr>
        <tr>
            <th>
                <x-check-all></x-check-all>
            </th>
            <th>@lang('additions.attributes.name')</th>
            <th>@lang('additions.attributes.deleted_at')</th>
            <th style="width: 160px">...</th>
        </tr>
        </thead>
        <tbody>
        @forelse($additions as $addition)
            <tr>
                <td class="text-center">
                  <x-check-all-item :model="$addition"></x-check-all-item>
                </td>
                    <td>
                    <a href="{{ route('dashboard.additions.show', $addition) }}"
                       class="text-decoration-none text-ellipsis">

                        <img src="{{ $addition->getFirstMediaUrl() }}"
                             alt="Product 1"
                             class="img-circle img-size-32 mr-2" style="height: 32px;">
                        {{ $addition->name }}
                    </a>
                </td>

                <td>{{ $addition->deleted_at->format('Y-m-d') }}</td>

                <td style="width: 160px">
                    @include('dashboard.additions.partials.actions.show')
                    @include('dashboard.additions.partials.actions.restore')
                    @include('dashboard.additions.partials.actions.forceDelete')
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="100" class="text-center">@lang('additions.empty')</td>
            </tr>
        @endforelse

        @if($additions->hasPages())
            @slot('footer')
                {{ $additions->links() }}
            @endslot
        @endif
    @endcomponent
</x-layout>
