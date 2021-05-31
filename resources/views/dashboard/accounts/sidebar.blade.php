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
                'name' => trans('employees.plural'),
                'url' => route('dashboard.employees.index'),
                'can' => ['ability' => 'viewAny', 'model' => \App\Models\Employee::class],
                'active' => request()->routeIs('*employees*'),
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
@if(Gate::allows('viewAny', \App\Models\Custmerrequest::class))
    @component('dashboard::components.sidebarItem')
        @slot('url', route('dashboard.custmerrequests.index'))
        @slot('name',  trans('custmerrequests.plural'))
        @slot('active', request()->routeIs('*custmerrequests*'))
        @slot('icon', 'fas fa-users')
        @slot('badge', count_formatted(\App\Models\Custmerrequest::pending()->count()) ?: null)
      )
    @endcomponent
@endif
