<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=utf-8">
<head>

    <link rel="icon" href="{{asset('front/admin/files/assets/images/favicon.ico')}}" type="image/x-icon"> 
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/admin/files/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Range slider css -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/admin/files/bower_components/seiyria-bootstrap-slider/dist/css/bootstrap-slider.css')}}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/admin/files/assets/icon/themify-icons/themify-icons.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/admin/files/assets/icon/icofont/css/icofont.css')}}">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/admin/files/assets/icon/feather/css/feather.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/admin/files/assets/css/style.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('front/admin/files/assets/css/jquery.mCustomScrollbar.css')}}">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="icon" href="{{asset('front/admin/files/assets/images/favicon.ico')}}" type="image/x-icon">

    <!-- Select 2 css -->
    <link rel="stylesheet" href="{{asset('front/admin/files/bower_components/select2/dist/css/select2.min.css')}}" />
    <link rel="stylesheet" href="{{asset('front/lnkse/botton_style.css')}}">
    <!-- Multi Select css -->
    <link rel="stylesheet" type="text/css"
          href="{{asset('front/admin/files/bower_components/bootstrap-multiselect/dist/css/bootstrap-multiselect.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('front/admin/files/bower_components/multiselect/css/multi-select.css')}}" />
    <!-- Style.css -->
    <!-- <link rel="stylesheet" type="text/css" href="../admin/files/assets/css/style.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="../admin/files/assets/css/jquery.mCustomScrollbar.css"> -->
    <link rel="stylesheet" href="{{asset('front/web/css/cssRtl.css')}}">

    <title>cars</title>

    <!-- <link rel="SHORTCUT ICON" href="https://www.ico.com/Content/Images/yelo-fav.ico"> -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">

    <link href="{{asset('front/lnkse/bootstrapBundle.css')}}" rel="stylesheet"/>

    <!-- <link rel="stylesheet" href="../web/css/header.css"> -->



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src='http://www.google.com/jsapi' type='text/javascript'></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>


    <link href="{{asset('front/lnkse/css.css')}}" rel="stylesheet"/>

    <script src="{{asset('front/lnkse/jquery.js')}}"></script>


    <script src='http://www.google.com/jsapi' type='text/javascript'></script>


    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-50355101-1', 'auto');
        ga('send', 'pageview');
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                '../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-547WHPJ');</script>
    <!-- End Google Tag Manager -->

    <style>
        .insertLogin {
            position: absolute;
            top:0;
            left:0;
        }
    </style>

</head>

<body dir="rtl" class="ar_body body-scroll">
<!-- Google Tag Manager (noscript) -->

<!-- End Google Tag Manager (noscript) -->
<div class='insertLogin' style='position: absolute;top:-10%;left:35%;z-index:99999;'>

</div>
<div class='carContainer'>
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('front/admin/files/assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/admin/files/assets/icon/themify-icons/themify-icons.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/admin/files/assets/icon/icofont/css/icofont.css')}}">

    <div class="dark">
    <header class="headertop">
        <div>
            <h2>ABU DIYAB</h2>
            <ul>
                <li ><a href="">تسجيل الدخول</a>
                    <!-- <div class="user">
                        <img src="https://i.pinimg.com/originals/ff/a0/9a/ffa09aec412db3f54deadf1b3781de2a.png" alt="">
                        <p>احمد</p>
                    </div> -->
                </li>
                <li>الاستعلام عن حجز</li>
                <li>
                    <a href="#">العربية</a>
                </li>
                <li class="nn-h">920026600</li>

            </ul>
            <div class="clear"></div>
        </div>
    </header>

    @yield('content')

    <script src="http://code.jquery.com/jquery-1.11.1.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/three.js/r68/three.min.js"></script>
    <!-- commented -->
    <!-- <script src="js/assets.js"></script> -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/PreloadJS/0.4.1/preloadjs.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>

</div>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
<!-- footer -->
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
    .foo_center a img:hover {
        transform: scale(1);
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
        margin-top: 20px;
        border-radius: 30px;
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
    footer{
        margin-top: 240vh;
    }
</style>

<footer style="direction: rtl !important;">
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


</footer>
<!-- end footer -->

<style type="text/css">
    .booking-car-details .h4 {
        color: #a91111;
        font-size: 25px;
        margin: 20px 0;
    }
    booking-car-details div {
        color: #332299;

    }
    td:hover img{
        animation: imgiD 20s infinite;
        transform: scale(3)!important;
    }
    @keyframes imgiD
    {
        0%
        {
            /*transform: rotateY(0deg);*/
            transform: scale(2);
        }

        50%
        {
            transform: rotateY(360deg);
        }

        100%
        {
            transform: rotateY(0deg);
        }
    }
</style>

</html>

<!-- Required Jqurey -->
<script type="text/javascript" src="{{asset('front/admin/files/bower_components/jquery/dist/')}}"></script>
<!--<script type="text/javascript" src="../admin/files/bower_components/jquery-ui/jquery-ui.min.js"></script>-->
<script type="text/javascript" src="{{asset('front/admin/files/bower_components/popper.js/dist/umd/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/admin/files/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{asset('front/admin/files/bower_components/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{asset('front/admin/files/bower_components/modernizr/modernizr.js')}}"></script>
<script type="text/javascript" src="{{asset('front/admin/files/bower_components/modernizr/feature-detects/css-scrollbars.js')}}"></script>
<!-- range slider js -->
<script type="text/javascript" src="{{asset('front/admin/files/bower_components/seiyria-bootstrap-slider/dist/bootstrap-slider.js')}}"></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="{{asset('front/admin/files/bower_components/i18next/i18next.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/admin/files/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/admin/files/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/admin/files/bower_components/jquery-i18next/jquery-i18next.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/admin/files/assets/js/script.js')}}"></script>
<script src="{{asset('front/admin/files/assets/js/pcoded.min.js')}}"></script>
<script src="{{asset('front/admin/files/assets/js/vartical-layout.min.js')}}"></script>
<script src="{{asset('front/admin/files/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!-- <link rel="stylesheet" href="../web/css/fleet.css"> -->
<link rel="stylesheet" href="{{asset('front/web/css/login.css')}}">
<!-- Custom js -->
<script type="text/javascript" src="{{asset('front/admin/files/assets/pages/range-slider.js')}}"></script>
<script type="text/javascript" src="{{asset('front/lnkse/login.js')}}"></script>



</body>
</html>
