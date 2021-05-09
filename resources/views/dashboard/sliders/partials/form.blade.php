@include('dashboard.errors')
@bsMultilangualFormTabs
{{ BsForm::text('name') }}
{{ BsForm::text('first_header') }}
{{ BsForm::text('second_header') }}
<table>
<tr>
    <th>مقاس الصورة</th>
    <td> 1440*860</td>
</tr>
<tr>
    <th>مقاس الصورة للجوال</th>
    <td>480*500</td>
</tr>
</table>
@endBsMultilangualFormTabs
<div class="col-md-12">
    {{ BsForm::checkbox('is_mobile')->value(1)->default('0')->checked(isset($slider) ? $slider->is_mobile : false) }}
</div>
@isset($slider)
    {{ BsForm::image('image')->files($slider->getMediaResource()) }}
@else
    {{ BsForm::image('image') }}
@endisset

