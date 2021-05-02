<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']" >
    <section class="news-details">

        <div class="news-details_content">
            <div class="news-details_content_img">
                <img src="{{$newdetails->getFirstMediaUrl('moredetailsphoto')}}" alt="">
            </div>
            <div class="news-details_content_title">
                <h2>{{$newdetails->title}}</h2>
            </div>
            <div class="news-details_content_describe">
                <div>{{$newdetails->created_at}}</div>
                <p>{{$newdetails->description}}</p>
            </div>
            <div class="news-details_content_similar-news">
                <h1><div>اخبار مشابهة</div></h1>
                @foreach ($relateditems as $relateditem)

                <div class="news-details_content_similar-news_news">
                    <div class="news-details_content_similar-news_news_img">
                        <img src="{{$relateditem->getFirstMediaUrl()}}" alt="">
                    </div>
                    <div class="news-details_content_similar-news_news_title">
                        <h2>{{$relateditem->title}}</h2>
                    </div>
                    <div class="news-details_content_similar-news_news_describe">
                        <p>{{$relateditem->description}}</p>
                    </div>
                    <a href="{{route('front.news-details', ['news' => $relateditem])}}" class="primary-btn">اقرأ المزيد</a>
                </div>
                @endforeach

            </div>
        </div>

    </section>
</x-front-layout>
