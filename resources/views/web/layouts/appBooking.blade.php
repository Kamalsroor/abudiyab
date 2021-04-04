<!DOCTYPE html>
<html>
<!-- Added by HTTrack --><meta
    http-equiv="content-type"
    content="text/html;charset=utf-8"
/><!-- /Added by HTTrack -->
<head>
    <link rel="stylesheet" href="{{asset('front/lnkse/botton_style.css')}}" />

    <link rel="alternate" href="CreateBooking.html" hreflang="ar" />

    <link rel="canonical" href="CreateBooking.html" />

    <title> - الاضفات | ابو ذياب</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/a29aea3929.js"></script>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
        crossorigin="anonymous"
    />

    <link
        href="https://fonts.googleapis.com/css?family=PT+Sans:400,700"
        rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Katibeh&display=swap" rel="stylesheet">

    <!-- <link href="{{asset('front/lnkse/bootstrapBundle.css')}}" rel="stylesheet" /> -->

    <link href="{{asset('front/Content/style_ar4.min4290.css?v=25')}}" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="{{asset('front/admin/files/assets/icon/icofont/css/icofont.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/admin/files/assets/icon/ion-icon/css/ionicons.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">

    <script src="{{asset('front/lnkse/jquery-3.5.1.min.js')}}"></script>

    <script src="../../Scripts/jquery.cookie-1.4.1.min.js"></script>

    <script src="../../Scripts/dropdowns-enhancement.min.js"></script>
     <link rel="stylesheet" href="{{asset('front/lnkse/botton_style.css')}}" />
     <link rel="stylesheet" href="{{asset('front/web/css/header.css')}}" />
     <link rel="stylesheet" href="{{asset('front/web/css/footer.css')}}" />
    <link rel="stylesheet" href="{{asset('front/logn/LogIn/css/util.css')}}" />
    <link rel="stylesheet" href="{{asset('front/logn/LogIn/css/main.css')}}" />
{{--    <script src="{{asset('front/lnkse/jquery-3.5.1.min.js')}}"></script>--}}
{{--    <link rel="stylesheet" href="{{asset('front/lnkse/bootstrab.css')}}">--}}
{{--    <script src="{{asset('front/lnkse/bootstrab.min.js')}}"></script>--}}
{{--    <script src="{{asset('front/lnkse/bootstrab.js')}}"></script>--}}
{{--    <link rel="stylesheet" href="{{asset('front/web/css/H2.css')}}" />--}}
{{--    <link rel="stylesheet" href="{{asset('front/web/css/H3.css')}}" />--}}
{{--    <link rel="stylesheet" href="{{asset('front/web/css/H4.css')}}">--}}

    <link rel="stylesheet" href="{{asset('front/web/css/logintest.css')}}">




    <link
        rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
        crossorigin="anonymous"
    />

    <script src="http://www.google.com/jsapi" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- End Google Tag Manager -->

    <script src="../../../c.oracleinfinity.io/acs/account/oyzfgo7m25/js/inpage/odc.js"></script>
</head>

<body dir="rtl">
<!-- start header -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<div class='insertLoginForm'></div>

<div class='bodycontainer'>  
<header class="headertop">
    <div>
        <h2 class="word"></h2>
        <ul>
            <li><a href="{{route('index')}}">الرئيسيه</a></li>
            


                <!-- <div class="user">
                    <img src="https://i.pinimg.com/originals/ff/a0/9a/ffa09aec412db3f54deadf1b3781de2a.png" alt="">
                    <p>احمد</p>
                </div> -->
            </li>
            <li>الاستعلام عن الحجز</li>
            @guest
            <li id='login' class="logOrReg"><a>تسجيل الدخول</a>
            @endguest
            @auth
            <li class="logOut"><a>welcome {{Auth::user()->name}}</a>
            {{--     <ul class='dropdown' aria-label='submenu'>
                    <li>الملف الشخصي</li>
                    <li id='logout'><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('تسجيل خروج') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form> </li>
                    <li>الحجوزات</li>
                    <li>تسجيل خروج</li>
                </ul>--}}
            </li>
            @endauth

        </ul>
        <div class="clear"></div>
    </div>
</header>

<script>
    // Wrap every letter in a span
 
    var words = ['ABU DIYAB'],
        part,
        i = 0,
        offset = 0,
        len = words.length,
        forwards = true,
        skip_count = 0,
        skip_delay = 3,
        speed = 300;
    var wordflick = function() {
        setInterval(function() {
            if (forwards) {
                if (offset >= words[i].length) {
                    ++skip_count;
                    if (skip_count == skip_delay) {
                        forwards = true;
                        offset=0;
                        skip_count = 0;
                    }
                }
            } else {
                if (offset == 0) {
                    forwards = true;
                    i++;
                    offset = 0;
                    if (i >= len) {
                        i = 0;
                    }
                }
            }
            part = words[i].substr(0, offset);
            if (skip_count == 0) {
                if (forwards) {
                    offset++;
                } else {
                    offset--;
                }
            }
            $('.word').text(part);
        }, speed);
    };

    wordflick();
    
