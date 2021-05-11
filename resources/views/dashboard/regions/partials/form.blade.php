@include('dashboard.errors')

@bsMultilangualFormTabs
{{ BsForm::text('name') }}
@endBsMultilangualFormTabs
{{ BsForm::text('code') }}
{{ BsForm::text('city') }}

{{ BsForm::select('master_id')->options($branches) }}
