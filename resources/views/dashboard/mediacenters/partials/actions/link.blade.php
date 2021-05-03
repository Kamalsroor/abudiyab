@if($mediacenter)
    @if(method_exists($mediacenter, 'trashed') && $mediacenter->trashed())
        <a href="{{ route('dashboard.mediacenters.trashed.show', $mediacenter) }}" class="text-decoration-none text-ellipsis">
            {{ $mediacenter->name }}
        </a>
    @else
        <a href="{{ route('dashboard.mediacenters.show', $mediacenter) }}" class="text-decoration-none text-ellipsis">
            {{ $mediacenter->name }}
        </a>
    @endif
@else
    ---
@endif
