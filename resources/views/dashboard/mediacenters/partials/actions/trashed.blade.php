@can('viewTrash', \App\Models\Mediacenter::class)
    <a href="{{ route('dashboard.mediacenters.trashed', request()->only('type')) }}" class="btn btn-outline-danger btn-sm">
        <i class="fas fa fa-fw fa-trash"></i>
        @lang('mediacenters.trashed')
    </a>
@endcan
