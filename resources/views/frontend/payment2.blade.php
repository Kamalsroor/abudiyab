<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']">

    <section class="payment2">
        <div class="payment2_content">
            <img src="{{ asset('front/img/access.png') }}" alt="">
            <h1>تم الدفع بنجاح</h1>
            <p>و سيتم الرد عليك في اقرب وقت ممكن<p>
        </div>
    </section>

    @push('js')
    <script>
        parent.closeIFrame();
    </script>
    @endpush

</x-front-layout>
