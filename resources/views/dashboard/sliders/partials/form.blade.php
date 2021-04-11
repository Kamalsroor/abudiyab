@include('dashboard.errors')
@bsMultilangualFormTabs
{{ BsForm::text('name') }}
{{ BsForm::text('first_header') }}
{{ BsForm::text('second_header') }}
@endBsMultilangualFormTabs

@isset($slider)
    {{ BsForm::image('image')->files($slider->getMediaResource()) }}
@else
    {{ BsForm::image('image') }}
@endisset

