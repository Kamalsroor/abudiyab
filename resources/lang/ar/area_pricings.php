<?php

return [
    'singular' => 'تسعر المناطق',
    'plural' => 'تسعيرات المناطق',
    'empty' => 'لا يوجد تسعيرات مناطق حتى الان',
    'count' => 'عدد تسعيرات المناطق',
    'search' => 'بحث',
    'select' => 'اختر تسعر المناطق',
    'permission' => 'ادارة تسعيرات المناطق',
    'trashed' => 'تسعيرات المناطق المحذوفين',
    'perPage' => 'عدد النتائج بالصفحة',
    'filter' => 'ابحث عن تسعير منطقة',
    'actions' => [
        'list' => 'عرض الكل',
        'create' => 'اضافة تسعير منطقة',
        'show' => 'عرض تسعر المناطق',
        'edit' => 'تعديل تسعر المناطق',
        'delete' => 'حذف تسعر المناطق',
        'options' => 'خيارات',
        'save' => 'حفظ',
        'filter' => 'بحث',
    ],
    'messages' => [
        'created' => 'تم اضافة تسعر المناطق بنجاح.',
        'updated' => 'تم تعديل تسعر المناطق بنجاح.',
        'deleted' => 'تم حذف تسعر المناطق بنجاح.',
        'restored' => 'تم استعادة تسعر المناطق بنجاح.',
    ],
    'attributes' => [
        'name' => 'اسم تسعر المناطق',
        // 'region_id' => '',
        // 'region_to_id' => '',
        'price' => 'سعر الشحن',
        'created_at' => 'اضافة في',
        'deleted_at' => 'حذف في',
    ],
    'dialogs' => [
        'delete' => [
            'title' => 'تحذير !',
            'info' => 'هل انت متأكد انك تريد حذف تسعر المناطق',
            'confirm' => 'حذف',
            'cancel' => 'الغاء',
        ],
        'restore' => [
            'title' => 'تحذير !',
            'info' => 'هل انت متأكد انك تريد استعادة هذا تسعر المناطق',
            'confirm' => 'استعادة',
            'cancel' => 'الغاء',
        ],
        'forceDelete' => [
            'title' => 'تحذير !',
            'info' => 'هل أنت متأكد انك تريد حذف هذا تسعر المناطق نهائياً?',
            'confirm' => 'حذف نهائي',
            'cancel' => 'الغاء',
        ],
    ],
];
