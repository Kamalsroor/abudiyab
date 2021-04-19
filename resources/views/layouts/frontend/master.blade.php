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
    <livewire:styles />

    {{-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> --}}
</head>
<body style="overflow: hidden;">
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

        <!--================
            social media
        =================-->


        <div class="social-media-links">
            {{-- <span><i class="fas fa-less-than"></i></span> --}}
            <a href="/aboutus" target="_blank"><p>حولنا</p></a>
            <a href="#" target="_blank"><i class="fab fa-whatsapp"></i></a>
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

    <div class="modal fade" id="BookingModel" tabindex="-1" aria-labelledby="BookingModelLabel" aria-hidden="true">
    </div>




    <script>
        let BookingModelURl = "{{route('front.bookingModel')}}";
        function openBookingModel(id) {
            $.ajax({
                type: 'get',
                url: BookingModelURl,
                headers: {
                    "x-accept-language": "ar",
                },
                dataType: "html",
                data: {
                    'car_id' : id
                },
                success: function(data) {
                    console.log(data);
                    $('#BookingModel').html(data).modal('show');
                }
            });
        }

    </script>
    <script src="{{ asset(mix('/js/frontend.js')) }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- ------------START-----SCRIPT-------LOAD------------ -->
    <script type="text/javascript">
        $(document).ready(function() {
            $(".loader").animate({opacity: "0"}, 2000, function() {
                $(".loader").hide();
            });
            $('body').css('overflow','auto');
        });
    </script>
    <!-- ------------END------SCRIPT------LOAD------------ -->


@stack('scripts')

@if ($errors->any())
{{-- @dd($errors->any()) --}}
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
