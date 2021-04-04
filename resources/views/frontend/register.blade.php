<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']" >
    <div class="container-fluid px-0 mx-0 register-background">


   <div class="d-flex align-items-center justify-content-center py-5" style="background-color: #002f61b5;">
    <h1 class=" mb-0" >إنشاء حساب جديد</h1>

    </div>
    <form action="{{ route('register') }}" class="color-black" method="post" style="background-color: #ffffffb5;">
    @csrf

    <div class="row py-3 pt-5 px-4 mx-0">
        <div class="col-2">
        <p class="color-black text-center" >الاسم</p>
        </div>
        <div class="col px-0">
        <input type="text" class="form-control" name="name"
        value="{{ old('name') }}"
        autofocus>
        </div>
    </div>
    <div class="row py-3 px-4 mx-0">
        <div class="col-2">
        <p class="color-black text-center">رقم الهوية</p>
        </div>
        <div class="col px-0">

        <input type="text" class="form-control"   value="{{ old('id_number') }}"  name="id_number">


        </div>
        <div class="col-2">
        <p class="color-black text-center">رقم الجوال</p>
        </div>
        <div class="col px-0">
        <input type="text" class="form-control"  name="phone" value="{{ old('phone') }}">

        </div>
    </div>

    <div class="row py-3 px-4 mx-0">
        <div class="col-2">
        <p class="color-black text-center">البريد الالكترونى</p>
        </div>
        <div class="col px-0">
        <input type="email" class="form-control"  name="email">
        </div>
    </div>
    <div class="row py-3 px-4 mx-0">
        <div class="col-2">
        <p class="color-black text-center">كلمة السر</p>
        </div>
        <div class="col px-0">

            <input type="password" class="form-control"  name="password">
        </div>
    </div>

    <div class="row py-3 px-4 mx-0">

        <div class="col-2">
        <p class="color-black text-center">تأكيد كلمة السر</p>
        </div>
        <div class="col px-0">
            <input type="password" class="form-control" required
            name="password_confirmation"
            autocomplete="new-password">

        </div>
    </div>



    <div class="row mx-0 px-0 py-3">
        <div class="col-5 text-center m-auto">
    <button type="submit" class="btn btn-success ">حفظ البيانات</button>
        </div>
    </div>
    </form>

    </div>
</x-front-layout>

