<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']" >
    <section class="media-center-page">

        <section class="media-center-page_head" style="background: url({{optional(Settings::instance('media_center_background'))->getFirstMediaUrl('media_center_background')}});"><h1>{{Settings::locale(app()->getLocale())->get('media_center_title')}}</h1></section>

        <section class="media-center-page_center">

            {{-- Content --}}
            {!! Settings::locale(app()->getLocale())->get('media_center_content')!!}

        </section>

    </section>
</x-front-layout>
