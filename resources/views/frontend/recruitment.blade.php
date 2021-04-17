<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']">
    <section class="recruitment" style="background: url('{{ asset('front/img/recruitment.png') }}'); background-size: cover;">
        <div class="recruitment_center">
            <header class="recruitment_center_header" style="background: url('{{asset('front/img/jobs.jpg')}}')">
                <div class="recruitment_center_header_content">
                    <div>
                        <h1>قسم التوظيف</h1>
                        <h2>مرحبًا بكم في قسم التوظيف في أبو دياب لتأجير السيارات. يسعدنا انضمامك إلينا</h2>
                    </div>
                </div>
            </header>
            <div class="recruitment_center_content">
                <div class="recruitment_center_content_form">
                    <form action="#">
                        <div class="select">
                            <label for="">اختر الوظيفه المناسبه <span>*</span></label>
                            <select id="" required>
                                <option value="" hidden>وظيفتي هيا</option>
                                <option value="">مبرمج ويب</option>
                                <option value="">مهندس شبكات</option>
                                <option value="">مصم جرافك</option>
                              </select>
                        </div>
                        <div class="input">
                            <label for="">الاسم <span>*</span></label>
                            <input required type="text" id="" placeholder="الاسم">
                        </div>
                        <div class="input">
                            <label for="">رقم الجوال <span>*</span></label>
                            <input required type="number" id="" placeholder="رقم الجوال">
                        </div>
                        <div class="input">
                            <label for="">البريد الالكتروني <span>*</span></label>
                            <input required type="email" id="" placeholder="البريد الالكتروني">
                        </div>
                        <div class="input">
                            <label for="">الراتب المتوقع <span>*</span></label>
                            <input required type="number" id="" placeholder="الراتب المتوقع">
                        </div>
                        <div class="input">
                            <label for="">السيرة الذاتية <span>*</span></label>
                            <input required type="file" id="" placeholder="السيرة الذاتية">
                        </div>
                        <div class="textarea">
                            {{-- <label for="">ملاحظات <span>*</span></label> --}}
                            <textarea required  id="" placeholder="رسالتك"></textarea>
                        </div>
                        <div class="button">
                            <button class="primary-btn">ارسال</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-front-layout>
