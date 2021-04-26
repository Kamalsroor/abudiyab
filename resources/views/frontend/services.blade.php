<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']" >
    <section class="services-page">
        <div style="background-image: url({{asset('front/img/Webp.net-compress-image.jpg')}});height:340px;background-position: center;background-size: cover;background-repeat: no-repeat">
            {{-- <img class="w-100" src="{{asset('front/img/Webp.net-compress-image.jpg')}}" alt="hero image"> --}}
            <div class="d-flex justify-content-center align-items-center text-center" style="background-color: #000000c7;width:100%;height: 100%;">
                <h1 style="font-size: 50px; padding-bottom:10px; font-weight:600;color:white;border-bottom:2px red solid;">الخدمات و الصيانة</h1>
            </div>
        </div>
    </section>
</x-front-layout>
