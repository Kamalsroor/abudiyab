<?php

return [
    'singular' => 'Order',
    'plural' => 'Orders',
    'empty' => 'There are no orders yet.',
    'count' => 'Orders Count.',
    'search' => 'Search',
    'select' => 'Select Order',
    'permission' => 'Manage orders',
    'trashed' => 'orders Trashed',
    'perPage' => 'Results Per Page',
    'filter' => 'Search for order',
    'actions' => [
        'list' => 'List All',
        'create' => 'Create a new order',
        'show' => 'Show order',
        'edit' => 'Edit order',
        'delete' => 'Delete order',
        'options' => 'Options',
        'save' => 'Save',
        'filter' => 'Filter',
    ],
    'payment_statment' => [
        'visa' => 'pay with visa and get extra discount ',
    ],
    'messages' => [
        'created' => 'The order has been created successfully.',
        'updated' => 'The order has been updated successfully.',
        'deleted' => 'The order has been deleted successfully.',
        'restored' => 'The order has been restored successfully.',
    ],
    'attributes' => [
        'name' => 'car name',
        'created_at' => 'Created At',
        'deleted_at' => 'Deleted At',
        'recieving_branch' => 'recieving branch',
        'booking_days' => 'booking days',
        'recieving_date' => 'recieving date',
        'delivery_branch' => 'delivery branch',
        'payment_type' => 'payment type',
        'payment_status' => 'payment Status',
        'features_added' => 'features added',
    ],
    'dialogs' => [
        'delete' => [
            'title' => 'Warning !',
            'info' => 'Are you sure you want to delete the order?',
            'confirm' => 'Delete',
            'cancel' => 'Cancel',
        ],
        'restore' => [
            'title' => 'Warning !',
            'info' => 'Are you sure you want to restore the order?',
            'confirm' => 'Restore',
            'cancel' => 'Cancel',
        ],
        'forceDelete' => [
            'title' => 'Warning !',
            'info' => 'Are you sure you want to force delete the order?',
            'confirm' => 'Force',
            'cancel' => 'Cancel',
        ],
    ],
];
