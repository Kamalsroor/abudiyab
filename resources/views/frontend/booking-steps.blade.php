<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']">

    @section('styles')

    <link rel="stylesheet" type="text/css" href="{{asset('front/admin/files/assets/icon/icofont/css/icofont.css')}}">
    <style>
        body{
            background: url("{{asset('front/img/BackgroundH4.jpg')}}") fixed !important;
        }
    </style>
    @endsection




        <livewire:booking-steps :data="$data"/>



    @section('js')

        {{-- <script src="https://test-gateway.mastercard.com/checkout/version/59/checkout.js" data-error="errorCallback" data-cancel="cancelCallback" data-complete="completeCallback"></script> --}}
        <script src="https://ap-gateway.mastercard.com/checkout/version/58/checkout.js" data-error="errorCallback" data-cancel="cancelCallback" data-complete="completeCallback"></script>


        <script type="text/javascript" src="{{asset('front/admin/files/bower_components/switchery/dist/switchery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/admin/files/assets/pages/advance-elements/swithces.js')}}"></script>
        <script >
            function YHadd(div) {
                $(div).toggle(1000);
            }
            function favorite(div) {
                $(div).removeClass('far');
                $(div).addClass('fas');
            }
        </script>



        <script>
            window.addEventListener('say-goodbye', event => {
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


                        // console.log(resultIndicator);
                        // console.log(sessionVersion);
                        // alert('Payment complete , Please review and try again');
                    }


            </script>


        {{-- <script type="text/javascript">
                $(window).on("load", function() {
                    Checkout.showLightbox();});


                Checkout.configure({
                    merchant: 'TEST3000000721',
                    order: {
                        amount: function() {
                            return '3843';
                        }
                        ,currency: 'SAR'
                        ,description: 'Order Number: 4'
                        ,id: '4'
                    },
                    session: {
                        id: 'SESSION0002983939617F4559172N36'
                    },
                    interaction: {
                        merchant: {
                            name: 'test',
                            address: {
                                line1: 'tetst'
                            },
                            email  : 'kamal.s.sroor@gmail.com',
                            phone  : '01012316954',
                            logo   : 'https://abudiyab.test/'
                        },
                        locale : 'en_US',
                        theme : 'default',
                    }
                });
        </script> --}}




    @endsection

</x-front-layout>
