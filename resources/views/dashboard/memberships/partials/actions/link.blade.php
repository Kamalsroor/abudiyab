@if($membership)
    @if(method_exists($membership, 'trashed') && $membership->trashed())
        <a href="{{ route('dashboard.memberships.trashed.show', $membership) }}" class="text-decoration-none text-ellipsis">
            {{ $membership->name }}
        </a>
    @else
        <a href="{{ route('dashboard.memberships.show', $membership) }}" class="text-decoration-none text-ellipsis">
            {{ $membership->name }}
        </a>
    @endif
@else
    ---
@endif
