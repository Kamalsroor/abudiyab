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
    'failed-old-user-forget' => 'خطاء في أدخال البيانات , برجاء المراجعه',
    'failed-password-forget' => 'خطا في البريد الإلكترونى',
    'failed-code-forget' => 'خطا في رمز التحقق برجاء المراجعه',
    'password' => 'كلمة المرور التي ادخلتها غير صحيحة!',
    'throttle' => 'عدد كبير جدا من محاولات الدخول. يرجى المحاولة مرة أخرى بعد :seconds ثانية.',
    'attributes' => [
        'code' => 'رمز التحقق',
        'token' => 'شفرة التحقق',
        'email' => 'البريد الإلكترونى',
        'phone' => 'رقم الهاتف',
        'username' => 'البريد الإلكترونى او رقم الهاتف',
        'password' => 'كلمة المرور',
    ],
    'messages' => [
        'forget-password-code-sent' => 'لفد تم إرسال رمز إستعادة كلمة المرور على بريدك الإلكترونى',
        'forget-old-user-code-sent' => 'تم إرسال رمز التأكيد علي رقم :number',
        'sent-old-user-code' => 'كود تفعيل الحساب الشخصي هوه :code , لدي شركة أبو ذياب لتأجير السيارات',
        'reset-old-user-data' => 'تم تحديث بياناتك الشخصيه بنجاح لدي شركة أبو ذياب لتأجير السيارات',
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
