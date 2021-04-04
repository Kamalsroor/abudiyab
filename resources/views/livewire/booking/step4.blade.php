<div id="step4" class="color-black  {{ $currentStep != 5 ? 'display-none' : '' }}" >
    <div class='bodycontainer'>
        <div>
            <div class="container1 m-0" style="position: relative;padding: 0;">
                <div class="back">
                    <div class="title red">
                        <h1>تأكيد الحجز</h1>
                    </div>
                    <button style="    position: absolute;
                    top: 14px;
                    left: 45px;
                    font-size: 33px;
                    background: #4038af;
                    color: #fff;
                    border: 3px solid #1a03ea;cursor: pointer; outline: none;"><i class="icofont icofont-print"></i></button>
                    <div class="detel">
                        <div class="code red">
                            <p> رقم الحجز : <span style="font-size: 50px;font-weight: 600;margin: 0 5px;"></span>80702687</p>
                            <p>تاريخ الحجز :{{$start_date}} الساعه :17:37</p>
                        </div>
                        <div class="dis red">
                            <p style="font-size: 25px;">الحاله : تحت الدراسه</p>
                            <p style="font-size: 25px;">نوع السداد : نقدا</p>
                        </div>
                    </div>
                    <div class="date red">
                        <div>
                            <p>فرع الاستلام</p>
                            <p>{{$receiving_branch->name}}</p>
                            <p>{{$start_date}}</p>
                        </div>
                        <div class="red">
                            <p>فرع التسليم</p>
                            <p>{{$delivery_branch->name}}</p>
                            <p>{{$end_date}}</p>
                        </div>
                    </div>
                    <div class="price">
                        <h1 style="color: #030172;font-weight: bold;">
                            مجموع الايجار : <i class="icofont icofont-cur-riyal"></i>{{$price}}
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
                    <div style="margin-bottom: 50px;border: none;">
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
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
