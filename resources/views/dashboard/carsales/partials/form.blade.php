@include('dashboard.errors')
<div class="row">

    <div class="col-md-3" id="cars_select">
        <select2
            placeholder="@lang('cars.singular')"
            name="car_id"
            id="cars"
            value="{{isset($offer) && $offer->type == 1 ? optional($offer ?? "")->cars->pluck('id') : null}}"
            label="@lang('cars.singular')"
            remote-url="{{ route('api.cars.select') }}"
        ></select2>
    </div>
</div>
<div class="row">
    <div class="col-md-3">{{ BsForm::number('couter') }}</div>
    <div class="col-md-3">{{ BsForm::text('color_interior') }}</div>
    <div class="col-md-3">{{ BsForm::text('color_exterior') }}</div>
</div>
<div class="row">
    <div class="col-md-3">{{ BsForm::number('quantity') }}</div>
</div>
<div class="row">
    <div>
   {{ BsForm::checkbox('for_sale')->value(1)->default('0')->checked(isset($carsale) ? $carsale->for_sale : false)}}
   {{ BsForm::checkbox('sold')->value(1)->default('0')->checked(isset($carsale) ? $carsale->sold : false)}}
    </div>
</div>


