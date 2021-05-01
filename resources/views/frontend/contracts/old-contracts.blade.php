<div class="row justify-content-center my-4 ">

    <div class="col-12 col-md-8" >
        @foreach ($contracts as $contract)

        <div class="container-fluid">
            <div class="row justify-content-center" >
                <div class="contract-heading text-right" > رقم العقد <SPAN >{{$contract->id}}</SPAN>
                </div>
            </div>
            <div class="row contract-content" >
                <div class="col-12 col-md-5 d-flex justify-content-center align-items-center" style="flex-direction: column;">
                    <img  class="w-100" src="{{$contract->car->getFirstMediaUrl()}}" alt="car-img">
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
                            <td>{{$contract->receivingBranch->name}}</td>
                            <td>{{$contract->deliveryBranch->name}}</td>
                          </tr>
                          <tr>
                            <th scope="row">التاريخ</th>
                            <td>{{$contract->reciving_date->format('d-m-Y')}}</td>
                            <td>{{$contract->delivery_date->format('d-m-Y')}}</td>
                          </tr>
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-around align-items-center" style="width: 100%;">
                        <p >السعر :  {{$contract->price}}  <i class="icofont icofont-cur-riyal"></i></p>
                        <p > {{$order->payment_type}}</p>

                    </div>

                </div>
            </div>
        </div>
        @endforeach



    </div>

</div>
