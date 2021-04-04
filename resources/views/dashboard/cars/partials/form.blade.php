@include('dashboard.errors')
@bsMultilangualFormTabs
{{ BsForm::text('name') }}
@endBsMultilangualFormTabs


<select2
    placeholder="@lang('categories.singular')"
    name="category_id"
    id="categories"
    value="{{optional($car ?? "")->category_id}}"
    label="@lang('categories.singular')"
    remote-url="{{ route('api.categories.select') }}"
></select2>



{{-- 
<select2
    placeholder="@lang('branches.singular')"
    name="branch_id"
    id="branches"
    value="{{optional($car ?? "")->id}}"
    label="@lang('branches.singular')"
    remote-url="{{ route('api.branches.select') }}"
></select2> --}}


<select2
    placeholder="@lang('manufactories.singular')"
    name="manufactory_id"
    id="manufactories"
    value="{{optional($car ?? "")->manufactory_id}}"
    label="@lang('manufactories.singular')"
    remote-url="{{ route('api.manufactories.select') }}"
></select2>







<div class="row">
    <div class="col-md-4">
        {{ BsForm::text('code') }}
    </div>
    <div class="col-md-4">
        {{ BsForm::price('price2') }}
    </div>
    <div class="col-md-4">
        {{ BsForm::price('price1') }}
    </div>
</div>
<div class="row">
    <div class="col-md-12">
            @component('dashboard::components.box')
                @slot('bodyClass', 'p-0')
                <table class="table table-striped table-middle">
                    <tbody>
                    <tr>
                        <th width="33.33333%">{{ BsForm::number('desc')->value(isset($car) ? $car->desc : 0)->min(0)->max(100)->step(1) }}</th>
                        <th width="33.33333%">{{ BsForm::number('discount_2')->value(isset($car) ? $car->discount_2 : 0)->min(0)->max(100)->step(1) }}</th>
                        <th width="33.33333%">{{ BsForm::number('discount_3')->value(isset($car) ? $car->discount_3 : 0)->min(0)->max(100)->step(1) }}</th>
                    </tr>

                    </tbody>
                </table>


            @endcomponent
    </div>
    <div class="col-md-12">
            @component('dashboard::components.box')
                @slot('bodyClass', 'p-0')
                <table class="table table-striped table-middle">
                    <tbody>
                    <tr>
                        <th width="50%">{{ BsForm::price('price_from_2month_to_6month') }}</th>
                        <th width="50%">{{ BsForm::price('price_after_from_2month_to_6month') }}</th>
                    </tr>
                    <tr>
                        <th width="50%">{{ BsForm::price('price_from_1year_to_2years') }}</th>
                        <th width="50%">{{ BsForm::price('price_after_from_1year_to_2years') }}</th>
                    </tr>
                    <tr>
                        <th width="50%">{{ BsForm::price('price_from_2year_to_3years') }}</th>
                        <th width="50%">{{ BsForm::price('price_after_from_2year_to_3years') }}</th>
                    </tr>

                    </tbody>
                </table>


            @endcomponent
    </div>
</div>

<div class="row">
    <div class="col-md-3">
    {{ BsForm::text('model') }}
    </div>
    <div class="col-md-3">
        {{ BsForm::number('door')->value(isset($car) ? $car->door :  0)->min(0)->max(100)->step(1) }}
    </div>
    <div class="col-md-3">
        {{ BsForm::number('luggage')->value(isset($car) ? $car->luggage :  0)->min(0)->max(100)->step(1) }}
    </div>
    <div class="col-md-3">
        {{ BsForm::select('features')->options(trans('cars.features')) }}
    </div>        
</div>
{{-- {{ trans('') }} --}}
















<div class="row">
    <div class="col-md-12">
        @component('dashboard::components.box')
            @slot('bodyClass', 'p-0')
            <table class="table table-striped table-middle">
                <tbody>
                <tr>

                    <th width="25%">{{ BsForm::checkbox('is_baby_seat')->value(1)->default('0')->checked(isset($car) ? $car->is_baby_seat : false) }}{{ BsForm::price('baby_seat_price') }}</th>
                    <th width="25%">{{ BsForm::checkbox('is_shield')->value(1)->default('0')->checked(isset($car) ? $car->is_shield : false) }} {{ BsForm::price('shield_price') }}</th>
                    <th width="25%">{{ BsForm::checkbox('is_insurance')->value(1)->default('0')->checked(isset($car) ? $car->is_insurance : false) }}  {{ BsForm::price('insurance_price') }}</th>
                    <th width="25%">{{ BsForm::checkbox('is_open_kilometers')->value(1)->default('0')->checked(isset($car) ? $car->is_open_kilometers : false) }}    {{ BsForm::price('open_kilometers_price') }}</th>
                </tr>
                <tr>
                    <th width="25%">{{ BsForm::checkbox('is_navigation')->value(1)->default('0')->checked(isset($car) ? $car->is_navigation : false) }} {{ BsForm::price('navigation_price') }}</th>
                    <th width="25%">{{ BsForm::checkbox('is_home_delivery')->value(1)->default('0')->checked(isset($car) ? $car->is_home_delivery : false) }}  {{ BsForm::price('home_delivery_price') }}</th>
                    <th width="25%">{{ BsForm::checkbox('is_intercity')->value(1)->default('0')->checked(isset($car) ? $car->is_intercity : false) }}  {{ BsForm::price('intercity_price') }}</th>
                </tr>
       

                </tbody>
            </table>


        @endcomponent
    </div>
</div>

@isset($car)
    {{ BsForm::image('image')->files($car->getMediaResource()) }}
@else
    {{ BsForm::image('image') }}
@endisset


@push('scripts')

<script>

$(document).ready(function() {

    $('body').on('change', ['#price2' , '#desc'], function() {

        console.log($('#price2').val().replaceAll(',','') , parseInt($('#price2').val().replaceAll(',','')));
        let price = parseInt($('#price2').val().replaceAll(',','')) ,
            discount = parseInt($('#desc').val()) + parseInt($('#discount_2').val()) + parseInt($('#discount_3').val()),
            newPrice = price - (price * (discount / 100 ));


            $('#price1').val(newPrice);



        console.log( price , discount , parseInt($('#discount_2').val()) ,  parseInt($('#discount_3').val()) ,$('#discount_3').val() );
    });
    // $(".input-time").inputmask({"mask": "99:99"});
});


</script>
@endpush


