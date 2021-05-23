
<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']" >
    <div class="message-email">
        <div class="jumbotron">
            <h1 class="display-4">تحقق من عنوان بريدك الإلكتروني!</h1>
            <p class="lead">يرجى الذهاب إلى البريد الإلكتروني وتفعيل البريد الإلكتروني الخاص بك.</p>
            <hr class="my-4">
            <p>إذا لم تتلق الرسالة الإلكترونية، فاضغط علي طلب رسالة أخرى.</p>
            {{-- <a class="btn btn-primary btn-lg" href="#" role="button">طلب رسالة أخرى</a> --}}
            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">طلب رسالة أخرى</button>.
            </form>
        </div>
    </div>
 @push('js')
    <script>
        $(function() {
            let mainNavbar = () => document.querySelector('.main-navbar').style.backgroundImage = 'linear-gradient(91deg, rgb(63, 74, 134) 15%, rgba(127, 137, 192, 0.73) 50%, rgb(63, 74, 134) 85%)';
            mainNavbar();
            window.onscroll = mainNavbar;
        });
    </script>
@endpush
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
</x-front-layout>

