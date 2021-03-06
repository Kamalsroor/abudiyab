<?php

return [
    'singular' => 'طلب التحديث',
    'plural' => 'طلبات التحديث',
    'empty' => 'لا يوجد طلبات تحديث حتى الان',
    'count' => 'عدد طلبات التحديث',
    'search' => 'بحث',
    'select' => 'اختر طلب التحديث',
    'permission' => 'ادارة طلبات التحديث',
    'trashed' => 'طلبات التحديث المحذوفين',
    'perPage' => 'عدد النتائج بالصفحة',
    'filter' => 'ابحث عن طلب تحديث',
    'actions' => [
        'list' => 'عرض الكل',
        'create' => 'اضافة طلب تحديث',
        'show' => 'عرض طلب التحديث',
        'edit' => 'تعديل طلب التحديث',
        'delete' => 'حذف طلب التحديث',

        'options' => 'خيارات',
        'save' => 'حفظ',
        'filter' => 'بحث',
    ],
    'messages' => [
        'created' => 'تم اضافة طلب التحديث بنجاح.',
        'updated' => 'تم تعديل طلب التحديث بنجاح.',
        'deleted' => 'تم حذف طلب التحديث بنجاح.',
        'restored' => 'تم استعادة طلب التحديث بنجاح.',
    ],
    'attributes' => [
        'name' => 'اسم طلب التحديث',
        'image' => 'صورة طلب التحديث',

        "identityfront" => "صوره البطاقه الاماميه",
        "identityback" => "صوره البطاقه الخلفيه",
        "licencefront" => "صوره الرخصه الاماميه",
        "licenceback" => "صوره الرخصه الخلفيه",

        "email"=> "الايميل",

        'id_number' => 'رقم البطاقه الشخصيه',
        'id_expiry_date' => 'تاريخ انتهاء البطاقه الشخصيه',
        'driver_id_expiry_date' => 'تاريخ انتهاء رخصه القياده',
        'date_of_birth' => 'تاريخ الميلاد',
        'nationality' => 'الجنسيه',
        'gender' => 'النوع',
        'address' => 'العنوان',
        'driver_number' => 'رقم رخصه القياده',
        'user_data_confirmed' => 'تاكيد بيانات العميل',
        'phone' => 'رقم العميل',

        'created_at' => 'اضافة في',
        'deleted_at' => 'حذف في',
    ],
    'dialogs' => [
        'delete' => [
            'title' => 'تحذير !',
            'info' => 'هل انت متأكد انك تريد حذف طلب التحديث',
            'confirm' => 'حذف',
            'cancel' => 'الغاء',
            'reseon' => 'اكتب سبب الرفض',
        ],
        'approved' => [
            'title' => 'تحذير !',
            'info' => 'هل انت متأكد انك تريد الموافقه علي طلب التحديث',
            'confirm' => 'موافق',
            'cancel' => 'الغاء',
        ],
        'restore' => [
            'title' => 'تحذير !',
            'info' => 'هل انت متأكد انك تريد استعادة هذا طلب التحديث',
            'confirm' => 'استعادة',
            'cancel' => 'الغاء',
        ],
        'forceDelete' => [
            'title' => 'تحذير !',
            'info' => 'هل أنت متأكد انك تريد حذف هذا طلب التحديث نهائياً?',
            'confirm' => 'حذف نهائي',
            'cancel' => 'الغاء',
        ],
    ],
];
