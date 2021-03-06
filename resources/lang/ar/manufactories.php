<?php

return [
    'singular' => 'الماركة',
    'plural' => 'ماركات السيارات',
    'empty' => 'لا يوجد الماركات السيارات حتى الان',
    'count' => 'عدد ماركات السيارات',
    'search' => 'بحث',
    'select' => 'اختر الماركة',
    'permission' => 'ادارة ماركات السيارات',
    'trashed' => 'ماركات السيارات المحذوفين',
    'perPage' => 'عدد النتائج بالصفحة',
    'filter' => 'ابحث عن ماركة',
    'actions' => [
        'list' => 'عرض الكل',
        'create' => 'اضافة ماركة',
        'show' => 'عرض الماركة',
        'edit' => 'تعديل الماركة',
        'delete' => 'حذف الماركة',
        'options' => 'خيارات',
        'save' => 'حفظ',
        'filter' => 'بحث',
    ],
    'messages' => [
        'created' => 'تم اضافة الماركة بنجاح.',
        'updated' => 'تم تعديل الماركة بنجاح.',
        'deleted' => 'تم حذف الماركة بنجاح.',
        'restored' => 'تم استعادة الماركة بنجاح.',
    ],
    'attributes' => [
        'name' => 'اسم الماركة',
        '%name%' => 'اسم الماركة',
        'image' => 'صورة الماركة',
        'created_at' => 'اضافة في',
        'deleted_at' => 'حذف في',
    ],
    'dialogs' => [
        'delete' => [
            'title' => 'تحذير !',
            'info' => 'هل انت متأكد انك تريد حذف الماركة',
            'confirm' => 'حذف',
            'cancel' => 'الغاء',
        ],
        'restore' => [
            'title' => 'تحذير !',
            'info' => 'هل انت متأكد انك تريد استعادة هذا الماركة',
            'confirm' => 'استعادة',
            'cancel' => 'الغاء',
        ],
        'forceDelete' => [
            'title' => 'تحذير !',
            'info' => 'هل أنت متأكد انك تريد حذف هذا الماركة نهائياً?',
            'confirm' => 'حذف نهائي',
            'cancel' => 'الغاء',
        ],
    ],
];
