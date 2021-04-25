

<div class="main-navbar container-fluid d-md-block d-lg-block">
    <div class="container-fluid mx-0">
        <div class="row ">
            <div class="col-1 d-flex justify-content-center align-items-center">
                <a class="btn " data-toggle="tooltip" data-placement="bottom" title="القائمة الرئيسية" id="hamburger-bars">
                    <i class="fas fa-bars"  ></i>
                </a>

            </div>

            <div class="text-right col-md-6 col-sm-12 d-flex align-items-center justify-content-start py-2">
                <a class="mx-3" href="{{route('front.main')}}">الرئيسية</a>
                @guest
                <!--  ---------------------------------------->
                <!-- pop over------------------------------ -->
                <!--  ---------------------------------------->
                <a  class="mx-3 open-button" id="myFormtoggeler" >تسجيل الدخول</a>
                <div  class="form-popup d-none" id="myForm">


                    <form action="{{ route('login') }}"  method="post" class="form-container">
                        @csrf
                        <h1 style="color: black;font-size: 20px;">تسجيل الدخول</h1>


                        <label class="color-black" for="email"><b class="color-black">البريد الالكترونى</b></label>
                        <input type="text" class="color-black" placeholder="Enter Email"  name="email" value="{{ old('email') }}" required>



                        <label class="color-black" for="psw"><b class="color-black">كلمة السر</b></label>
                        <input type="password" class="color-black" placeholder="Enter Password"  name="password" required>

                        <button type="submit" class="btn">تسجيل الدخول</button>
                        <a href="/register"  class="btn btn-warning  mt-2 mx-auto" >انشاء حساب جديد</a>
                        <a  class="btn btn-danger cancel mt-2 mx-auto" onclick="closeForm()">خروج</a>
                        <p class="mt-2" style="font-size: 12px;color:gray;">بالضغط على مواصلة او تسجيل الاشتراك أوافق على بنود و شروط و سياسة الخصوصية</p>

                    </form>
                </div>
                <!--  --------------------------------------------->
                <!-- pop over ends------------------------------ -->
                <!--  --------------------------------------------->
                @endguest
                @auth
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                اهلا بك {{ Auth()->user()->name}}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item mx-0 text-right" style="color: black;padding:6px 12px;" href="/profile">الحساب الشخصى</a>
                    <a class="dropdown-item mx-0 text-right" style="color: black;padding:6px 12px;" href="/contracts">العقود</a>
                    <a href="#"onclick="event.preventDefault();document.getElementById('logoutForm').submit()"
                           class="btn btn-default btn-flat float-right color-black" style="color: black;">@lang('dashboard.auth.logout')</a>
                        <form class="d-none" action="{{ route('logout') }}" method="post" id="logoutForm">
                            @csrf
                        </form>
                </div>
                @endauth

                <!-- ---------------------------------- -->
                <!-- Modal ------------------------------->
                <!-- ---------------------------------- -->

                    <div class="modal fade"  id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
                    <div class="modal-dialog" style="z-index: 1;">
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h5 class="modal-title color-black" id="loginModalLabel">تسجيل الدخول</h5>
                                <a style="width: fit-content;" class="close mx-0" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" style="color: red;cursor: pointer;">&times;</span>
                                </a>
                            </div>
                            <form action="{{ route('login') }}"  method="post" class="form-container " style="width: 100%">
                                @csrf
                                <div class="modal-body" style="margin: auto">
                                    <div class="form-group">
                                        <label for="user" class="col-form-label color-black">البريد الالكترونى</label>
                                        <input type="text" class="form-control" id="user" placeholder="Enter Email"  name="email" value="{{ old('email') }}">
                                        <input type="hidden" name='redirect' value='url'>
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label color-black">كلمة السر</label>
                                        <input type="password" class="form-control" id="user" placeholder="Enter Password"  name="password">
                                    </div>
                                    {{-- <button class="btn btn-primary" type="submit">تسجيل</button> --}}
                                </div>
                                <button class="btn btn-primary" type="submit">تسجيل</button>
                                <a href="{{ route('register') }}" class="btn btn-warning" type="submit">إنشاء حساب جديد</a>
                            </form>
                        </div>
                    </div>
                    </div>

              <!--  ------------------------------------>
              <!-- Modal ends here------------------- -->
              <!--  ------------------------------------>

              <!--  ------------------------------------>
              <!-- Modal2 starts here------------------- -->
              <!--  ------------------------------------>
              <!-- Button trigger modal -->
                <a  style="cursor: pointer;"  data-toggle="modal" data-target="#staticBackdrop">
                    الأستعلام عن الحجز
                </a>
                
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" class="d-flex justify-content-between">
                            <h5 class="modal-title" id="staticBackdropLabel">أدخل الكود و رقم الهوية للأستعلام</h5>
                            <button type="button" class="close p-0 m-0" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input class="form-control my-2" type="text" placeholder="أدخل رقم الهوية">
                            <input class="form-control my-2" type="text" placeholder="أدخل الكود هنا">
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                        <button type="button" class="btn btn-primary">الاستعلام</button>
                        </div>
                    </div>
                    </div>
                </div>
              <!--  ------------------------------------>
              <!-- Modal2 ends here------------------- -->
              <!--  ------------------------------------>
                <div class="dropdown mx-3">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-globe-americas" style="font-size: 25px;"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                        @foreach(Locales::get() as $locale)
                        {{-- <li>
                            <a href="{{ route('locale', $locale->code) }}"><img src="{{ $locale->flag }}" alt="{{ $locale->name }}" class="mr-2">{{trans('frontend.navbar.'.$locale->code)}}</a>
                        </li> --}}
                            <a class="dropdown-item mx-0"  href="{{ route('locale', $locale->code) }}">{{ $locale->name }}</a>
                        @endforeach
                        {{-- <a class="dropdown-item mx-0"  href="#">Arabic</a> --}}
                    </div>
                </div>




            </div>
            <div class="col-md-5 col-sm-12 py-2 d-flex justify-content-end">

                    <a  href="{{route('front.main')}}"><img class="ml-4" src="{{ asset('front/img/logo-edited-.png') }}"  ></a>

            </div>

        </div>
    </div>
