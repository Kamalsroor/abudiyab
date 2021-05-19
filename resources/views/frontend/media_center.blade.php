<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']" >
    <section class="media-center">
        {{optional(Settings::instance('media_center_background'))->getFirstMediaUrl('media_center_background')}}
        {{Settings::locale(app()->getLocale())->get('media_center_title')}}
        <section class="media-center_head" style="background: url(https://3.bp.blogspot.com/-hA5t25xlHnM/UjBj-6AS8PI/AAAAAAAASCo/FM_s9s_FyeU/s1600/%D8%AE%D9%84%D9%81%D9%8A%D8%A7%D8%AA,%D8%B5%D9%88%D8%B1,%D8%B3%D9%8A%D8%A7%D8%B1%D8%A7%D8%AA,%D8%AC%D9%85%D9%8A%D9%84%D8%A9+%283%29.jpg);background-repeat: no-repeat; background-size: cover;">
            <div class="media-center_head_overlay-black">
                <h1>المركز الاعلامي</h1>
            </div>
        </section>

        <section class="media-center_center">

            <div class="media-center_center_content">
                @foreach ($news as $new)
                <div class="media-center_center_content_news">
                    <div class="media-center_center_content_news_img">
                        <img src="{{$new->getFirstMediaUrl()}}" alt="">
                    </div>
                    <div class="media-center_center_content_news_title">
                        <h2>{!! $new->title!!}</h2>
                    </div>
                    <div class="media-center_center_content_news_describe">
                        <p>{!! $new->description !!}</p>
                    </div>
                    <a href="{{route('front.news-details', ['news' => $new])}}" class="primary-btn">اقرأ المزيد</a>

                </div>
                @endforeach

            </div>

        </section>

    </section>
</x-front-layout>
