@extends('web.layouts.appBooking')
@section('content')
    <link rel="stylesheet" href="{{asset('front/web/css/H5.css')}}" />
    <div class='insertLoginForm'></div>
    <div class='bodycontainer'>
        <div class="connn">
            <style>
                .head{
                    /* background: white; */
                    width: 60%;
                    margin-top: 30px;
                    margin: 10px auto;
                    /* position: relative; */
                    margin-bottom: 10px;
                    text-align: center;

                }
                .bnb{
                    position: absolute;
                    background: rgb(255, 255, 255 , 80%);
                    width: 60%;

                    height: 110px;

                    z-index: -10;
                    border-radius: 20px;
                    padding-bottom: 0;

                }
                .pro-bar{
                    counter-reset: step;
                    padding: 0;
                    /* margin-top: 15px; */
                }

                .pro-bar li{
                    list-style: none;
                    /* float: right; */
                    display: inline-block;
                    width: 17%;
                    position: relative;
                    text-align: center;
                    color: rgb(0, 0, 0);
                    margin-top: 15px;
                    font-weight: bold;
                }

                .pro-bar li::before{
                    content: counter(step);
                    counter-increment: step;
                    width: 50px;
                    padding-top: 7px;
                    height: 50px;
                    line-height: 30px;
                    border: 1px solid rgb(2, 2, 2);
                    display: block;
                    text-align: center;
                    margin: 0 auto 10px auto;
                    border-radius: 50px;
                    background: white;
                    color: black;
                    padding-bottom: 15px;
                    /* font-weight:600 !important; */
                    font-size: 40px;
                    font-family: 'Brygada 1918', serif;


                }

                .pro-bar li::after{
                    content: "";
                    position: absolute;
                    width: 100%;
                    height: 3px;
                    background-color: rgb(0, 0, 0);
                    top: 25px;
                    right: -50%;
                    z-index: -1;

                }

                .pro-bar li:nth-child(5):after,.pro-bar li:nth-child(4):after,.pro-bar li:nth-child(3):after,.pro-bar li:nth-child(2):after,.pro-bar li:nth-child(1):after{
                    content: "";
                    position: absolute;
                    width: 100%;
                    height: 3px;
                    background-color: rgb(1,1,82);
                    top: 25px;
                    right: -50%;
                    z-index: -1;
                }
                .pro-bar li:nth-child(5)::before,.pro-bar li:nth-child(4)::before,.pro-bar li:nth-child(3)::before,.pro-bar li:nth-child(2)::before,.pro-bar li:nth-child(1)::before{
                    background-color: rgb(1,1,82);
                    color: white;
                }

                .pro-bar li:first-child::after{
                    content: none;

                }
                .pro-bar .active::after{
                    content: none;
                    border: none;

                }
                .od-tit{
                    font-weight: bold;
                    font-size: 29px;
                    padding: 45px 0;
                }
                .date div{
                    border: 1px solid;
                    margin: 0 1px;
                }
                footer {margin-top: 0vh !important;}
            </style>
            <div class="head  col-lg-11">
                <div class="bnb">.</div>
                <div>
                    <ul class="pro-bar">
                        <li class="">البحث</li>
                        <li class="">الإضافات</li>
                        <li class="">شروط الاستخدام</li>
                        <li class="">الدفع</li>
                        <li class="">التأكيد</li>
                    </ul>
                </div>
            </div>
<div class="container" style="position: relative;padding: 0;margin-top: 3vh;">
    <div class="back">
        <div class="title red">
            <h1>تأكيد الحجز</h1>
        </div>
        <button style="    position: absolute;
    top: 14px;
    left: 45px;
    font-size: 33px;
    background: #4038af;
    color: #fff;
    border: 3px solid #1a03ea;cursor: pointer; outline: none;"><i class="icofont icofont-print"></i></button>
        <div class="detel">
            <div class="code red">
                <p> رقم الحجز : <span style="font-size: 50px;font-weight: 600;margin: 0 5px;">{{$booking->booking_number}}</span></p>
                <p>تاريخ الحجز : 2021-02-22 الساعه :17:37</p>
            </div>
            <div class="dis red">
                <p style="font-size: 25px;">الحاله : تحت الدراسه</p>
                <p style="font-size: 25px;">نوع السداد : نقدا</p>
            </div>
        </div>
        <div class="date red">
            <div>
                <p>فرع الاستلام</p>
                <p>{{$booking->receiving_branch}}</p>
                <p>{{$booking->receiving_date}}</p>
            </div>
            <div class="red">
                <p>فرع التسليم</p>
                <p>{{$booking->delivery_branch}}</p>
                <p>{{$booking->delivery_date}} </p>
            </div>
        </div>
        <div class="price">
            <h1 style="color: #030172;font-weight: bold;">
                مجموع الايجار : {{$booking->total_amount}} <i class="icofont icofont-cur-riyal"></i>
            </h1>
        </div>
        <div class="complet">
            <p class="red">
                تمت عمليه الحجز بنجاح, شكرا لاختيارك شركة ابو ذياب
            </p>
            <p class="red">
                سيصلكم بريدا الكترونيا يحتوي علي رقم الحجز الخاص بكم يرجي استخدامه عند تواصلك مع شركة ابو ذياب
            </p>
        </div>
        <div style="margin-bottom: 50px;border: none;">
            <h1 class="od-tit red">تعرف علي المزيد عن عضويات ابو ذياب من خلال زيارة الصفحه الرئسيه</h1>
            <div class="mem-card">


                <div class="mebary">
                    <div class="men2">العضويه الفضيه</div>
                    <div class="memd memd2">
                        <img src="{{asset('front/img/33-Silver.png')}}" alt="">
                    </div>
                </div>

                <div class="mebary">
                    <div class="men1 red">العضويه الذهبيه</div>
                    <div class="memd memd1">
                        <img src="{{asset('front/img/31-gold-frontpsd.png')}}" alt="">
                    </div>
                </div>

                <div class="mebary">
                    <div class="men3">العضويه البلاتنيوم</div>
                    <div class="memd memd3">
                        <img src="{{asset('front/img/33-platinum-frontpsd.png')}}" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
        $('.memd1').slideDown();
        $('.memd2').slideDown();
        $('.memd3').slideDown();
        $('.men1').click(function() {
            $('.memd1').slideToggle();
        })

        $('.men2').click(function() {
            $('.memd2').slideToggle();
        })

        $('.men3').click(function() {
            $('.memd3').slideToggle();
        })
    })
</script>
@endsection

