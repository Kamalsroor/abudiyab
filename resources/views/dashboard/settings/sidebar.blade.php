

@component('dashboard::components.sidebarItem')
@slot('can', ['ability' => 'manage', 'model' => \App\Models\Setting::class])
@slot('url', '#')
@slot('name', trans('settings.pages'))
{{-- @slot('active', request()->routeIs('*settings*')) --}}
@slot('icon', 'fas fa-cogs')
@slot('tree', [
    [
        'name' => trans('settings.tabs.home'),
        'url' => route('dashboard.settings.index', ['tab' => 'home']),
        'active' => request()->routeIs('*settings*') && request('tab') == 'home',
    ],
    [
        'name' => trans('settings.tabs.branches'),
        'url' => route('dashboard.settings.index', ['tab' => 'branches']),
        'active' => request()->routeIs('*settings*') && request('tab') == 'branches',
    ],
    [
        'name' => trans('settings.tabs.car_sales'),
        'url' => route('dashboard.settings.index', ['tab' => 'car_sales']),
        'active' => request()->routeIs('*settings*') && request('tab') == 'car_sales',
    ],
    [
        'name' => trans('settings.tabs.maintenance'),
        'url' => route('dashboard.settings.index', ['tab' => 'maintenance']),
        'active' => request()->routeIs('*settings*') && request('tab') == 'maintenance',
    ],
    [
        'name' => trans('settings.tabs.media_center'),
        'url' => route('dashboard.settings.index', ['tab' => 'media_center']),
        'active' => request()->routeIs('*settings*') && request('tab') == 'media_center',
    ],
    [
        'name' => trans('settings.tabs.about'),
        'url' => route('dashboard.settings.index', ['tab' => 'about']),
        'active' => request()->routeIs('*settings*') && request('tab') == 'about',
    ],
    [
        'name' => trans('settings.tabs.terms'),
        'url' => route('dashboard.settings.index', ['tab' => 'terms']),
        'active' => request()->routeIs('*settings*') && request('tab') == 'terms',
    ],
    [
        'name' => trans('settings.tabs.privacy'),
        'url' => route('dashboard.settings.index', ['tab' => 'privacy']),
        'active' => request()->routeIs('*settings*') && request('tab') == 'privacy',
    ],




])
@endcomponent




@component('dashboard::components.sidebarItem')
    @slot('can', ['ability' => 'manage', 'model' => \App\Models\Setting::class])
    @slot('url', '#')
    @slot('name', trans('settings.plural'))
    {{-- @slot('active', request()->routeIs('*settings*')) --}}
    @slot('icon', 'fas fa-cogs')
    @slot('tree', [
        [
            'name' => trans('settings.tabs.main'),
            'url' => route('dashboard.settings.index', ['tab' => 'main']),
            'active' => request()->routeIs('*settings*') && request('tab') == 'main',
        ],
        [
            'name' => trans('settings.tabs.contacts'),
            'url' => route('dashboard.settings.index', ['tab' => 'contacts']),
            'active' => request()->routeIs('*settings*') && request('tab') == 'contacts',
        ],

        // [
        //     'name' => trans('settings.tabs.mail'),
        //     'url' => route('dashboard.settings.index', ['tab' => 'mail']),
        //     'active' => request()->routeIs('*settings*') && request('tab') == 'mail',
        // ],
        // [
        //     'name' => trans('settings.tabs.pusher'),
        //     'url' => route('dashboard.settings.index', ['tab' => 'pusher']),
        //     'active' => request()->routeIs('*settings*') && request('tab') == 'pusher',
        // ],
        // [
        //     'name' => trans('backup.download'),
        //     'url' => route('dashboard.backup.download'),
        // ],
        [
            'name' => trans('roles.plural'),
            'url' => route('dashboard.roles.index'),
            'can' => ['ability' => 'viewAny', 'model' => \App\Models\Role::class],
            'active' => request()->routeIs('*roles*')
        ],
        [
            'name' => trans('sliders.plural'),
            'url' => route('dashboard.sliders.index'),
            'can' => ['ability' => 'viewAny', 'model' => \App\Models\Slider::class],
            'active' => request()->routeIs('*sliders.index')
            || request()->routeIs('*sliders.show'),
        ],



    ])
@endcomponent

