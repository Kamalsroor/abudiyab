@include('dashboard.errors')
@bsMultilangualFormTabs
{{ BsForm::text('name') }}
{{ BsForm::text('first_header') }}
{{ BsForm::text('second_header') }}
@endBsMultilangualFormTabs
<div class="col-md-12">
    {{ BsForm::checkbox('is_mobile')->value(1)->withoutDefault()->checked(isset($slider) ? $slider->is_mobile : false) }}
</div>
@isset($slider)
    {{ BsForm::image('image')->files($slider->getMediaResource()) }}
@else
    {{ BsForm::image('image') }}
@endisset

