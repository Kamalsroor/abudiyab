@include('dashboard.errors')
@bsMultilangualFormTabs
{{ BsForm::text('name') }}
@endBsMultilangualFormTabs
<div class="row">
    <div class="col-md-6">
        {{ BsForm::number('orderBy_numper') }}
    </div>
    <div class="col-md-6">
        {{ BsForm::number('vat') }}
    </div>
</div>


{{-- @isset($category)
    {{ BsForm::image('image')->files($category->getMediaResource()) }}
@else
    {{ BsForm::image('image') }}
@endisset --}}

