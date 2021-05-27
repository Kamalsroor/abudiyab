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


                    </tr>





                    @if ($car->additions != null)
                        @foreach ($car->additions as $key => $additionsCar)
                            @if ($loop->first)
                                <tr>
                            @endif
                            <th>{{ $additions[$key][0]['name']  }}</th>
                            <td>{{ $additionsCar['price'] }}</td>
                            @if ($loop->iteration%2 == 0 )
                                </tr>
                                <tr>
                            @endif
                        @endforeach
                    @endif




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
