@can('view', $addition)
    <a href="{{ route('dashboard.additions.show', $addition) }}" class="btn btn-outline-dark btn-sm">
        <i class="fas fa fa-fw fa-eye"></i>
    </a>
@endcan
