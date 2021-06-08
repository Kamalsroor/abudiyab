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
                    <h4>اقتراح سعر</h4>
                    <p>الرجاء تسجيل البيانات للمتابعة</p>
                 </div>
            {{-- <form action="{{ route('login') }}"  method="post" class="form-container text-center"> --}}
                <div class="car-sales_price-suggestion_center_step-1_form">
                    <div class="alert alert-danger  my-2 rejected" id='notenough'  role="alert">

                    </div>
                    <div class="form-row">
                      <div class="form-group col-12">
                        <div class="alert alert-danger  my-2 rejected" id='invalideCradentilas' style="display: none" role="alert">

                        </div>
                      </div>
                    @if (!Auth()->check())

                      <div class="form-group col-12">
                          <label for="inputEmail4">اسم المعرض</label>
                          <input type="text" name="email"  class="form-control purchase0 invalideData" id="inputEmail4">
                        </div>
                        <div class="form-group col-12">
                            <label for="inputPassword4">رقم الهاتف</label>
                            <input type="number" name="number"  class="form-control purchase1 invalideData" id="inputPassword4">
                        </div>
                    @endif
                      <div class="form-group col-12">
                        <label for="inputEmail4">اقتراح سعر</label>
                        <input type="number" name="price"  class="form-control purchase2 price invalideData" id="price">
                      </div>
                      <div class="form-group col-12 quantity">
                        <label for="inputPassword4">الكميه</label>
                        <input type="number" name="quantity"  class="form-control purchase3 invalideData " id="quantity">
                      </div>
                    </div>
                    <button type="submit" class="primary-btn btn-hover btn-curved" onclick="sendPurchaseRequest()">ارسال طلب</button>
                </div>
            {{-- </form> --}}

            </div>

            {{-- <div class="car-sales_price-suggestion_center_step-2">
                <div class="alert alert-danger  my-2 rejected" id='notenough' style="display: none" role="alert">

                </div>
                <div class="car-sales_price-suggestion_center_step-2_price">
                    <input type="text" name="price" class="price" placeholder=" اقتراح سعر ">
                    <input type="text" name="quantity" class="quantity" style="text-align: center" placeholder="الكميه">
                </div>
                <div class="car-sales_price-suggestion_center_step-2_button">
                    <button class="primary-btn btn-hover btn-curved" onclick="sendPurchaseRequest()">اقتراح سعر</button>
                </div>
            </div> --}}
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
        var phoneNumberKeys = ['50','53','54','55','56','57','58','59'];

        setTimeout(function(){
                $('.buy_car').on('click',function(){
                car_id=$(this).prev()[0].innerHTML;
                quantity=$(this).prev().prev()[0].innerHTML;
                if(quantity==1)
                {
                    $('.quantity').css('display', 'none');
                }
                else{
                    $('.quantity').css('display', 'initial');
                }
                showPopUp();
            })
        },1000)

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


        function sendPurchaseRequest(){
            let purchaseURL="{{route('front.purchaserequests.car-sales-request')}}";
            let name=document.getElementById('inputEmail4');
            let phone=document.getElementById('inputPassword4');
            let price=document.getElementById('price').value;
            let purchasequantity=document.getElementById('quantity').value;
            let errors=[];
            let errorinput=[];
            let userPhone;
            let auth="{{Auth()->check() ? 'true' : 'false'}}";
            if(auth =='true')
            {
                userPhone="{{Auth()->user() !==null ? Auth()->user()->phone: '0' }}";
                name='sa';
                phone=userPhone;
            }
            else
            {
                name=name.value;
                phone=phone.value;
                userPhone=0;
            }
            if(name.length == 0)
            {
                errors.push('<p>الاسم مطلوب</p>');
                errorinput.push('purchase0');
            }
            let phoneNumberKey = `${phone[0]}${phone[1]}`;
            if(phone.replaceAll(' ','').length != 9 || !phoneNumberKeys.includes(phoneNumberKey))
            {
                errors.push('<p>يجب ان يكون رقم الهاتف سعودي</p>')
                errorinput.push('purchase1');

            }
            else if(phone.length == 0)
            {
                errors.push('<p>الرقم مطلوب</p>')
                errorinput.push('purchase1');
            }
            if(price.length == 0)
            {
                errors.push('<p>السعر مطلوب</p>')
                errorinput.push('purchase2');

            }
            if(purchasequantity.length == 0)
            {
                errors.push('<p>الكميه مطلوبه</p>');
                errorinput.push('purchase3');
            }
            $('.invalideData').css('border','1px solid #ced4da');
            let errorHtml=errors.toString();
            errorHtml=errorHtml.replaceAll(',','');
            let errordiv=document.getElementById('invalideCradentilas');
            errordiv.innerHTML=errorHtml;
            errordiv.style.display='block';
            errorinput.forEach(el =>{
                document.getElementsByClassName(el)[0].style.border= "1px solid red";
            })
            if(!errorHtml.length)
            {
                if(parseInt(purchasequantity)  >= parseInt(quantity) )
                {
                    errordiv.innerHTML='<p>هذه الكميه غير متوفره</p>';
                }else{
                    $.ajax({
                            type: 'post',
                            url: purchaseURL,
                            headers: {
                                "x-accept-language": "ar",
                                "X-CSRF-TOKEN": csrf_token,
                            },
                            data: {
                                'phone': userPhone,
                                'car_id': car_id,
                                'price': price,
                                'name': name,
                                'phone': phone,
                                'quantity': purchasequantity,
                            },
                            success: function(data, status) {
                                console.log(data);
                                if(data['purchase']=='done')
                                {
                                    MoveStep(3);
                                }
                            }

                    });
                }
            }


        }

        function showPopUp(){
            $('.car-sales_price-suggestion').toggleClass('price-suggestion-s');
            $('.car-sales_price-suggestion').toggleClass('price-suggestion-h');
            $('.car-sales_price-suggestion').css('display','block');
            MoveStep(1);
        }
    </script>
    @endpush
            </x-front-layout>
