@if($manufactory)
    @if(method_exists($manufactory, 'trashed') && $manufactory->trashed())
        <a href="{{ route('dashboard.manufactories.trashed.show', $manufactory) }}" class="text-decoration-none text-ellipsis">
            {{ $manufactory->name }}
        </a>
    @else
        <a href="{{ route('dashboard.manufactories.show', $manufactory) }}" class="text-decoration-none text-ellipsis">
            {{ $manufactory->name }}
        </a>
    @endif
@else
    ---
@endif
