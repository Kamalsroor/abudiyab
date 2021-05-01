<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']" >
    <section class="car-sales">
        {{-- {{optional(Settings::instance('car_sales_backgraund'))->getFirstMediaUrl('car_sales_backgraund')}} --}}
        {{-- {!! Settings::locale(app()->getLocale())->get('car_sales_content')!!} --}}
        <section class="car-sales_head" style="background: url('https://img-s-msn-com.akamaized.net/tenant/amp/entityid/BB1bt6T1.img?h=552&w=750&m=6&q=60&u=t&o=f&l=f');background-repeat: no-repeat; background-size: cover;">
            <div class="car-sales_head_overlay-black">
                <h1>صفحة بيع السيارات</h1>
            </div>
        </section>
        <car_seles></car_seles>
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
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                            </select>
                        </div>
                    </div>
                    <div class="car-sales_center_content_cars">
                        <div class="car-sales_center_content_cars_car">
                            <div class="car-sales_center_content_cars_car_sold">تم البيع</div>
                            <div class="car-sales_center_content_cars_car_img">
                                <img src="{{ asset('front/img/car-img/car-2.png') }}" alt="">
                            </div>
                            <div class="car-sales_center_content_cars_car_name">
                                <h4>ام جى زد اس</h4>
                            </div>
                            <div class="car-sales_center_content_cars_car_detailing">
                                <div class="car-sales_center_content_cars_car_detailing_top">
                                    <h5>عائلية صغيرة</h5>
                                    <h4>2021</h4>
                                </div>
                                <div class="car-sales_center_content_cars_car_detailing_center">
                                    <p>5 الأمتعة</p>
                                    <p>|</p>
                                    <p>4 أبواب</p>
                                    <p>|</p>
                                    <p>2 الأمتعة</p>
                                </div>
                                <div class="car-sales_center_content_cars_car_detailing_bottom">
                                    <p>مكيف | ناقل حركة أوتوماتيكي</p>
                                </div>
                            </div>
                            <a class="primary-btn car-sales_center_content_cars_car_button">اقتراح سعر</a>
                        </div>
                        <div class="car-sales_center_content_cars_car">
                            <div class="car-sales_center_content_cars_car_sold">تم البيع</div>
                            <div class="car-sales_center_content_cars_car_img">
                                <img src="{{ asset('front/img/car-img/car-1.png') }}" alt="">
                            </div>
                            <div class="car-sales_center_content_cars_car_name">
                                <h4>تويوتا راف فور</h4>
                            </div>
                            <div class="car-sales_center_content_cars_car_detailing">
                                <div class="car-sales_center_content_cars_car_detailing_top">
                                    <h5>عائلية اقتصادية</h5>
                                    <h4>2020</h4>
                                </div>
                                <div class="car-sales_center_content_cars_car_detailing_center">
                                    <p>5 الأمتعة</p>
                                    <p>|</p>
                                    <p>4 أبواب</p>
                                    <p>|</p>
                                    <p>2 الأمتعة</p>
                                </div>
                                <div class="car-sales_center_content_cars_car_detailing_bottom">
                                    <p>مكيف | ناقل حركة أوتوماتيكي</p>
                                </div>
                            </div>
                            <a class="primary-btn car-sales_center_content_cars_car_button">اقتراح سعر</a>
                        </div>
                        <div class="car-sales_center_content_cars_car sold">
                            <div class="car-sales_center_content_cars_car_sold">تم البيع</div>
                            <div class="car-sales_center_content_cars_car_img">
                                <img src="{{ asset('front/img/car-img/car-3.png') }}" alt="">
                            </div>
                            <div class="car-sales_center_content_cars_car_name">
                                <h4>هونداى ازيرا</h4>
                            </div>
                            <div class="car-sales_center_content_cars_car_detailing">
                                <div class="car-sales_center_content_cars_car_detailing_top">
                                    <h5>سيدان كبير</h5>
                                    <h4>2021</h4>
                                </div>
                                <div class="car-sales_center_content_cars_car_detailing_center">
                                    <p>5 الأمتعة</p>
                                    <p>|</p>
                                    <p>4 أبواب</p>
                                    <p>|</p>
                                    <p>2 الأمتعة</p>
                                </div>
                                <div class="car-sales_center_content_cars_car_detailing_bottom">
                                    <p>مكيف | ناقل حركة أوتوماتيكي</p>
                                </div>
                            </div>
                            <a class="primary-btn car-sales_center_content_cars_car_button">اقتراح سعر</a>
                        </div>
                        <div class="car-sales_center_content_cars_car sold">
                            <div class="car-sales_center_content_cars_car_sold">تم البيع</div>
                            <div class="car-sales_center_content_cars_car_img">
                                <img src="{{ asset('front/img/car-img/car-2.png') }}" alt="">
                            </div>
                            <div class="car-sales_center_content_cars_car_name">
                                <h4>ام جى زد اس</h4>
                            </div>
                            <div class="car-sales_center_content_cars_car_detailing">
                                <div class="car-sales_center_content_cars_car_detailing_top">
                                    <h5>عائلية صغيرة</h5>
                                    <h4>2021</h4>
                                </div>
                                <div class="car-sales_center_content_cars_car_detailing_center">
                                    <p>5 الأمتعة</p>
                                    <p>|</p>
                                    <p>4 أبواب</p>
                                    <p>|</p>
                                    <p>2 الأمتعة</p>
                                </div>
                                <div class="car-sales_center_content_cars_car_detailing_bottom">
                                    <p>مكيف | ناقل حركة أوتوماتيكي</p>
                                </div>
                            </div>
                            <a class="primary-btn car-sales_center_content_cars_car_button">اقتراح سعر</a>
                        </div>
                        <div class="car-sales_center_content_cars_car">
                            <div class="car-sales_center_content_cars_car_sold">تم البيع</div>
                            <div class="car-sales_center_content_cars_car_img">
                                <img src="{{ asset('front/img/car-img/car-1.png') }}" alt="">
                            </div>
                            <div class="car-sales_center_content_cars_car_name">
                                <h4>تويوتا راف فور</h4>
                            </div>
                            <div class="car-sales_center_content_cars_car_detailing">
                                <div class="car-sales_center_content_cars_car_detailing_top">
                                    <h5>عائلية اقتصادية</h5>
                                    <h4>2020</h4>
                                </div>
                                <div class="car-sales_center_content_cars_car_detailing_center">
                                    <p>5 الأمتعة</p>
                                    <p>|</p>
                                    <p>4 أبواب</p>
                                    <p>|</p>
                                    <p>2 الأمتعة</p>
                                </div>
                                <div class="car-sales_center_content_cars_car_detailing_bottom">
                                    <p>مكيف | ناقل حركة أوتوماتيكي</p>
                                </div>
                            </div>
                            <a class="primary-btn car-sales_center_content_cars_car_button">اقتراح سعر</a>
                        </div>
                        <div class="car-sales_center_content_cars_car sold">
                            <div class="car-sales_center_content_cars_car_sold">تم البيع</div>
                            <div class="car-sales_center_content_cars_car_img">
                                <img src="{{ asset('front/img/car-img/car-3.png') }}" alt="">
                            </div>
                            <div class="car-sales_center_content_cars_car_name">
                                <h4>هونداى ازيرا</h4>
                            </div>
                            <div class="car-sales_center_content_cars_car_detailing">
                                <div class="car-sales_center_content_cars_car_detailing_top">
                                    <h5>سيدان كبير</h5>
                                    <h4>2021</h4>
                                </div>
                                <div class="car-sales_center_content_cars_car_detailing_center">
                                    <p>5 الأمتعة</p>
                                    <p>|</p>
                                    <p>4 أبواب</p>
                                    <p>|</p>
                                    <p>2 الأمتعة</p>
                                </div>
                                <div class="car-sales_center_content_cars_car_detailing_bottom">
                                    <p>مكيف | ناقل حركة أوتوماتيكي</p>
                                </div>
                            </div>
                            <a class="primary-btn car-sales_center_content_cars_car_button">اقتراح سعر</a>
                        </div>
                    </div>
                </div>
        </section>

    </section>
</x-front-layout>
