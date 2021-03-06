<?php

return [
    'singular' => 'الشريك',
    'plural' => 'الشركاء',
    'empty' => 'لا يوجد شركاء حتى الان',
    'count' => 'عدد الشركاء',
    'search' => 'بحث',
    'select' => 'اختر الشريك',
    'permission' => 'ادارة الشركاء',
    'trashed' => 'الشركاء المحذوفين',
    'perPage' => 'عدد النتائج بالصفحة',
    'filter' => 'ابحث عن شريك',
    'actions' => [
        'list' => 'عرض الكل',
        'create' => 'اضافة شريك',
        'show' => 'عرض الشريك',
        'edit' => 'تعديل الشريك',
        'delete' => 'حذف الشريك',
        'options' => 'خيارات',
        'save' => 'حفظ',
        'filter' => 'بحث',
    ],
    'messages' => [
        'created' => 'تم اضافة الشريك بنجاح.',
        'updated' => 'تم تعديل الشريك بنجاح.',
        'deleted' => 'تم حذف الشريك بنجاح.',
        'restored' => 'تم استعادة الشريك بنجاح.',
    ],
    'attributes' => [
        'name' => 'اسم الشريك',
        'image' => 'صورة الشريك',
        'created_at' => 'اضافة في',
        'deleted_at' => 'حذف في',
    ],
    'dialogs' => [
        'delete' => [
            'title' => 'تحذير !',
            'info' => 'هل انت متأكد انك تريد حذف الشريك',
            'confirm' => 'حذف',
            'cancel' => 'الغاء',
        ],
        'restore' => [
            'title' => 'تحذير !',
            'info' => 'هل انت متأكد انك تريد استعادة هذا الشريك',
            'confirm' => 'استعادة',
            'cancel' => 'الغاء',
        ],
        'forceDelete' => [
            'title' => 'تحذير !',
            'info' => 'هل أنت متأكد انك تريد حذف هذا الشريك نهائياً?',
            'confirm' => 'حذف نهائي',
            'cancel' => 'الغاء',
        ],
    ],
];
