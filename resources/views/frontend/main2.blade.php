<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']" >
<link rel="stylesheet" type="text/css" href="{{asset('front/admin/files/assets/icon/icofont/css/icofont.css')}}">
@section('styles')
    <style>
        .footer{
            padding-top: 100px;
        }
    </style>
    @include('frontend.css.main_cartogray')
@endsection

<div class="container-fluid px-0" >
    <div class="container-fluid px-0 d-none d-md-block">

        <div id="carouselExampleIndicators" class="carousel home-carousel slide" data-ride="carousel">
            <ol class="carousel-indicators" >
                @foreach ($sliders as $slider )
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index}}" class="{{$loop->first  ? 'active' : "" }}" style="background-image: url({{$slider->getFirstMediaUrl()}});"></li>
                @endforeach
            </ol>
            <div class="carousel-inner">
                @foreach ($sliders as $slider )
                <div class='carousel-item {{ $loop->first ? "active" : " " }}' style="background-image: url({{$slider->getFirstMediaUrl()}});">
                    <div class="d-flex align-items-start justify-content-center" style="height: 100%;flex-direction: column;padding-right: 60px;background: #00000012;">

                        <h1>{{ $slider->first_header }}</h1>
                        <p style="font-size:30px;text-shadow: 1px 1px 10px #000;">{{ $slider->second_header }}</p>
                        {{-- <a href="#more" class="primary-btn btn-hover btn-curved m-5 p-3" style="width: 10%;">المزيــد <i class='fas fa-angle-double-down'  style="margin-right:5px; "></i></a> --}}


                    </div>
                </div>
                @endforeach
            </div>

        </div>

    </div>
    <div id="carouselExampleIndicators2" class="carousel home-carousel slide d-block d-md-none" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach ($miniSliders as $slider )
                <li data-target="#carouselExampleIndicators2" data-slide-to="{{$loop->index}}" class="{{$loop->first  ? 'active' : "" }}" style="background-image: url({{$slider->getFirstMediaUrl()}});"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach ($miniSliders as $slider )
            <div class='carousel-item {{ $loop->first ? "active" : " " }}' >
                <div class="d-flex align-items-center justify-content-center">
                    <img src="{{$slider->getFirstMediaUrl()}}" class="d-block w-100" alt="carousel image">
                    <div class="abs p-0 m-0 text-center " style="transform: translateY(45px);">
                        <h1 class="m-0 p-0" style="font-size: 30px;">{{ $slider->first_header }}</h1>
                        <p>{{ $slider->second_header }}<p>
                    </div>
                </div>
            </div>
            @endforeach


        </div>

    </div>

        <section class="home-offers content whitebg">
            <div class="home-offers_head">
                <span class="g-title">عروضنا</span>
            </div>
            <div class="home-offers_content">
                <div class="home-offers_content_background">
                    <img src="{{ asset('front/img/SLIDERS/slide-1.jpg') }}" alt="">
                </div>
                <div class="home-offers_content_text">
                    <div class="home-offers_content_text_discount wow animate__wobble">
                        <h1>خصم <span>20%</span></h1>
                    </div>
                    <div class="home-offers_content_text_name">
                        <h2>رنج روفر</h2>
                    </div>
                    <div class="home-offers_content_text_detailing">
                        <h4>فخمه كبيره</h4>
                        <h2>2021</h2>
                    </div>
                    <div class="home-offers_content_text_price">
                        <s><i class="icofont icofont-cur-riyal"></i>2000</s>
                        <h2><i class="icofont icofont-cur-riyal"></i>1200</h2>
                    </div>
                    <div class="home-offers_content_text_button">
                        <button class="detailing">التفاصيل</button>
                        <button>احجز الان</button>
                    </div>
                </div>
            </div>
            <div class="container-fluid offers" style="padding-top:0">
                {{-- @foreach ($offers as $offer)
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pod" url="#" number="1">
                        <div class="hover-offer ehover1"><img class="img-responsive" src="https://saudiauto.com.sa/uploads/Untitled-1_109.jpg" alt="Barcelona" />
                            <div class="offer-content">
                            <div class="ribbon orange">خصم {{$offer->value}}%</div>
                            <figcaption> <span class="flights-icon">(</span>
                                <h4>{{$offer->name}} {{$offer->model}}</h4>
                                <p class="detail">5 مقاعد | {{$offer->door}} أبواب | 2 الأمتعة</p>
                                <p class="detail">{{$offer->category ? $offer->category->name : ""}}</p>
                                <p class="price-offer"><span><i class="icofont icofont-cur-riyal"></i></span>{{$offer->price1}}</p>
                                <div class="button2">احجز الان</div>
                            </figcaption>
                            </div>
                        </div>
                    </div>
                @endforeach --}}
              {{-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pod" url="#" number="2">
                <div class="hover-offer ehover1"><img class="img-responsive" src="https://1.bp.blogspot.com/-F5cZ10DJ68A/Xukz4ACNbgI/AAAAAAAABAs/ndkQ6DAwv-k7MdS2_0ldSZFI3cJVUbYLwCK4BGAYYCw/s1600/3864%2Bcopy.jpg" alt="París" />
                  <div class="offer-content">
                    <div class="ribbon orange">خصم 20%</div>
                    <figcaption> <span class="flights-icon">Q</span>
                      <h4>S 320 مرسيدس</h4>
                      <p class="detail">5 مقاعد | 4 أبواب | 2 الأمتعة</p>
                      <p class="detail">فخمة كبيرة</p>
                      <p class="price-offer"><span><i class="icofont icofont-cur-riyal"></i></span>1309</p>
                      <div class="button2">احجز الان</div>
                    </figcaption>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pod" url="#" number="3">
                <div class="hover-offer ehover1"><img class="img-responsive" src="https://meaningg.cc/wp-content/uploads/2018/08/618.jpg" alt="Roma" />
                  <div class="offer-content">
                    <div class="ribbon orange">خصم 5%</div>
                    <figcaption> <span class="flights-icon">U</span>
                      <h4>S 320 مرسيدس</h4>
                      <p class="detail">5 مقاعد | 4 أبواب | 2 الأمتعة</p>
                      <p class="detail">فخمة كبيرة</p>
                      <p class="price-offer"><span><i class="icofont icofont-cur-riyal"></i></span>260</p>
                      <div class="button2">احجز الان</div>
                    </figcaption>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pod" url="#" number="4">
                <div class="hover-offer ehover1"><img class="img-responsive" src="https://i.ytimg.com/vi/Ew5Lwb9fI1I/hqdefault.jpg" alt="Londres" />
                  <div class="offer-content">
                    <div class="ribbon orange">خصم 5%</div>
                    <figcaption> <span class="flights-icon">(</span>
                      <h4>S 320 مرسيدس</h4>
                      <p class="detail">5 مقاعد | 4 أبواب | 2 الأمتعة</p>
                      <p class="detail">فخمة كبيرة</p>
                      <p class="price-offer"><span><i class="icofont icofont-cur-riyal"></i></span>150</p>
                      <div class="button2">احجز الان</div>
                    </figcaption>
                  </div>
                </div>
              </div> --}}
            </div>
          </section>

    <section class="container-90">
        <div class="home-category">
            <div class="home-category__heading d-flex justify-content-center py-3 ">
                <span class="g-title " >فئات الاسطول</span>
            </div>
            <div class="home-category__conent wow animate__slideInUp" data-wow-offset="200" data-wow-duration="2s">
                <div class="row px-0 mx-0 justify-content-center home-category__item not-active">
                    @foreach($allCategories as $category)
                        <div class='col-sm-3 col-lg-3 col-md-4 my-2 ' id='{{$category->id}}'>
                            <a type="button" id='{{$category->id}}'   data-id="{{$category->id}}" href="#home-category__togeller" class=" btn-lg btn-block primary-btn btn-hover btn-curved CarCategoryChange">{{$category->name}}</a>
                        </div>
                    @endforeach
                        <div class="col-sm-3 col-lg-3 col-md-4 my-2">
                            <a class="btn-lg btn-block secondary-btn btn-hover btn-curved" href="{{route('front.fleet')}}"> الأسطول</a>
                        </div>
                </div>
                <div class="row px-0 mx-0 justify-content-center mt-4" >
                    <button type="button" id="home-category__togeller" class=" px-4 py-2  primary-btn btn-hover btn-curved" data-more="<i class='fas fa-angle-double-down'></i>"  data-less="<i class='fas fa-angle-double-up'></i>" ><i class='fas fa-angle-double-down'></i> </button>
                </div>
            </div>
        </div>
    </section>

    <section class="car-model wow animate__slideInUp" data-wow-offset="200" data-wow-duration="2s" id="car-model-section">
        <livewire:frontend.car-model />
        <div class="container slick-section">
            <div class="row justify-content-center px-0 mx-0 car-model__heading" >
                @foreach($showFirstCatInCatgories as $showFirstCatInCatgory)
                    <div class="car-model__item py-2" data-id="{{$showFirstCatInCatgory->id}}">
                        <p class=" text-center">{{$showFirstCatInCatgory->name}}</p>
                    </div>
                @endforeach



            </div>
        </div>

        <livewire:frontend.car-details />
        <div class="container slick-section">
            <div class="row car-details car-details__heading" id="more">
                <div class="py-2 px-1 mx-0 text-center car-details__item" ><p class="my-0">موديل : {{isset($firstcar) ? $firstcar->model : ""}}</p></div>
                <div class="py-2 px-1 mx-0 text-center car-details__item" ><p class="my-0">ناقل الحركة : اوتوماتيك</p></div>
                <div class="py-2 px-1 mx-0 text-center car-details__item" ><p class="my-0">عدد الأبواب : {{isset($firstcar) ? $firstcar->door : ""}}</p></div>
                <div class="py-2 px-1 mx-0 text-center car-details__item" ><p class="my-0">عدد المقاعد : 5</p></div>
            </div>
        </div>


    </section>

    <section class="home-linking-section wow animate__slideInUp" data-wow-offset="200" data-wow-duration="2s">{{-- animate__slideInUp data-wow-offset="200" data-wow-duration="2s" --}}
        <div class="home-linking-section_right">
            <div class="home-linking-section_right_content" style="background-image: url({{asset('front/img/download-2.jpg')}});">
                <div>
                    <h5>هل انت ترغب في</h5>
                    <h2>شراء سياره</h2>
                    <p>MotorLand is nisi aliquip exa con velit esse cillum dolore fugiatal sint occaecat excepteur ipsum dolor sit amet consectetur.</p>
                    <a href="{{route('front.car_sales')}}">شراء سياره</a>
                </div>
            </div>
        </div>
        <div class="home-linking-section_left">
            <div class="home-linking-section_left_content" style="background-image: url({{asset('front/img/download-1.jpg')}});">
                <div>
                    <h5>هل تبحث عن</h5>
                    <h2> سياره للايجار</h2>
                    <p>MotorLand is nisi aliquip exa con velit esse cillum dolore fugiatal sint occaecat excepteur ipsum dolor sit amet consectetur.</p>
                    <a href="{{route('front.fleet')}}">تأجير سياره</a>
                </div>
            </div>
        </div>
    </section>


    <section class="home-our-partners wow animate__slideInUp" data-wow-offset="200" data-wow-duration="2s">

        {{-- <div class="home-our-partners__heading">
            <span class="g-title">شركاؤنا في النجاح</span>
        </div> --}}

        <div class="home-our-partners__content pt-3 mt-5">
            @foreach($partners as $partner)
            <div class="text-center home-our-partners__item">
                <img src="{{$partner->getFirstMediaUrl()}}" class="d-block wd-100"  alt="car brand">
            </div>
            @endforeach
        </div>


    </section>

</div>
<div class="modal fade" id="BookingModel" tabindex="-1" aria-labelledby="BookingModelLabel" aria-hidden="true">
    <livewire:booking-model/>
</div>
<div class="mail-subscripe text-center "  style="background: url({{asset('front/img/subscription2.jpg')}});">
    <div class="subscription-overlay">
        <label for="mail-subscripe mb-5">أبق على تواصل معنا من خلال اشتراكك فى نشرتنا البريدية</label>

        <div class="input-group">
            <input type="text" id="mailsu" class="form-control" placeholder="أدخل بريدك الالكترونى" aria-label="" aria-describedby="basic-addon1">
            <div class="input-group-prepend">
            <button class="btn " id='subscribe' type="button"><i class="fab fa-telegram-plane" style="font-size: 35px"></i></button>
            </div>
        </div>
        <div class="alert alert-success  my-2 confirmed" id='confirm' style="display: none" role="alert">
            عميلنا العزيز تم الاشتراك في النشره الاخباريه بنجاح
        </div>
        <div class="alert alert-danger  my-2 rejected" id='reject' style="display: none" role="alert">
            عميلنا العزيز ناسف لوجود مشكله في الوقت الحالي برجاء المحاوله في وقت اخر
        </div>
        <div class="alert alert-danger  my-2 rejected" id='exist' style="display: none" role="alert">
            عميلنا العزيز هذا الايميل مشترك بلفعل في النشره الاخباريه
        </div>
        <div class="alert alert-danger  my-2 rejected" id='notvalide' style="display: none" role="alert">
            يجب ادخال ايميل
        </div>
    </div>

</div>
@push('js')
<script>
    let subscribeURL="{{route('api.user.subscribe')}}";
</script>
@endpush
</x-front-layout>
