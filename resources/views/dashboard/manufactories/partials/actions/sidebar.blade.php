@component('dashboard::components.sidebarItem')
    @slot('can', ['ability' => 'viewAny', 'model' => \App\Models\Manufactory::class])
    @slot('url', route('dashboard.manufactories.index'))
    @slot('name', trans('manufactories.plural'))
    @slot('active', request()->routeIs('*manufactories*'))
    @slot('icon', 'fas fa-th')
    @slot('tree', [
        [
            'name' => trans('manufactories.actions.list'),
            'url' => route('dashboard.manufactories.index'),
            'can' => ['ability' => 'viewAny', 'model' => \App\Models\Manufactory::class],
            'active' => request()->routeIs('*manufactories.index')
            || request()->routeIs('*manufactories.show'),
        ],
        [
            'name' => trans('manufactories.actions.create'),
            'url' => route('dashboard.manufactories.create'),
            'can' => ['ability' => 'create', 'model' => \App\Models\Manufactory::class],
            'active' => request()->routeIs('*manufactories.create'),
        ],
    ])
@endcomponent
