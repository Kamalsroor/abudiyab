@include('dashboard.errors')

{{ BsForm::text('name') }}

@isset($custmerrequest)
    {{ BsForm::image('image')->files($custmerrequest->getMediaResource()) }}
@else
    {{ BsForm::image('image') }}
@endisset

