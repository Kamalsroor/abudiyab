@can('viewTrash', \App\Models\Manufactory::class)
    <a href="{{ route('dashboard.manufactories.trashed', request()->only('type')) }}" class="btn btn-outline-danger btn-sm">
        <i class="fas fa fa-fw fa-trash"></i>
        @lang('manufactories.trashed')
    </a>
@endcan
