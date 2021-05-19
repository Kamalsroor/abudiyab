<template>
<div>
    <section class="branch-page_map">
        <div class="branch-page_map_input-container">
                <div class="branch-page_map_input-container_input-content">
                    <div class="branch-page_map_input-container_input-content_head">
                        <div>الفروع الرئيسية</div>
                    </div>
                    <form action="#" class="branch-page_map_input-container_input-content_form">
                        <div class="branch-page_map_input-container_input-content_form_input">
                            <label>البحث بإسم المدينة</label>
                            <select v-model="filterByRegion">
                                <option value="all">جميع المدن</option>
                                <option :value="region"  v-for="region in regions">{{region.city}}</option>
                            </select>
                        </div>
                        <div class="branch-page_map_input-container_input-content_form_input">
                            <label>البحث بإسم الفرع</label>
                            <select >
                                    <option value="all">جميع الفروع</option>
                                    <option :value="branch"  v-for="branch in allBranches">{{branch.name}}</option>
                            </select>
                        </div>
                    </form>
                </div>
        </div>
        <div class="branch-page_map_branches-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5126.320266708056!2d46.71794949593214!3d24.697482479312246!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4c842f5512d0930a!2sAbudiyab%20Head%20Office!5e0!3m2!1sen!2sus!4v1619855611423!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>


    <section class="branch-page_center">
            <div class="branch-page_center_head">
                <h2>الوصول الي فروعنه <i class="fas fa-bars fa-bars-branch"></i></h2>
                <div class="branch-page_center_head_regions">
                    <div class="branch branch-regoin"  v-on:click="switchRegion($event)" v-for="region in regions" data-id="1">
                        <p  :id='region.id'>{{region.name}}</p>
                    </div>
                </div>
            </div>




            <div class="branch-page_center_branches">
                <div class="branch-page_center_branches_content">
                    <div class="branch-page_center_branches_content_branch" v-for="branch in allBranches">
                        <h3>{{branch.name}}</h3>
                        <p>{{branch.region}}</p>
                        <h4>{{branch.address}}</h4>
                        <div v-if="branch.work_time != null  && branch.work_time.sat.allday != 1">
                            <p class="so">من السبت الي الخميس</p>
                            <div class="branch-page_center_branches_content_branch_detailing">
                                <p>من الساعه {{branch.work_time != null  ?  branch.work_time.alldays.morning.timeopen: ''  }}  الي {{branch.work_time != null  ?  branch.work_time.alldays.morning.timeclose:  ''}} </p>
                                <p v-if="branch.work_time.alldays.period == 1">|</p>
                                <p v-if="branch.work_time.alldays.period == 1">من الساعه {{branch.work_time != null  ?  branch.work_time.alldays.afternone.timeopen: ''  }}  الي {{branch.work_time != null  ?  branch.work_time.alldays.afternone.timeclose: ''  }} </p>
                            </div>
                            <p class="so">الجمعه</p>
                            <div class="branch-page_center_branches_content_branch_detailing">
                                <p>من الساعه {{branch.work_time != null  ?  branch.work_time.fri.morning.timeopen: ''  }}  الي {{branch.work_time != null  ?  branch.work_time.fri.morning.timeclose:  ''}} </p>
                                <p v-if="branch.work_time.fri.period == 1">|</p>
                                <p v-if="branch.work_time.fri.period == 1">من الساعه {{branch.work_time != null  ?  branch.work_time.fri.afternone.timeopen: ''  }}  الي {{branch.work_time != null  ?  branch.work_time.fri.afternone.timeclose: ''  }} </p>
                            </div>
                        </div>
                        <div v-else>
                            <p class="so">من السبت الي الجمعه</p>
                            <p class="so">24 ساعه</p>
                        </div>
                        <div class="branch-page_center_branches_content_branch_buttons">
                            <a href="" class="location-mobile"><i class="fa fa-map-marker"></i></a>
                            <a href="" class="telephone-number-mobile"><i class="fa fa-phone"></i></a>
                            <a href="" class="location">الموقع</a>
                            <a href="" class="telephone-number">{{branch.phone}}</a>
                        </div>
                    </div>

                </div>
            </div>
    </section>
</div>
</template>

<script>
    export default {
        props: {
            branchUrl: {
                required: true,
                type: String,
            },
            regionUrl: {
                required: true,
                type: String,
            },

        },
        data() {
            return {
                regions: [],
                branchs: [],
                allBranches:[],
                filterByRegion: '',
                oldParent:{},
            }
        },
        mounted() {
         axios.get(this.branchUrl ,{
            params: {
                all: 'all'
            }
            })
            .then(response => {
                this.branchs = response.data.data;
                this.allBranches=this.branchs;

                let root=this;

                this.allBranches.forEach(function (branch, i) {
                    if(branch.work_time != null)
                    {
                        root.allBranches[i].work_time.alldays.morning.timeopen=root.formatAMPM(branch.work_time.alldays.morning.timeopen,i);
                        root.allBranches[i].work_time.alldays.morning.timeclose=root.formatAMPM(branch.work_time.alldays.morning.timeclose,i);
                        root.allBranches[i].work_time.alldays.afternone.timeopen=root.formatAMPM(branch.work_time.alldays.afternone.timeopen,i);
                        root.allBranches[i].work_time.alldays.afternone.timeclose=root.formatAMPM(branch.work_time.alldays.afternone.timeclose,i);
                        root.allBranches[i].work_time.fri.morning.timeopen=root.formatAMPM(branch.work_time.fri.morning.timeopen,i);
                        root.allBranches[i].work_time.fri.morning.timeclose=root.formatAMPM(branch.work_time.fri.morning.timeclose,i);
                        root.allBranches[i].work_time.fri.afternone.timeopen=root.formatAMPM(branch.work_time.fri.afternone.timeopen,i);
                        root.allBranches[i].work_time.fri.afternone.timeclose=root.formatAMPM(branch.work_time.fri.afternone.timeclose,i);
                    }
                });

            });
         axios.get(this.regionUrl)
            .then(response => {
                this.regions = response.data.data;
            });

        },
        methods: {
            switchRegion: function(e) {
                var allElements=document.getElementsByClassName('branch-regoin');
                var arr = Array.from(allElements);
                arr.map(element =>{
                    element.style.background='#999'
                })
                e.target.parentElement.style.background='#11118b';
                this.allBranches=this.branchs;

                    this.allBranches=this.branchs.filter(element => {
                        return element.region_id == e.target.id;
                    });
            },
            formatAMPM: function(time,i) {
                let localtime=parseFloat(time);
                if (time != null) {
                    let timearr=time.split(':');
                    if(timearr[0] > '12')
                    {

                        timearr[0]-=12;
                        timearr[1]+='pm';
                    }
                    else{
                        timearr[1]+='am';
                    }
                return timearr.join(':');
                }

            }
        },
        watch:{
            filterByRegion: function(){
                this.allBranches=this.branchs;
                if (this.filterByRegion != "all") {
                    this.allBranches=this.branchs.filter(element => {
                        return element.region_id == this.filterByRegion.id;
                    });
                }
            }
        }

    }

</script>


