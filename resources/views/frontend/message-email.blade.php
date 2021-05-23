<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']" >
    <div class="message-email">
        <div class="jumbotron">
            <h1 class="display-4">تحقق من عنوان بريدك الإلكتروني!</h1>
            <p class="lead">يرجى الذهاب إلى البريد الإلكتروني وتفعيل البريد الإلكتروني الخاص بك.</p>
            <hr class="my-4">
            <p>إذا لم تتلق الرسالة الإلكترونية، فاضغط علي طلب رسالة أخرى.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">طلب رسالة أخرى</a>
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
</x-front-layout>
