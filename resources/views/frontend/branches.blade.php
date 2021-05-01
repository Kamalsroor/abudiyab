<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']" >
    <section class="branch-page">

        <section class="branch-page_head" style="background: url( {{optional(Settings::instance('branches_backgraund'))->getFirstMediaUrl('branches_backgraund')}} );background-repeat: no-repeat; background-size: cover;">
            <div class="branch-page_head_overlay-black">
                <div>
                    <h1>{{Settings::locale(app()->getLocale())->get('branches_title')}}</h1>
                    <p>مرحباً بكم في فروع شركة أبو ذياب لتأجير السيارات</p>
                </div>
            </div>
        </section>
        {{-- {{optional(Settings::instance('branches_backgraund'))->getFirstMediaUrl('branches_backgraund')}}    ---------     {{Settings::locale(app()->getLocale())->get('branches_title')}}--}}
        <section class="branch-page_map">

            <div class="branch-page_map_input-container">
                <div class="branch-page_map_input-container_input-content">
                    <div class="branch-page_map_input-container_input-content_head">
                        <div>الفروع الرئيسية</div>
                    </div>
                    <form action="#" class="branch-page_map_input-container_input-content_form">
                        <div class="branch-page_map_input-container_input-content_form_input">
                            <label>البحث بإسم المدينة</label>
                            <select>
                                <option value="all">جميع المدن</option>
                                <option value="0">الرياض</option>
                                <option value="1">جدة</option>
                                <option value="2">الدمام</option>
                                <option value="3">خميس مشيط</option>
                            </select>
                        </div>
                        <div class="branch-page_map_input-container_input-content_form_input">
                            <label>البحث بإسم الفرع</label>
                            <select>
                                <option value="all">جميع الفروع</option>
                                <option value="0">الرياض</option>
                                <option value="1">جدة</option>
                                <option value="2">الدمام</option>
                                <option value="3">خميس مشيط</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>

            <div class="branch-page_map_branches-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5126.320266708056!2d46.71794949593214!3d24.697482479312246!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4c842f5512d0930a!2sAbudiyab%20Head%20Office!5e0!3m2!1sen!2sus!4v1619855611423!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

        </section>
        <section class="branch-page_center">
                <div class="branch-page_center_head">
                    <h2>الوصول الي فروعنه <i class="fas fa-bars fa-bars-branch"></i></h2>
                    <div class="branch-page_center_head_regions">
                        <div class="branch branch-regoin" data-id="1">
                            <p >المنطقة الوسطي</p>
                        </div>
                        <div class="branch branch-regoin" data-id="2">
                            <p >المنطقة الغربية</p>
                        </div>
                        <div class="branch branch-regoin" data-id="3">
                            <p >المنطقة الشرقية</p>
                        </div>
                        <div class="branch branch-regoin" data-id="4">
                            <p >المنطقة الجنوبية</p>
                        </div>
                    </div>
                </div>
                <div class="branch-page_center_branches">
                    <div class="branch-page_center_branches_content">
                        <div class="branch-page_center_branches_content_branch">
                            <h3>المكتب الرئيسى</h3>
                            <p>الرياض</p>
                            <h4>شارع الدكتور احمد فهمي</h4>
                            <p class="so">من السبت الي الخميس</p>
                            <div class="branch-page_center_branches_content_branch_detailing">
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                                <p>|</p>
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                            </div>
                            <div class="branch-page_center_branches_content_branch_buttons">
                                <a href="" class="location-mobile"><i class="fa fa-map-marker"></i></a>
                                <a href="" class="telephone-number-mobile"><i class="fa fa-phone"></i></a>
                                <a href="" class="location">الموقع</a>
                                <a href="" class="telephone-number">01146635939</a>
                            </div>
                        </div>
                        <div class="branch-page_center_branches_content_branch">
                            <h3>المكتب الرئيسى</h3>
                            <p>الرياض</p>
                            <h4>شارع الدكتور احمد فهمي</h4>
                            <p class="so">من السبت الي الخميس</p>
                            <div class="branch-page_center_branches_content_branch_detailing">
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                                <p>|</p>
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                            </div>
                            <div class="branch-page_center_branches_content_branch_buttons">
                                <a href="" class="location-mobile"><i class="fa fa-map-marker"></i></a>
                                <a href="" class="telephone-number-mobile"><i class="fa fa-phone"></i></a>
                                <a href="" class="location">الموقع</a>
                                <a href="" class="telephone-number">01146635939</a>
                            </div>
                        </div>
                        <div class="branch-page_center_branches_content_branch">
                            <h3>المكتب الرئيسى</h3>
                            <p>الرياض</p>
                            <h4>شارع الدكتور احمد فهمي</h4>
                            <p class="so">من السبت الي الخميس</p>
                            <div class="branch-page_center_branches_content_branch_detailing">
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                                <p>|</p>
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                            </div>
                            <div class="branch-page_center_branches_content_branch_buttons">
                                <a href="" class="location-mobile"><i class="fa fa-map-marker"></i></a>
                                <a href="" class="telephone-number-mobile"><i class="fa fa-phone"></i></a>
                                <a href="" class="location">الموقع</a>
                                <a href="" class="telephone-number">01146635939</a>
                            </div>
                        </div>
                        <div class="branch-page_center_branches_content_branch">
                            <h3>المكتب الرئيسى</h3>
                            <p>الرياض</p>
                            <h4>شارع الدكتور احمد فهمي</h4>
                            <p class="so">من السبت الي الخميس</p>
                            <div class="branch-page_center_branches_content_branch_detailing">
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                                <p>|</p>
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                            </div>
                            <div class="branch-page_center_branches_content_branch_buttons">
                                <a href="" class="location-mobile"><i class="fa fa-map-marker"></i></a>
                                <a href="" class="telephone-number-mobile"><i class="fa fa-phone"></i></a>
                                <a href="" class="location">الموقع</a>
                                <a href="" class="telephone-number">01146635939</a>
                            </div>
                        </div>
                        <div class="branch-page_center_branches_content_branch">
                            <h3>المكتب الرئيسى</h3>
                            <p>الرياض</p>
                            <h4>شارع الدكتور احمد فهمي</h4>
                            <p class="so">من السبت الي الخميس</p>
                            <div class="branch-page_center_branches_content_branch_detailing">
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                                <p>|</p>
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                            </div>
                            <div class="branch-page_center_branches_content_branch_buttons">
                                <a href="" class="location-mobile"><i class="fa fa-map-marker"></i></a>
                                <a href="" class="telephone-number-mobile"><i class="fa fa-phone"></i></a>
                                <a href="" class="location">الموقع</a>
                                <a href="" class="telephone-number">01146635939</a>
                            </div>
                        </div>
                        <div class="branch-page_center_branches_content_branch">
                            <h3>المكتب الرئيسى</h3>
                            <p>الرياض</p>
                            <h4>شارع الدكتور احمد فهمي</h4>
                            <p class="so">من السبت الي الخميس</p>
                            <div class="branch-page_center_branches_content_branch_detailing">
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                                <p>|</p>
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                            </div>
                            <div class="branch-page_center_branches_content_branch_buttons">
                                <a href="" class="location-mobile"><i class="fa fa-map-marker"></i></a>
                                <a href="" class="telephone-number-mobile"><i class="fa fa-phone"></i></a>
                                <a href="" class="location">الموقع</a>
                                <a href="" class="telephone-number">01146635939</a>
                            </div>
                        </div>
                        <div class="branch-page_center_branches_content_branch">
                            <h3>المكتب الرئيسى</h3>
                            <p>الرياض</p>
                            <h4>شارع الدكتور احمد فهمي</h4>
                            <p class="so">من السبت الي الخميس</p>
                            <div class="branch-page_center_branches_content_branch_detailing">
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                                <p>|</p>
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                            </div>
                            <div class="branch-page_center_branches_content_branch_buttons">
                                <a href="" class="location-mobile"><i class="fa fa-map-marker"></i></a>
                                <a href="" class="telephone-number-mobile"><i class="fa fa-phone"></i></a>
                                <a href="" class="location">الموقع</a>
                                <a href="" class="telephone-number">01146635939</a>
                            </div>
                        </div>
                        <div class="branch-page_center_branches_content_branch">
                            <h3>المكتب الرئيسى</h3>
                            <p>الرياض</p>
                            <h4>شارع الدكتور احمد فهمي</h4>
                            <p class="so">من السبت الي الخميس</p>
                            <div class="branch-page_center_branches_content_branch_detailing">
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                                <p>|</p>
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                            </div>
                            <div class="branch-page_center_branches_content_branch_buttons">
                                <a href="" class="location-mobile"><i class="fa fa-map-marker"></i></a>
                                <a href="" class="telephone-number-mobile"><i class="fa fa-phone"></i></a>
                                <a href="" class="location">الموقع</a>
                                <a href="" class="telephone-number">01146635939</a>
                            </div>
                        </div>
                        <div class="branch-page_center_branches_content_branch">
                            <h3>المكتب الرئيسى</h3>
                            <p>الرياض</p>
                            <h4>شارع الدكتور احمد فهمي</h4>
                            <p class="so">من السبت الي الخميس</p>
                            <div class="branch-page_center_branches_content_branch_detailing">
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                                <p>|</p>
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                            </div>
                            <div class="branch-page_center_branches_content_branch_buttons">
                                <a href="" class="location-mobile"><i class="fa fa-map-marker"></i></a>
                                <a href="" class="telephone-number-mobile"><i class="fa fa-phone"></i></a>
                                <a href="" class="location">الموقع</a>
                                <a href="" class="telephone-number">01146635939</a>
                            </div>
                        </div>
                        <div class="branch-page_center_branches_content_branch">
                            <h3>المكتب الرئيسى</h3>
                            <p>الرياض</p>
                            <h4>شارع الدكتور احمد فهمي</h4>
                            <p class="so">من السبت الي الخميس</p>
                            <div class="branch-page_center_branches_content_branch_detailing">
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                                <p>|</p>
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                            </div>
                            <div class="branch-page_center_branches_content_branch_buttons">
                                <a href="" class="location-mobile"><i class="fa fa-map-marker"></i></a>
                                <a href="" class="telephone-number-mobile"><i class="fa fa-phone"></i></a>
                                <a href="" class="location">الموقع</a>
                                <a href="" class="telephone-number">01146635939</a>
                            </div>
                        </div>
                        <div class="branch-page_center_branches_content_branch">
                            <h3>المكتب الرئيسى</h3>
                            <p>الرياض</p>
                            <h4>شارع الدكتور احمد فهمي</h4>
                            <p class="so">من السبت الي الخميس</p>
                            <div class="branch-page_center_branches_content_branch_detailing">
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                                <p>|</p>
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                            </div>
                            <div class="branch-page_center_branches_content_branch_buttons">
                                <a href="" class="location-mobile"><i class="fa fa-map-marker"></i></a>
                                <a href="" class="telephone-number-mobile"><i class="fa fa-phone"></i></a>
                                <a href="" class="location">الموقع</a>
                                <a href="" class="telephone-number">01146635939</a>
                            </div>
                        </div>
                        <div class="branch-page_center_branches_content_branch">
                            <h3>المكتب الرئيسى</h3>
                            <p>الرياض</p>
                            <h4>شارع الدكتور احمد فهمي</h4>
                            <p class="so">من السبت الي الخميس</p>
                            <div class="branch-page_center_branches_content_branch_detailing">
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                                <p>|</p>
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                            </div>
                            <div class="branch-page_center_branches_content_branch_buttons">
                                <a href="" class="location-mobile"><i class="fa fa-map-marker"></i></a>
                                <a href="" class="telephone-number-mobile"><i class="fa fa-phone"></i></a>
                                <a href="" class="location">الموقع</a>
                                <a href="" class="telephone-number">01146635939</a>
                            </div>
                        </div>
                        <div class="branch-page_center_branches_content_branch">
                            <h3>المكتب الرئيسى</h3>
                            <p>الرياض</p>
                            <h4>شارع الدكتور احمد فهمي</h4>
                            <p class="so">من السبت الي الخميس</p>
                            <div class="branch-page_center_branches_content_branch_detailing">
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                                <p>|</p>
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                            </div>
                            <div class="branch-page_center_branches_content_branch_buttons">
                                <a href="" class="location-mobile"><i class="fa fa-map-marker"></i></a>
                                <a href="" class="telephone-number-mobile"><i class="fa fa-phone"></i></a>
                                <a href="" class="location">الموقع</a>
                                <a href="" class="telephone-number">01146635939</a>
                            </div>
                        </div>
                        <div class="branch-page_center_branches_content_branch">
                            <h3>المكتب الرئيسى</h3>
                            <p>الرياض</p>
                            <h4>شارع الدكتور احمد فهمي</h4>
                            <p class="so">من السبت الي الخميس</p>
                            <div class="branch-page_center_branches_content_branch_detailing">
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                                <p>|</p>
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                            </div>
                            <div class="branch-page_center_branches_content_branch_buttons">
                                <a href="" class="location-mobile"><i class="fa fa-map-marker"></i></a>
                                <a href="" class="telephone-number-mobile"><i class="fa fa-phone"></i></a>
                                <a href="" class="location">الموقع</a>
                                <a href="" class="telephone-number">01146635939</a>
                            </div>
                        </div>
                        <div class="branch-page_center_branches_content_branch">
                            <h3>المكتب الرئيسى</h3>
                            <p>الرياض</p>
                            <h4>شارع الدكتور احمد فهمي</h4>
                            <p class="so">من السبت الي الخميس</p>
                            <div class="branch-page_center_branches_content_branch_detailing">
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                                <p>|</p>
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                            </div>
                            <div class="branch-page_center_branches_content_branch_buttons">
                                <a href="" class="location-mobile"><i class="fa fa-map-marker"></i></a>
                                <a href="" class="telephone-number-mobile"><i class="fa fa-phone"></i></a>
                                <a href="" class="location">الموقع</a>
                                <a href="" class="telephone-number">01146635939</a>
                            </div>
                        </div>
                        <div class="branch-page_center_branches_content_branch">
                            <h3>المكتب الرئيسى</h3>
                            <p>الرياض</p>
                            <h4>شارع الدكتور احمد فهمي</h4>
                            <p class="so">من السبت الي الخميس</p>
                            <div class="branch-page_center_branches_content_branch_detailing">
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                                <p>|</p>
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                            </div>
                            <div class="branch-page_center_branches_content_branch_buttons">
                                <a href="" class="location-mobile"><i class="fa fa-map-marker"></i></a>
                                <a href="" class="telephone-number-mobile"><i class="fa fa-phone"></i></a>
                                <a href="" class="location">الموقع</a>
                                <a href="" class="telephone-number">01146635939</a>
                            </div>
                        </div>
                        <div class="branch-page_center_branches_content_branch">
                            <h3>المكتب الرئيسى</h3>
                            <p>الرياض</p>
                            <h4>شارع الدكتور احمد فهمي</h4>
                            <p class="so">من السبت الي الخميس</p>
                            <div class="branch-page_center_branches_content_branch_detailing">
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                                <p>|</p>
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                            </div>
                            <div class="branch-page_center_branches_content_branch_buttons">
                                <a href="" class="location-mobile"><i class="fa fa-map-marker"></i></a>
                                <a href="" class="telephone-number-mobile"><i class="fa fa-phone"></i></a>
                                <a href="" class="location">الموقع</a>
                                <a href="" class="telephone-number">01146635939</a>
                            </div>
                        </div>
                        <div class="branch-page_center_branches_content_branch">
                            <h3>المكتب الرئيسى</h3>
                            <p>الرياض</p>
                            <h4>شارع الدكتور احمد فهمي</h4>
                            <p class="so">من السبت الي الخميس</p>
                            <div class="branch-page_center_branches_content_branch_detailing">
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                                <p>|</p>
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                            </div>
                            <div class="branch-page_center_branches_content_branch_buttons">
                                <a href="" class="location-mobile"><i class="fa fa-map-marker"></i></a>
                                <a href="" class="telephone-number-mobile"><i class="fa fa-phone"></i></a>
                                <a href="" class="location">الموقع</a>
                                <a href="" class="telephone-number">01146635939</a>
                            </div>
                        </div>
                        <div class="branch-page_center_branches_content_branch">
                            <h3>المكتب الرئيسى</h3>
                            <p>الرياض</p>
                            <h4>شارع الدكتور احمد فهمي</h4>
                            <p class="so">من السبت الي الخميس</p>
                            <div class="branch-page_center_branches_content_branch_detailing">
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                                <p>|</p>
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                            </div>
                            <div class="branch-page_center_branches_content_branch_buttons">
                                <a href="" class="location-mobile"><i class="fa fa-map-marker"></i></a>
                                <a href="" class="telephone-number-mobile"><i class="fa fa-phone"></i></a>
                                <a href="" class="location">الموقع</a>
                                <a href="" class="telephone-number">01146635939</a>
                            </div>
                        </div>
                        <div class="branch-page_center_branches_content_branch">
                            <h3>المكتب الرئيسى</h3>
                            <p>الرياض</p>
                            <h4>شارع الدكتور احمد فهمي</h4>
                            <p class="so">من السبت الي الخميس</p>
                            <div class="branch-page_center_branches_content_branch_detailing">
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                                <p>|</p>
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                            </div>
                            <div class="branch-page_center_branches_content_branch_buttons">
                                <a href="" class="location-mobile"><i class="fa fa-map-marker"></i></a>
                                <a href="" class="telephone-number-mobile"><i class="fa fa-phone"></i></a>
                                <a href="" class="location">الموقع</a>
                                <a href="" class="telephone-number">01146635939</a>
                            </div>
                        </div>
                        <div class="branch-page_center_branches_content_branch">
                            <h3>المكتب الرئيسى</h3>
                            <p>الرياض</p>
                            <h4>شارع الدكتور احمد فهمي</h4>
                            <p class="so">من السبت الي الخميس</p>
                            <div class="branch-page_center_branches_content_branch_detailing">
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                                <p>|</p>
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                            </div>
                            <div class="branch-page_center_branches_content_branch_buttons">
                                <a href="" class="location-mobile"><i class="fa fa-map-marker"></i></a>
                                <a href="" class="telephone-number-mobile"><i class="fa fa-phone"></i></a>
                                <a href="" class="location">الموقع</a>
                                <a href="" class="telephone-number">01146635939</a>
                            </div>
                        </div>
                        <div class="branch-page_center_branches_content_branch">
                            <h3>المكتب الرئيسى</h3>
                            <p>الرياض</p>
                            <h4>شارع الدكتور احمد فهمي</h4>
                            <p class="so">من السبت الي الخميس</p>
                            <div class="branch-page_center_branches_content_branch_detailing">
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                                <p>|</p>
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                            </div>
                            <div class="branch-page_center_branches_content_branch_buttons">
                                <a href="" class="location-mobile"><i class="fa fa-map-marker"></i></a>
                                <a href="" class="telephone-number-mobile"><i class="fa fa-phone"></i></a>
                                <a href="" class="location">الموقع</a>
                                <a href="" class="telephone-number">01146635939</a>
                            </div>
                        </div>
                        <div class="branch-page_center_branches_content_branch">
                            <h3>المكتب الرئيسى</h3>
                            <p>الرياض</p>
                            <h4>شارع الدكتور احمد فهمي</h4>
                            <p class="so">من السبت الي الخميس</p>
                            <div class="branch-page_center_branches_content_branch_detailing">
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                                <p>|</p>
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                            </div>
                            <div class="branch-page_center_branches_content_branch_buttons">
                                <a href="" class="location-mobile"><i class="fa fa-map-marker"></i></a>
                                <a href="" class="telephone-number-mobile"><i class="fa fa-phone"></i></a>
                                <a href="" class="location">الموقع</a>
                                <a href="" class="telephone-number">01146635939</a>
                            </div>
                        </div>
                        <div class="branch-page_center_branches_content_branch">
                            <h3>المكتب الرئيسى</h3>
                            <p>الرياض</p>
                            <h4>شارع الدكتور احمد فهمي</h4>
                            <p class="so">من السبت الي الخميس</p>
                            <div class="branch-page_center_branches_content_branch_detailing">
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                                <p>|</p>
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                            </div>
                            <div class="branch-page_center_branches_content_branch_buttons">
                                <a href="" class="location-mobile"><i class="fa fa-map-marker"></i></a>
                                <a href="" class="telephone-number-mobile"><i class="fa fa-phone"></i></a>
                                <a href="" class="location">الموقع</a>
                                <a href="" class="telephone-number">01146635939</a>
                            </div>
                        </div>
                        <div class="branch-page_center_branches_content_branch">
                            <h3>المكتب الرئيسى</h3>
                            <p>الرياض</p>
                            <h4>شارع الدكتور احمد فهمي</h4>
                            <p class="so">من السبت الي الخميس</p>
                            <div class="branch-page_center_branches_content_branch_detailing">
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                                <p>|</p>
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                            </div>
                            <div class="branch-page_center_branches_content_branch_buttons">
                                <a href="" class="location-mobile"><i class="fa fa-map-marker"></i></a>
                                <a href="" class="telephone-number-mobile"><i class="fa fa-phone"></i></a>
                                <a href="" class="location">الموقع</a>
                                <a href="" class="telephone-number">01146635939</a>
                            </div>
                        </div>
                        <div class="branch-page_center_branches_content_branch">
                            <h3>المكتب الرئيسى</h3>
                            <p>الرياض</p>
                            <h4>شارع الدكتور احمد فهمي</h4>
                            <p class="so">من السبت الي الخميس</p>
                            <div class="branch-page_center_branches_content_branch_detailing">
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                                <p>|</p>
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                            </div>
                            <div class="branch-page_center_branches_content_branch_buttons">
                                <a href="" class="location-mobile"><i class="fa fa-map-marker"></i></a>
                                <a href="" class="telephone-number-mobile"><i class="fa fa-phone"></i></a>
                                <a href="" class="location">الموقع</a>
                                <a href="" class="telephone-number">01146635939</a>
                            </div>
                        </div>
                        <div class="branch-page_center_branches_content_branch">
                            <h3>المكتب الرئيسى</h3>
                            <p>الرياض</p>
                            <h4>شارع الدكتور احمد فهمي</h4>
                            <p class="so">من السبت الي الخميس</p>
                            <div class="branch-page_center_branches_content_branch_detailing">
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                                <p>|</p>
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                            </div>
                            <div class="branch-page_center_branches_content_branch_buttons">
                                <a href="" class="location-mobile"><i class="fa fa-map-marker"></i></a>
                                <a href="" class="telephone-number-mobile"><i class="fa fa-phone"></i></a>
                                <a href="" class="location">الموقع</a>
                                <a href="" class="telephone-number">01146635939</a>
                            </div>
                        </div>
                        <div class="branch-page_center_branches_content_branch">
                            <h3>المكتب الرئيسى</h3>
                            <p>الرياض</p>
                            <h4>شارع الدكتور احمد فهمي</h4>
                            <p class="so">من السبت الي الخميس</p>
                            <div class="branch-page_center_branches_content_branch_detailing">
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                                <p>|</p>
                                <p>من الساعه 10 صباحا الي 2 مساءا</p>
                            </div>
                            <div class="branch-page_center_branches_content_branch_buttons">
                                <a href="" class="location-mobile"><i class="fa fa-map-marker"></i></a>
                                <a href="" class="telephone-number-mobile"><i class="fa fa-phone"></i></a>
                                <a href="" class="location">الموقع</a>
                                <a href="" class="telephone-number">01146635939</a>
                            </div>
                        </div>
                    </div>
                </div>
        </section>


    </section>

    @section('js')
        <script>
            let BranchApisUrl = "{{ route('api.branches.index') }}";
            let branchesLogo="{{asset('front/img/logo-edited-.png')}}";
            let weekDays=   @json(trans('branches.weekDays'));
            $('.fa-bars-branch').click(function() {
                $('.branch-page_center_head_regions').slideToggle();
                $(this).toggleClass('fa-bars');
                $(this).toggleClass('fa-times');
            });
            $('.branch-regoin').click(function() {
                $('.branch-regoin').removeClass('active');
                $(this).addClass('active');
            });
        </script>
    @endsection
</x-front-layout>
