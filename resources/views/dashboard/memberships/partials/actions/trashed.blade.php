@can('viewTrash', \App\Models\Membership::class)
    <a href="{{ route('dashboard.memberships.trashed', request()->only('type')) }}" class="btn btn-outline-danger btn-sm">
        <i class="fas fa fa-fw fa-trash"></i>
        @lang('memberships.trashed')
    </a>
@endcan
