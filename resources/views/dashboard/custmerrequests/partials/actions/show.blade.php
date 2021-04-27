@can('view', $custmerrequest)
    <a href="{{ route('dashboard.custmerrequests.show', $custmerrequest) }}" class="btn btn-outline-dark btn-sm">
        <i class="fas fa fa-fw fa-eye"></i>
    </a>
@endcan
