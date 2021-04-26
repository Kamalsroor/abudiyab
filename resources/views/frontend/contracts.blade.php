<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']" >
    <section class="contracts-page">

        {{-- cover picture starts --}}
        <div style="background-image: url({{asset('front/img/contract.jpg')}});height:340px;background-position: center;background-size: cover;background-repeat: no-repeat">
            {{-- <img class="w-100" src="{{asset('front/img/Webp.net-compress-image.jpg')}}" alt="hero image"> --}}
            <div class="d-flex justify-content-center align-items-center" style="background-color: #000000c7;width:100%;height: 100%;">
               <h1 style="font-size: 50px; padding-bottom:10px; font-weight:600;color:white;border-bottom:2px red solid;">العقود</h1>
            </div>
        </div>
        {{-- cover picture ends --}}

        <div class="container-fluid">
            {{-- loop starts here  --}}
            <div class="row justify-content-center my-4 ">

                <div class="col-12 col-md-8" >
                    <div class="container-fluid">
                        <div class="row justify-content-center" >
                            <div class="contract-heading text-right" > رقم العقد <SPAN >0502215485214</SPAN>
                            </div>
                        </div>
                        <div class="row contract-content" >
                            <div class="col-12 col-md-5 d-flex justify-content-center align-items-center" style="flex-direction: column;">
                                <img  class="w-100" src="{{asset('front/img/ford-figo-2018.png')}}" alt="car-img">
                                <p >مرسيدس c180 <span class="badge badge-danger">2020</span></p>

                            </div>
                            <div class="col-12 col-md-7 d-flex justify-content-end align-items-center" style="flex-direction:column;">
                                <table class="table">
                                    <thead>
                                      <tr>
                                        <th scope="col"></th>
                                        <th scope="col">الأستلام</th>
                                        <th scope="col">التسليم</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">الفرع</th>
                                        <td>مطار الملك فهد</td>
                                        <td>الرياض</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">التاريخ</th>
                                        <td>01/04/2021</td>
                                        <td>05/04/2021</td>
                                      </tr>
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-around align-items-center" style="width: 100%;">
                                    <p >السعر :  180  <i class="icofont icofont-cur-riyal"></i></p>
                                    <p > كاش</p>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="row justify-content-center my-4">

                <div class="col-12 col-md-8" >
                    <div class="container-fluid">
                        <div class="row justify-content-center" >
                            <div class="contract-heading text-right" > رقم العقد <SPAN >0502215485214</SPAN>
                            </div>
                        </div>
                        <div class="row contract-content" >
                            <div class="col-12 col-md-5 d-flex justify-content-center align-items-center" style="flex-direction: column;">
                                <img  class="w-100" src="{{asset('front/img/ford-figo-2018.png')}}" alt="car-img">
                                <p >مرسيدس c180 <span class="badge badge-danger">2020</span></p>

                            </div>
                            <div class="col-12 col-md-7 d-flex justify-content-end align-items-center" style="flex-direction:column;">
                                <table class="table">
                                    <thead>
                                      <tr>
                                        <th scope="col"></th>
                                        <th scope="col">الأستلام</th>
                                        <th scope="col">التسليم</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">الفرع</th>
                                        <td>مطار الملك فهد</td>
                                        <td>الرياض</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">التاريخ</th>
                                        <td>01/04/2021</td>
                                        <td>05/04/2021</td>
                                      </tr>
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-around align-items-center" style="width: 100%;">
                                    <p >السعر :  180  <i class="icofont icofont-cur-riyal"></i></p>
                                    <p > كاش</p>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="row justify-content-center my-4">

                <div class="col-12 col-md-8" >
                    <div class="container-fluid">
                        <div class="row justify-content-center" >
                            <div class="contract-heading text-right" > رقم العقد <SPAN >0502215485214</SPAN>
                            </div>
                        </div>
                        <div class="row contract-content" >
                            <div class="col-12 col-md-5 d-flex justify-content-center align-items-center" style="flex-direction: column;">
                                <img  class="w-100" src="{{asset('front/img/ford-figo-2018.png')}}" alt="car-img">
                                <p >مرسيدس c180 <span class="badge badge-danger">2020</span></p>

                            </div>
                            <div class="col-12 col-md-7 d-flex justify-content-end align-items-center" style="flex-direction:column;">
                                <table class="table">
                                    <thead>
                                      <tr>
                                        <th scope="col"></th>
                                        <th scope="col">الأستلام</th>
                                        <th scope="col">التسليم</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">الفرع</th>
                                        <td>مطار الملك فهد</td>
                                        <td>الرياض</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">التاريخ</th>
                                        <td>01/04/2021</td>
                                        <td>05/04/2021</td>
                                      </tr>
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-around align-items-center" style="width: 100%;">
                                    <p >السعر :  180  <i class="icofont icofont-cur-riyal"></i></p>
                                    <p > كاش</p>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="row justify-content-center my-4">

                <div class="col-12 col-md-8" >
                    <div class="container-fluid">
                        <div class="row justify-content-center" >
                            <div class="contract-heading text-right" > رقم العقد <SPAN >0502215485214</SPAN>
                            </div>
                        </div>
                        <div class="row contract-content" >
                            <div class="col-12 col-md-5 d-flex justify-content-center align-items-center" style="flex-direction: column;">
                                <img  class="w-100" src="{{asset('front/img/ford-figo-2018.png')}}" alt="car-img">
                                <p >مرسيدس c180 <span class="badge badge-danger">2020</span></p>

                            </div>
                            <div class="col-12 col-md-7 d-flex justify-content-end align-items-center" style="flex-direction:column;">
                                <table class="table">
                                    <thead>
                                      <tr>
                                        <th scope="col"></th>
                                        <th scope="col">الأستلام</th>
                                        <th scope="col">التسليم</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">الفرع</th>
                                        <td>مطار الملك فهد</td>
                                        <td>الرياض</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">التاريخ</th>
                                        <td>01/04/2021</td>
                                        <td>05/04/2021</td>
                                      </tr>
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-around align-items-center" style="width: 100%;">
                                    <p >السعر :  180  <i class="icofont icofont-cur-riyal"></i></p>
                                    <p > كاش</p>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
            {{-- loop ends here  --}}
        </div>



    </section>
</x-front-layout>
