<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4 footer_section-3">
                <div class="row">
                    <div class="col-12">
                        <div class="footer_section-3_img">
                            <img src="{{asset('front/img/logo-edited-.png')}}" alt="logo">
                        </div>
                    </div>
                    <div class="col-12 footer_section-3_text">
                        <p>يسعدنا خدمتكم من خلال تطبيقنا</p>
                    </div>
                    <div class="col-12">
                        <div class="footer_section-3_app-img container-fluid">
                            <div class="row">
                            <a class="col-4" href="{{Settings::get('android')}}" target="_blank"><img src="{{asset('front/img/google.jpg')}}" alt="app-google"></a>
                            <a class="col-4" href="{{Settings::get('apple')}}" target="_blank"><img src="{{asset('front/img/app-store.jpg')}}" alt="app-store"></a>
                            <a class="col-4" href="{{Settings::get('huawei')}}" target="_blank"><img src="{{asset('front/img/app-gelery.jpg')}}" alt="app-gelery"></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4 footer_section-2">
                <div class="row">
                    <div class="col-12 footer_section-2_text">
                        <div >
                        <p>العنوان</p>
                        <p>{{Settings::get('branch_name')}}</p>
                        <p>{{Settings::get('address')}}</p>
                        <a href="tel:996920026600" class="btn btn-danger btn-lg btn-block"><i class="fas fa-phone-volume"></i> {{Settings::get('phone')}}</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-12 col-lg-4 footer_section-1">
                <div class="row">
                    <div class="col-12 footer_section-1_icons">
                        <a href="{{Settings::get('whatsapp')}}" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        <a href="{{Settings::get('twitter')}}" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="{{Settings::get('facebook')}}" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="{{Settings::get('youtube')}}" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a href="{{Settings::get('instagram')}}" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="{{Settings::get('linkedin')}}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-12 footer_section-1_text">
                        <p>
                            {{Settings::locale(app()->getLocale())->get('footer_subscripe_title')}}
                        </p>
                    </div>
                    <div class="col-12 footer_section-1_form">
                        <div class="row">
                            <div class="col-8"><input type="text" class="form-control" placeholder="أدخل إميلك"></div>
                            <div class="col-4"><a href="#" class="btn btn-danger btn-block">اشترك معنا</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 footer_section-4">جميع الحقوق محفوظة لشركة أبو ذياب لتأجير السيارات © 2021</div>
        </div>
    </div>
</footer>
