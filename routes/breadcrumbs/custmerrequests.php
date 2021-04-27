<?php

Breadcrumbs::for('dashboard.custmerrequests.index', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.home');
    $breadcrumb->push(trans('custmerrequests.plural'), route('dashboard.custmerrequests.index'));
});


Breadcrumbs::for('dashboard.custmerrequests.trashed', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.custmerrequests.index');
    $breadcrumb->push(trans('custmerrequests.trashed'), route('dashboard.custmerrequests.trashed'));
});


Breadcrumbs::for('dashboard.custmerrequests.create', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.custmerrequests.index');
    $breadcrumb->push(trans('custmerrequests.actions.create'), route('dashboard.custmerrequests.create'));
});

Breadcrumbs::for('dashboard.custmerrequests.show', function ($breadcrumb, $custmerrequest) {
    $breadcrumb->parent('dashboard.custmerrequests.index');
    $breadcrumb->push($custmerrequest->customer->name, route('dashboard.custmerrequests.show', $custmerrequest));
});

Breadcrumbs::for('dashboard.custmerrequests.edit', function ($breadcrumb, $custmerrequest) {
    $breadcrumb->parent('dashboard.custmerrequests.show', $custmerrequest);
    $breadcrumb->push(trans('custmerrequests.actions.edit'), route('dashboard.custmerrequests.edit', $custmerrequest));
});



