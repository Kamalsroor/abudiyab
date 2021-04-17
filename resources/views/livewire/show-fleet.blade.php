    <div>
        <!-- top container -->
        <section class="fleet-top-container">
            <div class="container-fluid bg-block py-2 my-2 top-container" >
                <!-- top row -->
                <div class="row py-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <p class="text-right">أختار المنطقة</p>
                            <select class="form-control" id="select2-dropdown" wire:model='searchTerm'>
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
                            <p class="text-right">أختار المنطقة</p>
                            <select class="form-control" id="exampleFormControlSelect1" wire:model='region'>
                                @foreach ($regionSelect as $key => $value)
                                <option class="color-black" value="{{$key}}">{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mr-auto">
                        <a href="/favorite" class="btn" id="Favorite">المفضلة</a>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <p class="text-right">فرع الاستلام</p>
                            <select  class="form-control" id="receivingBrancheInput" wire:model="receiving_branch_id" name="receivingBrancheInput">
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
                            <input class="form-control" value='{{$rec_date}}' id="receivingDateInput" wire:model='receivingDate' type="date" name='receivingDateInput'>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <p class="text-right">تاريخ التسليم</p>
                            <input class="form-control" value='{{$del_date}}' id="deliveryDateInput" wire:model='deliveryDate'  type="date" name='deliveryDateInput'>
                        </div>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-12 d-flex align-items-center justify-content-between justify-content-lg-center">

                        <i class="fas fa-filter color-black d-lg-none "  id="filter-toggele"></i>
                        <button class="primary-btn px-3 py-2 btn-curved btn-hover" wire:click='search' >ابحث الان </button>

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
                            <select class="form-control" id="exampleFormControlSelect1" wire:model='filterPriceCategory'>
                                    <option class="color-black" value='DESC'>السعر من الاكثر الى الأقل</option>
                                    <option class="color-black" value='ASC'>السعر من الأقل إلى الأعلى</option>
                                    <option class="color-black" value='modelasc'>الموديل من الأقدم إلى الأحدث</option>
                                    <option class="color-black" value='modeldes'>الموديل من الأحدث إلى الأقدم</option>
                            </select>
                            <div  class="py-2 text-center justify-content-center filter-menu-heading">
                                <p class="m-0">أختر السعر المناسب</p>
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
                                <p class="m-0 ">نوع السيارة</p>
                            </div>


                            <div class="fleet-category">
                                @foreach( $categories as $category )
                                    <div class="text-right categories">
                                        <input type="checkbox" value="{{$category->id}}" wire:model='filterCategory' name="filterCategory[]"  class="my-check" id="category-{{$category->id}}">
                                        <label for="category-{{$category->id}}">{{$category->name}}</label>
                                    </div>
                                @endforeach
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
                            <select class="form-control" id="exampleFormControlSelect1" wire:model='filterPriceCategory'>
                                    <option  value='DESC'>السعر من الاكثر الى الأقل</option>
                                    <option  value='ASC'>السعر من الأقل إلى الأعلى</option>
                                    <option  value='modelasc'>الموديل من الأقدم إلى الأحدث</option>
                                    <option  value='modeldes'>الموديل من الأحدث إلى الأقدم</option>
                            </select>
                            <div  class="py-2 text-center justify-content-center category-menu-heading">
                                <p class="m-0">أختر السعر المناسب</p>
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
                                <p class="m-0">نوع السيارة</p>
                            </div>



                                @foreach( $categories as $category )

                                    <div class="text-right categories">
                                        <input class="mx-2" type="checkbox" value="{{$category->id}}" wire:model='filterCategory' name="filterCategory[]"  class="my-check" id="category-{{$category->id}}">
                                        <label for="category-{{$category->id}}">{{$category->name}}</label>
                                    </div>
                                @endforeach
                        </div>
                    </div>
                    <div class="col-lg-9  col-md-12 px-0">
                        <!-- loop comes here -->


                        @if(!isset($car))
                        @foreach($cars as $formcar)
                        <div class="container-fluid bg-block py-2 mb-2 fleet-car-details" >
                            <div class="row mb-2">
                                <div class="col-lg-4 fleet-car-img d-flex align-items-center">
                                    <img class="w-100" src="{{$formcar->getFirstMediaUrl()}}" alt="car-image">
                                </div>
                                <div class="col-lg-8">
                                    <div class="container-fluid color-black ">
                                        <div class="row ">
                                            <div class="col-lg-9 col-12 text-right">
                                                <h3 class="color-black fleet-car-name" >{{$formcar->name}} <span  class=" color-black">أو مشابهة</span></h3>
                                                <h3 class="fleet-car-model" >{{$formcar->model}}</h3>
                                                <p class="color-black fleet-doors-seats" >5 مقاعد | 4 أبواب | 2 الأمتعة </p>
                                                <p class=" color-black fleet-transmission-ac">مكيف | ناقل حركة أوتوماتيكي{{-- trans('cars.features.' . $formcar->features) --}}</p>
                                                <p class="fleet-category" > {{$formcar->category?$formcar->category->name:'-'}}</p>
                                            </div>
                                            <div class="col-lg-3 col-12 text-right">
                                                <i class="fas fa-exclamation-circle dollar d-none d-lg-block" data-container="body" data-toggle="popover" data-placement="right" data-content="عرض خصم (5%)"></i>
                                                <p class="color-black">السعر لليوم الواحد</p>
                                                <div class="fleet-pricing-section" >
                                                    <span class="color-black price2" ><i class="icofont icofont-cur-riyal color-black"></i>{{$formcar->price2}}</span>
                                                    <span class="color-black price1" ><i class="icofont icofont-cur-riyal color-black"></i>{{$formcar->price1}}</span>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="row fleet-reservation-section" >

                                            <div class="col-12 d-flex px-0 mx-0 justify-content-between align-items-center">
                                                <span class="color-black text-right addToFavorite "  data-id="{{$formcar->id}}"><i class="far fa-bookmark heart"></i><i class="fas fa-bookmark heart"></i> حفظ في المفضله</span>
                                                <button class="primary-btn btn-hover btn-curved mt-3 ml-3 p-2 fleet-car-button" wire:click="booking({{$formcar->id}});">احجز الأن</button>
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
    });

    $('#Favorite').click(function (){
        $('#Favorite').toggleClass('active');
    });

</script>
@endpush
@push('scripts')
    <script>

        document.addEventListener('livewire:load', function () {
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
