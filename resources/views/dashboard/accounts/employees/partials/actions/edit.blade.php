@can('update', $employee)
    <a href="{{ route('dashboard.employees.edit', $employee) }}" class="btn btn-outline-primary btn-sm">
        <i class="fas fa fa-fw fa-user-edit"></i>
    </a>
@endcan
