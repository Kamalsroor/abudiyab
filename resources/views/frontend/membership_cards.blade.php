<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']" >
    <section class="membership-cards-page">

        <section class="membership-cards-page_head" style="background: url({{asset('front/img/branches.jpg')}});background-repeat: no-repeat; background-size: cover;"><h1 class="main-page-title" class="main-page-title">بطاقات العضويه</h1></section>

        <section class="membership-cards-page_center">
            <div class="container">
                <div class="row">
                    @foreach ($Memberships as $Membership)
                        <div class="col-12 col-md-3 p-3">
                            <div class="card" style="padding: 20px;">
                                <img src="{{$Membership->getFirstMediaUrl()}}" class="card-img-top" alt="{{$Membership->name}}">
                                <div class="card-body">
                                    <h5 class="card-title text-center">{{$Membership->name}}</h5>
                                    <ul>
                                        <li class="text-right">خصم التأخير : {{$Membership->rental_discount}}%</li>
                                        <li class="text-right">الكيلو المسموح : {{$Membership->allowed_Kilos}}</li>
                                        <li class="text-right">الساعات الزائدة : {{$Membership->extra_hours}}</li>
                                        <li class="text-right">خصم التسليم بين المناطق : {{$Membership->delivery_discount_regions}}%</li>
                                        <li class="text-right">النقاط المكتسبة لكل 100 ريال مدفوع : {{$Membership->ratio_points}}</li>
                                    </ul>
                                    <div class="text-right py-2">

                                        <p class="btn-details" onclick="_details(this)">التفاصيل</p>

                                        <div class="details">
                                            <ul class="list-unstyled">
                                                <li>This is a list.</li>
                                                <li>It appears completely unstyled.</li>
                                                <li>Structurally, it's still a list.</li>
                                                <li>However, this style only applies to immediate child elements.</li>
                                                <li>Nested lists:
                                                  <ul>
                                                    <li>are unaffected by this style</li>
                                                    <li>will still show a bullet</li>
                                                    <li>and have appropriate left margin</li>
                                                  </ul>
                                                </li>
                                                <li>This may still come in handy in some situations.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @push('js')
                        <script>
                            let _details = (btn, divDetails = btn.nextElementSibling) => {
                                typeof divDetails === 'string' ? divDetails = document.querySelector(divDetails) : false;
                                divDetails.style.overflow = 'hidden';
                                if (divDetails.style.display === 'block') {
                                    let divDetailsHeight = divDetails.offsetHeight;
                                    let SetIntervalHden = setInterval(() => {
                                        divDetails.style.height = `${divDetails.offsetHeight - 2}px`;
                                        if (divDetails.offsetHeight == 0) {
                                            divDetails.style.display = 'none';
                                            divDetails.style.height = `${divDetailsHeight}px`;
                                            clearInterval(SetIntervalHden);
                                        }
                                    }, .5);
                                }
                                else{
                                    divDetails.style.display = 'block';
                                    let divDetailsHeight = divDetails.offsetHeight;
                                    divDetails.style.height = '0px';
                                    console.log(new Date().toLocaleTimeString());
                                    let SetIntervalShow = setInterval(() => {
                                        divDetails.style.height = `${divDetails.offsetHeight + 2}px`;
                                        if (divDetails.offsetHeight == divDetailsHeight) {
                                            console.log(new Date().toLocaleTimeString());
                                            console.log(divDetailsHeight);
                                            clearInterval(SetIntervalShow);
                                        }
                                    }, .5);
                                }
                            }
                        </script>
                    @endpush
                </div>
            </div>
        </section>
    </section>
</x-front-layout>
