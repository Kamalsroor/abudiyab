@include('dashboard.errors')
{{ BsForm::text('name') }}
{{ BsForm::text('email') }}
{{ BsForm::text('phone') }}
{{ BsForm::password('password') }}
{{ BsForm::password('password_confirmation') }}


{{-- @if(auth()->user()->isAdmin())
    <fieldset>
        <legend>@lang('role.plural')</legend>
        @foreach(config('permission.supported') as $permission)
            {{ BsForm::checkbox('permissions[]')
                    ->value($permission)
                    ->label(trans(str_replace('manage.', '', $permission.'.permission')))
                    ->checked(isset($supervisor) && $supervisor->hasPermissionTo($permission)) }}
        @endforeach
    </fieldset>
@endif --}}
<div class="col-md-6" id="branches_select">
    <select2
        placeholder="@lang('branches.singular')"
        name="branchs[]"
        multiple="true"
        id="branches"
        value="{{isset($supervisor) ? json_encode($supervisor->branchs) : null }}"
        label="@lang('branches.singular')"
        remote-url="{{ route('api.branches.website.select') }}"
    ></select2>
</div>
{{-- @if(auth()->user()->isAdmin())
    <select2
        placeholder="@lang('roles.singular')"
        name="role"
        id="role"
        value="{{ isset($supervisor) ? $supervisor->roles[0]->id : null  }}"
        label="@lang('roles.singular')"
        remote-url="{{ route('api.roles.select') }}"
    ></select2>
@endif --}}

@isset($supervisor)
    {{ BsForm::image('avatar')->collection('avatars')->files($supervisor->getMediaResource('avatars')) }}
@else
    {{ BsForm::image('avatar')->collection('avatars') }}
@endisset
