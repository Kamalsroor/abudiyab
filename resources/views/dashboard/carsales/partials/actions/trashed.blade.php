@can('viewTrash', \App\Models\Carsale::class)
    <a href="{{ route('dashboard.carsales.trashed', request()->only('type')) }}" class="btn btn-outline-danger btn-sm">
        <i class="fas fa fa-fw fa-trash"></i>
        @lang('carsales.trashed')
    </a>
@endcan
