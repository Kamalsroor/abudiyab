<link rel="stylesheet" type="text/css" href="{{asset('front/admin/files/assets/icon/icofont/css/icofont.css')}}">
<div id="step2" class="row mx-0 {{ $currentStep != 2 ? 'display-none' : '' }}" style="direction: ltr;" >
    <div class="H3-TST-D1">
        <div class="H3-TST-D2 H3-TST-D2-2">
            <div class="H3-TST-DI">
                <img src="{{$car->getFirstMediaUrl()}}" alt=".">
            </div>
            <div class="H3-TST-D3 H3-TST-D3-1">
                <h2>{{$car->name}} {{$car->model}} <span>أو مشابهة</span></h2>
                <span>{{$car->category? $car->category->name : '-'}}</span>
            </div>
            <div class="H3-TST-D3 H3-TST-D3-2">
                <div class="H3-TST-D4-2">
                    <h5 class="text-center" style="font-weight: 800">تفاصيل الاستلام</h5>
                    <p>{{$receiving_branch->name}} <i class="fas fa-map-marker-alt"></i></p>
                    <p>{{$reciving_date->format('d-m-Y')}} <i class="fas fa-calendar-alt"></i></p>
                    <p>{{$reciving_date->format('h:i A')}} <i class="far fa-clock"></i></p>
                </div>
                <div class="H3-TST-D4-2">
                    <h5 class="text-center" style="font-weight: 800">تفاصيل التسليم</h5>
                    <p>{{$delivery_branch->name}} <i class="fas fa-map-marker-alt"></i></p>
                    <p>{{$delivery_date->format('d-m-Y')}} <i class="fas fa-calendar-alt"></i></p>
                    <p>{{$delivery_date->format('h:i A')}} <i class="far fa-clock"></i></p>
                </div>


                <div class="H3-TST-D4-2">
                    <h5>مواصفات السيارة</h5>
                    <div class="H3-icons">
                        <div><i class="fas fa-user-tie"></i></i>
                            <p>{{$car->door}}</p>
                        </div>
                        <div><i class="fas fa-cogs"></i></i>
                            <p>{{ trans('cars.features.' . $car->features) }}</p>
                        </div>
                        <div><i class="fas fa-suitcase-rolling"></i></i>
                            <p>{{$car->luggage}}</p>
                        </div>
                        <div><i class="fas fa-door-closed"></i></i>
                            <p>{{$car->door}}</p>
                        </div>
                    </div>
                </div>
                <div class="H3-TST-D4-2">
                    <h5>مدة الايجار</h5>
                    <p>يوم {{$diff}}</p>
                </div>
                <div class="H3-TST-D4-2">
                    <h5>الإيجار اليومي</h5>
                    <p class="H3-TST-P-PR"><span><i class="icofont icofont-cur-riyal"></i></span>{{$car->price1}}</p>
                </div>
            </div>
        </div>
        <div class="H3-TST-D2 H3-TST-D2-1">
            <div class="H3-TST-D3">
                <h3>تفاصيل الفاتورة</h3>
            </div>

            <div class="H3-TST-D3 H3-TST-D3-2">
                <div class="H3-TST-D4-1">
                    <div class="H3-TST-D5-1">
                        <span> الإيجار لمدة {{$diff}} يوم</span>
                    </div>
                    <div class="H3-TST-D5-1">
                        <p><span><i class="icofont icofont-cur-riyal"></i></span>{{$car_price}}</p>
                    </div>
                </div>
                <div class="H3-TST-D4-1" style="position: relative;">
                    <div class="H3-TST-D5-1">
                        <span>إجمالي الإضافات {{$diff}} يوم</span>
                    </div>
                    <div class="H3-TST-D5-1">
                        <p><span><i class="icofont icofont-cur-riyal"></i></span>{{$features_price}}</p>
                    </div>
                    <i class="fas fa-info-circle" id="addingFeatures" ></i>
                </div>

                <div class="H3-TST-D3" id="additions" style="display: none;">
                    @foreach ($additions as $key => $value)
                        @if ($loop->index <= $loop->last )
                            @if (isset($features_added[$loop->index]))
                                <div class="H3-TST-D4-1 H3-TST-D4-1-hover">
                                    <div class="H3-TST-D5-1">
                                        <span><span>{{$additions[$key][0]['name']}}</span><i class="fas fa-car"></i></span>
                                    </div>
                                    <div class="H3-TST-D5-1">
                                            <p><span><i class="icofont icofont-cur-riyal"></i>{{$features_added[$loop->index]}} في اليوم</span></p>
                                    </div>
                                </div>
                            @endif
                        @endif

                    @endforeach
                </div>

                <div class="H3-TST-D4-1">
                    <div class="H3-TST-D5-1">
                        <span>رسوم تفويض (تم)</span>
                    </div>
                    <div class="H3-TST-D5-1">
                        <p><span><i class="icofont icofont-cur-riyal"></i></span>{{$authorization_fee}}</p>
                    </div>
                </div>

                <div class="H3-TST-D4-1 H3-P">
                    <div class="H3-TST-D5-1">
                        <span> الإجمالي</span>
                    </div>
                    <div class="H3-TST-D5-1">
                        <p><span><i class="icofont icofont-cur-riyal"></i></span>{{$price}}</p>
                    </div>
                </div>
                @if ($AreaPricing != 0)
                    <div class="H3-TST-D4-1">
                        <div class="H3-TST-D5-1">
                            <span> سعر الشحن بين المدن</span>
                        </div>
                        <div class="H3-TST-D5-1">
                            <p><span><i class="icofont icofont-cur-riyal"></i></span>{{ $AreaPricing}}</p>
                        </div>
                    </div>
                @endif
                <div class="H3-TST-D4-1">
                    <div class="H3-TST-D5-1">
                        <span> خصم العضويه</span>
                    </div>
                    <div class="H3-TST-D5-1">
                        <p><span><i class="icofont icofont-cur-riyal"></i></span>{{ $membership_discount }}</p>
                    </div>
                </div>

                @if ($promotional_discount != 0)
                    <div class="H3-TST-D4-1">
                        <div class="H3-TST-D5-1">
                            <span> خصم العرض الترويجي</span>
                        </div>
                        <div class="H3-TST-D5-1">
                            <p><span><i class="icofont icofont-cur-riyal"></i></span>{{ $promotional_discount}}</p>
                        </div>
                    </div>
                @endif

                @if ($paymentType == 'visa')
                <div class="H3-TST-D4-1">
                    <div class="H3-TST-D5-1">
                        <span> خصم سداد البطاقات الائتمانيه</span>
                    </div>
                    <div class="H3-TST-D5-1">
                        <p><span><i class="icofont icofont-cur-riyal"></i></span>{{ $visa_price}}</p>
                    </div>
                </div>
                @endif

                <div class="H3-TST-D4-1 H3-P">
                    <div class="H3-TST-D5-1">
                        <span> الصافي</span>
                    </div>
                    <div class="H3-TST-D5-1">
                        <p><span><i class="icofont icofont-cur-riyal"></i></span>{{$total}}</p>
                    </div>

                </div>



                <div class="cono-con">
                    <div class="ways">
                        <div style="text-align: right;">
                            <p style="margin-right: 10px;">* يمكنكم السداد عن طريق</p>
                            <br>
                            @error('paymentType') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        @if ($this->invalid_payment == 1)
                            <h3 style="color: red;text-align: center;">يرجي اختيار طريق السداد</h3>
                        @endif
                        @if ($this->showPointsError == 1)
                            <h3 style="color: red;text-align: center;">عفوا رصيد النقاط لا يسمح لاتمام العمليه برجاء اختيار طريقه اخرى</h3>
                        @endif

                            <div>
                                <div class="imm">
                                    <label for="cash">
                                        <img class="logo2" src="{{asset('front/cash-logo.png')}}" alt="">
                                    </label>
                                </div>
                                <input type="radio" value="cash" id="cash" name="paymentType" wire:model="paymentType">
                                <label for="cash">نقدا</label>
                            </div>

                            <div class="imm">
                                <div>
                                    <label for="points">
                                        <img class="logo3" src="{{asset('front/points.png')}}" alt="">
                                    </label>
                                </div>

                                <input type="radio" value="points" id="points" name="paymentType" wire:model="paymentType">
                                <label for="points">النقاط</label>
                            </div>

                            <div>
                                <div class="imm">
                                    <label for="visa">
                                        <img class="logo" src="{{asset('front/visa_master.jpg')}}" alt="">
                                    </label>
                                </div>
                                <input type="radio" value="visa" id="visa" name="paymentType" wire:model="paymentType">
                                <label for="visa">بطاقه اىْتمانيه</label>
                            </div>

                    </div>
                </div>
                <h3 style="color: red;text-align: center;">و قابل للتدقيق (VAT) السعر لا يشمل ضريبه القيمه المضافه</h3>

            </div>
        </div>
    </div>
@push('js')
    <script>
        $(document).ready(function(){
            // $('.adding').click(function(){
            //     console.log('ssssssss ');
            // })
            // $('.adding').on('click',function(){
            // })
        })
    </script>
@endpush
</div>
