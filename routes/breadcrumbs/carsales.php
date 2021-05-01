<?php

Breadcrumbs::for('dashboard.carsales.index', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.home');
    $breadcrumb->push(trans('carsales.plural'), route('dashboard.carsales.index'));
});


Breadcrumbs::for('dashboard.carsales.trashed', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.carsales.index');
    $breadcrumb->push(trans('carsales.trashed'), route('dashboard.carsales.trashed'));
});


Breadcrumbs::for('dashboard.carsales.create', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.carsales.index');
    $breadcrumb->push(trans('carsales.actions.create'), route('dashboard.carsales.create'));
});

Breadcrumbs::for('dashboard.carsales.show', function ($breadcrumb, $carsale) {
    $breadcrumb->parent('dashboard.carsales.index');
    $breadcrumb->push($carsale->name, route('dashboard.carsales.show', $carsale));
});

Breadcrumbs::for('dashboard.carsales.edit', function ($breadcrumb, $carsale) {
    $breadcrumb->parent('dashboard.carsales.show', $carsale);
    $breadcrumb->push(trans('carsales.actions.edit'), route('dashboard.carsales.edit', $carsale));
});



