<?php

return [
    'singular' => 'Car',
    'plural' => 'Cars',
    'empty' => 'There are no cars yet.',
    'count' => 'Cars Count.',
    'search' => 'Search',
    'select' => 'Select Car',
    'permission' => 'Manage cars',
    'trashed' => 'cars Trashed',
    'perPage' => 'Results Per Page',
    'filter' => 'Search for car',
    'actions' => [
        'list' => 'List All',
        'create' => 'Create a new car',
        'show' => 'Show car',
        'edit' => 'Edit car',
        'delete' => 'Delete car',
        'options' => 'Options',
        'save' => 'Save',
        'filter' => 'Filter',
    ],
    'messages' => [
        'created' => 'The car has been created successfully.',
        'updated' => 'The car has been updated successfully.',
        'deleted' => 'The car has been deleted successfully.',
        'restored' => 'The car has been restored successfully.',
    ],
    'attributes' => [
        'name' => 'Car name',
        '%name%' => 'Car name',
        'image' => 'Car image',
        'created_at' => 'Created At',
        'deleted_at' => 'Deleted At',
    ],
    'dialogs' => [
        'delete' => [
            'title' => 'Warning !',
            'info' => 'Are you sure you want to delete the car?',
            'confirm' => 'Delete',
            'cancel' => 'Cancel',
        ],
        'restore' => [
            'title' => 'Warning !',
            'info' => 'Are you sure you want to restore the car?',
            'confirm' => 'Restore',
            'cancel' => 'Cancel',
        ],
        'forceDelete' => [
            'title' => 'Warning !',
            'info' => 'Are you sure you want to force delete the car?',
            'confirm' => 'Force',
            'cancel' => 'Cancel',
        ],
    ],
];
