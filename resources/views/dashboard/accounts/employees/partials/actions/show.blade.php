@can('view', $employee)
    <a href="{{ route('dashboard.employees.show', $employee) }}" class="btn btn-outline-dark btn-sm">
        <i class="fas fa fa-fw fa-eye"></i>
    </a>
@endcan
