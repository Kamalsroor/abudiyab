@component('dashboard::components.sidebarItem')
    @slot('can', ['ability' => 'viewAny', 'model' => \App\Models\WorkCandidates::class])
    @slot('url', route('dashboard.applications.index'))
    @slot('name', trans('applications.plural'))
    @slot('active', request()->routeIs('*applications*'))
    @slot('icon', 'fas fa-envelope')
    @slot('badge', count_formatted(\App\Models\WorkCandidates::unread()->count()) ?: null)
@endcomponent
