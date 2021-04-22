<x-layout :title="trans('works.trashed')" :breadcrumbs="['dashboard.works.trashed']">
    @include('dashboard.works.partials.filter')

    @component('dashboard::components.table-box')

        @slot('title')
            @lang('works.actions.list') ({{ count_formatted($works->total()) }})
        @endslot

        <thead>
        <tr>
            <th colspan="100">
                <x-check-all-force-delete
                        type="{{ \App\Models\Work::class }}"
                        :resource="trans('works.plural')"></x-check-all-force-delete>
                <x-check-all-restore
                        type="{{ \App\Models\Work::class }}"
                        :resource="trans('works.plural')"></x-check-all-restore>
            </th>
        </tr>
        <tr>
            <th>
                <x-check-all></x-check-all>
            </th>
            <th>@lang('works.attributes.name')</th>
            <th>@lang('works.attributes.deleted_at')</th>
            <th style="width: 160px">...</th>
        </tr>
        </thead>
        <tbody>
        @forelse($works as $work)
            <tr>
                <td class="text-center">
                  <x-check-all-item :model="$work"></x-check-all-item>
                </td>
                <td>
                    <a href="{{ route('dashboard.works.show', $work) }}"
                       class="text-decoration-none text-ellipsis">
                        {{ $work->name }}
                    </a>
                </td>

                <td>{{ $work->deleted_at->format('Y-m-d') }}</td>

                <td style="width: 160px">
                    @include('dashboard.works.partials.actions.show')
                    @include('dashboard.works.partials.actions.restore')
                    @include('dashboard.works.partials.actions.forceDelete')
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="100" class="text-center">@lang('works.empty')</td>
            </tr>
        @endforelse

        @if($works->hasPages())
            @slot('footer')
                {{ $works->links() }}
            @endslot
        @endif
    @endcomponent
</x-layout>
