<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']" >
    @section('styles')
        <link rel="stylesheet" href="{{asset('front/web/css/branches.css')}}">
        <style type="text/css">
            .branch0, .branch3{
                text-align: center;
            }
            @media (max-width: 1260px){
                .branch0{
                    text-align: left;
                }
                .branch3{
                    text-align: right;
                }
            }
        </style>
    @endsection


    <div class="msec">
        <div class="con-tit">
            <div>
                <h1>فروعنا</h1>
            </div>
        </div>
    </div>


    <div class="foro3">
        <div class="cart-search">
            <div class="mon">
                <div style="width: 24%;" class="branch branch0">
                    <p class="region" id='0'>المنطقة الوسطي</p>
                </div>
                <div style="width: 24%;" class="branch">
                    <p class="region" id='1'>المنطقة الغربية</p>
                </div>
                <div style="width: 24%;" class="branch">
                    <p class="region" id='2'>المنطقة الشرقية</p>
                </div>
                <div style="width: 24%;" class="branch branch3">
                    <p class="region" id='3'>المنطقة الجنوبية</p>
                </div>
            </div>
            <div class="cart-con">
                <div class="darkn">

                </div>
            </div>
        </div>
    </div>

    @section('js')
    <script src="{{asset('front/lnkse/branches.js')}}"></script>
    @endsection

</x-front-layout>
