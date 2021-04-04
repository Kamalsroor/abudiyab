
<div id="step2" class="row mx-0 {{ $currentStep != 2 ? 'display-none' : '' }}" style="direction: ltr;" >
        <div class="H3-TST-D1">
            <div class="H3-TST-D2 H3-TST-D2-1">
                <div class="H3-TST-D3">
                    <h3>السعر</h3>
                    <h4>و الاضافات</h4>
                </div>

                <div class="H3-TST-D3">
                    @foreach ($features_added as $key => $value)
                        <div class="H3-TST-D4-1 H3-TST-D4-1-hover">
                            <div class="H3-TST-D5-1">
                                <span><span>{{$featureArray[$key]}}</span><i class="fas fa-car"></i></span>
                            </div>
                            <div class="H3-TST-D5-1">
                                <p>{{$value}} ريال سعودي في اليوم</p>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="H3-TST-D3 H3-TST-D3-2">
                    <div class="H3-TST-D4-1">
                        <div class="H3-TST-D5-1">
                            <span>إجمالي الإيجار لمدة {{$diff}} يوم</span>
                        </div>
                        <div class="H3-TST-D5-1">
                            <p><span>ريال سعودي</span> {{$car_price}}</p>
                        </div>
                    </div>
                    <div class="H3-TST-D4-1">
                        <div class="H3-TST-D5-1">
                            <span>إجمالي الإضافات {{$diff}} يوم</span>
                        </div>
                        <div class="H3-TST-D5-1">
                            <p><span>ريال سعودي</span> {{$features_price}}</p>
                        </div>
                    </div>
                    <div class="H3-TST-D4-1">
                        <div class="H3-TST-D5-1">
                            <span>رسوم تفويض (تم)</span>
                        </div>
                        <div class="H3-TST-D5-1">
                            <p><span>ريال سعودي</span> 3</p>
                        </div>
                    </div>

                    <div class="H3-TST-D4-1 H3-P">
                        <div class="H3-TST-D5-1">
                            <span>المبلغ الإجمالي</span>
                        </div>
                        <div class="H3-TST-D5-1">
                            <p><span>ريال سعودي</span> {{$price}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="H3-TST-D2 H3-TST-D2-2">
                <div class="H3-TST-DI">
                    <img src="{{$car->getFirstMediaUrl()}}" alt=".">
                </div>
                <div class="H3-TST-D3 H3-TST-D3-1">
                    <h2>{{$car->name}} {{$car->model}} <span>أو ما شابه ذلك</span></h2>
                    <span>{{$car->category?$car->category->name:'-'}}</span>
                </div>
                <div class="H3-TST-D3 H3-TST-D3-2">
                    <div class="H3-TST-D4-2">
                        <h5>الاستلام</h5>
                        <p>{{$receiving_branch->name}} <i class="fas fa-map-marker-alt"></i></p>
                        <p> {{$data['receiving_date']}}<i class="fas fa-calendar-alt"></i></p>
                        <p>06:00 <i class="far fa-clock"></i></p>
                    </div>
                    <div class="H3-TST-D4-2">
                        <h5>التسليم</h5>
                        <p>{{$delivery_branch->name}} <i class="fas fa-map-marker-alt"></i></p>
                        <p> {{$data['delivery_date']}} <i class="fas fa-calendar-alt"></i></p>
                        <p>06:00 <i class="far fa-clock"></i></p>
                    </div>
                    <div class="H3-TST-D4-2">
                        <h5>المواصفات</h5>
                        <div class="H3-icons">
                            <div><i class="fas fa-user-tie"></i></i>
                                <p>5</p>
                            </div>
                            <div><i class="fas fa-cogs"></i></i>
                                <p>اوتماتك</p>
                            </div>
                            <div><i class="fas fa-suitcase-rolling"></i></i>
                                <p>2</p>
                            </div>
                            <div><i class="fas fa-door-closed"></i></i>
                                <p>4</p>
                            </div>
                        </div>
                    </div>
                    <div class="H3-TST-D4-2">
                        <h5>مدة الايجار</h5>
                        <p>{{$diff}} يوم</p>
                    </div>
                    <div class="H3-TST-D4-2">
                        <h5>الإيجار اليومي</h5>
                        <p class="H3-TST-P-PR"><span>ريال سعودي</span> {{$car->price1}}</p>
                    </div>
                </div>
            </div>
        </div>

</div>
