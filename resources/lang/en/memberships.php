<?php

return [
    'singular' => 'Membership',
    'plural' => 'Memberships',
    'empty' => 'There are no memberships yet.',
    'count' => 'Memberships Count.',
    'search' => 'Search',
    'select' => 'Select Membership',
    'permission' => 'Manage memberships',
    'trashed' => 'memberships Trashed',
    'perPage' => 'Results Per Page',
    'filter' => 'Search for membership',
    'actions' => [
        'list' => 'List All',
        'create' => 'Create a new membership',
        'show' => 'Show membership',
        'edit' => 'Edit membership',
        'delete' => 'Delete membership',
        'options' => 'Options',
        'save' => 'Save',
        'filter' => 'Filter',
    ],
    'messages' => [
        'created' => 'The membership has been created successfully.',
        'updated' => 'The membership has been updated successfully.',
        'deleted' => 'The membership has been deleted successfully.',
        'restored' => 'The membership has been restored successfully.',
    ],
    'attributes' => [
        'name' => 'Membership name',
        '%name%' => 'Membership name',
        'image' => 'Membership image',
        'description' => 'membership description',
        'created_at' => 'Created At',
        'deleted_at' => 'Deleted At',
    ],
    'dialogs' => [
        'delete' => [
            'title' => 'Warning !',
            'info' => 'Are you sure you want to delete the membership?',
            'confirm' => 'Delete',
            'cancel' => 'Cancel',
        ],
        'restore' => [
            'title' => 'Warning !',
            'info' => 'Are you sure you want to restore the membership?',
            'confirm' => 'Restore',
            'cancel' => 'Cancel',
        ],
        'forceDelete' => [
            'title' => 'Warning !',
            'info' => 'Are you sure you want to force delete the membership?',
            'confirm' => 'Force',
            'cancel' => 'Cancel',
        ],
    ],
];
