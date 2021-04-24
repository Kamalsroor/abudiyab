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
                          <small class="float-right">تاريخ العملية: {{ $order->created_at->format('Y-m-d h:i A') }}</small>
                        </h4>
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info">

                      <!-- /.col -->
                      <div class="col-sm-4 invoice-col">
                        العميل
                        <address>
                          <strong>{{ $order->customer->name}}</strong><br>
                          795 Folsom Ave, Suite 600<br>
                          San Francisco, CA 94107<br>
                          رقم الهاتف: {{ $order->customer->phone}}<br>
                          البريد الالكتروني: {{ $order->customer->email}}
                        </address>
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-4 invoice-col">
                        <b>العملية رقم : {{$order->id}}</b><br>
                        <br>
                        <b>Order ID:</b> 4F3S8J<br>
                        <b>Payment Due:</b> 2/22/2014<br>
                        <b>Account:</b> 968-34567
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
                    </div>
                    <!-- /.row -->

                    <div class="row">
                      <!-- accepted payments column -->


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
                              <th style="width:50%">Subtotal:</th>
                              <td>$250.30</td>
                            </tr>
                            <tr>
                              <th>Tax (9.3%)</th>
                              <td>$10.34</td>
                            </tr>
                            <tr>
                              <th>Shipping:</th>
                              <td>$5.80</td>
                            </tr>
                            <tr>
                              <th>Total:</th>
                              <td>{{$order->price}}</td>
                            </tr>
                          </tbody></table>
                        </div>
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->




                    <!-- this row will not appear when printing -->
                    {{-- <div class="row no-print">
                      <div class="col-12">
                        <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                        <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                          Payment
                        </button>
                        <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                          <i class="fas fa-download"></i> Generate PDF
                        </button>
                      </div>
                    </div> --}}
                  </div>





                @slot('footer')
                    @include('dashboard.orders.partials.actions.edit')
                    @include('dashboard.orders.partials.actions.delete')
                @endslot
            @endcomponent
        </div>


        <div class="col-md-6">
            @component('dashboard::components.box')
                @slot('class', 'p-0')
                @slot('bodyClass', 'p-0')

                <table class="table table-striped table-middle">
                    <tbody>
                        <tr>
                            <th width="200">@lang('orders.attributes.name')</th>
                            <td>{{ $order->car->name }}</td>
                        </tr>

                        <tr>
                            <th width="200">@lang('orders.attributes.recieving_date')</th>
                            <td>{{ $order->reciving_date->format('Y-m-d') }}</td>
                        </tr>


                        <tr>
                            <th width="200">@lang('orders.attributes.booking_days')</th>
                            <td>{{ $order->days}}</td>
                        </tr>

                        <tr>
                            <th width="200">@lang('orders.attributes.recieving_branch')</th>
                            <td>{{ $order->receivingBranch->name}}</td>
                        </tr>


                        <tr>
                            <th width="200">@lang('orders.attributes.customer')</th>
                            <td>{{ $order->customer->name}}</td>
                        </tr>
                    </tbody>
                </table>













                @slot('footer')
                    @include('dashboard.orders.partials.actions.edit')
                    @include('dashboard.orders.partials.actions.delete')
                @endslot
            @endcomponent
        </div>
        <div class="col-md-6">
            @component('dashboard::components.box')
                @slot('class', 'p-0')
                @slot('bodyClass', 'p-0')

                <table class="table table-striped table-middle">
                    <tbody>


                    <tr>
                        <th width="200">@lang('orders.attributes.delivery_branch')</th>
                        <td>{{ $order->deliveryBranch->name }}</td>
                    </tr>

                    <tr>
                        <th width="200">@lang('orders.attributes.payment_type')</th>
                        <td>{{ $order->payment_type }}</td>
                    </tr>
                    <tr>
                        <th width="200">@lang('orders.attributes.payment_status')</th>
                        <td>{{ $order->payment_status == "SUCCESS" ? "تم الدفع" : "لم يتم تأكيد الدفع"  }}</td>
                    </tr>

                    <tr>
                        <th width="200">@lang('orders.attributes.created_at')</th>
                        <td>{{ $order->created_at->format('Y-m-d') }}</td>
                    </tr>

                    </tbody>
                </table>







            @endcomponent
        </div>
    </div>
</x-layout>
