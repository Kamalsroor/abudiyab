@can('create', \App\Models\Car::class)
    <a href="{{ route('dashboard.cars.create') }}" class="btn btn-outline-success btn-sm">
        <i class="fas fa fa-fw fa-plus"></i>
        @lang('cars.actions.create')
    </a>
@endcan
