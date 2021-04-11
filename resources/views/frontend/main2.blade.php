<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']" >



<div class="container-fluid px-0" >
    <div class="container-fluid px-0">
        <div id="carouselExampleIndicators" class="carousel home-carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
            </ol>
            <div class="carousel-inner">
                @foreach ($sliders as $slider )
                <div class='carousel-item {{ $loop->first ? "active" : " " }}' >
                    <div class="d-flex align-items-center">
                        <img src="{{$slider->getFirstMediaUrl()}}" class="d-block w-100" alt="carousel image">
                        <div class="abs">
                            <h1>{{ $slider->first_header }}</h1>
                            <h1>{{ $slider->second_header }}</h1>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>

    <section class="container-90">
        <div class="home-category">
            <div class="home-category__heading">
                <span class="g-title">فئات الاسطول</span>
            </div>
            <div class="home-category__conent">
                <div class="row px-0 mx-0 justify-content-center home-category__item not-active " >
                    @foreach($allCategories as $category)
                        <div class='col-sm-3 col-lg-3 col-md-4 my-2 ' id='{{$category->id}}'>
                            <button type="button" id='{{$category->id}}' class=" btn-lg btn-block primary-btn btn-hover btn-curved">{{$category->name}}</button>
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

    <section class="car-model">
        <div class="container">
            <div class="row justify-content-center px-0 mx-0 car-model__heading" >
                @foreach($showCategoriesCars as $cars)
                    <div class="car-model__item py-2">
                        <p class=" text-center">{{$cars['name']}}</p>
                    </div>
                    <div class="car-model__item py-2">
                        <p class=" text-center">{{$cars['name']}}</p>
                    </div>
                    <div class="car-model__item py-2">
                        <p class=" text-center">{{$cars['name']}}</p>
                    </div>
                    <div class="car-model__item py-2">
                        <p class=" text-center">{{$cars['name']}}</p>
                    </div>
                    <div class="car-model__item py-2">
                        <p class=" text-center">{{$cars['name']}}</p>
                    </div>
                    <div class="car-model__item py-2">
                        <p class=" text-center">{{$cars['name']}}</p>
                    </div>

                @endforeach
            </div>
            <div class="row py-3" >
                <div class="col-4 d-flex align-items-center justify-content-center car-price-section"><p class="before-price m-0" style=" text-decoration: line-through;" ><i class="icofont icofont-cur-riyal"></i>{{$firstcar->price2}}</p>
                            <h2 class="after-price"  ><i class="icofont icofont-cur-riyal"></i>{{$firstcar->price1}}</h2>
                            <p class="m-0 before-price">يومى</p>
                            <a  href="#" class="btn-block primary-btn  btn-hover btn-curved p-2 mt-2">احجز الان</a>
                </div>
                <div class="col-8 d-flex align-items-end justify-content-center">
                    <img class="mx-lg-5 mx-md-2 ml-sm-2" style="width: 80%;" src="{{$firstcar->getFirstMediaUrl()}}" alt="car image" >
                </div>
            </div>
            <div class="row car-details car-details__heading" >
                <div class="py-2 px-1 mx-0 text-center car-details__item" ><p class="my-0">سنة {{$firstcar->model}}</p></div>
                <div class="py-2 px-1 mx-0 text-center car-details__item" ><p class="my-0">ناقل الحركة اوتوماتيك</p></div>
                <div class="py-2 px-1 mx-0 text-center car-details__item" ><p class="my-0">عدد الأبواب {{$firstcar->door}}</p></div>
                <div class="py-2 px-1 mx-0 text-center car-details__item" ><p class="my-0">عدد المقاعد 5</p></div>
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


</x-front-layout>
