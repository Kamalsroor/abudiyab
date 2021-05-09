<x-layout :title="trans('additions.plural')" :breadcrumbs="['dashboard.additions.index']">
    @include('dashboard.additions.partials.filter')

    @component('dashboard::components.table-box')
        @slot('title')
            @lang('additions.actions.list') ({{ $additions->total() }})
        @endslot

        <thead>
        <tr>
          <th colspan="100">
            <div class="d-flex">
                <x-check-all-delete
                    type="{{ \App\Models\Addition::class }}"
                    :resource="trans('additions.plural')"></x-check-all-delete>
                <x-import-excel
                            model="{{ \App\Models\Addition::class }}"
                            import="{{ \App\Imports\AdditionsImport::class }}"
                            exportResource="{{ App\Http\Resources\AdditionResource::class }}"
                            :resource="trans('additions.plural')"></x-import-excel>
                <x-export-excel
                            model="{{ \App\Models\Addition::class }}"
                            export="{{ \App\Exports\Export::class }}"
                            resource="{{ App\Http\Resources\AdditionResource::class }}"
                            fileName="Additions"
                            ></x-export-excel>
                <div class="ml-2 d-flex justify-content-between flex-grow-1">
                    @include('dashboard.additions.partials.actions.create')
                    @include('dashboard.additions.partials.actions.trashed')
                </div>
            </div>
          </th>
        </tr>
        <tr>
            <th style="width: 30px;" class="text-center">
              <x-check-all></x-check-all>
            </th>
            <th>@lang('additions.attributes.name')</th>
            <th>@lang('additions.attributes.created_at')</th>
            <th style="width: 160px">...</th>
        </tr>
        </thead>
        <tbody>
        @forelse($additions as $addition)
            <tr>
                <td class="text-center">
                  <x-check-all-item :model="$addition"></x-check-all-item>
                </td>
                <td>
                    <a href="{{ route('dashboard.additions.show', $addition) }}"
                       class="text-decoration-none text-ellipsis">

                        <img src="{{ $addition->getFirstMediaUrl() }}"
                             alt="Product 1"
                             class="img-circle img-size-32 mr-2" style="height: 32px;">
                        {{ $addition->name }}
                    </a>
                </td>
                <td>{{ $addition->created_at->format('Y-m-d') }}</td>

                <td style="width: 160px">
                    @include('dashboard.additions.partials.actions.show')
                    @include('dashboard.additions.partials.actions.edit')
                    @include('dashboard.additions.partials.actions.delete')
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="100" class="text-center">@lang('additions.empty')</td>
            </tr>
        @endforelse

        @if($additions->hasPages())
            @slot('footer')
                {{ $additions->links() }}
            @endslot
        @endif
    @endcomponent
</x-layout>
