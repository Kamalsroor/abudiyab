@component('dashboard::components.sidebarItem')
    @slot('can', ['ability' => 'viewAny', 'model' => \App\Models\Car::class])
    @slot('url', route('dashboard.cars.index'))
    @slot('name', trans('cars.plural'))
    @slot('active', request()->routeIs('*cars*'))
    @slot('icon', 'fas fa-th')
    @slot('tree', [
        [
            'name' => trans('cars.actions.list'),
            'url' => route('dashboard.cars.index'),
            'can' => ['ability' => 'viewAny', 'model' => \App\Models\Car::class],
            'active' => request()->routeIs('*cars.index')
            || request()->routeIs('*cars.show'),
        ],
        [
            'name' => trans('cars.actions.create'),
            'url' => route('dashboard.cars.create'),
            'can' => ['ability' => 'create', 'model' => \App\Models\Car::class],
            'active' => request()->routeIs('*cars.create'),
        ],
    ])
@endcomponent