</div>
<div id="menu" class="d-none">
        <div class="container-fluid mx-0 px-0">
            <div class="row mx-0 px-0">
                <div class="mx-0 px-0 col-6 col-md-3 col-lg-3 d-flex justify-content-center align-items-center"><a href="{{route('front.fleet')}}"  ><i class="fas fa-car"></i> الأسطول</a></div>
                <div class="col-6 col-md-3 col-lg-3 mx-0 px-0 d-flex justify-content-center align-items-center"><a href="{{route('front.membership_cards')}}"  ><i class="fas fa-id-card"></i>بطاقات العضوية</a></div>
                <div class="col-6 col-md-3 col-lg-3 mx-0 px-0  d-flex justify-content-center align-items-center"><a href="{{route('front.points')}}"  ><i class="fas fa-gift"></i>برنـامج نقـاطى</a></div>
                <div class="col-6 col-md-3 col-lg-3 mx-0 px-0  d-flex justify-content-center align-items-center"><a href="{{route('front.services')}}"  ><i class="fas fa-cogs"></i>الخدمات و الصيانة</a></div>
                <div class="mx-0 px-0 col-6 col-md-3 col-lg-3 d-flex justify-content-center align-items-center"><a href="{{route('front.branches')}}"  ><i class="fas fa-map-marker-alt"></i>فروعنـا بالمملكة</a></div>
                <div class="mx-0 px-0 col-6 col-md-3 col-lg-3 d-flex justify-content-center align-items-center"><a href="{{route('front.recruitment')}}"  ><i class="fas fa-users"></i>قســم التوظيف</a></div>
                <div class="mx-0 px-0 col-6 col-md-3 col-lg-3 d-flex justify-content-center align-items-center"><a href="{{route('front.car_sales')}}"  ><i class="fas fa-car-side"></i>مبيعات السيارات</a></div>
                <div class="mx-0 px-0 col-6 col-md-3 col-lg-3 d-flex justify-content-center align-items-center"><a href="{{route('front.media_center')}}"  ><i class="far fa-newspaper"></i>المركز الأعلامى</a></div>
            </div>
        </div>
</div>

<div class="small-screen-navbar container-fluid mx-0 px-0 d-block d-md-none d-lg-none">
    <div class="row">
        <div class="col-3 py-3 text-center"></div>
        <div class="col-3 py-3 text-center"><a class="mx-3" href="{{route('front.main')}}">الرئيسية</a></div>
        <div class="col-3 py-3 text-center"><i class="fas fa-bars" id="hamburger-bars2" ></i></div>
        <div class="col-3 py-3 text-center"><i class="fas fa-sign-in-alt"></i></div>
    </div>


</div>
