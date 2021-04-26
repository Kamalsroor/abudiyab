@include('dashboard.errors')
<div class="row">
    <div class="col-3">
        {{ BsForm::text('name') }}
    </div>
    <div class="col-3">
        {{ BsForm::text('email') }}
    </div>
    <div class="col-3">
        {{ BsForm::text('phone') }}
    </div>
</div>

<div class="row">
    <div class="col-3">
        {{ BsForm::text('id_number') }}
    </div>
    <div class="col-3">
        {{ BsForm::date('id_expiry_date') }}

    </div>
    <div class="col-3">
        {{ BsForm::text('nationality') }}
    </div>
</div>
<div class="row">
    <div class="col-3">
        {{ BsForm::text('driver_number') }}
    </div>
    <div class="col-3">
        {{ BsForm::date('driver_id_expiry_date') }}
    </div>
    <div class="col-3">
        {{ BsForm::text('address') }}
    </div>
</div>
<div class="row">
    <div class="col-3">
        {{ BsForm::date('date_of_birth') }}
    </div>
    <div class="col-3">
        {{ BsForm::select('gender')->options(trans('users.gender'))}}
    </div>
    <div class="col-3">
        {{ BsForm::checkbox('user_data_confirmed')->value(1)->default('0') }}
    </div>
</div>

{{-- id_number
id_expiry_date
driver_id_expiry_date
date_of_birth
nationality
gender
address
driver_number
user_data_confirmed --}}
@isset($customer)
    {{ BsForm::image('avatar')->collection('avatars')->files($customer->getMediaResource('avatars')) }}
@else
    {{ BsForm::image('avatar')->collection('avatars') }}
@endisset
