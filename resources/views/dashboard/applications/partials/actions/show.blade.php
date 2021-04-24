@can('view', $applications)
    <a href="{{ route('dashboard.applications.show', $applications) }}" class="btn btn-outline-dark btn-sm">
        <i class="fas fa fa-fw fa-eye"></i>
    </a>
@endcan
