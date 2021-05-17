@can('create', \App\Models\AreaPricing::class)
    <a href="{{ route('dashboard.area_pricings.create') }}" class="btn btn-outline-success btn-sm">
        <i class="fas fa fa-fw fa-plus"></i>
        @lang('area_pricings.actions.create')
    </a>
@endcan
