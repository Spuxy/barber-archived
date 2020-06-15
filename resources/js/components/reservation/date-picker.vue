<template>
<<<<<<< Updated upstream
    <v-row>
        <v-col align="center">
            <v-date-picker
                    @click="picker"
                    color="red"
            ></v-date-picker>
        </v-col>
    </v-row>
=======
    <v-date-picker
            :v-model="picker"
            class="mt-4"
    ></v-date-picker>
>>>>>>> Stashed changes

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
<<<<<<< Updated upstream

=======
                this.date
>>>>>>> Stashed changes
        }
    }
</script>

<style scoped>

</style>
