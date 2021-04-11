<x-layout :title="trans('manufactories.trashed')" :breadcrumbs="['dashboard.manufactories.trashed']">
    @include('dashboard.manufactories.partials.filter')

    @component('dashboard::components.table-box')

        @slot('title')
            @lang('manufactories.actions.list') ({{ count_formatted($manufactories->total()) }})
        @endslot

        <thead>
        <tr>
            <th colspan="100">
                <x-check-all-force-delete
                        type="{{ \App\Models\Manufactory::class }}"
                        :resource="trans('manufactories.plural')"></x-check-all-force-delete>
                <x-check-all-restore
                        type="{{ \App\Models\Manufactory::class }}"
                        :resource="trans('manufactories.plural')"></x-check-all-restore>
            </th>
        </tr>
        <tr>
            <th>
                <x-check-all></x-check-all>
            </th>
            <th>@lang('manufactories.attributes.name')</th>
            <th>@lang('manufactories.attributes.deleted_at')</th>
            <th style="width: 160px">...</th>
        </tr>
        </thead>
        <tbody>
        @forelse($manufactories as $manufactory)
            <tr>
                <td class="text-center">
                  <x-check-all-item :model="$manufactory"></x-check-all-item>
                </td>
                    <td>
                    <a href="{{ route('dashboard.manufactories.show', $manufactory) }}"
                       class="text-decoration-none text-ellipsis">

                        <img src="{{ $manufactory->getFirstMediaUrl() }}"
                             alt="Product 1"
                             class="img-circle img-size-32 mr-2" style="height: 32px;">
                        {{ $manufactory->name }}
                    </a>
                </td>

                <td>{{ $manufactory->deleted_at->format('Y-m-d') }}</td>

                <td style="width: 160px">
                    @include('dashboard.manufactories.partials.actions.show')
                    @include('dashboard.manufactories.partials.actions.restore')
                    @include('dashboard.manufactories.partials.actions.forceDelete')
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="100" class="text-center">@lang('manufactories.empty')</td>
            </tr>
        @endforelse

        @if($manufactories->hasPages())
            @slot('footer')
                {{ $manufactories->links() }}
            @endslot
        @endif
    @endcomponent
</x-layout>
