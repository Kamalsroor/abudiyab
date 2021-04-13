

<div class="main-navbar container-fluid d-md-block d-lg-block">
    <div class="container-fluid mx-0">
        <div class="row ">
            <div class="col-2 d-flex justify-content-center align-items-center">
                <a class="btn " data-toggle="tooltip" data-placement="bottom" title="القائمة الرئيسية">
            <i class="fas fa-bars" id="hamburger-bars" ></i>
                </a>

            </div>

            <div class="text-right col-md-5 col-sm-12 d-flex align-items-center justify-content-center">
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
                    <a class="dropdown-item mx-0" style="color: black;" href="/profile">الحساب الشخصى</a>
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

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title color-black" id="exampleModalLabel">تسجيل الدخول</h5>
                                <a style="width: fit-content;" class="close mx-0" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" style="color: red;cursor: pointer;">&times;</span>
                                </a>
                            </div>
                            <form action="{{ route('login') }}"  method="post" class="form-container">
                                @csrf
                            <div class="modal-body">
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
            <div class="col-lg-5 col-md-5 col-sm-12 py-2 d-flex justify-content-center">

                    <a  href="{{route('front.main')}}"><img class="ml-4" src="{{ asset('front/img/logo-edited-.png') }}"  ></a>

            </div>

        </div>
    </div>
</div>
<div id="menu" class="d-none">
        <div class="container-fluid mx-0 px-0">
            <div class="row mx-0 px-0">
                <a href="{{route('front.fleet')}}" class="mx-0 px-0 col-6 col-md-3 col-lg-3 d-flex justify-content-center align-items-center" ><i class="fas fa-car"></i> الأسطول</a>
                <a href="#" class="col-6 col-md-3 col-lg-3 mx-0 px-0 d-flex justify-content-center align-items-center" ><i class="fas fa-id-card"></i>بطاقات العضوية</a>
                <a href="{{route('front.points')}}" class="col-6 col-md-3 col-lg-3 mx-0 px-0  d-flex justify-content-center align-items-center" ><i class="fas fa-gift"></i>برنـامج نقـاطى</a>
                <a href="{{route('front.services')}}" class="col-6 col-md-3 col-lg-3 mx-0 px-0  d-flex justify-content-center align-items-center" ><i class="fas fa-cogs"></i>الخدمات و الصيانة</a>
                <a href="{{route('front.branches')}}" class="mx-0 px-0 col-6 col-md-3 col-lg-3 d-flex justify-content-center align-items-center" ><i class="fas fa-map-marker-alt"></i>فروعنـا بالمملكة</a>
                <a href="#" class="mx-0 px-0 col-6 col-md-3 col-lg-3 d-flex justify-content-center align-items-center" ><i class="fas fa-users"></i>قســم التوظيف</a>
                <a href="{{route('front.car_sales')}}" class="mx-0 px-0 col-6 col-md-3 col-lg-3 d-flex justify-content-center align-items-center" ><i class="fas fa-car-side"></i>مبيعات السيارات</a>
                <a href="{{route('front.media_center')}}" class="mx-0 px-0 col-6 col-md-3 col-lg-3 d-flex justify-content-center align-items-center" ><i class="far fa-newspaper"></i>المركز الأعلامى</a>
            </div>
        </div>
</div>

<div class="small-screen-navbar container-fluid mx-0 px-0 d-block d-md-none d-lg-none">
    <div class="row">
        <div class="col-3 py-3 text-center"><a class="mx-3" href="{{route('front.main')}}">الرئيسية</a></div>
        <div class="col-3 py-3 text-center"><a class="mx-3" href="{{route('front.fleet')}}"><i class="fas fa-car"></i></a></div>
        <div class="col-3 py-3 text-center"><i class="fas fa-bars" id="hamburger-bars2" ></i></div>
        <div class="col-3 py-3 text-center"><i class="fas fa-sign-in-alt"></i></div>
    </div>


</div>
