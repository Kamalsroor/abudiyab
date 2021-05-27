<template>
    <div class="form-group">
        <label :for="name" v-if="label">{{ label }}</label>
        <div class="text-center">
        <i :class="' fonta-preview-icon fas fa-'+icon_selected.name" style="font-size: 162px;"></i></div>

        <icon-picker v-model="icon"  />
        <input type="hidden" id="icon_selected_name" :name="name+'[name]'" v-model="icon_selected.name"  >
        <input type="hidden" :name="name+'[type]'" v-model="icon_selected.type"  >

    </div>
</template>

<script>
    export default {
        props: {
            name: {
                required: true,
                type: String,
            },
            label: {
                required: false,
                type: String,
            },
            value: {
                required: false,
                default: null
            },
        },
        data() {
            return {
                icon: null,
                icon_selected: {
                    name : null,
                    type : null,
                },
                selected: '',
                selected_values: [],
            }
        },
        mounted() {
            if (this.value) {
                console.log(JSON.parse(this.value));
                this.icon = JSON.parse(this.value);
                this.icon_selected.name = JSON.parse(this.value).name;
                this.icon_selected.type = JSON.parse(this.value).type;
                setTimeout(() => {
                    console.log('logss');
                    $('#download-image').click();
                }, 5000);
            }
        },
        methods: {

        },
        watch:{
            icon: function(){

                if(this.icon != null){
                    this.icon_selected.name = this.icon.name ;
                    this.icon_selected.type = this.icon.type ;

                }else{
                    this.icon_selected.name = null ;
                    this.icon_selected.type = null ;
                }
                $('#download-image').click();
            },

        }
    }
</script>
