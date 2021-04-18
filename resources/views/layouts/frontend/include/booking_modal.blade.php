<!-- ---------------------------------- -->
<!-- Modal ------------------------------->
<!-- ---------------------------------- -->

    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <a style="width: fit-content;" class="close mx-0" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: red;cursor: pointer;">&times;</span>
                </a>
            </div>
            <form action="{{ route('front.booking') }}"  method="get" class="form-container">
                @csrf
            <div class="modal-body">
                <div class="row">
                    <input type="hidden" name="car_id" value="{{$car_id}}">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <p class="text-right">فرع الاستلام</p>
                            <select  class="form-control" id="receivingBrancheInput"  name="receivingBrancheInput">
                                <option class="color-black" value="0" selected>اختار الفرع</option>

                                @foreach($branches as $branche)
                                <option class="color-black" value="{{$branche->id}}" >{{$branche->name}} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <p class="text-right">فرع التسليم</p>
                            <select  class="form-control" id="deliveryBrancheInput"  name="deliveryBrancheInput">
                                <option class="color-black" value="0" selected>اختار الفرع</option>
                                @foreach($branches as $branche)
                                <option class="color-black" value="{{$branche->id}}">{{$branche->name}} </option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <p class="text-right">تاريخ الاستلام</p>
                            <input class="form-control" id="receivingDateInput"  type="datetime-local" name='receivingDateInput'>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <p class="text-right">تاريخ التسليم</p>
                            <input class="form-control" id="deliveryDateInput"   type="datetime-local" name='deliveryDateInput'>
                        </div>
                    </div>
                {{-- <button class="btn btn-primary" type="submit">تسجيل</button> --}}
                </div>
                <button wire:click='checkbooking' class="btn-lg btn-block primary-btn btn-hover btn-curved " type="submit">حجز</button>
            </div>
        </form>
    </div>
</div>

<!--  ------------------------------------>
<!-- Modal ends here------------------- -->
<!--  ------------------------------------>
