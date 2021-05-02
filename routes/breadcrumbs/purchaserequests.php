<?php

Breadcrumbs::for('dashboard.purchaserequests.index', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.home');
    $breadcrumb->push(trans('purchaserequests.plural'), route('dashboard.purchaserequests.index'));
});


Breadcrumbs::for('dashboard.purchaserequests.trashed', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.purchaserequests.index');
    $breadcrumb->push(trans('purchaserequests.trashed'), route('dashboard.purchaserequests.trashed'));
});


Breadcrumbs::for('dashboard.purchaserequests.create', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.purchaserequests.index');
    $breadcrumb->push(trans('purchaserequests.actions.create'), route('dashboard.purchaserequests.create'));
});

Breadcrumbs::for('dashboard.purchaserequests.show', function ($breadcrumb, $purchaserequest) {
    $breadcrumb->parent('dashboard.purchaserequests.index');
    $breadcrumb->push($purchaserequest->name, route('dashboard.purchaserequests.show', $purchaserequest));
});

Breadcrumbs::for('dashboard.purchaserequests.edit', function ($breadcrumb, $purchaserequest) {
    $breadcrumb->parent('dashboard.purchaserequests.show', $purchaserequest);
    $breadcrumb->push(trans('purchaserequests.actions.edit'), route('dashboard.purchaserequests.edit', $purchaserequest));
});



