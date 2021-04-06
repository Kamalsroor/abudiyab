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

    <meta name="title" content="ايجار سيارة - ابو ذياب ">
    <meta name="description" content="إبحث عن سيارة للإيجار في أسطول سيارات ابو ذياب والكثير من الخيارات لكل فئات السيارات التي تتناسب مع غرضك أياً كان ">
    <meta name="keywords" content="تأجير سيارات,ايجار سيارات ,ايجار سيارات حديثة ,ابو ذياب ,مكتب تاجير سيارات ,مكاتب تاجير سيارات ,تطبيق تأجير سيارات ,تأجير سيارات الرياض ,تأجير سيارات جدة ,تأجير سيارات الدمام ,تأجير سيارات أبها " />
    @include('layouts.frontend.include.links')

    @yield('styles')
    <livewire:styles />

    {{-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> --}}
</head>
<body style="overflow: hidden;">
<!-- ------------START------HTML------LOAD------------ -->
<div class="background-loader" style="position: absolute;height: 100vh;width: 100%; color: #fff;background: #fff;z-index: 1000000;">1 </div>

<div class="loader animation-start" style="z-index: 10000000;">
<span class="circle delay-1 size-2"></span>
<span class="circle delay-2 size-4"></span>
<span class="circle delay-3 size-6"></span>
<span class="circle delay-4 size-7"></span>
<span class="circle delay-5 size-7"></span>
<span class="circle delay-6 size-6"></span>
<span class="circle delay-7 size-4"></span>
<span class="circle delay-8 size-2"></span>
</div>
<!-- ------------END------HTML------LOAD------------ -->
        <!--================
            main Navbar
        =================-->
        {{-- <!-- @include('layouts.frontend.include.navbar') --> --}}

        <div class="container-fluid px-0">

            {{ $slot }}

        </div>




        <!--=========
        - Footer -
        ===========-->

        <!-- @include('layouts.frontend.include.footer') -->


        <!-- General Components -->



<!-- REQUIRED SCRIPTS -->
<!-- Scripts -->


    <script src="{{asset('front/lnkse/jquery-3.5.1.min.js')}}"></script>


    <script src="{{asset('front/lnkse/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('front/lnkse/bootstrap.js')}}"></script>

    <script src="{{asset('front/lnkse/main.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- ------------START-----SCRIPT-------LOAD------------ -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('div.loader.animation-start, .background-loader').hide();
            $('body').css('overflow','auto');
        });
    </script>
    <!-- ------------END------SCRIPT------LOAD------------ -->

{{-- <script src="{{ asset(mix('/js/frontend.js')) }}"></script> --}}

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



</body>
</html>
