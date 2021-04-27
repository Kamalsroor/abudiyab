@if(Gate::allows('viewAny', \App\Models\User::class)
    || Gate::allows('viewAny', \App\Models\Supervisor::class)
    || Gate::allows('viewAny', \App\Models\Customer::class))
    @component('dashboard::components.sidebarItem')
        @slot('url', '#')
        @slot('name', trans('users.plural'))
        @slot('active', request()->routeIs('*admins*') || request()->routeIs('*customers*'))
        @slot('icon', 'fas fa-users')
        {{-- @slot('badge', count_formatted(\App\Models\Customer::UnConfirmed()->count()) ?: null) --}}
        @slot('tree', [
              [
                'name' => trans('custmerrequests.plural'),
                'url' => route('dashboard.custmerrequests.index'),
                'badge' => count_formatted(\App\Models\Custmerrequest::pending()->count()) ?: null,
                'can' => ['ability' => 'viewAny', 'model' => \App\Models\Custmerrequest::class],
                'active' => request()->routeIs('*custmerrequests.index')
                || request()->routeIs('*custmerrequests.show'),
             ],
            [
                'name' => trans('admins.plural'),
                'url' => route('dashboard.admins.index'),
                'can' => ['ability' => 'viewAny', 'model' => \App\Models\Admin::class],
                'active' => request()->routeIs('*admins*'),
            ],
            [
                'name' => trans('supervisors.plural'),
                'url' => route('dashboard.supervisors.index'),
                'can' => ['ability' => 'viewAny', 'model' => \App\Models\Supervisor::class],
                'active' => request()->routeIs('*supervisors*'),
            ],
            [
                'name' => trans('customers.plural'),
                'url' => route('dashboard.customers.index'),
                'can' => ['ability' => 'viewAny', 'model' => \App\Models\Customer::class],
                'active' => request()->routeIs('*customers*'),
            ],

        ])
    @endcomponent
@endif
