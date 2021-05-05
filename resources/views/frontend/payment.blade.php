{{-- <x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']"> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <script src="https://ap-gateway.mastercard.com/checkout/version/58/checkout.js" data-error="errorCallback" data-cancel="cancelCallback" data-complete="completeCallback"></script> --}}
        <script src="https://test-gateway.mastercard.com/checkout/version/59/checkout.js" data-error="errorCallback" data-cancel="cancelCallback" data-complete="completeCallback"></script>

    <script>
            Checkout.configure({
                merchant: "{{$paymentData['merchant']}}",
                order: {
                    amount: function() {
                        return "{{$paymentData['order_amount']}}";
                    },
                    currency: "{{$paymentData['order_currency']}}",
                    description: 'Order Number: 4',
                    id: "{{$paymentData['order_id']}}"
                },
                session: {
                    id: "{{$paymentData['session_id']}}"
                },
                interaction: {
                    merchant: {
                        name: "{{$paymentData['merchant_name']}}",
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
    </script>
    <script >
            function errorCallback(error) {
                // window.livewire.emit('payment:cancelled')
                console.log(JSON.stringify(error));
            }
            function cancelCallback() {
                // window.livewire.emit('payment:cancelled')
            }
            function completeCallback(resultIndicator, sessionVersion) {
                console.log(resultIndicator, sessionVersion);
                // window.livewire.emit('payment:complete')

            }

        // Swal.fire({
        //     title: "يرجي تحديث البيانات الشخصيه",
        //     icon:"error",
        //     confirmButtonText: 'موافق'
        // })
    </script>

</body>
</html>





    {{-- @section('js') --}}






