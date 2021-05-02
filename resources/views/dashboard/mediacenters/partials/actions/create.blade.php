@can('create', \App\Models\Mediacenter::class)
    <a href="{{ route('dashboard.mediacenters.create') }}" class="btn btn-outline-success btn-sm">
        <i class="fas fa fa-fw fa-plus"></i>
        @lang('mediacenters.actions.create')
    </a>
@endcan
