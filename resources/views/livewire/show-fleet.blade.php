
    @if(Auth()->check())
         @php
             $favCars= App\Models\addToFavorite::where('user_id',Auth()->id())->pluck('car_id')->toArray();
         @endphp
    @else
         @php
             $favCars= [];
         @endphp

     @endif

  <div style="background: #a6a6a68c;">
    @push('styles')
     <link rel="stylesheet" href="{{asset('front/mycollection/font/flaticon.css')}}">
    @endpush

        <!-- top container -->
        <section class="fleet-top-container">
            <div class="container-fluid bg-block py-2 my-2 top-container" >
                <!-- top row -->
                <div class="row py-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <p class="text-right">اختار السيارة</p>
                            <select class="form-control" id="select2-dropdown" wire:model='searchTerm'>
                                <option class="color-black" selected disabled>اختار السيارة</option>
                            @foreach ($carArraySelect as $carSelect)
                            <option class="color-black" value="{{$carSelect->id}}">{{$carSelect->name}}</option>
                            @endforeach
                            </select>
                            {{-- <br>
                            <input type="search" class="form-control mt-3" wire:model.lazy='searchTerm' placeholder="أبحث باسم السيارة"> --}}
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <p class="text-right">اختار المنطقة</p>
                            <select class="form-control" id="exampleFormControlSelect1" wire:model='region'>
                                @foreach ($regionSelect as $key => $value)
                                <option class="color-black" value="{{$key}}">{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mr-auto">
                        <a href="/favorite" class="btn {{count($favCars) ? 'active' : ''}}" id="Favorite">المفضلة</a>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <p class="text-right">فرع الاستلام</p>
                            <select  class="form-control" id="receivingBrancheInput"  wire:model="receiving_branch_id" name="receivingBrancheInput">
                                <option class="color-black" value="0" selected>اختار الفرع</option>

                                @foreach($dervery_branches as $branche)
                                    <option class="color-black" value="{{$branche->id}}" >{{$branche->name}} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>



                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <p class="text-right">فرع التسليم</p>
                            <select  class="form-control" id="deliveryBrancheInput" wire:model="dervery_branch_id" name="deliveryBrancheInput">
                                <option class="color-black" value="0" selected>اختار الفرع</option>
                                @foreach($branches as $branche)
                                <option class="color-black" value="{{$branche->id}}">{{$branche->name}} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <p class="text-right">تاريخ الاستلام</p>
                            <input class="form-control"  id="receivingDateInput"  wire:model='receivingDate' type="datetime-local" name='receivingDateInput' min="{{$dayOneFormated}}">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <p class="text-right">تاريخ التسليم</p>

                            <input class="form-control"  id="deliveryDateInput" wire:model='deliveryDate'  type="datetime-local" min="{{$dayTwoFormated}}" name='deliveryDateInput'>
                        </div>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-12 d-flex align-items-center justify-content-start">

                        <i class="fas fa-filter color-black d-lg-none "  id="filter-toggele"></i>


                    </div>
                </div>


                <!-- top row ends-->
            </div>
        <!--top container ends here -->
        </section>
        <!-- --------------------------toggeling menue starts here -->
        <section class="fleet-filter-menu">
            <div class=" container-fluid mx-0 px-0 toggeling-menue d-none" >
                    <div class="d-flex" >
                        <div class="white-section">
                            <div  class="py-2 text-center justify-content-center filter-menu-heading">
                                <p class="m-0">الترتــيــب حـــســـب</p>
                            </div>
                            <select class="form-control" id="exampleFormControlSelect1" wire:model='filterPriceCategory'>
                                    <option class="color-black" value='DESC'>السعر من الاكثر الى الأقل</option>
                                    <option class="color-black" value='ASC'>السعر من الأقل إلى الأعلى</option>
                                    <option class="color-black" value='modelasc'>الموديل من الأقدم إلى الأحدث</option>
                                    <option class="color-black" value='modeldes'>الموديل من الأحدث إلى الأقدم</option>
                            </select>
                            <div  class="py-2 text-center justify-content-center filter-menu-heading">
                                <p class="m-0">اختر السعر المناسب</p>
                            </div>
                            <div class="range-slider my-3 text-center">

                                <b class="mr-2"><i class="icofont icofont-cur-riyal"></i> {{$priceRangeNewEnd}}</b>
                                <span   wire:ignore >

                                    <input  id="ex2" type="text" class="span2 ex2" value=""
                                    data-slider-min="10"
                                    data-slider-max="3000"
                                    data-slider-step="5"
                                    wire:model="priceRange"
                                    data-slider-value="[{{$priceRange ?? "10,3000"}}]" />
                                </span>
                                <b class="ml-2"><i class="icofont icofont-cur-riyal"></i> {{$priceRangeNewStart}}</b>

                            </div>

                            <div  class="py-2 text-center mb-2 filter-menu-heading">
                                <p class="m-0 ">نــوع الـســيــــارة</p>
                            </div>


                            <div class="fleet-category">
                                @foreach( $categories as $category )
                                    <div class="text-right categories">
                                        <input type="checkbox" value="{{$category->id}}" wire:model='filterCategory' name="filterCategory[]"  class="my-check" id="category-{{$category->id}}">
                                        <label for="category-{{$category->id}}"><i class="fas fa-car"></i> {{$category->name}}</label>
                                    </div>
                                @endforeach
                                {{-- <div class="container-fluid" >
                                    <div class="row category-icons justify-content-center">
                                        <div class="col-6 text-center">
                                            <label for="suv"><i class="flaticon-car"></i>اس يو فى</label>
                                            <input type="checkbox" id="suv">
                                        </div>
                                        <div class="col-6 text-center">
                                            <label for="sedan"><i class="flaticon-car-1"></i>سيدان</label>
                                            <input type="checkbox" id="sedan">
                                        </div>
                                        <div class="col-6 text-center">
                                            <label for="family-car"><i class="flaticon-family-car"></i>عائلية</label>
                                            <input type="checkbox" id="family-car">
                                        </div>
                                        <div class="col-6 text-center">
                                            <label for="echo-car"><i class="flaticon-car-2"></i>اقتصادية</label>
                                            <input type="checkbox" id="echo-car">
                                        </div>
                                        <div class="col-6 text-center">
                                            <label for="luxury-car"><i class="flaticon-supercar"></i>فخمة</label>
                                            <input type="checkbox" id="luxury-car">
                                        </div>

                                    </div>
                                </div> --}}
                            </div>

                        </div>
                        <div class="cancel-toggle-menue" >

                        </div>
                </div>
            </div>
        </section>
        <!-- --------------------------toggeling menue ends here -->
        <!-- second container composed of right column and left container -->
        <section class="fleet-lower-container">
            <div class="container-fluid second-main-container" >


                <div class="row">
                    <div class="col-lg-3 d-none d-lg-block col-4 pr-0  mb-2 ">
                        <div class="white-section">
                            <div  class="py-2 text-center justify-content-center category-menu-heading">
                                <p class="m-0">الترتــيــب حـــســـب</p>
                            </div>
                            <select class="form-control" id="exampleFormControlSelect1" wire:model='filterPriceCategory'>
                                    <option  value='DESC'>السعر من الاكثر الى الأقل</option>
                                    <option  value='ASC'>السعر من الأقل إلى الأعلى</option>
                                    <option  value='modelasc'>الموديل من الأقدم إلى الأحدث</option>
                                    <option  value='modeldes'>الموديل من الأحدث إلى الأقدم</option>
                            </select>
                            <div  class="py-2 text-center justify-content-center category-menu-heading">
                                <p class="m-0">اختر السعر المناسب</p>
                            </div>
                            <div class="range-slider my-3 text-center">

                                <b class="mx-3"><i class="icofont icofont-cur-riyal"></i> {{$priceRangeNewEnd}}</b>
                                <span  wire:ignore >

                                    <input id="ex2" type="text" class="span2 ex2" value=""
                                    data-slider-min="10"
                                    data-slider-max="3000"
                                    data-slider-step="5"
                                    wire:model="priceRange"
                                    data-slider-value="[{{$priceRange ?? "10,3000"}}]" />
                                </span>
                                <b class="ml-2"><i class="icofont icofont-cur-riyal"></i> {{$priceRangeNewStart}}</b>

                            </div>

                            <div  class="py-2 text-center mb-2 category-menu-heading">
                                <p class="m-0">فئات السيارات</p>
                            </div>

                            {{-- <div class="text-right categories">
                                <input class="mx-2" type="checkbox" value="{{$category->id}}" wire:model='filterCategory' name="filterCategory[]"  class="my-check" id="category-{{$category->id}}">
                                <label for="category-{{$category->id}}"><i class="fas fa-car"></i> </label>
                            </div> --}}






                                <div class="container-fluid">
                                    <div class="category-icons">
                                        @foreach( $categories as $category )
                                            {{-- <div class="text-right categories">
                                                <input type="checkbox" value="{{$category->id}}" wire:model='filterCategory' name="filterCategory[]"  class="my-check" id="category-{{$category->id}}">
                                                <label for="category-{{$category->id}}"><i class="fas fa-car"></i> {{$category->name}}</label>
                                            </div> 4 6 --}}
                                            @if ($category->id === 3 || $category->id === 4 || $category->id === 6)
                                                <div>
                                                    <input type="checkbox" id="category-{{$category->id}}">
                                                    <label for="category-{{$category->id}}"><img src="{{ asset('front/img/car/car-2.png') }}" alt="">{{$category->name}}</label>
                                                </div>
                                            @elseif ($category->id === 5 || $category->id === 8 || $category->id === 11 || $category->id === 17)
                                                <div>
                                                    <input type="checkbox" id="category-{{$category->id}}">
                                                    <label for="category-{{$category->id}}"><img style="width: 60px;transform: scale(1.1);margin-top: -11px;margin-bottom: 5px;" src="{{ asset('front/img/car/car-1.png') }}" alt="">{{$category->name}}</label>
                                                </div>
                                            @elseif ($category->id === 15 || $category->id === 19)
                                                <div>
                                                    <input type="checkbox" id="category-{{$category->id}}">
                                                    <label for="category-{{$category->id}}"><img src="{{ asset('front/img/car/car.png') }}" alt="">{{$category->name}}</label>
                                                </div>
                                            @elseif ($category->id === 2)
                                                <div>
                                                    <input type="checkbox" id="category-{{$category->id}}">
                                                    <label for="category-{{$category->id}}"><img src="{{ asset('front/img/car/car-4.png') }}" alt="">{{$category->name}}</label>
                                                </div>
                                            @elseif ($category->id === 1)
                                                <div>
                                                    <input type="checkbox" id="category-{{$category->id}}">
                                                    <label for="category-{{$category->id}}"><img src="{{ asset('front/img/car/car-7.png') }}" alt="">{{$category->name}}</label>
                                                </div>
                                            @elseif ($category->id === 9)
                                                <div>
                                                    <input type="checkbox" id="category-{{$category->id}}">
                                                    <label for="category-{{$category->id}}"><img src="{{ asset('front/img/car/car-5.png') }}" alt="">{{$category->name}}</label>
                                                </div>
                                            @elseif ($category->id === 10)
                                                <div>
                                                    <input type="checkbox" id="category-{{$category->id}}">
                                                    <label for="category-{{$category->id}}"><img src="{{ asset('front/img/car/car-6.png') }}" alt="">{{$category->name}}</label>
                                                </div>
                                            @elseif ($category->id === 20)
                                                <div>
                                                    <input type="checkbox" id="category-{{$category->id}}">
                                                    <label for="category-{{$category->id}}"><img src="{{ asset('front/img/car/car-8.png') }}" alt="">{{$category->name}}</label>
                                                </div>
                                            @endif
                                        @endforeach
                                        {{-- <div>
                                            <input type="checkbox" id="category-a">
                                            <label for="category-a"><img src="{{ asset('front/img/car/car-4.png') }}" alt="">car</label>
                                        </div> --}}
                                    </div>
                                </div>
                        </div>

                    </div>
                    <div class="col-lg-9  col-md-12 px-0">
                        <!-- loop comes here -->


                        @if(!isset($car))
                        @foreach($cars as $formcar)
                        <div class="container-fluid bg-block py-2 mb-2 fleet-car-details" >
                            <div class="row mb-2">
                                <div class="col-lg-4 fleet-car-img d-flex align-items-center">
                                    <a href="{{route('front.car.show',$formcar)}}"><img class="w-100 wow animate__animated animate__bounceInRight" data-wow-offset="200" data-wow-duration="2s" src="{{$formcar->getFirstMediaUrl()}}" alt="car-image"></a>
                                </div>
                                <div class="col-lg-8">
                                    <div class="container-fluid color-black ">
                                        <div class="row ">
                                            <div class="col-lg-9 col-12 text-right">

                                                <a href="{{route('front.car.show',$formcar)}}"><h3 class="color-black fleet-car-name" style="display: inline">{{$formcar->name}} <span  class=" color-black">أو مشابهة</span></h3></a>
                                                <span class="color-black text-right addToFavorite {{in_array($formcar->id,$favCars) ? 'active' : ''}}" data-id="{{$formcar->id}}"><i class="far fa-heart heart"></i><i class="fas fa-heart heart"></i></span>

                                                <h5 class="fleet-car-model" > الموديل : {{$formcar->model}}20</h5>
                                                <p class="color-black fleet-doors-seats" >5 مقاعد | 4 أبواب | 2 الأمتعة </p>
                                                <p class=" color-black fleet-transmission-ac">مكيف | ناقل حركة أوتوماتيكي{{-- trans('cars.features.' . $formcar->features) --}}</p>
                                                <p class="fleet-category" > {{$formcar->category?$formcar->category->name:'-'}}</p>
                                            </div>
                                            <div class="col-lg-3 col-12 text-right">
                                                <i class="fas fa-exclamation-circle dollar d-none d-lg-block" data-container="body" data-toggle="popover" data-placement="right" data-content="عرض خصم (5%)"></i>
                                                <p class="color-black">السعر لليوم الواحد</p>
                                                <div class="fleet-pricing-section" >
                                                    <i class="icofont icofont-cur-riyal color-black"></i><span class="color-black price2">{{$formcar->price2}}</span>
                                                    <span class="color-black price1"><i class="icofont icofont-cur-riyal color-black"></i>{{$formcar->price1}}</span>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="row fleet-reservation-section" >

                                            <div class="col-12 d-flex px-0 mx-0 justify-content-center align-items-center">


                                                <button class="primary-btn btn-hover btn-curved mb-3 p-2 fleet-car-button" style="width:55%;" wire:click="booking({{$formcar->id}});">احــجــز الأن</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @endif
                    </div>

                </div>
            </div>
        </section>

    </div>



@push('js')

<script>

    window.addEventListener('changeRender', event => {
        $('#select2-dropdown').select2();
        // $(".ex2").slider({ });
        $('#select2-dropdown').on('change', function (e) {
            var data = $('#select2-dropdown').select2("val");
            @this.set('searchTerm', data);
        });
    });

    window.addEventListener('sweetalert', event => {
        Swal.fire({
            title: event.detail.title,
            text: event.detail.text,
            icon: event.detail.type,
            confirmButtonText: 'موافق'
        })
    });



    $(document).ready(function () {

        $(".ex2").slider({});

        $('.ex2').on('change', function(event, ui) {
            // console.log($(this).val());
            @this.set('priceRange', $(this).val());

        });


        $('#select2-dropdown').select2();
        $('#select2-dropdown').on('change', function (e) {
            var data = $('#select2-dropdown').select2("val");
            @this.set('searchTerm', data);
        });
        $('#receivingBrancheInput').on('change', function (e) {
            var data = $(this).val();
            @this.set('dervery_branch_id', data);
        });

    });

    // $('#Favorite').click(function (){
    //     $('#Favorite').toggleClass('active');
    // });

</script>
@endpush
@push('scripts')
    <script>

        document.addEventListener('livewire:load', function () {
            var toBooing = @this.toBooking;
            if (toBooing) {
                window.livewire.emit('redirectToBookingSteps')
            }
            if(@this.addedItems.length !=0)
            {
                console.log(@this.addedItems);
                @this.addedItems.forEach(element => {
                    $(`.addToFavorite[data-id=${element}]`).addClass('active');
                });
                $('#Favorite').addClass('active');
            }
            // if(@this.addCarId)
            // {
            //     let car_id=@this.addCarId;
            //     $(`.addToFavorite[data-id=${car_id}]`).addClass('active');

            // }
            // else{
            //     $('#Favorite').removeClass('active');

            // }
            var isAlert = @this.isAlert
            if (isAlert) {
                Swal.fire({
                    title: "تم اضافة السياره للمفضله بنجاح",
                    icon:"success",
                    confirmButtonText: 'موافق'
                })
                   // Call the increment component action
            }

        })
    </script>
@endpush
