@include('dashboard.errors')
@bsMultilangualFormTabs
<div class="row">
    <div class="col-md-6">
        {{ BsForm::text('name') }}
    </div>
    <div class="col-md-6">
        {{ BsForm::text('mini_des') }}
    </div>
</div>

{{ BsForm::textarea('des')->attribute('class', 'form-control textarea')}}
@endBsMultilangualFormTabs
<div class="col-md-6">
    {{ BsForm::select('type')->options(trans('additions.type')) }}
</div>

<input type="hidden" name="img_base64" id="img_base64">
<button id="download-image"  type="button" class="btn btn-success d-none"><i class='fa fa-arrow-circle-down'></i> Download Image</button>

    <icon-input name="icon" value="{{isset($addition) ? json_encode($addition->icon) : ""}}"  label="@lang('branches.singular')"/>

{{-- @isset($addition)
    {{ BsForm::image('image')->files($addition->getMediaResource()) }}
@else
    {{ BsForm::image('image') }}
@endisset --}}


@push('scripts')
<script src="{{ asset('vendor/canvas.js') }}"></script>

<script>

$(document).ready(function() {
    // $(document).on('change', '#icon_selected_name', function() {
    // });
        // console.log('teststste');

    $("#download-image").on('click', function(e){
        e.preventDefault();
        var icon_name = 'test';
        console.log($('.fonta-preview-icon') , 'test');
        html2canvas($(".fonta-preview-icon")[0], {
        onrendered: function (canvas) {
                var url = canvas.toDataURL("image/png", 1.0);
                // console.log(url);
                $('#img_base64').val(url);
                // var link = document.createElement('a');
                // link.download = icon_name+'.png';
                // link.href = url;
                // link.click();
            }
        });
    });

    // $('body').on('change', ['#price2' , '#desc'], function() {

    //     console.log($('#price2').val().replaceAll(',','') , parseInt($('#price2').val().replaceAll(',','')));
    //     let price = parseInt($('#price2').val().replaceAll(',','')) ,
    //         discount = parseInt($('#desc').val()) + parseInt($('#discount_2').val()) + parseInt($('#discount_3').val()),
    //         newPrice = price - (price * (discount / 100 ));


    //         $('#price1').val(newPrice);



    //     console.log( price , discount , parseInt($('#discount_2').val()) ,  parseInt($('#discount_3').val()) ,$('#discount_3').val() );
    // });
    // $(".input-time").inputmask({"mask": "99:99"});
});


</script>
@endpush
