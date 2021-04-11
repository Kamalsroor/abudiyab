<?php

return [
    'singular' => 'Partner',
    'plural' => 'Partners',
    'empty' => 'There are no partners yet.',
    'count' => 'Partners Count.',
    'search' => 'Search',
    'select' => 'Select Partner',
    'permission' => 'Manage partners',
    'trashed' => 'partners Trashed',
    'perPage' => 'Results Per Page',
    'filter' => 'Search for partner',
    'actions' => [
        'list' => 'List All',
        'create' => 'Create a new partner',
        'show' => 'Show partner',
        'edit' => 'Edit partner',
        'delete' => 'Delete partner',
        'options' => 'Options',
        'save' => 'Save',
        'filter' => 'Filter',
    ],
    'messages' => [
        'created' => 'The partner has been created successfully.',
        'updated' => 'The partner has been updated successfully.',
        'deleted' => 'The partner has been deleted successfully.',
        'restored' => 'The partner has been restored successfully.',
    ],
    'attributes' => [
        'name' => 'Partner name',
        'image' => 'Partner image',
        'created_at' => 'Created At',
        'deleted_at' => 'Deleted At',
    ],
    'dialogs' => [
        'delete' => [
            'title' => 'Warning !',
            'info' => 'Are you sure you want to delete the partner?',
            'confirm' => 'Delete',
            'cancel' => 'Cancel',
        ],
        'restore' => [
            'title' => 'Warning !',
            'info' => 'Are you sure you want to restore the partner?',
            'confirm' => 'Restore',
            'cancel' => 'Cancel',
        ],
        'forceDelete' => [
            'title' => 'Warning !',
            'info' => 'Are you sure you want to force delete the partner?',
            'confirm' => 'Force',
            'cancel' => 'Cancel',
        ],
    ],
];
