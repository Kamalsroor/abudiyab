<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']">






@section('js')


<script type="text/javascript">




    function errorCallback(error) {
          console.log(JSON.stringify(error));
    }
    function cancelCallback() {
          console.log('Payment cancelled');
          alert('Payment cancelled or failed, Please review and try again');
    }
    function completeCallback(resultIndicator, sessionVersion) {
        console.log(resultIndicator);
        console.log(sessionVersion);
        $('form#registerationForm').submit();
    }
</script>


{!! $js !!}


@endsection




</x-front-layout>
