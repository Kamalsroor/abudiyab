<x-layout :title="trans('works.plural')" :breadcrumbs="['dashboard.works.index']">
    @include('dashboard.works.partials.filter')

    @component('dashboard::components.table-box')
        @slot('title')
            @lang('works.actions.list') ({{ $works->total() }})
        @endslot

        <thead>
        <tr>
          <th colspan="100">
            <div class="d-flex">
                <x-check-all-delete
                    type="{{ \App\Models\Work::class }}"
                    :resource="trans('works.plural')"></x-check-all-delete>
                <x-import-excel
                            model="{{ \App\Models\Work::class }}"
                            import="{{ \App\Imports\WorksImport::class }}"
                            exportResource="{{ App\Http\Resources\WorkResource::class }}"
                            :resource="trans('works.plural')"></x-import-excel>
                <x-export-excel
                            model="{{ \App\Models\Work::class }}"
                            export="{{ \App\Exports\Export::class }}"
                            resource="{{ App\Http\Resources\WorkResource::class }}"
                            fileName="Works"
                            ></x-export-excel>
                <div class="ml-2 d-flex justify-content-between flex-grow-1">
                    @include('dashboard.works.partials.actions.create')
                    @include('dashboard.works.partials.actions.trashed')
                </div>
            </div>
          </th>
        </tr>
        <tr>
            <th style="width: 30px;" class="text-center">
              <x-check-all></x-check-all>
            </th>
            <th>@lang('works.attributes.title')</th>
            <th>@lang('works.attributes.description')</th>
            <th>@lang('works.attributes.available')</th>
            <th>@lang('works.attributes.created_at')</th>
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
                        {{ $work->title }}
                    </a>
                </td>
                <td>{{ $work->description }}</td>
                <td>{{ $work->available ? 'متاح' : 'غير متاح' }}</td>
                <td>{{ $work->created_at->format('Y-m-d') }}</td>

                <td style="width: 160px">
                    @include('dashboard.works.partials.actions.show')
                    @include('dashboard.works.partials.actions.edit')
                    @include('dashboard.works.partials.actions.delete')
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
