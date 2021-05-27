<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']">
    <section class="points-program-page">
        <section class="points-program-page_head" style="background: url({{optional(Settings::instance('points_background'))->getFirstMediaUrl('points_background')}} );background-repeat: no-repeat; background-size: cover;"><h1 class="main-page-title">الشروط و الاحكام</h1></section>

            <section class="points-program-page_center">
                <div class="container-fluid px-0 mx-0 my-0" style="background-color: #ededed;">


                    <div class="container px-3 my-0" style="background-color: white;">
                        {!!Settings::locale(app()->getLocale())->get('terms')!!}

                    </div>
                </div>

            </section>

    </section>


</x-front-layout>
