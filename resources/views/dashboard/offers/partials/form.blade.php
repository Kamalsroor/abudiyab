@include('dashboard.errors')
@bsMultilangualFormTabs
{{ BsForm::text('name') }}
{{ BsForm::textarea('des')->attribute('class', 'form-control textarea')}}
@endBsMultilangualFormTabs

<div class="row">
    <div class="col-md-6">
        {{ BsForm::select('discount_type')->options(trans('offers.discount_type')) }}
    </div>
    <div class="col-md-6">
        {{ BsForm::number('discount_value')->max(100) }}
    </div>
    <div class="col-md-6">
        {{ BsForm::checkbox('is_work')->value(1)->withoutDefault()->checked(false) }}
    </div>
    <div class="col-md-6">
        {{ BsForm::select('limit')->options($limits) }}
  </div>

    <div class="col-md-6">
        {{ BsForm::date('from' , date('Y-m-d'))->min(date('Y-m-d')) }}
    </div>
    <div class="col-md-6">
        {{ BsForm::date('to' , $dateTomorrow->format('Y-m-d') )->min($dateTomorrow->format('Y-m-d')) }}
    </div>


    <div class="col-md-6">
        {{ BsForm::select('type')->options(trans('offers.type')) }}
    </div>
    <div class="col-md-6" id="cars_select" style="{{isset($offer) && $offer->type == 1 ? '': 'display: none'}}">
        <select2
            placeholder="@lang('cars.singular')"
            name="car_id[]"
            multiple="true"
            id="cars"
            value="{{isset($offer) && $offer->type == 1 ? optional($offer ?? "")->cars->pluck('id') : null}}"
            label="@lang('cars.singular')"
            remote-url="{{ route('api.cars.select') }}"
        ></select2>
    </div>
    <div class="col-md-6" id="single_car_select" style="{{isset($offer) && $offer->type == 4 ? '': 'display: none'}}">
        <select2
            placeholder="@lang('cars.singular')"
            name="single_car_id"
            id="single_car_id"
            value="{{isset($offer) && $offer->type == 4 ? optional($offer ?? "")->cars->first()->id : null}}"
            label="@lang('cars.singular')"
            remote-url="{{ route('api.cars.select') }}"
        ></select2>
    </div>
    <div class="col-md-6" id="categories_select" style="{{isset($offer) && $offer->type == 3 ? '': 'display: none'}}">
        <select2
            placeholder="@lang('categories.singular')"
            name="category_id[]"
            multiple="true"
            id="categories"
            value="{{optional($car ?? "")->category_id}}"
            label="@lang('categories.singular')"
            remote-url="{{ route('api.categories.select') }}"
        ></select2>
    </div>

</div>

<hr>
<div class="row">
    <div class="col-md-6">
        {{ BsForm::select('branch_type')->options(trans('offers.branches')) }}
    </div>
    <div class="col-md-6" id="branches_select" style="{{isset($offer) && $offer->branch_type == "fixed" ? '': 'display: none'}}">
        <select2
            placeholder="@lang('branches.singular')"
            name="branch_value[]"
            multiple="true"
            id="branches"
            value="{{isset($offer) && $offer->branch_type  == "fixed" ? $branch_value : null }}"
            label="@lang('branches.singular')"
            remote-url="{{ route('api.branches.website.select') }}"
        ></select2>

    </div>
</div>
@isset($offer)
    {{ BsForm::image('image')->files($offer->getMediaResource()) }}
@else
    {{ BsForm::image('image') }}
@endisset

