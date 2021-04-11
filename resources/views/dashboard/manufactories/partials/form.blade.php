@include('dashboard.errors')
@bsMultilangualFormTabs
{{ BsForm::text('name') }}
@endBsMultilangualFormTabs

@isset($manufactory)
    {{ BsForm::image('image')->files($manufactory->getMediaResource()) }}
@else
    {{ BsForm::image('image') }}
@endisset

