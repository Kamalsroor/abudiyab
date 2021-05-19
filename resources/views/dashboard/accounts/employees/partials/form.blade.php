@include('dashboard.errors')
<div class="row">

    <div class="col-md-4" >
        {{ BsForm::text('name') }}
    </div>
    <div class="col-md-4" >
        {{ BsForm::text('phone') }}
    </div>
    <div class="col-md-4" >
        {{ BsForm::text('email') }}
    </div>

    <div class="col-md-6" >
        {{ BsForm::password('password') }}
    </div>
    <div class="col-md-6" >
        {{ BsForm::password('password_confirmation') }}
    </div>


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
    <div class="col-md-3" >
        <select2
        placeholder="@lang('branches.singular')"
        name="branch_id"
        id="branches"
        value="{{isset($employee) ? optional($employee ?? "")->branch_id : null}}"
        label="@lang('branches.singular')"
        remote-url="{{ route('api.branches.website.select') }}"
        ></select2>

    </div>

</div>

{{-- @if(auth()->user()->isAdmin())
    <select2
        placeholder="@lang('roles.singular')"
        name="role"
        id="role"
        value="{{ isset($employee) ? $employee->roles[0]->id : null  }}"
        label="@lang('roles.singular')"
        remote-url="{{ route('api.roles.select') }}"
    ></select2>
@endif --}}

@isset($employee)
    {{ BsForm::image('avatar')->collection('avatars')->files($employee->getMediaResource('avatars')) }}
@else
    {{ BsForm::image('avatar')->collection('avatars') }}
@endisset
