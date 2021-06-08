<?php

return [
    'singular' => 'Custmerrequest',
    'plural' => 'Custmerrequests',
    'empty' => 'There are no custmerrequests yet.',
    'count' => 'Custmerrequests Count.',
    'search' => 'Search',
    'select' => 'Select Custmerrequest',
    'permission' => 'Manage custmerrequests',
    'trashed' => 'custmerrequests Trashed',
    'perPage' => 'Results Per Page',
    'filter' => 'Search for custmerrequest',
    'actions' => [
        'list' => 'List All',
        'create' => 'Create a new custmerrequest',
        'show' => 'Show custmerrequest',
        'edit' => 'Edit custmerrequest',
        'delete' => 'Delete custmerrequest',
        'options' => 'Options',
        'save' => 'Save',
        'filter' => 'Filter',
    ],
    'messages' => [
        'created' => 'The custmerrequest has been created successfully.',
        'updated' => 'The custmerrequest has been updated successfully.',
        'deleted' => 'The custmerrequest has been deleted successfully.',
        'restored' => 'The custmerrequest has been restored successfully.',
    ],
    'attributes' => [
        'name' => 'Custmerrequest name',
        'image' => 'Custmerrequest image',
        'created_at' => 'Created At',
        'deleted_at' => 'Deleted At',
        "identityfront" => "identity front",
        'phone' => 'custmer phone',

        "email"=> "email",
        "identityback" => "identity back",
        "licencefront" => "licence front",
        "licenceback" => "licence back",
    ],
    'dialogs' => [
        'delete' => [
            'title' => 'Warning !',
            'info' => 'Are you sure you want to delete the custmerrequest?',
            'confirm' => 'Delete',
            'cancel' => 'Cancel',
        ],
        'restore' => [
            'title' => 'Warning !',
            'info' => 'Are you sure you want to restore the custmerrequest?',
            'confirm' => 'Restore',
            'cancel' => 'Cancel',
        ],
        'forceDelete' => [
            'title' => 'Warning !',
            'info' => 'Are you sure you want to force delete the custmerrequest?',
            'confirm' => 'Force',
            'cancel' => 'Cancel',
        ],
    ],
];
