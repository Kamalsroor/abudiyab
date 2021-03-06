<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']">

    @section('styles')


    <script>
        window.addEventListener('openPayment', event => {
            console.log(event.detail);
            Checkout.configure({
                merchant: event.detail.merchant,
                order: {
                    amount: function() {
                        return event.detail.order_amount;
                    },
                    currency: event.detail.order_currency,
                    description: 'Order Number: 4',
                    id: event.detail.order_id
                },
                session: {
                    id: event.detail.session_id
                },
                interaction: {
                    merchant: {
                        name: event.detail.merchant_name,
                        // address: {
                        //     line1: 'tetst'
                        // },
                        // email  : 'kamal.s.sroor@gmail.com',
                        // phone  : '01012316954',
                        // logo   : 'https://abudiyab.test/'
                    },
                    locale : 'en_US',
                    theme : 'default',
                }
            });

            Checkout.showLightbox();


        });
        window.addEventListener('openPaymenthtmlBodyContent', event => {
            console.log(event.detail);


            var dstFrame = document.getElementById('openPaymenthtmlBodyContent');
            var dstDoc = dstFrame.contentDocument || dstFrame.contentWindow.document;
            dstDoc.write(event.detail);
            dstDoc.close()

            // $('#openPaymenthtmlBodyContent').html(event.detail);
        });
    </script>

    <link rel="stylesheet" type="text/css" href="{{asset('front/admin/files/assets/icon/icofont/css/icofont.css')}}">
    {{-- <style>
        body{
            background: url("{{asset('front/img/BackgroundH4.jpg')}}") fixed !important;
        }
    </style> --}}
    @endsection




        <livewire:booking-steps :data="$data"/>




          <div class="modal fade" id="OrSimilarHidableModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

            <div class="modal-dialog  modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <a style="width: fit-content;" class="close mx-0" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="color: red;cursor: pointer;">&times;</span>
                        </a>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row m-4">
                                {!! Settings::locale(app()->getLocale())->get('terms')!!}
                                {{-- <h4>
                                    ?????????? ?????????????? ???????????? ?????? ?????????????? ???????? ?????????? ???????? ?????? ?????????????????? ?????? ?????????? ?? ???? ?????? ?????? ???????? ?????????????? ???????????????? ?????? ?????????? ?????????? ?????????? ?????????????? ???????????? ?????????? ???? ?????? ?????????? ???????? ?????? ?????????? ???? ?????? ?????? ???????? ?? ?????? ?????? ?????? ???????? ?????????? ???? ?????? ?????????? ?????? ?????????????? ???????? ???????? ???????? ???? ???????????? ???????????? .
                                </h4> --}}
                            {{-- <button class="btn btn-primary" type="submit">??????????</button> --}}
                            </div>
                            <button  class="btn-lg btn-block primary-btn btn-hover btn-curved "data-dismiss="modal" aria-label="Close">??????????</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    @section('js')

        {{-- <script src="https://test-gateway.mastercard.com/checkout/version/59/checkout.js" data-error="errorCallback" data-cancel="cancelCallback" data-complete="completeCallback"></script> --}}
        <script src="https://ap-gateway.mastercard.com/checkout/version/58/checkout.js" data-error="errorCallback" data-cancel="cancelCallback" data-complete="completeCallback"></script>


        <script >
            function YHadd(div) {
                $(div).toggle(1000);
            }
            function favorite(div) {
                $(div).removeClass('far');
                $(div).addClass('fas');
            }

        </script>





            <script >
                    function errorCallback(error) {
                        window.livewire.emit('payment:cancelled')
                        console.log(JSON.stringify(error));
                    }
                    function cancelCallback() {
                        window.livewire.emit('payment:cancelled')
                    }
                    function completeCallback(resultIndicator, sessionVersion) {

                        window.livewire.emit('payment:complete')

                    }
                    function closeIFrame(){
                        $('#openPaymenthtmlBodyContent').remove();
                        console.log('payment Done');
                        window.livewire.emit('payment:complete')

                    }

            // window.addEventListener('sweetalert', event => {
            //     Swal.fire({
            //         title: event.detail.title,
            //         text: event.detail.text,
            //         icon: event.detail.type,
            //         confirmButtonText: '??????????'
            //     })
            // });
            </script>

    @endsection




</x-front-layout>
