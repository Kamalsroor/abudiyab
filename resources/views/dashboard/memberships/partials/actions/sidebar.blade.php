@component('dashboard::components.sidebarItem')
    @slot('can', ['ability' => 'viewAny', 'model' => \App\Models\Membership::class])
    @slot('url', route('dashboard.memberships.index'))
    @slot('name', trans('memberships.plural'))
    @slot('active', request()->routeIs('*memberships*'))
    @slot('icon', 'fas fa-th')
    @slot('tree', [
        [
            'name' => trans('memberships.actions.list'),
            'url' => route('dashboard.memberships.index'),
            'can' => ['ability' => 'viewAny', 'model' => \App\Models\Membership::class],
            'active' => request()->routeIs('*memberships.index')
            || request()->routeIs('*memberships.show'),
        ],
        [
            'name' => trans('memberships.actions.create'),
            'url' => route('dashboard.memberships.create'),
            'can' => ['ability' => 'create', 'model' => \App\Models\Membership::class],
            'active' => request()->routeIs('*memberships.create'),
        ],
    ])
@endcomponent
