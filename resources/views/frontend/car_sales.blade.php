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
                        <div class="car-sales_center_content_cars_car @if ($car->sold) sold @endif">
                            <div class="car-sales_center_content_cars_car_sold">تم البيع</div>
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
                                    <h6> العداد {{$car->couter}} كم</h6>
                                    <div class="car-sales_center_content_cars_car_detailing_center_color">
                                        <p> اللون الداخلي <span style="font-weight: 700; color: red;">{{$car->color_interior}}</span> </p>
                                        <p>|</p>
                                        <p> اللون الخارجي <span style="font-weight: 700; color: green;">{{$car->color_exterior}}</span></p>
                                    </div>
                                </div>
                                <div class="car-sales_center_content_cars_car_detailing_bottom">
                                    <p>مكيف | ناقل حركة أوتوماتيكي</p>
                                </div>
                            </div>
                            <a class="primary-btn car-sales_center_content_cars_car_button" onclick="$('.car-sales_price-suggestion').toggleClass('price-suggestion-s');$('.car-sales_price-suggestion').toggleClass('price-suggestion-h');$('.car-sales_price-suggestion').css('display','block');">اقتراح سعر</a>
                            <a class="primary-btn car-sales_center_content_cars_car_button_sold">تم البيع</a>
                        </div>
                        @endforeach
                    </div>
                </div>
        </section>
        <section class="car-sales_price-suggestion price-suggestion-h">
            <div class="car-sales_price-suggestion_center">
                <span class="car-sales_price-suggestion_center_cancel" onclick="$('.car-sales_price-suggestion').toggleClass('price-suggestion-s');$('.car-sales_price-suggestion').toggleClass('price-suggestion-h');">
                    <i class="fas fa-times"></i>
                </span>
                <div class="car-sales_price-suggestion_center_loader">
                    <img src="{{ asset('front/img/3.gif') }}" alt="">
                    <div>1</div>
                </div>
                <div class="car-sales_price-suggestion_center_step-1">
                     <div class="car-sales_price-suggestion_center_step-1_text">
                        <h4>تسجيل الدخول</h4>
                        <p>الرجاء تسجيل الدخول للمتابعة</p>
                     </div>
                    <div class="car-sales_price-suggestion_center_step-1_form">
                        <div class="form-row">
                          <div class="form-group col-12">
                            <label for="inputEmail4">البريد الاركتروني</label>
                            <input type="email" class="form-control" id="inputEmail4">
                          </div>
                          <div class="form-group col-12">
                            <label for="inputPassword4">كلمة السر</label>
                            <input type="password" class="form-control" id="inputPassword4">
                          </div>
                        </div>
                        <button type="submit" class="primary-btn btn-hover btn-curved" onclick="MoveStep(2);">تسجيل الدخول</button>
                    </div>
                </div>

                <div class="car-sales_price-suggestion_center_step-2">
                    <div class="car-sales_price-suggestion_center_step-2_price">
                        <input type="text" placeholder="سعر">
                    </div>
                    <div class="car-sales_price-suggestion_center_step-2_button">
                        <button class="primary-btn btn-hover btn-curved" onclick="MoveStep(3);">اقتراح سعر</button>
                    </div>
                </div>
                <div class="car-sales_price-suggestion_center_step-3">
                    <div class="car-sales_price-suggestion_center_step-3_img">
                        <img src="{{ asset('front/img/access.png') }}">
                    </div>
                    <div class="car-sales_price-suggestion_center_step-3_text">
                        <h4>تم تقديم طلبك بنجاح</h4>
                        <h5>و سيتم الرد عليك في اقرب وقت ممكن</h5>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            function MoveStep(step) {
                stepsClass = '.car-sales_price-suggestion_center_step-';
                steps = stepsClass + '1, ' + stepsClass + '2, ' + stepsClass + '3';

                $(steps).addClass('price-suggestion-h');
                $(steps).removeClass('price-suggestion-s');


                setTimeout(function(){
                    $(".car-sales_price-suggestion_center_loader").animate({opacity: "1"}, 0, function() {
                        $(".car-sales_price-suggestion_center_loader").toggle();
                    });
                    setTimeout(function(){
                        $(".car-sales_price-suggestion_center_loader").animate({opacity: "0"}, 500, function() {
                            $(".car-sales_price-suggestion_center_loader").toggle();
                        });
                        $(steps).css('display','none');
                        $(stepsClass + step).css('display','block');
                        $(stepsClass + step).removeClass('price-suggestion-h');
                        $(stepsClass + step).addClass('price-suggestion-s');
                    },1000);
                },400);
            }
            MoveStep(1);
        </script>

    </section>
</x-front-layout>
