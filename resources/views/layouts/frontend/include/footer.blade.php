<section class="footer-page">
    
    <footer class="footer">
            
        <div class="container text-center">
            
            <div class="row">
                <div class="col-12 col-lg-4 footer_section-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer_section-3_img">
                                <img class="w-100" src="{{asset('front/img/logo-edited-.png')}}" alt="logo">
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="col-12 col-lg-4 footer_section-1">
                    <div class="row">
                        
                        <div class="m-auto">
                            <p>العنوان</p>
                            <p>{{Settings::get('branch_name')}}</p>
                            <p>{{Settings::get('address')}}</p>
                        </div>
                        <div class="col-12 footer_section-1_icons">
                            <a href="{{Settings::get('whatsapp')}}" target="_blank"><i class="fab fa-whatsapp"></i></a>
                            <a href="{{Settings::get('twitter')}}" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="{{Settings::get('facebook')}}" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a href="{{Settings::get('youtube')}}" target="_blank"><i class="fab fa-youtube"></i></a>
                            <a href="{{Settings::get('instagram')}}" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="{{Settings::get('linkedin')}}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        
                    
                    </div>
                </div>

                <div class="col-12 col-lg-4 footer_section-2 d-flex align-items-center">
                    <div class="row">
                        <div class="col-12 footer_section-3_text">
                            <p>يسعدنا خدمتكم من خلال تطبيقنا</p>
                        </div>
                        
                        <div class="col-12 mb-2">
                            <a href="tel:996920026600" class="btn btn-danger btn-lg btn-block"> {{Settings::get('phone')}} <i class="fas fa-phone-volume"></i></a>
                        </div>

                        <div class="col-12 mb-2">
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

                
            </div>
            
        </div>
        <div class="container-fluid">
            <div class="row footer_section-4 text-center">
                <div class="col-12 text-center" style="background-color:#0000004d ">
                    جميع الحقوق محفوظة لشركة أبو ذياب لتأجير السيارات © 2021
                </div>
            </div>

        </div>
    </footer>
</section>
