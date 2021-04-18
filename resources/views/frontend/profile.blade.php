
<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']">
<div class="container-fluid p-0 m-0 profile-bg" >
<div class="container py-4 ">
        <div class="row align-items-start py-2" style="background-color: #cccccce6;">
            <div class="col-lg-5 col-md-12  text-center justify-content-center" >
                <div >
                    <img  src="{{asset('front/img/5.png')}}" style="width: 200px;border-radius: 50%;" alt="profile-img">
                </div>
                <div style="font-size: 20px;width:85%;" class="mx-auto my-3 justify-content-start align-items-start row">
                    <div class="col-2">
                        <img src="{{asset('front/img/riyal.png')}}" alt="coins">
                    </div>
                    <div class="col">
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
                    <img src="{{asset('front/img/smallgoldencard.png')}}" alt="client-type" style="width: 90%;">
                    <div class="pb-2" style="width: 70%;position:absolute;font-weight: 700;text-shadow: 1px 1px black;">
                        <p class="mb-0">client Name</p>
                        <div class="d-flex justify-content-between" >
                            <p class="mb-0" >DATE</p>
                            <p class="mb-0" >1234567890</p>
                        </div>
                     
                        <div class="d-flex justify-content-between" >
                            <p class="mb-0" >ذهبى</p>
                            <p class="mb-0" >gold</p>
                        </div>

                    </div>
                    
                        
                    
                </div>

                <div class="mt-4 modify-data">
                    <a class="primary-btn btn-hover btn-curved p-3" id="toggel-profile" style="cursor: pointer;">تعديل البيانات</a>
                </div>
            </div>
            <div class="col-lg-7">
                <h4 class="text-right color-black" style="font-weight: 600;">البيانات الشخصية</h4>

                <div id="profile">
                <table class="table table-striped color-black">
                    <tbody>
                        <tr>
                            <th class="color-black text-center" scope="row">الأسم</th>
                            <td class="color-black text-center">احمد خالد السيد</td>

                        </tr>
                        <tr>
                            <th class="color-black text-center" scope="row">رقم الهوية</th>
                            <td class="color-black text-center">12555847</td>

                        </tr>
                        <tr>
                            <th class="color-black text-center" scope="row">تاريخ انتهاء الهوية</th>
                            <td class="color-black text-center">12555847</td>

                        </tr>
                        <tr>
                            <th class="color-black text-center" scope="row">تاريخ انتهاء رخصة القيادة</th>
                            <td class="color-black text-center">01/06/2023</td>

                        </tr>
                        <tr>
                            <th class="color-black text-center" scope="row">تاريخ الميلاد</th>
                            <td class="color-black text-center">01/04/1992</td>

                        </tr>
                        <tr>
                            <th class="color-black text-center" scope="row">الجنسية</th>
                            <td class="color-black text-center">مصرى</td>

                        </tr>
                        <tr>
                            <th class="color-black text-center" scope="row">رقم الجوال</th>
                            <td class="color-black text-center">05015477730</td>

                        </tr>
                        <tr>
                            <th class="color-black text-center" scope="row">البريد الالكترونى</th>
                            <td class="color-black text-center">ahmedkhaled@gmail.com</td>

                        </tr>
                        
                        
                    
                        <tr>
                            <th class="color-black text-center" scope="row">النوع</th>
                            <td class="color-black text-center">ذكر</td>

                        </tr>

                        <tr>
                            <th class="color-black text-center" scope="row">العنوان</th>
                            <td class="color-black text-center">25 street 485 gamal abd el naser</td>

                        </tr>
                        <tr>
                            <th class="color-black text-center" scope="row">صندوق البريد</th>
                            <td class="color-black text-center">24 street 502 shatby </td>

                        </tr>

                       
                        
                       
                    </tbody>
                </table>
                </div>

                <div id="update-profile" class="d-none">
                @include('frontend.profile.form')
                </div>


            </div>
        </div>


    </div>
    </div>
</x-front-layout>
