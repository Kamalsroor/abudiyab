<div id="step1" class="row  {{ $currentStep != 1 ? 'display-none' : '' }}">
    <div class="crcr col-lg-12" style="padding: 0;overflow: hidden;">
        <!-- <div class="dd">
            <p class="type">{{$car->name}}</p>
            <p class="like">أو ماشابهه</p>
        </div> -->
        <img src="{{ asset('front/img/payment_visa.jpg') }}" alt=".." class="d-block w-100">
    </div>


    <div class="min-boody col-lg-8 col-md-7">
        <div class="contract-additions visa">
            <div class="row addition">
                <div class="col-8">
                    <legend class="visa_text"> أحصل على خصم السداد بالفيزا .</legend>
                </div>
                <div class="col-4 m-b-30" id="visa_input">
                    <input type="checkbox" class="js-single" name="V" wire:model="visa_buy" value='0.15'>
                </div>
            </div>
        </div>
        <div class="contract-additions" style="height: 90% !important; ">
            <fieldset>
                <legend><span class="AdditionsTitle">إضافات أخرى</span></legend>
            </fieldset>
            <div id="AdditionsListSection">
                @if($car->is_baby_seat)
                <div class="row addition">
                    <div class="min">
                        <div class="img">
                            <i class="fas fa-chair"></i>
                            <h1>مقعد اطفال</h1>
                            <p>طفلك يهمنا</p>
                        </div>
                        <div class="price">
                            <h2><i class="icofont icofont-cur-riyal"></i>{{$car->baby_seat_price}}</h2> <span style="font-size: 12px; color: #555;">يومي</span>
                        </div>
                        <div class="check">
                            <div class="form-check ">
                                <input  class="form-check-input check1" type="checkbox" value="{{$car->baby_seat_price}}"  wire:model="features_added.baby_seat_price"  >
                                <i title="more details" id='0'class="fas fa-info-circle" onclick="YHadd('.add1');"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row addition moreDetails add1">
                    <div class="min min-r">
                        <div class="img details">
                            <div class="price">
                                <div class="check">
                                    <div>
                                        <h2 >شروط وأحكام مقعد الاطفال</h2>
                                        <ul >
                                            <li >مقعد سيارة الاطفال متوفرة بالفروع</li>
                                            <li >
                                                يمكن للعميل / المستأجر إضافة مقعد سيارة للأطفال
                                                إلى عقده بمبلغ إضافي ، ويجب إعادته بنفس الحالة
                                                التي<br> تم تأجيرها به دون أي أضرار.<br>
                                            </li>
                                            <li >
                                                يتحمل العميل / المستأجر مسؤولية أي فقد أو تلف أو
                                                سرقة مقاعد سيارات الأطفال.
                                            </li>
                                            <li >
                                                في حالة استئجار مقعد سيارة الطفل ، يتحمل العميل /
                                                المستأجر وحده مسؤولية فحص وتثبيت المقعد بأنفسهم.
                                            </li>
                                            <li >
                                                نحن لا نقدم أي ضمان ، صريحًا أو ضمنيًا لمقاعد
                                                سيارة الأطفال ، كما أننا لا نقدم أي نوع من الضمان
                                                بأن مقعد الطفل مناسب لفئة عمرية معينة. لا يمكن
                                                للعميل / المستأجر تحميلنا المسؤولية (لا قدر الله)
                                                في حالة حدوث أي إصابة أو حادث.
                                            </li>

                                            <div class="btns">
                                                <label class="inb agree" for="hhii1"> موافق </label>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if($car->is_shield)
                <div class="row addition" >
                    <div class="min">
                        <div class="img">
                            <i class="fas fa-shield-alt"></i>
                            <h1>درع أبو ذياب</h1>
                            <p>امن نفسك</p>
                        </div>
                        <div class="price">
                            <h2>
                                <i class="icofont icofont-cur-riyal"></i>{{$car->shield_price}}
                            </h2>
                        </div>
                        <div class="check">
                            <div class="form-check ">
                                <input  class="form-check-input check1" type="checkbox" value="{{$car->shield_price}}"   wire:model="features_added.shield_price"  >
                                <i title="more details" id='1'class="fas fa-info-circle" onclick="YHadd('.add2');"></i>
                                <div
                                    style="
                                        display: inline-block;
                                        float: left;
                                        position: absolute;
                                        left: 0;
                                        font-size: 40px;
                                        top: 35%;
                                        transform: translate(50%, -50%);
                                        color: #ff0707;
                                        "
                                >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row addition  moreDetails add2" >
                    <div class="min min-r">
                        <div class="img details">
                            <div class="price">
                                <div class="check" >
                                    <div>
                                        <h2>درع أبو ذياب شروط الاستخدام</h2>
                                        <ul>
                                            <p>
                                                درع أبو ذياب يعفي المستاجر من مبلغ التحمل للحادث
                                                عند حدوث حادث للمستاجر والتلفيات الناتجة عن سوء
                                                الأحوال الجوية لا سمح الله حسب الشروط التالية::
                                            </p>
                                            <li >
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
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if($car->is_insurance)
                <div class="row addition" >
                    <div class="min">
                        <div class="img">
                            <i class="fas fa-user-shield m-r-n"></i>
                            <h1>تأمين مميز</h1>
                            <p>امن سيارتك</p>
                        </div>
                        <div class="price">
                            <h2>
                                <i class="icofont icofont-cur-riyal"></i>{{$car->insurance_price}} <span style="font-size: 12px; color: #555;">يومي</span>
                            </h2>
                        </div>
                        <div class="check">
                            <div class="form-check ">
                                <input  class="form-check-input check1" type="checkbox" value="{{$car->insurance_price}}"   wire:model="features_added.insurance_price"  >


                                {{-- <input
                                    class="form-check-input check3"
                                    type="checkbox"
                                    id="insurance"
                                    onchange='addValueToCheckBoxs(event);'
                                /> --}}
                                <i title="more details" id='2' class="fas fa-info-circle" onclick="YHadd('.add3');"></i>

                            </div>
                        </div>
                    </div>
                </div>



                <div class="row addition  moreDetails add3" >
                    <div class="min min-r">
                        <div class="img details">

                            <div class="price">

                                <div class="check">
                                    <div >
                                        <h2>درع أبو ذياب شروط الاستخدام</h2>
                                        <div class='clear'>

                                        </div>
                                        <ul>
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
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            @if($car->is_open_kilometers)
            <div class="row addition" style="display: none;">
                    <div class="min">
                    <div class="img">
                        <i class="fas fa-car"></i>

                        <h1>كيلو متر مفتوح</h1>
                        <p>تجول بلا قيود</p>
                    </div>
                    <div class="price">
                        <h2>
                            <i class="icofont icofont-cur-riyal"></i>{{$car->open_kilometers_price}}
                        </h2>
                        </div>
                        <div class="check">
                        <div class="form-check ">
                            <input  class="form-check-input check1" type="checkbox" value="{{$car->open_kilometers_price}}"   wire:model="features_added.open_kilometers_price"  >

                            {{-- <input
                            class="form-check-input check4"
                            type="checkbox"
                            id="kilometer"

                            value="{{$car->open_kilometers_price}}"
                            wire:model="name"
                            {{-- onchange='addValueToCheckBoxs(event);' --}}
                            /> --}}
                            <i title="more details" id='3' class="fas fa-info-circle" onclick="YHadd('.add4');"></i>

                            <input id="hhii4" class="hhii" type="checkbox" />

                        </div>
                        </div>
                    </div>
            </div>


                <div class="row addition moreDetails add4" >
                    <div class="min min-r">
                        <div class="img details">

                            <div class="price">

                                <div class="check">
                                    <div>
                                        <h2>كيلو متر مفتوح شروط الاستخدام</h2>
                                        <ul>
                                            <p>
                                                خدمة الكيلو متر المفتوح   تعفي المستأجر من قيمة
                                                الكيلومتر الزائد بالعقد  حسب الشروط التالية:
                                            </p>
                                            <li>
                                                أن يطلب المستأجر إضافة خدمة الكيلومتر المفتوح عند
                                                انشاء الحجز أو وقت فتح العقد فقط ( لا يمكن إضافة
                                                الخدمة بعد فتح عقد الاستئجار ). .
                                            </li>
                                            <li>
                                                لا يحق للمستأجر طلب استعادة قيمة خدمة الكيلو متر
                                                المفتوح في حال عدم وجود كيلومتر زائد عند إغلاق
                                                العقد .
                                            </li>
                                            <li>
                                                المدة المسموح بها لخدمة الكيلو متر المفتوح 24 ساعة
                                                فقط ولا تشمل ساعات التأخير المجانية.
                                            </li>

                                            <div class="btns">
                                                <label class="inb agree" for="hhii4"> موافق </label>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if($car->is_navigation)
                <div class="row addition" >
                    <div class="min">
                        <div class="img">
                            <i class="fas fa-map-marker-alt"></i>
                            <h1>نظام الملاحة</h1>
                            <p>نظام جديد</p>
                        </div>
                        <div class="price">
                            <h2>
                                <i class="icofont icofont-cur-riyal"></i>{{$car->navigation_price}}
                            </h2>
                        </div>
                        <div class="check">
                            <div class="form-check ">
                            <input  class="form-check-input check1" type="checkbox" value="{{$car->navigation_price}}"   wire:model="features_added.navigation_price"  >

                                {{-- <input
                                    class="form-check-input check5"
                                    type="checkbox"
                                    id="navigation"
                                    onchange='addValueToCheckBoxs(event);'
                                /> --}}
                                <i title="more details" id='4' class="fas fa-info-circle" onclick="YHadd('.add5');"></i>



                            </div>
                        </div>
                    </div>
                </div>


                <div class="row addition moreDetails add5" >
                    <div class="min min-r">
                        <div class="img details">

                            <div class="price">

                                <div class="check">
                                    <div>
                                        <h2>نظام الملاحة شروط الاستخدام</h2>
                                        <ul>
                                            <li>نظام الملاحة يعتمد على توافره بالفرع</li>
                                            <li>
                                                نظام الملاحة ، للاستخدام أثناء الاستئجار بتكلفة
                                                إضافية ، يتم تأجير نظام الملاحة كما هو ويجب إعادته
                                                إلينا في نهاية الإيجار في نفس الحالة عند استئجاره
                                                .
                                            </li>
                                            <li>
                                                إذا فقد أو تلف جهاز نظام الملاحة أو ملحقاته ، وكان
                                                يتطلب الإصلاح أو الاستبدال ، سوف تدفع لنا القيمة
                                                السوقية العادلة لإصلاحها أو استبدالها .
                                            </li>
                                            <li>
                                                إذا كنت تستأجر نظام الملاحة منا ، فأنت تتحمل
                                                المسؤولية الوحيدة لفحص نظام الملاحة وتثبيته بشكل
                                                صحيح بنفسك.
                                            </li>
                                            <li>
                                                نحن لا نقدم أي ضمانات ، صريحة أو ضمنية أو واضحة ،
                                                فيما يتعلق بنظام الملاحة ، لا يوجد ضمان بالتسويق ،
                                                ولا يوجد ضمان بأن نظام الملاحة صالح لأي غرض معين ،
                                                أنت مسؤول عن كل إصابة أو ضرر ناشئ عن ، أو متعلق
                                                استخدام نظام الملاحة
                                            </li>

                                            <div class="btns">
                                                <label class="inb agree" for="hhii5"> موافق </label>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if($car->is_home_delivery)
                <div class="row addition" >
                    <div class="min">
                        <div class="img">
                            <i class="fas fa-home"></i>
                            <h1>خدمه التوصيل للمنزل</h1>
                            <p>خليك مرتاح</p>
                        </div>
                        <div class="price">
                            <h2>
                                <i class="icofont icofont-cur-riyal"></i>{{$car->home_delivery_price}}
                            </h2>
                        </div>
                        <div class="check">
                            <div class="form-check ">
                            <input  class="form-check-input check1" type="checkbox"  value="{{$car->home_delivery_price}}"   wire:model="features_added.home_delivery_price"  >

                                {{-- <input
                                    class="form-check-input check7"
                                    type="checkbox"
                                    id="delivery"
                                    onchange='addValueToCheckBoxs(event);'
                                /> --}}
                                <i title="more details" id='5' class="fas fa-info-circle" onclick="YHadd('.add6');"></i>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="row addition moreDetails add6" >
                    <div class="min min-r">
                        <div class="img details">
                            <div class="price">
                                <div class="check">
                                    <div>
                                        <h2>خدمه التوصيل للمنزل</h2>
                                        <ul>
                                            <li>بلا بلا بلا</li>
                                            <li>بلا بلا بلا</li>
                                            <li>بلا بلا بلا</li>
                                            <li>بلا بلا بلا</li>
                                            <li>بلا بلا بلا</li>
                                            <li>بلا بلا بلا</li>
                                            <li>بلا بلا بلا</li>
                                            <li>بلا بلا بلا</li>
                                            <div class="btns">
                                                <label class="inb agree" for="hhii7"> موافق </label>
                                            </div>
                                            <div class='btns cancelBtns'>
                                                <a  class="cancelDetails"><label class="cancel" for="hhii1"> الغاء </label></a>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if($car->is_intercity)
                <div class="row addition" >
                    <div class="min">
                        <div class="img">
                            <i class="fas fa-shipping-fast"></i>
                            <h1>شحن بين المدن</h1>
                            <p>شحن بلا حدود</p>
                        </div>
                        <div class="price">
                            <h2>
                                <i class="icofont icofont-cur-riyal"></i>{{$car->intercity_price}} <span style="font-size: 12px; color: #555;">يومي</span>
                            </h2>
                        </div>
                        <div class="check">
                            <div class="form-check ">
                                <input  class="form-check-input check1" type="checkbox" value="{{$car->intercity_price}}"   wire:model="features_added.intercity_price"  >
                                {{--
                                <input
                                    class="form-check-input check6"
                                    type="checkbox"
                                    id="intercity"
                                    onchange='addValueToCheckBoxs(event);'
                                /> --}}
                                <i title="more details" id='6' class="fas fa-info-circle" onclick="YHadd('.add7');"></i>


                            </div>
                        </div>
                    </div>
                </div>


                <div class="row addition moreDetails add7" >
                    <div class="min min-r">
                        <div class="img details">

                            <div class="price">

                                <div class="check">
                                    <div>
                                        <h2>خدمه التوصيل للمنزل</h2>
                                        <ul>
                                            <li>بلا بلا بلا</li>
                                            <li>بلا بلا بلا</li>
                                            <li>بلا بلا بلا</li>
                                            <li>بلا بلا بلا</li>
                                            <li>بلا بلا بلا</li>
                                            <li>بلا بلا بلا</li>
                                            <li>بلا بلا بلا</li>
                                            <li>بلا بلا بلا</li>
                                            <div class="btns">
                                                <label class="inb agree" for="hhii7"> موافق </label>
                                            </div>
                                            <div class='btns cancelBtns'>
                                                <a  class="cancelDetails"><label class="cancel" for="hhii1"> الغاء </label></a>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                    <p class="YH-p">{{$data['receiving_date']}}</p>
                </div>
                <div>
                    <p class="red">الوقت</p>
                    <p>15:22</p>
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
                    <p class="YH-p">{{$data['delivery_date']}}</p>
                </div>
                <div>
                    <p class="red">الوقت</p>
                    <p>18:22</p>
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
