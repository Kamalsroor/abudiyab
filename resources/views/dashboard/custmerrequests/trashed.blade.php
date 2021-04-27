<x-layout :title="trans('custmerrequests.trashed')" :breadcrumbs="['dashboard.custmerrequests.trashed']">
    @include('dashboard.custmerrequests.partials.filter')

    @component('dashboard::components.table-box')

        @slot('title')
            @lang('custmerrequests.actions.list') ({{ count_formatted($custmerrequests->total()) }})
        @endslot

        <thead>
        <tr>
            <th colspan="100">
                <x-check-all-force-delete
                        type="{{ \App\Models\Custmerrequest::class }}"
                        :resource="trans('custmerrequests.plural')"></x-check-all-force-delete>
                <x-check-all-restore
                        type="{{ \App\Models\Custmerrequest::class }}"
                        :resource="trans('custmerrequests.plural')"></x-check-all-restore>
            </th>
        </tr>
        <tr>
            <th>
                <x-check-all></x-check-all>
            </th>
            <th>@lang('custmerrequests.attributes.name')</th>
            <th>@lang('custmerrequests.attributes.deleted_at')</th>
            <th style="width: 160px">...</th>
        </tr>
        </thead>
        <tbody>
        @forelse($custmerrequests as $custmerrequest)
            <tr>
                <td class="text-center">
                  <x-check-all-item :model="$custmerrequest"></x-check-all-item>
                </td>
                <td>
                    <a href="{{ route('dashboard.custmerrequests.show', $custmerrequest) }}"
                       class="text-decoration-none text-ellipsis">

                        <img src="{{ $custmerrequest->getFirstMediaUrl() }}"
                             alt="Image"
                             class="img-circle img-size-32 mr-2" style="height: 32px;">
                        {{ $custmerrequest->name }}
                    </a>
                </td>

                <td>{{ $custmerrequest->deleted_at->format('Y-m-d') }}</td>

                <td style="width: 160px">
                    @include('dashboard.custmerrequests.partials.actions.show')
                    @include('dashboard.custmerrequests.partials.actions.restore')
                    @include('dashboard.custmerrequests.partials.actions.forceDelete')
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="100" class="text-center">@lang('custmerrequests.empty')</td>
            </tr>
        @endforelse

        @if($custmerrequests->hasPages())
            @slot('footer')
                {{ $custmerrequests->links() }}
            @endslot
        @endif
    @endcomponent
</x-layout>
