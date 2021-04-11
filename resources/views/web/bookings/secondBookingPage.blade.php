@extends('web.layouts.appBooking')
@section('content')
<link href="{{asset('front/lnkse/bootstrapBundle.css')}}" rel="stylesheet">
<style type="text/css">
    footer {
        margin-top: 0vh !important;
    }
</style>
    <link rel="stylesheet" href="{{asset('front/web/css/H2.css')}}" />
    <div class='insertLoginForm'></div>
    <div class='bodycontainer' style="min-height: 178vh !important;">
    <div class="connn">
        <style>
            .contract-additions{
                min-height: 1100px;
            }
            .head{
                /* background: white; */
                width: 50%;
                margin-top: 30px;
                margin: 10px auto;
                /* position: relative; */
                margin-bottom: 10px;
                text-align: center;

            }
            .bnb{
                position: absolute;
                background: rgb(255, 255, 255 , 80%);
                width: 50%;

                height: 110px;

                z-index: -10;
                border-radius: 20px;
                padding-bottom: 0;

            }
            .pro-bar{
                counter-reset: step;
                padding: 0;
                /* margin-top: 15px; */
            }

            .pro-bar li{
                list-style: none;
                /* float: right; */
                display: inline-block;
                width: 17%;
                position: relative;
                text-align: center;
                color: rgb(0, 0, 0);
                margin-top: 15px;
                font-weight: bold;
            }

            .pro-bar li::before{
                content: counter(step);
                counter-increment: step;
                width: 50px;
                padding-top: 7px;
                height: 50px;
                line-height: 30px;
                border: 1px solid rgb(2, 2, 2);
                display: block;
                text-align: center;
                margin: 0 auto 10px auto;
                border-radius: 50px;
                background: white;
                color: black;
                padding-bottom: 15px;
                /* font-weight:600 !important; */
                font-size: 40px;
                font-family: 'Brygada 1918', serif;


            }

            .pro-bar li::after{
                content: "";
                position: absolute;
                width: 100%;
                height: 3px;
                background-color: rgb(0, 0, 0);
                top: 25px;
                right: -50%;
                z-index: -1;

            }

            .pro-bar li:nth-child(4):after{
                content: "";
                position: absolute;
                width: 100%;
                height: 3px;
                background-color: rgb(34, 165, 53);
                top: 25px;
                right: -50%;
                z-index: -1;
            }
            .pro-bar li:nth-child(4)::before{
                background-color: rgb(26, 175, 49);
                color: white;
                bo

            }

            .pro-bar li:first-child::after{
                content: none;

            }
            .pro-bar .active::after{
                content: none;
                border: none;

            }
            .btns .inb{
                display: none;
            }

        </style>
        <div class="head col-lg-11">
            <div class="bnb">.</div>
            <div>
                <ul class="pro-bar">
                    <li class="">البحث</li>
                    <li class="">الإضافات</li>
                    <li class="">شروط الاستخدام</li>
                    <li class="">الدفع</li>
                    <li class="">التأكيد</li>
                </ul>
            </div>
        </div>
        <div class='insertLogin' style='position: absolute;top:-10%;left:35%;z-index:99999;'>

        </div>
        <!-- <div class="hehed col-md-11">.</div> -->
        <div class="">
            <div class="crcr col-lg-12">
                <div class="dd">
                    <p class="type">{{$booking->car->name}}</p>
                    <p class="like">أو ماشابهه</p>
                </div>
                <img src="{{asset('front/cars/CarsImg')}}/{{$booking->car->img}}" alt="لا يوجد صوره لهذه السياره">
            </div>

            <div class="min-boody2 col-lg-4 col-md-5">
                <div class="info in">
                    <div class="hn"><h3>ملخص الحجز</h3></div>

                    <div class="momo">
                        <!-- S 450 مرسيدس -->
                        <div>
                            <p class="red">نوع السيارة</p>
                            <p>{{$booking->car->name}}</p>
                        </div>
                        <div>
                            <p class="red">الموديل</p>
                            <p>{{$booking->car->model}}</p>
                        </div>
                        <div>
                            <p class="red">الفئه</p>
                            <p>{{$booking->car->category?$booking->car->category->name_ar:'-'}}</p>
                        </div>
                    <!--             <div>
                <p>المقاعد</p>
                <p><?php //echo $car['seat'];?></p>
            </div>
            <div>
                <p>الابواب</p>
                <p><?php //echo $car['door'];?></p>
            </div>
            <div>
                <p>الحقيبه</p>
                <p><?php //echo $car['luggage'];?></p>
            </div> -->
                    </div>
                </div>
                <div class="info ta">
                    <div class="hn"><h3>فرع الاستلام</h3></div>
                    <div>
                        <p class="red">اسم الفرع</p>
                        <br>
                        <p>{{$booking->receiving_branch}}</p>
                    </div>
                    <div class="momo">
                        <div>
                            <p class="red">تاريخ</p>
                            <p>{{$booking->receiving_date}}</p>
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
                        <br>
                        <p>{{$booking->delivery_branch}}</p>
                    </div>
                    <div class="momo">
                        <div>
                            <p class="red">تاريخ</p>
                            <p>{{$booking->delivery_date}}</p>
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
                                1
                                ايام
                            </p>
                        </div>
                    </div>
                    <h2>
                        <i class="icofont icofont-cur-riyal"></i>
                        {{$booking->car->price1}}
                    </h2>
                </div>
            </div>

            <div class="min-boody col-lg-8 col-md-7">
                <div class="contract-additions">
                    <fieldset>
                        <legend class="AdditionsTitle">إضافات أخرى</legend>
                    </fieldset>
                    <div id="AdditionsListSection">
                        <div class="row addition" >
                            <div class="min">
                                <div class="img">
                                    <i class="fas fa-chair"></i>
                                    <h1>مقعد اطفال</h1>
                                    <p>طفلك يهمنا</p>
                                </div>
                                <div class="price">
                                    <h2>300 ريال</h2>
                                </div>
                                <div class="check">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input check1" type="checkbox" d="seat" onchange='addValueToCheckBoxs(this);'
                                        />

                                        <i title="more details" id='0'class="fas fa-info-circle"></i>



                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row addition moreDetails " >
                            <div class="min ">
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

                        <div class="row addition" >
                            <div class="min">
                                <div class="img">
                                    <i class="fas fa-shield-alt"></i>
                                    <h1>درع أبو ذياب</h1>
                                    <p>امن نفسك</p>
                                </div>
                                <div class="price">
                                    <h2>
                                        {{$booking->car->add7}}
                                        ريال
                                    </h2>
                                </div>
                                <div class="check">
                                    <div class="form-check form-switch">
                                        <input
                                            class="form-check-input check2"
                                            type="checkbox"
                                            id="shield"
                                            onchange='addValueToCheckBoxs(this);'
                                        />
                                        <i title="more details" id='1'class="fas fa-info-circle"></i>
                                        <input id="hhii" class="hhii" type="checkbox" />
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


                        <div class="row addition  moreDetails" >
                            <div class="min ">
                                <div class="img details">

                                    <div class="price">

                                        <div class="check" >
                                            <div >
                                                <h1 >درع أبو ذياب شروط الاستخدام</h1>
                                                <ul>
                                                    <p >
                                                        درع أبو ذياب يعفي المستاجر من مبلغ التحمل للحادث
                                                        عند حدوث حادث للمستاجر والتلفيات الناتجة عن سوء
                                                        الأحوال الجوية لا سمح الله حسب الشروط التالية::
                                                    </p>
                                                    <li >
                                                        أن يطلب المستأجر باضافة درع أبو ذياب عند انشاء
                                                        الحجز أو فتح العقد فقط.
                                                    </li>
                                                    <li >
                                                        أن تنطبق شروط شركات التأمين حسب قوانين المملكة
                                                        العربية السعودية على المستأجر.
                                                    </li>
                                                    <li >
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
                                                    <li >
                                                        لا يحق للمستأجر طلب أستعادة مبلغ درع أبو ذياب
                                                        المدفوع في حال لم يتم حدوت حادث.
                                                    </li>
                                                    <li >
                                                        في حال الاصطدام بجسم ثابت ، أو كان العميل ضحية
                                                        حادث و كان هناك هروب للطرف الاخر، وتم اعادة
                                                        السيارة من غير توفر معلومات الطرف المتسبب بالحادث،
                                                        واضاف العميل درع أبو ذياب بالعقد فعليه دفع قيمة
                                                        التحمل وقدرها 3500 ريال.
                                                    </li>
                                                    <li >
                                                        لمدة المسموح بها لدرع أبو ذياب 24 ساعة فقط ولا
                                                        يشمل الساعات المجانية .
                                                    </li>
                                                    <li >في حال الحوادث إحضار تقرير نجم او مرور</li>
                                                    <li >
                                                        في حال الكوارث الطبيعية إحضار تقرير من الدفاع
                                                        المدني
                                                    </li>
                                                </ul>
                                                <div class='clear'></div>
                                                <div class="btns">
                                                    <label class="inb agree" for="hhii2"> موافق </label>
                                                </div>
                                                <div class='btns cancelBtns'>
                                                    <a  class="cancelDetails"><label class="cancel" for="hhii1"> الغاء </label></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row addition" >
                            <div class="min">
                                <div class="img">
                                    <i class="fas fa-user-shield m-r-n"></i>
                                    <h1>تأمين مميز</h1>
                                    <p>امن سيارتك</p>
                                </div>
                                <div class="price">
                                    <h2>
                                        {{$booking->car->add1}}
                                        ريال
                                    </h2>
                                </div>
                                <div class="check">
                                    <div class="form-check form-switch">
                                        <input
                                            class="form-check-input check3"
                                            type="checkbox"
                                            id="insurance"
                                            onchange='addValueToCheckBoxs(this);'
                                        />
                                        <i title="more details" id='2' class="fas fa-info-circle"></i>

                                        <input id="hhii3" class="hhii" type="checkbox" />

                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="row addition  moreDetails" >
                            <div class="min ">
                                <div class="img details">

                                    <div class="price">

                                        <div class="check" style='float:right;'>
                                            <div >
                                                <h1 style='float:right;'>درع أبو ذياب شروط الاستخدام</h1>
                                                <div class='clear'>

                                                </div>
                                                <ul>
                                                    <p style='float:right;'>
                                                        درع أبو ذياب يعفي المستاجر من مبلغ التحمل للحادث
                                                        عند حدوث حادث للمستاجر والتلفيات الناتجة عن سوء
                                                        الأحوال الجوية لا سمح الله حسب الشروط التالية::
                                                    </p>
                                                    <li style='float:right;'>
                                                        أن يطلب المستأجر باضافة درع أبو ذياب عند انشاء
                                                        الحجز أو فتح العقد فقط.
                                                    </li>
                                                    <li style='float:right;'>
                                                        أن تنطبق شروط شركات التأمين حسب قوانين المملكة
                                                        العربية السعودية على المستأجر.
                                                    </li>
                                                    <li style='float:right;'>
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
                                                    <li style='float:right;'>
                                                        لا يحق للمستأجر طلب أستعادة مبلغ درع أبو ذياب
                                                        المدفوع في حال لم يتم حدوت حادث.
                                                    </li>
                                                    <li style='float:right;'>
                                                        في حال الاصطدام بجسم ثابت ، أو كان العميل ضحية
                                                        حادث و كان هناك هروب للطرف الاخر، وتم اعادة
                                                        السيارة من غير توفر معلومات الطرف المتسبب بالحادث،
                                                        واضاف العميل درع أبو ذياب بالعقد فعليه دفع قيمة
                                                        التحمل وقدرها 3500 ريال.
                                                    </li>
                                                    <li style='float:right;'>
                                                        لمدة المسموح بها لدرع أبو ذياب 24 ساعة فقط ولا
                                                        يشمل الساعات المجانية .
                                                    </li>
                                                    <li style='float:right;'>في حال الحوادث إحضار تقرير نجم او مرور</li>
                                                    <li style='float:right;'>
                                                        في حال الكوارث الطبيعية إحضار تقرير من الدفاع
                                                        المدني
                                                    </li>
                                                </ul>
                                                <div class='clear'></div>
                                                <div class="btns">
                                                    <label class="inb agree" for="hhii2"> موافق </label>
                                                </div>
                                                <div class='btns cancelBtns'>
                                                    <a  class="cancelDetails"><label class="cancel" for="hhii1"> الغاء </label></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                     <div class="row addition" style="display: none;">
                <div class="min">
                  <div class="img">
                    <i class="fas fa-car"></i>

                    <h1>كيلو متر مفتوح</h1>
                    <p>تجول بلا قيود</p>
                  </div>
                  <div class="price">
                    <h2>

                        ريال
                      </h2>
                    </div>
                    <div class="check">
                      <div class="form-check form-switch">
                        <input
                          class="form-check-input check4"
                          type="checkbox"
                          id="kilometer"
                          onchange='addValueToCheckBoxs(this);'
                        />
                        <i title="more details" id='3' class="fas fa-info-circle"></i>

                        <input id="hhii4" class="hhii" type="checkbox" />

                      </div>
                    </div>
                  </div>
                </div>


                        <div class="row addition moreDetails " >
                            <div class="min ">
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

                        <div class="row addition" >
                            <div class="min">
                                <div class="img">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <h1>نظام الملاحة</h1>
                                    <p>نظام جديد</p>
                                </div>
                                <div class="price">
                                    <h2>
                                        {{$booking->car->add3}}
                                        ريال
                                    </h2>
                                </div>
                                <div class="check">
                                    <div class="form-check form-switch">
                                        <input
                                            class="form-check-input check5"
                                            type="checkbox"
                                            id="navigation"
                                            onchange='addValueToCheckBoxs(this);'
                                        />
                                        <i title="more details" id='4' class="fas fa-info-circle"></i>

                                        <input id="hhii5" class="hhii" type="checkbox" />


                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row addition moreDetails " >
                            <div class="min ">
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

                        <div class="row addition" >
                            <div class="min">
                                <div class="img">
                                    <i class="fas fa-home"></i>
                                    <h1>خدمه التوصيل للمنزل</h1>
                                    <p>خليك مرتاح</p>
                                </div>
                                <div class="price">
                                    <h2>
                                        {{$booking->car->add6}}
                                        ريال
                                    </h2>
                                </div>
                                <div class="check">
                                    <div class="form-check form-switch">
                                        <input
                                            class="form-check-input check7"
                                            type="checkbox"
                                            id="delivery"
                                            onchange='addValueToCheckBoxs(this);'
                                        />
                                        <i title="more details" id='5' class="fas fa-info-circle"></i>

                                        <input id="hhii7" class="hhii" type="checkbox" />

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row addition moreDetails " >
                        <div class="min ">
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

                    <div class="row addition" >
                        <div class="min">
                            <div class="img">
                                <i class="fas fa-shipping-fast"></i>
                                <h1>شحن بين المدن</h1>
                                <p>شحن بلا حدود</p>
                            </div>
                            <div class="price">
                                <h2>
                                    {{$booking->car->add4}}
                                    ريال
                                </h2>
                            </div>
                            <div class="check">
                                <div class="form-check form-switch">
                                    <input
                                        class="form-check-input check6"
                                        type="checkbox"
                                        id="intercity"
                                        onchange='addValueToCheckBoxs(this);'
                                    />
                                    <i title="more details" id='6' class="fas fa-info-circle"></i>

                                    <input id="hhii6" class="hhii" type="checkbox" />

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row addition moreDetails " >
                        <div class="min ">
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


                </div>
            </div>
        </div>
        <div class="ac-or-no col-lg-12 col-md-12 col-sm-12">
            <form method="post" action="{{route('secondStepStore', $booking)}}">
                @csrf

                <a class="inb inp1" href="{{route('cars.index')}}" style="margin-right: 0"> عوده </a>
                <input type="hidden" name="seatInput"       id="seatID"       class="add1">
                <input type="hidden" name="shieldInput"     id="shieldID"     class="add2">
                <input type="hidden" name="insuranceInput"  id="insuranceID"  class="add3">
                <input type="hidden" name="kilometerInput"  id="kilometerID"  class="add4">
                <input type="hidden" name="navigationInput" id="navigationID" class="add5">
                <input type="hidden" name="deliveryInput"   id="deliveryID"   class="add6">
                <input type="hidden" name="intercityInput"  id="intercityID"  class="add7">

                <script type="text/javascript">
                    function addValueToCheckBoxs() {
                        var seat , shield , insurance , kilometer ,navigation , delivery , intercity  ;
                        if ($("#seat").is(":checked")) {
                            seat = document.getElementById("seat").value = (1);
                            shield = document.getElementById("shield").value = (1);
                            insurance = document.getElementById("insurance").value = (1);
                            kilometer = document.getElementById("kilometer").value = (1);
                            navigation = document.getElementById("navigation").value = (1);
                            delivery = document.getElementById("delivery").value = (1);
                            intercity = document.getElementById("intercity").value = (1);

                        } else {
                            seat = document.getElementById("seat").value = (0);
                            shield = document.getElementById("shield").value = (0);
                            insurance = document.getElementById("insurance").value = (0);
                            kilometer = document.getElementById("kilometer").value = (0);
                            navigation = document.getElementById("navigation").value = (0);
                            delivery = document.getElementById("delivery").value = (0);
                            intercity = document.getElementById("intercity").value = (0);
                        }
                            document.getElementById("seatID").value = seat ;
                            document.getElementById("shieldID").value = shield ;
                            document.getElementById("insuranceID").value = insurance ;
                            document.getElementById("kilometerID").value = kilometer ;
                            document.getElementById("navigationID").value = navigation ;
                            document.getElementById("deliveryID").value = delivery ;
                            document.getElementById("intercityID").value = intercity ;

                         // alert(seat);
                    }

                </script>
                <button class="inb inp2" name="GO" style="margin-left: 0">
                    استمرار
                </button>
            </form>
        </div>
    </div>
    </div>
    </div>


    <script type="text/javascript">
        function adds(input, addx) {
            if ($(input).is(":checked")) {
                $(addx).val(1);
                // console.log($(addx).val());
            } else {
                $(addx).val(0);
                // console.log($(addx).val());
            }
        }
    </script>
@endsection
