<?php

Breadcrumbs::for('dashboard.memberships.index', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.home');
    $breadcrumb->push(trans('memberships.plural'), route('dashboard.memberships.index'));
});


Breadcrumbs::for('dashboard.memberships.trashed', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.memberships.index');
    $breadcrumb->push(trans('memberships.trashed'), route('dashboard.memberships.trashed'));
});


Breadcrumbs::for('dashboard.memberships.create', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.memberships.index');
    $breadcrumb->push(trans('memberships.actions.create'), route('dashboard.memberships.create'));
});

Breadcrumbs::for('dashboard.memberships.show', function ($breadcrumb, $membership) {
    $breadcrumb->parent('dashboard.memberships.index');
    $breadcrumb->push($membership->name, route('dashboard.memberships.show', $membership));
});

Breadcrumbs::for('dashboard.memberships.edit', function ($breadcrumb, $membership) {
    $breadcrumb->parent('dashboard.memberships.show', $membership);
    $breadcrumb->push(trans('memberships.actions.edit'), route('dashboard.memberships.edit', $membership));
});



