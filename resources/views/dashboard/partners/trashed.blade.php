<x-layout :title="trans('partners.trashed')" :breadcrumbs="['dashboard.partners.trashed']">
    @include('dashboard.partners.partials.filter')

    @component('dashboard::components.table-box')

        @slot('title')
            @lang('partners.actions.list') ({{ count_formatted($partners->total()) }})
        @endslot

        <thead>
        <tr>
            <th colspan="100">
                <x-check-all-force-delete
                        type="{{ \App\Models\Partner::class }}"
                        :resource="trans('partners.plural')"></x-check-all-force-delete>
                <x-check-all-restore
                        type="{{ \App\Models\Partner::class }}"
                        :resource="trans('partners.plural')"></x-check-all-restore>
            </th>
        </tr>
        <tr>
            <th>
                <x-check-all></x-check-all>
            </th>
            <th>@lang('partners.attributes.name')</th>
            <th>@lang('partners.attributes.deleted_at')</th>
            <th style="width: 160px">...</th>
        </tr>
        </thead>
        <tbody>
        @forelse($partners as $partner)
            <tr>
                <td class="text-center">
                  <x-check-all-item :model="$partner"></x-check-all-item>
                </td>
                <td>
                    <a href="{{ route('dashboard.partners.show', $partner) }}"
                       class="text-decoration-none text-ellipsis">

                        <img src="{{ $partner->getFirstMediaUrl() }}"
                             alt="Image"
                             class="img-circle img-size-32 mr-2" style="height: 32px;">
                        {{ $partner->name }}
                    </a>
                </td>

                <td>{{ $partner->deleted_at->format('Y-m-d') }}</td>

                <td style="width: 160px">
                    @include('dashboard.partners.partials.actions.show')
                    @include('dashboard.partners.partials.actions.restore')
                    @include('dashboard.partners.partials.actions.forceDelete')
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="100" class="text-center">@lang('partners.empty')</td>
            </tr>
        @endforelse

        @if($partners->hasPages())
            @slot('footer')
                {{ $partners->links() }}
            @endslot
        @endif
    @endcomponent
</x-layout>
