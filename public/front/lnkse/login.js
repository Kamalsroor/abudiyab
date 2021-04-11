$('#login').click(showLogin);

function showLogin() {
    $('.bodycontainer').css('opacity', '20%');
    let loginContainer = `
        <div class='log'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
            
            <div class="loginContainer">
            <i id='exit' class="far fa-times-circle"></i>
    
            <section class="auth-box shadow" id="app">
                <section class="login">
                    <section class="header">
                        <h2>تسجيل الدخول</h2>
                    </section>
                    <section class="body">
                        <form action="" method="post">
                            <label for="email">
                            <div class="w-100 text-right blue-color"><i class="far fa-envelope"></i></div>
                            <input type="text" id='email' name="email" placeholder="البريد الإلكتروني">
                            <div id='emailError'></div>
                        </label>
                            <label for="password">
                            <div class="w-100 text-right blue-color"><i class="fas fa-lock"></i></div>
                            <input type="password" id='password' name="password" placeholder="كلمه المرور">
                            <div id='passwordError'></div>
                        </label>
                        <div class='mt-10'>
                        <label class='rememberMe' id='rememberMe'>تذكرني
                            <input type='checkbox' id='rem'>
                        </label>
                        </div>
                            <label class="d-flex flex-column">
                            <a type="submit" class="blue login text-center userlogin">دخول</a>
                        </label>
                        <a href="" class="forget-password">
                        نسيت كلمه المرور؟                        </a>
                        </form>
                    </section>
                </section>
                <section class="register">
                    <section class="header">
                        <h2>إنشاء حساب</h2>
                    </section>
                    <section class="item-list">
                    </section>
                    <section class="body">
                        <form action='{{ route('register') }}' method="post" >
                            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                            <label for="name">
                            <div class="w-100 text-right pink-color"><i class="fas fa-user-alt"></i></div>
                            <input type="text" id="name" name='username'
                                   placeholder="الاسم بالكامل">
                                   <div class='registerError' id='registerNameError'></div>
                            </label>
                            <label for="registerEmail">
                            <div class="w-100 text-right pink-color"><i class="far fa-envelope"></i></div>
                            <input type="email" id="registerEmail" name='email'
                                   placeholder="البريد الإلكتروني">
                                   <div class='registerError' id='registerEmailError'></div>
    
                        </label>
                            <label for="post">
                            <div class="w-100 text-right pink-color"><i class="fas fa-phone"></i></div>
                            <input type="number" id="phone" name='phone'
                                   placeholder="رقم الجوال">
                                   <div class='registerError' id='registerPhoneError'></div>
                        </label>
                            <label for="password">
                            <div class="w-100 text-right pink-color"><i class="fas fa-lock"></i></div>
                            <input type="password" id="registerPassword" name='password'
                                   placeholder="كلمه السر">
                                   <div class='registerError' id='registerPasswordError'></div>
                        </label>
                            <label class="d-flex flex-column">
                            <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        </label>
                        </form>
                    </section>
                </section>
                <section class="box-color">
                    <h3 class="title">إنشاء حساب</h3>
                    <button type="button" class="register-btn pink text-center">حساب جديد</button>
                    <h3 class="title2">تسجيل الدخول</h3>
                    <button  class="login-btn blue text-center">دخول</button>
                </section>
            </section>
        </div>
        
        
        </div>
        <script src="../front/lnkse/logintest.js"></script>
        `;
    $('.insertLoginForm').html(loginContainer);

    $('.userlogin').click(loginValidation);
    // $('.startRegister').click(registerValidation);

    $('.insertLoginForm').css('opacity', '100%');


    exit();

}
let fromStepThree = 0;
let toStepFour = 0;
if (true) {
    $('.next-step').click(function(e) {
        let login = localStorage.getItem('login');
        if (login == 'true') {

        } else {
            e.preventDefault();
            toStepFour = 1;
            showLogin();
            if (fromStepThree == 1) {
                $('.next-step').trigger('click');
            }
        }
    })
}

function loginValidation(e) {
    e.preventDefault();
    let emailVal = document.getElementById('email').value;
    let passwordVal = document.getElementById('password').value;
    let errorNumber = 0;
    // let remember = document.getElementById('rememberMe').checked;
    if (emailVal == '') {
        $('#emailError').html('email is required');
        errorNumber = 1;
    } else {
        $('#emailError').html('');
        errorNumber = 0;
    }
    if (passwordVal == '') {
        $('#passwordError').html('password is required');
        errorNumber = 1;
    } else {
        errorNumber = 0;
    }
    if ((/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(emailVal))) {
        //valid email and password
        errorNumber = 0;
    } else {
        $('#emailError').html('invalid email');
        errorNumber = 1;
    }
    // if (/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/.test(passwordVal)) {
    //     // $('#passwordError').html('invalid password');
    //     $('#passwordError').html('');
    //     errorNumber = 0;
    // } else {
    //     $('#passwordError').html('invalid password');
    //     errorNumber = 1;
    // }
    if (errorNumber == 0) {
        $.ajax({
            type: 'get',
            url: '/login',
            data: {
                email: emailVal,
                password: passwordVal
            },
            success: function(data) {
                if (data[0] == 'correct') {
                    localStorage.setItem('login', 'true');

                    if (toStepFour == 1) {
                        fromStepThree = 1;
                    } else {
                        window.location.replace(window.location.href);
                    }
                }
            }
        });
    } else {
        console.log('failed');
    }
}

function exit() {
    $('#exit').on('click', dropLogin)
}

function dropLogin() {
    $('.log').remove();
    $('.bodycontainer').css('opacity', '100%');
}

function registerValidation() {

    let passwordVal = document.getElementById('registerPassword').value;
    let emailVal = document.getElementById('registerEmail').value;
    let phoneVal = document.getElementById('phone').value;
    let nameVal = document.getElementById('name').value;
    let errorNumber = 0;
    if (emailVal == '') {
        $('#registerEmailError').html('email is required');
        errorNumber++;
    } else {
        if ((/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(emailVal))) {
            $('#registerEmailError').html('');

        } else {
            $('#registerEmailError').html('invalid email');
            errorNumber++;
        }
    }
    if (passwordVal == '') {
        $('#registerPasswordError').html('password is required');
        errorNumber++;
    } else {
        if (/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/.test(passwordVal)) {
            $('#registerPasswordError').html('');
        } else {
            $('#registerPasswordError').html('invalid password');
            errorNumber++;
        }
    }
    if (phoneVal == '') {
        $('#registerPhoneError').html('phone number is required');
        errorNumber++;
    } else {
        if (/^[0-9]{10}$/.test(phoneVal)) {
            $('#registerPhoneError').html('');
        } else {
            $('#registerPhoneError').html('invalid phone number');
            errorNumber++;
        }
    }
    if (nameVal == '') {
        $('#registerNameError').html('name is required');
        errorNumber++;
    } else {
        $('#registerNameError').html('');
    }
    if (errorNumber == 0) {
        $.ajax({
            type: 'get',
            url: '/register',
            data: {
                email: emailVal,
                password: passwordVal,
                phone: phoneVal,
                name: nameVal
            },
            success: function(data) {
                console.log(data);
            }
        });
    }
}