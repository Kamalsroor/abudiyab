<div class="container">
    <div class="row py-3" >
        <div class="col-4 d-flex align-items-center justify-content-center car-price-section"><p class="before-price m-0" style=" text-decoration: line-through;" ><i class="icofont icofont-cur-riyal"></i>{{isset($car) ? $car->price2 : ""}}</p>
                    <h2 class="after-price"  ><i class="icofont icofont-cur-riyal"></i>{{isset($car) ? $car->price1 : ""}}</h2>
                    <p class="m-0 before-price">يومى</p>
                    <a onclick="openBookingModel({{$car->id}})" class="btn-block primary-btn  btn-hover btn-curved p-2 mt-2">احجز الان</a>
        </div>
        <div class="col-8 d-flex align-items-end justify-content-center">
            <img class="mx-lg-5 mx-md-2 ml-sm-2" style="width: 80%;" src="{{isset($car) ? $car->getFirstMediaUrl() : ""}}" alt="car image" >
        </div>
    </div>



</div>
