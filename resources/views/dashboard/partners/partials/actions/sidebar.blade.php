@component('dashboard::components.sidebarItem')
    @slot('can', ['ability' => 'viewAny', 'model' => \App\Models\Partner::class])
    @slot('url', route('dashboard.partners.index'))
    @slot('name', trans('partners.plural'))
    @slot('active', request()->routeIs('*partners*'))
    @slot('icon', 'fas fa-th')
    @slot('tree', [
        [
            'name' => trans('partners.actions.list'),
            'url' => route('dashboard.partners.index'),
            'can' => ['ability' => 'viewAny', 'model' => \App\Models\Partner::class],
            'active' => request()->routeIs('*partners.index')
            || request()->routeIs('*partners.show'),
        ],
        [
            'name' => trans('partners.actions.create'),
            'url' => route('dashboard.partners.create'),
            'can' => ['ability' => 'create', 'model' => \App\Models\Partner::class],
            'active' => request()->routeIs('*partners.create'),
        ],
    ])
@endcomponent
