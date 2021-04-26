<x-layout :title="trans('memberships.trashed')" :breadcrumbs="['dashboard.memberships.trashed']">
    @include('dashboard.memberships.partials.filter')

    @component('dashboard::components.table-box')

        @slot('title')
            @lang('memberships.actions.list') ({{ count_formatted($memberships->total()) }})
        @endslot

        <thead>
        <tr>
            <th colspan="100">
                <x-check-all-force-delete
                        type="{{ \App\Models\Membership::class }}"
                        :resource="trans('memberships.plural')"></x-check-all-force-delete>
                <x-check-all-restore
                        type="{{ \App\Models\Membership::class }}"
                        :resource="trans('memberships.plural')"></x-check-all-restore>
            </th>
        </tr>
        <tr>
            <th>
                <x-check-all></x-check-all>
            </th>
            <th>@lang('memberships.attributes.name')</th>
            <th>@lang('memberships.attributes.deleted_at')</th>
            <th style="width: 160px">...</th>
        </tr>
        </thead>
        <tbody>
        @forelse($memberships as $membership)
            <tr>
                <td class="text-center">
                  <x-check-all-item :model="$membership"></x-check-all-item>
                </td>
                    <td>
                    <a href="{{ route('dashboard.memberships.show', $membership) }}"
                       class="text-decoration-none text-ellipsis">

                        <img src="{{ $membership->getFirstMediaUrl() }}"
                             alt="Product 1"
                             class="img-circle img-size-32 mr-2" style="height: 32px;">
                        {{ $membership->name }}
                    </a>
                </td>

                <td>{{ $membership->deleted_at->format('Y-m-d') }}</td>

                <td style="width: 160px">
                    @include('dashboard.memberships.partials.actions.show')
                    @include('dashboard.memberships.partials.actions.restore')
                    @include('dashboard.memberships.partials.actions.forceDelete')
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="100" class="text-center">@lang('memberships.empty')</td>
            </tr>
        @endforelse

        @if($memberships->hasPages())
            @slot('footer')
                {{ $memberships->links() }}
            @endslot
        @endif
    @endcomponent
</x-layout>
