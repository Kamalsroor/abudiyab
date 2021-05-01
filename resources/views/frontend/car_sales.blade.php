<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']" >
    <section class="car-sales">
        {{-- {{optional(Settings::instance('car_sales_backgraund'))->getFirstMediaUrl('car_sales_backgraund')}} --}}
        {{-- {!! Settings::locale(app()->getLocale())->get('car_sales_content')!!} --}}
        <section class="car-sales_head" style="background: url('https://img-s-msn-com.akamaized.net/tenant/amp/entityid/BB1bt6T1.img?h=552&w=750&m=6&q=60&u=t&o=f&l=f');background-repeat: no-repeat; background-size: cover;">
            <div class="car-sales_head_overlay-black">
                <h1>صفحة بيع السيارات</h1>
            </div>
        </section>

        <section class="car-sales_center">
                <div class="car-sales_center_content">
                    <div class="car-sales_center_content_filter">
                        <div class="car-sales_center_content_filter_select">
                            <select>
                                <option disabled="" selected="">ابحث بالسيارة</option>
                                <option value="">الكل</option>
                                <option value="9">فورد</option>
                                <option value="10">تويوتا</option>
                                <option value="11">هيونداي</option>
                                <option value="12">بي ام دبليو</option>
                                <option value="13">كيا</option>
                                <option value="14">هوندا</option>
                                <option value="15">مرسيدس</option>
                                <option value="16">أودي</option>
                                <option value="17">لكزس</option>
                                <option value="18">شيفروليه</option>
                                <option value="19">نيسان</option>
                                <option value="20">مازدا</option>
                                <option value="21">جي ام سي</option>
                                <option value="22">رينج روفر</option>
                                <option value="23">إنفينيتي</option>
                                <option value="24">لاند روفر</option>
                                <option value="25">جيب</option>
                                <option value="26">دودج</option>
                                <option value="27">سوزوكي</option>
                                <option value="28">رينو</option>
                                <option value="29">متسوبيشي</option>
                            </select>
                        </div>
                        <div class="car-sales_center_content_filter_select">
                            <select>
                                    <option disabled="" selected="">ابحث بالسنة</option>
                                    <option value="all">الكل</option>
                                    @foreach ($models as $model)
                                        <option value="{{$model}}">{{$model}}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="car-sales_center_content_cars">
                    @foreach ($cars as $car)
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
                        @endforeach

                    </div>
                </div>
        </section>

    </section>
</x-front-layout>
