<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']">
    <link rel="stylesheet" type="text/css" href="{{asset('front/admin/files/assets/icon/icofont/css/icofont.css')}}">
    <section class="favorite-page">

        <section class="favorite-page_head" style="background: url({{asset('front/img/favorite.jpg')}});">
            <div class="favorite-page_head_overlay-black">
                <h1>المفضله</h1>
            </div>
        </section>

        <section class="favorite-page_center">

            <div class="favorite-page_center_top">
                <h2><span>السيارات</span> المفضله</h2>
                <p>لوريم إيبسوم هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد. لوريم إيبسوم هو النص الوهمي القياسي في الصناعة.</p>
            </div>
            <div class="favorite-page_center_cars">

                @forelse (Auth()->user()->userFavorite as $car)
                    <div class="favorite-page_center_cars_car">
                        <div class="favorite-page_center_cars_car_img">
                            <img src="{{$car->getFirstMediaUrl()}}" alt="{{$car->name}}">
                        </div>
                        <div class="favorite-page_center_cars_car_content">
                            <div class="favorite-page_center_cars_car_content_top">
                                <div>
                                    <h3>{{$car->name}}</h3>
                                    <p class="text-right">{{$car->category?$car->category->name:'-'}}</p>
                                </div>
                                <div>
                                    <p>في اليوم</p>
                                    <h1><i class="icofont icofont-cur-riyal"></i>{{$car->price1}}</h1>
                                </div>
                            </div>
                            <div class="favorite-page_center_cars_car_content_bottom">
                                <div>
                                    <p>5 مقاعد | 4 أبواب | 2 الأمتعة</p>
                                    <p>مكيف | ناقل حركة أوتوماتيكي</p>
                                </div>
                                <div>
                                    <button onclick="openBookingModel({{$car->id}})" class="primary-btn booking">حجز</button>
                                    <button class="removal">ازاله</button>
                                </div>
                            </div>
                        </div>
                    </div>

                @empty

                @endforelse

            </div>


        </section>

    </section>
</x-front-layout>
