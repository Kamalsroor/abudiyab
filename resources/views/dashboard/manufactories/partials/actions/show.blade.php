@can('view', $manufactory)
    <a href="{{ route('dashboard.manufactories.show', $manufactory) }}" class="btn btn-outline-dark btn-sm">
        <i class="fas fa fa-fw fa-eye"></i>
    </a>
@endcan
