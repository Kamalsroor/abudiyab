@extends('web.layouts.appFleet')
@section('content')

<style type="text/css">
    .pagination>li {
        width: 8%;
    }
    .pagination>li>a, .pagination>li>span {
        width: 100%;
        text-align: center;
        font-size: 20px;
    }
    .page-item.active{
        margin: 10px 0 0;
    }
    .page-item.active .page-link{
        height: 100%;
        padding-top: 16px;
    }
    .orange-checkbox input[type=checkbox]:checked+label {
    background: #A91111 !important;
    border: 1px solid #A91111 !important;
    }
    .orange-checkbox{
        width: 40px;
    }
    .orange-checkbox label{
        width: 100%;
    }
    .slider.slider-horizontal .slider-track{
        height: 2px !important;
    }
    .round{
        margin-right: -15px !important;
        background-image: -webkit-linear-gradient(top, #ff0000 0, #002366 100%) !important;
    }
    .slider.slider-horizontal .slider-tick, .slider.slider-horizontal .slider-handle{
        top: 15px;
    }
    footer * {
        direction: ltr !important;
    }
</style>
    <div class="ms-test">

        <div class="test-title">
            <h1>الاسطول</h1>
            <p>تقدم لكم شركة أبو ذياب افخم واحدث الماركات العالميه بكافه فىْاتها من السيارات الصغيرة والمتوسطه والكبيرة </p>
        </div>

    </div>

    <div class="container no-b">

        <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
            {{--<h1 class="">تاجير سيارات</h1>--}}
                <div class="booking-main-container row">
                    <div class="booking-search-wrapper">
                        <div class="booking-search-container">
                            <div class="booking-search-header">

                                <button type="submit" disabled class="saved-for-later-button" onclick="GetSavedForLaterCars()"> المفضله <i class="fa fa-heart-o" aria-hidden="true"></i></button>

                                <div>
                                    <select class="js-data-example-ajax fr3-selec col-sm-12" id="Branches" onclick="Branches();">
                                        <option value="1">
                                            المنطقه الوسطي
                                        </option>
                                        <option value="2" >
                                            المنطقه الغربيه
                                        </option>
                                        <option value="3" >
                                            المنطقه الشرقيه
                                        </option>
                                        <option value="4" >
                                            المنقطه الجنوبيه
                                        </option>
                                    </select>
                                </div>
                                <div class="active" style="border-color: #002366;">
                                    <span href="#" data-event="tab_car">ابحث الآن</span>

                                </div>

                            </div>

                            <form id="fleet-reservation-form" role="form" data-notalwefaqbranches="" data-notalwefaqcities="" data-action="/ar/Booking/Search" data-gettimes="/ar/Booking/GetBranchOpeningTime" data-minHoursToBook="6">

                                <input name="__RequestVerificationToken" type="hidden" value="-T8iYL1VjGl70moAVs67PlIYZj1IRt8s0f5ntuUJ0edCwmLhQdVejEKQvYXlm7CVzABY0xSgBAqJv-0GjWJ7k9t5HUj8XyA-i0fW0Vb3sj41" />
<style type="text/css">
    footer * {
        direction: ltr !important;
    }
    .palce-select {
    border-radius: 5px;
    margin-top: 0;
    height: 54px;
    width: 49.5%!important;
    margin-right: 0;
    }
    .date-chose input {
    /* text-align: right; */
    direction: rtl !important;
    margin: 0px 0;
    padding: 0;
    height: 51px;
    padding: 25.5px;
    background: #f3f3f3;
    color: gray;
    border: 2px solid #e0e0e0;
    cursor: pointer;
    width: 100%;
    height: 53px;
    }
    .fr3-selec>option {
        color: #000008;
    }
    .booking-search-header div{
        border-bottom: none;
    }
    .saved-for-later-button {
    background: #a91111 !important;
    font-size: 21px;
    width: 120px;
    float: left;
    margin-right: 700px;
    }
    iframe.foo_iframe {
    margin-top: 44px;
    margin-right: 26px;
    border-radius: 38px;
}
.foo_center {
    width: 85%;
    margin: 66px 0 0 -90px !important;
}
.big-title h1, a {
    margin-top: -61px;
}
.foo_apps button {
    background: radial-gradient(#d63233, #3f0808) !important;
    width: 200px;
    height: 60px;
    color: white;
    font-size: 20px;
    cursor: pointer;
    margin: 0 0px 0 163px;
}
</style>
                                <div class="row">
                                    <div class="col-lg-6 place-con col-md-3">
                                        <h2 style='float:right;font-weight: 500 !important;font-size: 20px; margin-top: 11px;margin-right: 57px;'>مكان الاستلام و التسليم </h2>
                                        <div class='clear'></div>
                                        <div class="palce-select">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <select style='font-size:2em;' class="place" id="receivingBranche" name ="receiving_branch" onchange="copyTextValue(this);">
                                                <option>فرع الاستلام</option>
                                                @foreach($branches as $branche)
                                                    <option value="{{$branche->name_ar}}">{{$branche->name_ar}} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="palce-select plac2">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <select style='font-size:2em;' class="place" id="deliveryBranche" name="delivery_branch" onchange="copyTextValue(this);" >
                                                <option value="0">فرع التسليم</option>
                                                @foreach($branches as $branche)
                                                    <option value="{{$branche->name_ar}}">{{$branche->name_ar}} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <?php
                                    date_default_timezone_set('UTC');

                                    $D1 = date("Y-m");

                                    $D2 = date("H") + 3;

                                    $D3 = date("i");

                                    $D4 = date("d");

                                    $D5 = $D4 + 1;

                                    if ($D5 > 9) {
                                        $DD = $D1.'-'.$D5.'T'.$D2.':'.$D3;
                                    }
                                    else{
                                        $DD = $D1.'-0'.$D5.'T'.$D2.':'.$D3;
                                    }


                                    ?>

                                    <div class="col-lg-6 col-md-3 date-chose">
                                        <div class="time" >
                                            <p style='float:right;font-weight: 500 !important;font-size: 20px;'>تاريخ الاستلام </p>
                                            <div class='clear'></div>

                                            <input style='font-size:2em;'class="form-control" type="datetime-local" name="receiving_date" id="receivingDate" value="<?php echo $DD;?>" onchange="copyTextValue(this);">
                                        </div>

                                        <div class="time" >
                                            <p style='float:right;font-weight: 500 !important;font-size: 20px;'>تاريخ التسليم</p>
                                            <div class='clear'></div>

                                            <input style='font-size:2em;' class="form-control" type="datetime-local" name="delivery_date" value="<?php echo $DD;?>" id="deliveryDate" onchange="copyTextValue(this);">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-3 date-chose">
                                        <button style="font-size: 20px;height: 43px;width: 50%;margin: 25px -170px;">ابحث في الاسطول</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                    <link href="{{asset('front/Content/bootstrap-datepicker-master/dist/css/bootstrap-datepicker3.css')}}" rel="stylesheet" />
                    <script src="{{asset('front/Content/bootstrap-datepicker-master/dist/js/bootstrap-datepicker.js')}}"></script>
                    <script src="{{asset('front/Content/bootstrap-datepicker-master/dist/locales/bootstrap-datepicker-en-CA.min.js')}}"></script>
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
                    <script type="text/javascript" src="../../Scripts/moment.min592e.js?ver=3"></script>



                    <link href="{{asset('front/Content/theme/css/t-datepicker.min.css')}}" rel="stylesheet" />

                    <script src="{{asset('front/Content/theme/js/t-datepicker.minc619.js?v=1.0')}}"></script>
                    <link href="{{asset('front/Content/theme/css/themes/t-datepicker-orange.css')}}" rel="stylesheet" />
                    <script>

                        //    var geocoder;
                        var map;
                        var markers = [];
                        var infowindow;
                        var defaultLatLng;
                        var isInitialized = 0;
                        var mapDiv;
                        $(document).ready(function () {
                            $("input[name='DropOffBranchId']").first().data("countryid", '0');

                        })
                        });

                        function init_map2() {

                            //     geocoder = new google.maps.Geocoder();
                            mapDiv = $('#branch-map');
                            defaultLatLng = new google.maps.LatLng('24.3826', '46.4622');
                            var myOptions = { zoom: 5, center: defaultLatLng, mapTypeId: google.maps.MapTypeId.ROADMAP };

                            map = new google.maps.Map(mapDiv.get(0), myOptions);

                        }

                        function ShowRetunContainer() {
                            $(".pickup-container").addClass("col-md-6");
                            $(".pickup-container").removeClass("col-md-12");
                            $(".return-container").css("display", "block");
                            $("#return-check-bx").css("display", "none");
                            $(".pickup-lbl").html("الاستلام");
                            $(".bookings-form-close-icon").css("display", "block");

                        }

                        function closeReturn() {
                            $("#return-check-bx input[type='checkbox']").prop("checked", true);
                            $(".pickup-container").addClass("col-md-12");
                            $(".pickup-container").removeClass("col-md-6");
                            $(".return-container").css("display", "none");
                            $("#return-check-bx").css("display", "block");
                            $(".pickup-lbl").html("الإستلام و التسليم");
                            $(".bookings-form-close-icon").css("display", "none");
                            $(".return-tb").val($(".pickup-tb").val());
                            $(".return-tb").data("workinghours", $(".pickup-tb").data("workinghours"));
                            $('.return-tb').data("lastval", $(".pickup-tb").val());
                            $("input[name='DropOffBranchId']").val($("input[name='PickupBranchId']").val());
                        }

                        var isSearchingInProgress = false;

                        function branch_textChanged(input, divElement) {
                            window.onmousewheel = document.onmousewheel = null;

                            var resultContainer = $(divElement).find(".search-result-container");

                            delay(function (value) {
                                if ($(input).val() == value) {
                                    var text = $(input).val();
                                    var data = {
                                        "textValue": text,
                                        "inputType": (divElement == ".pickup-search-result") ? 1 : 0
                                    };

                                    if (data.inputType == 0)
                                        data.countryCode = $("input[name='DropOffBranchId']").first().data("countryid");

                                    if (text.length >= 3) {
                                        $(divElement).show();

                                        if ($(input).data("lastval") != text) {

                                            if ($(input).data("lastval") != $(input).val() && $(input).val().length >= 3 && resultContainer.length == 1
                                                && resultContainer.find("#box-overlay").length == 0) {
                                                resultContainer.append(`<div id="box-overlay" style="position: absolute" class="loader">
                                                        <div class="loader-logo">
                                                         <div class="loading-wait">الرجاء الإنتظار...</div>
                                                        </div>
                                                      </div>`);
                                            };

                                            $(input).data("lastval", text);

                                            isSearchingInProgress = true;

                                            $.ajax({
                                                url: $(input).data("action"),
                                                method: 'post',
                                                data: data,
                                                success: function (result) {
                                                    if ($(input).val() == value) {
                                                        $(divElement).find(".search-result-container").html(result);

                                                        if (isInitialized == 0) {
                                                            isInitialized = 1;
                                                            init_map2();
                                                        } else {
                                                            $("#map_container").html(mapDiv);
                                                        }
                                                        resultContainer.find("#box-overlay").remove();
                                                    }
                                                    if ($(input).val().length < 3)
                                                        resultContainer.find("#box-overlay").remove();

                                                    isSearchingInProgress = false;
                                                },
                                                error: function (jqXHR, textStatus, errorThrown) {
                                                    console.log(errorThrown);
                                                    resultContainer.find("#box-overlay").remove();
                                                    isSearchingInProgress = false;
                                                }
                                            });
                                        }
                                    } else if (text == "") {
                                        $(input).data("lastval", text);
                                    }
                                }
                            },$(input).val() , 500);
                        }

                        function branch_textFocused(input, divElement) {
                            if (isSearchingInProgress == true)
                                return;

                            window.onmousewheel = document.onmousewheel = null;
                            $(".t-datepicker-day").remove();
                            $(".time-list").css("display", "none");

                            var text = $(input).val();
                            var data = {
                                "textValue": text,
                                "inputType": (divElement == ".pickup-search-result") ? 1 : 0
                            };

                            if (data.inputType == 0)
                                data.countryCode = $("input[name='DropOffBranchId']").first().data("countryid");

                            if (text.length >= 3) {
                                $(divElement).show();

                                if ($(divElement).find(".search-result-container ul li").length >= 1) {
                                    if (data.inputType == 1)
                                        $(".pickup-tb").val("");
                                    else
                                        $(".return-tb").val("");

                                    return;
                                }

                                $(divElement).find(".search-result-container")
                                    .append(`<div id="box-overlay" style="position: absolute" class="loader">
                            <div class="loader-logo">
                              <div class="loading-wait">الرجاء الإنتظار...</div>
                            </div>
                          </div>`);

                                if (data.inputType == 1)
                                    $(".return-search-result").hide();
                                else
                                    $(".pickup-search-result").hide();

                                $.ajax({
                                    url: $(input).data("action"),
                                    method: 'post',
                                    data: data,
                                    success: function(result) {

                                        $(divElement).find(".search-result-container").html(result);
                                        if (data.inputType == 1) {
                                            $(".pickup-tb").val("");
                                        } else {
                                            $(".return-tb").val("");
                                        }
                                        $("#map_container").html(mapDiv);

                                        $(divElement).find(".search-result-container").find("#box-overlay").remove();
                                    },
                                    error: function(jqXHR, textStatus, errorThrown) {
                                        console.log(errorThrown);

                                        $(divElement).find(".search-result-container").find("#box-overlay").remove();
                                    }
                                });
                            }
                        }

                        $("body").on("click", "#pickup_time", function () {
                            var hr = ['00', '01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23'];
                            var hr12 = ['12', '01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11'];
                            var mi = ['00', '30'];
                            var today = new Date();
                            var h = today.getHours();
                            var mins = today.getMinutes();
                            var selectedDate = $(".t-input-check-in").val();
                            var currentDate = moment().format("MM-DD-YYYY");
                            var isCurrentDate = currentDate == selectedDate;
                            var liChildLocation = 0;
                            $("#sx-js-res-ret-time-list").empty();

                            for (i = 0; i < hr.length; i++) {
                                if (hr[i] <= h && isCurrentDate) {
                                    $("#sx-js-res-ret-time-list").append('<li id="sx-js-res-ret-time-item-' + hr[i] + mi[0] + '" class="t-disabled-time">' + (i < 12 ? (hr12[i] + ':' + mi[0] + ' am') : (hr12[i - 12] + ':' + mi[0] + ' pm')) + '</li>');
                                    if (mi[1] > mins && hr[i] == h)
                                        $("#sx-js-res-ret-time-list").append('<li id="sx-js-res-ret-time-item-' + hr[i] + mi[1] + '" class="">' + (i < 12 ? (hr12[i] + ':' + mi[1] + ' am') : (hr12[i - 12] + ':' + mi[1] + ' pm')) + '</li>');
                                    else
                                        $("#sx-js-res-ret-time-list").append('<li id="sx-js-res-ret-time-item-' + hr[i] + mi[1] + '" class="t-disabled-time">' + (i < 12 ? (hr12[i] + ':' + mi[1] + ' am') : (hr12[i - 12] + ':' + mi[1] + ' pm')) + '</li>');

                                    liChildLocation = (i * 2)+1;
                                } else {
                                    $("#sx-js-res-ret-time-list").append('<li id="sx-js-res-ret-time-item-' + hr[i] + mi[0] + '" class="">' + (i < 12 ? (hr12[i] + ':' + mi[0] + ' am') : (hr12[i - 12] + ':' + mi[0] + ' pm')) + '</li>');
                                    $("#sx-js-res-ret-time-list").append('<li id="sx-js-res-ret-time-item-' + hr[i] + mi[1] + '" class="">' + (i < 12 ? (hr12[i] + ':' + mi[1] + ' am') : (hr12[i - 12] + ':' + mi[1] + ' pm')) + '</li>');
                                }
                            }
                            var top = $('#sx-js-res-ret-time-list li:nth-child(' + liChildLocation + ')').position().top;
                            if (top > 50) {
                                $('#sx-js-res-ret-time-list').animate({
                                    scrollTop: top
                                }, 'slow');
                            }
                        });


                        function opentTimeList(inputClass) {
                            window.onmousewheel = document.onmousewheel = null;
                            $(".search-result").html("");
                            $(".t-datepicker-day").remove();
                            if (inputClass == '.pickup-t') {
                                $(".return-time-list").css("display", "none");
                                $(".pickup-time-list").css("display", "block");
                                $(".pickup-time-list .branch-name").html($(".pickup-tb").val());
                                if ($(".pickup-tb").val() != "") {
                                    $(".pickup-time-list .working-hours").html($(".pickup-tb").data("workinghours"));
                                } else {
                                    $(".pickup-time-list .working-hours").html("");
                                }
                            } else {
                                $(".pickup-time-list").css("display", "none");
                                $(".return-time-list").css("display", "block");
                                $(".return-time-list .branch-name").html($(".return-tb").val());
                                if ($(".return-tb").val() != "") {
                                    $(".return-time-list .working-hours").html($(".return-tb").data("workinghours"));
                                } else {
                                    $(".return-time-list .working-hours").html("");
                                }
                            }
                        }

                        $("body").on("hover", ".pickup-time-list ul li", function () {
                            $(".pickup-time-list ul li").removeClass("time-item-selected");
                            $(this).addClass("time-item-selected");
                        }, function() {

                        });
                        $(".return-time-list ul li").hover(function() {
                            $(".return-time-list ul li").removeClass("time-item-selected");
                            $(this).addClass("time-item-selected");
                        }, function() {

                        });

                        $("body").on("click", ".pickup-time-list ul li", function () {
                            if ($(this).hasClass("t-disabled-time")) {
                                return false;
                            }

                            $(".pickup-t,.return-t").val($(this).html());

                            $(".time-list").css("display", "none");

                            //$(".time-list ul li.time-item-selected").removeClass("time-item-selected");
                            $(this).addClass("time-item-selected");
                        });

                        $(".return-time-list ul li").click(function() {
                            $(".return-t").val($(this).html());

                            $(".time-list").css("display", "none");

                            //$(".time-list ul li.time-item-selected").removeClass("time-item-selected");
                            $(this).addClass("time-item-selected");
                        });

                        $(document).mouseup(function (e) {
                            var container = $(".return-time-list,.pickup-time-list");

                            // if the target of the click isn't the container nor a descendant of the container
                            if (!container.is(e.target) && container.has(e.target).length === 0) {
                                container.css("display", "none");
                                window.onmousewheel = document.onmousewheel = wheel;
                            }
                        });

                        $(document).mouseup(function(e) {
                            var container = $(".pickup-container,.return-container");

                            // if the target of the click isn't the container nor a descendant of the container
                            if (!container.is(e.target) && container.has(e.target).length === 0) {
                                $(".search-result").hide();
                                $('.pickup-tb').val($('.pickup-tb').data("lastval"));
                                $('.return-tb').val($('.return-tb').data("lastval"));
                            }
                        });

                        var nonalwefaqBranches;
                        var nonalwefaqCitites;
                        var minHoursToBook;

                        $(function() {
                            $(".t-dates").contents().filter(function() { return this.nodeType === 3; }).remove();

                            $('.pickup-tb').data("lastval", $('.pickup-tb').val());
                            $('.return-tb').data("lastval", $('.return-tb').val());

                            if ($("input[name='PickupBranchId']").val() != $("input[name='DropOffBranchId']").val()) {
                                ShowRetunContainer();
                            }
                            minHoursToBook = $("#fleet-reservation-form").data("minhourstobook");
                            var end_time = moment();

                            var min = end_time.minutes();
                            if (min > 30)
                                min = min - 30;
                            var minsToAdd = 0;
                            if (min % 30 > 0)
                                minsToAdd = 30 - min;
                            var start_Date_initial = moment().add(minHoursToBook, 'h').add(minsToAdd, 'm').format('MM/DD/YYYY');
                            var start_Date = $('input[name="PickupDate"]').val() != "" ? $('input[name="PickupDate"]').val() : moment().add(minHoursToBook, 'h').add(minsToAdd, 'm').format('MM/DD/YYYY');
                            var end_Date = $('input[name="DropOffDate"]').val() != "" ? $('input[name="DropOffDate"]').val() : moment(start_Date, 'MM/DD/YYYY').add(1, 'd').add(minsToAdd, 'm').format('MM/DD/YYYY');

                            var pTime = $('#pickup_time').val() != "" ? $('#pickup_time').val() : moment().locale('en').add(minHoursToBook, 'h').add(minsToAdd, 'm').format('hh:mm a');
                            var rTime = $('#return_time').val() != "" ? $('#return_time').val() : moment().locale('en').add(minHoursToBook, 'h').add(minsToAdd, 'm').format('hh:mm a');
                            $('#pickup_time').val(pTime);
                            $('#return_time').val(rTime);

                            $('div.pickup-time-list ul li:contains(' + pTime + ')').addClass("time-item-selected");
                            $('div.return-time-list ul li:contains(' + rTime + ')').addClass("time-item-selected");

                            $('.t-datepicker').tDatePicker({
                                autoClose: true,

                                // animation speed in milliseconds
                                durationArrowTop: 200,

                                // the number of calendars
                                numCalendar: 1,

                                // localization
                                titleCheckIn: 'تاريخ الاستلام',
                                titleCheckOut: 'تاريخ التسليم',
                                titleToday: 'اليوم',
                                titleDateRange: 'يوم',
                                titleDateRanges: 'ايام',

                                // the max length of the title
                                titleMonthsLimitShow: 3,

                                // replace moth names
                                replaceTitleMonths: null,

                                // e.g. 'dd-mm-yy'
                                showDateTheme: null,

                                // icon options
                                iconArrowTop: true,
                                iconDate: '&#x279C;',
                                arrowPrev: '&#x276E;',
                                arrowNext: '&#x276F;',
                                // https://fontawesome.com/v4.7.0/icons/
                                // iconDate: '<i class="li-calendar-empty"></i><i class="li-arrow-right"></i>',
                                // arrowPrev: '<i class="fa fa-chevron-left"></i>',
                                // arrowNext: '<i class="fa fa-chevron-right"></i>',

                                // shows today title
                                toDayShowTitle: true,

                                // showss dange range title
                                dateRangesShowTitle: true,

                                // highlights today
                                toDayHighlighted: false,

                                // highlights next day
                                nextDayHighlighted: false,

                                // an array of days
                                daysOfWeekHighlighted: [],

                                // custom date format
                                formatDate: 'mm-dd-yyyy',

                                // dateCheckIn: '25/06/2018',  // DD/MM/YY
                                // dateCheckOut: '26/06/2018', // DD/MM/YY
                                dateCheckIn: start_Date,
                                dateCheckOut: end_Date,
                                startDate: start_Date_initial,
                                endDate: null,

                                // limits the number of months
                                limitPrevMonth: 0,
                                limitNextMonth: 12,

                                // limits the number of days
                                limitDateRanges: 31,

                                // true -> full days || false - 1 day
                                showFullDateRanges: false,

                                // DATA HOLIDAYS
                                // Data holidays
                                fnDataEvent: null
                            });

                            $('#fleet-reservation-form').on('submit', function(event) {
                                event.preventDefault();
                                //  $(this).validate();
                                var dropoffdate;

                                //if ($(this).valid() == true) {
                                var PickupDate = $('input[name="t-start"]').val();
                                var DropOffDate = $('input[name="t-end"]').val();
                                var BickupTime = $("#pickup_time").val();
                                var DropTime = $("#return_time").val();
                                var TimerFormat = PickupDate + " " + BickupTime;
                                var pickupdate = moment(TimerFormat, "MM/DD/YYYY hh:mm A").format("MM/DD/YYYY hh:mm A");
                                //var pickupdate = moment(PickupDate, 'MM/DD/YYYY').format('MM/DD/YYYY') + " " + $('#pickup_time').val().add(1, "minutes").toDate();
                                if (DropOffDate == "null" || DropOffDate == null || DropOffDate == "")
                                    dropoffdate = "";
                                else
                                    dropoffdate = moment(DropOffDate, 'MM/DD/YYYY').format('MM/DD/YYYY') + " " + $('#return_time').val();
                                var keyvalues = {
                                    PickupDate: pickupdate,
                                    DropOffDate: dropoffdate
                                };

                                var formData = changeSerliazedValues(keyvalues, $(this).serializeArray());


                                //$.ajax({
                                //    url: $("#fleet-reservation-form").data("action"),
                                //    method: 'post',
                                //    data: formData,
                                //    success: function (result) {
                                //        if (result.Success == true) {
                                //            window.location.href = result.StatusMessage;
                                //        } else {
                                //            $("#HidableModal").find(".modal-content").html(result.StatusMessage);
                                //            $("#HidableModal").modal('show');
                                //        }
                                //    }
                                //});
                                ResetBookingFilter();
                                FillBookingDateAndLocationInfo();
                                $(".bookings-filter-price").hide();
                                GetBookingContentView($('#fleet-reservation-form').data("action"), true, formData, function () {
                                    GetCarCategories();
                                    $(".bookings-filter-price").show();
                                }, ".cars-details-search-result");
                                // }
                            });

                            $('[data-toggle="popover"]').popover();

                            $(".return-tb").hover(function () {
                                $(".return-tb").parent(".bookings-widget-label").popover('destroy');
                            })

                            if ($(".pickup-tb").val().length > 0)
                                $(".return-tb").removeAttr("disabled");
                        });

                        function changeSerliazedValues(Dictionary, serliazedValues) {
                            for (index = 0; index < serliazedValues.length; ++index) {
                                for (var key in Dictionary) {
                                    if (serliazedValues[index].name == key) {
                                        serliazedValues[index].value = Dictionary[key];
                                        break;
                                    }
                                }
                            }

                            return serliazedValues;
                        }

                    </script>
                    <script>

                        function setMarker(lat, long) {

                            var latLng = new google.maps.LatLng(lat, long);

                            var marker1 = new google.maps.Marker({
                                position: latLng,
                                animation: google.maps.Animation.DROP,
                                map: map
                            });

                            marker1.setMap(window.map);
                            map.setCenter(marker1.position);
                            map.setZoom(15);
                            markers.push(marker1);

                        }

                        function ShowAllMarkers() {
                            map.setCenter(defaultLatLng);
                            map.setZoom(5);
                            for (var i = 0; i < markers.length; i++) {
                                markers[i].setMap(map);
                            }
                        }

                        function HideAllMarkers() {
                            if (infowindow) {
                                infowindow.close();
                            }

                            for (var i = 0; i < markers.length; i++) {
                                markers[i].setMap(null);
                            }
                        }

                        function ShowMarker(id) {
                            for (var i = 0; i < markers.length; i++) {
                                if (markers[i].id == id) {
                                    markers[i].setMap(map);
                                    map.setCenter(markers[i].position);
                                    map.setZoom(13);
                                    break;
                                }
                            }
                        }
                    </script>
                    <style type="text/css">
                        .orange-checkbox-value{
                            font-size: 20px;
                        }
                        .booking-main-container .booking-search-wrapper {
                            width: 100% !important;
                            margin: auto -3px;
                        }
                        .booking-content>div {
                            margin-right: 5px;
                        }
                        .booking-car-price-now{
                            font-size: 50px;
                            padding: 0 33px 5px;
                        }
                        .info-fleet-discount{
                            color: red;
                        }
                        .booking-sidebar{
                            margin-top: 27px;
                        }
                        .booking-search .title, .booking-filter .title {
                            font-size: 16px;
                            color: #fff;
                            background: #003d6e;
                            margin: 15px 0;
                            height: 40px;
                            padding: 4px 0;
                        }
                        .slider.slider-horizontal{
                            margin-top: 45px;
                        }
                    </style>
                    <script type="text/javascript" src="http://www.google.com.sa/maps/api/js?sensor=true&amp;language=ar&amp;key=AIzaSyAfb5RpU1Unotf7sLOcAEkdhpO891Dqsb4"></script>

                    <div class="booking-sidebar float-normal" style="height: fit-content;">
                        <div class="row booking-filter" style="display: block;">
                            <select data-action="/ar/ListOfItems/GetBookingSortingList" id="SortByList" name="SortByList" onchange="CarsAjas();" style="color: #000;">
                                <option value="price1 DESC">السعر من الاكثر الي الاقل</option>
                                <option value="price1 ASC">السعر من الاقل الي الاكثر</option>
                                <option value="model DESC">الموديل من الاحدث الي الاقدم</option>
                                <option value="model ASC">الموديل من الاقدم الي الاحدث</option>
                            </select>

                            <div class="booking-filter-price" onmouseup="CarsAjas();">
                                <div class="title">اختر السعر المناسب</div>
                                <input id="ex2" type="range" class="span2" value="100,1900" data-slider-min="85" data-slider-max="1900" data-slider-step="5" data-slider-value="[100,4000]" onchange="">

                                <span class="SS1"></span>
                            </div>
                            <div class="booking-filter-car-type" data-action="/ar/Booking/GetCarCategories">   <div class="title">نوع السيارة</div>




          @foreach( $categories as $category )
            <div class="orange-checkbox-container">
                <div class="orange-checkbox circle">
                    <input type="checkbox" value="{{$category->id}}" id="{{$category->id}}" name="{{$category->id}}" onchange="OracleCategorySelected(this);paap(this);">
                    <label class="circle" for="{{$category->id}}"></label>
                </div>
                <label class="orange-checkbox-value" for="{{$category->id}}">
                    {{$category->name_ar}}
                </label>
            </div>

         @endforeach



                                <script>
                                    function OracleCategorySelected(input) {
                                        if ($(input).is(":checked")) {
                                            var id = $(input).val();
                                            var bk_event_handler_pixel = new Image(); //create new image pixel
                                            bk_event_handler_pixel.src = "https://tags.bluekai.com/site/64937?phint=CarCategory%3D" + id;
                                        }
                                    }
                                </script>
                            </div>
                        </div>



                        <div class="need-assistent-container red" style="text-align: center;">
                            <div class="fff" style="font-size: 19px;"> هل تحتاج إلى مساعدة؟</div>
                            <p class="h4 fff" style="font-size: 19px;">  خدمة العملاء 24/7</p>
                            <p class="h2 fff" style="font-size: 47px;font-weight: 600 !important;">920026600</p>
                        </div>
                    </div>

                    <div class="booking-content float-normal">

                        <!-- Pick up / drop off information-->
                        <div class="row bookingtimeInfo">
                            <div class="booking-pickup-info float-normal">
                                <div>الاستلام</div>
                                <div>
                                    <div class="glyphicon glyphicon-map-marker float-normal"></div>
                                    <div id="pickupLocation"></div>
                                </div>
                                <div>
                                    <div class="glyphicon glyphicon-calendar float-normal"></div>
                                    <div id="pickupDateTime"></div>
                                </div>
                            </div>
                            <div class="booking-dropoff-info float-normal">
                                <div>التسليم</div>
                                <div>
                                    <div class="glyphicon glyphicon-map-marker float-normal"></div>
                                    <div id="dropoffLocation"></div>
                                </div>
                                <div>
                                    <div class="glyphicon glyphicon-calendar float-normal"></div>
                                    <div id="dropoffDateTime"></div>
                                </div>
                            </div>
                        </div>

                        <style>
                            .special-promotion-no-discounts {
                                font-size: 16px;
                                margin-left: 10px;
                            }
                            .car-for-booking
                            {
                                background-color: #e8e8e8;
                            }
                            .booking-car-image{
                                width: 250px;
                            }
                            .pagination>li>a, .pagination>li>span {
                                width: 100%;
                                text-align: center;
                                font-size: 20px;
                                margin-top: 0;
                            }
                            .page-item.active {
                                margin: 0px 0 0;
                            }
                            .page-item:not(:first-child) .page-link, .pagination>li>a, .pagination>li>span{
                                margin-top: 0;
                            }

                        </style>

                        <!-- if user not sign in appear promotion sign in-->

                        <style type="text/css">
                            :is(div.cars-details)::-webkit-scrollbar{
                                width: 0;
                            }
                        </style>
                        <div class="row cars-details-search-result booking-result"><div class="cars-details">



                                <div class="booking-error-result hide">
                                    <div class="glyphicon glyphicon-remove-sign float-normal"></div>
                                </div>
                          {{--  start cars list div --}}
                          <div id="carse">
                                    <div class="car-for-booking">
                                        <table>
                                            <tbody>
                                            @if(!isset($car))

                                            @foreach($cars as $car)

                                                <form action="{{route('firstBookingStep',$car->id)}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                <div>
                                                    <tr style="border-top: 18px solid #fff;">
                                                        <td colspan="3" class="booking-car-image">
                                                            <img src="{{asset('front/cars/CarsImg')}}/{{$car->img}}" alt="لا يوجد صوره للسياره">
                                                        </td>
                                                        <input type="hidden" name="mohamed" />
                                                        <td  style='margin-bottom: 20px;' class="booking-car-details" colspan="2">
                                                            <p class="h3 black">
                                                                {{$car->name}}
                                                                <small style='font-size: 20px;'>أو مشابهة</small>
                                                            </p>
                                                            <span class="h4">{{$car->model}}</span>
                                                            <ul class="booking-car-details-strong">
                                                                <li>{{$car->seat}} مقاعد | </li>
                                                                <li>{{$car->door}} أبواب</li>
                                                                <li> | {{$car->	luggage}} الأمتعة</li>
                                                            </ul>
                                                            <ul class="booking-car-details-tick">
                                                                {{$car->features}}
                                                            </ul>
                                                            <div>{{$car->category?$car->category->name_ar:'-'}}</div>
                                                        </td>

                                                        <td style='margin-bottom: 20px;' class="booking-car-price-paynow-promotion">

                                                                            <span class="booking-car-price-duration-discount align-reverse">
                                                                            السعر لـ 1 يوم
                                                                            </span>

                                                            <div class="tooltipContainer">
                                                                <div>
                                                                    <i class="glyphicon-info-sign info-fleet-discount c-tooltip icofont icofont-idea">
                                                                        <p>hi</p>

                                                                        <div class="tooltiptext">
                                                                            <div class="discountContent">
                                                                                <span class="promotionDiscount">
                                                                                    عرض خصم  {{$car->type}}%
                                                                                </span>
                                                                                <br>
                                                                            </div>
                                                                        </div>
                                                                    </i>
                                                                </div>
                                                                <div class="originalPriceFleet">
                                                                    <s style='margin-right: 60px'>{{$car->price2}} <i class="icofont icofont-cur-riyal"></i></s>
                                                                </div>
                                                                <div>
                                                                </div>
                                                                <span style='margin-top: -20px' class="booking-car-price-now float-reverse">{{$car->price1}} <i class="icofont icofont-cur-riyal"></i>
                                                                </span>
                                                            </div>

                                                        </td></tr>
                                                    <tr>
                                                        <td class="booking-car-fuel" colspan="3">
                                                        </td>
                                                        <td class="booking-car-book-now" colspan="5">
                                                            <button data-carrentalrateid="196" data-rateid="990" onclick="handleModelChoose(this,{{$car->id}});" class="book-now-button float-reverse" type="submit" > احجز الآن </button>
                                                            <i class='fa fa-heart' aria-hidden='true'></i>
                                                        </td></tr>
                                                </div>
                                                    <input type="hidden" id="receivingBrancheInput" name="receivingBrancheInputs"  />
                                                    <input type="hidden" id="deliveryBrancheInput" name="deliveryBrancheInputs"  />
                                                    <input type="hidden" id="receivingDateInput" name="receivingDateInputs"  />
                                                    <input type="hidden" id="deliveryDateInput" name="deliveryDateInputs"  />

                                                    <script>
                                                        function copyTextValue() {
                                                            var receivingBranche , deliveryBranche , receivingDate , deliveryDate ;

                                                            receivingBranche = document.getElementById("receivingBranche").value;
                                                            deliveryBranche = document.getElementById("deliveryBranche").value;
                                                            receivingDate = document.getElementById("receivingDate").value;
                                                            deliveryDate = document.getElementById("deliveryDate").value;

                                                            document.getElementById("receivingBrancheInput").value = receivingBranche;
                                                            document.getElementById("deliveryBrancheInput").value = deliveryBranche;
                                                            document.getElementById("receivingDateInput").value = receivingDate;
                                                            document.getElementById("deliveryDateInput").value = deliveryDate;

                                                            // alert(deliveryDate);
                                                        }
                                                    </script>
                                                </form>
                                            @endforeach
                                            @else
                                            <form action="{{route('firstBookingStep',$car->id)}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                            <div>
                                                <tr  style="border-top: 18px solid #fff;">
                                                    <td colspan="3" class="booking-car-image">
                                                        <img src="{{asset('front/cars/CarsImg')}}/{{$car->img}}" alt="لا يوجد صوره للسياره">
                                                    </td>
                                                    <input type="hidden" name="mohamed" />
                                                    <td class="booking-car-details" colspan="2">
                                                        <p class="h3 black">
                                                            {{$car->name}}
                                                            <small style='font-size: 20px;'>أو مشابهة</small>
                                                        </p>
                                                        <span class="h4">{{$car->model}}</span>
                                                        <ul class="booking-car-details-strong">
                                                            <li>{{$car->seat}} مقاعد | </li>
                                                            <li>{{$car->door}} أبواب</li>
                                                            <li> | {{$car->	luggage}} الأمتعة</li>
                                                        </ul>
                                                        <ul class="booking-car-details-tick">
                                                            {{$car->features}}
                                                        </ul>
                                                        <div>{{$car->category?$car->category->name_ar:'-'}}</div>
                                                    </td>

                                                    <td class="booking-car-price-paynow-promotion">
                                                                        <span class="booking-car-price-duration-discount align-reverse">
                                                                        السعر لـ 1 يوم
                                                                        </span>

                                                        <div class="tooltipContainer">
                                                            <div>
                                                                <i class="glyphicon-info-sign info-fleet-discount c-tooltip icofont icofont-idea">
                                                                    <p>hi</p>

                                                                    <div class="tooltiptext">
                                                                        <div class="discountContent">
                                                                            <span class="promotionDiscount">
                                                                                عرض خصم  {{$car->type}}%
                                                                            </span>
                                                                            <br>
                                                                        </div>
                                                                    </div>
                                                                </i>
                                                            </div>
                                                            <div class="originalPriceFleet">
                                                                <s style='margin-right: 60px'>{{$car->price2}} <i class="icofont icofont-cur-riyal"></i></s>
                                                            </div>
                                                            <div>
                                                            </div>
                                                            <span style='margin-top: -20px' class="booking-car-price-now float-reverse">{{$car->price1}} <i class="icofont icofont-cur-riyal"></i>
                                                            </span>
                                                        </div>

                                                    </td></tr>
                                                <tr>
                                                    <td class="booking-car-fuel" colspan="3">
                                                    </td>
                                                    <td class="booking-car-book-now" colspan="5">
                                                        <button data-carrentalrateid="196" data-rateid="990" onclick="handleModelChoose(this,{{$car->id}});" class="book-now-button float-reverse" type="submit" > احجز الآن </button>
                                                        <i class='fa fa-heart' aria-hidden='true'></i>
                                                    </td></tr>
                                            </div>
                                                    <input type="hidden" id="receivingBrancheInput" name="receivingBrancheInputs"  />
                                                    <input type="hidden" id="deliveryBrancheInput" name="deliveryBrancheInputs"  />
                                                    <input type="hidden" id="receivingDateInput" name="receivingDateInputs"  />
                                                    <input type="hidden" id="deliveryDateInput" name="deliveryDateInputs"  />

                                                    <script>
                                                        function copyTextValue() {
                                                            var receivingBranche , deliveryBranche , receivingDate , deliveryDate ;

                                                            receivingBranche = document.getElementById("receivingBranche").value;
                                                            deliveryBranche = document.getElementById("deliveryBranche").value;
                                                            receivingDate = document.getElementById("receivingDate").value;
                                                            deliveryDate = document.getElementById("deliveryDate").value;

                                                            document.getElementById("receivingBrancheInput").value = receivingBranche;
                                                            document.getElementById("deliveryBrancheInput").value = deliveryBranche;
                                                            document.getElementById("receivingDateInput").value = receivingDate;
                                                            document.getElementById("deliveryDateInput").value = deliveryDate;

                                                            // alert(deliveryDate);
                                                        }
                                                    </script>
                                                </form>

                                            @endif
                                            <script>
                                                $('.fa-heart').click(function(){
                                                    $(this).toggleClass('favColor');
                                                })
                                            </script>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="car-for-booking-hiden">
                                        <table>
                                            <tbody class='carFiltersResult'>


                                            <script>
                                                $('.fa-heart').click(function(){
                                                    $(this).toggleClass('favColor');
                                                })
                                            </script>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                                {{ $cars->links() }}
                       {{-- end cars list div --}}
                                <div class="modal fade" id="OrSimilarHidableModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="AdditionsModalContent" id="AdditionsContent">
                                                <div class="modal-header">
                                                    <p class="h3 text-center not-bold errors" style="color: #c10000;font-weight: 700 !important;color: #c10000;font-weight: 700 !important;margin: 50px auto;font-size: 40px;border-bottom: 2px solid;">يرجا اختيار فرع التسليم و التسلام</p>
                                                </div>

                                                <div class="modal-body term-condition-container errors" onscroll="checkScrollContentHeight()" style="display: none;">
                                                    <div id="modal-body" class="additions-modal-body">
                                                        يلتزم أبوذياب بتوفير نفس الموديل وسنة الصنع التي قمت باختيارها وقت الحجز و في حال عدم توفر السيارة المختارة عند تنفيذ الحجز يلتزم أبوذياب بتوفير سيارة من نفس الفئة ونفس سنة الصنع او سنة صنع أعلى ، وفي حال عدم توفر سيارة من نفس الفئة يتم الترقية لفئة أعلى بدون أى تكاليف أضافية .
                                                    </div>
                                                </div>

                                                <div class="modal-footer terms-condition">
                                                    <div class="text-center">
                                                        <button class="book-now-button float-reverse errors" data-dismiss="modal" style="margin: 20px 323px;" onclick="OrSimilarOk();">فهمت</button>
                                                        <form method="post" action="H/H2.php" style="display: none;" class="errors">
                                                            <input type="hidden" name="car" value="" id="carid">
                                                            <input type="hidden" name="Te1" value="" id="carTe1">
                                                            <input type="hidden" name="Te2" value="" id="carTe2">
                                                            <input type="hidden" name="Mn1" value="" id="carMn1">
                                                            <input type="hidden" name="Mn2" value="" id="carMn2">
                                                            <button class="book-now-button float-reverse" data-dismiss="modal" style="margin: 20px 323px;"> موافق</button><!-- onclick="OrSimilarOk();" -->
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
{{--                                    {{dd( Request::is('cars_list') )}};--}}
                                </div>
                                <script>
                                    nun = 3;
                                    function hh() {
                                        SSZ = 680;
                                        for (i = 1; i < 100; i++) {
                                            if (window.scrollY >= (SSZ * i) & nun <= (3 * i)) {
                                                nun = 3 * (i + 1);
                                                CarsAjas();
                                            }
                                        }
                                        //console.log(window.cco.scrollY);
                                    }
                                    setInterval(hh, 300);
                                    categoryFilters = [];
                                    pap = [];
                                    function paap(input) {
                                        if ($(input).is(":checked")) {
                                                pap.push($(input).val());
                                                if(pap.length==0)
                                                {
                                                    $('.car-for-booking').css('display','block');
                                                    $('.car-for-booking-hiden').css('display','none');
                                                }
                                                else{
                                                    $('.car-for-booking').css('display','none');
                                                    $('.car-for-booking-hiden').css('display','block');
                                                }
                                        }
                                        else{
                                            const index = pap.indexOf($(input).val());
                                            if (index > -1) {
                                                pap.splice(index, 1);
                                            }
                                            if(pap.length==0)
                                                {
                                                    $('.car-for-booking').css('display','block');
                                                    $('.car-for-booking-hiden').css('display','none');
                                                }

                                        }
                                        $.ajax({
                                            url: '/cars_list',
                                            method: 'GET',
                                            data: {categorys_id: pap},
                                            success: function(data) {
                                                if (data == '') {
                                                    nun = 1000;
                                                }
                                                else{
                                                    let car='';
                                                    for(let i=0;i<data.length;i++)
                                                    {
                                                        if(data[i].lenght!=0)
                                                        {
                                                            for(let k=0;k<data[i].length;k++)
                                                            {
                                                                car+=`
                                                                <form action="" method="get" enctype="multipart/form-data">
                                                                <div>
                                                                <tr style="border-top: 18px solid #fff;">
                                                                <td colspan="3" class="booking-car-image">
                                                                <img src="front/cars/CarsImg/`+data[i][k]['img']+`" alt="لا يوجد صوره للسياره">
                                                                </td>
                                                                <input type="hidden" name="mohamed" />
                                                                <td class="booking-car-details" colspan="2">
                                                                <p class="h3 black">
                                                                `+data[i][k]['name']+`
                                                                <small style='font-size: 20px;'>أو مشابهة</small>
                                                                </p>
                                                                <span class="h4">`+data[i][k]['model']+`</span>
                                                                <ul class="booking-car-details-strong">
                                                                <li> مقاعد | </li>
                                                                <li>`+data[i][k]['door']+` أبواب</li>
                                                                <li> | `+data[i][k]['luggage']+` الأمتعة</li>
                                                                </ul>
                                                                <ul class="booking-car-details-tick">
                                                                `+data[i][k]['features']+`h
                                                                </ul>
                                                                </td>
                                                                <td class="booking-car-price-paynow-promotion">

                                                                <span class="booking-car-price-duration-discount align-reverse">
                                                                السعر لـ 1 يوم
                                                                </span>

                                                                <div class="tooltipContainer">
                                                                <div>
                                                                <i class="glyphicon-info-sign info-fleet-discount c-tooltip icofont icofont-idea">
                                                                <p>hi</p>

                                                                <div class="tooltiptext">
                                                                <div class="discountContent">
                                                                <span class="promotionDiscount">
                                                                عرض خصم  `+data[i][k]['type']+`%
                                                                </span>
                                                                <br>
                                                                </div>
                                                                </div>
                                                                </i>
                                                                </div>
                                                                <div class="originalPriceFleet">
                                                                <s style='margin-right: 60px'>`+data[i][k]['price2']+` <i class="icofont icofont-cur-riyal"></i></s>
                                                                </div>
                                                                <div>
                                                                </div>
                                                                <span style='margin-top: -20px' class="booking-car-price-now float-reverse">`+data[i][k]['price1']+` <i class="icofont icofont-cur-riyal"></i>
                                                                </span>
                                                                </div>

                                                                </td>
                                                                </tr>
                                                                <tr>
                                                                <td style='margin-bottom: 20px;' class="booking-car-fuel" colspan="3">
                                                                </td>
                                                                <td class="booking-car-book-now" colspan="5">
                                                                <button data-carrentalrateid="196" data-rateid="990" onclick="handleModelChoose(this,`+data[i][k]['id']+`);" class="book-now-button float-reverse" type="submit" > احجز الآن </button>
                                                                <i class='fa fa-heart' aria-hidden='true'></i>
                                                                </td>
                                                                </tr>
                                                                </div>`
                                                            }
                                                            }


                                                    }
                                                    $('.carFiltersResult').html(car);
                                                    // console.log(data);
                                                }

                                            }
                                        });
                                    }
                                    function CarsAjas() {
                                        $.ajax({
                                            url: 'http://127.0.0.1:8000/cars_list',
                                            method: 'POST',
                                            data: {TR: $('#SortByList').val(), s3r: $('#ex2').attr('value'), nu: nun, typee: pap},
                                            success: function(data) {
                                                if (data == '') {
                                                    nun = 1000;
                                                }
                                                else{
                                                    $('#carse').html(data);
                                                }

                                            }
                                        });
                                        $.ajax({
                                            url: '../PHP/ajas-cars.php',
                                            method: 'POST',
                                            data: {s3r: $('#ex2').attr('value')},
                                            success: function(data) {
                                                $('.SS1').html(data);
                                                //console.log(data);
                                            }
                                        });
                                    }
                                    CarsAjas();
                                    function Branches() {
                                        $.ajax({
                                            url: '../PHP/ajax-branches.php',
                                            method: 'POST',
                                            data: {Branches: $('#Branches').val()},
                                            success: function(data) {
                                                $('#Mn1').html('<option disabled="disabled" selected=\"selected\">فرع  الاستلام</option>' + data);
                                                //console.log(data);
                                            }
                                        });
                                    }
                                    Branches();
                                    function MM2() {
                                        // str_replace("#", "#,", $_POST['branches']);
                                        $.ajax({
                                            url: '../PHP/ajax-branches.php',
                                            method: 'POST',
                                            data: {Branches: $('#Mn1').val(), Mn: 2},
                                            success: function(data) {
                                                $('#Mn2').html('<option disabled="disabled" selected=\"selected\">فرع  التسليم</option>' + data);
                                            }
                                        });
                                        if ($('#Mn1').val() != null) {
                                            $('p.errors').text('أو مشابهة - ماذا تعني؟');
                                            $('button.errors').hide();
                                            $('div.errors').show();
                                            $('form.errors').show();
                                        }
                                    }
                                    MM2();



                                    $(function() {

                                        $('[data-toggle="popover"]').popover(); //this to appear tooltip for save for later
                                        //set filters
                                        $("#priceSlider").slider('setAttribute', 'min', 680);
                                        $("#priceSlider").slider('setAttribute', 'max', 2800);
                                        $("#priceSlider").slider('setAttribute', 'value', [680,2800]);
                                        $('#priceSlider').slider('enable');
                                        $("#priceSlider").slider('refresh');
                                        $("b.min-price-value").html('680 <i class="icofont icofont-cur-riyal"></i>');
                                        $("b.max-price-value").html('2800 <i class="icofont icofont-cur-riyal"></i>');
                                        $(".bookings-filter-car-type .orange-checkbox input").removeAttr("disabled");
                                        $(".bookings-filter-car-type .orange-checkbox-value.disabled").removeClass("disabled");

                                        //add hightlight to saved for later cars
                                        var cars = JSON.parse(sessionStorage.getItem("CarsSaved"));
                                        if (cars != null) {
                                            $.each(cars, function (index, value) {
                                                $('#saveForLaterButton' + value.carRentalRateId + value.modelYear).addClass("save-for-later-button-clicked");
                                                $('#saveForLaterButton' + value.carRentalRateId + value.modelYear+ " .save-for-later-text").text('ﺣﻔظت ﻟﻠﻤﺮة اﻟﻘﺎدﻣﺔ');

                                            });
                                        }
                                        $("#div_noOnlineDiscount").css("visibility", "hidden");

                                    });

                                    function handleModelChoose(input, id) {
                                        var carRentalRateId = $(input).data('carrentalrateid');
                                        var rateId = $(input).data('rateid');
                                        $('#OrSimilarHidableModal').data("carrentalrateid", carRentalRateId);
                                        $('#OrSimilarHidableModal').data("rateid", rateId);

                                        $("#OrSimilarHidableModal").modal("show");
                                        $('#carid').val(id);

                                        $('#carTe1').val($('#Te1').val());
                                        $('#carTe2').val($('#Te2').val());
                                        $('#carMn1').val($('#Mn1').val());
                                        $('#carMn2').val($('#Mn2').val());
                                    }

                                    function OrSimilarOk() {
                                        $("#OrSimilarHidableModal").modal("hide");
                                        $(".modal-backdrop").remove();
                                        var carRentalRateId = $("#OrSimilarHidableModal").data('carrentalrateid');
                                        var rateId = $("#OrSimilarHidableModal").data('rateid');

                                        GetBookingContentView('/ar/Booking/OptionsStep', false, { 'carRentalRateId': carRentalRateId, 'rateId': rateId}, FillBookingDateAndLocationInfo);
                                    }
                                </script>

                            </div>

                            <div onclick="LoadMoreCars()" style="display: none; cursor: pointer;margin-left: auto;margin-right: auto; text-align: center; padding: 7px 0;background: #a91111;width: 60px;height: 60px;color: #fff;font-size: 16px;border-radius: 10000px;">اظهار المزيد</div>

                            <script>
                                window.bk_async = function() {
                                    bk_allow_multiple_calls=true;
                                    bk_addPageCtx('BookingStage', 'SearchResult');
                                    BKTAG.doTag(64937, 1); };
                                (function() {
                                    var scripts = document.getElementsByTagName('script')[0];
                                    var s = document.createElement('script');
                                    s.async = true;
                                    s.src = "https://tags.bkrtx.com/js/bk-coretag.js";
                                    scripts.parentNode.insertBefore(s, scripts);
                                }());


                                ORA.view({
                                    "data": {
                                        "booking_step": "search"
                                    }
                                });
                            </script>


                        </div>

                        <div class="row cars-details-search-result booking-result">
                        </div>

                        <script>
                            $(function () {

                                ResetBookingFilter();
                                var url = '/ar/Booking/GetSearchResult';

                                GetDropDownList($("#SortByList").data("action"), null, 'SortByList', function () { $("#SortByList").val('20') });
                                //if ('False' == 'True') {
                                GetBookingContentView(url, true, null, FillBookingDateAndLocationInfo, ".cars-details-search-result");
                                //}

                                var cars = JSON.parse(sessionStorage.getItem("CarsSaved"));
                                if (cars && cars.length > 0) {
                                    $(".saved-for-later-button").removeAttr("disabled");
                                }
                            });

                            $(document).ready(function () {
                                //Delay incase logged in user
                                var delay = 2000;
                                if ('False' == 'True') {
                                    delay = 800;
                                }

                                //CSS animated text
                                $("#div_specialPromation").html(prepareHtmlAnimation('عروض خاصة فقط للعملاء المسجلين في يـلو')).delay(800).fadeIn(0);
                                $("#div_noAmyaliDiscount").html(prepareHtmlAnimation('سجل الدخول لتحصل على خصم العضوية')).slideUp(300).delay(1200).fadeIn(0);
                                $("#div_noOnlineDiscount").html(prepareHtmlAnimation('ادفع الان لتحصل على خصم الدفع الإلكتروني')).slideUp(300).delay(delay).fadeIn(0);
                            });
                        </script>    </div>
                </div>

                <link href="{{asset('front/Content/bootstrap-slider.min.css')}}" rel="stylesheet" />
                <script src="../../Scripts/bootstrap-slider.min.js"></script>
                <script src="../../Scripts/moment-with-locales.min592e.js?ver=3"></script>
                <script type="text/javascript" src="../../Scripts/moment.min592e.js?ver=3"></script>
                <script type="text/javascript" src="../../Scripts/bootstrap-datetimepicker.min7dd3.js?ver=4"></script>

                <script src="../../Scripts/Website/Booking.mind0d2.js?ver=34"></script>

                <script>
                    $(function () {
                        if ('Search' == 'Search') {
                            ShowBookingSearchAndFilter(true);
                        }
                        else if ('Search' == 'Options') {
                            GetBookingContentView('/ar/Booking/OptionsStep', false, { "carRentalRateId": '',"rateId" : '' }, FillBookingDateAndLocationInfo);
                        }
                        else if ('Search' == 'Conditions') {
                            GetBookingContentView('/ar/Booking/TermAndConditionStep', false, { "payNow": 'False' }, FillBookingDateAndLocationInfo);

                        }
                        else if ('Search' == 'Payment') {
                            GetBookingContentView('/ar/Booking/PaymentStep', false);
                        }
                        else if ('Search' == 'Confirmation') {
                            GetBookingContentView('/ar/Booking/ConfirmationStep', false);
                        }
                        else if ('Search' == 'PaymentDone') {
                            GetBookingContentView('/ar/Booking/PaymentResultStep', false, { "Message": '', "Status": "Success" });
                        }

                    })
                </script>


                <!-- Modal -->
                <div class="modal fade" data-backdrop="static" data-keyboard="false" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <div class="modal-content">
                    </div>
                </div>
                <!-- Modal End -->
                <!-- Careers Modal -->
                <div class="modal fade" data-backdrop="static" data-keyboard="false" id="myModal_Careers" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                </div>
                <!-- Modal End -->
                <!-- Announcment Modal -->
                <div class="modal fade" data-backdrop="static" data-keyboard="false" id="AnnouncmentModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header no-padding-bottom">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    &times;
                                </button>
                                <p class="h3 modal-title"></p>
                            </div>
                            <div class="announcment-container"></div>
                        </div>
                    </div>
                </div>
                <!-- Modal End -->
                <!-- General Modal -->
                <div class="modal fade" data-backdrop="static" data-keyboard="false" id="GeneralModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        </div>
                    </div>
                </div>
                <div class="modal fade" data-backdrop="static" data-keyboard="false" id="GeneralModalTransperant" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        </div>
                    </div>
                </div>

                <div class="modal fade" data-backdrop="static" data-keyboard="false" id="WarningModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <div class="modal-header">
                                <img class="margin-right"
                                     src="{{asset('front/Content/Images/logo_high.png')}}" alt="Al Wefaq Rent a Car" width="150">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
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

                    </div>
                </div>
            </div>
            <!-- Modal End cco-->
        </div>
    </div>
    </div>
    <!-- End content page  -->


</div>
@endsection
