<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']">

    @section('styles')

        <link rel="stylesheet" type="text/css" href="{{ asset('front') }}/bootstrap-slider.min.css">
        <link rel="stylesheet" type="text/css" href="{{asset('front/admin/files/assets/icon/icofont/css/icofont.css')}}">
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('front/lnkse/botton_style.css') }}"> --}}
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <style>
            .select2-container *{
                color: black;
            }
        </style>
    @endsection

    <div class="container-fluid m-0 p-0" style="background-color: #dcdcdc8c">
        <!-- fleet hero pic -->
        <div style="background-image: url({{optional(Settings::instance('fleet_background'))->getFirstMediaUrl('fleet_background')}});height:340px;background-position: center;background-size: cover;background-repeat: no-repeat">
         {{-- <img class="w-100" src="{{asset('front/img/Webp.net-compress-image.jpg')}}" alt="hero image"> --}}
         <div class="d-flex justify-content-center align-items-center" style="background-color: #000000c7;width:100%;height: 100%;">
            <h1 class="main-page-title" style="font-size: 50px; padding-bottom:10px; font-weight:600;color:white;border-bottom:2px red solid;">{{Settings::locale(app()->getLocale())->get('fleet_title')}}</h1>
            {{-- <h1 class="main-page-title" style="font-size: 50px; padding-bottom:10px; font-weight:600;color:white;border-bottom:2px red solid;">{!!Settings::locale(app()->getLocale())->get('fleet_content')!!}</h1> --}}
         </div>
        </div>
    </div>
        <livewire:show-fleet/>



@section('js')

<!-- range slider js -->
<script type="text/javascript"src="{{ asset('front/') }}/bootstrap-slider.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="{{ asset('front/admin/files') }}/assets/pages/range-slider.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


 <script type="text/javascript">


        function booking(car_id) {
            let  receivingBranche = $('#receivingBrancheInput').val();
            let  deliveryBranche = $('#deliveryBrancheInput').val();
            let  receivingDate = $('#receivingDateInput').val();
            let  deliveryDate = $('#deliveryDateInput').val();
            let url = "{{route('front.booking')}}";
        let newURL = url + "?car_id=" + car_id + "&" +'receiving_branch='+receivingBranche+'&delivery_branch='+deliveryBranche+'&receiving_date='+receivingDate+'&delivery_date='+deliveryDate

        window.location.href = newURL;


        }

        $(function () {
            $('[data-toggle="popover"]').popover();
        });

        function favorite(i) {
            $(i).toggleClass('ii');
            console.log(i);
        }

        window.addEventListener('simpilar',function(){
            // fleet-popup
            $('.fleet-popup').css('display','block');
        })
        function booking(){
            window.livewire.emit('redirectToBookingSteps');
        }
        window.addEventListener('filterCategory', function(category) {
                for(let category_id of category.detail)
                {
                    let cat=`#category-${category_id}`;
                    let largecat=`#largCategory-${category_id}`;
                    $(cat).next().addClass('active');
                    $(largecat).next().addClass('active');
                    console.log($(largecat).next());
                }
        });

 </script>



 @endsection






</x-front-layout>