@push('scripts')
    <script>
        $(document).ready(function() {
            const discountType =   @json(trans('offers.discount_type'));
            const  discountTypeEl = $('#discount_type');
            const  discountValueEl = $('#discount_value');
            const  typeEl = $('#type');
            const  dataFromEl = $('#from');
            const  dataToEl = $('#to');
            const  branchesEl = $("[name='branch_type']");
            console.log(branchesEl);
            discountTypeEl.on('change', function() {
                if ($(this).val() == "fixed") {
                    discountValueEl.attr({
                        "max" : 10000,        // substitute your own
                        "min" : 1          // values (or variables) here
                    });
                }else if($(this).val() == "percentage"){
                    discountValueEl.attr({
                        "max" : 100,        // substitute your own
                        "min" : 1          // values (or variables) here
                    });
                    discountValueEl.val(100);
                }
            });

            discountValueEl.on('keyup', function() {
                if(discountTypeEl.val() == "percentage"){
                    if (discountValueEl.val() > 100)
                        discountValueEl.val(100);
                }
            });


            dataFromEl.on('change', function() {
                let dataFrom = new Date($(this).val()),
                    dataFromDays = 1;
                    if(!isNaN(dataFrom.getTime())){
                        dataFrom.setDate(dataFrom.getDate() + dataFromDays);
                        var d = dataFrom.getDate() > 9 ? dataFrom.getDate():  "0"+dataFrom.getDate();
                        var m =  dataFrom.getMonth() + 1 > 9 ? dataFrom.getMonth() + 1  : "0"+(dataFrom.getMonth()+1);
                        var y = dataFrom.getFullYear();
                        dataToEl.val(y + "-" + m + "-" + d);
                        dataToEl.attr({
                            "min" : y + "-" + m + "-" + d          // values (or variables) here
                        });
                    } else {
                        alert("Invalid Date");
                    }
            });

            function hideDivs() {
                $('#cars_select').hide(500);
                $('#single_car_select').hide(500);
                $('#categories_select').hide(500);
            }

            typeEl.on('change', function() {
                console.log($(this).val());
                switch ($(this).val()) {
                    case "0":
                        console.log("كل السيارات");
                        hideDivs();
                        break;
                    case "1":
                        console.log("سيارات معينة");
                        hideDivs();
                        setTimeout(() => {
                            $('#cars_select').show(500);
                        }, 500);
                        break;
                    case "2":
                        console.log("كل الفئات");
                        hideDivs();
                        break;
                    case "3":
                        console.log("فئه معينه");
                        hideDivs();
                        setTimeout(() => {
                            $('#categories_select').show(500);
                        }, 500);
                        break;
                    case "4":
                        hideDivs();
                        setTimeout(() => {
                            $('#single_car_select').show(500);
                        }, 500);
                        break;
                }
            });


            branchesEl.on('change', function() {
                console.log($(this).val());
                switch ($(this).val()) {
                    case "all":
                        console.log("كل ألفروع");
                        $('#branches_select').hide(500);

                        break;
                    case "fixed":
                        console.log("فروع معينه");
                            $('#branches_select').show(500);
                        break;

                }
            });


        });
        // $(document).ready(function() {
        //     const discountType =   @json(trans('offers.discount_type'));
        //     const  discountTypeEl = $('#discount_type');
        //     const  discountValueEl = $('#discount_value');
        //     const  typeEl = $('#type');
        //     const  branchesEl = $('#branches');
        //     const  dataFromEl = $('#from');
        //     const  dataToEl = $('#to');

        //     discountTypeEl.on('change', function() {
        //         if ($(this).val() == "fixed") {
        //             discountValueEl.attr({
        //                 "max" : 10000,        // substitute your own
        //                 "min" : 1          // values (or variables) here
        //             });
        //         }else if($(this).val() == "percentage"){
        //             discountValueEl.attr({
        //                 "max" : 100,        // substitute your own
        //                 "min" : 1          // values (or variables) here
        //             });
        //             discountValueEl.val(100);
        //         }
        //     });

        //     discountValueEl.on('keyup', function() {
        //         if(discountTypeEl.val() == "percentage"){
        //             if (discountValueEl.val() > 100)
        //                 discountValueEl.val(100);
        //         }
        //     });


        //     dataFromEl.on('change', function() {
        //         let dataFrom = new Date($(this).val()),
        //             dataFromDays = 1;
        //             if(!isNaN(dataFrom.getTime())){
        //                 dataFrom.setDate(dataFrom.getDate() + dataFromDays);
        //                 var d = dataFrom.getDate() > 9 ? dataFrom.getDate():  "0"+dataFrom.getDate();
        //                 var m =  dataFrom.getMonth() + 1 > 9 ? dataFrom.getMonth() + 1  : "0"+(dataFrom.getMonth()+1);
        //                 var y = dataFrom.getFullYear();
        //                 dataToEl.val(y + "-" + m + "-" + d);
        //                 dataToEl.attr({
        //                     "min" : y + "-" + m + "-" + d          // values (or variables) here
        //                 });
        //             } else {
        //                 alert("Invalid Date");
        //             }
        //     });

        //     function hideDivs() {
        //         $('#cars_select').hide(500);
        //         $('#categories_select').hide(500);
        //     }

        //     typeEl.on('change', function() {
        //         console.log($(this).val());
        //         switch ($(this).val()) {
        //             case "0":
        //                 console.log("كل السيارات");
        //                 hideDivs();
        //                 break;
        //             case "1":
        //                 console.log("سيارات معينة");
        //                 hideDivs();
        //                 setTimeout(() => {
        //                     $('#cars_select').show(500);
        //                 }, 500);
        //                 break;
        //             case "2":
        //                 console.log("كل الفئات");
        //                 hideDivs();
        //                 break;
        //             case "3":
        //                 console.log("فئه معينه");
        //                 hideDivs();
        //                 setTimeout(() => {
        //                     $('#categories_select').show(500);
        //                 }, 500);
        //                 break;
        //         }
        //     });

        //     branchesEl.on('change', function() {
        //         console.log($(this).val());
        //         switch ($(this).val()) {
        //             case "all":
        //                 console.log("كل ألفروع");
        //                 $('#branches_select').hide(500);

        //                 break;
        //             case "fixed":
        //                 console.log("فروع معينه");
        //                     $('#branches_select').show(500);
        //                 break;

        //         }
        //     });


        // });
    </script>
@endpush
