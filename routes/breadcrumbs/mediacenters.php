<?php

Breadcrumbs::for('dashboard.mediacenters.index', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.home');
    $breadcrumb->push(trans('mediacenters.plural'), route('dashboard.mediacenters.index'));
});


Breadcrumbs::for('dashboard.mediacenters.trashed', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.mediacenters.index');
    $breadcrumb->push(trans('mediacenters.trashed'), route('dashboard.mediacenters.trashed'));
});


Breadcrumbs::for('dashboard.mediacenters.create', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.mediacenters.index');
    $breadcrumb->push(trans('mediacenters.actions.create'), route('dashboard.mediacenters.create'));
});

Breadcrumbs::for('dashboard.mediacenters.show', function ($breadcrumb, $mediacenter) {
    $breadcrumb->parent('dashboard.mediacenters.index');
    $breadcrumb->push($mediacenter->title, route('dashboard.mediacenters.show', $mediacenter));
});

Breadcrumbs::for('dashboard.mediacenters.edit', function ($breadcrumb, $mediacenter) {
    $breadcrumb->parent('dashboard.mediacenters.show', $mediacenter);
    $breadcrumb->push(trans('mediacenters.actions.edit'), route('dashboard.mediacenters.edit', $mediacenter));
});



