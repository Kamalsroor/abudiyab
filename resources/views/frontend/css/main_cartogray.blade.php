@php
    $home_category__conent_xl = 66 * ceil( (count($allCategories) + 1) / 4 ) + 5;
    $home_category__conent_md = 66 * ceil( (count($allCategories) + 1) / 3 ) + 5;
    $home_category__conent_sm = 66 *  (count($allCategories) + 1)   + 5;
@endphp
<style>
    .home-category__conent .active{
        height:{{$home_category__conent_xl}}px
    }
    @media (max-width:992px){
        .home-category__conent .active{
            height:{{ $home_category__conent_md}}px
        }
    }
    @media (max-width:576px){
        .home-category__conent .active{
            height:{{$home_category__conent_sm}}px
        }
    }

</style>
