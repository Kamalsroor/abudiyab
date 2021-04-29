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
                    ->checked(isset($employee) && $employee->hasPermissionTo($permission)) }}
        @endforeach
    </fieldset>
@endif --}}

@if(auth()->user()->isAdmin())
    <select2
        placeholder="@lang('roles.singular')"
        name="role"
        id="role"
        value="{{ isset($employee) ? $employee->roles[0]->id : null  }}"
        label="@lang('roles.singular')"
        remote-url="{{ route('api.roles.select') }}"
    ></select2>
@endif

@isset($employee)
    {{ BsForm::image('avatar')->collection('avatars')->files($employee->getMediaResource('avatars')) }}
@else
    {{ BsForm::image('avatar')->collection('avatars') }}
@endisset