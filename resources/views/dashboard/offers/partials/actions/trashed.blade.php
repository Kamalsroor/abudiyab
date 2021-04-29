@can('viewTrash', \App\Models\Offer::class)
    <a href="{{ route('dashboard.offers.trashed', request()->only('type')) }}" class="btn btn-outline-danger btn-sm">
        <i class="fas fa fa-fw fa-trash"></i>
        @lang('offers.trashed')
    </a>
@endcan
