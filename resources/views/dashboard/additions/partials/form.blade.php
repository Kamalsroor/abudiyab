@include('dashboard.errors')
@bsMultilangualFormTabs
<div class="row">
    <div class="col-md-6">
        {{ BsForm::text('name') }}
    </div>
    <div class="col-md-6">
        {{ BsForm::text('mini_des') }}
    </div>
</div>
{{ BsForm::textarea('des')->attribute('class', 'form-control')}}
@endBsMultilangualFormTabs
<icon-picker />
<icons-picker/>
{{-- @isset($addition)
    {{ BsForm::image('image')->files($addition->getMediaResource()) }}
@else
    {{ BsForm::image('image') }}
@endisset --}}

