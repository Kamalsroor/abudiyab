<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']">
    <section class="points-program-page">

        <section class="points-program-page_head" style="background: url({{asset('front/img/branches.jpg')}});background-repeat: no-repeat; background-size: cover;"><h1 class="main-page-title">برنامج النقاط</h1></section>

            <section class="points-program-page_center">
                <div class="container-fluid px-0 mx-0 my-0" style="background-color: #ededed;">


                    <div class="container px-3 my-0" style="background-color: white;">
                        <img class="w-100 my-2" src="{{asset('front/img/نقاط---موقع.jpg')}}" alt="points-program">
                        <h4 class="color-black text-right py-3 my-5">شروط و أحكام برنامج نقاطى</h4>
                        <ul class="my-0 pb-5 px-5 ">
                            <li class="text-right lead px-3">أن يكون العميل مسجلاً في عضوية ابو ذياب.</li>
                            <li class="text-right lead px-3">سداد كامل مستحقات العقد عند إغلاق العقد واستلام السيارة.</li>
                            <li class="text-right lead px-3">يتم احتساب 1/2 نقطة لكل 100 ريال لعملاء الأفراد من العضوية الفضية.</li>
                            <li class="text-right lead px-3">يتم احتساب 1 نقطة لكل 100 ريال لعملاء الأفراد من العضوية الذهبية والبلاتينية.</li>
                            <li class="text-right lead px-3">تبديل النقاط يشمل الايجار اليومي، الكيلومترات الزائدة والساعات الإضافية.</li>
                            <li class="text-right lead px-3">المبالغ المدفوعة عن (تلفيات، رسوم الشحن، المخالفات المرورية وتفويض السفر) لا يشملها احتساب النقاط.</li>
                            <li class="text-right lead px-3">يتم إلغاء النقاط المكتسبة للعميل في حال إضافته إلى القائمة السوداء.</li>
                        </ul>

                    </div>
                </div>

            </section>

    </section>


</x-front-layout>
