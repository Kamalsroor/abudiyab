<template>
    <div class="form-group">
            testt
            testt
            testt
            testt
    </div>
</template>

<script>
    export default {
        props: {
            name: {
                required: true,
                type: String,
            },
            value: {
                required: false,
                default: null
            },
        },
        data() {
            return {
                items: [],
                selected: '',
                selected_values: [],
            }
        },
        mounted() {


        },
        methods: {

        }
    }
</script>


