<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']" >
    <section class="branch-page">

        <section class="branch-page_head" style="background: url({{optional(Settings::instance('branches_backgraund'))->getFirstMediaUrl('branches_backgraund')}});"><h1>{{Settings::locale(app()->getLocale())->get('branches_title')}}</h1></section>

        <section class="branch-page_center">
                <div class="branch-page_center_regions">
                    <div class="branch branch-regoin " data-id="1">
                        <p >المنطقة الوسطي</p>
                    </div>
                    <div class="branch branch-regoin" data-id="2">
                        <p >المنطقة الغربية</p>
                    </div>
                    <div class="branch branch-regoin" data-id="3">
                        <p >المنطقة الشرقية</p>
                    </div>
                    <div class="branch branch-regoin " data-id="4">
                        <p >المنطقة الجنوبية</p>
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
        </script>
    @endsection
</x-front-layout>
