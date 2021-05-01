<?php

return [
    'singular' => 'Carsale',
    'plural' => 'Carsales',
    'empty' => 'There are no carsales yet.',
    'count' => 'Carsales Count.',
    'search' => 'Search',
    'select' => 'Select Carsale',
    'permission' => 'Manage carsales',
    'trashed' => 'carsales Trashed',
    'perPage' => 'Results Per Page',
    'filter' => 'Search for carsale',
    'actions' => [
        'list' => 'List All',
        'create' => 'Create a new carsale',
        'show' => 'Show carsale',
        'edit' => 'Edit carsale',
        'delete' => 'Delete carsale',
        'options' => 'Options',
        'save' => 'Save',
        'filter' => 'Filter',
    ],
    'messages' => [
        'created' => 'The carsale has been created successfully.',
        'updated' => 'The carsale has been updated successfully.',
        'deleted' => 'The carsale has been deleted successfully.',
        'restored' => 'The carsale has been restored successfully.',
    ],
    'attributes' => [
        'name' => 'Car name',
        'model' => 'model',
        'brand' => 'brand',
        'couter' => 'couter',
        'color_interior' => 'color interior ',
        'color_exterior' => 'color exterior',
        'quantity' => 'quantity',
        'for_sale' => 'for sale',
        'sold' => 'sold',

        'created_at' => 'Created At',
        'deleted_at' => 'Deleted At',
    ],
    'dialogs' => [
        'delete' => [
            'title' => 'Warning !',
            'info' => 'Are you sure you want to delete the carsale?',
            'confirm' => 'Delete',
            'cancel' => 'Cancel',
        ],
        'restore' => [
            'title' => 'Warning !',
            'info' => 'Are you sure you want to restore the carsale?',
            'confirm' => 'Restore',
            'cancel' => 'Cancel',
        ],
        'forceDelete' => [
            'title' => 'Warning !',
            'info' => 'Are you sure you want to force delete the carsale?',
            'confirm' => 'Force',
            'cancel' => 'Cancel',
        ],
    ],
];
