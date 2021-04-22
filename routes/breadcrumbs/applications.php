<?php

Breadcrumbs::for('dashboard.applications.index', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.home');
    $breadcrumb->push(trans('applications.plural'), route('dashboard.applications.index'));
});

Breadcrumbs::for('dashboard.applications.create', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.applications.index');
    $breadcrumb->push(trans('applications.actions.create'), route('dashboard.applications.create'));
});

Breadcrumbs::for('dashboard.applications.show', function ($breadcrumb, $application) {
    $breadcrumb->parent('dashboard.applications.index');
    $breadcrumb->push($application->name, route('dashboard.applications.show', $application));
});

Breadcrumbs::for('dashboard.applications.edit', function ($breadcrumb, $application) {
    $breadcrumb->parent('dashboard.applications.show', $application);
    $breadcrumb->push(trans('applications.actions.edit'), route('dashboard.applications.edit', $application));
});
