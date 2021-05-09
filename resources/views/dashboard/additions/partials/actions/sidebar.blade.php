@component('dashboard::components.sidebarItem')
    @slot('can', ['ability' => 'viewAny', 'model' => \App\Models\Addition::class])
    @slot('url', route('dashboard.additions.index'))
    @slot('name', trans('additions.plural'))
    @slot('active', request()->routeIs('*additions*'))
    @slot('icon', 'fas fa-th')
    @slot('tree', [
        [
            'name' => trans('additions.actions.list'),
            'url' => route('dashboard.additions.index'),
            'can' => ['ability' => 'viewAny', 'model' => \App\Models\Addition::class],
            'active' => request()->routeIs('*additions.index')
            || request()->routeIs('*additions.show'),
        ],
        [
            'name' => trans('additions.actions.create'),
            'url' => route('dashboard.additions.create'),
            'can' => ['ability' => 'create', 'model' => \App\Models\Addition::class],
            'active' => request()->routeIs('*additions.create'),
        ],
    ])
@endcomponent
