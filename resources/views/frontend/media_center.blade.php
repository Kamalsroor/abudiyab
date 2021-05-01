<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']" >
    <section class="media-center">
        {{-- {{optional(Settings::instance('media_center_background'))->getFirstMediaUrl('media_center_background')}} --}}
        {{-- {{Settings::locale(app()->getLocale())->get('media_center_title')}} --}}
        <section class="media-center_head" style="background: url(https://3.bp.blogspot.com/-hA5t25xlHnM/UjBj-6AS8PI/AAAAAAAASCo/FM_s9s_FyeU/s1600/%D8%AE%D9%84%D9%81%D9%8A%D8%A7%D8%AA,%D8%B5%D9%88%D8%B1,%D8%B3%D9%8A%D8%A7%D8%B1%D8%A7%D8%AA,%D8%AC%D9%85%D9%8A%D9%84%D8%A9+%283%29.jpg);background-repeat: no-repeat; background-size: cover;">
            <div class="media-center_head_overlay-black">
                <h1>المركز الاعلامي</h1>
            </div>
        </section>

        {{-- <section class="media-center_center">

            <div class="media-center_center_content">
                <div class="media-center_center_content_news">
                    <div class="media-center_center_content_news_img">
                        <img src="https://www.iYelo.com/admin/Media//WebsiteNews/2021/1/FD146181-0FC6-4247-8DD8-C7BFA9EFEA5E.jpeg" alt="">
                    </div>
                    <div class="media-center_center_content_news_title">
                        <h2>المناهل العالمية" تكرم "يلو" ضمن الشراكة المتجددة بينهما</h2>
                    </div>
                    <div class="media-center_center_content_news_describe">
                        <p>احتفلت شركتا الوفاق لتأجير السيارات "يلو" والمناهل العالمية وكلاء سيارات نيسان في المملكة بالشراكة المتجددة بينهما، والمبنية على تقديم الأفضل دائماً للعملاء، حيث قام مؤخراً وفد من شركة المناهل العالمية بزيارة لمقر "يلو" في مدينة الرياض؛ قدّم خلالها الرئيس التنفيذي لشركة المناهل العالمية درعاً تقديرية لشركة الوفاق لتأجير السيارات "يلو" بهذه المناسبة، تسلمه المدير العام للشركة الأستاذ منير الزعبي.</p>
                    </div>
                    <a href="#" class="primary-btn">اقرأ المزيد</a>
                </div>
                <div class="media-center_center_content_news">
                    <div class="media-center_center_content_news_img">
                        <img src="https://www.iYelo.com/admin/Media//WebsiteNews/2020/12/4E74019A-50BF-4669-B9A5-F5CCB56F3611.jpeg" alt="">
                    </div>
                    <div class="media-center_center_content_news_title">
                        <h2>المناهل العالمية" تكرم "يلو" ضمن الشراكة المتجددة بينهما</h2>
                    </div>
                    <div class="media-center_center_content_news_describe">
                        <p>احتفلت شركتا الوفاق لتأجير السيارات "يلو" والمناهل العالمية وكلاء سيارات نيسان في المملكة بالشراكة المتجددة بينهما، والمبنية على تقديم الأفضل دائماً للعملاء، حيث قام مؤخراً وفد من شركة المناهل العالمية بزيارة لمقر "يلو" في مدينة الرياض؛ قدّم خلالها الرئيس التنفيذي لشركة المناهل العالمية درعاً تقديرية لشركة الوفاق لتأجير السيارات "يلو" بهذه المناسبة، تسلمه المدير العام للشركة الأستاذ منير الزعبي.</p>
                    </div>
                    <a href="#" class="primary-btn">اقرأ المزيد</a>
                </div>
                <div class="media-center_center_content_news">
                    <div class="media-center_center_content_news_img">
                        <img src="https://www.iYelo.com/admin/Media//WebsiteNews/2020/12/65B1E313-8E40-4C6D-896E-50CF0132D5B4.jpeg" alt="">
                    </div>
                    <div class="media-center_center_content_news_title">
                        <h2>المناهل العالمية" تكرم "يلو" ضمن الشراكة المتجددة بينهما</h2>
                    </div>
                    <div class="media-center_center_content_news_describe">
                        <p>احتفلت شركتا الوفاق لتأجير السيارات "يلو" والمناهل العالمية وكلاء سيارات نيسان في المملكة بالشراكة المتجددة بينهما، والمبنية على تقديم الأفضل دائماً للعملاء، حيث قام مؤخراً وفد من شركة المناهل العالمية بزيارة لمقر "يلو" في مدينة الرياض؛ قدّم خلالها الرئيس التنفيذي لشركة المناهل العالمية درعاً تقديرية لشركة الوفاق لتأجير السيارات "يلو" بهذه المناسبة، تسلمه المدير العام للشركة الأستاذ منير الزعبي.</p>
                    </div>
                    <a href="#" class="primary-btn">اقرأ المزيد</a>
                </div>
                <div class="media-center_center_content_news">
                    <div class="media-center_center_content_news_img">
                        <img src="https://www.iYelo.com/admin/Media//WebsiteNews/2020/12/A111C9ED-D4C0-40E8-A981-09B673D66BEF.jpeg" alt="">
                    </div>
                    <div class="media-center_center_content_news_title">
                        <h2>المناهل العالمية" تكرم "يلو" ضمن الشراكة المتجددة بينهما</h2>
                    </div>
                    <div class="media-center_center_content_news_describe">
                        <p>احتفلت شركتا الوفاق لتأجير السيارات "يلو" والمناهل العالمية وكلاء سيارات نيسان في المملكة بالشراكة المتجددة بينهما، والمبنية على تقديم الأفضل دائماً للعملاء، حيث قام مؤخراً وفد من شركة المناهل العالمية بزيارة لمقر "يلو" في مدينة الرياض؛ قدّم خلالها الرئيس التنفيذي لشركة المناهل العالمية درعاً تقديرية لشركة الوفاق لتأجير السيارات "يلو" بهذه المناسبة، تسلمه المدير العام للشركة الأستاذ منير الزعبي.</p>
                    </div>
                    <a href="#" class="primary-btn">اقرأ المزيد</a>
                </div>
                <div class="media-center_center_content_news">
                    <div class="media-center_center_content_news_img">
                        <img src="https://www.iYelo.com/admin/Media//WebsiteNews/2020/11/522C1A82-F9A2-4114-908A-0E599DDEC855.jpeg" alt="">
                    </div>
                    <div class="media-center_center_content_news_title">
                        <h2>المناهل العالمية" تكرم "يلو" ضمن الشراكة المتجددة بينهما</h2>
                    </div>
                    <div class="media-center_center_content_news_describe">
                        <p>احتفلت شركتا الوفاق لتأجير السيارات "يلو" والمناهل العالمية وكلاء سيارات نيسان في المملكة بالشراكة المتجددة بينهما، والمبنية على تقديم الأفضل دائماً للعملاء، حيث قام مؤخراً وفد من شركة المناهل العالمية بزيارة لمقر "يلو" في مدينة الرياض؛ قدّم خلالها الرئيس التنفيذي لشركة المناهل العالمية درعاً تقديرية لشركة الوفاق لتأجير السيارات "يلو" بهذه المناسبة، تسلمه المدير العام للشركة الأستاذ منير الزعبي.</p>
                    </div>
                    <a href="#" class="primary-btn">اقرأ المزيد</a>
                </div>
                <div class="media-center_center_content_news">
                    <div class="media-center_center_content_news_img">
                        <img src="https://www.iYelo.com/admin/Media//WebsiteNews/2020/11/CC6E22A8-2A21-4B46-8A00-2D2B0EDBFC5F.jpeg" alt="">
                    </div>
                    <div class="media-center_center_content_news_title">
                        <h2>المناهل العالمية" تكرم "يلو" ضمن الشراكة المتجددة بينهما</h2>
                    </div>
                    <div class="media-center_center_content_news_describe">
                        <p>احتفلت شركتا الوفاق لتأجير السيارات "يلو" والمناهل العالمية وكلاء سيارات نيسان في المملكة بالشراكة المتجددة بينهما، والمبنية على تقديم الأفضل دائماً للعملاء، حيث قام مؤخراً وفد من شركة المناهل العالمية بزيارة لمقر "يلو" في مدينة الرياض؛ قدّم خلالها الرئيس التنفيذي لشركة المناهل العالمية درعاً تقديرية لشركة الوفاق لتأجير السيارات "يلو" بهذه المناسبة، تسلمه المدير العام للشركة الأستاذ منير الزعبي.</p>
                    </div>
                    <a href="#" class="primary-btn">اقرأ المزيد</a>
                </div>
                <div class="media-center_center_content_news">
                    <div class="media-center_center_content_news_img">
                        <img src="https://www.iYelo.com/admin/Media//WebsiteNews/2020/11/6ADC931C-51ED-4F28-B65A-7993C85EB2D3.jpeg" alt="">
                    </div>
                    <div class="media-center_center_content_news_title">
                        <h2>المناهل العالمية" تكرم "يلو" ضمن الشراكة المتجددة بينهما</h2>
                    </div>
                    <div class="media-center_center_content_news_describe">
                        <p>احتفلت شركتا الوفاق لتأجير السيارات "يلو" والمناهل العالمية وكلاء سيارات نيسان في المملكة بالشراكة المتجددة بينهما، والمبنية على تقديم الأفضل دائماً للعملاء، حيث قام مؤخراً وفد من شركة المناهل العالمية بزيارة لمقر "يلو" في مدينة الرياض؛ قدّم خلالها الرئيس التنفيذي لشركة المناهل العالمية درعاً تقديرية لشركة الوفاق لتأجير السيارات "يلو" بهذه المناسبة، تسلمه المدير العام للشركة الأستاذ منير الزعبي.</p>
                    </div>
                    <a href="#" class="primary-btn">اقرأ المزيد</a>
                </div>
                <div class="media-center_center_content_news">
                    <div class="media-center_center_content_news_img">
                        <img src="https://www.iYelo.com/admin/Media//WebsiteNews/2021/1/FD146181-0FC6-4247-8DD8-C7BFA9EFEA5E.jpeg" alt="">
                    </div>
                    <div class="media-center_center_content_news_title">
                        <h2>المناهل العالمية" تكرم "يلو" ضمن الشراكة المتجددة بينهما</h2>
                    </div>
                    <div class="media-center_center_content_news_describe">
                        <p>احتفلت شركتا الوفاق لتأجير السيارات "يلو" والمناهل العالمية وكلاء سيارات نيسان في المملكة بالشراكة المتجددة بينهما، والمبنية على تقديم الأفضل دائماً للعملاء، حيث قام مؤخراً وفد من شركة المناهل العالمية بزيارة لمقر "يلو" في مدينة الرياض؛ قدّم خلالها الرئيس التنفيذي لشركة المناهل العالمية درعاً تقديرية لشركة الوفاق لتأجير السيارات "يلو" بهذه المناسبة، تسلمه المدير العام للشركة الأستاذ منير الزعبي.</p>
                    </div>
                    <a href="#" class="primary-btn">اقرأ المزيد</a>
                </div>
                <div class="media-center_center_content_news">
                    <div class="media-center_center_content_news_img">
                        <img src="https://www.iYelo.com/admin/Media//WebsiteNews/2021/1/FD146181-0FC6-4247-8DD8-C7BFA9EFEA5E.jpeg" alt="">
                    </div>
                    <div class="media-center_center_content_news_title">
                        <h2>المناهل العالمية" تكرم "يلو" ضمن الشراكة المتجددة بينهما</h2>
                    </div>
                    <div class="media-center_center_content_news_describe">
                        <p>احتفلت شركتا الوفاق لتأجير السيارات "يلو" والمناهل العالمية وكلاء سيارات نيسان في المملكة بالشراكة المتجددة بينهما، والمبنية على تقديم الأفضل دائماً للعملاء، حيث قام مؤخراً وفد من شركة المناهل العالمية بزيارة لمقر "يلو" في مدينة الرياض؛ قدّم خلالها الرئيس التنفيذي لشركة المناهل العالمية درعاً تقديرية لشركة الوفاق لتأجير السيارات "يلو" بهذه المناسبة، تسلمه المدير العام للشركة الأستاذ منير الزعبي.</p>
                    </div>
                    <a href="#" class="primary-btn">اقرأ المزيد</a>
                </div>
                <div class="media-center_center_content_news">
                    <div class="media-center_center_content_news_img">
                        <img src="https://www.iYelo.com/admin/Media//WebsiteNews/2021/1/FD146181-0FC6-4247-8DD8-C7BFA9EFEA5E.jpeg" alt="">
                    </div>
                    <div class="media-center_center_content_news_title">
                        <h2>المناهل العالمية" تكرم "يلو" ضمن الشراكة المتجددة بينهما</h2>
                    </div>
                    <div class="media-center_center_content_news_describe">
                        <p>احتفلت شركتا الوفاق لتأجير السيارات "يلو" والمناهل العالمية وكلاء سيارات نيسان في المملكة بالشراكة المتجددة بينهما، والمبنية على تقديم الأفضل دائماً للعملاء، حيث قام مؤخراً وفد من شركة المناهل العالمية بزيارة لمقر "يلو" في مدينة الرياض؛ قدّم خلالها الرئيس التنفيذي لشركة المناهل العالمية درعاً تقديرية لشركة الوفاق لتأجير السيارات "يلو" بهذه المناسبة، تسلمه المدير العام للشركة الأستاذ منير الزعبي.</p>
                    </div>
                    <a href="#" class="primary-btn">اقرأ المزيد</a>
                </div>
            </div>

        </section> --}}

    </section>
</x-front-layout>
