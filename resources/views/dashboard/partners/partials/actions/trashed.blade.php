@can('viewTrash', \App\Models\Partner::class)
    <a href="{{ route('dashboard.partners.trashed', request()->only('type')) }}" class="btn btn-outline-danger btn-sm">
        <i class="fas fa fa-fw fa-trash"></i>
        @lang('partners.trashed')
    </a>
@endcan
