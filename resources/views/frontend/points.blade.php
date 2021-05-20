<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']">
    <section class="points-program-page">

        <section class="points-program-page_head" style="background: url({{optional(Settings::instance('points_background'))->getFirstMediaUrl('points_background')}} );background-repeat: no-repeat; background-size: cover;"><h1 class="main-page-title">{{Settings::locale(app()->getLocale())->get('points_title')}}</h1></section>

            <section class="points-program-page_center">
                <div class="container-fluid px-0 mx-0 my-0" style="background-color: #ededed;">


                    <div class="container px-3 my-0" style="background-color: white;">
                        <img class="w-100 my-2 wow animate__animated animate__tada" data-wow-delay="2s" src="{{optional(Settings::instance('points_image'))->getFirstMediaUrl('points_image')}} " alt="points-program">
                        {!!Settings::locale(app()->getLocale())->get('points_content')!!}

                    </div>
                </div>

            </section>

    </section>


</x-front-layout>
