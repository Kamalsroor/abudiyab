
<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']">
    {{-- cover picture starts --}}
    <div style="background-image: url({{asset('front/img/contract.jpg')}});height:340px;background-position: center;background-size: cover;background-repeat: no-repeat">
        {{-- <img class="w-100" src="{{asset('front/img/Webp.net-compress-image.jpg')}}" alt="hero image"> --}}
        <div class="d-flex justify-content-center align-items-center" style="background-color: #000000c7;width:100%;height: 100%;">
            <h1 class="main-page-title" style="font-size: 50px; padding-bottom:10px; font-weight:600;color:white;border-bottom:2px red solid;text-align: right;">البيانات الشخصية</h1>
        </div>
    </div>
    {{-- cover picture ends --}}
    <div class="container-fluid p-0 m-0 profile-bg profile-page" >
        <div class="container py-md-4">
            <div class="row align-items-end py-2" style="background-color: hsl(0deg 0% 94% / 53%);border-radius:30px;box-shadow: 1px 1px 5px black;">
                <div class="col-lg-5 col-md-12  text-center justify-content-center" style="align-self: start">
                    <div >
                        <img  src="{{asset('front/img/5.png')}}" style="width: 200px;border-radius: 50%;" alt="profile-img">
                    </div>
                    <div style="font-size: 20px;width:85%;" class="mx-auto my-3 justify-content-start align-items-start row">
                        <div class="col-2">
                            <img src="{{asset('front/img/riyal.png')}}" alt="coins">
                        </div>
                        <div class="col text-center">
                            <table class="table table-striped color-black ">
                            <tbody>
                                <tr>
                                    <td class="color-black">
                                    125
                                    </td>
                                    <th class="color-black">
                                        رصيد النقاط
                                    </th>
                                </tr>
                                <tr>
                                    <td class="color-black">
                                    100
                                    </td>
                                    <th class="color-black">
                                    ريال
                                    </th>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-end information-card">
                        <img src="{{isset(Auth()->user()->membership) ? Auth()->user()->membership->getFirstMediaUrl(): ''}}" alt="" style="width: 90%;">
                        <div class="pb-2" style="width: 70%;position:absolute;font-weight: 700;text-shadow: 1px 1px 2px black;color:white;">
                            <p class="mb-0">{{Auth::user()->name}}</p>
                            <div class="d-flex justify-content-between" >
                                <p class="mb-0" >DATE</p>
                                <p class="mb-0" >1234567890</p>
                            </div>

                            <div class="d-flex justify-content-between" >
                                <p class="mb-0" >{{Auth()->user()->membership->name}}</p>
                                <p class="mb-0" >{{Auth()->user()->membership->translate('en')->name}}   </p>
                            </div>

                        </div>



                    </div>

                    <div class="mt-4 modify-data d-flex justify-content-around">
                        <a class="primary-btn btn-hover btn-curved px-4 mb-2 mb-md-0" id="toggel-profile" style="cursor: pointer;">تعديل البيانات</a>
                        <a class="secondary-btn btn-hover btn-curved  mb-2 mb-md-0" id="toggel-password" style="cursor: pointer;">تغيير كلمة السر</a>
                        {{-- <button type="submit" class="btn btn-primary">تغيير كلمة السر</button> --}}
                    </div>
                </div>
                <div class="col-lg-7 px-0 px-md-2">
                    @if ($newRequest->is_confirmed == "rejected")
                        <p class="text-light bg-danger text-center" style="height: 40px;font-size: 20px">تم رفض طلب تسجيل البيانات بسبب : {{$newRequest->description}}</p>
                    @endif
                    @if ($newRequest->is_confirmed == "pending")
                        <p class="text-light bg-danger text-center" style="height: 40px;font-size: 20px">يرجي انتظار مراجعه البيانات الشخصيه</p>
                    @endif
                    @if (isset($user) && $newRequest->is_confirmed == "confirmed" )
                        @if (now()->gt($user->id_expiry_date))
                        <p class="text-light bg-danger text-center" style="height: 40px;font-size: 20px">يرجي تحديث صوره البطاقه</p>
                        @elseif (now()->gt($user->driver_id_expiry_date))
                        <p class="text-light bg-danger text-center" style="height: 40px;font-size: 20px">يرجي تحديث صوره رخصه القياده</p>
                        @endif
                    @endif
                    <div id="profile">
                    <table class="table table-striped color-black">
                        <tbody>
                            <tr>

                                <th class="color-black text-center" scope="row">الأسم</th>
                                <td class="color-black text-center">{{Auth::user()->name}}</td>
                            </tr>
                            <tr>
                                <th class="color-black text-center" scope="row">رقم الهوية</th>
                                <td class="color-black text-center">{{isset($user) ? $user->id_number : ""}}</td>

                            </tr>
                            <tr>
                                <th class="color-black text-center" scope="row">تاريخ انتهاء الهوية</th>
                                <td class="color-black text-center">{{isset($user) ? $user->id_expiry_date : ""}}</td>

                            </tr>
                            <tr>
                                <th class="color-black text-center" scope="row">تاريخ انتهاء رخصة القيادة</th>
                                <td class="color-black text-center">{{isset($user) ? $user->driver_id_expiry_date : ""}}</td>

                            </tr>
                            <tr>
                                <th class="color-black text-center" scope="row">تاريخ الميلاد</th>
                                <td class="color-black text-center">{{isset($user) ? $user->date_of_birth : ""}}</td>

                            </tr>
                            <tr>
                                <th class="color-black text-center" scope="row">الجنسية</th>
                                <td class="color-black text-center">{{isset($user) ? $user->nationality : ""}}</td>

                            </tr>
                            <tr>
                                <th class="color-black text-center" scope="row">رقم الجوال</th>
                                <td class="color-black text-center">{{Auth::user()->phone}}</td>

                            </tr>
                            <tr>
                                <th class="color-black text-center" scope="row">البريد الالكترونى</th>
                                <td class="color-black text-center">{{Auth::user()->email}}</td>

                            </tr>


                            <tr>
                                <th class="color-black text-center" scope="row">النوع</th>
                                <td class="color-black text-center">{{isset($user) ? $user->gender : ""}}</td>

                            </tr>

                            <tr>
                                <th class="color-black text-center" scope="row">العنوان</th>
                                <td class="color-black text-center">{{isset($user) ? $user->address : ""}}</td>

                            </tr>
                            <tr>
                                <th class="color-black text-center" scope="row">صندوق البريد</th>
                                <td class="color-black text-center">{{isset($user) ? $user->post_box : ""}} </td>
                            </tr>
                        </tbody>
                    </table>
                    </div>

                    <div id="update-profile" class="d-none">
                    @include('frontend.profile.form')
                    </div>
                    <div id="update-password" class="d-none">
                        @include('frontend.profile.change-password')
                    </div>


                </div>
            </div>


        </div>
    </div>
</x-front-layout>
