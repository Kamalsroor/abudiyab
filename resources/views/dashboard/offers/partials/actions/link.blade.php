@if($offer)
    @if(method_exists($offer, 'trashed') && $offer->trashed())
        <a href="{{ route('dashboard.offers.trashed.show', $offer) }}" class="text-decoration-none text-ellipsis">
            {{ $offer->name }}
        </a>
    @else
        <a href="{{ route('dashboard.offers.show', $offer) }}" class="text-decoration-none text-ellipsis">
            {{ $offer->name }}
        </a>
    @endif
@else
    ---
@endif
