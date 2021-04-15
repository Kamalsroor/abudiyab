<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']" >
    <section class="car-interior-page">

        <div id="container" class="container py-4">
            <h1 class="text-right py-4">صور السيارة</h1>
            <div class="row">
                <img class="oldImg col-4" src="{{asset('front/img/car-1.png')}}" alt="pic">
                <img class="oldImg col-4" src="{{asset('front/img/car-2.png')}}" alt="pic">
                <img class="oldImg col-4" src="{{asset('front/img/CARD-FINALrosegold.png')}}" alt="pic">
                <img class="oldImg col-4" src="{{asset('front/img/finalsliders/1.jpg')}}" alt="pic">
                <img class="oldImg col-4" src="{{asset('front/img/payment_visa.jpg')}}" alt="pic">
                <img class="oldImg col-4" src="{{asset('front/img/SLIDERS/slide-3.jpg')}}" alt="pic">

            </div>




        </div>

    </section>
</x-front-layout>
