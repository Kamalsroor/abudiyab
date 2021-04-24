@include('dashboard.errors')

{{ BsForm::text('title') }}
{{ BsForm::text('description') }}
{{ BsForm::checkbox('available')->value(1)->default('0')->checked(isset($work) &&  $work->available != null ?  $work->available : false) }}


