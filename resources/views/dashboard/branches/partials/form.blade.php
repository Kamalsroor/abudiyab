@include('dashboard.errors')
@bsMultilangualFormTabs
{{ BsForm::text('name') }}
@endBsMultilangualFormTabs
{{ BsForm::number('code') }}
{{ BsForm::number('p_coud') }}

{{--
@isset($branch)
    {{ BsForm::image('image')->files($branch->getMediaResource()) }}
@else
    {{ BsForm::image('image') }}
@endisset --}}

