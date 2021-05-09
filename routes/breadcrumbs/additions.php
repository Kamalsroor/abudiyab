<?php

Breadcrumbs::for('dashboard.additions.index', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.home');
    $breadcrumb->push(trans('additions.plural'), route('dashboard.additions.index'));
});


Breadcrumbs::for('dashboard.additions.trashed', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.additions.index');
    $breadcrumb->push(trans('additions.trashed'), route('dashboard.additions.trashed'));
});


Breadcrumbs::for('dashboard.additions.create', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.additions.index');
    $breadcrumb->push(trans('additions.actions.create'), route('dashboard.additions.create'));
});

Breadcrumbs::for('dashboard.additions.show', function ($breadcrumb, $addition) {
    $breadcrumb->parent('dashboard.additions.index');
    $breadcrumb->push($addition->name, route('dashboard.additions.show', $addition));
});

Breadcrumbs::for('dashboard.additions.edit', function ($breadcrumb, $addition) {
    $breadcrumb->parent('dashboard.additions.show', $addition);
    $breadcrumb->push(trans('additions.actions.edit'), route('dashboard.additions.edit', $addition));
});



