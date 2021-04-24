<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']">
    <section class="register">
        <div class="container-fluid px-0 mx-0 register-background">
            <div class="d-flex align-items-center justify-content-center py-5 heading" >
                <h1 class=" mb-0" >إنشاء حساب جديد</h1>
            </div>
            <div class="content">
                <form action="{{ route('register') }}"  method="post" enctype="multipart/form-data">
                @csrf
                <div class="row py-3 pt-5 px-4 mx-0">
                    <div class="col-md-2 col-12">
                    <p class="color-black text-right text-md-center" >الاسم</p>
                    </div>
                    <div class="col px-0">
                    <input type="text" class="form-control" name="name"
                    value="{{ old('name') }}"
                    autofocus>
                    @if($errors->has('name'))
                        <div class="valiadtion-error">{{ $errors->first('name') }}</div>
                    @endif
                    </div>
                </div>
                <div class="row py-3 px-4 mx-0">
                    <div class="col-md-2 col-12">
                    <p class="color-black text-right text-md-center">كلمة السر</p>
                    </div>
                    <div class="col px-0">
                    <input type="password" class="form-control" required
                    name="password"
                    autocomplete="new-password">
                    @if($errors->has('password'))
                        <div class="valiadtion-error">{{ $errors->first('password') }}</div>
                    @endif
                    </div>
                    <div class="col-md-2 col-12">
                    <p class="color-black text-right text-md-center mt-4 mt-md-0">تأكيد كلمة السر</p>
                    </div>
                    <div class="col px-0">
                    <input type="password" class="form-control" required
                    name="password_confirmation"
                    autocomplete="new-password">
                    </div>
                </div>
                <div class="row py-3 px-4 mx-0">
                    <div class="col-md-2 col-12">
                    <p class="color-black text-right text-md-center">رقم الهوية</p>
                    </div>
                    <div class="col px-0">
                    <input type="text" class="form-control" value="{{old('id_number')}}"  name="id_number">
                    @if($errors->has('id_number'))
                        <div class="valiadtion-error">{{ $errors->first('id_number') }}</div>
                    @endif
                    </div>
                </div>
                <div class="row py-3 px-4 mx-0">
                    <div class="col-md-2 col-12">
                    <p class="color-black text-right text-md-center">البريد الالكترونى</p>
                    </div>
                    <div class="col px-0">
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                    @if($errors->has('email'))
                        <div class="valiadtion-error">{{ $errors->first('email') }}</div>
                    @endif
                    </div>
                </div>

                <div class="row py-3 px-4 mx-0">
                    <div class="col-md-2 col-12">
                    <p class="color-black text-right text-md-center">رقم الجوال</p>
                    </div>
                    <div class="col px-0">
                    <input type="text" class="form-control"  name="phone" value="{{ old('phone') }}">
                    @if($errors->has('phone'))
                        <div class="valiadtion-error">{{ $errors->first('phone') }}</div>
                    @endif
                    </div>
                </div>
                <div class="row py-3 px-4 mx-0">
                    <div class="col-md-2 col-12">
                    <p class="color-black text-right text-md-center">البطاقه الشخصيه</p>
                    </div>
                    <div class="col px-0">
                    <input  type="file" class="form-control" id="" name='identity' placeholder="البطاقه الشخصيه">
                    @if($errors->has('identity'))
                        <div class="valiadtion-error">{{ $errors->first('identity') }}</div>
                    @endif
                    </div>
                    <div class="col-md-2 col-12">
                    <p class="color-black text-right text-md-center">الرخصه</p>
                    </div>
                    <div class="col px-0">
                    <input  type="file" class="form-control" id="" name='licence' placeholder="البطاقه الشخصيه">
                    @if($errors->has('licence'))
                        <div class="valiadtion-error">{{ $errors->first('licence') }}</div>
                    @endif
                    </div>
                </div>


                <div class="row mx-0 px-0 py-3">
                    <div class="col-5 text-center m-auto">
                <button type="submit" class="btn btn-success ">تأكيد البيانات</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>

 </x-front-layout>
