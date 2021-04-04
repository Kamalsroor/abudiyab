@include('dashboard.errors')
@bsMultilangualFormTabs
{{ BsForm::text('name') }}
@endBsMultilangualFormTabs

@isset($slider)
    {{ BsForm::image('image')->files($slider->getMediaResource()) }}
@else
    {{ BsForm::image('image') }}
@endisset

