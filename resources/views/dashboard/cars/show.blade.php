<x-layout :title="$car->name" :breadcrumbs="['dashboard.cars.show', $car]">
    <div class="row">
        <div class="col-md-12">
            @component('dashboard::components.box')
                @slot('class', 'p-0')
                @slot('bodyClass', 'p-0')

                <table class="table table-striped table-middle">
                    <tbody>
                    <tr>
                        <th >@lang('cars.attributes.name')</th>
                        <td>{{ $car->name }}</td>

                        <th >@lang('categories.singular')</th>
                        <td>{{ $car->category ? $car->category->name : "" }}</td>
                    </tr>

                    {{-- <tr>
                        <th >@lang('branches.singular')</th>
                        <td>{{ $car->branch->name }}</td>
                    </tr> --}}
                    <tr>
                        <th >@lang('manufactories.singular')</th>
                        <td>{{ $car->manufactory ? $car->manufactory->name : "" }}</td>

                        <th >@lang('cars.attributes.code')</th>
                        <td>{{ $car->code }}</td>
                    </tr>
                    <tr>
                        <th >@lang('cars.attributes.price2')</th>
                        <td>{{ $car->price2 }}</td>

                        <th >@lang('cars.attributes.price1')</th>
                        <td>{{ $car->price1 }}</td>
                    </tr>


                    <tr>
                        <th >@lang('cars.attributes.desc')</th>
                        <td>{{ $car->desc }}</td>

                        <th >@lang('cars.attributes.discount_2')</th>
                        <td>{{ $car->discount_2 }}</td>
                    </tr>
                    <tr>
                        <th >@lang('cars.attributes.discount_3')</th>
                        <td>{{ $car->discount_3 }}</td>

                        <th >@lang('cars.attributes.price_from_2month_to_6month')</th>
                        <td>{{ $car->price_from_2month_to_6month }}</td>
                    </tr>
                    <tr>
                        <th >@lang('cars.attributes.price_after_from_2month_to_6month')</th>
                        <td>{{ $car->price_after_from_2month_to_6month }}</td>

                        <th >@lang('cars.attributes.price_from_1year_to_2years')</th>
                        <td>{{ $car->price_from_1year_to_2years }}</td>
                    </tr>
                    <tr>
                        <th >@lang('cars.attributes.price_after_from_1year_to_2years')</th>
                        <td>{{ $car->price_after_from_1year_to_2years }}</td>

                        <th >@lang('cars.attributes.price_from_2year_to_3years')</th>
                        <td>{{ $car->price_from_2year_to_3years }}</td>
                    </tr>
                    <tr>
                        <th >@lang('cars.attributes.price_after_from_2year_to_3years')</th>
                        <td>{{ $car->price_after_from_2year_to_3years }}</td>

                        <th >@lang('cars.attributes.model')</th>
                        <td>{{ $car->model }}</td>
                    </tr>
                    <tr>
                        <th >@lang('cars.attributes.door')</th>
                        <td>{{ $car->door }}</td>

                        <th >@lang('cars.attributes.luggage')</th>
                        <td>{{ $car->luggage }}</td>
                    </tr>
                    <tr>
                        <th >@lang('cars.attributes.features')</th>
                        <td>{{ trans('cars.features.' . $car->features) }}</td>

                        <th >@lang('cars.attributes.baby_seat_price')</th>
                        <td>{{ $car->baby_seat_price }}</td>
                    </tr>
                    <tr>
                        <th >@lang('cars.attributes.shield_price')</th>
                        <td>{{ $car->shield_price }}</td>

                        <th >@lang('cars.attributes.insurance_price')</th>
                        <td>{{ $car->insurance_price }}</td>
                    </tr>
                    <tr>
                        <th >@lang('cars.attributes.open_kilometers_price')</th>
                        <td>{{ $car->open_kilometers_price }}</td>

                        <th >@lang('cars.attributes.navigation_price')</th>
                        <td>{{ $car->navigation_price }}</td>
                    </tr>
                    <tr>
                        <th >@lang('cars.attributes.home_delivery_price')</th>
                        <td>{{ $car->home_delivery_price }}</td>

                        <th >@lang('cars.attributes.intercity_price')</th>
                        <td>{{ $car->intercity_price }}</td>
                    </tr>
                    @php
                        $is_baby_seat = $car->is_baby_seat == true ? 1 : 0 ;
                        $is_shield = $car->is_shield == true ? 1 : 0 ;
                        $is_insurance = $car->is_insurance == true ? 1 : 0 ;
                        $is_open_kilometers = $car->is_open_kilometers == true ? 1 : 0 ;
                        $is_navigation = $car->is_navigation == true ? 1 : 0 ;
                        $is_home_delivery = $car->is_home_delivery == true ? 1 : 0 ;
                        $is_intercity = $car->is_intercity == true ? 1 : 0 ;
                    @endphp
                    <tr>
                        <th >@lang('cars.attributes.is_baby_seat')</th>
                        <td>{{ trans('cars.features_enable.' .$is_baby_seat) }}</td>

                        <th >@lang('cars.attributes.is_shield')</th>
                        <td>{{ trans('cars.features_enable.' .$is_shield) }}</td>
                    </tr>
                    <tr>
                        <th >@lang('cars.attributes.is_insurance')</th>
                        <td>{{ trans('cars.features_enable.' .$is_insurance) }}</td>

                        <th >@lang('cars.attributes.is_open_kilometers')</th>
                        <td>{{ trans('cars.features_enable.' .$is_open_kilometers) }}</td>
                    </tr>
                    <tr>
                        <th >@lang('cars.attributes.is_navigation')</th>
                        <td>{{ trans('cars.features_enable.' .$is_navigation) }}</td>

                        <th >@lang('cars.attributes.is_home_delivery')</th>
                        <td>{{ trans('cars.features_enable.' .$is_home_delivery) }}</td>
                    </tr>
                    <tr>
                        <th >@lang('cars.attributes.is_intercity')</th>
                        <td>{{ trans('cars.features_enable.' .$is_intercity) }}</td>
                    </tr>

                    <tr>
                        <th >مقاس الصورة</th>
                        <td>327*188</td>
                    </tr>

                    @if($car->getFirstMedia())
                        <tr>
                            <th >@lang('cars.attributes.image')</th>
                            <td>
                                <file-preview :media="{{ $car->getMediaResource() }}"></file-preview>
                            </td>
                        </tr>
                    @endif


                    @if($car->getFirstMedia('photos'))
                    <tr>
                        <th >@lang('cars.attributes.image')</th>
                        <td>
                            <file-preview :media="{{ $car->getMediaResource('photos') }}"></file-preview>
                        </td>
                    </tr>
                @endif
                    </tbody>
                </table>

                @slot('footer')
                    @include('dashboard.cars.partials.actions.edit')
                    @include('dashboard.cars.partials.actions.delete')
                @endslot
            @endcomponent
        </div>
    </div>
</x-layout>
