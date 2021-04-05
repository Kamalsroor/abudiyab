    <div>


        @if ($currentStep == 1)
            <link rel="stylesheet" href="{{asset('front/web/css/H2.css')}}" />
            <link rel="stylesheet" href="{{asset('front/lnkse/botton_style.css')}}" />
            <link rel="stylesheet" type="text/css" href="{{asset('front/admin/files/assets/icon/icofont/css/icofont.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('front/admin/files/bower_components/switchery/dist/switchery.min.css')}}">
        @elseif ($currentStep == 2)
            <link rel="stylesheet" href="{{asset('front/lnkse/botton_style.css')}}" />
            <link rel="stylesheet" href="{{asset('front/web/css/H3.css')}}" />
            <link rel="stylesheet" type="text/css" href="{{asset('front/admin/files/assets/icon/icofont/css/icofont.css')}}">
            <script>
                $('#additions').toggle(0);
                $('#additions').toggle(0);
                $('.fa-info-circle').click(function (){
                    $('#additions').toggle(1000);
                });
            </script>
        @elseif ($currentStep == 3 || $currentStep == 4)
            <link rel="stylesheet" href="{{asset('front/web/css/H4.css')}}" />
            <link rel="stylesheet" href="{{asset('front/lnkse/botton_style.css')}}" />
            <link rel="stylesheet" type="text/css" href="{{asset('front/admin/files/assets/icon/icofont/css/icofont.css')}}">
        @elseif ($currentStep == 5)
        <link rel="stylesheet" href="{{asset('front/web/css/H5.css')}}" />
        <link rel="stylesheet" href="{{asset('front/lnkse/botton_style.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('front/admin/files/assets/icon/icofont/css/icofont.css')}}">
        @endif

    <div class='insertLoginForm'></div>
    <div class='bodycontainer'>
        <div class="connn">

            <div class="head @if ($currentStep == 3) col-lg-8 @else col-lg-12 @endif" style="padding: 0;">
                <div class="bnb" style="width: 100% !important;">.</div>
                <div>
                    <ul class="pro-bar">
                        <li style="width: 19%;margin-bottom: 15px;">البحث</li>
                        <li style="width: 19%;margin-bottom: 15px;" class="">الإضافات</li>
                        <li style="width: 19%;margin-bottom: 15px;" class="{{ $currentStep >= 2 ? 'active' : '' }}">شروط</li>
                        <li style="width: 19%;margin-bottom: 15px;" class="{{ $currentStep >= 3 ? 'active' : '' }}">الدفع</li>
                        <li style="width: 19%;margin-bottom: 15px;" class="">التأكيد</li>
                    </ul>
                </div>
            </div>
            <div class='insertLogin' style='position: absolute;top:-10%;left:35%;z-index:99999;'>

            </div>
            @if($currentStep == 4)
            <div style="height: 50vh">

            </div>
            @endif
            <div style="height: auto;overflow: hidden;" class="container-fluid">


                @include('livewire.booking.step1')
                @include('livewire.booking.step2')
                @include('livewire.booking.step3')
                @include('livewire.booking.step4')




                {{-- col-md-10 col-sm-10" --}}

                @if ($currentStep != 5)
                    <div class="ac-or-no @if ($currentStep == 3) col-lg-8 @else col-lg-12 @endif">
                        <div class="container-fluid">
                            <div class="row d-flex justify-content-between">
                                    <div class="col-3 mx-0 ">
                                        <button class="inb YH-a" wire:click="back({{$currentStep - 1}})" style="margin-right: 0;background-color: #002366 !important;
                                        color: white !important;float: right;"> عوده </button>
                                    </div>

                                    <div class="col-6 mx-0 booking-car-notes float-normal {{ $currentStep != 2 ? 'display-none' : '' }}" style="text-align: center;">

                                        <label class="orange-checkbox-value">
                                            يرجى قراءة
                                            <input type="checkbox" name="" id="termsCheck">
                                            <a id="Booking_termsandConditions" data-toggle="modal" class="terms-text-a"
                                                onclick="$('#OrSimilarHidableModal').toggle();">اﻟﺸﺮوط واﻷﺣﻜﺎم</a> والموافقة
                                            عليها قبل الاستمرار
                                        </label>
                                    </div>
                                    <div class="col-3 mx-0">
                                        <button class="inb YH-b" name="GO"   wire:click="{{ $currentStep == 1 ? 'firstStepSubmit' : '' }}{{ $currentStep == 2 ? 'secondStepSubmit' : '' }}{{ $currentStep == 3 ? 'thirdStepSubmit' : '' }}"  style="margin-left: 0;background-color: #002366 !important;
                                        color: white !important;">استمرار</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                @endif
                {{--  steps --}}
            </div>

        </div>

    </div>

</div>
















