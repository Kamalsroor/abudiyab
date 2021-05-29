<link rel="stylesheet" href="{{asset('front/admin/files/assets/icon/icofont/css/icofont.css')}}">
<link rel="stylesheet" href="{{asset('front/lnkse/car-details/fonts/flaticon/font/flaticon.css')}}">
<link rel="stylesheet" href="{{asset('front/lnkse/car-details/css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('front/lnkse/car-details/css/slider-pro.css')}}">
<link rel="stylesheet" href="{{asset('front/lnkse/car-details/css/owl.carousel.css')}}">

<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']">
<section class="car-details" dir="ltr">
    <div class="l-theme animated-css" data-header="sticky" data-header-top="200" data-canvas="container">
        <div class="section-title-page area-bg area-bg_dark area-bg_op_70" style="background: url('{{asset('front/img/car-details.jpg')}}');">
            <div class="area-bg__inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="b-title-page bg-primary_a"> تفاصيل السيارة</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <main class="l-main-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <section class="b-car-details">
                            <div class="b-car-details__header">
                                <div class="b-car-details__header-l">
                                    <a href="#" class="btn btn-dark">احجز الان</a>
                                </div>
                                <div class="b-car-details__header-r">
                                    <h2 class="b-car-details__title">{{$car->name}}</h2>
                                    <div class="b-car-details__subtitle">{{$car->category?$car->category->name:'-'}}</div>
                                    <div class="b-car-details__address"></div>
                                </div>
                                <div class="b-car-details__links"><i class="icon fas fa-share-alt text-primary"></i>مشاركه</div>
                            </div>
                            <div class="slider-car-details slider-pro" id="slider-car-details">
                                <div class="sp-slides">
                                    @foreach ($car->getPhotos() as $photo)
                                        <div class="sp-slide">
                                            <img class="sp-image" src="{{$photo['url']}}" alt="{{$photo['file_name']}}" />
                                        </div>
                                    @endforeach

                                </div>
                                <div class="sp-thumbnails">

                                    @foreach ($car->getPhotos() as $photo)
                                        <div class="sp-thumbnail">
                                            <img class="img-responsive" src="{{$photo['url']}}" alt="{{$photo['file_name']}}" />
                                        </div>

                                    @endforeach
                                </div>
                            </div>
                            <!-- end .b-thumb-slider-->
                            <div class="b-car-details__section">
                                <h3 class="b-car-details__section-title ui-title-inner">وصف السياره</h3>

                                @if (strlen($car->description))
                                <p>{{$car->description}}
                                @else
                                <p>لا يوجد وصف لهذه السياره</p>
                                @endif
                                </p>
                            </div>

                        </section>
                    </div>
                    <div class="col-md-4">
                        <aside class="l-sidebar-2">
                            <div class="b-car-info">
                                <div class="b-car-info__price"><i class="icofont icofont-cur-riyal"></i>{{$car->price1}}<span class="b-car-info__price-msrp"> <i class="icofont icofont-cur-riyal"></i>{{$car->price2}}</span>
                                </div>
                                <dl class="b-car-info__desc dl-horizontal bg-grey">
                                    <dt class="b-car-info__desc-dt">{{$car->category?$car->category->name:'-'}}</dt>
                                    <dd class="b-car-info__desc-dd">الفئه</dd>
                                    <dt class="b-car-info__desc-dt">{{$car->model}}</dt>
                                    <dd class="b-car-info__desc-dd">سنه</dd>
                                    <dt class="b-car-info__desc-dt">{{$car->features}}</dt>
                                    <dd class="b-car-info__desc-dd">انتقال</dd>
                                    <dt class="b-car-info__desc-dt">{{$car->manufactory->name}}</dt>
                                    <dd class="b-car-info__desc-dd">الماركه</dd>
                                </dl>

                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <!-- end .b-car-details-->
            <section class="section-default_top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="ui-title-block">السيارات ذات الصلة</h2>
                            <div class="ui-decor"></div>
                            <div class="related-carousel owl-carousel owl-theme owl-theme_w-btn enable-owl-carousel" data-min768="2" data-min992="3" data-min1200="3" data-margin="30" data-pagination="false" data-navigation="true" data-auto-play="4000" data-stop-on-hover="true">
                                @foreach ($relatedcars as $relatedcar)
                                    <div class="b-goods-feat">
                                        <div class="b-goods-feat__img">
                                            <img class="img-responsive" src="{{$relatedcar->getFirstMediaUrl()}}" alt="foto" /><span class="b-goods-feat__label"><i class="icofont icofont-cur-riyal"></i>{{$relatedcar->price2}}<span class="b-goods-feat__label_msrp">MSRP <i class="icofont icofont-cur-riyal"></i>{{$relatedcar->price1}}</span></span>
                                        </div>
                                        <ul class="b-goods-feat__desc list-unstyled">
                                            <li class="b-goods-feat__desc-item">{{$relatedcar->manufactory->name}}</li>
                                            <li class="b-goods-feat__desc-item">سنه: {{$relatedcar->model}}</li>
                                            <li class="b-goods-feat__desc-item">{{$relatedcar->door}}</li>
                                            <li class="b-goods-feat__desc-item">{{$relatedcar->category->name}}</li>
                                        </ul>
                                        <h3 class="b-goods-feat__name"><a href="car-details.html">{{$relatedcar->name}}</a></h3>
                                        <div class="b-goods-feat__info">عزاء للفرار ، ومع ذلك ، فهو يرغب في أن يفرز كيوبيداتت لا ينتج عنه أي متعة؟</div>
                                    </div>
                                @endforeach
                                <!-- end .b-goods-featured-->




                            </div>
                            <!-- end .related-carousel-->
                        </div>
                    </div>
                </div>
            </section>
            <!-- end .section-default_top-->
        </main>
        <!-- end .l-main-content-->
    </div>
    <!-- end layout-theme-->
</section>
@section('js')
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="{{asset('front/lnkse/car-details/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/lnkse/car-details/js/custom.js')}}"></script>
<script src="{{asset('front/lnkse/car-details/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('front/lnkse/car-details/js/jquery.sliderPro.min.js')}}"></script>
@endsection

</x-front-layout>

