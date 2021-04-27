<?php

Breadcrumbs::for('dashboard.employees.index', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.home');
    $breadcrumb->push(trans('employees.plural'), route('dashboard.employees.index'));
});

Breadcrumbs::for('dashboard.employees.create', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.employees.index');
    $breadcrumb->push(trans('employees.actions.create'), route('dashboard.employees.create'));
});

Breadcrumbs::for('dashboard.employees.show', function ($breadcrumb, $employee) {
    $breadcrumb->parent('dashboard.employees.index');
    $breadcrumb->push($employee->name, route('dashboard.employees.show', $employee));
});

Breadcrumbs::for('dashboard.employees.edit', function ($breadcrumb, $employee) {
    $breadcrumb->parent('dashboard.employees.show', $employee);
    $breadcrumb->push(trans('employees.actions.edit'), route('dashboard.employees.edit', $employee));
});
