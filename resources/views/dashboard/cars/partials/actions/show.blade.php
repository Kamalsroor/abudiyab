@can('view', $car)
    <a href="{{ route('dashboard.cars.show', $car) }}" class="btn btn-outline-dark btn-sm">
        <i class="fas fa fa-fw fa-eye"></i>
    </a>
@endcan
