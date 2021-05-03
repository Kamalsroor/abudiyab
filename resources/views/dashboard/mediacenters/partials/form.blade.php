@include('dashboard.errors')
@bsMultilangualFormTabs
{{ BsForm::textarea('title')
        ->attribute('class', 'form-control textarea')
        ->value(Settings::locale($locale->code)->get('title')) }}
{{ BsForm::textarea('description')
        ->attribute('class', 'form-control textarea')
        ->value(Settings::locale($locale->code)->get('description')) }}
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

