@extends('web.layouts.app')
@section('content')
<style type="text/css">
    .otool-title {
        margin-top: 0VH;
    }
    .nav-more a {
        width: 100%;
        padding: 20px 0;
        background-color: #002352;
        font-size: 35px;
        text-align: center;
        color: white;
        font-weight: 600;
        transition: 0.4s;
        text-decoration: none;
        box-shadow: 20px 19px 20px 5px #757575
    }
    .nav-more a:hover{
        transform: scale(1.1);
        background-color: #0081eb;
    }
    .nav-more a i{
        font-size: 30px;
    }
    .clo {
        left: -78%;
    }
    .hele .clo span {
        margin: 0 -4px;
    }
    .nav-more {
        width: 90% !important;
        padding: 20px 61px 50px !important;
    }
    .katagory2, .more-katagory2{
        width: 80% !important;
        padding: 30px !important;
    }
    .katagory2 div, .more-katagory2 div{
        box-shadow: 20px 19px 20px 5px #757575;
    }
    .katagory2 div p, .more-katagory2 div p{
        font-size: 25px;
    }
    .otool-title{
        color: #002a4c;
        font-weight: bold !important;
    }
    .H1{
        border-bottom: 10px double red;
        font-weight: bold !important;
    }
    .otool-title::after, .container2 h1::after{
        height: 0;
    }
    .big-title h1{
        background: #00235252;
    }
    .car-img-sec3{
        width: 650px;
        height: 375px;
    }
    .car-detel-sec3{
        bottom: -156px;
    }
    .c3-anm{
        margin-top: 177px;
        margin-right: 5% !important;
        width: 90% !important;
        height: 400px;
    }
    .menue-bar div{
        width: 15%;
        font-size: 25px;
    }
    body{
        background: #e4e4e4 !important;
    }
    .offer{
        top: 25%;
        right: 10%;
    }
    .container2 ul{
        position: absolute;
        top: 50% !important;
        left: 50% !important;
        transform: translate(-50%, -19%);
    }
    .left, .right{
        position: absolute;
        margin: 0;
        top: 50% !important;
        transform: translate(26%, -103%);
    }
    .left{
        left: 25%;
    }
    .right{
        right: 25%;
    }
    .container2{
        padding-bottom: 0px;
    }
    li::marker{
        color: #fff;
    }
