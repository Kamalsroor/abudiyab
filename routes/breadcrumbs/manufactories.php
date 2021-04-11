<?php

Breadcrumbs::for('dashboard.manufactories.index', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.home');
    $breadcrumb->push(trans('manufactories.plural'), route('dashboard.manufactories.index'));
});


Breadcrumbs::for('dashboard.manufactories.trashed', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.manufactories.index');
    $breadcrumb->push(trans('manufactories.trashed'), route('dashboard.manufactories.trashed'));
});


Breadcrumbs::for('dashboard.manufactories.create', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.manufactories.index');
    $breadcrumb->push(trans('manufactories.actions.create'), route('dashboard.manufactories.create'));
});

Breadcrumbs::for('dashboard.manufactories.show', function ($breadcrumb, $manufactory) {
    $breadcrumb->parent('dashboard.manufactories.index');
    $breadcrumb->push($manufactory->name, route('dashboard.manufactories.show', $manufactory));
});

Breadcrumbs::for('dashboard.manufactories.edit', function ($breadcrumb, $manufactory) {
    $breadcrumb->parent('dashboard.manufactories.show', $manufactory);
    $breadcrumb->push(trans('manufactories.actions.edit'), route('dashboard.manufactories.edit', $manufactory));
});



