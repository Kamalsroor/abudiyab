@can('create', \App\Models\Custmerrequest::class)
    <a href="{{ route('dashboard.custmerrequests.create') }}" class="btn btn-outline-success btn-sm">
        <i class="fas fa fa-fw fa-plus"></i>
        @lang('custmerrequests.actions.create')
    </a>
@endcan
