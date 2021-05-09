@include('dashboard.errors')

{{ BsForm::text('name') }}
<table>
    <tr>
        <th >مقاس الصورة</th>
        <td>154*159</td>
    </tr>
</table>

@isset($partner)
    {{ BsForm::image('image')->files($partner->getMediaResource()) }}
@else
    {{ BsForm::image('image') }}
@endisset

