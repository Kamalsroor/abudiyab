<div class="container">

    <div class="row justify-content-center px-0 mx-0 car-model__heading" >
       @foreach ($cars as $car)
            <div class="car-model__item py-2" data-id="{{$car->id}}">
                <p class=" text-center">{{$car->name}}</p>
            </div>    
       @endforeach
    </div>


    {{-- <script>
        document.addEventListener('livewire:load', function () {
            console.log("loginsss");

        })
    </script> --}}



</div>
