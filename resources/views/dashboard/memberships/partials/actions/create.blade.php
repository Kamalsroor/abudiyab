@can('create', \App\Models\Membership::class)
    <a href="{{ route('dashboard.memberships.create') }}" class="btn btn-outline-success btn-sm">
        <i class="fas fa fa-fw fa-plus"></i>
        @lang('memberships.actions.create')
    </a>
@endcan
