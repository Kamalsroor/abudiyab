<x-layout :title="trans('offers.plural')" :breadcrumbs="['dashboard.offers.index']">
    @include('dashboard.offers.partials.filter')

    @component('dashboard::components.table-box')
        @slot('title')
            @lang('offers.actions.list') ({{ $offers->total() }})
        @endslot

        <thead>
        <tr>
          <th colspan="100">
            <div class="d-flex">
                <x-check-all-delete
                    type="{{ \App\Models\Offer::class }}"
                    :resource="trans('offers.plural')"></x-check-all-delete>
                <x-import-excel
                            model="{{ \App\Models\Offer::class }}"
                            import="{{ \App\Imports\OffersImport::class }}"
                            exportResource="{{ App\Http\Resources\OfferResource::class }}"
                            :resource="trans('offers.plural')"></x-import-excel>
                <x-export-excel
                            model="{{ \App\Models\Offer::class }}"
                            export="{{ \App\Exports\Export::class }}"
                            resource="{{ App\Http\Resources\OfferResource::class }}"
                            fileName="Offers"
                            ></x-export-excel>
                <div class="ml-2 d-flex justify-content-between flex-grow-1">
                    @include('dashboard.offers.partials.actions.create')
                    @include('dashboard.offers.partials.actions.trashed')
                </div>
            </div>
          </th>
        </tr>
        <tr>
            <th style="width: 30px;" class="text-center">
              <x-check-all></x-check-all>
            </th>
            <th>@lang('offers.attributes.name')</th>
            <th >@lang('offers.attributes.discount_type')</th>
            <th >@lang('offers.attributes.discount_value')</th>
            <th >@lang('offers.attributes.is_work')</th>
            <th >@lang('offers.attributes.limit')</th>
            <th >@lang('offers.attributes.from')</th>
            <th >@lang('offers.attributes.to')</th>
            <th>@lang('offers.attributes.type')</th>

            <th>@lang('offers.attributes.created_at')</th>
            <th style="width: 160px">...</th>
        </tr>
        </thead>
        <tbody>
        @forelse($offers as $offer)
            <tr>
                <td class="text-center">
                  <x-check-all-item :model="$offer"></x-check-all-item>
                </td>
                <td>
                    <a href="{{ route('dashboard.offers.show', $offer) }}"
                       class="text-decoration-none text-ellipsis">

                        <img src="{{ $offer->getFirstMediaUrl() }}"
                             alt="Product 1"
                             class="img-circle img-size-32 mr-2" style="height: 32px;">
                        {{ $offer->name }}
                    </a>
                </td>
                <td>{{  trans('offers.discount_type.' .$offer->discount_type) }}</td>
                <td>{{ $offer->discount_value }} {{$offer->discount_type == "percentage" ? "%": "ريال" }}</td>
                <td>{{ $offer->is_work ? "يعمل" : "لا يعمل" }}</td>
                <td>{{ $offer->limit == 0 ? "غير محدود" : $offer->limit . " مرة " }}</td>
                <td>{{ $offer->from }}</td>
                <td>{{ $offer->to }}</td>
                <td>{{  trans('offers.type.' .$offer->type) }}</td>
                <td>{{ $offer->created_at->format('Y-m-d') }}</td>

                <td style="width: 160px">
                    @include('dashboard.offers.partials.actions.show')
                    @include('dashboard.offers.partials.actions.edit')
                    @include('dashboard.offers.partials.actions.delete')
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="100" class="text-center">@lang('offers.empty')</td>
            </tr>
        @endforelse

        @if($offers->hasPages())
            @slot('footer')
                {{ $offers->links() }}
            @endslot
        @endif
    @endcomponent
</x-layout>
