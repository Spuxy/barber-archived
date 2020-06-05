<template>
    <v-row>
        <v-col align="center">
            <v-date-picker
                    :v-model="picker"
                    color="red"
            ></v-date-picker>
        </v-col>
    </v-row>

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
