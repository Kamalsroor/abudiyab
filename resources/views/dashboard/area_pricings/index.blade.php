<x-layout :title="trans('area_pricings.plural')" :breadcrumbs="['dashboard.area_pricings.index']">
    {{-- @include('dashboard.area_pricings.partials.filter') --}}
    {{ BsForm::resource('area_pricings')->post(route('dashboard.area_pricings.store')) }}



    @forelse($Regions as $Region)

        @component('dashboard::components.table-box')
            @slot('title')
                {{$Region->name}}
            @endslot
            <thead>
                <tr>

                    <th>@lang('area_pricings.attributes.name')</th>
                    <th >...</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($Regions as $RegionsTo)
                    @if ($Region->id != $RegionsTo->id )
                        <tr>
                            <td>
                                {{ $RegionsTo->name }}
                            </td>
                            <td >
                                {{ BsForm::price('price['.$Region->id.']['.$RegionsTo->id.']')->value(isset($area_pricings_array[$Region->id][$RegionsTo->id][0]['price']) ? $area_pricings_array[$Region->id][$RegionsTo->id][0]['price'] : 0)->currency('ريال') }}
                            </td>
                        </tr>
                    @endif
                @empty
                    <tr>
                        <td colspan="100" class="text-center">@lang('area_pricings.empty')</td>
                    </tr>
                @endforelse
            </tbody>

        @endcomponent
    @empty

    @endforelse
    {{ BsForm::submit()->label(trans('area_pricings.actions.save')) }}
    {{ BsForm::close() }}
</x-layout>
