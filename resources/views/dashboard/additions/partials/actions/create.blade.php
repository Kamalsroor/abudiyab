@can('create', \App\Models\Addition::class)
    <a href="{{ route('dashboard.additions.create') }}" class="btn btn-outline-success btn-sm">
        <i class="fas fa fa-fw fa-plus"></i>
        @lang('additions.actions.create')
    </a>
@endcan
