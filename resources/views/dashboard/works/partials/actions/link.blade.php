@if($work)
    @if(method_exists($work, 'trashed') && $work->trashed())
        <a href="{{ route('dashboard.works.trashed.show', $work) }}" class="text-decoration-none text-ellipsis">
            {{ $work->name }}
        </a>
    @else
        <a href="{{ route('dashboard.works.show', $work) }}" class="text-decoration-none text-ellipsis">
            {{ $work->name }}
        </a>
    @endif
@else
    ---
@endif
