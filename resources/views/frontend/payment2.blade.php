<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']">

    <section class="payment2">

        <div class="payment2_content access">
            <img src="{{ asset('front/img/access.png') }}" alt="">
            <h1>تم الدفع بنجاح</h1>
            <p>وسيتم الرد عليك في أقرب وقت ممكن<p>
        </div>

        <div class="payment2_content error">
            <img src="{{ asset('front/img/error.webp') }}" alt="">
            <h1>فشلت عملية الدفع</h1>
            <p>من فضلك أعد المحاولة مرة أخرى<p>
        </div>

    </section>

    @push('js')
    <script>
        parent.closeIFrame();
    </script>
    @endpush

</x-front-layout>
