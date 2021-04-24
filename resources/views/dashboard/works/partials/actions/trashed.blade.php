@can('viewTrash', \App\Models\Work::class)
    <a href="{{ route('dashboard.works.trashed', request()->only('type')) }}" class="btn btn-outline-danger btn-sm">
        <i class="fas fa fa-fw fa-trash"></i>
        @lang('works.trashed')
    </a>
@endcan
