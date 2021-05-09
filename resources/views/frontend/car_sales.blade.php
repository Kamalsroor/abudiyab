<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']" >
    <section class="car-sales">
        {{-- {{optional(Settings::instance('car_sales_backgraund'))->getFirstMediaUrl('car_sales_backgraund')}} --}}
        {{-- {!! Settings::locale(app()->getLocale())->get('car_sales_content')!!} --}}
        <section class="car-sales_head" style="background: url({{optional(Settings::instance('car_sales_backgraund'))->getFirstMediaUrl('car_sales_backgraund')}})">
            <div class="car-sales_head_overlay-black">
                <h1>{{Settings::locale(app()->getLocale())->get('car_sales_title')}}</h1>
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
                <div class="alert alert-danger  my-2 rejected" id='notenough' style="display: none" role="alert">

                </div>
                <div class="car-sales_price-suggestion_center_step-2_price">
                    <input type="text" name="price" class="price" placeholder=" اقتراح سعر ">
                    <input type="text" name="quantity" class="quantity" style="text-align: center" placeholder="الكميه">
                </div>
                <div class="car-sales_price-suggestion_center_step-2_button">
                    <button class="primary-btn btn-hover btn-curved" onclick="sendPurchaseRequest()">اقتراح سعر</button>
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
        let fromLogin=false;
        let loginURL="{{route('api.sanctum.login-with-session')}}";
        let isLogin=false;
        let user_id='';
        let car_id='';
        let quantity=0;
        $('.buy_car').on('click',function(){
            car_id=$(this).prev()[0].innerHTML;
            quantity=$(this).prev().prev()[0].innerHTML;
            if(quantity==1)
            {
                $('.quantity').css('display', 'none');
            }
            else{
                $('.quantity').css('display', 'block');

            }
            showPopUp();
        })
        function MoveStep(step) {
            if(step == 1 || step == 2 )
            {
                $('#notenough').css('display','none');
            }
            stepsClass = '.car-sales_price-suggestion_center_step-';
            steps = stepsClass + '1, ' + stepsClass + '2, ' + stepsClass + '3';
            if(step==2 && fromLogin==true )
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
                     user_id=data['user_id'];
                    if(data['attempt'])
                    {
                        isLogin=true;
                    }
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
            if(auth =='true' || isLogin==true)
            {
                MoveStep(2);
            }
            else
            {
                fromLogin=true;
                MoveStep(1);
            }
        }
        function sendPurchaseRequest(){
            let purchaseURL="{{route('front.purchaserequests.car-sales-request')}}";
            console.log(user_id);
            if(!user_id)
            {
                user_id='{{Auth()->id()}}';
            }
            console.log(car_id);
            let price=$('.price').val();
            let localquantity=$('.quantity').val();
            if(localquantity > quantity)
            {
                $('#notenough').css('display','block');
                $('#notenough').text('هذه الكميه غير متوفره');
            }
            else
            {
                $.ajax({
                        type: 'post',
                        url: purchaseURL,
                        headers: {
                            "x-accept-language": "ar",
                            "X-CSRF-TOKEN": csrf_token,
                        },
                        data: {
                            'user_id': user_id,
                            'car_id': car_id,
                            'price': price,
                            'quantity': localquantity,
                        },
                        success: function(data, status) {
                            if(data['purchase']=='done')
                            {
                                MoveStep(3);
                            }
                        },
                        error: function(data){
                        }

                });
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
