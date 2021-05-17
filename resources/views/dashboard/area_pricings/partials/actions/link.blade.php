@if($area_pricing)
    @if(method_exists($area_pricing, 'trashed') && $area_pricing->trashed())
        <a href="{{ route('dashboard.area_pricings.trashed.show', $area_pricing) }}" class="text-decoration-none text-ellipsis">
            {{ $area_pricing->name }}
        </a>
    @else
        <a href="{{ route('dashboard.area_pricings.show', $area_pricing) }}" class="text-decoration-none text-ellipsis">
            {{ $area_pricing->name }}
        </a>
    @endif
@else
    ---
@endif
