<?php

return [
    'singular' => 'Work',
    'plural' => 'Works',
    'empty' => 'There are no works yet.',
    'count' => 'Works Count.',
    'search' => 'Search',
    'select' => 'Select Work',
    'permission' => 'Manage works',
    'trashed' => 'works Trashed',
    'perPage' => 'Results Per Page',
    'filter' => 'Search for work',
    'actions' => [
        'list' => 'List All',
        'create' => 'Create a new work',
        'show' => 'Show work',
        'edit' => 'Edit work',
        'delete' => 'Delete work',
        'options' => 'Options',
        'save' => 'Save',
        'filter' => 'Filter',
    ],
    'messages' => [
        'created' => 'The work has been created successfully.',
        'updated' => 'The work has been updated successfully.',
        'deleted' => 'The work has been deleted successfully.',
        'restored' => 'The work has been restored successfully.',
        'send' => 'application done successfully.',
    ],
    'attributes' => [
        'title' => 'work name',
        'description' => 'work description',
        'available' => 'available',
        'created_at' => 'Created At',
        'deleted_at' => 'Deleted At',
        'application_id' => 'application id',
    ],
    'dialogs' => [
        'delete' => [
            'title' => 'Warning !',
            'info' => 'Are you sure you want to delete the work?',
            'confirm' => 'Delete',
            'cancel' => 'Cancel',
        ],
        'restore' => [
            'title' => 'Warning !',
            'info' => 'Are you sure you want to restore the work?',
            'confirm' => 'Restore',
            'cancel' => 'Cancel',
        ],
        'forceDelete' => [
            'title' => 'Warning !',
            'info' => 'Are you sure you want to force delete the work?',
            'confirm' => 'Force',
            'cancel' => 'Cancel',
        ],
    ],
];
