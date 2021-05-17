<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']" >
    @push('js')
    <script>
        parent.closeIFrame();
    </script>
    @endpush

</x-front-layout>
