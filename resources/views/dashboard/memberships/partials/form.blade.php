@include('dashboard.errors')
@bsMultilangualFormTabs
{{ BsForm::text('name') }}
@endBsMultilangualFormTabs

<div class="row">
    <div class="col-md-2">
        {{ BsForm::number('rental_discount')->min(1)->max(100) }}
    </div>
    <div class="col-md-2">
        {{ BsForm::number('ratio_points')->min(1) }}
    </div>
    <div class="col-md-2">
        {{ BsForm::number('extra_hours')->min(1) }}
    </div>
    <div class="col-md-2">
        {{ BsForm::number('allowed_Kilos')->min(1) }}
    </div>
    <div class="col-md-2">
        {{ BsForm::number('delivery_discount_regions')->min(1)->max(100) }}
    </div>

</div>
<div class="row">
    <div class="col-md-3">
        {{ BsForm::textarea('description')->label(trans('memberships.attributes.description'))->value(isset($membership) ? request('description'): 0) }}
    </div>
</div>
@isset($membership)
    {{ BsForm::image('image')->files($membership->getMediaResource()) }}
@else
    {{ BsForm::image('image') }}
@endisset
{{--
@isset($membership)
    {{ BsForm::image('image')->files($membership->getMediaResource('profile')) }}
@else
    {{ BsForm::image('image') }}
@endisset --}}

@isset($membership)
{{ BsForm::image('profile')->collection('profile')->files($membership->getMediaResource('profile')) }}
@else
{{ BsForm::image('profile')->collection('profile') }}
@endisset





