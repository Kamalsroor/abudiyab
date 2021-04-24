<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']" >
    <section class="branch-page">

        <section class="branch-page_head" style="background: url( {{optional(Settings::instance('branches_backgraund'))->getFirstMediaUrl('branches_backgraund')}} );background-repeat: no-repeat; background-size: cover;">
            <div class="branch-page_head_overlay-black">
                <div>
                    <h1>{{Settings::locale(app()->getLocale())->get('branches_title')}}</h1>
                    <p>مرحباً بكم في فروع شركة أبو ذياب لتأجير السيارات</p>
                </div>
            </div>
        </section>
        {{-- {{optional(Settings::instance('branches_backgraund'))->getFirstMediaUrl('branches_backgraund')}}    ---------     {{Settings::locale(app()->getLocale())->get('branches_title')}}--}}
        <section class="branch-page_map">

            <div class="branch-page_map_input-container">
                <div class="branch-page_map_input-container_input-content">
                    <div class="branch-page_map_input-container_input-content_head">
                        <div>الفروع الرئيسية</div>
                    </div>
                    <form action="#" class="branch-page_map_input-container_input-content_form">
                        <div class="branch-page_map_input-container_input-content_form_input">
                            <label>البحث بإسم المدينة</label>
                            <select>
                                <option value="all">جميع المدن</option>
                                <option value="0">الرياض</option>
                                <option value="1">جدة</option>
                                <option value="2">الدمام</option>
                                <option value="3">خميس مشيط</option>
                            </select>
                        </div>
                        <div class="branch-page_map_input-container_input-content_form_input">
                            <label>البحث بإسم الفرع</label>
                            <select>
                                <option value="all">جميع الفروع</option>
                                <option value="0">الرياض</option>
                                <option value="1">جدة</option>
                                <option value="2">الدمام</option>
                                <option value="3">خميس مشيط</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>

            <div class="branch-page_map_branches-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29001.000835556453!2d46.729496110777525!3d24.688225796719937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4c842f5512d0930a!2z2KfYqNmIINiw2YrYp9ioINin2YTYp9iv2KfYsdipINin2YTYudin2YXYqQ!5e0!3m2!1sar!2seg!4v1618906838084!5m2!1sar!2seg" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

        </section>
        <section class="branch-page_center">
                <div class="branch-page_center_head">
                    <h2>الوصول الي فروعنه <i class="fas fa-bars fa-bars-branch"></i></h2>
                    <div class="branch-page_center_head_regions">
                        <div class="branch branch-regoin" data-id="1">
                            <p >المنطقة الوسطي</p>
                        </div>
                        <div class="branch branch-regoin" data-id="2">
                            <p >المنطقة الغربية</p>
                        </div>
                        <div class="branch branch-regoin" data-id="3">
                            <p >المنطقة الشرقية</p>
                        </div>
                        <div class="branch branch-regoin" data-id="4">
                            <p >المنطقة الجنوبية</p>
                        </div>
                    </div>
                </div>
                <div class="branch-page_center_dranches" style="background: url({{asset('front/img/riyadh.jpg')}});background-repeat: no-repeat;background-size: cover;background-attachment: fixed;">
                    <div class="container-fluid">
                        <div class="row branch-page_center_dranches_items">
                            @foreach ($branches as $branch)

                            <div class="col-12 col-md-6 col-lg-3 mb-2">
                                <div class="branch-page_center_dranches_branch">
                                    <div class="branch-hidden-list">
                                        <p class="detail">التفاصيل</p>
                                        <div class="section-detail">
                                            <h4>العنوان</h4>
                                            <p>{{$branch->name}}</p>
                                            <p>{{$branch->address}}</p>
                                            <h4>رقم الهاتف</h4>
                                            <p>{{$branch->tele_number}}</p>
                                            <h4>موعدنا</h4>
                                            @if ($branch->work_time != null)
                                                @foreach ($branch->work_time as $day => $time)
                                                <p>{{ trans('branches.weekDays')[$day]}} {{$time['lock'] ? "مغلق" : $time['timeopen'] . ' : ' . $time['timeclose']  }}</p>
                                                @endforeach
                                            @endif
                                            <button>الموقع</button>
                                        </div>
                                    </div>
                                    <div class="branch-list-visible">
                                        <img src="{{asset('front/img/logo-edited-.png')}}" alt="logo">
                                        <h2>{{$branch->name}}</h2>
                                        <a href="tel:{{$branch->tele_number}}" class="btn btn-danger btn-lg btn-block"><i class="fas fa-phone-volume"></i> {{$branch->tele_number}}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
        </section>


    </section>

    @section('js')
        <script>
            let BranchApisUrl = "{{ route('api.branches.index') }}";
            let branchesLogo="{{asset('front/img/logo-edited-.png')}}";
            let weekDays=   @json(trans('branches.weekDays'));
            $('.fa-bars-branch').click(function() {
                $('.branch-page_center_head_regions').slideToggle();
                $(this).toggleClass('fa-bars');
                $(this).toggleClass('fa-times');
            });
            $('.branch-regoin').click(function() {
                $('.branch-regoin').removeClass('active');
                $(this).addClass('active');
            });
        </script>
    @endsection
</x-front-layout>
