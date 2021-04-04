<?php

return [
    'singular' => 'السيارة',
    'plural' => 'السيارت',
    'empty' => 'لا يوجد سيارت حتى الان',
    'count' => 'عدد السيارت',
    'search' => 'بحث',
    'select' => 'اختر السيارة',
    'permission' => 'ادارة السيارت',
    'trashed' => 'السيارت المحذوفين',
    'perPage' => 'عدد النتائج بالصفحة',
    'filter' => 'ابحث عن سيارة',
    'actions' => [
        'list' => 'عرض الكل',
        'create' => 'اضافة سيارة',
        'show' => 'عرض السيارة',
        'edit' => 'تعديل السيارة',
        'delete' => 'حذف السيارة',
        'options' => 'خيارات',
        'save' => 'حفظ',
        'filter' => 'بحث',
    ],
    'messages' => [
        'created' => 'تم اضافة السيارة بنجاح.',
        'updated' => 'تم تعديل السيارة بنجاح.',
        'deleted' => 'تم حذف السيارة بنجاح.',
        'restored' => 'تم استعادة السيارة بنجاح.',
    ],


    'features' => [
        'automatic_transmission' => 'ناقل حركة أوتوماتيكي',
        'manual_transmission' => 'ناقل حركة يدوي',
    ],

    'features_enable' => [
        0 => 'ليس لديه',
        1 => 'لديه',
        "false" => 'ليس لديه',
        "true" => 'لديه',
    ],

    'attributes' => [
        'name' => 'اسم السيارة',
        '%name%' => 'اسم السيارة',
        'image' => 'صورة السيارة',

        'category_id' => 'category_id',
        'branch_id' => 'branch_id',
        'manufactory_id' => 'manufactory_id',
        'code' => 'الكود',
        'desc' => 'خصم 1',
        'discount_2' => 'خصم 2',
        'discount_3' => 'خصم 3',
        'price2' => 'السعر الاساسي',
        'price1' => 'السعر بعد الخصم',
        'price_from_2month_to_6month' => 'السعر قبل الخصم من شهرين الي 6 اشهر',
        'price_from_6month_to_12month' => 'السعر قبل الخصم من 6 اشهر الي 12 شهر',
        'price_from_1year_to_2years' => 'السعر قبل الخصم من سنه الي سنتين',
        'price_from_2year_to_3years' => 'السعر قبل الخصم من سنتين الي 3 سنوات',
        'price_after_from_2month_to_6month' => 'السعر بعد الخصم من شهرين الي 6 اشهر',
        'price_after_from_6month_to_12month' => 'السعر بعد الخصم من 6 اشهر الي 12 شهر',
        'price_after_from_1year_to_2years' => 'السعر بعد الخصم من سنه الي سنتين',
        'price_after_from_2year_to_3years' => 'السعر بعد الخصم من سنتين الي 3 سنوات',

        'model' => 'الموديل',
        'door' => 'عدد الابواب',
        'luggage' => 'الحقائب',
        'features' => 'ناقل الحركه',
        'baby_seat_price' => 'سعر كرسي الاطفال',
        'shield_price' => 'سعر درع ابو دياب',
        'insurance_price' => 'سعر التامين',
        'open_kilometers_price' => 'سعر الكيلومتر المفتوح',
        'navigation_price' => 'سعر جهاز الملاحه',
        'home_delivery_price' => 'سعر التوصيل للمنزل',
        'intercity_price' => ' تكلفه الشحن بين المدن',

        'is_baby_seat' => 'لدية كرسي اطفال',
        'is_shield' => 'لدية درع ابو دياب',
        'is_insurance' => 'لدية سعر تأمين',
        'is_open_kilometers' => 'لدية الكيلومتر المفتوح',
        'is_navigation' => 'لدية جهاز ملاحة',
        'is_home_delivery' => 'لدية توصيل للمنزل',
        'is_intercity' => 'لدية شحن بين المدن',


        'created_at' => 'اضافة في',
        'deleted_at' => 'حذف في',
    ],
    'dialogs' => [
        'delete' => [
            'title' => 'تحذير !',
            'info' => 'هل انت متأكد انك تريد حذف السيارة',
            'confirm' => 'حذف',
            'cancel' => 'الغاء',
        ],
        'restore' => [
            'title' => 'تحذير !',
            'info' => 'هل انت متأكد انك تريد استعادة هذا السيارة',
            'confirm' => 'استعادة',
            'cancel' => 'الغاء',
        ],
        'forceDelete' => [
            'title' => 'تحذير !',
            'info' => 'هل أنت متأكد انك تريد حذف هذا السيارة نهائياً?',
            'confirm' => 'حذف نهائي',
            'cancel' => 'الغاء',
        ],
    ],
];
