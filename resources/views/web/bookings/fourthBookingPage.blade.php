@extends('web.layouts.appBooking')
@section('content')
<style type="text/css">
    footer {
        margin-top: 0vh !important;
    }

</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="{{asset('front/lnkse/jquery-3.5.1.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('front/lnkse/bootstrab.css')}}">
    <script src="{{asset('front/lnkse/bootstrab.min.js')}}"></script>
    <script src="{{asset('front/lnkse/bootstrab.js')}}"></script>
    <link rel="stylesheet" href="{{asset('front/web/css/H4.css')}}">
    <div class="head  col-lg-11">
        <div class="bnb">.</div>
        <div>
            <ul class="pro-bar">
                <li class="active">البحث</li>
                <li class="">الإضافات</li>
                <li class="">شروط الاستخدام</li>
                <li class="">الدفع</li>
                <li class="">التأكيد</li>
            </ul>
        </div>
    </div>

    <div class="cono container col-lg-11">
        <div class="cono-he">
            <div class="fl">
                <h2>طريقه الدفع</h2>
            </div>
            <hr>
        </div>
        <div class="cono-con">
            <div class="ways">
                <div style="text-align: right;">
                    <p style="margin-right: 10px;">* يمكنكم السداد عن طريق</p>
                </div>
                <div>
                    <div class="imm">
                        <label for="by1">
                            <img class="logo" src="{{asset('front/cars/h/visa_master.jpg')}}" alt="">
                        </label>
                    </div>
                    <input onclick="abl()" type="radio" name="by" id="by1">
                    <label for="by1">بطاقه اىْتمانيه</label>
                </div>
                <div>
                    <div class="imm">
                        <label for="by2">
                            <img class="logo1" src="{{asset('front/cars/h/mada-logo.png')}}" alt="">
                        </label>
                    </div>
                    <input onclick="abl2()" type="radio" name="by" id="by2">
                    <label for="by2">بطاقه مدي البنكيه</lable>
                </div>
                <div>
                    <div class="imm">
                        <label for="by3">
                            <img class="logo2" src="{{asset('front/cars/h/cash-logo.png')}}" alt="">
                        </label>
                    </div>
                    <input onclick="dis()" type="radio" name="by" id="by3">
                    <label onclick="dis()" for="by3">نقدا</lable>
                </div>

                <div class="imm">
                    <div>
                        <label for="by4">
                            <img class="logo3" src="{{asset('front/cars/h/points.png')}}" alt="">
                        </label>
                    </div>

                    <input onclick="dis1()" type="radio" name="by" id="by4">
                    <label onclick="dis1()" for="by4">النقاط</lable>
                </div>
            </div>
            <div id="bg" class="bay-g">
                <div class="inputs">
                    <div >
                        <p>*اسم البطاقه</p>
                        <input onkeyup="nnu()" id="nni" type="text">
                    </div>
                    <div >
                        <p>*رقم البطاقه</p>
                        <input min="100000000000000" max="9999999999999999" onkeyup="vnum()"  id="v1" type="number">
                    </div>
                    <div class="dd">
                        <p>*تاريخ الانتهاء</p>
                        <input maxlength="2"  onkeyup="yea()" id="ye" placeholder="الشهر" type="text">
                        <input maxlength="2" onkeyup="mon()" id="mo" placeholder="السنه" type="text">
                    </div>
                    <div >
                        <p>*رقم CCV</p>
                        <input maxlength="3" id="ccv" data="000 000" onkeyup="nnou()" maxlength="3" type="number">
                    </div>
                </div>
                <div class="card">
                    <div class="card-front">
                        <img src="core-dp._CB485980902_.png" alt="">
                        <p id="nmber" class="c-nu">1234 5678 1234 1234</p>
                        <div class="n-b">
                            <p style="font-family: 'Brygada 1918', serif;"><span id="month">12</span>/<span id="year">25</span></p>
                            <p id="nameu">M.B.S</p>
                        </div>
                    </div>
                    <div class="card-back">
                        <div class="lin">
                            .
                        </div>
                        <div class="cv-n">
                            <div>
                                <P style="display: inline-block;">CCV</P>
                                <p style="font-family: 'Brygada 1918', serif;" id="ccv2" class="ccc">123</p>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=" gooo">
        <form method="get" action='/bookings-step5'>
            <a href="H3.php" style="margin-right: 0;">رجوع</a>
            <button style="margin-left: -600px;" name="GO">تأكيد</button>
        </form>
    </div>

    <script>
        function mon() {
            window.year.innerHTML = window.mo.value;
        }
        function yea() {
            window.month.innerHTML = window.ye.value;
        }
        function vnum() {

            window.nmber.innerHTML = document.getElementById("v1").value;
        }



        function nnu() {

            window.nameu.innerHTML =  document.getElementById("nni").value;
        }

        function nnou() {

            window.ccv2.innerHTML =  document.getElementById("ccv").value;
        }

        function dis() {
            var chch = document.getElementById("by3").checked;


            if (chch == true) {
                document.getElementById("nni").disabled = true;
                document.getElementById("v1").disabled = true;
                document.getElementById("ye").disabled = true;
                document.getElementById("ccv").disabled = true;
                document.getElementById("mo").disabled = true;
                window.bg.style.opacity = ".4";


            }
        }


        function dis1() {
            var chch = document.getElementById("by4").checked;


            if (chch == true) {
                document.getElementById("nni").disabled = true;
                document.getElementById("v1").disabled = true;
                document.getElementById("ye").disabled = true;
                document.getElementById("ccv").disabled = true;
                document.getElementById("mo").disabled = true;
                window.bg.style.opacity = ".4";


            }
        }

        function abl() {
            var chch = document.getElementById("by1").checked;


            if (chch == true) {
                document.getElementById("nni").disabled = false;
                document.getElementById("v1").disabled = false;
                document.getElementById("ye").disabled = false;
                document.getElementById("ccv").disabled = false;
                document.getElementById("mo").disabled = false;
                window.bg.style.opacity = "1";


            }
        }

        function abl2() {
            var chch = document.getElementById("by2").checked;


            if (chch == true) {
                document.getElementById("nni").disabled = false;
                document.getElementById("v1").disabled = false;
                document.getElementById("ye").disabled = false;
                document.getElementById("ccv").disabled = false;
                document.getElementById("mo").disabled = false;
                window.bg.style.opacity = "1";


            }
        }

        $(function () {
            $('#ccv').focus(function () {
                $('.card-front').css("transform","perspective(600px) rotateY(-180deg)");
                $('.card-back').css("transform","perspective(600px) rotateY(0deg)");

            })

            $('#ccv').blur(function () {
                $('.card-front').css("transform","perspective(600px) rotateY(0deg)");
                $('.card-back').css("transform","perspective(600px) rotateY(-180deg)");

            })

        })
    </script>

    @endsection

