@extends('web.layouts.appBooking')
@section('content')
<style type="text/css">footer {margin-top: 0vh !important;}</style>
    <link href="{{asset('front/lnkse/css2.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('front/web/css/H3.css')}}"/><!-- php artisan serve -->
    <div class=" transparent-background">

        <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">


                <h1 class="seo-title-text-hidden">تاجير سيارات</h1>
                <div class="booking-main-container row">
                    <div class="booking-search-wrapper" style="display: none;">
                        <div class="booking-search-container">
                            <div class="booking-search-header">
                                <div class="active">
                                    <span href="" data-event="tab_car">ابحث الآن</span>
                                </div>
                            </div>

                            <form id="fleet-reservation-form" role="form" data-notalwefaqbranches="" data-notalwefaqcities="" data-action="/ar/Booking/Search" data-gettimes="/ar/Booking/GetBranchOpeningTime" data-minhourstobook="6">

                                <input name="__RequestVerificationToken" type="hidden" value="ptVU2-2yeuTEyLuYsIbE8ZWy4DnoI4qzR5YWlsM5fWfN-QdNf7yjfWSPusb0SWRtt-ECSa3keBaWLY3UWHnRr2OicQtyht4vX1RjezFQsQI1">

                                <div class="row">

                                    <div class="col-md-5 col-sm-12 col-xs-12 no-padding">
                                        <div class="col-md-12 col-sm-12 col-xs-12 pickup-container no-padding-left">

                                            <div class="row">
                                                <div class="col-md-6 pickup-lbl text-uppercase major-label">

                                                    الإستلام و التسليم
                                                </div>
                                                <div id="return-check-bx" class="col-md-6 no-padding-left" onclick="">
                                                    <input type="checkbox" checked="checked" onchange="ShowRetunContainer();">

                                                    التسليم مكان الإستلام
                                                </div>
                                            </div>
                                            <div class="margin-bottom-less">
                                                <div class="booking-widget-label">
                                                    <input class="pickup-tb booking-entry" type="text" placeholder="المدينة, الفرع, المطار" autocomplete="off" data-action="/ar/Branches/GetBranchesByTextFilter" onkeyup="branch_textChanged(this, '.pickup-search-result');" onpaste="branch_textChanged(this, '.pickup-search-result');" onclick="branch_textFocused(this, '.pickup-search-result');" value="السويدي">
                                                    <input type="hidden" name="PickupBranchId" value="7">
                                                    <span class="pickup-tb-loc-icon"></span>
                                                </div>
                                            </div>
                                            <div class="pickup-search-result search-result" style="display: none;">
                                                <div class="search-result-container" data-inputtype="1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12 return-container no-padding-left">
                                            <div class="row">
                                                <div class="col-md-6 text-uppercase major-label">

                                                    التسليم
                                                </div>
                                                <div class="col-md-6 booking-search-close-return" onclick="closeReturn()">
                                                    X
                                                </div>
                                            </div>
                                            <div class="margin-bottom-less">
                                                <div class="booking-widget-label" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="الرجاء إختيار فرع الإستلام أولا" data-original-title="" title="">
                                                    <input class="return-tb booking-entry" type="text" placeholder="المدينة, الفرع, المطار" autocomplete="off" data-action="/ar/Branches/GetBranchesByTextFilter" onkeyup="branch_textChanged(this, '.return-search-result');" onpaste="branch_textChanged(this, '.return-search-result');" onclick="branch_textFocused(this, '.return-search-result');" value="السويدي">
                                                    <input type="hidden" name="DropOffBranchId" value="7">
                                                    <span class="pickup-tb-loc-icon"></span>
                                                </div>
                                            </div>
                                            <div class="return-search-result search-result" style="display:none;">
                                                <div class="search-result-container" data-inputtype="0">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-5 col-sm-12 col-xs-12 no-padding t-datepicker">
                                        <div class="col-md-6 col-sm-6 col-xs-6 no-padding-left">
                                            <div class="text-uppercase major-label">

                                                وقت الإستلام
                                            </div>

                                            <div class="margin-bottom-less">
                                                <div class="booking-widget-label" id="label_from_date">

                                                    <div id="pickup_date" type="text" class="t-check-in pickup-d booking-entry" name="start" autocomplete="off" readonly="readonly"><div class="t-dates t-date-check-in">➜<label class="t-date-info-title"></label><span class="t-day-check-in"> 02</span><span class="t-month-check-in"> Feb </span><span class="t-year-check-in"> 2021</span></div><input type="hidden" class="t-input-check-in" value="02-02-2021" name="t-start"></div>
                                                    <input type="hidden" name="PickupDate" value="02/02/2021">
                                                    <input id="pickup_time" type="text" class="pickup-t booking-entry timepicker" autocomplete="off" readonly="readonly" onclick="opentTimeList('.pickup-t')" value="04:30 pm">
                                                    <span class="pickup-tb-cal-icon"></span>
                                                </div>
                                                <div class="time-list time-list-content pickup-time-list " style="display: none;">
                                                    <ul id="sx-js-res-ret-time-list" class="ddlist-ul" style="height: 100%; overflow: auto;">

                                                    </ul>
                                                    <div id="time-info" class="branch-time-info">

                                                        <div class="branch-name h5"></div>

                                                        <table class="branch-info-details">
                                                            <tbody>
                                                            <tr class="working-hours"><td colspan="2"></td></tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <span class="sx-res-info-wrapper-arrow">&nbsp;</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 no-padding-left">
                                            <div class="text-uppercase major-label">

                                                وقت التسليم
                                            </div>

                                            <div class="margin-bottom-less">

                                                <div class="booking-widget-label" id="label_to_date">
                                                    <div id="return_date" type="text" class="t-check-out return-d booking-entry" name="end" autocomplete="off" readonly="readonly"><div class="t-dates t-date-check-out">➜<label class="t-date-info-title"></label><span class="t-day-check-out"> 04</span><span class="t-month-check-out"> Feb </span><span class="t-year-check-out"> 2021</span></div><input type="hidden" class="t-input-check-out" value="02-04-2021" name="t-end"></div>
                                                    <input type="hidden" name="DropOffDate" value="02/04/2021">
                                                    <input id="return_time" type="text" class="return-t booking-entry" autocomplete="off" readonly="readonly" onclick="opentTimeList('.return-t')" value="04:30 pm">
                                                    <span class="pickup-tb-cal-icon"></span>
                                                </div>
                                                <div class="time-list time-list-content return-time-list " style="display: none;">
                                                    <ul id="sx-js-res-ret-time-list" class="ddlist-ul" style="height: 100%; overflow: auto;">
                                                        <li id="sx-js-res-ret-time-item-0000" class="">12:00 am</li>
                                                        <li id="sx-js-res-ret-time-item-0030" class="">12:30 am</li>
                                                        <li id="sx-js-res-ret-time-item-0100" class="">01:00 am</li>
                                                        <li id="sx-js-res-ret-time-item-0130" class="">01:30 am</li>
                                                        <li id="sx-js-res-ret-time-item-0200" class="">02:00 am</li>
                                                        <li id="sx-js-res-ret-time-item-0230" class="">02:30 am</li>
                                                        <li id="sx-js-res-ret-time-item-0300" class="">03:00 am</li>
                                                        <li id="sx-js-res-ret-time-item-0330">03:30 am</li>
                                                        <li id="sx-js-res-ret-time-item-0400">04:00 am</li>
                                                        <li id="sx-js-res-ret-time-item-0430">04:30 am</li>
                                                        <li id="sx-js-res-ret-time-item-0500">05:00 am</li>
                                                        <li id="sx-js-res-ret-time-item-0530">05:30 am</li>
                                                        <li id="sx-js-res-ret-time-item-0600">06:00 am</li>
                                                        <li id="sx-js-res-ret-time-item-0630">06:30 am</li>
                                                        <li id="sx-js-res-ret-time-item-0700">07:00 am</li>
                                                        <li id="sx-js-res-ret-time-item-0730">07:30 am</li>
                                                        <li id="sx-js-res-ret-time-item-0800">08:00 am</li>
                                                        <li id="sx-js-res-ret-time-item-0830">08:30 am</li>
                                                        <li id="sx-js-res-ret-time-item-0900">09:00 am</li>
                                                        <li id="sx-js-res-ret-time-item-0930">09:30 am</li>
                                                        <li id="sx-js-res-ret-time-item-1000">10:00 am</li>
                                                        <li id="sx-js-res-ret-time-item-1030">10:30 am</li>
                                                        <li id="sx-js-res-ret-time-item-1100">11:00 am</li>
                                                        <li id="sx-js-res-ret-time-item-1130">11:30 am</li>
                                                        <li id="sx-js-res-ret-time-item-1200">12:00 pm</li>
                                                        <li id="sx-js-res-ret-time-item-1230">12:30 pm</li>
                                                        <li id="sx-js-res-ret-time-item-1300">01:00 pm</li>
                                                        <li id="sx-js-res-ret-time-item-1330">01:30 pm</li>
                                                        <li id="sx-js-res-ret-time-item-1400">02:00 pm</li>
                                                        <li id="sx-js-res-ret-time-item-1430">02:30 pm</li>
                                                        <li id="sx-js-res-ret-time-item-1500">03:00 pm</li>
                                                        <li id="sx-js-res-ret-time-item-1530">03:30 pm</li>
                                                        <li id="sx-js-res-ret-time-item-1600">04:00 pm</li>
                                                        <li id="sx-js-res-ret-time-item-1630" class="time-item-selected">04:30 pm</li>
                                                        <li id="sx-js-res-ret-time-item-1700">05:00 pm</li>
                                                        <li id="sx-js-res-ret-time-item-1730">05:30 pm</li>
                                                        <li id="sx-js-res-ret-time-item-1800">06:00 pm</li>
                                                        <li id="sx-js-res-ret-time-item-1830">06:30 pm</li>
                                                        <li id="sx-js-res-ret-time-item-1900">07:00 pm</li>
                                                        <li id="sx-js-res-ret-time-item-1930">07:30 pm</li>
                                                        <li id="sx-js-res-ret-time-item-2000">08:00 pm</li>
                                                        <li id="sx-js-res-ret-time-item-2030">08:30 pm</li>
                                                        <li id="sx-js-res-ret-time-item-2100">09:00 pm</li>
                                                        <li id="sx-js-res-ret-time-item-2130">09:30 pm</li>
                                                        <li id="sx-js-res-ret-time-item-2200">10:00 pm</li>
                                                        <li id="sx-js-res-ret-time-item-2230">10:30 pm</li>
                                                        <li id="sx-js-res-ret-time-item-2300">11:00 pm</li>
                                                        <li id="sx-js-res-ret-time-item-2330">11:30 pm</li>
                                                    </ul>
                                                    <div id="time-info" class="branch-time-info">

                                                        <div class="branch-name h5"></div>

                                                        <table class="branch-info-details">
                                                            <tbody>
                                                            <tr class="working-hours"><td colspan="2"></td></tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <span class="sx-res-info-wrapper-arrow">&nbsp;</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12 col-xs-12 no-padding-left">

                                        <div class="hidden-div text-uppercase major-label">
                                            Hidden
                                        </div>
                                        <div class="booking-form-button-book">
                                            <input type="submit" name="btn_search" id="btn_search" class="text-uppercase" value="ابحث في الإسطول">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <link href="{{asset('front/Content/bootstrap-datepicker-master/dist/css/bootstrap-datepicker3.css')}}" rel="stylesheet">
                    <script src="{{asset('front/Content/bootstrap-datepicker-master/dist/js/bootstrap-datepicker.js')}}"></script>
                    <script src="{{asset('front/Content/bootstrap-datepicker-master/dist/locales/bootstrap-datepicker-en-CA.min.js')}}"></script>

                    <script type="text/javascript" src="/Scripts/moment.min.js?ver=3"></script>



                    <link href="{{asset('front/Content/theme/css/t-datepicker.min.css')}}" rel="stylesheet">

                    <script src="{{asset('front/Content/theme/js/t-datepicker.min.js?v=1.0')}}"></script>
                    <link href="{{asset('front/Content/theme/css/themes/t-datepicker-orange.css')}}" rel="stylesheet">


                    <script type="text/javascript" src="//www.google.com.sa/maps/api/js?sensor=true&amp;language=ar&amp;key=AIzaSyAfb5RpU1Unotf7sLOcAEkdhpO891Dqsb4"></script>
                    <div class="booking-sidebar float-normal">
                        <div class="row booking-filter" style="display: none;">

                            <div class="booking-filter-price">
                                <div class="title">السعر</div>
                                <div class="slider-container noselect">
                                    <div class="slider slider-horizontal slider-rtl slider-disabled" id=""><div class="slider-track"><div class="slider-track-low" style="right: 0px; width: 0%;"></div><div class="slider-selection" style="right: 0%; width: 100%;"></div><div class="slider-track-high" style="left: 0px; width: 0%;"></div></div><div class="tooltip tooltip-main top" role="presentation" style="right: 50%; margin-right: 0px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">0 : 1000</div></div><div class="tooltip tooltip-min top" role="presentation" style="right: 0%; margin-right: 0px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">0</div></div><div class="tooltip tooltip-max top" role="presentation" style="right: 100%; margin-right: 0px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">1000</div></div><div class="slider-handle min-slider-handle round" role="slider" aria-valuemin="0" aria-valuemax="1000" aria-valuenow="0" style="right: 0%;"></div><div class="slider-handle max-slider-handle round" role="slider" aria-valuemin="0" aria-valuemax="1000" aria-valuenow="1000" style="right: 100%;"></div></div><input id="priceSlider" type="text" class="span2" data-value="0,1000" value="0,1000" style="display: none;">
                                </div>

                                <b class="float-normal min-price-value"></b><b class="float-reverse max-price-value"></b>
                            </div>
                            <div class="booking-filter-car-type" data-action="/ar/Booking/GetCarCategories">    <div class="title">نوع السيارة</div>
                                <div class="orange-checkbox-container">
                                    <div class="orange-checkbox circle">
                                        <input type="checkbox" value="1" id="1" name="1" onchange="OracleCategorySelected(this); FilterBookingCars();">
                                        <label class="circle" for="1"></label>
                                    </div>
                                    <label class="orange-checkbox-value" for="1">
                                        اقتصادية
                                    </label>
                                </div>
                                <div class="orange-checkbox-container">
                                    <div class="orange-checkbox circle">
                                        <input type="checkbox" value="27" id="27" name="27" onchange="OracleCategorySelected(this); FilterBookingCars();">
                                        <label class="circle" for="27"></label>
                                    </div>
                                    <label class="orange-checkbox-value" for="27">
                                        كومباكت
                                    </label>
                                </div>
                                <div class="orange-checkbox-container">
                                    <div class="orange-checkbox circle">
                                        <input type="checkbox" value="2" id="2" name="2" onchange="OracleCategorySelected(this); FilterBookingCars();">
                                        <label class="circle" for="2"></label>
                                    </div>
                                    <label class="orange-checkbox-value" for="2">
                                        سيدان صغيرة
                                    </label>
                                </div>
                                <div class="orange-checkbox-container">
                                    <div class="orange-checkbox circle">
                                        <input type="checkbox" value="3" id="3" name="3" onchange="OracleCategorySelected(this); FilterBookingCars();">
                                        <label class="circle" for="3"></label>
                                    </div>
                                    <label class="orange-checkbox-value" for="3">
                                        سيدان متوسطة
                                    </label>
                                </div>
                                <div class="orange-checkbox-container">
                                    <div class="orange-checkbox circle">
                                        <input type="checkbox" value="29" id="29" name="29" onchange="OracleCategorySelected(this); FilterBookingCars();">
                                        <label class="circle" for="29"></label>
                                    </div>
                                    <label class="orange-checkbox-value" for="29">
                                        عائلية اقتصادية
                                    </label>
                                </div>
                            </div>
                        </div>




                    </div>
                    <style>
                        .head{
                            /* background: white; */
                            width: 50%;
                            margin-top: 30px;
                            margin: 10px auto;
                            /* position: relative; */
                            margin-bottom: 10px;
                            text-align: center;

                        }
                        .bnb{
                            position: absolute;
                            background: rgb(255, 255, 255 , 80%);
                            width: 50%;

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

                        .pro-bar li:nth-child(4):after{
                            content: "";
                            position: absolute;
                            width: 100%;
                            height: 3px;
                            background-color: rgb(34, 165, 53);
                            top: 25px;
                            right: -50%;
                            z-index: -1;
                        }
                        .pro-bar li:nth-child(4)::before{
                            background-color: rgb(26, 175, 49);
                            color: white;
                            bo

                        }

                        .pro-bar li:first-child::after{
                            content: none;

                        }
                        .pro-bar .active::after{
                            content: none;
                            border: none;

                        }
                    </style>
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

                    <div class="booking-content float-normal">

                        <img height="1" width="1" src="https://tags.bluekai.com/site/68735?limit=0&amp;phint=Aid%3D80424&amp;phint=Etype%3DCART&amp;phint=Action%3DADD&amp;phint=Pid=1478">

                        <div class="booking-conditions">
                            <div class="car-for-booking">
                                <table>
                                    <tbody><tr>
                                        <td colspan="3" class="booking-car-image">
                                            <div class="dd">
                                                <p class="type">{{$booking->car->name}}</p>
                                                <p class="like">أو  ماشابهه</p>
                                            </div>
                                            <p class='animateLeft'><img src="{{asset('front/cars/CarsImg')}}/{{$booking->car->img}}" alt="لا توجد صوره لهذه السيارة" class="CarImg showImg" width='0' height='0' class='showImg'></p>
                                            <a class='showCar'>اظهار السياره</a>
                                        </td>


                                    </tr>

                                    <tr>
                                        <td class="booking-car-details" colspan="2">
                                            <a onclick="GetBookingContentView('/ar/Booking/GetSearchResultPage?getSpecificCar=True', true)" class="float-reverse widyh edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>

                                            <div class="booking-pickup-info info-fll float-normal">
                                                <p class='branches'> فرع الاستلام</p>

                                                <div>
                                                    <div id="pickupDateTime">{{$booking->receiving_branch}}</div>
                                                </div>
                                                <div>
                                                    <p class='dateStyle'>وقت الاستلام</p>
                                                    <div id="pickupLocation">{{$booking->receiving_date}}</div>
                                                </div>
                                            </div>

                                            <div class="booking-dropoff-info info-fll float-normal">
                                                <p class='branches' style='font-size: 1.5em'>فرع التسليم</p>

                                                <div>
                                                    <div id="dropoffDateTime">{{$booking->delivery_branch}}</div>
                                                </div>
                                                <div>
                                                    <p class='dateStyle'>وقت التسليم</p>

                                                    <div id="dropoffLocation">{{$booking->delivery_date}}</div>
                                                </div>
                                            </div>
                                            <div class="float-normal additions-info">
                                                <a onclick="GetBookingContentView('/ar/Booking/OptionsStep', false, {'carRentalRateId': '1478','rateId':'1174'}, FillBookingDateAndLocationInfo);" class="float-reverse edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                <div>اضافات اخرى</div>
                                                <div id="additions-list">
                                                    نظام الملاحة
                                                </div>
                                            </div>
                                            <div class="float-normal price-info" style="background: #fff;">

                                                <table class="table center table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center">
                                                            البند
                                                        </th>
                                                        <th class="text-center">
                                                            الاسم
                                                        </th>
                                                        <th class="text-center">
                                                            عدد الايام
                                                        </th>
                                                        <th class="text-center">
                                                            سعر اليوم
                                                        </th>
                                                        <th class="text-center">
                                                            الاجمالي
                                                        </th>
                                                        <th class="text-center">
                                                            الخصم
                                                        </th>
                                                        <th class="text-center">
                                                            خصم اضافي
                                                        </th>
                                                        <th class="text-center">
                                                            الصافي
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="table-rows">
                                                            1
                                                        </td>
                                                        <td class="table-rows">
                                                            {{$booking->car->name}}
                                                        </td>
                                                        <td class="table-rows">
                                                            1
                                                        </td>
                                                        <td class="table-rows">
                                                            <i class="icofont icofont-cur-riyal"></i>{{$booking->car->price2}}
                                                        </td>

                                                        <td class="table-rows">
                                                            <i class="icofont icofont-cur-riyal"></i>{{$booking->car->price2}}
                                                        </td>
                                                            @php $discount = 5/100 *$booking->car->price2 ; @endphp
                                                        <td class="table-rows">
                                                            <i class="icofont icofont-cur-riyal"></i>{{$discount}}
                                                        </td>
                                                        <td class="table-rows">
                                                            <i class="icofont icofont-cur-riyal"></i>0
                                                        </td>
                                                        @php $priceAfterDiscont =$booking->car->price2 -  $discount; @endphp
                                                        <td class="table-rows">
                                                            <i class="icofont icofont-cur-riyal"></i>
                                                            {{$priceAfterDiscont}}
                                                        </td>
                                                    </tr>
                                                    {{-- insurance --}}
                                                    @if($booking->insurance = 1)
                                                        <tr>
                                                            <td class='table-rows'>2</td>
                                                            <td class="table-rows">تأمين مميز</td>
                                                            <td class="table-rows">1</td>
                                                            <td class="table-rows"><i class="icofont icofont-cur-riyal"></i>{{$booking->car->insurance_price}}</td>
                                                            <td class="table-rows"><i class="icofont icofont-cur-riyal"></i>{{$booking->car->insurance_price}}</td>
                                                            <td class="table-rows"><i class="icofont icofont-cur-riyal"></i>0</td>
                                                            <td class="table-rows"><i class="icofont icofont-cur-riyal"></i>0</td>
                                                            <td class="table-rows"><i class="icofont icofont-cur-riyal"></i>{{$booking->car->insurance_price}}</td>
                                                        </tr>
                                                    @endif
                                        {{-- abudiyab_shield --}}
                                           @if($booking->abudiyab_shield = 1)
                                            <tr>
                                                <td class='table-rows'>3</td>
                                                <td class="table-rows">درع ابو دياب</td>
                                                <td class="table-rows">1</td>
                                                <td class="table-rows"><i class="icofont icofont-cur-riyal"></i>{{$booking->car->shield_price}}</td>
                                                <td class="table-rows"><i class="icofont icofont-cur-riyal"></i>{{$booking->car->shield_price}}</td>
                                                <td class="table-rows"><i class="icofont icofont-cur-riyal"></i>0</td>
                                                <td class="table-rows"><i class="icofont icofont-cur-riyal"></i>0</td>
                                                <td class="table-rows"><i class="icofont icofont-cur-riyal"></i>{{$booking->car->shield_price}}</td>
                                            </tr>
                                          @endif

                                        {{-- open_kilometer --}}
                                          @if($booking->open_kilometer = 1)
                                            <tr>
                                                <td class='table-rows'>4</td>
                                                <td class="table-rows">كيلو متر مفتوح</td>
                                                <td class="table-rows">1</td>
                                                <td class="table-rows"><i class="icofont icofont-cur-riyal"></i>{{$booking->car->open_kilometers_price}}</td>
                                                <td class="table-rows"><i class="icofont icofont-cur-riyal"></i>{{$booking->car->open_kilometers_price}}</td>
                                                <td class="table-rows"><i class="icofont icofont-cur-riyal"></i>0</td>
                                                <td class="table-rows"><i class="icofont icofont-cur-riyal"></i>0</td>
                                                <td class="table-rows"><i class="icofont icofont-cur-riyal"></i>{{$booking->car->open_kilometers_price}}</td>
                                            </tr>
                                          @endif
                                        {{-- navigation_system --}}
                                          @if($booking->navigation_system = 1)
                                            <tr>
                                                <td class='table-rows'>5</td>
                                                <td class="table-rows">نظام الملاحة</td>
                                                <td class="table-rows">1</td>
                                                <td class="table-rows"><i class="icofont icofont-cur-riyal"></i>{{$booking->car->navigation_price}}</td>
                                                <td class="table-rows"><i class="icofont icofont-cur-riyal"></i>{{$booking->car->navigation_price}}</td>
                                                <td class="table-rows"><i class="icofont icofont-cur-riyal"></i>0</td>
                                                <td class="table-rows"><i class="icofont icofont-cur-riyal"></i>0</td>
                                                <td class="table-rows"><i class="icofont icofont-cur-riyal"></i>{{$booking->car->navigation_price}}</td>
                                            </tr>
                                          @endif
                                        {{-- home_delivery --}}
                                          @if($booking->home_delivery = 1)
                                            <tr>
                                                <td class='table-rows'>6</td>
                                                <td class="table-rows">التوصيل للمنزل</td>
                                                <td class="table-rows">1</td>
                                                <td class="table-rows"><i class="icofont icofont-cur-riyal"></i>{{$booking->car->home_delivery_price}}</td>
                                                <td class="table-rows"><i class="icofont icofont-cur-riyal"></i>{{$booking->car->home_delivery_price}}</td>
                                                <td class="table-rows"><i class="icofont icofont-cur-riyal"></i>0</td>
                                                <td class="table-rows"><i class="icofont icofont-cur-riyal"></i>0</td>
                                                <td class="table-rows"><i class="icofont icofont-cur-riyal"></i>{{$booking->car->home_delivery_price}}</td>
                                            </tr>
                                          @endif
                                        {{-- intercity_shipping --}}
                                          @if($booking->intercity_shipping = 1)
                                            <tr>
                                                <td class='table-rows'>7</td>
                                                <td class="table-rows"> الشحن بين المدن</td>
                                                <td class="table-rows">1</td>
                                                <td class="table-rows"><i class="icofont icofont-cur-riyal"></i>{{$booking->car->intercity_price}}</td>
                                                <td class="table-rows"><i class="icofont icofont-cur-riyal"></i>{{$booking->car->intercity_price}}</td>
                                                <td class="table-rows"><i class="icofont icofont-cur-riyal"></i>0</td>
                                                <td class="table-rows"><i class="icofont icofont-cur-riyal"></i>0</td>
                                                <td class="table-rows"><i class="icofont icofont-cur-riyal"></i>{{$booking->car->intercity_price}}</td>
                                            </tr>
                                          @endif
                                                    {{-- baby_seat --}}
                                                    @if($booking->baby_seat = 1)
                                                        <tr>
                                                            <td class='table-rows'>8</td>
                                                            <td class="table-rows">كرسي اطفال</td>
                                                            <td class="table-rows">1</td>
                                                            <td class="table-rows"><i class="icofont icofont-cur-riyal"></i>{{$booking->car->baby_seat_price}}</td>
                                                            <td class="table-rows"><i class="icofont icofont-cur-riyal"></i>{{$booking->car->baby_seat_price}}</td>
                                                            <td class="table-rows"><i class="icofont icofont-cur-riyal"></i>0</td>
                                                            <td class="table-rows"><i class="icofont icofont-cur-riyal"></i>0</td>
                                                            <td class="table-rows"><i class="icofont icofont-cur-riyal"></i>{{$booking->car->baby_seat_price}}</td>
                                                        </tr>
                                                    @endif
                                        @php
                                            if($booking->baby_seat = 1){
                                                $babySeatPrice = $booking->car->baby_seat_price;
                                              }
                                              if($booking->abudiyab_shield = 1){
                                                $shieldPrice = $booking->car->shield_price;
                                              }
                                              if($booking->insurance = 1){
                                                $insurancePrice = $booking->car->insurance_price;
                                              }
                                              if($booking->open_kilometer = 1){
                                                $kilometersPrice = $booking->car->open_kilometers_price;
                                              }
                                              if($booking->navigation_system = 1){
                                                $navigationPrice = $booking->car->navigation_price;
                                              }
                                              if($booking->home_delivery = 1){
                                                $deliveryPrice = $booking->car->home_delivery_price;
                                              }
                                              if($booking->intercity_shipping = 1){
                                                $intercityPrice = $booking->car->intercity_price;
                                              }


                                              $totalAmount = $priceAfterDiscont + $babySeatPrice + $shieldPrice + $insurancePrice + $kilometersPrice + $navigationPrice + $deliveryPrice + $intercityPrice;
                                        @endphp

                                                    </tbody>
                                                </table>

                    <span class="booking-car-price-now float-normal" style="border-radius: 100000px;"><i class="icofont icofont-cur-riyal"></i>{{$totalAmount}}</span>
                    <span class="booking-car-price-duration float-reverse ">سعر التاجير النهائي</span>

                    <div class="row" style="margin: 25px 0;">
                        <div class="col-md-12 booking-car-notes float-normal">* سعر التأجير خاضع للتدقيق النهائي</div>
                        <div class="col-md-12 booking-car-notes float-normal">* السعر لا يشمل ضريبة القيمة المضافة</div>
                    </div>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</div>
</div>


<div class="row booking-confirm">


<button class="float-normal back-button">
    <a href="{{route('secondBookingStep' , $booking)}}">عودة </a>
</button>
<label class="orange-checkbox-value">
    يرجى قراءة <a id="Booking_termsandConditions" data-toggle="modal" class="terms-text-a" href="http://localhost/version1.0.0/abudiyab/cars/H/conditions.php">
        <input type="checkbox" name="" id="termsCheck">

        اﻟﺸﺮوط واﻷﺣﻜﺎم

    </a> والموافقة عليها قبل الاستمرار

</label>
<div class="float-reverse buy">
  <form method="post" action="{{route('thirdStepStore', $booking)}}">
      @csrf
      <input type="hidden" name="totalAmount" value="{{$totalAmount}}"/>
    <button class="float-normal back-button disabled buy next-step" >
تأكيد و دفع
    </button>
  </form>
</div>
</div>

<div class="ModalContent" id="TermsConditions">
<div class="modal-header">
    <img class="margin-right" src="{{asset('front/Content/Images/logo_high.png')}}" alt="Al Wefaq Rent a Car">
    <h3 class="text-center">
        شروط وأحكام عقد الإيجار
    </h3>
</div>

<div class="modal-footer terms-condition">
    <button class="float-normal cancelConditionBtn" data-dismiss="modal">
        إلغاء
    </button>
    <div class="float-reverse">
        <button disabled="" type="submit" class="confirm-button" data-dismiss="modal" onclick="AgreeBookingConditions()"> تأكيد</button>
    </div>
</div>
</div>



<!-- Begin BlueKai Tag -->

<!-- End BlueKai Tag --></div>
</div>

<link href="{{asset('front/Content/bootstrap-slider.min.css')}}" rel="stylesheet">
<script src="../../../Scripts/bootstrap-slider.min.js"></script>
<script src="../../../Scripts/moment-with-locales.min.js?ver=3"></script>
<script type="text/javascript" src="/Scripts/moment.min.js?ver=3"></script>
<script type="text/javascript" src="/Scripts/bootstrap-datetimepicker.min.js?ver=4"></script>

<script src="../../../Scripts/Website/Booking.min.js?ver=34"></script>




<!-- Modal -->
<div class="modal fade" data-backdrop="static" data-keyboard="false" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-content">
</div>
</div>
<!-- Modal End -->
<!-- Careers Modal -->
<div class="modal fade" data-backdrop="static" data-keyboard="false" id="myModal_Careers" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
</div>
<!-- Modal End -->
<!-- Announcment Modal -->
<div class="modal fade" data-backdrop="static" data-keyboard="false" id="AnnouncmentModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header no-padding-bottom">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        ×
    </button>
    <p class="h3 modal-title">hi</p>
</div>
<div class="announcment-container">fdfdfdfdgfdgfdgfgdfdgfdg</div>
</div>
</div>
</div>
<!-- Modal End -->
<!-- General Modal -->
<div class="modal fade" data-backdrop="static" data-keyboard="false" id="GeneralModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
</div>
</div>
</div>
<div class="modal fade" data-backdrop="static" data-keyboard="false" id="GeneralModalTransperant" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
</div>
</div>
</div>

<div class="modal fade" data-backdrop="static" data-keyboard="false" id="WarningModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-header">
    <img class="margin-right" src="{{asset('front/Content/Images/logo_high.png')}}" alt="Al Wefaq Rent a Car" width="150">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body mt-3 mb-3">
</div>
<div class="modal-footer p-2">
    <button type="button" class="m-3 submit-btn btn fg-wefaq-brown bg-wefaq-yellow btn-ok float-normal" data-dismiss="modal">تعديل</button>
    <button id="warning-model-skip-btn" type="button" class="m-3 submit-btn btn fg-wefaq-yellow bg-wefaq-brown float-reverse">تجاهل واستمرار</button>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="NotificationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modalPopup-dialog">
<div class="modal-content">
</div>
</div>
</div>

<div class="modal fade" id="HidableModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-content">
<div class="modal-header">
    <img class="margin-right" src="{{asset('front/Content/Images/logo_high.png')}}" alt="Al Wefaq Rent a Car">
    <h3 class="text-center">
        شروط وأحكام عقد الإيجار
    </h3>
</div>
<div class="modal-footer terms-condition">
    <button class="float-normal cancelConditionBtn" data-dismiss="modal">
        إلغاء
    </button>
    <div class="float-reverse">
        <button type="submit" class="confirm-button" data-dismiss="modal" onclick="AgreeBookingConditions()" disabled="disabled"> تأكيد</button>
    </div>
</div>
</div>
</div>
</div>
</div>
<!-- Modal End -->
</div>
</div>




@endsection
