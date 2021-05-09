<div>
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
        <form class="form-container">
            @csrf
        <div class="modal-body">
            <div class="row">
                <input type="hidden" name="car_id" value="{{$car_id}}">
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <p class="text-right">فرع الاستلام</p>
                        <select  class="form-control" wire:model='receiving_branch_id' id="receivingBrancheInput"  name="receivingBrancheInput">
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
                        <select  class="form-control" wire:model='dervery_branch_id' id="deliveryBrancheInput"  name="deliveryBrancheInput">
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
                        <input class="form-control" id="receivingDateInput" wire:model='receivingDate' min="{{$dayOneFormated}}"  type="datetime-local" name='receivingDateInput'>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <p class="text-right">تاريخ التسليم</p>
                        <input class="form-control" id="deliveryDateInput" wire:model='deliveryDate' min="{{$dayTwoFormated}}"   type="datetime-local" name='deliveryDateInput'>
                    </div>
                </div>
            {{-- <button class="btn btn-primary" type="submit">تسجيل</button> --}}
            </div>
            <button wire:click='booking({{$car_id}})' class="btn-lg btn-block primary-btn btn-hover btn-curved ">حجز</button>
        </div>
    </form>
</div>
</div>

@push('scripts')
<script>
    $('#receivingBrancheInput').on('change', function (e) {
        var data = $(this).val();
        console.log(data);
        @this.set('dervery_branch_id', data);
    });


    window.addEventListener('sweetalert', event => {
        Swal.fire({
            title: event.detail.title,
            text: event.detail.text,
            icon: event.detail.type,
            confirmButtonText: 'موافق'
        })
    });
</script>
@endpush

<!--  ------------------------------------>
<!-- Modal ends here------------------- -->
<!--  ------------------------------------>
</div>
