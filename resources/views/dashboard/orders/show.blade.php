<x-layout :title="$order->name" :breadcrumbs="['dashboard.orders.show', $order]">
    <div class="row">
        <div class="col-md-12">
            @component('dashboard::components.box')
                @slot('class', 'p-0')
                @slot('bodyClass', 'p-0')

                <div class="invoice p-3 mb-3">
                    <!-- title row -->
                    <div class="row">
                      <div class="col-12">
                        <h4>
                          <i class="fas fa-globe"></i> {{ $order->car->name }} {{ $order->car->model }}
                          <small class="float-right">تاريخ الحجز: {{ $order->created_at->format('Y-m-d h:i A') }}</small>
                        </h4>
                      </div>
                        <div class="col-12 text-center">
                            <hr><h4 class="text-red">حالة الطلب : {{ trans('orders.status.'.$order->status)  }}</h4>
                                @if ($order->status == "rejected" && $order->reason != null)
                                <h4 class="text-red">سبب الرفض : {{ $order->reason  }}</h4>
                                @endif
                            <hr>
                        </div>
                      <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info">

                      <!-- /.col -->
                      <div class="col-sm-4 invoice-col">
                        العميل
                        <address>
                            @dd($order->customer)
                          <strong>{{ $order->customer ? $order->customer->name : "زائر"}}</strong><br>
                          {{$order->customer ? $order->customer->address : ""}}<br>
                          رقم الهاتف: {{ $order->customer ? $order->customer->phone : ""}}<br>
                          البريد الالكتروني: {{ $order->customer ? $order->customer->email : ""}}
                        </address>
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-4 invoice-col">
                        <b>رقم الحجز : {{$order->id}}</b><br>
                        <br>
                        <b>Order ID:</b> {{$order->id}}<br>
                        {{-- <b>Payment Due:</b> 2/22/2014<br> --}}
                        {{-- <b>Account:</b> 968-34567 --}}
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Table row -->
                    <div class="row">
                      <div class="col-12 table-responsive">
                        <table class="table table-striped">
                          <thead>
                          <tr>
                            <th>اسم السياره</th>
                            <th>الموديل</th>
                            <th>عدد ايام الحجز</th>
                            <th>فرع الاستلام</th>
                            <th>ميعاد الاستلام</th>
                            <th>فرع التسليم</th>
                            <th>ميعاد التسليم</th>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td>{{ $order->car->name }}</td>
                            <td>{{ $order->car->model }}</td>
                            <td>{{ $order->days }}</td>
                            <td>{{ $order->receivingBranch->name}}</td>
                            <td>{{ $order->reciving_date->format('Y-m-d h:i A') }}</td>
                            <td>{{ $order->deliveryBranch->name}}</td>
                            <td>{{ $order->delivery_date->format('Y-m-d h:i A') }}</td>
                          </tr>

                          </tbody>
                        </table>
                      </div>
                      <!-- /.col -->
                      @if ($order->features_added != null)
                        <div class="col-12 text-center">
                                <hr><h4 >الاضافات</h4><hr>
                            </div>
                        <div class="col-12 table-responsive">
                            <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>أسم الاضافة</th>
                                <th>عدد ايام الحجز</th>
                                <th>سعر الاضافة</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                @foreach ($order->features_added as $key => $value)
                                    <tr>
                                        <td>{{trans('cars.attributes.'.$key) }}</td>
                                        <td>{{ $order->days }}</td>
                                        <td>{{$value}}</td>
                                    </tr>
                                @endforeach
                            </tr>

                            </tbody>
                            </table>
                        </div>
                      @endif
                    </div>
                    <!-- /.row -->




                    <div class="row">
                      <!-- accepted payments column -->
                      <div class="col-12 text-center">
                        <hr><h4 >معلومات الدفع</h4><hr>
                    </div>

                    <!-- /.col -->
                    <div class="col-6">
                        <div class="table-responsive">
                            <table class="table">
                            <tbody><tr>
                                <th style="width:50%">طرقة الدفع :</th>
                                <td>{{ $order->payment_type }} </td>
                            </tr>
                            <tr>
                                <th>حالة الدفع :</th>
                                <td>{{ $order->payment_status == "SUCCESS" ? "تم الدفع" : "لم يتم تأكيد الدفع"  }}</td>
                            </tr>
                            </tbody></table>
                        </div>
                        </div>
                        <!-- /.col -->
                      <!-- /.col -->
                      <div class="col-6">

                        <div class="table-responsive">
                          <table class="table">
                            <tbody><tr>
                              <th style="width:50%">سعر السيارة اليومي :</th>
                              <td>{{$order->car_price}} ريال</td>
                            </tr>
                            <tr>
                              <th>اجمالي الاضافات</th>
                              <td>{{$TotalFeatures}} ريال</td>
                            </tr>
                            <tr>
                              <th>رسوم تفويض</th>
                              <td>{{$order->authorization_fee}} ريال</td>
                            </tr>
                            <tr>
                              <th>خصم العضوية:</th>
                              <td>{{$order->membership_discount}} ريال</td>
                            </tr>
                            <tr>
                              <th>خصم ترويجي:</th>
                              <td>{{$order->promotional_discount}} ريال</td>
                            </tr>
                            <tr>
                              <th>الاجمالي :</th>
                              <td>{{$order->price}} ريال</td>
                            </tr>
                          </tbody></table>
                        </div>
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->





                  </div>





                @slot('footer')


                    <!-- this row will not appear when printing -->
{{--
                    <a href="{{ route('dashboard.orders.confirmation', $order) }}" class="btn btn-primary btn-sm">
                        <i class="fas fa fa-fw fa-edit"></i>  @lang('orders.actions.confirmation')
                    </a> --}}

                    {{-- @include('dashboard.orders.partials.actions.edit') --}}
                    {{-- @include('dashboard.orders.partials.actions.delete') --}}

                    @if ($order->customer)
                        @include('dashboard.orders.partials.actions.confirmation')
                        @include('dashboard.orders.partials.actions.rejected')
                    @endif
                @endslot
            @endcomponent
        </div>
    </div>
</x-layout>
