<x-layout :title="trans('manufactories.plural')" :breadcrumbs="['dashboard.manufactories.index']">
    @include('dashboard.manufactories.partials.filter')

    @component('dashboard::components.table-box')
        @slot('title')
            @lang('manufactories.actions.list') ({{ $manufactories->total() }})
        @endslot

        <thead>
        <tr>
          <th colspan="100">
            <div class="d-flex">
                <x-check-all-delete
                    type="{{ \App\Models\Manufactory::class }}"
                    :resource="trans('manufactories.plural')"></x-check-all-delete>
                <x-import-excel
                            model="{{ \App\Models\Manufactory::class }}"
                            import="{{ \App\Imports\ManufactoriesImport::class }}"
                            exportResource="{{ App\Http\Resources\ManufactoryResource::class }}"
                            :resource="trans('manufactories.plural')"></x-import-excel>
                <x-export-excel
                            model="{{ \App\Models\Manufactory::class }}"
                            export="{{ \App\Exports\Export::class }}"
                            resource="{{ App\Http\Resources\ManufactoryResource::class }}"
                            fileName="Manufactories"
                            ></x-export-excel>
                <div class="ml-2 d-flex justify-content-between flex-grow-1">
                    @include('dashboard.manufactories.partials.actions.create')
                    @include('dashboard.manufactories.partials.actions.trashed')
                </div>
            </div>
          </th>
        </tr>
        <tr>
            <th style="width: 30px;" class="text-center">
              <x-check-all></x-check-all>
            </th>
            <th>@lang('manufactories.attributes.name')</th>
            <th>@lang('manufactories.attributes.created_at')</th>
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
                <td>{{ $manufactory->created_at->format('Y-m-d') }}</td>

                <td style="width: 160px">
                    @include('dashboard.manufactories.partials.actions.show')
                    @include('dashboard.manufactories.partials.actions.edit')
                    @include('dashboard.manufactories.partials.actions.delete')
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
