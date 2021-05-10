<x-layout :title="trans('purchaserequests.plural')" :breadcrumbs="['dashboard.purchaserequests.index']">
    @include('dashboard.purchaserequests.partials.filter')

    @component('dashboard::components.table-box')
        @slot('title')
            @lang('purchaserequests.actions.list') ({{ $purchaserequests->total() }})
        @endslot

        <thead>
        <tr>
          <th colspan="100">
            <div class="d-flex">
                <x-check-all-delete
                    type="{{ \App\Models\Purchaserequest::class }}"
                    :resource="trans('purchaserequests.plural')"></x-check-all-delete>
                <x-import-excel
                            model="{{ \App\Models\Purchaserequest::class }}"
                            import="{{ \App\Imports\PurchaserequestsImport::class }}"
                            exportResource="{{ App\Http\Resources\PurchaserequestResource::class }}"
                            :resource="trans('purchaserequests.plural')"></x-import-excel>
                <x-export-excel
                            model="{{ \App\Models\Purchaserequest::class }}"
                            export="{{ \App\Exports\Export::class }}"
                            resource="{{ App\Http\Resources\PurchaserequestResource::class }}"
                            fileName="Purchaserequests"
                            ></x-export-excel>
                <div class="ml-2 d-flex justify-content-between flex-grow-1">
                    @include('dashboard.purchaserequests.partials.actions.create')
                    @include('dashboard.purchaserequests.partials.actions.trashed')
                </div>
            </div>
          </th>
        </tr>
        <tr>
            <th style="width: 30px;" class="text-center">
              <x-check-all></x-check-all>
            </th>
            <th>@lang('purchaserequests.attributes.username')</th>
            <th>@lang('purchaserequests.attributes.carname')</th>
            <th>@lang('purchaserequests.attributes.carmodel')</th>
            <th>@lang('purchaserequests.attributes.carbrand')</th>
            <th>@lang('purchaserequests.attributes.price')</th>
            <th>@lang('purchaserequests.attributes.quantity')</th>
            <th>@lang('purchaserequests.attributes.created_at')</th>
            <th style="width: 160px">...</th>
        </tr>
        </thead>
        <tbody>
        @forelse($purchaserequests as $purchaserequest)
            <tr>
                <td class="text-center">
                  <x-check-all-item :model="$purchaserequest"></x-check-all-item>
                </td>
                <td>
                    {{ $purchaserequest->customer->name }}
                </td>
                <td>
                    {{ $purchaserequest->car->name }}
                </td>
                <td>
                    {{ $purchaserequest->car->model }}
                </td>
                <td>
                    {{ $purchaserequest->car->manufactory->name }}
                </td>
                <td>
                    {{ $purchaserequest->price }}
                </td>
                <td>
                    {{ $purchaserequest->quantity }}
                </td>
                <td>{{ $purchaserequest->created_at->format('Y-m-d') }}</td>

                <td style="width: 160px">
                    @include('dashboard.purchaserequests.partials.actions.done')
                    @include('dashboard.purchaserequests.partials.actions.delete')
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="100" class="text-center">@lang('purchaserequests.empty')</td>
            </tr>
        @endforelse

        @if($purchaserequests->hasPages())
            @slot('footer')
                {{ $purchaserequests->links() }}
            @endslot
        @endif
    @endcomponent
</x-layout>
