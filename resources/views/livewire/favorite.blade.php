<div>
    <div class="favorite-page_center_cars">
        @isset($cars)
            @forelse ($cars as $car)
                            <div class="favorite-page_center_cars_car">
                                <div class="favorite-page_center_cars_car_img">
                                    <img src="{{$car->getFirstMediaUrl()}}" alt="{{$car->name}}">
                                </div>
                                <div class="favorite-page_center_cars_car_content">
                                    <div class="favorite-page_center_cars_car_content_top">
                                        <div>
                                            <h3>{{$car->name}}</h3>
                                            <p class="text-right">{{$car->category?$car->category->name:'-'}}</p>
                                        </div>
                                        <div>
                                            <p>في اليوم</p>
                                            <h1><i class="icofont icofont-cur-riyal"></i>{{$car->price1}}</h1>
                                        </div>
                                    </div>
                                    <div class="favorite-page_center_cars_car_content_bottom">
                                        <div>
                                            <p>5 مقاعد | 4 أبواب | 2 الأمتعة</p>
                                            <p>مكيف | ناقل حركة أوتوماتيكي</p>
                                        </div>
                                        <div>
                                            <button onclick="openBookingModel({{$car->id}})" class="primary-btn booking">حجز</button>
                                            <button wire:click='deleteFromFavorite({{$car->id}})' class="removal">ازاله</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @empty
            @endforelse
        @endisset

    </div>
@push('scripts')
    <script>
        document.addEventListener('livewire:load', function () {
            var Login = @this.isLogin;
            if (!Login) {
                window.livewire.emit('checkLogin');
            }

        })
    </script>
@endpush

</div>
