@component('dashboard::components.sidebarItem')
    @slot('url', route('dashboard.home'))
    @slot('name', trans('dashboard.home'))
    @slot('icon', 'fas fa-tachometer-alt')
    @slot('active', request()->routeIs('dashboard.home'))
@endcomponent

@include('dashboard.accounts.sidebar')

@include('dashboard.branches.partials.actions.sidebar')
@include('dashboard.categories.partials.actions.sidebar')
@include('dashboard.cars.partials.actions.sidebar')
@include('dashboard.manufactories.partials.actions.sidebar')
{{-- @include('dashboard.sliders.partials.actions.sidebar') --}}
@include('dashboard.orders.partials.actions.sidebar')
@include('dashboard.partners.partials.actions.sidebar')
@include('dashboard.offers.partials.actions.sidebar')
@include('dashboard.works.partials.actions.sidebar')
@include('dashboard.memberships.partials.actions.sidebar')
@include('dashboard.regions.partials.actions.sidebar')
{{-- @include('dashboard.custmerrequests.partials.actions.sidebar') --}}
@include('dashboard.carsales.partials.actions.sidebar')
@include('dashboard.mediacenters.partials.actions.sidebar')
@include('dashboard.purchaserequests.partials.actions.sidebar')
{{-- The sidebar of generated crud will set here: Don't remove this line --}}
@include('dashboard.feedback.partials.actions.sidebar')
@include('dashboard.applications.partials.actions.sidebar')
@include('dashboard.settings.sidebar')
