<x-layout :title="trans('memberships.plural')" :breadcrumbs="['dashboard.memberships.index']">
    @include('dashboard.memberships.partials.filter')

    @component('dashboard::components.table-box')
        @slot('title')
            @lang('memberships.actions.list') ({{ $memberships->total() }})
        @endslot

        <thead>
        <tr>
          <th colspan="100">
            <div class="d-flex">
                <x-check-all-delete
                    type="{{ \App\Models\Membership::class }}"
                    :resource="trans('memberships.plural')"></x-check-all-delete>
                <x-import-excel
                            model="{{ \App\Models\Membership::class }}"
                            import="{{ \App\Imports\MembershipsImport::class }}"
                            exportResource="{{ App\Http\Resources\MembershipResource::class }}"
                            :resource="trans('memberships.plural')"></x-import-excel>
                <x-export-excel
                            model="{{ \App\Models\Membership::class }}"
                            export="{{ \App\Exports\Export::class }}"
                            resource="{{ App\Http\Resources\MembershipResource::class }}"
                            fileName="Memberships"
                            ></x-export-excel>
                <div class="ml-2 d-flex justify-content-between flex-grow-1">
                    @include('dashboard.memberships.partials.actions.create')
                    @include('dashboard.memberships.partials.actions.trashed')
                </div>
            </div>
          </th>
        </tr>
        <tr>
            <th style="width: 30px;" class="text-center">
              <x-check-all></x-check-all>
            </th>
            <th>@lang('memberships.attributes.name')</th>
            <th>@lang('memberships.attributes.rental_discount')</th>
            <th>@lang('memberships.attributes.ratio_points')</th>
            <th>@lang('memberships.attributes.extra_hours')</th>
            <th>@lang('memberships.attributes.allowed_Kilos')</th>
            <th>@lang('memberships.attributes.delivery_discount_regions')</th>
            <th>@lang('memberships.attributes.created_at')</th>
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
                <td>{{ $membership->rental_discount }}%</td>
                <td>{{ $membership->ratio_points }}</td>
                <td>{{ $membership->extra_hours }}</td>
                <td>{{ $membership->allowed_Kilos }}</td>
                <td>{{ $membership->delivery_discount_regions }}%</td>
                <td>{{ $membership->created_at->format('Y-m-d') }}</td>

                <td style="width: 160px">
                    @include('dashboard.memberships.partials.actions.show')
                    @include('dashboard.memberships.partials.actions.edit')
                    @include('dashboard.memberships.partials.actions.delete')
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
