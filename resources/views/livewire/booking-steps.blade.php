    <div>
        @if ($currentStep == 1)
            <link rel="stylesheet" type="text/css" href="{{asset('front/admin/files/bower_components/switchery/dist/switchery.min.css')}}">
        @endif


    <div class='insertLoginForm'></div>

    {{-- <div style="background-image: url({{asset('front/img/Webp.net-compress-image.jpg')}});height:340px;background-position: center;background-size: cover;background-repeat: no-repeat"> --}}
        {{-- <div class="d-flex justify-content-center align-items-center" style="background-color: #000000c7;width:100%;height: 100%;">
           <h1 style="font-size: 50px; padding-bottom:10px; font-weight:600;color:white;border-bottom:2px red solid;">حجز السيارة</h1>
        </div>
    </div> --}}

    <div class='bodycontainer my-0' style="background: url('{{asset("front/img/BackgroundH4.jpg")}}')">
        <div class="opacity-div">

            <div class="booking-steps">
                <div class="booking-steps_head @if ($currentStep == 3) col-lg-8 @else col-lg-12 @endif" style="padding: 0;">
                            <div class="booking-steps_head_background" style="width: 100% !important;">.</div>
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

                    <iframe style="width: 100%;height: 100%;" id="openPaymenthtmlBodyContent">

                    </iframe >
                </div>
                @endif
                <div style="height: auto;overflow: hidden;" class="container-fluid">


                    @include('livewire.booking.step1')
                    @include('livewire.booking.step2')
                    @include('livewire.booking.step3')
                    @include('livewire.booking.step4')





                    {{-- col-md-10 col-sm-10" --}}

                    @if ($currentStep != 5)
                        <div class="booking-steps_footer @if ($currentStep == 3) col-lg-8 @else col-lg-12 @endif">
                            <div class="container-fluid" style="@if ($currentStep == 2) padding-right: 0px;padding-left: 0px; @endif">
                                <div class="row d-flex justify-content-between">
                                    <div class="col-12 mb-3 booking-car-notes booking-car-notes-mo float-normal @if ($currentStep == 2) px-0 px-sm-4 @endif {{ $currentStep != 2 ? 'display-none' : '' }}" style="text-align: center;">
                                        <label class="orange-checkbox-value" style="margin: 0;">
                                            يرجى قراءة
                                            <input type="checkbox" name="" id="termsCheck">
                                            <a id="Booking_termsandConditions" style="padding: 0px 10px;" data-toggle="modal" class="terms-text-a" data-toggle="modal" data-target="#OrSimilarHidableModal"
                                            >اﻟﺸﺮوط واﻷﺣﻜﺎم</a> والموافقة
                                            عليها قبل الاستمرار
                                        </label>
                                    </div>
                                    <div class="col-3 mx-0 @if ($currentStep == 2) px-0 pr-sm-4 booking-btn-mo @endif">
                                        <button class="primary-btn btn-hover btn-curved" wire:click="back({{$currentStep - 1}})" > عوده </button>
                                    </div>
                                    <div class="col-6 mb-0 booking-car-notes float-normal @if ($currentStep == 2) px-0 @endif {{ $currentStep != 2 ? 'display-none' : '' }}" style="text-align: center;">
                                        <label class="orange-checkbox-value" style="margin: 0;">
                                            يرجى قراءة
                                            <input type="checkbox" name="" value="1" id="termsCheck" wire:model="isTermsandConditions">
                                            <a id="Booking_termsandConditions" style="padding: 0px 10px;" data-toggle="modal" class="terms-text-a" data-toggle="modal" data-target="#OrSimilarHidableModal"
                                            >اﻟﺸﺮوط واﻷﺣﻜﺎم</a> والموافقة
                                            عليها قبل الاستمرار
                                        </label>
                                    </div>
                                    <div class="@if ($currentStep == 2) col-3 px-0 pl-sm-4 booking-btn-mo @else col-6 @endif mx-0">
                                        <button class="primary-btn btn-hover btn-curved @if ($currentStep == 2 && $isTermsandConditions == false ) btn-disabled @endif" name="GO" wire:click="{{ $currentStep == 1 ? 'firstStepSubmit' : '' }}{{ $currentStep == 2 ? 'secondStepSubmit' : '' }}{{ $currentStep == 3 ? 'thirdStepSubmit' : '' }}"   @if ($currentStep == 2 && $isTermsandConditions == false ) disabled @endif  style="float:left;">استمرار</button>
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



</div>

@push('scripts')
    <script>

        document.addEventListener('livewire:load', function () {
            // Get the value of the "count" property
            var openPayment = @this.openPayment
            if (openPayment) {
                window.livewire.emit('openPayment')

                   // Call the increment component action
            }

        })
    </script>
@endpush









