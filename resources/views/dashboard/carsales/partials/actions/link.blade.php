@if($carsale)
    @if(method_exists($carsale, 'trashed') && $carsale->trashed())
        <a href="{{ route('dashboard.carsales.trashed.show', $carsale) }}" class="text-decoration-none text-ellipsis">
            {{ $carsale->name }}
        </a>
    @else
        <a href="{{ route('dashboard.carsales.show', $carsale) }}" class="text-decoration-none text-ellipsis">
            {{ $carsale->name }}
        </a>
    @endif
@else
    ---
@endif
