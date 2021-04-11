<x-layout :title="trans('partners.plural')" :breadcrumbs="['dashboard.partners.index']">
    @include('dashboard.partners.partials.filter')

    @component('dashboard::components.table-box')
        @slot('title')
            @lang('partners.actions.list') ({{ $partners->total() }})
        @endslot

        <thead>
        <tr>
          <th colspan="100">
            <div class="d-flex">
                <x-check-all-delete
                    type="{{ \App\Models\Partner::class }}"
                    :resource="trans('partners.plural')"></x-check-all-delete>
                <x-import-excel
                            model="{{ \App\Models\Partner::class }}"
                            import="{{ \App\Imports\PartnersImport::class }}"
                            exportResource="{{ App\Http\Resources\PartnerResource::class }}"
                            :resource="trans('partners.plural')"></x-import-excel>
                <x-export-excel
                            model="{{ \App\Models\Partner::class }}"
                            export="{{ \App\Exports\Export::class }}"
                            resource="{{ App\Http\Resources\PartnerResource::class }}"
                            fileName="Partners"
                            ></x-export-excel>
                <div class="ml-2 d-flex justify-content-between flex-grow-1">
                    @include('dashboard.partners.partials.actions.create')
                    @include('dashboard.partners.partials.actions.trashed')
                </div>
            </div>
          </th>
        </tr>
        <tr>
            <th style="width: 30px;" class="text-center">
              <x-check-all></x-check-all>
            </th>
            <th>@lang('partners.attributes.name')</th>
            <th>@lang('partners.attributes.created_at')</th>
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
                <td>{{ $partner->created_at->format('Y-m-d') }}</td>

                <td style="width: 160px">
                    @include('dashboard.partners.partials.actions.show')
                    @include('dashboard.partners.partials.actions.edit')
                    @include('dashboard.partners.partials.actions.delete')
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
