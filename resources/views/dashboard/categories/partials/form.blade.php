@include('dashboard.errors')
@bsMultilangualFormTabs
{{ BsForm::text('name') }}
@endBsMultilangualFormTabs

{{ BsForm::number('orderBy_numper') }}
{{ BsForm::number('vat') }}


{{-- @isset($category)
    {{ BsForm::image('image')->files($category->getMediaResource()) }}
@else
    {{ BsForm::image('image') }}
@endisset --}}

