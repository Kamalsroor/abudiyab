@can('viewTrash', \App\Models\AreaPricing::class)
    <a href="{{ route('dashboard.area_pricings.trashed', request()->only('type')) }}" class="btn btn-outline-danger btn-sm">
        <i class="fas fa fa-fw fa-trash"></i>
        @lang('area_pricings.trashed')
    </a>
@endcan
