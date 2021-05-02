@can('create', \App\Models\Purchaserequest::class)
    <a href="{{ route('dashboard.purchaserequests.create') }}" class="btn btn-outline-success btn-sm">
        <i class="fas fa fa-fw fa-plus"></i>
        @lang('purchaserequests.actions.create')
    </a>
@endcan
