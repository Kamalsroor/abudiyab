<x-layout :title="trans('mediacenters.plural')" :breadcrumbs="['dashboard.mediacenters.index']">
    @include('dashboard.mediacenters.partials.filter')

    @component('dashboard::components.table-box')
        @slot('title')
            @lang('mediacenters.actions.list') ({{ $mediacenters->total() }})
        @endslot

        <thead>
        <tr>
          <th colspan="100">
            <div class="d-flex">
                <x-check-all-delete
                    type="{{ \App\Models\Mediacenter::class }}"
                    :resource="trans('mediacenters.plural')"></x-check-all-delete>
                <x-import-excel
                            model="{{ \App\Models\Mediacenter::class }}"
                            import="{{ \App\Imports\MediacentersImport::class }}"
                            exportResource="{{ App\Http\Resources\MediacenterResource::class }}"
                            :resource="trans('mediacenters.plural')"></x-import-excel>
                <x-export-excel
                            model="{{ \App\Models\Mediacenter::class }}"
                            export="{{ \App\Exports\Export::class }}"
                            resource="{{ App\Http\Resources\MediacenterResource::class }}"
                            fileName="Mediacenters"
                            ></x-export-excel>
                <div class="ml-2 d-flex justify-content-between flex-grow-1">
                    @include('dashboard.mediacenters.partials.actions.create')
                    @include('dashboard.mediacenters.partials.actions.trashed')
                </div>
            </div>
          </th>
        </tr>
        <tr>
            <th style="width: 30px;" class="text-center">
              <x-check-all></x-check-all>
            </th>
            <th>@lang('mediacenters.attributes.title')</th>
            <th>@lang('mediacenters.attributes.description')</th>
            <th>@lang('mediacenters.attributes.show')</th>
            <th>@lang('mediacenters.attributes.created_at')</th>
            <th style="width: 160px">...</th>
        </tr>
        </thead>
        <tbody>
        @forelse($mediacenters as $mediacenter)
            <tr>
                <td class="text-center">
                  <x-check-all-item :model="$mediacenter"></x-check-all-item>
                </td>
                <td>
                    <a href="{{ route('dashboard.mediacenters.show', $mediacenter) }}"
                       class="text-decoration-none text-ellipsis">

                        <img src="{{ $mediacenter->getFirstMediaUrl() }}"
                             alt="Product 1"
                             class="img-circle img-size-32 mr-2" style="height: 32px;">
                        {{ $mediacenter->title }}
                    </a>
                </td>
                <td>{{ $mediacenter->description }}</td>
                <td>{{ $mediacenter::shownews[$mediacenter->show] }}</td>
                <td>{{ $mediacenter->created_at->format('Y-m-d') }}</td>

                <td style="width: 160px">
                    @include('dashboard.mediacenters.partials.actions.show')
                    @include('dashboard.mediacenters.partials.actions.edit')
                    @include('dashboard.mediacenters.partials.actions.delete')
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="100" class="text-center">@lang('mediacenters.empty')</td>
            </tr>
        @endforelse

        @if($mediacenters->hasPages())
            @slot('footer')
                {{ $mediacenters->links() }}
            @endslot
        @endif
    @endcomponent
</x-layout>
