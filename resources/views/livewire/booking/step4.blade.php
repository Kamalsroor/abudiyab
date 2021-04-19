<div id="step4" class="color-black  {{ $currentStep != 5 ? 'display-none' : '' }}" >
    <div class='bodycontainer'>
        <div>
            <div class="container1 m-0" style="position: relative;padding: 0;">
                <div class="back">
                    <div class="title red">
                        <h1 class="color-black">تأكيد الحجز</h1>
                    </div>
                    <button class="print"><i class="icofont icofont-print"></i></button>
                    <div class="detel">
                        <div class="dis red">
                            <p style="font-size: 25px;" class="color-black"> رقم الحجز :80702687</p>
                            <p style="font-size: 21px;" class="color-black">تاريخ الحجز :{{$start_date}} الساعه :17:37</p>
                        </div>
                        <div class="dis red">
                            <p style="font-size: 25px;" class="color-black">الحاله : تحت الدراسه</p>
                            <p style="font-size: 25px;" class="color-black">نوع السداد : نقدا</p>
                        </div>
                    </div>
                    <div class="date red">
                        <div class="red">
                            <p class="color-black">فرع الاستلام</p>
                            <p class="color-black">{{$receiving_branch->name}}</p>
                            <p class="color-black">{{$start_date}}</p>
                        </div>
                        <div class="red">
                            <p class="color-black">فرع التسليم</p>
                            <p class="color-black">{{$delivery_branch->name}}</p>
                            <p class="color-black">{{$end_date}}</p>
                        </div>
                    </div>
                    <div class="price">
                        <h1 style="color: #030172;font-weight: bold;">
                            مجموع الايجار : <i class="icofont icofont-cur-riyal" style="color: #030172;font-weight: bold;"></i>{{$price}}
                        </h1>
                    </div>
                    <div class="complet">
                        <p class="red">
                            تمت عمليه الحجز بنجاح, شكرا لاختيارك شركة ابو ذياب
                        </p>
                        <p class="red">
                            سيصلكم بريدا الكترونيا يحتوي علي رقم الحجز الخاص بكم يرجي استخدامه عند تواصلك مع شركة ابو ذياب
                        </p>
                    </div>
                    {{-- <div style="margin-bottom: 50px;border: none;">
                        <h1 class="od-tit red">تعرف علي المزيد عن عضويات ابو ذياب من خلال زيارة الصفحه الرئسيه</h1>
                        <div class="mem-card">


                            <div class="mebary">
                                <div class="men2">العضويه الفضيه</div>
                                <div class="memd memd2">
                                    <img src="{{asset('front/img/33-Silver.png')}}" alt="">
                                </div>
                            </div>

                            <div class="mebary">
                                <div class="men1 red">العضويه الذهبيه</div>
                                <div class="memd memd1">
                                    <img src="{{asset('front/img/31-gold-frontpsd.png')}}" alt="">
                                </div>
                            </div>

                            <div class="mebary">
                                <div class="men3">العضويه البلاتنيوم</div>
                                <div class="memd memd3">
                                    <img src="{{asset('front/img/33-platinum-frontpsd.png')}}" alt="">
                                </div>
                            </div>

                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

</div>
