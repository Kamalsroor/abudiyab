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

    <!-- ------------START-----loader------------ -->
    <div class="loader">
        <div class="loader_img">
            <img src="{{ asset('front/img/loader.gif') }}" alt="Loader..">
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
                <a href="{{route('front.main')}}"><img src="https://abudiyab-soft.com/storage/181/logo-edited-png24.png"></a>
            </div>
            <div class="log-in_center">
                {{-- <a class="log-in_center_logo" href="{{route('front.main')}}"><img src="{{optional(Settings::instance('logo'))->getFirstMediaUrl('logo')}}"></a> --}}
                <form action="{{ route('login') }}" method="post" class="log-in_center_form">
                    @csrf
                    <h2>تسجيل الدخول</h2>
                    <div class="log-in_center_form_email">
                        <label>البريد الاركتروني<span>احتاج الى حساب? <a onclick="logInOrRegister('register')">انشاء حساب</a></span></label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="log-in_center_form_password">
                        <label>كلمة السر<span><i class="far fa-eye"></i> اظهار</span></label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="primary-btn btn-hover btn-curved">تسجيل الدخول</button>
                    <a href="" class="log-in_center_form_forgot-password">نسيت كلمة السر? </a>
                </form>
            </div>
        </div>

        <div class="register" style="background: url({{asset('front/img/background.jpg')}})">
            <div class="register_top">
                <i>+</i>
                <a href="{{route('front.main')}}"><img class="ml-4 nav-logo" src="{{optional(Settings::instance('logo'))->getFirstMediaUrl('logo')}}" style="position: relative;top: 10px;left: 65px;width: 120px;"></a>
            </div>
            <div class="register_center">
                <form action="{{ route('register') }}" method="post" enctype="multipart/form-data" class="register_center_form">
                    @csrf
                    <h2>حساب جديد</h2>
                    <div class="register_center_form_inputs">
                        <div class="register_center_form_inputs_input">
                            <label>الاسم باكامل<span>لدي حساب بالفعل? <a onclick="logInOrRegister('login')">تسجيل الدخول</a></span></label>
                            <input type="text" name="username" class="form-control" id="registerName">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="register_center_form_inputs_input">
                            <label>البريد الاركتروني</label>
                            <input type="email" name="email" class="form-control" id="registerEmail">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="register_center_form_inputs_input registerMobileNumber">
                            <label>رقم الجوال</label>
                            <input type="text" name="phone" class="form-control" id="registerMobileNumber" oninput="numberDesign(this);" max="12">
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
                    <button id="formSumbit" class="primary-btn btn-hover btn-curved" >تأكيد البيانات</button>
                </form>
            </div>
        </div>


        @push('js')
            <script>
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
                btnHideLogIn.addEventListener('click', () => {logIn.style.display = 'none'; document.body.style.overflow='auto';});

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
                    document.body.style.overflow = 'hidden';
                    register.style.display = 'block';
                    logIn.style.display = 'none';
                }
                if (document.location['hash'] == '#login') {
                    document.body.style.overflow='hidden';
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
                let phoneNumberKeys = ['050','053','054','055','056','057','058','059'];
                let registerHasError=`{{$errors->any()}}`;
                let emailHasError=`{{$errors->has('email') ? $errors->first('email') : ''}}`;
                let phoneHasError=`{{$errors->has('phone') ? $errors->first('phone') : ''}}`;
                if(registerHasError)
                {
                    register.style.display = 'block';
                    if (emailHasError) {
                        showInputError(document.getElementById('registerEmail'), emailHasError, false);
                    }
                    if (phoneHasError) {
                        showInputError(document.getElementById('registerMobileNumber'), phoneHasError, false);
                    }
                }
                let numberDesign = (input) => {
                    let value = input.value.match(/[0-9\ ]+$/);
                    if (value === null && input.value != '' || input.value.length > 12) {
                        input.value = valueMobileNumber;
                    }
                    else{
                        valueMobileNumber = input.value;
                        let currentLength = input.value.length;
                        if(currentLength >previousLength)
                        {
                            if(valueMobileNumber.replaceAll(' ','').length%3 ==0)
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
                    let phoneNumberKey = `${registerMobileNumber.value[0]}${registerMobileNumber.value[1]}${registerMobileNumber.value[2]}`;
                    if (registerMobileNumber.value.replaceAll(' ','').length != 10 || !phoneNumberKeys.includes(phoneNumberKey)) {
                        showInputError(registerMobileNumber, 'عذرا ، رقم الهاتف هذه غير صحيح');
                        document.querySelector('.registerMobileNumber').classList.add('error');
                    }

                    // Password
                    if (registerPassword.value.length < 8) {
                        showInputError(registerPassword, 'عذرا ، لاكن يجب أن تكون كلمة المرور 8 على الأقل');
                    }
                    else if (registerConfirmPassword.value != registerPassword.value) {
                        showInputError(registerConfirmPassword, 'عذرا ، لاكن كلمة السر غير متطابقة');
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
                });

            </script>
        @endpush

        <!--=========
        - Footer -
        ===========-->

        @include('layouts.frontend.include.footer')


        <!-- General Components -->



<!-- REQUIRED SCRIPTS -->
<!-- Scripts -->


    {{-- <script src="{{asset('front/lnkse/jquery-3.5.1.min.js')}}"></script> --}}

{{--
    <script src="{{asset('front/lnkse/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('front/lnkse/bootstrap.js')}}"></script> --}}

    {{-- <script src="{{asset('front/lnkse/main.js')}}"></script> --}}
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
            window.livewire.emit('setCarId',id);
            console.log('modaaaaaaaaal');
            $('#BookingModel').modal('show');
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

    <script src="{{ asset(mix('/js/frontend.js')) }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- ------------START-----SCRIPT-------LOAD------------ -->
    <script type="text/javascript">
        $(document).ready(function() {
            $(".loader").animate({opacity: "0"}, 2000, function() {
                $(".loader").remove();
            });
            // $('body').css('overflow','auto');
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
