<?php

return [
    'singular' => 'Region',
    'plural' => 'Regions',
    'empty' => 'There are no regions yet.',
    'count' => 'Regions Count.',
    'search' => 'Search',
    'select' => 'Select Region',
    'permission' => 'Manage regions',
    'trashed' => 'regions Trashed',
    'perPage' => 'Results Per Page',
    'filter' => 'Search for region',
    'actions' => [
        'list' => 'List All',
        'create' => 'Create a new region',
        'show' => 'Show region',
        'edit' => 'Edit region',
        'delete' => 'Delete region',
        'options' => 'Options',
        'save' => 'Save',
        'filter' => 'Filter',
    ],
    'messages' => [
        'created' => 'The region has been created successfully.',
        'updated' => 'The region has been updated successfully.',
        'deleted' => 'The region has been deleted successfully.',
        'restored' => 'The region has been restored successfully.',
    ],
    'attributes' => [
        'name' => 'Region name',
        '%name%' => 'Region name',
        'code' => 'Region code',
        'created_at' => 'Created At',
        'deleted_at' => 'Deleted At',
    ],
    'dialogs' => [
        'delete' => [
            'title' => 'Warning !',
            'info' => 'Are you sure you want to delete the region?',
            'confirm' => 'Delete',
            'cancel' => 'Cancel',
        ],
        'restore' => [
            'title' => 'Warning !',
            'info' => 'Are you sure you want to restore the region?',
            'confirm' => 'Restore',
            'cancel' => 'Cancel',
        ],
        'forceDelete' => [
            'title' => 'Warning !',
            'info' => 'Are you sure you want to force delete the region?',
            'confirm' => 'Force',
            'cancel' => 'Cancel',
        ],
    ],
];
