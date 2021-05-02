@include('dashboard.errors')
@bsMultilangualFormTabs
{{ BsForm::text('title') }}
{{ BsForm::textarea('description') }}
@endBsMultilangualFormTabs
{{ BsForm::checkbox('show')->value(1)->default('0')->checked(isset($mediacenter) ? $mediacenter->show : false)}}

@isset($mediacenter)
    {{ BsForm::image('image')->files($mediacenter->getMediaResource()) }}
@else
    {{ BsForm::image('image') }}
@endisset

@isset($mediacenter)
    {{ BsForm::image('image')->collection('moredetailsphoto')->files($mediacenter->getMediaResource('moredetailsphoto')) }}
@else
    {{ BsForm::image('details')->collection('moredetailsphoto') }}
@endisset

