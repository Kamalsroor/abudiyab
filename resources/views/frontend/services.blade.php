<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']" >
    <section class="services-page">

        <section class="services-page_head" style="background: url({{optional(Settings::instance('maintenance_backgraund'))->getFirstMediaUrl('maintenance_backgraund')}});background-repeat: no-repeat; background-size: cover;"><h1>{{Settings::locale(app()->getLocale())->get('maintenance_title')}}</h1></section>

        <section class="services-page_center">

            {{-- Content --}}
            {!! Settings::locale(app()->getLocale())->get('maintenance_content')!!}
            {{-- {{ Settings::locale(app()->getLocale())->get('maintenance_content')}} --}}

        </section>

    </section>
</x-front-layout>
