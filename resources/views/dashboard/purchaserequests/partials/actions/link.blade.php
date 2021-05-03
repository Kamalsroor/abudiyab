@if($purchaserequest)
    @if(method_exists($purchaserequest, 'trashed') && $purchaserequest->trashed())
        <a href="{{ route('dashboard.purchaserequests.trashed.show', $purchaserequest) }}" class="text-decoration-none text-ellipsis">
            {{ $purchaserequest->name }}
        </a>
    @else
        <a href="{{ route('dashboard.purchaserequests.show', $purchaserequest) }}" class="text-decoration-none text-ellipsis">
            {{ $purchaserequest->name }}
        </a>
    @endif
@else
    ---
@endif
