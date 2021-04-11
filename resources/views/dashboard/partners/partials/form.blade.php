@include('dashboard.errors')

{{ BsForm::text('name') }}

@isset($partner)
    {{ BsForm::image('image')->files($partner->getMediaResource()) }}
@else
    {{ BsForm::image('image') }}
@endisset

