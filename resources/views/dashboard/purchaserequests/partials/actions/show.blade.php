@can('view', $purchaserequest)
    <a href="{{ route('dashboard.purchaserequests.show', $purchaserequest) }}" class="btn btn-outline-dark btn-sm">
        <i class="fas fa fa-fw fa-eye"></i>
    </a>
@endcan
