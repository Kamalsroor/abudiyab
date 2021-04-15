<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']" >
    <section class="car-sales-page">

        <section class="car-sales-page_head" style="background: url({{optional(Settings::instance('car_sales_backgraund'))->getFirstMediaUrl('car_sales_backgraund')}});background-repeat: no-repeat; background-size: cover;"><h1>{{Settings::locale(app()->getLocale())->get('car_sales_title')}}</h1></section>

        <section class="car-sales-page_center">

            {{-- Content --}}
            {!! Settings::locale(app()->getLocale())->get('car_sales_content')!!}
        </section>

    </section>
</x-front-layout>
