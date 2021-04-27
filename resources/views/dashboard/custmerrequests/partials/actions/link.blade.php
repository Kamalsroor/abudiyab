@if($custmerrequest)
    @if(method_exists($custmerrequest, 'trashed') && $custmerrequest->trashed())
        <a href="{{ route('dashboard.custmerrequests.trashed.show', $custmerrequest) }}" class="text-decoration-none text-ellipsis">
            {{ $custmerrequest->name }}
        </a>
    @else
        <a href="{{ route('dashboard.custmerrequests.show', $custmerrequest) }}" class="text-decoration-none text-ellipsis">
            {{ $custmerrequest->name }}
        </a>
    @endif
@else
    ---
@endif
