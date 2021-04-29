@can('create', \App\Models\Offer::class)
    <a href="{{ route('dashboard.offers.create') }}" class="btn btn-outline-success btn-sm">
        <i class="fas fa fa-fw fa-plus"></i>
        @lang('offers.actions.create')
    </a>
@endcan
