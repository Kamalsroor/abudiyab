@include('dashboard.errors')

@bsMultilangualFormTabs
{{ BsForm::text('name') }}
@endBsMultilangualFormTabs
{{ BsForm::text('code') }}

{{ BsForm::select('master_id')->options($branches) }}
