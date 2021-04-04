@can('view', $branch)
    <a href="{{ route('dashboard.branches.show', $branch) }}" class="btn btn-outline-dark btn-sm">
        <i class="fas fa fa-fw fa-eye"></i>
    </a>
@endcan
