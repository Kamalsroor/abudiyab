@if($car)
    @if(method_exists($car, 'trashed') && $car->trashed())
        <a href="{{ route('dashboard.cars.trashed.show', $car) }}" class="text-decoration-none text-ellipsis">
            {{ $car->name }}
        </a>
    @else
        <a href="{{ route('dashboard.cars.show', $car) }}" class="text-decoration-none text-ellipsis">
            {{ $car->name }}
        </a>
    @endif
@else
    ---
@endif
