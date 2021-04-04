<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']">

    @section('styles')

        <link rel="stylesheet" type="text/css" href="{{ asset('front/admin/files') }}/bower_components/seiyria-bootstrap-slider/dist/css/bootstrap-slider.css">
        <link rel="stylesheet" type="text/css" href="{{asset('front/admin/files/assets/icon/icofont/css/icofont.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('front/lnkse/botton_style.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <style>
            .select2-container *{
                color: black;
            }
        </style>
    @endsection
    <div class="container-fluid m-0 p-0" style="background-color: #4c8dc3;">
        <!-- fleet hero pic -->
        <div>
         <img class="w-100" src="{{asset('front/img/Webp.net-compress-image.jpg')}}" alt="hero image">
     </div>
        <livewire:show-fleet/>



@section('js')

<!-- range slider js -->
<script type="text/javascript"src="{{ asset('front/admin/files') }}/bower_components/seiyria-bootstrap-slider/dist/bootstrap-slider.js"></script>
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

 </script>



 @endsection






</x-front-layout>
