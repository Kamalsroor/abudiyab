<x-layout :title="$offer->name" :breadcrumbs="['dashboard.offers.show', $offer]">
    <div class="row">
        <div class="col-md-6">
            @component('dashboard::components.box')
                @slot('class', 'p-0')
                @slot('bodyClass', 'p-0')

                <table class="table table-striped table-middle">
                    <tbody>
                        <tr>
                            <th width="200">@lang('offers.attributes.name')</th>
                            <td>{{ $offer->name }}</td>
                        </tr>
                        <tr>
                            <th width="200">@lang('offers.attributes.des')</th>
                            <td>{!! $offer->des !!}</td>
                        </tr>
                        <tr>
                            <th width="200">@lang('offers.attributes.discount_type')</th>
                            <td>{{  trans('offers.discount_type.' .$offer->discount_type) }}</td>
                        </tr>

                        <tr>
                            <th width="200">@lang('offers.attributes.discount_value')</th>
                            <td>{{ $offer->discount_value }} {{$offer->discount_type == "percentage" ? "%": "ريال" }}</td>
                        </tr>
                        <tr>
                            <th width="200">@lang('offers.attributes.is_work')</th>
                            <td>{{ $offer->is_work ? "يعمل" : "لا يعمل" }}</td>
                        </tr>
                        <tr>
                            <th width="200">@lang('offers.attributes.limit')</th>
                            <td>{{ $offer->limit == 0 ? "غير محدود" : $offer->limit . " مرة " }}</td>
                        </tr>
                        <tr>
                            <th width="200">@lang('offers.attributes.from')</th>
                            <td>{{ $offer->from }}</td>
                        </tr>
                        <tr>
                            <th width="200">@lang('offers.attributes.to')</th>
                            <td>{{ $offer->to }}</td>
                        </tr>
                        <tr>
                            <th width="200">@lang('offers.attributes.type')</th>
                            <td>{{  trans('offers.type.' .$offer->type) }}</td>
                        </tr>

                        @if ($offer->type == 1 || $offer->type == 3 || $offer->type == 4)
                            <tr>
                                <th width="200">@lang('offers.attributes.value')</th>
                                <td>{{ $Text }}</td>
                            </tr>

                        @endif
                        <tr>
                            <th width="200">@lang('offers.attributes.consumer')</th>
                            <td>{{ $offer->consumer }}</td>
                        </tr>
                        <tr>
                            <th width="200">@lang('offers.attributes.branch_type')</th>
                            <td>{{ $offer->branch_type == "all" ? "كل الفروع" : "فروع معينه" }}</td>
                        </tr>
                        {{-- <tr>
                            <th width="200">@lang('offers.attributes.branch_value')</th>
                            <td>{{ $offer->branch_value }}</td>
                        </tr> --}}
                    @if($offer->getFirstMedia())
                        <tr>
                            <th width="200">@lang('offers.attributes.image')</th>
                            <td>
                                <file-preview :media="{{ $offer->getMediaResource() }}"></file-preview>
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>


                @slot('footer')
                    @include('dashboard.offers.partials.actions.edit')
                    @include('dashboard.offers.partials.actions.delete')
                @endslot
            @endcomponent
        </div>
    </div>
</x-layout>
