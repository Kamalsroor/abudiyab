<div id="step1" class="row  {{ $currentStep != 1 ? 'display-none' : '' }}">
    <div class="crcr col-lg-12" style="padding: 0;overflow: hidden;">
        <img src="{{ asset('front/img/payment_visa.jpg') }}" alt=".." class="d-block w-100">
    </div>


    <div class="min-boody col-lg-8 col-md-7">
        {{-- <div class="contract-additions visa">
            <div class="row addition">
                <div class="col-8">
                    <legend class="visa_text"> أحصل على خصم السداد بالفيزا .</legend>
                </div>
                <div class="col-4 m-b-30" id="visa_input">
                    <input type="checkbox" class="js-single" name="V" wire:model="visa_buy" value='1'>
                </div>
            </div>
        </div> --}}
        <div class="contract-additions" style="height: 90% !important; ">
            <fieldset>
                <legend><span class="AdditionsTitle">إضافات أخرى</span></legend>
            </fieldset>


            <div id="AdditionsListSection">
            @if ($car->additions != null)

                @foreach ($car->additions as $key => $additionsCar)
                    @if ($additionsCar["work"] && isset($additions[$key]))
                        <div class="row addition" >
                            <div class="min">
                                <div class="img">
                                    <i class="fas fa-{{$additions[$key][0]['icon']['name']}} m-r-n"></i>
                                    <h1>{{isset($additions[$key]) ? $additions[$key][0]['name'] : ""}}</h1>
                                    <p>{{isset($additions[$key]) ? $additions[$key][0]['mini_des'] : ""}}</p>
                                </div>
                                <div class="price">
                                    <h2>
                                        <i class="icofont icofont-cur-riyal"></i>{{ $additionsCar['price']}}<span style="font-size: 12px; color: #555;">{{$additions[$key][0]['type'] =="daily" ? 'مره واحده' : "يومي"}}</span>
                                    </h2>
                                </div>
                                <div class="check">
                                    <div class="form-check ">
                                        <input  class="form-check-input check1" type="checkbox" value="{{ $additionsCar['price'] }}"  name="features_added[]"  wire:model="features_added"  >


                                        {{-- <input
                                            class="form-check-input check3"
                                            type="checkbox"
                                            id="insurance"
                                            onchange='addValueToCheckBoxs(event);'
                                        /> --}}
                                        <i title="more details" class="fas fa-info-circle" onclick="YHadd('.add{{$loop->index}}');"></i>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="row addition  moreDetails add{{$loop->index}}" >
                            <div class="min min-r">
                                <div class="img details">

                                    <div class="price">

                                        <div class="check">
                                            <div >
                                                {!! isset($additions[$key]) ? $additions[$key][0]['des'] : ""!!}
                                                {{-- <h2>درع أبو ذياب شروط الاستخدام</h2>
                                                <div class='clear'>

                                                </div> --}}
                                                {{-- <ul>
                                                    <p>
                                                        درع أبو ذياب يعفي المستاجر من مبلغ التحمل للحادث
                                                        عند حدوث حادث للمستاجر والتلفيات الناتجة عن سوء
                                                        الأحوال الجوية لا سمح الله حسب الشروط التالية::
                                                    </p>
                                                    <li>
                                                        أن يطلب المستأجر باضافة درع أبو ذياب عند انشاء
                                                        الحجز أو فتح العقد فقط.
                                                    </li>
                                                    <li>
                                                        أن تنطبق شروط شركات التأمين حسب قوانين المملكة
                                                        العربية السعودية على المستأجر.
                                                    </li>
                                                    <li>
                                                        أن تنطبق جميع الشروط الخاصة بالتأمين الشامل على
                                                        المستأجر وهي : - أن لا يقل عمر المستأجر عن 21 عام
                                                        و أن لا يزيد على 70 عام. - أن تنطبق شروط شركات
                                                        التأمين حسب قوانين المملكة العربية السعودية على
                                                        المستأجر. - أن يكون العقد ساري المفعول عند وقوع
                                                        الحادث. - أن يقوم المستأجر ب إشعار المؤجر والجهات
                                                        الأمنية فور تعرض السيارة لحادث أو اكتشاف سرقتها مع
                                                        تزويدهم بكافة المعلومات التي يطلبونها و الحصول على
                                                        تقرير مرور من مراكز الشرطة المختصة.
                                                    </li>
                                                    <li>
                                                        لا يحق للمستأجر طلب أستعادة مبلغ درع أبو ذياب
                                                        المدفوع في حال لم يتم حدوت حادث.
                                                    </li>
                                                    <li>
                                                        في حال الاصطدام بجسم ثابت ، أو كان العميل ضحية
                                                        حادث و كان هناك هروب للطرف الاخر، وتم اعادة
                                                        السيارة من غير توفر معلومات الطرف المتسبب بالحادث،
                                                        واضاف العميل درع أبو ذياب بالعقد فعليه دفع قيمة
                                                        التحمل وقدرها 3500<i class="icofont icofont-cur-riyal"></i>.
                                                    </li>
                                                    <li>
                                                        لمدة المسموح بها لدرع أبو ذياب 24 ساعة فقط ولا
                                                        يشمل الساعات المجانية .
                                                    </li>
                                                    <li>في حال الحوادث إحضار تقرير نجم او مرور</li>
                                                    <li>
                                                        في حال الكوارث الطبيعية إحضار تقرير من الدفاع
                                                        المدني
                                                    </li>
                                                </ul> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                @endforeach
            @endif


            </div>


        </div>
    </div>

    <div class="min-boody2 col-lg-4 col-md-5">
        <div class="info in">

            <div class="hn"><h3>ملخص الحجز</h3></div>

            <div class="momo">
                <div>
                    <p class="red">نوع السيارة</p>
                    <p>{{$car->name}}</p>
                </div>
                <div>
                    <p class="red">الموديل</p>
                    <p>{{$car->model}}</p>
                </div>
                <div>
                    <p class="red">الفئه</p>
                    <p>{{$car->category?$car->category->name:'-'}}</p>
                </div>
            </div>

        </div>
        <div class="info ta">
            <div class="hn"><h3>فرع الاستلام</h3></div>
            <div>
                <p class="red">اسم الفرع</p>
                <p>{{$receiving_branch->name}}</p>
            </div>
            <div class="momo">
                <div>
                    <p class="red">تاريخ</p>
                    <p class="YH-p"> {{$reciving_date->format('d-m-Y')}}</p>
                </div>



                <div>
                    <p class="red">الوقت</p>
                    <p>{{$reciving_date->format('h:i A')}}</p>
                </div>
            </div>
        </div>
        <div class="info ge">
            <div class="hn"><h3>فرع التسلم</h3></div>

            <div>
                <p class="red">اسم الفرع</p>
                <p>{{$delivery_branch->name}}</p>
            </div>
            <div class="momo">
                <div>
                    <p class="red">تاريخ</p>
                    <p class="YH-p">{{$delivery_date->format('d-m-Y')}}</p>
                </div>
                <div>
                    <p class="red">الوقت</p>
                    <p>{{$delivery_date->format('h:i A')}}</p>
                </div>
            </div>
        </div>
        <div class="info pr">
            <div class="hn"><h3>السعر</h3></div>
            <div class="momo">
                <div>
                    <p>مدة الايجار</p>
                    <p>
                        {{$diff}}
                        ايام
                    </p>
                </div>
            </div>
            <h2>
                <i class="icofont icofont-cur-riyal"></i>
                {{$price}}
            </h2>
        </div>
    </div>

</div>
</div>
