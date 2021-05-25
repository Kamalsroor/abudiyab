<?php

return [
    'singular' => 'العضويه',
    'default' => 'عضويه التسجيل',
    'plural' => 'العضويات',
    'empty' => 'لا يوجد عضويات حتى الان',
    'count' => 'عدد العضويات',
    'search' => 'بحث',
    'select' => 'اختر العضويه',
    'permission' => 'ادارة العضويات',
    'trashed' => 'العضويات المحذوفين',
    'perPage' => 'عدد النتائج بالصفحة',
    'filter' => 'ابحث عن عضويه',
    'actions' => [
        'list' => 'عرض الكل',
        'create' => 'اضافة عضويه',
        'show' => 'عرض العضويه',
        'edit' => 'تعديل العضويه',
        'delete' => 'حذف العضويه',
        'options' => 'خيارات',
        'save' => 'حفظ',
        'filter' => 'بحث',
    ],
    'messages' => [
        'created' => 'تم اضافة العضويه بنجاح.',
        'updated' => 'تم تعديل العضويه بنجاح.',
        'deleted' => 'تم حذف العضويه بنجاح.',
        'restored' => 'تم استعادة العضويه بنجاح.',
    ],
    'attributes' => [
        'name' => 'اسم العضويه',
        '%name%' => 'اسم العضويه',
        'rental_discount' => 'خصم التأجير',
        'ratio_points' => 'النقاط المكتسبة لكل 100 ريال',
        'extra_hours' => 'الساعات الزائدة',
        'allowed_Kilos' => 'الكيلو المسموح',
        'delivery_discount_regions' => 'خصم التسليم بين المناطق',
        'description' => 'تفاصيل العضويه',
        'image' => 'صورة العضويه',
        'created_at' => 'اضافة في',
        'deleted_at' => 'حذف في',
    ],
    'dialogs' => [
        'delete' => [
            'title' => 'تحذير !',
            'info' => 'هل انت متأكد انك تريد حذف العضويه',
            'confirm' => 'حذف',
            'cancel' => 'الغاء',
        ],
        'restore' => [
            'title' => 'تحذير !',
            'info' => 'هل انت متأكد انك تريد استعادة هذا العضويه',
            'confirm' => 'استعادة',
            'cancel' => 'الغاء',
        ],
        'forceDelete' => [
            'title' => 'تحذير !',
            'info' => 'هل أنت متأكد انك تريد حذف هذا العضويه نهائياً?',
            'confirm' => 'حذف نهائي',
            'cancel' => 'الغاء',
        ],
    ],
];
