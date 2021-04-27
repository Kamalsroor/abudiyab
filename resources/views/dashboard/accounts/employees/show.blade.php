<x-layout :title="$employee->name" :breadcrumbs="['dashboard.employees.show', $employee]">
    @component('dashboard::components.box')
        @slot('bodyClass', 'p-0')

        <table class="table table-striped table-middle">
            <tbody>
            <tr>
                <th width="200">@lang('employees.attributes.name')</th>
                <td>{{ $employee->name }}</td>
            </tr>
            <tr>
                <th width="200">@lang('employees.attributes.email')</th>
                <td>{{ $employee->email }}</td>
            </tr>
            <tr>
                <th width="200">@lang('employees.attributes.phone')</th>
                <td>
                    @include('dashboard.accounts.employees.partials.flags.phone')
                </td>
            </tr>
            <tr>
                <th width="200">@lang('employees.attributes.avatar')</th>
                <td>
                    @if($employee->getFirstMedia('avatars'))
                        <file-preview :media="{{ $employee->getMediaResource('avatars') }}"></file-preview>
                    @else
                        <img src="{{ $employee->getAvatar() }}"
                             class="img img-size-64"
                             alt="{{ $employee->name }}">
                    @endif


                </td>
            </tr>
            <tr>
                <th width="200">@lang('roles.plural')</th>
                <td>
                    @foreach($employee->roles as $role)
                    <h4><span class="badge badge-pill bg-info">{{$role->name}}</span></h4>
                    @endforeach
                </td>

            </tr>
            </tbody>
        </table>

        @slot('footer')
            @include('dashboard.accounts.employees.partials.actions.impersonate')
            @include('dashboard.accounts.employees.partials.actions.edit')
            @include('dashboard.accounts.employees.partials.actions.delete')
        @endslot
    @endcomponent
</x-layout>
