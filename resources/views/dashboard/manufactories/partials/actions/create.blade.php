@can('create', \App\Models\Manufactory::class)
    <a href="{{ route('dashboard.manufactories.create') }}" class="btn btn-outline-success btn-sm">
        <i class="fas fa fa-fw fa-plus"></i>
        @lang('manufactories.actions.create')
    </a>
@endcan
