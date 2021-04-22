@can('view', $work)
    <a href="{{ route('dashboard.works.show', $work) }}" class="btn btn-outline-dark btn-sm">
        <i class="fas fa fa-fw fa-eye"></i>
    </a>
@endcan
