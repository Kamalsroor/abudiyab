<?php

Breadcrumbs::for('dashboard.works.index', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.home');
    $breadcrumb->push(trans('works.plural'), route('dashboard.works.index'));
});


Breadcrumbs::for('dashboard.works.trashed', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.works.index');
    $breadcrumb->push(trans('works.trashed'), route('dashboard.works.trashed'));
});


Breadcrumbs::for('dashboard.works.create', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.works.index');
    $breadcrumb->push(trans('works.actions.create'), route('dashboard.works.create'));
});

Breadcrumbs::for('dashboard.works.show', function ($breadcrumb, $work) {
    $breadcrumb->parent('dashboard.works.index');
    $breadcrumb->push($work->title, route('dashboard.works.show', $work));
});

Breadcrumbs::for('dashboard.works.edit', function ($breadcrumb, $work) {
    $breadcrumb->parent('dashboard.works.show', $work);
    $breadcrumb->push(trans('works.actions.edit'), route('dashboard.works.edit', $work));
});



