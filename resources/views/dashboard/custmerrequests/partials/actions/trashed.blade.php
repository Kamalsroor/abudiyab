@can('viewTrash', \App\Models\Custmerrequest::class)
    <a href="{{ route('dashboard.custmerrequests.trashed', request()->only('type')) }}" class="btn btn-outline-danger btn-sm">
        <i class="fas fa fa-fw fa-trash"></i>
        @lang('custmerrequests.trashed')
    </a>
@endcan
