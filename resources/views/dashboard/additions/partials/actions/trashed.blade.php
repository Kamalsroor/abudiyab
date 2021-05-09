@can('viewTrash', \App\Models\Addition::class)
    <a href="{{ route('dashboard.additions.trashed', request()->only('type')) }}" class="btn btn-outline-danger btn-sm">
        <i class="fas fa fa-fw fa-trash"></i>
        @lang('additions.trashed')
    </a>
@endcan
