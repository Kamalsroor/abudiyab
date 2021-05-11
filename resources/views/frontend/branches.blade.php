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


            <branches  branch-url="{{route('api.branches.index')}}" region-url="{{route('api.regions.index')}}"></branches>





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
