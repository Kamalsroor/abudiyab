<div id="step3" class=" cono container {{ $currentStep != 3 ? 'display-none' : '' }} col-lg-8 col-md-12">
    <div class="cono-he">
        <div class="fl">
            <h2>طريقه الدفع</h2>
        </div>
        <hr>
    </div>
    <div class="cono-con">
        <div class="ways">
            <div style="text-align: right;">
                <p style="margin-right: 10px;">* يمكنكم السداد عن طريق</p>
                <br>
                @error('paymentType') <span class="error">{{ $message }}</span> @enderror

            </div>
            <div>
                <div class="imm">
                    <label for="by1">
                        <img class="logo" src="{{asset('front/cars/h/visa_master.jpg')}}" alt="">
                    </label>
                </div>
                <input type="radio" value="visa" name="paymentType" wire:model="paymentType">
                <label for="by1">بطاقه اىْتمانيه</label>
            </div>
            <div>
                <div class="imm">
                    <label for="by2">
                        <img class="logo1" src="{{asset('front/cars/h/mada-logo.png')}}" alt="">
                    </label>
                </div>
                <input  type="radio" value="mada" name="paymentType" wire:model="paymentType">
                <label for="by2">بطاقه مدي البنكيه</label>
            </div>
            <div>
                <div class="imm">
                    <label for="by3">
                        <img class="logo2" src="{{asset('front/cars/h/cash-logo.png')}}" alt="">
                    </label>
                </div>
                <input  type="radio" value="cash" name="paymentType" wire:model="paymentType">
                <label  for="by3">نقدا</label>
            </div>

            <div class="imm">
                <div>
                    <label for="by4">
                        <img class="logo3" src="{{asset('front/cars/h/points.png')}}" alt="">
                    </label>
                </div>

                <input  type="radio" value="points" name="paymentType" wire:model="paymentType">
                <label  for="by4">النقاط</label>
            </div>
        </div>
        <div id="bg" class="display-none {{ $paymentType != "visa" ? 'display-none' : '' }} bay-g ">
            <div class="inputs">
                <div >
                    <p>*اسم البطاقه</p>
                    <input  id="nni" type="text">
                </div>
                <div >
                    <p>*رقم البطاقه</p>
                    <input  id="v1" type="number">
                </div>
                <div class="dd">
                    <p>*تاريخ الانتهاء</p>
                    <input maxlength="2"  onkeyup="yea()" id="ye" placeholder="الشهر" type="text">
                    <input maxlength="2" onkeyup="mon()" id="mo" placeholder="السنه" type="text">
                </div>
                <div >
                    <p>*رقم CCV</p>
                    <input maxlength="3" id="ccv" data="000 000" onkeyup="nnou()" maxlength="3" type="number">
                </div>
            </div>
            <div class="card">
                <div class="card-front">
                    {{-- <img src="core-dp._CB485980902_.png" alt=""> --}}
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
                            <P style="display: inline-block;">CCV</P>
                            <p style="font-family: 'Brygada 1918', serif;" id="ccv2" class="ccc">123</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



