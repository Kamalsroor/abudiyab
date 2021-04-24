@component('dashboard::components.sidebarItem')
    @slot('can', ['ability' => 'viewAny', 'model' => \App\Models\Work::class])
    @slot('url', route('dashboard.works.index'))
    @slot('name', trans('works.plural'))
    @slot('active', request()->routeIs('*works*'))
    @slot('icon', 'fas fa-th')
    @slot('tree', [
        [
            'name' => trans('works.actions.list'),
            'url' => route('dashboard.works.index'),
            'can' => ['ability' => 'viewAny', 'model' => \App\Models\Work::class],
            'active' => request()->routeIs('*works.index')
            || request()->routeIs('*works.show'),
        ],
        [
            'name' => trans('works.actions.create'),
            'url' => route('dashboard.works.create'),
            'can' => ['ability' => 'create', 'model' => \App\Models\Work::class],
            'active' => request()->routeIs('*works.create'),
        ],
    ])
@endcomponent
