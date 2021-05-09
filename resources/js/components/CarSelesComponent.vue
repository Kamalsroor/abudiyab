<template>
    <section class="car-sales_center">
        <div class="car-sales_center_content">
            <div class="car-sales_center_content_filter">
                <div class="car-sales_center_content_filter_select">
                    <input type="hidden" v-model='cars'>
                    <select v-model="filterByCarId">
                        <option disabled="" selected="">ابحث بالسيارة</option>
                        <option value="">ابحث بالسيارة</option>
                        <option :value="index" v-for="(carname, index) in cars_select">{{carname}}</option>
                    </select>
                </div>
                <div class="car-sales_center_content_filter_select">
                    <select v-model="filterByModel">
                            <option disabled="" selected="">ابحث بالموديل</option>
                            <option value="">ابحث بالموديل</option>
                                <option :value="model"  v-for="model in models">{{model}}</option>
                    </select>
                </div>
            </div>

            <div class="car-sales_center_content_cars">
                <div class="car-sales_center_content_cars_car" v-for="car in cars">

                    <div class="car-sales_center_content_cars_car_sold" v-if="car.sold">تم البيع</div>

                    <div class="car-sales_center_content_cars_car_img">
                        <img :src="car.car.photo" alt="">
                    </div>
                    <div class="car-sales_center_content_cars_car_name">
                        <h4>{{car.car.name}}</h4>
                    </div>
                    <div class="car-sales_center_content_cars_car_detailing" v-if="car.quantity == 1">
                        <div class="car-sales_center_content_cars_car_detailing_top">
                            <h5> العداد {{car.couter}} كم</h5>
                            <h4>{{car.car.model}}</h4>
                        </div>
                        <div class="car-sales_center_content_cars_car_detailing_center">
                            <div class="car-sales_center_content_cars_car_detailing_center_color">
                                <p> اللون الداخلي <span style="font-weight: 700; color: red;">{{car.color_interior}}</span> </p>
                                <p>|</p>
                                <p> اللون الخارجي <span style="font-weight: 700; color: green;">{{car.color_exterior}}</span></p>
                            </div>
                        </div>
                        <div class="car-sales_center_content_cars_car_detailing_bottom">
                            <p>مكيف | ناقل حركة أوتوماتيكي</p>
                        </div>
                    </div>
                    <div class="car-sales_center_content_cars_car_detailing" v-else>
                        <div class="car-sales_center_content_cars_car_detailing_top">
                            <h5> العداد xxxxxxx كم</h5>
                            <h4>{{car.car.model}}</h4>
                        </div>
                        <div class="car-sales_center_content_cars_car_detailing_center">
                            <div class="car-sales_center_content_cars_car_detailing_center_color">
                                <p> الكميه <span style="font-weight: 700; color: red;">{{car.quantity}}</span> </p>
                            </div>
                        </div>
                        <div class="car-sales_center_content_cars_car_detailing_bottom">
                            <p>مكيف | ناقل حركة أوتوماتيكي</p>
                        </div>
                    </div>


                    <div style="display: none;">{{car.quantity}}</div>
                    <div style="display: none;">{{car.car.id}}</div>
                    <a class="primary-btn car-sales_center_content_cars_car_button buy_car" v-if="!car.sold" :id="car.car.id" >اقتراح سعر</a>

                    <a class="primary-btn car-sales_center_content_cars_car_button_sold" v-if="car.sold">تم البيع</a>
                </div>

            </div>
        </div>


    </section>




</template>

<script>
    export default {
        props: {
            remoteUrl: {
                required: true,
                type: String,
            },

        },
        data() {
            return {
                cars: [],
                models: [],
                cars_select: [],
                filterByCarId: '',
                allcars: [],
                filterByModel: ''
            }
        },
        mounted() {
         axios.get(this.remoteUrl)
            .then(response => {
                this.cars = response.data.data;
                this.models=[];
                this.cars_select={};
                this.cars.forEach(element => {
                    if(!this.models.includes(element.car.model))
                    {
                        this.models.push(element.car.model);
                    }
                    this.cars_select[element.car.id] = element.car.name;
                });
            });

        },
        methods: {
            filterCar: function() {
                // console.log(this.cars);
            }
        },
        watch:{
            filterByCarId: function(){
                if (this.allcars.length) {
                    this.cars=this.allcars
                }else{
                    this.allcars=this.cars
                }
                this.cars.map(element =>{
                    if(element.car.id == this.filterByCarId)
                    {
                        this.cars=[element];
                    }
                })
            },
            filterByModel: function(){

                if (this.filterByModel != "") {
                    if (!this.allcars.length) {
                        this.allcars=this.cars
                    }
                    console.log(this.cars);
                    this.cars = [];
                    this.allcars.map(element =>{
                        if(element.car.model == this.filterByModel)
                        {
                            this.cars.push(element);
                        }
                    })
                }else{
                    this.cars = this.allcars;
                }
            },
        }
    }

</script>


