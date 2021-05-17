@component('dashboard::components.sidebarItem')
    @slot('can', ['ability' => 'viewAny', 'model' => \App\Models\AreaPricing::class])
    @slot('url', route('dashboard.area_pricings.index'))
    @slot('name', trans('area_pricings.plural'))
    @slot('active', request()->routeIs('*area_pricings*'))
    @slot('icon', 'fas fa-th')
    @slot('tree', [
        [
            'name' => trans('area_pricings.actions.list'),
            'url' => route('dashboard.area_pricings.index'),
            'can' => ['ability' => 'viewAny', 'model' => \App\Models\AreaPricing::class],
            'active' => request()->routeIs('*area_pricings.index')
            || request()->routeIs('*area_pricings.show'),
        ],
        [
            'name' => trans('area_pricings.actions.create'),
            'url' => route('dashboard.area_pricings.create'),
            'can' => ['ability' => 'create', 'model' => \App\Models\AreaPricing::class],
            'active' => request()->routeIs('*area_pricings.create'),
        ],
    ])
@endcomponent
