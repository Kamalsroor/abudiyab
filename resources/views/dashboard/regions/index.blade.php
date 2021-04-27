<x-layout :title="trans('regions.plural')" :breadcrumbs="['dashboard.regions.index']">
    @include('dashboard.regions.partials.filter')

    @component('dashboard::components.table-box')
        @slot('title')
            @lang('regions.actions.list') ({{ $regions->total() }})
        @endslot

        <thead>
        <tr>
          <th colspan="100">
            <div class="d-flex">
                <x-check-all-delete
                    type="{{ \App\Models\Region::class }}"
                    :resource="trans('regions.plural')"></x-check-all-delete>
                <x-import-excel
                            model="{{ \App\Models\Region::class }}"
                            import="{{ \App\Imports\RegionsImport::class }}"
                            exportResource="{{ App\Http\Resources\RegionResource::class }}"
                            :resource="trans('regions.plural')"></x-import-excel>
                <x-export-excel
                            model="{{ \App\Models\Region::class }}"
                            export="{{ \App\Exports\Export::class }}"
                            resource="{{ App\Http\Resources\RegionResource::class }}"
                            fileName="Regions"
                            ></x-export-excel>
                <div class="ml-2 d-flex justify-content-between flex-grow-1">
                    @include('dashboard.regions.partials.actions.create')
                    @include('dashboard.regions.partials.actions.trashed')
                </div>
            </div>
          </th>
        </tr>
        <tr>
            <th style="width: 30px;" class="text-center">
              <x-check-all></x-check-all>
            </th>
            <th>@lang('regions.attributes.name')</th>
            <th>@lang('regions.attributes.code')</th>
            <th>@lang('regions.attributes.master_id')</th>
            <th>@lang('regions.attributes.created_at')</th>
            <th style="width: 160px">...</th>
        </tr>
        </thead>
        <tbody>
        @forelse($regions as $region)
            <tr>
                <td class="text-center">
                  <x-check-all-item :model="$region"></x-check-all-item>
                </td>
                <td>
                    <a href="{{ route('dashboard.regions.show', $region) }}"
                       class="text-decoration-none text-ellipsis">
                        {{ $region->name }}
                    </a>
                </td>
                <td>{{ $region->code }}</td>
                <td>{{ $region->MasterBranch->name }}</td>
                <td>{{ $region->created_at->format('Y-m-d') }}</td>

                <td style="width: 160px">
                    @include('dashboard.regions.partials.actions.show')
                    @include('dashboard.regions.partials.actions.edit')
                    @include('dashboard.regions.partials.actions.delete')
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="100" class="text-center">@lang('regions.empty')</td>
            </tr>
        @endforelse

        @if($regions->hasPages())
            @slot('footer')
                {{ $regions->links() }}
            @endslot
        @endif
    @endcomponent
</x-layout>