</style>
    <div class="nav-tool flue-container">
        <ul class="nav col-lg-5 col-md-5">
            <li class="home-nav">القائمة</li>
        </ul>
        <div class="search-box col-lg-3 col-md-2" style="display: none;">
            <div class="nav-search">
                <input name="search" type="text">
                <label for="search"><i class="fa fa-arrow-left" aria-hidden="true"></i></label>
            </div>
        </div>
    </div>
    <div class="nav-more">

        <a href="http://127.0.0.1:8000/cars">
            <i class="fa fa-car" aria-hidden="true"></i>
            <p>الاسطول</p>
        </a>
        <a href="">
            <i class="fa fa-star" aria-hidden="true"></i>
            <p>خدماتنا</p>
        </a>
        <a href="{{asset('front/contact-us/Untitled-1.php')}}">
            <i class="fa fa-id-card" aria-hidden="true"></i>
            <p>بطاقات العضوية</p>
        </a>
        <a href="">
            <i class="fa fa-pie-chart" aria-hidden="true"></i>
            <p>برنامج نقاطي</p>
        </a>
        <a href="/branches" style="margin-right: 0;">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <p>فروعنا</p>
        </a>
        <a href="">
            <i class="fa fa-line-chart" aria-hidden="true"></i>
            <p>المركز الاعلامي</p>
        </a>
        <a href="">
            <i class="fa fa-handshake-o" aria-hidden="true"></i>
            <p>مبيعات السيارات</p>
        </a>
        <a href="{{asset('front/contact-us/employment-department.blade.php')}}">
            <i class="fa fa-newspaper-o" aria-hidden="true"></i>
            <p>قسم التوظيف</p>
        </a>


    </div>


    <div class="big-title">
        <h1 id="detel1">عملائنا الاعزاء</h1>
        <br>
        <h1 id="detel2">عش حياتك برفاهية مع اسطــول سيــارات أبو ذياب</h1>
        <br>
    </div>

    <div class="hele">

        <div class="clo whoarewe">
            <span><i class="fa fa-address-card"></i></span>
            <a href="">من نحن</a>
        </div>

        <div class="clo whoarewe">
            <span><i class="fa fa-whatsapp"></i></span>
            <a href="https://api.whatsapp.com/send?phone=00966557492493#xd_co_f=MjA3YTM5MmZkYzdkMDhjODcyMjE2MTIzNDczNDQ5MjQ=~">واتساب</a>
        </div>

        <div class="clo whoarewe">
            <span><i class="fa fa-phone"></i></span>
            <a href="{{asset('front/contact-us/contact.blade.php')}}">اتصل بنا</a>
        </div>

        <div class="clo whoarewe">
            <span><i class="fa fa-star-half-o"></i></span>
            <a href="">تقيم</a>
        </div>

    </div>

    </div>
    </div>




    <!--
    <div class="mini-menu">
        <div><p>صفحه 1</p></div>
        <div><p>صفحه 1</p></div>
        <div><p>صفحه 1</p></div>

    </div>
    <div class="fasil">.</div> -->
    <!-- <div class="menue-bar menue-bar2">
        <div onclick="h2()"  ><p>بالساعه</p></div>
        <div onclick="h2() "  class="fch" ><p>يومي</p></div>
        <div onclick="h2()"  ><p>شهري</p></div>
    </div>
    <div class="m-d-h CO">
        <h1>حجز سريع</h1>
        <div class="inputs">
            <div class="m-inputs">
                <div>
                    <p>فرع التسليم</p>
                    <select name="" id="">
                        <option value="">فرع الاستلام</option>
                    </select>
                </div>
                <div>
                    <p>فرع التسلم</p>
                    <select name="" id="">
                        <option value="">فرع التسليم</option>
                    </select>
                </div>
                <div>
                    <p >تاريخ الاستلام</p>
                    <input   type="datetime-local">
                </div>

                <div >
                    <p >تاريخ التسلم</p>
                    <input >
                </div>
                <div>
                    <select id="hoer" name="" >
                        <option value="">عدد الساعات</option>
                    </select>
                </div>
            </div>
            <button style="height: 40px;width: 200px;font-size: 18px;">ابحث الان</button>
        </div>
    </div> -->


    <div class="sec2" style="margin: 120px 0 50px;">


        <h1 class="otool-title"><span class="H1">فئات الأسطول</span></h1>

        <div class="katagory2">
            @foreach($showCategories as $category)
                <div class='allcategory' id='{{$category->id}}'>
                     <p>{{$category->name_ar}}</p>
                </div>
            @endforeach
        </div>

        <div id="hiden" class="more-katagory2">
            @foreach($allCategories as $category)
                @if($loop->index > '4')
                <div class='allcategory' id='{{$category->id}}'>
                        <p >{{$category->name_ar}} </p>
                </div>
                @endif
            @endforeach

            <div style="border-radius: 60px;"><p><a href="{{route('cars.index')}}">الأسطول</a></p></div>
        </div>

        
        <div class="show-more-con">
            <div id="showe" onclick="show()" class="show-more">اظهار المزيد</div>
            <div id="hidea" onclick="hide()" class="show-more">اخفاء</div>

        </div>
        <div class="katagory">

        </div>
    </div>
    <div class="sec3">
        <div class="menue-bar subcategories">
            @foreach($showCategoriesCars as $cars)
                <div><p>{{$cars['name']}}</p></div>
            @endforeach
        </div>

        <div class='astolContainer'>
           <div class="astool">
            <div class="img-offer">
                <img class="car-img-sec3" src="{{asset('front/cars/CarsImg/')}}/{{$firstCar->img}}" alt=" يوجد صوره لهذه السياره\">
                <div class="offer">
                    <p class="befor num-font"><i class="fa fa-info-circle" aria-hidden="true"></i> {{$firstCar->price2}} <span>ريال</span></p>
                    <p class="p num-font">{{$firstCar->price1}} <span>ريال</span></p>
                    <p class="dily num-font">يومي</p>
                </div>
            </div>
            <div class="car-detel-sec3" style="background-image='front/cars/CarsImg/602a2c177fdb2_bmw-g05-x5-modellfinder.png'">
                <div class="detel-table">
                    <div><p class='year'>سنة</p> <p>{{$firstCar->model}}</p></div>
                    <div><p>ناقل الحركه</p> <p>{{$firstCar->features}}</p></div>
                    <div><p>عدد الابواب</p> <p>{{$firstCar->door}}</p></div>
                    <div><p> عدد المقاعد</p> <P>{{$firstCar->desc}}</P></div>
                    <div class="hags-buttn" style="position: absolute;top: -100px;left: 30px;">
                        <form action="{{route('cars.index')}}" method="get">
                            <input value="احجز الان" type="submit" name="Go">
                            <input type="hidden" name='book_now' value='{{$firstCar->id}}'>
                        </form>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>

    <div class="c3-anm">
        <div class="container2" id="container">
            <h1><span class="H1">شركاؤنا في النجاح</span></h1>
            <ul>
                <li>
                    <img id="YHbrand" src="">
                </li>
            </ul>
            <div class="left"><i class="fa fa-angle-double-left" aria-hidden="true"></i></div>
            <div class="right"><i class="fa fa-angle-double-right" aria-hidden="true"></i></div>
        </div>

        <script src="{{asset('front/lnkse/JS.js')}}"></script>
        <script type="text/javascript">
         $('.allcategory').click(function(){
                $.ajax({
                    type: 'get',
                    url: '/getCarsCategories',
                    data: {
                        category_id: this.id
                    },
                    success: function(data) {
                        let subcategories='';
                        let showCar=` <div class="astool">
                            <div class="img-offer">
                                <img class="car-img-sec3" src="front/cars/CarsImg/`+data[1]['img']+`" alt=" يوجد صوره لهذه السياره\">
                                <div class="offer">
                                    <p class="befor num-font"><i class="fa fa-info-circle" aria-hidden="true"></i>`+data[1]['price2'] +`<span>ريال</span></p>
                                    <p class="p num-font">`+data[1]['price1']+`<span>ريال</span></p>
                                    <p class="dily num-font">يومي</p>
                                </div>
                            </div>
                            <div class="car-detel-sec3">
                                <h1><span id="car-price"><!--300$--></span id="car-model\">`+data[1]['name']+`</h1>
                                <div class="detel-table">
                                    <div><p>سنة</p> <p>`+data[1]['model']+`</p></div>
                                    <div><p>ناقل الحركه</p> <p>اوتوماتيك</p></div>
                                    <div><p>التكييف</p> <p>`+data[1]['features']+`</p></div>
                                    <div><p>عدد الابواب</p> <p>`+data[1]['door']+`</p></div>
                                    <div><p>الابواب</p> <p>4</p></div>
                                    <div><p>المقاعد</p> <P>5</P></div>
                                    <div class="hags-buttn">
                                    <form action="{{route('cars.index')}}" method="get">
                                        <input value="احجز الان" type="submit" name="Go">
                                        <input type="hidden" name='book_now' value='`+data[1]['id']+`'>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>`;
                        for(let i=0;i<data[0].length;i++)
                        {
                            subcategories+=`<div class='carModel' id='`+data[0][i]['id']+`'><p>`+data[0][i]['name']+`</p></div>`;
                        }
                        $('.subcategories').html(subcategories);
                        $('.astolContainer').html(showCar);
                        $('.carModel').click(function(){
                            $.ajax({
                                type: 'get',
                                url: '/getCar',
                                data: {
                                    car_id: this.id
                                },
                                success: function(data) {
                                    let showCar=` <div class="astool">
                                        <div class="img-offer">
                                            <img class="car-img-sec3" src="front/cars/CarsImg/`+data['img']+`" alt=" يوجد صوره لهذه السياره\">
                                            <div class="offer">
                                                <p class="befor num-font"><i class="fa fa-info-circle" aria-hidden="true"></i>`+data['price2'] +`<span>ريال</span></p>
                                                <p class="p num-font">`+data['price1']+`<span>ريال</span></p>
                                                <p class="dily num-font">يومي</p>
                                            </div>
                                        </div>
                                        <div class="car-detel-sec3">
                                            <h1><span id="car-price"><!--300$--></span id="car-model\">`+data['name']+`</h1>
                                            <div class="detel-table">
                                                <div><p>سنة</p> <p>`+data['model']+`</p></div>
                                                <div><p>ناقل الحركه</p> <p>اوتوماتيك</p></div>
                                                <div><p>التكييف</p> <p>`+data['features']+`</p></div>
                                                <div><p>عدد الابواب</p> <p>`+data['door']+`</p></div>
                                                <div><p>الابواب</p> <p>4</p></div>
                                                <div><p>المقاعد</p> <P>5</P></div>
                                                <div class="hags-buttn">
                                                <form action="{{route('cars.index')}}" method="get">
                                                    <input value="احجز الان" type="submit" name="Go">
                                                    <input type="hidden" name='book_now' value='`+data['id']+`'>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>`;
                                    $('.astolContainer').html(showCar);

                                }
                            });
                        })
                          
                    }
                });
                });
            YHbrand({
                Folder : `/xampp/htdocs/abudiyab/public/front/img/brands`,
                Speed  : 2000
            });
        </script>

        <!-- <script type="text/javascript">
            $('.container2').carousel({

// the number of images to display
                num: 1,

// max width of the active image
                maxWidth: 200,

// min width of the active image
                maxHeight: 200,

// enable auto play
                autoPlay: true,

// autoplay interval
                showTime: 1000,

// animation speed
                animationTime: 1000,

// 0.0 - 1.0
                scale: 0.5,

// the distance between images
                distance: 50

            });
        </script> -->

@endsection
