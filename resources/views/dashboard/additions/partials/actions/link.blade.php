@if($addition)
    @if(method_exists($addition, 'trashed') && $addition->trashed())
        <a href="{{ route('dashboard.additions.trashed.show', $addition) }}" class="text-decoration-none text-ellipsis">
            {{ $addition->name }}
        </a>
    @else
        <a href="{{ route('dashboard.additions.show', $addition) }}" class="text-decoration-none text-ellipsis">
            {{ $addition->name }}
        </a>
    @endif
@else
    ---
@endif
