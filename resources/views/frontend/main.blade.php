<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']" >




    <div class="container-fluid px-0" >
    <div class="container-fluid px-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
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
                <div class="carousel-item active ">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('front/img/finalsliders/slide_new222.jpg')}}" class="d-block w-100" alt="carousel image">
                        <div class="abs">
                            <h1>عملائنا الأعزاء..</h1>
                            <h1>سلامتك تهمنا</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('front/img/finalsliders/slide_new_1.jpg')}}" class="d-block w-100" alt="carousel image">
                        <div class="abs">
                            <h1>عملائنا الأعزاء..</h1>
                            <h1>سلامتك تهمنا</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('front/img/finalsliders/slide_new_2.jpg')}}" class="d-block w-100" alt="carousel image">
                        <div class="abs">
                            <h1>عملائنا الأعزاء..</h1>
                            <h1>سلامتك تهمنا</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('front/img/finalsliders/slide_5.jpg')}}" class="d-block w-100" alt="carousel image">
                        <div class="abs">
                            <h1>عملائنا الأعزاء..</h1>
                            <h1>سلامتك تهمنا</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('front/img/finalsliders/slide_new_6.jpg')}}" class="d-block w-100" alt="carousel image">
                        <div class="abs">
                            <h1>عملائنا الأعزاء..</h1>
                            <h1>سلامتك تهمنا</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('front/img/finalsliders/1.jpg')}}" class="d-block w-100" alt="carousel image">
                        <div class="abs">
                            <h1>عملائنا الأعزاء..</h1>
                            <h1>سلامتك تهمنا</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('front/img/finalsliders/2.jpg')}}" class="d-block w-100" alt="carousel image">
                        <div class="abs">
                            <h1>عملائنا الأعزاء..</h1>
                            <h1>سلامتك تهمنا</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('front/img/finalsliders/3.jpg')}}" class="d-block w-100" alt="carousel image">
                        <div class="abs">
                            <h1>عملائنا الأعزاء..</h1>
                            <h1>سلامتك تهمنا</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('front/img/finalsliders/4.jpg')}}" class="d-block w-100" alt="carousel image">
                        <div class="abs">
                            <h1>عملائنا الأعزاء..</h1>
                            <h1>سلامتك تهمنا</h1>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row text-center py-4 m-0">
        <div class="col-lg-4 col-md-6 col-sm-10 text-center m-auto">
            <h1 class="doubleline color-black">فئات الأسطول</h1>
        </div>
    </div>

    <div style="width:90%;margin:auto;">
        <div class="container-fluid" style="background-color: white">
            <div class="row categories-home justify-content-center">
                @foreach($showCategories as $category)
                <div class='col-sm-3 col-lg-3 col-md-3 my-2 ' id='{{$category->id}}'>
                    <button type="button" id='{{$category->id}}' class="btn btn-primary btn-lg btn-block allcategory">{{$category->name}}</button>
                </div>
                @endforeach
            </div>
            <div class="row categories-home justify-content-center hidden-part">
                @foreach($allCategories as $category)
                @if($loop->index>3)
                <div class='col-sm-3 col-lg-3 col-md-3 my-2 ' >
                    <button  type="button" id='{{$category->id}}' class="btn btn-primary btn-lg btn-block allcategory">{{$category->name}}</button>
                </div>
                @endif
                @endforeach
                <div class="col-sm-3 col-lg-3 col-md-3 my-2">
                    <form action="">
                        <button type="button" class="btn btn-primary btn-lg btn-block" ><a href="{{route('front.fleet')}}"> الأسطول</a></button>
                    </form>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="more col-sm-3 my-2 text-center">
                        <button type="button" onclick="show()" class="btn btn-primary btn-lg hide-button show-more">المزيد</button>
                        <button type="button" onclick="hide()" class="btn btn-primary btn-lg hide-button show-less">القليل</button>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="width:80%;margin:auto;">

        <div class="container-fluid subcategories">
            <div>
                <div class="row justify-content-center pt-4 ModelName" >
                    @foreach($showCategoriesCars as $cars)
                        <div class="col-2 pt-2 {{(($loop->iteration == 1) ? 'bg-primary' : '')}}" style="font-size: 20px;background-color: {{(($loop->iteration == 1) ? '' : '#505151')}} ;cursor: pointer;">
                            <p class=" text-center">{{$cars['name']}}</p>
                        </div>
                    @endforeach
                        {{-- <div><p>{{$cars['name']}}</p></div> --}}
                </div>
            </div>

            <div class="container-fluid mx-0 astolContainer"  style="background-color: #8080805c" >
                <div class="row py-3" >
                    <div class="col-4 d-flex align-items-center justify-content-center">

                            <div class="text-center">
                            <p class="before-price m-0" style=" text-decoration: line-through;" ><i class="icofont icofont-cur-riyal"></i>{{$firstcar->price2}}</p>
                            <h2 class="after-price"  ><i class="icofont icofont-cur-riyal"></i>{{$firstcar->price1}}</h2>
                            <p style="transform: translateY(-20px);" class="m-0 before-price">يومى</p>
                            <a  href="#" class="btn-block" style="background: linear-gradient(
                                91deg
                                , #0d157b 15%, #0095ff 121%);
                                    color: #fff;
                                    font-size: 16px;
                                    border-radius: 50px;
                                    padding: 10px 45px;">احجز الان</a>
                            </div>
                    </div>
                    <div class="col-8 d-flex align-items-end justify-content-center">

                        <img class="mx-lg-5 mx-md-2 ml-sm-2" style="width: 80%;" src="{{$firstcar->getFirstMediaUrl()}}" alt="car image" >
                    </div>


                </div>
                <div class="row " style="background-color:#505151 ;">
                    <div class="py-2 col-3 px-1 mx-0 text-center" style="border-left: white solid 1px;"><p class="my-0">سنة {{$firstcar->model}}</p></div>
                    <div class="py-2 col-3 px-1 mx-0 text-center" style="border-left: white solid 1px;"><p class="my-0">ناقل الحركة اوتوماتيك</p></div>
                    <div class="py-2 col-3 px-1 mx-0 text-center" style="border-left: white solid 1px;"><p class="my-0">عدد الأبواب {{$firstcar->door}}</p></div>
                    <div class="py-2 col-3 px-1 mx-0 text-center"><p class="my-0">عدد المقاعد 5</p></div>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid mx-0 px-0 linking-image mt-3" >
        <div class="linking-image-inner d-flex align-items-end">

            <h2 style="font-size: 45px;font-weight:500;background-color:#00000054;">لأنك تستاهل الأحدث</h2>

        </div>


    </div>

    <div style="width:80%;margin:auto;">
        <div class="container-fluid mx-0 pt-5">
            <div class="row justify-content-center">
                <div class="py-2 col-lg-4 col-md-6 col-sm-10">
                    <h2 class="doubleline color-black pb-3">شركاؤنا في النجاح</h2>
                </div>
            </div>

            <div class="container-fluid brands pb-3" style="background-color: white;">
                <div class="row justify-content-center " >
                    <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-center justify-content-center" style="min-height:250px;background-color:white;">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active text-center">
                                    <img src="{{asset('front/img/brands/BMW.png')}}" class="d-block " style="width:200px;margin:auto;" alt="car brand">
                                </div>
                                <div class="carousel-item text-center">
                                    <img src="{{asset('front/img/brands/changan.png')}}" class="d-block " style="width:200px;margin:auto;" alt="car brand">
                                </div>
                                <div class="carousel-item text-center">
                                    <img src="{{asset('front/img/brands/Citroen.png')}}" class="d-block " style="width:200px;margin:auto;" alt="car brand">
                                </div>
                                <div class="carousel-item text-center">
                                    <img src="{{asset('front/img/brands/Honda.png')}}" class="d-block " style="width:200px;margin:auto;" alt="car brand">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>


    </div>
</div>

<div class="row px-0 mx-0">
            <div class="icontain" style="position: relative;overflow: hidden;z-index:0;width: 100%;padding-top: 25%;">
                <iframe style="border-radius:0;position: absolute;z-index:0;top: 0;left: 0;bottom: 0;right: 0;width: 100%;height: 100%;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d34486.23781465423!2d46.71233010067552!3d24.695303498164268!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4c842f5512d0930a!2sAbudiyab%20Head%20Office!5e0!3m2!1sen!2seg!4v1615993500583!5m2!1sen!2seg" width="450" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
</div>

</x-front-layout>
