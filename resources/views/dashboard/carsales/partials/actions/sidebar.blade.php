@component('dashboard::components.sidebarItem')
    @slot('can', ['ability' => 'viewAny', 'model' => \App\Models\Carsale::class])
    @slot('url', route('dashboard.carsales.index'))
    @slot('name', trans('carsales.plural'))
    @slot('active', request()->routeIs('*carsales*'))
    @slot('icon', 'fas fa-th')
    @slot('tree', [
        [
            'name' => trans('carsales.actions.list'),
            'url' => route('dashboard.carsales.index'),
            'can' => ['ability' => 'viewAny', 'model' => \App\Models\Carsale::class],
            'active' => request()->routeIs('*carsales.index')
            || request()->routeIs('*carsales.show'),
        ],
        [
            'name' => trans('carsales.actions.create'),
            'url' => route('dashboard.carsales.create'),
            'can' => ['ability' => 'create', 'model' => \App\Models\Carsale::class],
            'active' => request()->routeIs('*carsales.create'),
        ],
    ])
@endcomponent
