<template>
    <v-date-picker
            :v-model="picker"
            class="mt-4"
    ></v-date-picker>

</template>

<script>
    export default {
        name: "date-picker",
        data(){
            return{
                picker: new Date().toISOString().substr(0, 10),
            }
        },
        mounted(){
                this.date
        }
    }
</script>

<style scoped>

</style>
