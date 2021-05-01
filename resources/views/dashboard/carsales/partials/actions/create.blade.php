@can('create', \App\Models\Carsale::class)
    <a href="{{ route('dashboard.carsales.create') }}" class="btn btn-outline-success btn-sm">
        <i class="fas fa fa-fw fa-plus"></i>
        @lang('carsales.actions.create')
    </a>
@endcan
