<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']">
    <link rel="stylesheet" type="text/css" href="{{asset('front/admin/files/assets/icon/icofont/css/icofont.css')}}">
    <section class="favorite-page">

        <section class="favorite-page_head" style="background: url({{asset('front/img/favorite.jpg')}});background-repeat: no-repeat; background-size: cover;">
            <div class="favorite-page_head_overlay-black">
                <h1>المفضله</h1>
            </div>
        </section>

        <section class="favorite-page_center">

            <div class="favorite-page_center_top">
                <h2><span>السيارات</span> المفضله</h2>
                {{-- <p>لوريم إيبسوم هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد. لوريم إيبسوم هو النص الوهمي القياسي في الصناعة.</p> --}}
            </div>


            <livewire:favorite/>





        </section>

    </section>
</x-front-layout>
