<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']">

    @section('styles')

    <link rel="stylesheet" type="text/css" href="{{asset('front/admin/files/bower_components/switchery/dist/switchery.min.css')}}">

<link rel="stylesheet" href="{{asset('front/web/css/steps.css')}}" />
    <style>
    .display-none{
        display: none !important;
    }

    .connn {
        text-align: center;
        width: 80%;
        margin: auto;
    }


    .head {
        margin: 15px auto !important;
        text-align: center;
        width: 100% !important;
        text-align: center;
    }

    .bnb {
        position: absolute;
        background: rgb(255, 255, 255, 80%);
        width: 50%;
        height: 100%;
        z-index: -10;
        border-radius: 20px;
        padding-bottom: 0;
    }


    .bnb {
        position: absolute i !important;
        background: rgb(255, 255, 255, 80%) !important;
        width: 98% !important;
        z-index: -10;
        border-radius: 20px !important;
        padding-bottom: 0 !important;
    }

    .bnb {
        width: 98% !important;
    }



    .pro-bar li::after {
        content: "";
        position: absolute;
        width: 100%;
        height: 3px;
        background-color: rgb(0, 0, 0);
        top: 25px;
        right: -50%;
        z-index: -1;
    }

    .pro-bar {
        counter-reset: step;
        padding: 0;
    }

    .pro-bar li {
        list-style: none;
        display: inline-block;
        width: 17%;
        position: relative;
        text-align: center;
        color: rgb(0, 0, 0);
        margin-top: 15px;
        font-weight: bold;
    }

    .pro-bar li::before {
        content: counter(step);
        counter-increment: step;
        width: 50px;
        padding-top: 7px;
        height: 50px;
        line-height: 30px;
        border: 1px solid rgb(2, 2, 2);
        display: block;
        text-align: center;
        margin: 0 auto 10px auto;
        border-radius: 50px;
        background: white;
        color: black;
        padding-bottom: 15px;
        font-size: 40px;
        font-family: 'Brygada 1918', serif;
    }



    .pro-bar li:nth-child(1):before {
        background-color: rgb(1, 1, 82) !important;
        color: white !important;
    }


    .pro-bar li:nth-child(2):before {
        background-color: rgb(1, 1, 82) !important;
        color: white !important;
    }

    .pro-bar li.active::before {
        background-color: rgb(1, 1, 82) !important;
        color: white !important;
    }

.btns .inb {
    display: none;
}


.ac-or-no {
    background: white;
    padding: 20px;
    width: 100%;
    margin: 10px auto;
    text-align: left;
}

.ac-or-no a,
.ac-or-no button {
    border-radius: 45px !important;
    color: #fff;
    border: none;
    font-size: 20px;
    font-weight: 600;
    border-radius: 2px;
    width: 130px;
    height: 40px;
    transition: .4s;
    text-decoration: none;
    padding: 5px 42px;
}



    </style>


 <style>
    .display-none{
        display: none !important;
    }
</style>
    @endsection




        <livewire:booking-steps :data="$data"/>



    @section('js')

        {{-- <script src="https://test-gateway.mastercard.com/checkout/version/59/checkout.js" data-error="errorCallback" data-cancel="cancelCallback" data-complete="completeCallback"></script> --}}
        <script src="https://ap-gateway.mastercard.com/checkout/version/58/checkout.js" data-error="errorCallback" data-cancel="cancelCallback" data-complete="completeCallback"></script>


        <script type="text/javascript" src="{{asset('front/admin/files/bower_components/switchery/dist/switchery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/admin/files/assets/pages/advance-elements/swithces.js')}}"></script>
        <script src="{{asset('front/lnkse/jquery-3.5.1.min.js')}}"></script>
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
