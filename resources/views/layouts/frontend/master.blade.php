<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->

<html dir="{{ Locales::getDir() }}" lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ $title ? $title .' | '. app_name() : app_name() }}</title> --}}

    {!! SEO::generate() !!}
    {{-- <meta name="title" content="أبو دياب-لتأجير-السيارات "> --}}
    {{-- <meta name="description" content="ابحث عن سيارتك المفضلة بأحدث وافخم اسطول سيارات أبو ذياب 2021  "> --}}
    {{-- <meta name="keywords" content="تأجير سيارات,ايجار سيارات ,ايجار سيارات حديثة ,أبوذياب ,مكتب تاجير سيارات ,مكاتب تاجير سيارات ,تطبيق تأجير سيارات ,تأجير سيارات الرياض ,تأجير سيارات جدة ,تأجير سيارات الدمام ,تأجير سيارات أبها ,تأجير سيارات خميس مشيط" /> --}}
    @include('layouts.frontend.include.links')


    @yield('styles')
    @stack('styles')


    <!-- Hotjar Tracking Code for https://abudiyab-soft.com/ -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:2378982,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LS5GTRXFWF"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-LS5GTRXFWF');
    </script>


    <livewire:styles />

    {{-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> --}}
</head>
<body style="overflow: hidden;">
<div id="vue_app">

    {{-- @php
        dd($errors);
    @endphp --}}

    <!-- ------------START-----loader------------ -->
    <div class="loader" id="loader">
        <div class="lds-facebook">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ------------END-------loader------------ -->
        <!--================
            main Navbar
        =================-->
      @include('layouts.frontend.include.navbar')
        <!--================
            main Navbar
        =================-->


        <div class="container-fluid px-0">

            {{ $slot }}

        </div>


        <div class="fleet-popup" style="display: none">
            <div class="fleet-popup_center">

                <span class="fleet-popup_center_cancel" onclick="cancel()">
                    <i class="fas fa-times"></i>
                </span>

                <div class="fleet-popup_center_text">
                    <h2><span> أو مشابهة - ماذا تعني؟ </span></h2>
                    <div class="fleet-popup_center_text_definition popup_text" style="font-size: 1.3em;font-weight: 600">
                        تلتزم شركة ابو ذياب بتوفير نفس الموديل وسنة الصنع التي قمت باختيارها وقت الحجز و في حال عدم توفر السيارة المختارة عند تنفيذ الحجز تلتزم ابو ذياب بتوفير سيارة من نفس الفئة ونفس سنة الصنع او سنة صنع اعلى، وفي حال عدم توفر سيارة من نفس الفئة يتم الترقية لفئة اعلى بدون اي تكاليف أضافية
                    </div>
                    <ul id="bNames"  style="display: none">
                    </ul>
                    <button class="primary-btn btn-hover btn-curved agreetosimilar" onclick="cancel()">موافق</button>
                </div>
            </div>
        </div>

        <!--================
            social media
        =================-->



        {{-- <span><i class="fas fa-less-than"></i></span> --}}

        <i class="fas fa-phone-alt d-md-none" id="social-media-links-toggeler" style="cursor: pointer;position: fixed;top: 30px;z-index:200; left: 10px;color: white;border-radius: 50%;background-color: #b52122db;font-size: 21px;padding: 12px;"></i>


        <div class="social-media-links d-none d-md-block">
            <a href="/aboutus" ><i class="flaticon-information" style="font-size: 25px;"></i></a>
            <a href="https://wa.me/00966557492493" target="_blank"><i class="fab fa-whatsapp"></i></a>
            <a href="tel:996920026600"><i class="fas fa-phone-alt"></i></a>
        </div>

        <!--=========
        - Login and Register -
        ===========-->

        <div class="log-in" style="background: url({{asset('front/img/background.jpg')}})">{{-- asset('front/img/background.jpg') --}}
            <div class="log-in_top">
                <i>+</i>
                <a href="{{route('front.main')}}"><img src="{{optional(Settings::instance('logo'))->getFirstMediaUrl('logo')}}"></a>
            </div>
            <div class="log-in_center">
                {{-- <a class="log-in_center_logo" href="{{route('front.main')}}"><img src="{{optional(Settings::instance('logo'))->getFirstMediaUrl('logo')}}"></a> --}}
                <form action="{{ route('login') }}" method="post" class="log-in_center_form">
                    @csrf
                    <h2>تسجيل الدخول</h2>
                    <div class="log-in_center_form_msg"></div>
                    <div class="log-in_center_form_email">
                        <label>البريد الالكتروني<span><a onclick="logInOrRegister('register')">إنشاء حساب جديد</a></span></label>
                        <input type="email" name="email" class="form-control" value="{{old('email')}}" id="loginEmail" required>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="log-in_center_form_password">
                        <label>كلمة السر<span><i class="far fa-eye"></i> اظهار</span></label>
                        <input type="password" name="password" class="form-control" id="loginPassword" required>
                        <div class="invalid-feedback"></div>
                    </div>
                    <button type="submit" class="primary-btn btn-hover btn-curved">تسجيل الدخول</button>
                    <p class="log-in_center_form_forgot-password" data-step="1">نسيت كلمة السر؟ </p>
                    <p class="primary-btn btn-hover btn-curved log-in_center_form_btn twitter">Twitter <i class="fab fa-twitter"></i></p>
                    <div class="row mb-6 mx-0">
                        <div class="col-6 px-1 mb-0">
                            <p class="primary-btn btn-hover btn-curved log-in_center_form_btn  google"><span class="g">G</span><span class="o1">o</span><span class="o2">o</span><span class="g">g</span><span class="l">l</span><span class="e">e</span> <img src="https://www.bryan-myers.com/images/1x1/google-llc.png" alt=""></p>
                        </div>
                        <div class="col-6 px-1 mb-0">
                            <p class="primary-btn btn-hover btn-curved log-in_center_form_btn col-6 apple">Apple id <i class="fab fa-apple"></i></p>
                        </div>
                    </div>
                    <hr>
                    <p class="primary-btn btn-hover btn-curved log-in_center_form_old-user btn-old-user" data-step="1">عميل معرف من قبل</p>
                </form>


                <div class="forgot-password">
                    <div class="form-loader">
                        <div class="loader"></div>
                    </div>
                    <form action="{{route('api.password.forget')}}" method="post" id="forgot-password_step-1" class="log-in_center_form forgot-password_step-1">
                        @csrf
                        <h2>برجاء إدخل بريدك الإلكتروني</h2>
                        <p>سيتم إرسال رمز تأكيد الي بريدك الإلكتروني المسجل</p>
                        <div>
                            <label>البريد الالكتروني</span></label>
                            <input type="text" name="username" class="form-control email" id="restpasswordemail" autocomplete="off">
                            <div class="invalid-feedback"></div>
                        </div>
                        <button type="submit" class="primary-btn btn-hover btn-curved">أرسال الرمز</button>
                        <a class="primary-btn btn-hover btn-curved forgotPasswordRetreat" data-step="1">العودة إلى الخلف</a>
                    </form>

                    <form action="{{route('api.password.code')}}" method="post" class="log-in_center_form forgot-password_step-2">
                        @csrf
                        <h2>تم إرسال رمز إلى بريدك الإلكتروني</h2>
                        <p></p>
                        <div>
                            <label>إدخال كود</label>
                            <input type="number" name="code" class="form-control codeNumber" placeholder="كود" autocomplete="off">
                            <div class="invalid-feedback"></div>
                            <input type="hidden" name="username" id="usernameByCode">
                        </div>
                        <button type="submit" class="primary-btn btn-hover btn-curved" data-step="3" >تحقق</button>
                        <a class="primary-btn btn-hover btn-curved forgotPasswordRetreat" data-step="2">العودة إلى الخلف</a>
                    </form>

                    <form action="{{route('api.password.reset')}}" method="post" class="log-in_center_form forgot-password_step-3">
                        @csrf
                        <h2>كلمة السر الجديدة</h2>
                        <div>
                            <label>كلمة السر<span onclick="togglePassword('.forgot-password_step-3 .form-control', this, [`<i class='far fa-eye-slash'></i> اخفاء`, `<i class='far fa-eye'></i> اظهار`]);" style="cursor: pointer;"><i class="far fa-eye"></i> اظهار</span></label>
                            <input type="password" name="password" class="form-control password" autocomplete="off">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div>
                            <input type="hidden" name="token" id="tokenByReset">
                            <label>تأكيد كلمة السر</span></label>
                            <input type="password" name="password_confirmation" class="form-control confirmPassword" autocomplete="off">
                            <div class="invalid-feedback"></div>
                        </div>
                        <button type="submit" class="primary-btn btn-hover btn-curved" onclick="forgotPassword(4);">قم بتغيير كلمة المرور</button>
                        <a class="primary-btn btn-hover btn-curved forgotPasswordRetreat" data-step="3">العودة إلى الخلف</a>
                    </form>

                </div>


                <div class="old-user">
                    <div class="form-loader">
                        <div class="loader"></div>
                    </div>

                    <form action="{{route('api.customer.forget')}}" method="post" class="log-in_center_form old-user_step-1">
                        @csrf
                        <h2>الرجاء إدخال رقم الجوال</h2>
                        <p>سيتم إرسال رمز تأكيد على الجوال المسجل</p>
                        <div class="registerMobileNumber number">
                            <label>رقم الجوال</label>
                            <input type="text" name="phone_number" class="form-control phone-number" autocomplete="off" oninput="numberDesign(this)" maxlength="11">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="number">
                            <label>رقم الهوية</label>
                            <input type="number" name="id_number" class="form-control id-number" autocomplete="off">
                            <div class="invalid-feedback"></div>
                        </div>
                        <button class="primary-btn btn-hover btn-curved btn-old-user" data-step="2">أرسال الرمز</button>
                        <a class="primary-btn btn-hover btn-curved btn-old-user-close" data-step="1">العودة إلى الخلف</a>
                    </form>

                    <form action="{{route('api.customer.code')}}" method="post" class="log-in_center_form old-user_step-2">
                        @csrf
                        <h2>تم إرسال الرمز إلى رقم جوالك</h2>
                        <p></p>
                        <div class="number">
                            <label>ادخال كود</label>
                            <input type="number" name="code" class="form-control codeNumber" placeholder="كود" autocomplete="off">
                            <div class="invalid-feedback"></div>
                            <input type="hidden" name="username" id="customerUsernameByCode">
                        </div>
                        <button class="primary-btn btn-hover btn-curved btn-old-user" data-step="3">تأكيد الكود</button>
                        <a class="primary-btn btn-hover btn-curved btn-old-user-close" data-step="2">العودة إلى الخلف</a>
                    </form>

                    <form action="{{route('api.customer.reset')}}" method="post" class="log-in_center_form old-user_step-3">
                        @csrf
                        <h2>لإتمام التسجيل</h2>
                        <h5>يرجى ملء البيانات التالية</h5>
                        <div>
                            <label>البريد الالكتروني</label>
                            <input type="email" name="email" class="form-control email" autocomplete="off">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div>
                            <label>كلمة السر الجديدة <span onclick="togglePassword('.old-user_step-3 .show-password', this, [`<i class='far fa-eye-slash'></i> اخفاء`, `<i class='far fa-eye'></i> اظهار`]);" style="cursor: pointer;"><i class="far fa-eye"></i> اظهار</span></label>
                            <input type="password" name="password" class="form-control show-password password" autocomplete="off">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div>
                            <input type="hidden" name="token" id="customerTokenByReset">
                            <label>تأكيد كلمة السر الجديدة</label>
                            <input type="password" name="password_confirmation" class="form-control show-password confirm-password" autocomplete="off">
                            <div class="invalid-feedback"></div>
                        </div>
                        <button class="primary-btn btn-hover btn-curved btn-old-user" data-step="4">موافق</button>
                        <a class="primary-btn btn-hover btn-curved btn-old-user-close" data-step="3">العودة إلى الخلف</a>
                    </form>

                </div>


            </div>
        </div>
        <div class="modal " id="BookingModel" tabindex="-1" aria-labelledby="BookingModelLabel" aria-hidden="true">
            <livewire:booking-model/>
        </div>


        <div class="register" style="background: url({{asset('front/img/background.jpg')}})">
            <div class="register_top">
                <i>+</i>
                <a href="{{route('front.main')}}"><img src="https://abudiyab-soft.com/storage/181/logo-edited-png24.png"></a>
            </div>
            <div class="register_center">
                <form action="{{ route('register') }}" method="post" enctype="multipart/form-data" class="register_center_form">
                    @csrf
                    <div class="form-loader">
                        <div class="loader"></div>
                    </div>
                    <h2>إنشاء حساب جديد</h2>
                    <div class="register_center_form_inputs">
                        <div class="register_center_form_inputs_input">
                            <label>الاسم بالكامل</label>
                            <input type="text" name="username" value="{{old('username')}}" class="form-control" id="registerName">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="register_center_form_inputs_input">
                            <label>البريد الالكتروني</label>
                            <input type="email" name="email" value="{{old('email')}}"  class="form-control" id="registerEmail">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="register_center_form_inputs_input registerMobileNumber">
                            <label>رقم الجوال</label>
                            <input type="text" name="phone" value="{{old('phone')}}" class="form-control" id="registerMobileNumber" oninput="numberDesign(this);" max="11">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="register_center_form_inputs_input password One">
                            <label>كلمة السر<span><i class="far fa-eye"></i> اظهار</span></label>
                            <input type="password" name="password" class="form-control" id="registerPassword">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="register_center_form_inputs_input password Two">
                            <label>تأكيد كلمة السر</label>
                            <input type="password" name="password_confirmation" class="form-control" id="registerConfirmPassword">
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="wrapper" id="identityFace">
                            <div class="image">
                                <img src="" alt="">
                            </div>
                            <div class="content">
                                <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                                <div class="text">صوره الهويه</div>
                            </div>
                            <div class="cancel-btn"><i class="fas fa-times"></i></div>
                            <div class="file-name">صوره الهويه</div>
                            <p class="image-projection"></p>
                            <div class="div-hidden"></div>
                        </div>
                        <input type="file" hidden name="identityFace" id="input-identityFace">

                        <div class="wrapper" id="identityBack">
                            <div class="image">
                                <img src="" alt="">
                            </div>
                            <div class="content">
                                <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                                <div class="text">صوره رخصه القياده</div>
                            </div>
                            <div class="cancel-btn"><i class="fas fa-times"></i></div>
                            <div class="file-name">صوره رخصه القياده</div>
                            <p class="image-projection"></p>
                            <div class="div-hidden"></div>
                        </div>
                        <input type="file" hidden name="identityBack" id="input-identityBack">

                        <div class="wrapper" id="licenceFace">
                            <div class="image">
                                <img src="" alt="">
                            </div>
                            <div class="content">
                                <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                                <div class="text">صوره بطاقه العمل</div>
                            </div>
                            <div class="cancel-btn"><i class="fas fa-times"></i></div>
                            <div class="file-name">صوره بطاقه العمل</div>
                            <p class="image-projection"></p>
                            <div class="div-hidden"></div>
                        </div>
                        <input type="file" hidden name="licenceFace" id="input-licenceFace">

                        <div class="wrapper" id="licenceBack">
                            <div class="image">
                                <img src="" alt="">
                            </div>
                            <div class="content">
                                <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                                <div class="text">صوره اخرى</div>
                            </div>
                            <div class="cancel-btn"><i class="fas fa-times"></i></div>
                            <div class="file-name">صوره اخرى</div>
                            <p class="image-projection"></p>
                            <div class="div-hidden"></div>
                        </div>
                        <input type="file" hidden name="licenceBack" id="input-licenceBack">

                    </div>
                    <div class="row">
                        <div class="primary-btn btn-hover btn-curved" onclick="logInOrRegister('login')">العودة إلى الخلف</div>
                        <button id="formSumbit" class="primary-btn btn-hover btn-curved">تأكيد البيانات</button>
                    </div>
                </form>
            </div>
        </div>


        @push('js')
            <script>
                let togglePassword = (input, div, content) => {
                    inputs = document.querySelectorAll(input);
                    inputs.forEach(input => {
                        if (input.type === 'password') {
                            if (div != undefined && content[0] != undefined) {
                                div.innerHTML = content[0];
                            }

                            input.type = 'text';
                        }
                        else{
                            if (div != undefined && content[1] != undefined) {
                                div.innerHTML = content[1];
                            }

                            input.type = 'password';
                        }
                    });
                }
                // logIn
                let logIn = document.querySelector('#vue_app .log-in'),
                    btnHideLogIn = document.querySelector('.log-in_top i'),
                    btnShowLogIn = document.querySelector('#myFormtoggeler'),
                    btnShowLogInModal = document.querySelector('#loginModalLabel'),
                    btnShowPasswordLogIn = document.querySelector('.log-in_center_form_password label span'),
                    inputPasswordLogIn = document.querySelector('.log-in_center_form_password input'),
                    ShowPasswordLogIn = false,
                    togglePasswordLogIn = () => {
                        if (ShowPasswordLogIn === false) {
                            btnShowPasswordLogIn.innerHTML = '<i class="far fa-eye-slash"></i> اخفاء';
                            inputPasswordLogIn.type = 'text';
                            ShowPasswordLogIn = true;
                        }
                        else{
                            btnShowPasswordLogIn.innerHTML = '<i class="far fa-eye"></i> اظهار';
                            inputPasswordLogIn.type = 'password';
                            ShowPasswordLogIn = false;
                        }
                    }
                btnShowPasswordLogIn.addEventListener('click', togglePasswordLogIn);
                btnShowLogIn.addEventListener('click', () => {logIn.style.display = 'block'; document.body.style.overflow='hidden'});
                btnHideLogIn.addEventListener('click', () => {
                    logIn.style.display = 'none';
                    document.body.style.overflow='auto';
                    document.querySelectorAll('.log-in_center_form').forEach(form => {
                        form.style.display = 'none';
                    });
                    document.querySelector('.log-in_center_form').style.display = 'block';
                });

                // register
                let register = document.querySelector('#vue_app .register'),
                    btnShowRegister = document.querySelector('.log-in_center_form_email label span a'),
                    btnHideRegister = document.querySelector('.register_top i'),
                    btnShowPasswordRegister = document.querySelector('.register_center_form_inputs_input.password label span'),
                    inputPasswordRegisterOne = document.querySelector('.register_center_form_inputs_input.password.One input'),
                    inputPasswordRegisterTwo = document.querySelector('.register_center_form_inputs_input.password.Two input'),
                    ShowPasswordRegister = false,
                    togglePasswordRegister = () => {
                        if (ShowPasswordRegister === false) {
                            btnShowPasswordRegister.innerHTML = '<i class="far fa-eye-slash"></i> اخفاء';
                            inputPasswordRegisterOne.type = 'text';
                            inputPasswordRegisterTwo.type = 'text';
                            ShowPasswordRegister = true;
                        }
                        else{
                            btnShowPasswordRegister.innerHTML = '<i class="far fa-eye"></i> اظهار';
                            inputPasswordRegisterOne.type = 'password';
                            inputPasswordRegisterTwo.type = 'password';
                            ShowPasswordRegister = false;
                        }
                    }
                if (document.location['hash'] == '#register') {
                    window.onload = () => document.body.style.overflow = 'hidden';
                    register.style.display = 'block';
                    logIn.style.display = 'none';
                }
                if (document.location['hash'] == '#login') {
                    window.onload = () => document.body.style.overflow = 'hidden';
                    logIn.style.display = 'block';
                    register.style.display = 'none';
                }
                btnShowPasswordRegister.addEventListener('click', togglePasswordRegister);
                btnShowRegister.addEventListener('click', () => register.style.display = 'block');
                btnShowRegister.addEventListener('click', () => logIn.style.display = 'none');
                btnHideRegister.addEventListener('click', () => register.style.display = 'none');
                function logInOrRegister(page) {
                    document.body.style.overflow='hidden';
                    let register = document.querySelector('#vue_app .register'),
                        logIn = document.querySelector('#vue_app .log-in');
                    if (page == 'login') {
                        logIn.style.display = 'block';
                        register.style.display = 'none';
                    }
                    if (page == 'register') {
                        register.style.display = 'block';
                        logIn.style.display = 'none';
                    }
                }

                let validExtensions = ['image/jpeg','image/jpg','image/png'];
                let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
                let identityFace = false,
                    identityBack = false,
                    licenceFace = false,
                    licenceBack = false;


                function bringPicture(div, click){
                    let fileName = div.children[3];
                    let defaultBtn = div.nextElementSibling;
                    let cancelBtn = div.children[2];
                    let img = div.children[0].children[0];
                    if (click == 'I') {
                        img.src = '';
                        img.style.display = 'none';
                        cancelBtn.style.display = 'none';
                        fileName.style.display = 'none';
                        div.style.border = '2px dashed #c2cdda';
                        defaultBtn.value = null;
                        if (defaultBtn.id == 'input-identityFace') {identityFace = false}
                        if (defaultBtn.id == 'input-identityBack') {identityBack = false}
                        if (defaultBtn.id == 'input-licenceFace') {licenceFace = false}
                        if (defaultBtn.id == 'input-licenceBack') {licenceBack = false}
                    }
                    else{
                        defaultBtn.click();
                    }
                    defaultBtn.addEventListener("change", function(){
                        const file = this.files[0];
                        if(file && validExtensions.includes(file.type)){
                            const reader = new FileReader();
                            reader.onload = function(){
                                const result = reader.result;
                                img.src = result;
                                img.style.display = 'block';
                                cancelBtn.style.display = 'block';
                                fileName.style.display = 'block';
                                div.style.border = 'none';
                                if (defaultBtn.id == 'input-identityFace') {identityFace = true}
                                if (defaultBtn.id == 'input-identityBack') {identityBack = true}
                                if (defaultBtn.id == 'input-licenceFace') {licenceFace = true}
                                if (defaultBtn.id == 'input-licenceBack') {licenceBack = true}
                            }
                            reader.readAsDataURL(file);
                        }
                        if(this.value && validExtensions.includes(file.type)) {
                            let valueStore = this.value.match(regExp);
                            fileName.textContent = valueStore;
                        }
                    });
                }
                let errors = false;
                let showInputError = (input, errorText, wanted = true) => {
                    input.classList.add('is-invalid');
                    input.classList.remove('is-valid');
                    input.focus();
                    input.nextElementSibling.innerHTML = errorText;
                    if (input.value.length == 0 && wanted == true) {
                        input.nextElementSibling.innerHTML = 'هذا الحقل مطلوب';
                    }
                    errors = true;
                }
                function identifyElement(divId) {
                    let div = document.getElementById(divId);
                    let img = div.children[0].children[0];
                    let cancelBtn = div.children[2];
                    let fileName = div.children[3];
                    let imageProjection = div.children[4];
                    let divHidden = div.children[5];
                    div.addEventListener('click', function(n){
                        bringPicture(this, n.target.nodeName);
                    });
                    divHidden.addEventListener('dragover', () => {
                        event.preventDefault();
                        div.classList.add('image-projection');
                        imageProjection.classList.add('show');
                        imageProjection.classList.remove('hide');
                    });
                    divHidden.addEventListener('dragleave', () => {
                        div.classList.remove('image-projection');
                        imageProjection.classList.remove('show');
                        imageProjection.classList.add('hide');
                    });
                    divHidden.addEventListener('drop', (event) => {
                        event.preventDefault();
                        const file = event.dataTransfer.files[0];
                        div.classList.remove('image-projection');
                        imageProjection.classList.remove('show');
                        imageProjection.classList.add('hide');
                        if(file && validExtensions.includes(file.type)){
                            const reader = new FileReader();
                            reader.onload = function(){
                                const result = reader.result;
                                img.src = result;
                                img.style.display = 'block';
                                cancelBtn.style.display = 'block';
                                fileName.style.display = 'block';
                                div.style.border = 'none';
                                div.classList.remove('image-projection');
                                imageProjection.classList.remove('show');
                                imageProjection.classList.add('hide');
                            }
                            reader.readAsDataURL(file);
                        }
                        if(file.name && validExtensions.includes(file.type)) {
                            let valueStore = file.name.match(regExp);
                            fileName.textContent = valueStore;
                        }
                    });
                }
                identifyElement('identityFace');
                identifyElement('identityBack');
                identifyElement('licenceFace');
                identifyElement('licenceBack');

                let valueMobileNumber = '';
                let previousLength = 0;
                var phoneNumberKeys = ['50','53','54','55','56','57','58','59'];
                let registerHasError=`{{isset($errors) ? $errors->register->any() : ''}}`;
                let logInHasError=`{{isset($errors) ? $errors->login->any() : ''}}`;
                let allRegisterError=`{{isset($errors) ? $errors : ''}}`;
                let emailHasError=`{{isset($errors) &&  $errors->login->has('email')  ? $errors->login->first('email') : ''}}`;
                let emailRegisterHasError=`{{isset($errors) &&  $errors->register->has('email')  ? $errors->register->first('email') : ''}}`;
                console.log(allRegisterError);
                let phoneHasError=`{{isset($errors) && $errors->register->has('phone')  ? $errors->register->first('phone') : ''}}`;
                console.log('kamal');
                if(logInHasError)
                {
                    console.log(emailHasError);
                    logIn.style.display = 'block';
                    if (emailHasError) {
                        showInputError(document.getElementById('loginEmail'), emailHasError, false);
                    }
                }
                if(registerHasError)
                {
                    console.log('errorRegister');
                    register.style.display = 'block';
                    if (emailRegisterHasError) {
                        showInputError(document.getElementById('registerEmail'), emailRegisterHasError, false);
                    }
                    if (phoneHasError) {
                        showInputError(document.getElementById('registerMobileNumber'), phoneHasError, false);
                    }
                }
                let numberDesign = (input) => {
                    let value = input.value.match(/[0-9\ ]+$/);
                    if (value === null && input.value != '') {
                        input.value = valueMobileNumber;
                    }
                    else{
                        valueMobileNumber = input.value;
                        let currentLength = input.value.length;
                        if(currentLength > previousLength)
                        {
                            if(valueMobileNumber.replaceAll(' ','').length%2 == 0 && valueMobileNumber.length <= 3)
                            {
                                input.value += ' ';
                            }
                            if(valueMobileNumber.replaceAll(' ','').length%5 == 0 && valueMobileNumber.length <= 7)
                            {
                                input.value += ' ';
                            }

                        }
                        previousLength = currentLength;
                    }
                }

                let checkData = () => {
                    let registerName = document.getElementById('registerName'),
                        registerEmail = document.getElementById('registerEmail'),
                        registerMobileNumber = document.getElementById('registerMobileNumber'),
                        registerPassword = document.getElementById('registerPassword'),
                        registerConfirmPassword = document.getElementById('registerConfirmPassword');

                    errors = false;
                    registerName.classList.remove('is-invalid');
                    registerMobileNumber.classList.remove('is-invalid');
                    document.querySelector('.registerMobileNumber').classList.remove('error');
                    registerEmail.classList.remove('is-invalid');
                    registerPassword.classList.remove('is-invalid');
                    registerConfirmPassword.classList.remove('is-invalid');

                    // Name
                    if (registerName.value.length < 4 || registerName.value.length > 24) {
                        showInputError(registerName, 'يجب أن يتكون الاسم من 4 أحرف على الأقل و لا يزيد عن 24 حرفًا');
                    }

                    // Email
                    let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
                    if (registerEmail.value.match(pattern) === null) {
                        showInputError(registerEmail, 'عذرا ، البريد الالكتروني هذا غير صحيح');
                    }

                    // Mobile Number
                    let phoneNumberKey = `${registerMobileNumber.value[0]}${registerMobileNumber.value[1]}`;
                    if (registerMobileNumber.value.replaceAll(' ','').length != 9 || !phoneNumberKeys.includes(phoneNumberKey)) {
                        showInputError(registerMobileNumber, 'عذرا ، رقم الهاتف هذه غير صحيح');
                        document.querySelector('.registerMobileNumber').classList.add('error');
                    }

                    // Password
                    if (registerPassword.value.length < 8) {
                        showInputError(registerPassword, 'عذرًا ، لكن يجب أن تكون كلمة المرور 8 على الأقل');
                    }
                    else if (registerConfirmPassword.value != registerPassword.value) {
                        showInputError(registerConfirmPassword, 'عذرا ، لكن كلمة المرور غير متطابقة');
                    }


                    if (identityFace === false) {
                        errors = true;
                        document.getElementById('identityFace').style.borderColor = '#dc3545';
                    }
                    if (identityBack === false) {
                        errors = true;
                        document.getElementById('identityBack').style.borderColor = '#dc3545';
                    }
                    if (licenceFace === false) {
                        errors = true;
                        document.getElementById('licenceFace').style.borderColor = '#dc3545';
                    }
                    if (licenceBack === false) {
                        errors = true;
                        document.getElementById('licenceBack').style.borderColor = '#dc3545';
                    }

                    if (errors === false) {
                        registerMobileNumber.value = registerMobileNumber.value.replaceAll(' ','');
                    }

                    return errors;
                }

                $("#formSumbit").click(function(e){
                    if (checkData()) {
                        e.preventDefault();
                    }
                    else{
                        document.querySelector('.register_center_form .form-loader').classList.add('show');
                    }
                });





            </script>
        @endpush

        <!--=========
        - Footer -
        ===========-->

        @include('layouts.frontend.include.footer')


        <!-- General Components -->


    <img id="character" src="{{asset('images/character-1.png')}}" class="d-none d-md-block" alt="our character">
