<x-layout :title="trans('branches.trashed')" :breadcrumbs="['dashboard.branches.trashed']">
    @include('dashboard.branches.partials.filter')

    @component('dashboard::components.table-box')

        @slot('title')
            @lang('branches.actions.list') ({{ count_formatted($branches->total()) }})
        @endslot

        <thead>
        <tr>
            <th colspan="100">
                <x-check-all-force-delete
                        type="{{ \App\Models\Branch::class }}"
                        :resource="trans('branches.plural')"></x-check-all-force-delete>
                <x-check-all-restore
                        type="{{ \App\Models\Branch::class }}"
                        :resource="trans('branches.plural')"></x-check-all-restore>
            </th>
        </tr>
        <tr>
            <th>
                <x-check-all></x-check-all>
            </th>
            <th>@lang('branches.attributes.name')</th>
            <th>@lang('branches.attributes.code')</th>
            <th>@lang('branches.attributes.p_coud')</th>
            <th>@lang('branches.attributes.deleted_at')</th>
            <th style="width: 160px">...</th>
        </tr>
        </thead>
        <tbody>
        @forelse($branches as $branch)
            <tr>
                <td class="text-center">
                  <x-check-all-item :model="$branch"></x-check-all-item>
                </td>
                    <td>
                    <a href="{{ route('dashboard.branches.show', $branch) }}"
                       class="text-decoration-none text-ellipsis">
                        {{ $branch->name }}
                    </a>
                </td>

                <td>{{ $branch->code }}</td>
                <td>{{ $branch->p_coud }}</td>
                <td>{{ $branch->deleted_at->format('Y-m-d') }}</td>

                <td style="width: 160px">
                    @include('dashboard.branches.partials.actions.show')
                    @include('dashboard.branches.partials.actions.restore')
                    @include('dashboard.branches.partials.actions.forceDelete')
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="100" class="text-center">@lang('branches.empty')</td>
            </tr>
        @endforelse

        @if($branches->hasPages())
            @slot('footer')
                {{ $branches->links() }}
            @endslot
        @endif
    @endcomponent
</x-layout>
