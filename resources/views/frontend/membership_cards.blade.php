<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']" >
    <section class="membership-cards-page">

        <section class="membership-cards-page_head" style="background: url({{asset('front/img/branches.jpg')}});background-repeat: no-repeat; background-size: cover;"><h1>بطاقات العضويه</h1></section>

        <section class="membership-cards-page_center">
            <div class="container">
                <div class="row">
                    @foreach ($Memberships as $Membership)
                        <div class="col-12 col-md-3 p-3">
                            <div class="card" >
                                <img src="{{$Membership->getFirstMediaUrl()}}" class="card-img-top" alt="{{$Membership->name}}">
                                <div class="card-body">
                                    <h5 class="card-title text-right">{{$Membership->name}}</h5>
                                    <ul>
                                        <li class="text-right">خصم التأخير : {{$Membership->rental_discount}}%</li>
                                        <li class="text-right">الكيلو المسموح : {{$Membership->allowed_Kilos}}</li>
                                        <li class="text-right">الساعات الزائدة : {{$Membership->extra_hours}}</li>
                                        <li class="text-right">خصم التسليم بين المناطق : {{$Membership->delivery_discount_regions}}%</li>
                                        <li class="text-right">النقاط المكتسبة لكل 100 ريال مدفوع : {{$Membership->ratio_points}}</li>
                                    </ul>
                                    <div class="text-center py-2">
                                    <a href="#"  class="primary-btn btn-hover btn-curved mt-2 p-2"><i class="fab fa-whatsapp"></i> أطلب العضوية</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </section>
</x-front-layout>
