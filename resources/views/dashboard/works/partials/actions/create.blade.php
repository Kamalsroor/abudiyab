@can('create', \App\Models\Work::class)
    <a href="{{ route('dashboard.works.create') }}" class="btn btn-outline-success btn-sm">
        <i class="fas fa fa-fw fa-plus"></i>
        @lang('works.actions.create')
    </a>
@endcan
