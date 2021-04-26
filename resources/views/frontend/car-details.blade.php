<link rel="stylesheet" href="{{asset('front/admin/files/assets/icon/icofont/css/icofont.css')}}">
<link rel="stylesheet" href="{{asset('front/lnkse/car-details/fonts/flaticon/font/flaticon.css')}}">
<link rel="stylesheet" href="{{asset('front/lnkse/car-details/css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('front/lnkse/car-details/css/slider-pro.css')}}">
<link rel="stylesheet" href="{{asset('front/lnkse/car-details/css/owl.carousel.css')}}">

<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']">
<section class="car-details" dir="ltr">
    <div class="l-theme animated-css" data-header="sticky" data-header-top="200" data-canvas="container">
        <div class="section-title-page area-bg area-bg_dark area-bg_op_70" style="background: url('{{asset('front/img/car-details.jpg')}}');">
            <div class="area-bg__inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="b-title-page bg-primary_a"> تفاصيل السيارة</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <main class="l-main-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <section class="b-car-details">
                            <div class="b-car-details__header">
                                <div class="b-car-details__header-l">
                                    <a href="#" class="btn btn-dark">احجز الان</a>
                                </div>
                                <div class="b-car-details__header-r">
                                    <h2 class="b-car-details__title">{{$car->name}}</h2>
                                    <div class="b-car-details__subtitle">فخمة كبيرة</div>
                                    <div class="b-car-details__address"></div>
                                </div>
                                <div class="b-car-details__links"><i class="icon fas fa-share-alt text-primary"></i>مشاركه</div>
                            </div>
                            <div class="slider-car-details slider-pro" id="slider-car-details">
                                <div class="sp-slides">
                                    <div class="sp-slide">
                                        <img class="sp-image" src="https://pro-theme.com/html/motorland/assets/media/content/gallery/car-details/main/1.jpg" alt="img" />
                                    </div>
                                    <div class="sp-slide">
                                        <img class="sp-image" src="https://pro-theme.com/html/motorland/assets/media/content/gallery/car-details/main/1.jpg" alt="img" />
                                    </div>
                                    <div class="sp-slide">
                                        <img class="sp-image" src="https://pro-theme.com/html/motorland/assets/media/content/gallery/car-details/main/1.jpg" alt="img" />
                                    </div>
                                    <div class="sp-slide">
                                        <iframe class="sp-video" src="https://www.youtube.com/embed/AAfLTYZKFTc" allowfullscreen="allowfullscreen"></iframe>
                                    </div>
                                    <div class="sp-slide">
                                        <img class="sp-image" src="https://pro-theme.com/html/motorland/assets/media/content/gallery/car-details/main/1.jpg" alt="img" />
                                    </div>
                                    <div class="sp-slide">
                                        <img class="sp-image" src="https://pro-theme.com/html/motorland/assets/media/content/gallery/car-details/main/1.jpg" alt="img" />
                                    </div>
                                    <div class="sp-slide">
                                        <img class="sp-image" src="https://pro-theme.com/html/motorland/assets/media/content/gallery/car-details/main/1.jpg" alt="img" />
                                    </div>
                                </div>
                                <div class="sp-thumbnails">
                                    <div class="sp-thumbnail">
                                        <img class="img-responsive" src="https://pro-theme.com/html/motorland/assets/media/content/gallery/car-details/thumb/1.jpg" alt="img" />
                                    </div>
                                    <div class="sp-thumbnail">
                                        <img class="img-responsive" src="https://pro-theme.com/html/motorland/assets/media/content/gallery/car-details/thumb/2.jpg" alt="img" />
                                    </div>
                                    <div class="sp-thumbnail">
                                        <img class="img-responsive" src="https://pro-theme.com/html/motorland/assets/media/content/gallery/car-details/thumb/3.jpg" alt="img" />
                                    </div>
                                    <div class="sp-thumbnail sp-thumbnail_video">
                                        <img class="img-responsive" src="https://pro-theme.com/html/motorland/assets/media/content/gallery/car-details/thumb/4.jpg" alt="img" />
                                    </div>
                                    <div class="sp-thumbnail">
                                        <img class="img-responsive" src="https://pro-theme.com/html/motorland/assets/media/content/gallery/car-details/thumb/5.jpg" alt="img" />
                                    </div>
                                    <div class="sp-thumbnail">
                                        <img class="img-responsive" src="https://pro-theme.com/html/motorland/assets/media/content/gallery/car-details/thumb/1.jpg" alt="img" />
                                    </div>
                                    <div class="sp-thumbnail">
                                        <img class="img-responsive" src="https://pro-theme.com/html/motorland/assets/media/content/gallery/car-details/thumb/2.jpg" alt="img" />
                                    </div>
                                </div>
                            </div>
                            <!-- end .b-thumb-slider-->
                            <div class="b-car-details__section">
                                <h3 class="b-car-details__section-title ui-title-inner">نظرة عامة على السيارة</h3>
                                <div class="b-car-details__section-subtitle">والحيوية ، هي المملكة التي تأتي ، لمزيد من المعلومات عن عمل كبير.</div>
                                <p>التخطيط لصلصة الجزر وقت Sed - ولكن فقط من أجل تراجع Motorland consectetura Exea aliquip ألم العمالة والصناعة ، ككيان. كل عام كان يغيب عن التدريب. ألم سلامكو ، والولادة ، ومتعة اللعب مع 3 creeprendte يريدون القضاء عليها
                                    والمسح الضوئي.
                                </p>
                            </div>
                            <ul class="b-car-details__nav nav nav-tabs bg-primary">
                                <li class="active"><a href="#specifications" data-toggle="tab">تحديد</a>
                                </li>
                                <li><a href="#details" data-toggle="tab">تفاصيل تقنية</a>
                                </li>
                                <li><a href="#contact" data-toggle="tab">اتصل</a>
                                </li>
                            </ul>
                            <div class="b-car-details__tabs tab-content">
                                <div class="tab-pane fade active show in" id="specifications">
                                    <p>هذه السيارة النموذجية 2018 هي Brilliant Black Crystal Pearlcoat مع تصميم داخلي أسود / ديزل رمادي. قم بشراء الثقة مع العلم أن جيب دودج رام سربرايز قد تجاوزت توقعات العملاء لسنوات عديدة وتزود العملاء دائمًا بقيمة كبيرة!</p>
                                    <p>لقد جئت من Sed quis mauris لفترة طويلة من بعض من أصغر تمرينات الغمس ، والقوى التي توفرها للسرعة تقع ضمن النطاق الذي تعمل به من تلقاء نفسها. ولكن إذا كان هناك أي من الخروج إلى نفس المكتب ، وإعادة تأهيل Ecube Auted cupidatat.
                                        من الاهتمام بالألم والحزن في الأوقات ، ولذة السرعة لتجنب حدوث صدمة في فلوريدا لن نشعر بالدهون. لوريم على الإنترنت هو الأفضل ، لكن عن عمد هناك حاجة ماسة لمزيد من الألم.</p>
                                    <p>على مر السنين ، سوف أخرج منه لأربح أي تمرين للحنين المترتب على ذلك ، بحيث تكون جهود التحفيز إذا تم انتقاد المنطقة التعليمية في متعة الرغبة في أن تكون ألمًا واحدًا ، ينتج عن الألم في كيوبيدات كرة القدم لا الهروب الناتج.
                                        باستثناء كيوبيدات باستثناء عدم وجود خطأ ، فإنهم يتخلون عن مسؤولياتهم بعقول ناعمة.</p>
                                    <div class="b-car-details__tabs-title">المزيد من الميزات</div>
                                    <ul class="list list-mark-5 list_mark-prim list-2-col">
                                        <li>مبرد زيت نظام الدفع: مساعد</li>
                                        <li>بديل المحرك: 160 أمبير</li>
                                        <li>مرايا خارجية قابلة للطي يدويًا</li>
                                        <li>أحزمة المقاعد ، حساسات التحذير الخاصة بأحزمة المقاعد</li>
                                        <li>مساند رأس أمامية قابلة للتعديل</li>
                                        <li>نظام التحكم في السرعة</li>
                                        <li>مناطق الانهيار الأمامية</li>
                                        <li>التحكم في ثبات الأسطوانة</li>
                                        <li>شاشة متعددة الوظائف</li>
                                        <li>فرامل ABS (4 عجلات)</li>
                                        <li>نظام صوتي 6 مكبرات صوت</li>
                                        <li>توزيع قوة الفرملة إلكترونيا</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="details">
                                    <p>هذه السيارة النموذجية 2018 هي Brilliant Black Crystal Pearlcoat مع تصميم داخلي أسود / ديزل رمادي. قم بشراء الثقة مع العلم أن جيب دودج رام سربرايز قد تجاوزت توقعات العملاء لسنوات عديدة وتزود العملاء دائمًا بقيمة كبيرة!</p>
                                    <p>أن نكون صادقين consectetura dipisicing condimentum mauris sed minim لكن هذا النوع من العفو لرجل ، مع بعض النخر الطويل والحيوية والتمرين والألم ، يجب أن تعمل Sset. أليكويب يترتب على ذلك أن يخرج منه كومدو سلامكو م auted
                                        cupidatat rehenderit labour ، من دواعي سروري الرغبة في أن تكون ، لا شيء: حتى لو كان pariatura cillum et dolore magna ipsum dolor ame consecteu fat ، تجنب مثل هذه الأوقات والحيوية ، النخبة تفعل. Lorem ipsum dolor
                                        sit amet، consectetur حسومات ، ولكن امنحها الوقت والحيوية من العمل ودولور ماجنا أليكوا.</p>
                                    <p>على مر السنين ، سوف أخرج منه لأربح أي تمرين للحنين المترتب على ذلك ، بحيث تكون جهود التحفيز إذا تم انتقاد المنطقة التعليمية في متعة الرغبة في أن تكون ألمًا واحدًا ، ينتج عن الألم في كيوبيدات كرة القدم لا الهروب الناتج.
                                        باستثناء cupidatat هم ليسوا المخطئين باستثناء الذين يتخلون عن مسؤولياتهم العقول الرقيقة.</p>
                                </div>
                                <div class="tab-pane fade" id="contact">
                                    <p>على مر السنين ، سوف أخرج منه لأربح أي تمرين للحنين المترتب على ذلك ، بحيث تكون جهود التحفيز إذا تم انتقاد المنطقة التعليمية في متعة الرغبة في أن تكون ألمًا واحدًا ، ينتج عن الألم في كيوبيدات كرة القدم لا الهروب الناتج.
                                        باستثناء كيوبيدات باستثناء عدم وجود خطأ ، فإنهم يتخلون عن مسؤولياتهم بعقول ناعمة.</p>
                                    <p>موديل 2018 هذه السيارة من الكريستال الأسود اللامع بيرل كوت مع لون داخلي أسود / ديزل رمادي. قم بشراء الثقة مع العلم أن مفاجأة جيب دودج رام قد تجاوزت توقعات العملاء لسنوات عديدة وتقدم للعملاء دائمًا بقيمة رائعة!</p>
                                    <p>أن نكون صادقين consectetura dipisicing condimentum mauris sed minim لكن هذا النوع من العفو لرجل ، مع بعض النخر الطويل والحيوية والتمرين والألم ، يجب أن تعمل Sset. أليكويب يترتب على ذلك أن يخرج منه كومدو سلامكو م auted
                                        cupidatat rehenderit labour ، من دواعي سروري الرغبة في أن تكون ، لا شيء: حتى لو كان pariatura cillum et dolore magna ipsum dolor ame consecteu fat ، تجنب مثل هذه الأوقات والحيوية ، النخبة تفعل. جزر لوريم إيبسوم
                                        ، حسومات محسّنة ، لكن امنحها الوقت والحيوية من العمل </p>
                                    <p>على مر السنين ، سوف أخرج منه لأربح أي تمرين للحنين المترتب على ذلك ، بحيث تكون جهود التحفيز إذا تم انتقاد المنطقة التعليمية في متعة الرغبة في أن تكون ألمًا واحدًا ، ينتج عن الألم في كيوبيدات كرة القدم لا الهروب الناتج.
                                        باستثناء كيوبيدات باستثناء عدم وجود خطأ ، فإنهم يتخلون عن مسؤولياتهم بعقول ناعمة.</p>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-md-4">
                        <aside class="l-sidebar-2">
                            <div class="b-car-info">
                                <div class="b-car-info__price"><i class="icofont icofont-cur-riyal"></i>1450<span class="b-car-info__price-msrp"> <i class="icofont icofont-cur-riyal"></i>1500</span>
                                </div>
                                <dl class="b-car-info__desc dl-horizontal bg-grey">
                                    <dt class="b-car-info__desc-dt">سيدان</dt>
                                    <dd class="b-car-info__desc-dd">الجسم</dd>
                                    <dt class="b-car-info__desc-dt">2021</dt>
                                    <dd class="b-car-info__desc-dd">سنه</dd>
                                    <dt class="b-car-info__desc-dt">20,300mi</dt>
                                    <dd class="b-car-info__desc-dd">عدد الأميال</dd>
                                    <dt class="b-car-info__desc-dt">5.7L V8</dt>
                                    <dd class="b-car-info__desc-dd">محرك</dd>
                                    <dt class="b-car-info__desc-dt">Auto 8-Speed</dt>
                                    <dd class="b-car-info__desc-dd">انتقال</dd>
                                    <dt class="b-car-info__desc-dt">hybird</dt>
                                    <dd class="b-car-info__desc-dd">وقود</dd>
                                    <dt class="b-car-info__desc-dt">بني ، أسود</dt>
                                    <dd class="b-car-info__desc-dd">الألوان</dd>
                                    <dt class="b-car-info__desc-dt">4x2</dt>
                                    <dd class="b-car-info__desc-dd">DRIVE TRAIN</dd>
                                    <dt class="b-car-info__desc-dt">CXH207</dt>
                                    <dd class="b-car-info__desc-dd">STOCK #</dd>
                                </dl>
                                <div class="b-car-info__item"><span class="b-car-info__item-name">اقتصاد <i class="icon flaticon-fuel"></i></span>
                                    <div class="b-car-info__item-inner"><span class="b-car-info__item-info"><span class="b-car-info__item-info_lg">16</span><span class="b-car-info__item-info_sm"> CITY</span></span><span class="b-car-info__item-info"><span class="b-car-info__item-info_lg">24</span>
                                        <span class="b-car-info__item-info_sm">HWY</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="b-car-info__item"><span class="b-car-info__item-name">الطلب على السيارة <i class="icon flaticon-car"></i></span>
                                    <div class="b-car-info__item-inner"><span class="b-car-info__item-info">HIGH</span>
                                    </div>
                                </div>
                                <div class="b-bnr-2">
                                    <div class="b-bnr-2__icon flaticon-smartphone"></div>
                                    <div class="b-bnr-2__inner">
                                        <div class="b-bnr-2__title">اتصل بالوكيل</div>
                                        <div class="b-bnr-2__info">1-820-431-5815</div>
                                    </div>
                                </div>
                                <!-- end .b-banner-->
                                <form class="b-calculator">
                                    <div class="b-calculator__header">
                                        <div class="b-calculator__header-inner">
                                            <div class="b-calculator__name">حاسبة التمويل</div>
                                            <div class="b-calculator__info">احسب تمويل السيارة</div>
                                        </div>
                                        <i class="icon flaticon-calculator text-primary"></i>
                                    </div>
                                    <div class="b-calculator__group">
                                        <div class="b-calculator__label">سعر السيارة (<i class="icofont icofont-cur-riyal"></i>)</div>
                                        <input class="b-calculator__input form-control" type="text" placeholder="$28.600">
                                    </div>
                                    <div class="b-calculator__group">
                                        <div class="b-calculator__label">سعر الفائدة (%)</div>
                                        <input class="b-calculator__input form-control" type="text" placeholder="10%">
                                    </div>
                                    <div class="b-calculator__group">
                                        <div class="b-calculator__label">الفترة في شهور</div>
                                        <input class="b-calculator__input form-control" type="text" placeholder="15 Months">
                                    </div>
                                    <div class="b-calculator__group">
                                        <div class="b-calculator__label">الدفعة الأولى</div>
                                        <input class="b-calculator__input form-control" type="text" placeholder="$5,000">
                                    </div>
                                    <button class="btn btn-dark">احسب</button>
                                </form>
                                <!-- end .b-calculator-->
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <!-- end .b-car-details-->
            <section class="section-default_top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="ui-title-block">السيارات ذات الصلة</h2>
                            <div class="ui-decor"></div>
                            <div class="related-carousel owl-carousel owl-theme owl-theme_w-btn enable-owl-carousel" data-min768="2" data-min992="3" data-min1200="3" data-margin="30" data-pagination="false" data-navigation="true" data-auto-play="4000" data-stop-on-hover="true">
                                <div class="b-goods-feat">
                                    <div class="b-goods-feat__img">
                                        <img class="img-responsive" src="https://pro-theme.com/html/motorland/assets/media/components/b-goods/featured-1.jpg" alt="foto" /><span class="b-goods-feat__label"><i class="icofont icofont-cur-riyal"></i>45,000<span class="b-goods-feat__label_msrp">MSRP <i class="icofont icofont-cur-riyal"></i>27,000</span></span>
                                    </div>
                                    <ul class="b-goods-feat__desc list-unstyled">
                                        <li class="b-goods-feat__desc-item">35,000 mi</li>
                                        <li class="b-goods-feat__desc-item">سنه: 2017</li>
                                        <li class="b-goods-feat__desc-item">Auto</li>
                                        <li class="b-goods-feat__desc-item">320 hp</li>
                                    </ul>
                                    <h3 class="b-goods-feat__name"><a href="car-details.html">730 بى ام دبليو</a></h3>
                                    <div class="b-goods-feat__info">عزاء للفرار ، ومع ذلك ، فهو يرغب في أن يفرز كيوبيداتت لا ينتج عنه أي متعة؟</div>
                                </div>
                                <!-- end .b-goods-featured-->
                                <div class="b-goods-feat">
                                    <div class="b-goods-feat__img">
                                        <img class="img-responsive" src="https://pro-theme.com/html/motorland/assets/media/components/b-goods/featured-2.jpg" alt="foto" /><span class="b-goods-feat__label"><i class="icofont icofont-cur-riyal"></i>45,000<span class="b-goods-feat__label_msrp">MSRP <i class="icofont icofont-cur-riyal"></i>27,000</span></span>
                                    </div>
                                    <ul class="b-goods-feat__desc list-unstyled">
                                        <li class="b-goods-feat__desc-item">35,000 mi</li>
                                        <li class="b-goods-feat__desc-item">سنه: 2017</li>
                                        <li class="b-goods-feat__desc-item">Auto</li>
                                        <li class="b-goods-feat__desc-item">320 hp</li>
                                    </ul>
                                    <h3 class="b-goods-feat__name"><a href="car-details.html">Toyota Avalon TX</a></h3>
                                    <div class="b-goods-feat__info">عزاء للفرار ، ومع ذلك ، فهو يرغب في أن يفرز كيوبيداتت لا ينتج عنه أي متعة؟</div>
                                </div>
                                <!-- end .b-goods-featured-->
                                <div class="b-goods-feat">
                                    <div class="b-goods-feat__img">
                                        <img class="img-responsive" src="https://pro-theme.com/html/motorland/assets/media/components/b-goods/featured-3.jpg" alt="foto" /><span class="b-goods-feat__label"><i class="icofont icofont-cur-riyal"></i>45,000<span class="b-goods-feat__label_msrp">MSRP <i class="icofont icofont-cur-riyal"></i>27,000</span></span>
                                    </div>
                                    <ul class="b-goods-feat__desc list-unstyled">
                                        <li class="b-goods-feat__desc-item">35,000 mi</li>
                                        <li class="b-goods-feat__desc-item">سنه: 2017</li>
                                        <li class="b-goods-feat__desc-item">Auto</li>
                                        <li class="b-goods-feat__desc-item">320 hp</li>
                                    </ul>
                                    <h3 class="b-goods-feat__name"><a href="car-details.html">730 بى ام دبليو</a></h3>
                                    <div class="b-goods-feat__info">عزاء للفرار ، ومع ذلك ، فهو يرغب في أن يفرز كيوبيداتت لا ينتج عنه أي متعة؟</div>
                                </div>
                                <!-- end .b-goods-featured-->
                                <div class="b-goods-feat">
                                    <div class="b-goods-feat__img">
                                        <img class="img-responsive" src="https://pro-theme.com/html/motorland/assets/media/components/b-goods/featured-4.jpg" alt="foto" /><span class="b-goods-feat__label"><i class="icofont icofont-cur-riyal"></i>45,000<span class="b-goods-feat__label_msrp">MSRP <i class="icofont icofont-cur-riyal"></i>27,000</span></span>
                                    </div>
                                    <ul class="b-goods-feat__desc list-unstyled">
                                        <li class="b-goods-feat__desc-item">35,000 mi</li>
                                        <li class="b-goods-feat__desc-item">سنه: 2017</li>
                                        <li class="b-goods-feat__desc-item">Auto</li>
                                        <li class="b-goods-feat__desc-item">320 hp</li>
                                    </ul>
                                    <h3 class="b-goods-feat__name"><a href="car-details.html">730 بى ام دبليو</a></h3>
                                    <div class="b-goods-feat__info">عزاء للفرار ، ومع ذلك ، فهو يرغب في أن يفرز كيوبيداتت لا ينتج عنه أي متعة؟</div>
                                </div>
                                <!-- end .b-goods-featured-->
                                <div class="b-goods-feat">
                                    <div class="b-goods-feat__img">
                                        <img class="img-responsive" src="https://pro-theme.com/html/motorland/assets/media/components/b-goods/featured-5.jpg" alt="foto" /><span class="b-goods-feat__label"><i class="icofont icofont-cur-riyal"></i>45,000<span class="b-goods-feat__label_msrp">MSRP <i class="icofont icofont-cur-riyal"></i>27,000</span></span>
                                    </div>
                                    <ul class="b-goods-feat__desc list-unstyled">
                                        <li class="b-goods-feat__desc-item">35,000 mi</li>
                                        <li class="b-goods-feat__desc-item">سنه: 2017</li>
                                        <li class="b-goods-feat__desc-item">Auto</li>
                                        <li class="b-goods-feat__desc-item">320 hp</li>
                                    </ul>
                                    <h3 class="b-goods-feat__name"><a href="car-details.html">730 بى ام دبليو</a></h3>
                                    <div class="b-goods-feat__info">عزاء للفرار ، ومع ذلك ، فهو يرغب في أن يفرز كيوبيداتت لا ينتج عنه أي متعة؟</div>
                                </div>
                                <!-- end .b-goods-featured-->
                            </div>
                            <!-- end .related-carousel-->
                        </div>
                    </div>
                </div>
            </section>
            <!-- end .section-default_top-->
        </main>
        <!-- end .l-main-content-->
    </div>
    <!-- end layout-theme-->
</section>
@section('js')
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="{{asset('front/lnkse/car-details/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/lnkse/car-details/js/custom.js')}}"></script>
<script src="{{asset('front/lnkse/car-details/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('front/lnkse/car-details/js/jquery.sliderPro.min.js')}}"></script>
@endsection

</x-front-layout>

