@can('view', $membership)
    <a href="{{ route('dashboard.memberships.show', $membership) }}" class="btn btn-outline-dark btn-sm">
        <i class="fas fa fa-fw fa-eye"></i>
    </a>
@endcan
