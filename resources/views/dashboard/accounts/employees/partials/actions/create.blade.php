@can('create', \App\Models\Employee::class)
    <a href="{{ route('dashboard.employees.create', request()->only('type')) }}" class="btn btn-outline-success btn-sm">
        <i class="fas fa fa-fw fa-plus"></i>
        @lang('employees.actions.create')
    </a>
@endcan
