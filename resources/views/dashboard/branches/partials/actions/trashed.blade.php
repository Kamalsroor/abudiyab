@can('viewTrash', \App\Models\Branch::class)
    <a href="{{ route('dashboard.branches.trashed', request()->only('type')) }}" class="btn btn-outline-danger btn-sm">
        <i class="fas fa fa-fw fa-trash"></i>
        @lang('branches.trashed')
    </a>
@endcan
