{{-- @component('dashboard::components.sidebarItem')
    @slot('can', ['ability' => 'viewAny', 'model' => \App\Models\Purchaserequest::class])
    @slot('url', route('dashboard.purchaserequests.index'))
    @slot('name', trans('purchaserequests.plural'))
    @slot('active', request()->routeIs('*purchaserequests*'))
    @slot('icon', 'fas fa-th')
    @slot('tree', [
        [
            'name' => trans('purchaserequests.actions.list'),
            'url' => route('dashboard.purchaserequests.index'),
            'can' => ['ability' => 'viewAny', 'model' => \App\Models\Purchaserequest::class],
            'active' => request()->routeIs('*purchaserequests.index')
            || request()->routeIs('*purchaserequests.show'),
        ],
        [
            'name' => trans('purchaserequests.actions.create'),
            'url' => route('dashboard.purchaserequests.create'),
            'can' => ['ability' => 'create', 'model' => \App\Models\Purchaserequest::class],
            'active' => request()->routeIs('*purchaserequests.create'),
        ],
    ])
@endcomponent --}}
