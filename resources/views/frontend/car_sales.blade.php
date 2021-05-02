<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']" >
    <section class="car-sales">
        {{-- {{optional(Settings::instance('car_sales_backgraund'))->getFirstMediaUrl('car_sales_backgraund')}} --}}
        {{-- {!! Settings::locale(app()->getLocale())->get('car_sales_content')!!} --}}
        <section class="car-sales_head" style="background: url('https://img-s-msn-com.akamaized.net/tenant/amp/entityid/BB1bt6T1.img?h=552&w=750&m=6&q=60&u=t&o=f&l=f');background-repeat: no-repeat; background-size: cover;">
            <div class="car-sales_head_overlay-black">
                <h1>صفحة بيع السيارات</h1>
            </div>
        </section>
        <car_seles remote-url="{{route('api.carsales.index')}}" >

        </car_seles>
    </section>

            {{-- <!-- @foreach ($cars as $car)
                <div class="car-sales_center_content_cars_car sold">
                    @if ($car->sold)
                    <div class="car-sales_center_content_cars_car_sold">تم البيع</div>
                    @endif
                    <div class="car-sales_center_content_cars_car_img">
                        <img src="{{ $car->car->getFirstMediaUrl()}}" alt="">
                    </div>
                    <div class="car-sales_center_content_cars_car_name">
                        <h4>{{$car->car->name}}</h4>
                    </div>
                    <div class="car-sales_center_content_cars_car_detailing">
                        <div class="car-sales_center_content_cars_car_detailing_top">
                            <h5>{{$car->car->manufactory->name}}</h5>
                            <h4>{{$car->car->model}}</h4>
                        </div>
                        <div class="car-sales_center_content_cars_car_detailing_center">
                            <p> العداد {{$car->couter}} كم</p>
                            <p>|</p>
                            <p> اللون الداخلي {{$car->color_interior}}</p>
                            <p>|</p>
                            <p> اللون الخارجي {{$car->color_exterior}}</p>
                        </div>
                        <div class="car-sales_center_content_cars_car_detailing_bottom">
                            <p>مكيف | ناقل حركة أوتوماتيكي</p>
                        </div>
                    </div>
                    @if (!($car->sold))
                    <a class="primary-btn car-sales_center_content_cars_car_button">اقتراح سعر</a>
                    @endif
                </div>
                @endforeach --}}
            </x-front-layout>
