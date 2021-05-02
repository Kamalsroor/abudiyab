@can('viewTrash', \App\Models\Purchaserequest::class)
    <a href="{{ route('dashboard.purchaserequests.trashed', request()->only('type')) }}" class="btn btn-outline-danger btn-sm">
        <i class="fas fa fa-fw fa-trash"></i>
        @lang('purchaserequests.trashed')
    </a>
@endcan
