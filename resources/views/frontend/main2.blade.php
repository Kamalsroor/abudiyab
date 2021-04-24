<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']" >
<link rel="stylesheet" type="text/css" href="{{asset('front/admin/files/assets/icon/icofont/css/icofont.css')}}">
@section('styles')
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
                    <div class="d-flex align-items-start justify-content-center" style="height: 100%;flex-direction: column;padding-right: 60px;        background-image: linear-gradient(90deg, #00000063 15%, #00000063 50%, #00000063 85%); ">

                        <h1>{{ $slider->first_header }}</h1>
                        <h1>{{ $slider->second_header }}</h1>
                        <a href="#more" class="primary-btn btn-hover btn-curved m-5 p-3" style="width: 10%;">المزيــد <i class='fas fa-angle-double-down'  style="margin-right:5px; "></i></a>
                       
                       
                    </div>
                </div>
                @endforeach
            </div>

        </div>

    </div>
    <div id="carouselExampleIndicators2" class="carousel home-carousel slide d-block d-md-none" data-ride="carousel">
        <ol class="carousel-indicators">
            
                <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active" ></li>
                <li data-target="#carouselExampleIndicators2" data-slide-to="1" ></li>
                <li data-target="#carouselExampleIndicators2" data-slide-to="2" ></li>
                <li data-target="#carouselExampleIndicators2" data-slide-to="3" ></li>
                <li data-target="#carouselExampleIndicators2" data-slide-to="4" ></li>
            
        </ol>
        <div class="carousel-inner">
            
            <div class='carousel-item active' >
                <div class="d-flex align-items-center justify-content-center">
                    <img src="{{asset('front/img/mobile sliders shebl/car.jpg')}}" class="d-block w-100" alt="carousel image">
                    <div class="abs p-0 m-0 text-center " style="transform: translateY(45px);">
                        <h1 class="m-0 p-0" style="font-size: 30px;">حلمك يصير حقيقة</h1>
                        <p>مع أبو ذياب<p>
                        
                        
                    </div>
                </div>
            </div>
            <div class='carousel-item ' >
                <div class="d-flex align-items-center justify-content-center">
                    <img src="{{asset('front/img/mobile sliders shebl/car2.jpg')}}" class="d-block w-100" alt="carousel image">
                    <div class="abs p-0 m-0 text-center " style="transform: translateY(45px);">
                        <h1 class="m-0 p-0" style="font-size: 30px;">حلمك يصير حقيقة</h1>
                        <p>مع أبو ذياب<p>
                        
                        
                    </div>
                </div>
            </div>
            <div class='carousel-item ' >
                <div class="d-flex align-items-center justify-content-center">
                    <img src="{{asset('front/img/حلمك-يصير-حقيقةfront/img/mobile sliders shebl/حلمك-يصير-حقيقة.jpg-2.jpg')}}" class="d-block w-100" alt="carousel image">
                    <div class="abs p-0 m-0 text-center " style="transform: translateY(45px);">
                        <h1 class="m-0 p-0" style="font-size: 30px;">حلمك يصير حقيقة</h1>
                        <p>مع أبو ذياب<p>
                        
                        
                    </div>
                </div>
            </div>
            
        </div>

    </div>

        {{-- <section class="home-offers content whitebg">
            <div class="home-offers_head">
                <span class="g-title">عروضنا</span>
            </div>
            <div class="container-fluid offers" style="padding-top:0">
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pod" url="#" number="1">
                <div class="hover-offer ehover1"><img class="img-responsive" src="https://saudiauto.com.sa/uploads/Untitled-1_109.jpg" alt="Barcelona" />
                  <div class="offer-content">
                    <div class="ribbon orange">خصم 5%</div>
                    <figcaption> <span class="flights-icon">(</span>
                      <h4>S 320 مرسيدس</h4>
                      <p class="detail">5 مقاعد | 4 أبواب | 2 الأمتعة</p>
                      <p class="detail">فخمة كبيرة</p>
                      <p class="price-offer"><span><i class="icofont icofont-cur-riyal"></i></span>900</p>
                      <div class="button2">احجز الان</div>
                    </figcaption>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pod" url="#" number="2">
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
              </div>
            </div>
          </section> --}}

    <section class="container-90">
        <div class="home-category">
            <div class="home-category__heading d-flex justify-content-center py-3">
                <span class="g-title">فئات الاسطول</span>
            </div>
            <div class="home-category__conent">
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

    <section class="car-model" id="car-model-section">
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

    <section class="home-linking-section" style="    background-image: url({{optional(Settings::instance('home_links_backgraund'))->getFirstMediaUrl('home_links_backgraund')}});
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">
        <div>
        <h2 >{{Settings::locale(app()->getLocale())->get('home_links_title')}}</h2>
        </div>
    </section>


    <section class="home-our-partners">

        <div class="home-our-partners__heading">
            <span class="g-title">شركاؤنا في النجاح</span>
        </div>

        <div class="home-our-partners__content">
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

</x-front-layout>
