<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']" >
    <section class="membership-cards-page">

        <section class="membership-cards-page_head" style="background: url({{asset('front/img/branches.jpg')}});"><h1>بطاقات العضويه</h1></section>

        <section class="membership-cards-page_center">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4 p-3">
                        <div class="card" >
                            <img src="{{asset('front/img/31-gold-frontpsd.png')}}" class="card-img-top" alt="gold-card">
                            <div class="card-body">
                                <h5 class="card-title text-right">العضوية الذهبية</h5>
                                <ul>
                                    <li class="text-right">خصم التأخير : 20%</li>
                                    <li class="text-right">الكيلو المسموح : 325</li>
                                    <li class="text-right">الساعات الزائدة : 5</li>
                                    <li class="text-right">خصم التسليم بين المناطق : 50%</li>
                                    <li class="text-right">النقاط المكتسبة لكل 100 ريال مدفوع : 1</li>
                                </ul>
                                <div class="text-center py-2">
                                 <a href="#"  class="btn btn-primary m-auto"><i class="fab fa-whatsapp"></i> أطلب العضوية</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-3">
                        <div class="card" >
                            <img src="{{asset('front/img/33-Silver.png')}}" class="card-img-top" alt="silver-card">
                            <div class="card-body">
                                <h5 class="card-title text-right">العضوية الفضية</h5>
                                <ul>
                                    <li class="text-right">خصم التأخير : 15%</li>
                                    <li class="text-right">الكيلو المسموح : 300</li>
                                    <li class="text-right">الساعات الزائدة : 5</li>
                                    <li class="text-right">خصم التسليم بين المناطق : 50%</li>
                                    <li class="text-right">النقاط المكتسبة لكل 100 ريال مدفوع : 1</li>
                                </ul>
                                <div class="text-center py-2">
                                    <a href="#"  class="btn btn-primary m-auto"><i class="fab fa-whatsapp"></i> أطلب العضوية</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-3">
                        <div class="card" >
                            <img src="{{asset('front/img/CARD-FINALrosegold.png')}}" class="card-img-top" alt="bronze-card">
                            <div class="card-body">
                                <h5 class="card-title text-right">العضوية البرونزية</h5>
                                <ul>
                                    <li class="text-right">خصم التأخير : 12%</li>
                                    <li class="text-right">الكيلو المسموح : 250</li>
                                    <li class="text-right">الساعات الزائدة : 3</li>
                                    <li class="text-right">خصم التسليم بين المناطق : 50%</li>
                                    <li class="text-right">النقاط المكتسبة لكل 100 ريال مدفوع : 1/2</li>
                                </ul>
                                <div class="text-center py-2">
                                    <a href="#"  class="btn btn-primary m-auto"><i class="fab fa-whatsapp"></i> أطلب العضوية</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </section>
</x-front-layout>
