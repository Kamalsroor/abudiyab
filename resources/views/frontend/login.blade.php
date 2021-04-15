<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']">

<section class="login d-flex justify-content-center align-items-center">
    <div class="container-50">
        <form action="#">
            <div class="row py-3 pt-5 px-4 mx-0">
                <div class="col-md-2 col-12">
                <p class="color-black text-right text-md-center" >الاسم</p>
                </div>
                <div class="col px-0">
                <input type="text" class="form-control" name="name"
                placeholder='أدخل الاسم هنا'>
                </div>
            </div>
            <div class="row py-3 pt-5 px-4 mx-0">
                <div class="col-md-2 col-12">
                <p class="color-black text-right text-md-center" >كلمة السر</p>
                </div>
                <div class="col px-0">
                <input type="password" class="form-control" name="password"
                placeholder="أدخل كلمة السر">
                </div>
            </div>
            <div class="row mx-0 px-0 py-3">
                <div class="col-5 text-center m-auto">
                    <button type="submit" class="btn btn-success ">تسجيل</button>
                </div>
            </div>
        </form>
    </div>
</section>

</x-front-layout>
