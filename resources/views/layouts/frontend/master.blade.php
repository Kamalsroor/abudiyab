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

    <title>{{ $title ? $title .' | '. app_name() : app_name() }}</title>


    <meta name="title" content="أبو دياب-لتأجير-السيارات ">
    <meta name="description" content="ابحث عن سيارتك المفضلة بأحدث وافخم اسطول سيارات أبو ذياب 2021  ">
    <meta name="keywords" content="تأجير سيارات,ايجار سيارات ,ايجار سيارات حديثة ,أبوذياب ,مكتب تاجير سيارات ,مكاتب تاجير سيارات ,تطبيق تأجير سيارات ,تأجير سيارات الرياض ,تأجير سيارات جدة ,تأجير سيارات الدمام ,تأجير سيارات أبها ,تأجير سيارات خميس مشيط" />
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
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-K2ZC8C8');</script>
    <!-- End Google Tag Manager -->
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K2ZC8C8"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
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
            $('body').css('overflow','auto');
        });

    </script>
    <!-- ------------END------SCRIPT------LOAD------------ -->


@stack('scripts')

@if ($errors->any())
<script>
    toastr.error("{{trans('frontend.errors.des')}}", "{{trans('frontend.errors.title')}}")
</script>
@endif


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