</script>

<!-- end header -->
@yield('content')

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />

<style>
    footer {
        height: 950px !important;
        width: 1933px !important;
        background-image: url({{asset('front/img/ffooter-web2.png')}}) !important;
    }
    /*     
    img {
        width: 150px;
        height: 100px;
    } */
    
    .foo_socialIcon {
        height: auto;
        width: 60%;
    }
    
    .foo_socialIcon td {
        text-align: center;
    }
    
    .foo_fab {
        font-size: 2em;
        color: white;
        transition: 0.5s;
        margin: 20px;
        cursor: pointer;
    }
    
    .foo_fab:hover {
        transform: scale(2);
    }
    
    .foo_contact-us {
        width: 400px;
        height: 60px;
        font-size: 1.5em;
        outline: none;
    }
    
    .foo_apps button {
        background: radial-gradient(#d63233, #3f0808) !important;
        width: 200px;
        height: 60px;
        color: white;
        font-size: 1.5em;
        cursor: pointer;
    }
    
    .foo_apps button:hover {
        background: radial-gradient(#f50707, #130606) !important;
    }
    
    .foo_map {
        width: 50%;
    }
    
    .foo_branchMap {
        height: 620px;
    }
    
    .foo_apps {
        height: 180px;
        width: 80%;
        margin: auto;
    }
    
    .foo_row {
        width: 50%;
    }
    
    .foo_table {
        width: 80%;
        margin: auto;
    }
    
    iframe.foo_iframe {
        margin-top: 35px;
        border-radius: 30px;
        margin-right: 34px;
    }
    
    .foo_center {
        width: 85%;
        margin: auto;
    }
    
    .foo_number {
        height: 100%;
        width: 100%;
        color: white;
        font-size: 5em;
        vertical-align: bottom;
    }
    .foo_number h1{
        margin: 0 92px;
        font-size: 1.3em;
    }
    footer *{
        direction: ltr !important;
    }
</style>
<footer>
    <table class="foo_table">
        <tbody>
            <tr class="foo_branchMap">
                <td class="foo_number">
                    <h1>920026600</h1>
                </td>
                <td class="foo_map">
                    <!-- 24.699533353597356, 46.715161105337266 -->
                    <iframe class="foo_iframe" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d34486.23781465423!2d46.71233010067552!3d24.695303498164268!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4c842f5512d0930a!2sAbudiyab%20Head%20Office!5e0!3m2!1sen!2seg!4v1615993500583!5m2!1sen!2seg" width="740" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </td>
            </tr>
            <tr class='foo_apps'>
                <td class="foo_row">
                    <div class="foo_center">
                        <a href=""><img src="{{asset('front/img/GOOG--APP.png')}}" alt=""></a>
                        <a href=""><img src="{{asset('front/img/APPLE-PNG.png')}}" alt=""></a>
                        <a href=""><img src="{{asset('front/img/HUWAEI-PNG.png')}}" alt=""></a>
                    </div>
                </td>
                <td class="foo_row">
                    <div class="foo_center">
                        <button>اشترك معنا</button>
                        <input type="text" class="foo_contact-us" placeholder="sample@gmail.com">
                    </div>
                </td>
            </tr>
            <tr class="foo_socialIcon">
                <td colspan='2'>
                    <a href="https://www.facebook.com/abudiyabsa"><i class="foo_fab fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/abudiyabsa"><i class="foo_fab fab fa-twitter"></i></a>
                    <a href="https://api.whatsapp.com/send?phone=00966557492493#xd_co_f=MjA3YTM5MmZkYzdkMDhjODcyMjE2MTIzNDczNDQ5MjQ=~"><i class="foo_fab fab fa-whatsapp"></i></a>
                    <a href="https://www.youtube.com/channel/UC3gtVL9XMxqGPXNB6B6s6NA?reload=9"><i class="foo_fab fab fa-youtube"></i></a>
                    <a href="https://www.instagram.com/abudiyabsa/"><i class="foo_fab fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/abu-diyab-rent-a-car/"><i class="foo_fab fab fa-linkedin-in"></i></a>
                </td>
            </tr>
            <tr style="color: #fff;text-align: center;">
                <td colspan='2'>
                    <h3>جميع الحقوق محفوظة لشركة <span href="index.php">أبو ذياب لتأجير السيارات</span> © 2021</h3>
                </td>
            </tr>
        </tbody>
    </table>

    </div>
</footer>
    <script src="{{asset('front/lnkse/H2.js')}}"></script>
    <script src="{{asset('front/lnkse/H3.js')}}"></script>
    <script src="{{asset('front/lnkse/login.js')}}"></script>
  </body>

</html>
