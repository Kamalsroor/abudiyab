<?php

Breadcrumbs::for('dashboard.cars.index', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.home');
    $breadcrumb->push(trans('cars.plural'), route('dashboard.cars.index'));
});


Breadcrumbs::for('dashboard.cars.trashed', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.cars.index');
    $breadcrumb->push(trans('cars.trashed'), route('dashboard.cars.trashed'));
});


Breadcrumbs::for('dashboard.cars.create', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.cars.index');
    $breadcrumb->push(trans('cars.actions.create'), route('dashboard.cars.create'));
});

Breadcrumbs::for('dashboard.cars.show', function ($breadcrumb, $car) {
    $breadcrumb->parent('dashboard.cars.index');
    $breadcrumb->push($car->name, route('dashboard.cars.show', $car));
});

Breadcrumbs::for('dashboard.cars.edit', function ($breadcrumb, $car) {
    $breadcrumb->parent('dashboard.cars.show', $car);
    $breadcrumb->push(trans('cars.actions.edit'), route('dashboard.cars.edit', $car));
});



