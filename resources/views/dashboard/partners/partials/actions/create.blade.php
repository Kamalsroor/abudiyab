@can('create', \App\Models\Partner::class)
    <a href="{{ route('dashboard.partners.create') }}" class="btn btn-outline-success btn-sm">
        <i class="fas fa fa-fw fa-plus"></i>
        @lang('partners.actions.create')
    </a>
@endcan
