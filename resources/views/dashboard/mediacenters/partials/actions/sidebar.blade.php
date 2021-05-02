@component('dashboard::components.sidebarItem')
    @slot('can', ['ability' => 'viewAny', 'model' => \App\Models\Mediacenter::class])
    @slot('url', route('dashboard.mediacenters.index'))
    @slot('name', trans('mediacenters.plural'))
    @slot('active', request()->routeIs('*mediacenters*'))
    @slot('icon', 'fas fa-th')
    @slot('tree', [
        [
            'name' => trans('mediacenters.actions.list'),
            'url' => route('dashboard.mediacenters.index'),
            'can' => ['ability' => 'viewAny', 'model' => \App\Models\Mediacenter::class],
            'active' => request()->routeIs('*mediacenters.index')
            || request()->routeIs('*mediacenters.show'),
        ],
        [
            'name' => trans('mediacenters.actions.create'),
            'url' => route('dashboard.mediacenters.create'),
            'can' => ['ability' => 'create', 'model' => \App\Models\Mediacenter::class],
            'active' => request()->routeIs('*mediacenters.create'),
        ],
    ])
@endcomponent
