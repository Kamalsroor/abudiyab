<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed' => 'خطا في الايميل او كلمه السر',
    'failed-old-user-forget' => 'خطاء ف ادخال البيانات , برجاء المراجعه',
    'failed-password-forget' => 'خطا في البريد الالكتروني',
    'failed-code-forget' => 'خطا في رمز التحقق برجاء المراجعه',
    'password' => 'كلمة المرور التي ادخلتها غير صحيحة!',
    'throttle' => 'عدد كبير جدا من محاولات الدخول. يرجى المحاولة مرة أخرى بعد :seconds ثانية.',
    'attributes' => [
        'code' => 'رمز التحقق',
        'token' => 'شفرة التحقق',
        'email' => 'البريد الالكتروني',
        'phone' => 'رقم الهاتف',
        'username' => 'البريد الالكترونى او رقم الهاتف',
        'password' => 'كلمة المرور',
    ],
    'messages' => [
        'forget-password-code-sent' => 'لفد تم ارسال رمز استعادة كلمة المرور على بريدك الالكتروني',
        'forget-old-user-code-sent' => 'تم ارسال رمز التأكيد علي رقم :number',
        'sent-old-user-code' => 'كود تفعيل الاكونت الشخصي هوه :code , ابو ذياب لتأجير السيارات',
        'reset-old-user-data' => 'تم تحديث بياناتك الشخصيه بنجاح في موقع ابو ذياب لتأجير السيارات',
    ],
    'emails' => [
        'forget-password' => [
            'subject' => 'استعادة كلمة المرور',
            'greeting' => 'عزيزي :user',
            'line' => "رمز استعادة كلمة المرور الخاص بك هو :code صالح لمدة :minutes دقائق",
            'footer' => 'شكراً لاستخدامك لتطبيقنا',
            'salutation' => 'مع تحيات فريق عمل :app',
        ],
        'reset-password' => [
            'subject' => 'استعادة كلمة المرور',
            'greeting' => 'عزيزي :user',
            'line' => 'تم تغيير كلمة المرور الخاصة بك',
            'footer' => 'شكراً لاستخدامك لتطبيقنا',
            'salutation' => 'مع تحيات فريق عمل :app',
        ],
    ],

];
