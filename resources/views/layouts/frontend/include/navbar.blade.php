<!-- -------------------------------------- ----------------------->
<!-- --------------------nav for small screens------------------ -->
<!-- -------------------------------------- ----------------------->
<div class="mynav container-fluid small-screen-nav">
    <div class="container-fluid mx-0">
        <div class="row py-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h1 class="text-center">
                    ABUDYIAB
                </h1>
            </div>
            <div class="text-center col-md-6 col-sm-12 pt-2">
                <a id="login">تسجيل الدخول</a>
                <a href="#">الاستعلام عن الحجز</a>
                <a href="{{route('front.main')}}">الرئيسية</a>
            </div>

        </div>
    </div>
</div>
<!-- -------------------------------------- ---------------------------->
<!-- --------------------nav for small screens ends------------------ -->
<!-- -------------------------------------- ---------------------------->

<div class="mynav container-fluid d-none d-md-block d-lg-block">
    <div class="container-fluid mx-0">
        <div class="row ">
            <div class="col-2 d-flex justify-content-center align-items-center">
                <a class="btn " data-toggle="tooltip" data-placement="bottom" title="القائمة الرئيسية">
            <i class="fas fa-bars" id="hamburger-bars" ></i>
                </a>

            </div >

            <div class="text-right col-md-5 col-sm-12 d-flex align-items-center">
                <a href="{{route('front.main')}}">الرئيسية</a>
                @guest
                <!--  ---------------------------------------->
                <!-- pop over------------------------------ -->
                <!--  ---------------------------------------->
                <a class="open-button" onclick="openForm()">تسجيل الدخول</a>
                <div class="form-popup" id="myForm">


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
                <a type="button"  data-toggle="modal" data-target="#exampleModal" >تسجيل الدخول</a>



                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title color-black" id="exampleModalLabel">تسجيل الدخول</h5>
                            <a style="width: fit-content;" class="close mx-0" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="color: red;cursor: pointer;">&times;</span>
                            </a>
                        </div>
                        <div class="modal-body">
                            <form>
                            <div class="form-group">
                                <label for="user" class="col-form-label color-black">البريد الالكترونى</label>
                                <input type="text" class="form-control" id="user">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label color-black">كلمة السر</label>
                                <input type="password" class="form-control" id="user">
                            </div>
                            <button class="btn btn-primary" type="submit">تسجيل</button>
                            <a href="{{ route('register') }}" class="btn btn-warning" type="submit">إنشاء حساب جديد</a>
                            </form>
                        </div>

                    </div>
                </div>
                </div>

              <!--  ------------------------------------>
              <!-- Modal ends here------------------- -->
              <!--  ------------------------------------>
                <div>
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-globe-americas" style="font-size: 25px;"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                        <a class="dropdown-item mx-0" style="color: black;" href="#">english</a>
                        <a class="dropdown-item mx-0" style="color: black;" href="#">Arabic</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 py-2">

                    <a href="{{route('front.main')}}"><img src="{{ asset('front/img/logo-edited-.png') }}" style="width: 64px;" srcset=""></a>

            </div>

        </div>
    </div>
</div>
<div id="menu" class="hidden">
        <div class="container-fluid">
            <div class="row">
                <div class="col-3 d-flex justify-content-center align-items-center" style="height:16vw;border: solid white 1px;flex-direction:column;"><i class="fas fa-car"></i><a href="{{route('front.fleet')}}" >الأسطول</a></div>
                <div class="col-3 d-flex justify-content-center align-items-center" style="height:16vw;border: solid white 1px;flex-direction:column;"><i class="fas fa-id-card"></i><a href="#" >بطاقات العضوية</a></div>
                <div class="col-3 d-flex justify-content-center align-items-center" style="height:16vw;border: solid white 1px;flex-direction:column;"><i class="fas fa-gift"></i><a href="#" >برنـامج نقـاطى</a></div>
                <div class="col-3 d-flex justify-content-center align-items-center" style="height:16vw;border: solid white 1px;flex-direction:column;"><i class="fas fa-cogs"></i><a href="#" >الخدمات و الصيانة</a></div>
                <div class="col-3 d-flex justify-content-center align-items-center" style="height:16vw;border: solid white 1px;flex-direction:column;"><i class="fas fa-map-marker-alt"></i><a href="{{route('front.branches')}}" >فروعنـا بالمملكة</a></div>
                <div class="col-3 d-flex justify-content-center align-items-center" style="height:16vw;border: solid white 1px;flex-direction:column;"><i class="fas fa-users"></i><a href="#" >قســم التوظيف</a></div>
                <div class="col-3 d-flex justify-content-center align-items-center" style="height:16vw;border: solid white 1px;flex-direction:column;"><i class="fas fa-car-side"></i><a href="#" >مبيعات السيارات</a></div>
                <div class="col-3 d-flex justify-content-center align-items-center" style="height:16vw;border: solid white 1px;flex-direction:column;"><i class="far fa-newspaper"></i><a href="#" >المركز الأعلامى</a></div>
            </div>
        </div>


    </div>
