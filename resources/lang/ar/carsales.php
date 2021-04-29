<?php

return [
    'singular' => 'بيع السياره',
    'plural' => 'مبيعات السيارات',
    'empty' => 'لا يوجد مبيعات السيارات حتى الان',
    'count' => 'عدد مبيعات السيارات',
    'search' => 'بحث',
    'select' => 'اختر بيع السياره',
    'permission' => 'ادارة مبيعات السيارات',
    'trashed' => 'مبيعات السيارات المحذوفين',
    'perPage' => 'عدد النتائج بالصفحة',
    'filter' => 'ابحث عن بيع سياره',
    'actions' => [
        'list' => 'عرض الكل',
        'create' => 'اضافة بيع سياره',
        'show' => 'عرض بيع السياره',
        'edit' => 'تعديل بيع السياره',
        'delete' => 'حذف بيع السياره',
        'options' => 'خيارات',
        'save' => 'حفظ',
        'filter' => 'بحث',
    ],
    'messages' => [
        'created' => 'تم اضافة بيع السياره بنجاح.',
        'updated' => 'تم تعديل بيع السياره بنجاح.',
        'deleted' => 'تم حذف بيع السياره بنجاح.',
        'restored' => 'تم استعادة بيع السياره بنجاح.',
    ],
    'attributes' => [
        'name' => 'اسم  السياره',
        'model' => 'الموديل',
        'brand' => 'الماركه',
        'couter' => 'العداد',
        'color_interior' => 'اللون الداخلي ',
        'color_exterior' => 'اللون الخارجي',
        'quantity' => 'عدد السيارات',
        'for_sale' => 'للبيع',

        'created_at' => 'اضافة في',
        'deleted_at' => 'حذف في',
    ],
    'dialogs' => [
        'delete' => [
            'title' => 'تحذير !',
            'info' => 'هل انت متأكد انك تريد حذف بيع السياره',
            'confirm' => 'حذف',
            'cancel' => 'الغاء',
        ],
        'restore' => [
            'title' => 'تحذير !',
            'info' => 'هل انت متأكد انك تريد استعادة هذا بيع السياره',
            'confirm' => 'استعادة',
            'cancel' => 'الغاء',
        ],
        'forceDelete' => [
            'title' => 'تحذير !',
            'info' => 'هل أنت متأكد انك تريد حذف هذا بيع السياره نهائياً?',
            'confirm' => 'حذف نهائي',
            'cancel' => 'الغاء',
        ],
    ],
];
