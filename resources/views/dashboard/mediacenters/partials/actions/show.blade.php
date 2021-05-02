@can('view', $mediacenter)
    <a href="{{ route('dashboard.mediacenters.show', $mediacenter) }}" class="btn btn-outline-dark btn-sm">
        <i class="fas fa fa-fw fa-eye"></i>
    </a>
@endcan
