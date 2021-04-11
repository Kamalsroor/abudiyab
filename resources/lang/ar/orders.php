<?php

return [
    'singular' => 'الطلب',
    'plural' => 'الطلبات',
    'empty' => 'لا يوجد طلبات حتى الان',
    'count' => 'عدد الطلبات',
    'search' => 'بحث',
    'select' => 'اختر الطلب',
    'permission' => 'ادارة الطلبات',
    'trashed' => 'الطلبات المحذوفين',
    'perPage' => 'عدد النتائج بالصفحة',
    'filter' => 'ابحث عن طلب',

    'actions' => [
        'list' => 'عرض الكل',
        'create' => 'اضافة طلب',
        'show' => 'عرض الطلب',
        'edit' => 'تعديل الطلب',
        'delete' => 'حذف الطلب',
        'options' => 'خيارات',
        'save' => 'حفظ',
        'filter' => 'بحث',
    ],
    'messages' => [
        'created' => 'تم اضافة الطلب بنجاح.',
        'updated' => 'تم تعديل الطلب بنجاح.',
        'deleted' => 'تم حذف الطلب بنجاح.',
        'restored' => 'تم استعادة الطلب بنجاح.',
    ],
    'attributes' => [
        'name' => 'اسم السياره',
        'created_at' => 'اضافة في',
        'deleted_at' => 'حذف في',
        'recieving_branch' => 'فرع الاستلام',
        'booking_days' => 'عدد ايام الحجز',
        'recieving_date' => 'وقت الاستلام',
        'delivery_branch' => 'فرع التسليم',
        'payment_type' => 'طريقه الدفع',
        'features_added' => 'الاضافات',
    ],
    'dialogs' => [
        'delete' => [
            'title' => 'تحذير !',
            'info' => 'هل انت متأكد انك تريد حذف الطلب',
            'confirm' => 'حذف',
            'cancel' => 'الغاء',
        ],
        'restore' => [
            'title' => 'تحذير !',
            'info' => 'هل انت متأكد انك تريد استعادة هذا الطلب',
            'confirm' => 'استعادة',
            'cancel' => 'الغاء',
        ],
        'forceDelete' => [
            'title' => 'تحذير !',
            'info' => 'هل أنت متأكد انك تريد حذف هذا الطلب نهائياً?',
            'confirm' => 'حذف نهائي',
            'cancel' => 'الغاء',
        ],
    ],
];
