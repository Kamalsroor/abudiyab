@if($partner)
    @if(method_exists($partner, 'trashed') && $partner->trashed())
        <a href="{{ route('dashboard.partners.trashed.show', $partner) }}" class="text-decoration-none text-ellipsis">
            {{ $partner->name }}
        </a>
    @else
        <a href="{{ route('dashboard.partners.show', $partner) }}" class="text-decoration-none text-ellipsis">
            {{ $partner->name }}
        </a>
    @endif
@else
    ---
@endif
