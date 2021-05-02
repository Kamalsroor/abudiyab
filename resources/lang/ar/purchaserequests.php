<?php

return [
    'singular' => 'طلب الشراء',
    'plural' => 'طلبات الشراء',
    'empty' => 'لا يوجد طلب الشراء حتى الان',
    'count' => 'عدد طلبات الشراء',
    'search' => 'بحث',
    'select' => 'اختر طلب الشراء',
    'permission' => 'ادارة طلبات الشراء',
    'trashed' => 'طلبات الشراء المحذوفين',
    'perPage' => 'عدد النتائج بالصفحة',
    'filter' => 'ابحث عن طلب شراء',
    'actions' => [
        'list' => 'عرض الكل',
        'create' => 'اضافة طلب شراء',
        'show' => 'عرض طلب الشراء',
        'edit' => 'تعديل طلب الشراء',
        'delete' => 'حذف طلب الشراء',
        'options' => 'خيارات',
        'save' => 'حفظ',
        'filter' => 'بحث',
    ],
    'messages' => [
        'created' => 'تم اضافة طلب الشراء بنجاح.',
        'updated' => 'تم تعديل طلب الشراء بنجاح.',
        'deleted' => 'تم حذف طلب الشراء بنجاح.',
        'restored' => 'تم استعادة طلب الشراء بنجاح.',
    ],
    'attributes' => [
        'username' => 'اسم العميل',
        'carname' => 'اسم السياره',
        'carmodel' => 'موديل السياره',
        'carbrand' => 'ماركه السياره',
        'price' => 'السعر المقترح',
        'created_at' => 'اضافة في',
        'deleted_at' => 'حذف في',
    ],
    'dialogs' => [
        'delete' => [
            'title' => 'تحذير !',
            'info' => 'هل انت متأكد انك تريد حذف طلب الشراء',
            'confirm' => 'حذف',
            'cancel' => 'الغاء',
        ],
        'restore' => [
            'title' => 'تحذير !',
            'info' => 'هل انت متأكد انك تريد استعادة هذا طلب الشراء',
            'confirm' => 'استعادة',
            'cancel' => 'الغاء',
        ],
        'forceDelete' => [
            'title' => 'تحذير !',
            'info' => 'هل أنت متأكد انك تريد حذف هذا طلب الشراء نهائياً?',
            'confirm' => 'حذف نهائي',
            'cancel' => 'الغاء',
        ],
    ],
];