<?php

Breadcrumbs::for('dashboard.area_pricings.index', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.home');
    $breadcrumb->push(trans('area_pricings.plural'), route('dashboard.area_pricings.index'));
});


Breadcrumbs::for('dashboard.area_pricings.trashed', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.area_pricings.index');
    $breadcrumb->push(trans('area_pricings.trashed'), route('dashboard.area_pricings.trashed'));
});


Breadcrumbs::for('dashboard.area_pricings.create', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.area_pricings.index');
    $breadcrumb->push(trans('area_pricings.actions.create'), route('dashboard.area_pricings.create'));
});

Breadcrumbs::for('dashboard.area_pricings.show', function ($breadcrumb, $area_pricing) {
    $breadcrumb->parent('dashboard.area_pricings.index');
    $breadcrumb->push($area_pricing->name, route('dashboard.area_pricings.show', $area_pricing));
});

Breadcrumbs::for('dashboard.area_pricings.edit', function ($breadcrumb, $area_pricing) {
    $breadcrumb->parent('dashboard.area_pricings.show', $area_pricing);
    $breadcrumb->push(trans('area_pricings.actions.edit'), route('dashboard.area_pricings.edit', $area_pricing));
});



