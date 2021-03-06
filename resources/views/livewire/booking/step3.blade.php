@push('styles')
<style>
    #step3 .inputs div input{
        background-color: white;
        margin:0px 5px;
        padding: 10px;
    }
    .dd{
        margin-right: 10px;
    }
</style>
@endpush

<div id="step3" class=" cono container {{ $currentStep != 3 ? 'display-none' : '' }} col-lg-8 col-md-12">
    <div class="cono-he">
        <div class="fl">
            <h2>طريقه الدفع</h2>
        </div>
        <hr>
    </div>
    <div class="cono-con">

        <div id="bg" class="{{ $paymentType != "visa" ? 'display-none' : '' }} bay-g ">
            <div class="inputs">
                <div >
                    <p>*اسم البطاقه</p>
                    <input     wire:model="nameOnCard"  placeholder="اسم البطاقة" type="text">

                </div>
                <div>
                    <p>*رقم البطاقه</p>
                    <input    wire:model="CardNumber"  placeholder="رقم البطاقة" type="number">

                </div>
                <div class="dd">
                    <p>*تاريخ الانتهاء</p>
                    <input maxlength="2"  wire:model="expiry_month"  placeholder="الشهر" type="text">

                    <input maxlength="2" wire:model="expiry_year"  placeholder="السنه" type="text">

                </div>
                <div >
                    <p>*رقم CVV</p>
                    <input maxlength="3" wire:model="securityCode"   data="000 000"  maxlength="3" type="number">

                </div>
            </div>

            @error('nameOnCard')
                <script>
                    toastr.error("{{ $message }}")
                </script>
            @enderror
            @error('CardNumber')
                <script>
                    toastr.error("{{ $message }}")
                </script>
            @enderror
            @error('expiry_month')
                <script>
                    toastr.error("{{ $message }}")
                </script>
            @enderror
            @error('expiry_year')
                <script>
                    toastr.error("{{ $message }}")
                </script>
            @enderror
            @error('securityCode')
                <script>
                    toastr.error("{{ $message }}")
                </script>
            @enderror

            <div class="card">
                <img src="{{asset('front\img\VISA-GREEN.jpg')}}" alt="" style="width: 100%;border-radius: 22px;">

                {{-- <div class="card-front">

                    <p id="nmber" class="c-nu">1234 5678 1234 1234</p>
                    <div class="n-b">
                        <p style="font-family: 'Brygada 1918', serif;"><span id="month">12</span>/<span id="year">25</span></p>
                        <p id="nameu">M.B.S</p>
                    </div>
                </div>
                <div class="card-back">
                    <div class="lin">
                        .
                    </div>
                    <div class="cv-n">
                        <div>
                            <P style="display: inline-block;">CVV</P>
                            <p style="font-family: 'Brygada 1918', serif;" id="CVV2" class="ccc">123</p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>


