@component('dashboard::components.sidebarItem')
    @slot('can', ['ability' => 'viewAny', 'model' => \App\Models\Custmerrequest::class])
    @slot('url', route('dashboard.custmerrequests.index'))
    @slot('name', trans('custmerrequests.plural'))
    @slot('active', request()->routeIs('*custmerrequests*'))
    @slot('icon', 'fas fa-th')
    @slot('badge', count_formatted(\App\Models\Custmerrequest::unread()->count()) ?: null)
    @slot('tree', [
        [
            'name' => trans('custmerrequests.actions.list'),
            'url' => route('dashboard.custmerrequests.index'),
            'can' => ['ability' => 'viewAny', 'model' => \App\Models\Custmerrequest::class],
            'active' => request()->routeIs('*custmerrequests.index')
            || request()->routeIs('*custmerrequests.show'),
        ],
        [
            'name' => trans('custmerrequests.actions.create'),
            'url' => route('dashboard.custmerrequests.create'),
            'can' => ['ability' => 'create', 'model' => \App\Models\Custmerrequest::class],
            'active' => request()->routeIs('*custmerrequests.create'),
        ],
    ])
@endcomponent
