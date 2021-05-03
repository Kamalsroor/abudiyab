<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']" >
    <section class="car-sales">
        {{-- {{optional(Settings::instance('car_sales_backgraund'))->getFirstMediaUrl('car_sales_backgraund')}} --}}
        {{-- {!! Settings::locale(app()->getLocale())->get('car_sales_content')!!} --}}
        <section class="car-sales_head" style="background: url('https://img-s-msn-com.akamaized.net/tenant/amp/entityid/BB1bt6T1.img?h=552&w=750&m=6&q=60&u=t&o=f&l=f');background-repeat: no-repeat; background-size: cover;">
            <div class="car-sales_head_overlay-black">
                <h1>صفحة بيع السيارات</h1>
            </div>
        </section>
        <car_seles remote-url="{{route('api.carsales.index')}}" >

        </car_seles>
    </section>

    <section class="car-sales_price-suggestion price-suggestion-h">
        <div class="car-sales_price-suggestion_center">
            <span class="car-sales_price-suggestion_center_cancel" onclick="$('.car-sales_price-suggestion').toggleClass('price-suggestion-s');$('.car-sales_price-suggestion').toggleClass('price-suggestion-h');">
                <i class="fas fa-times"></i>
            </span>
            <div class="car-sales_price-suggestion_center_loader">
                <img src="{{ asset('front/img/3.gif') }}" alt="">
                <div>1</div>
            </div>
            <div class="car-sales_price-suggestion_center_step-1">
                 <div class="car-sales_price-suggestion_center_step-1_text">
                    <h4>تسجيل الدخول</h4>
                    <p>الرجاء تسجيل الدخول للمتابعة</p>
                 </div>
            {{-- <form action="{{ route('login') }}"  method="post" class="form-container text-center"> --}}
                <div class="car-sales_price-suggestion_center_step-1_form">
                    <div class="form-row">
                      <div class="form-group col-12">
                        <div class="alert alert-danger  my-2 rejected" id='invalideCradentilas' style="display: none" role="alert">

                        </div>
                      </div>
                      <div class="form-group col-12">
                        <label for="inputEmail4">البريد الاركتروني</label>
                        <input type="email" name="email" class="form-control" id="inputEmail4">
                      </div>
                      <div class="form-group col-12">
                        <label for="inputPassword4">كلمة السر</label>
                        <input type="password" name="password" class="form-control" id="inputPassword4">
                      </div>
                    </div>
                    <button type="submit" class="primary-btn btn-hover btn-curved" onclick="MoveStep(2);">تسجيل الدخول</button>
                </div>
            {{-- </form> --}}

            </div>

            <div class="car-sales_price-suggestion_center_step-2">
                <div class="car-sales_price-suggestion_center_step-2_price">
                    <input type="text" placeholder="سعر">
                </div>
                <div class="car-sales_price-suggestion_center_step-2_button">
                    <button class="primary-btn btn-hover btn-curved" onclick="MoveStep(3);">اقتراح سعر</button>
                </div>
            </div>
            <div class="car-sales_price-suggestion_center_step-3">
                <div class="car-sales_price-suggestion_center_step-3_img">
                    <img src="{{ asset('front/img/access.png') }}">
                </div>
                <div class="car-sales_price-suggestion_center_step-3_text">
                    <h4>تم تقديم طلبك بنجاح</h4>
                    <h5>و سيتم الرد عليك في اقرب وقت ممكن</h5>
                </div>
            </div>
        </div>
    </section>
    @push('js')
    <script>
        let isLogin=false;
        let loginURL="{{route('api.sanctum.login')}}";
        function MoveStep(step) {

            stepsClass = '.car-sales_price-suggestion_center_step-';
            steps = stepsClass + '1, ' + stepsClass + '2, ' + stepsClass + '3';
            if(step==2 && isLogin==true)
            {
                let email=$('#inputEmail4').val();
                let password=$('#inputPassword4').val();
                console.log(email,password);


                $.ajax({
                    type: 'post',
                    url: loginURL,
                    headers: {
                        "x-accept-language": "ar",
                        "X-CSRF-TOKEN": csrf_token,
                    },
                    data: {
                        'username': email,
                        'password': password
                    },
                    success: function(data, status) {
                    console.log( data.token);
                    $(steps).addClass('price-suggestion-h');
                    $(steps).removeClass('price-suggestion-s');


                    setTimeout(function(){
                        $(".car-sales_price-suggestion_center_loader").animate({opacity: "1"}, 0, function() {
                            $(".car-sales_price-suggestion_center_loader").toggle();
                        });
                        setTimeout(function(){
                            $(".car-sales_price-suggestion_center_loader").animate({opacity: "0"}, 500, function() {
                                $(".car-sales_price-suggestion_center_loader").toggle();
                            });
                            $(steps).css('display','none');
                            $(stepsClass + step).css('display','block');
                            $(stepsClass + step).removeClass('price-suggestion-h');
                            $(stepsClass + step).addClass('price-suggestion-s');
                        },1000);
                    },400);

                    },
                    error: function(data){
                        $('#invalideCradentilas').show();
                        $('#invalideCradentilas').text(data.responseJSON.errors.username[0]);
                        console.log(data.responseJSON.errors.username[0]);
                    }

                });
            }
            else{
                $(steps).addClass('price-suggestion-h');
            $(steps).removeClass('price-suggestion-s');


            setTimeout(function(){
                $(".car-sales_price-suggestion_center_loader").animate({opacity: "1"}, 0, function() {
                    $(".car-sales_price-suggestion_center_loader").toggle();
                });
                setTimeout(function(){
                    $(".car-sales_price-suggestion_center_loader").animate({opacity: "0"}, 500, function() {
                        $(".car-sales_price-suggestion_center_loader").toggle();
                    });
                    $(steps).css('display','none');
                    $(stepsClass + step).css('display','block');
                    $(stepsClass + step).removeClass('price-suggestion-h');
                    $(stepsClass + step).addClass('price-suggestion-s');
                },1000);
            },0);
            }

        }
        function checkLogin(){
            let auth="{{Auth()->check() ? 'true' : 'false'}}";
            if(auth =='true')
            {
                MoveStep(2);
            }
            else
            {
                isLogin=true;
                MoveStep(1);
            }
        }

        function showPopUp(){
            $('.car-sales_price-suggestion').toggleClass('price-suggestion-s');
            $('.car-sales_price-suggestion').toggleClass('price-suggestion-h');
            $('.car-sales_price-suggestion').css('display','block');
            checkLogin();
        }
    </script>
    @endpush
            </x-front-layout>