</div>

<div class="go-top">
    <i class="fas fa-chevron-up"></i>
    <i class="fas fa-chevron-up"></i>
</div>


    <script>
        let showOrderURL="{{route('api.orders.index')}}"
        let BookingModelURl = "{{route('front.bookingModel')}}";
        let csrf_token = "{{ csrf_token() }}";
        function openBookingModel(id) {
            console.log('openBookingModel : ' + id);

            $("#BookingModel").find('#bookingButton').attr("disabled", true);
            $('#BookingModel').modal('show');


            console.log($("#BookingModel").find('#bookingButton'));
            window.livewire.emit('setCarId',id);
            setTimeout(() => {
                $("#BookingModel").find('#bookingButton').attr("disabled", false);
            }, 2500);
        }
        function cancel(){
            $('.fleet-popup').css('display','none');
        }
        </script>

<script>
    window.addEventListener('sweetalert', event => {
        Swal.fire({
            title: event.detail.title,
            text: event.detail.text,
            icon: event.detail.type,
            confirmButtonText: 'موافق'
        })
    });


    window.addEventListener('fleetalert',function(data){
        $('.fleet-popup_center_text h2 span').text(data.detail.title);
        if(! Array.isArray(data.detail.body))
        {
            $('.popup_text').text(data.detail.body);
        }
        else{
            $('.popup_text').text('');

        }
        let branchesList=''
        if(Array.isArray(data.detail.body))
        {
            // branchesNames
            for (const name of data.detail.body) {
                branchesList += `<li style='font-size: 1.3em;font-weight: 600'>${name}</li>`;
                console.log(name);
            }
            console.log(branchesList);
            $('#bNames').html(branchesList);
            $('#bNames').css('display','block');
        }
        if(typeof data.detail.booking !== 'undefined')
        {
            $('.agreetosimilar').on('click',booking);
        }
        $('.fleet-popup').css('display','block');

        });
    </script>

    <script src="{{ asset('js/validation-all.js') }}"></script>
    <script src="{{ asset(mix('/js/frontend.js')) }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- ------------START-----SCRIPT-------LOAD------------ -->
    <script type="text/javascript">
        $(document).ready(function() {
            $(".lds-facebook").animate({opacity: "0"}, 1000, function() {
                $('#loader').addClass('active');
                $("#loader").animate({opacity: "0"}, 3000, function() {
                    $("#loader").remove();
                });
            });
            $('body').css('overflow','auto');
        });
    </script>
    <!-- ------------END------SCRIPT------LOAD------------ -->


@stack('scripts')
@isset($errors)
    @if ($errors->any())
    <script>
        toastr.error("{{trans('frontend.errors.des')}}", "{{trans('frontend.errors.title')}}")
    </script>
    @endif
@endisset


@foreach (session('flash_notification', collect())->toArray() as $message)

    @if ($message['overlay'])
        <script>
            toastr.success("{{$message['message']}}", "{{$message['title']}}")
        </script>
    @endif
@endforeach

{{ session()->forget('flash_notification') }}

<livewire:scripts />

@yield('js')
@stack('js')

<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
    window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
    d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
    _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
    $.src="https://v2.zopim.com/?4w6Wda0ZEFYjS7iS72Jru9QRa0ahJA0j";z.t=+new Date;$.
    type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
    </script>
    <!--End of Zendesk Chat Script-->
</body>
</html>
