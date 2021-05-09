<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']">
    <link rel="stylesheet" type="text/css" href="{{asset('front/admin/files/assets/icon/icofont/css/icofont.css')}}">
    <section class="favorite-page">

        <section class="favorite-page_head" style="background: url({{asset('front/img/favorite.jpg')}});background-repeat: no-repeat; background-size: cover;">
            <div class="favorite-page_head_overlay-black">
                <h1><span>السيارات</span> المفضله</h1>
            </div>
        </section>

        <section class="favorite-page_center">


            <livewire:favorite/>


        </section>

    </section>
</x-front-layout>
