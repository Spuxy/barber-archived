<template>
    <v-row>
        {{reservedDaysLoop}}
        <v-time-picker     class="mt-3"
                           scrollable
                           v-model="picker"
                           :allowed-minutes="allowedMinutes" @click:minute="emitToParent"></v-time-picker>
        <v-col>
            <v-row v-for="day in worksDays" :key="day.id">
                    {{day}}
            </v-row>
        </v-col>
    </v-row>
</template>

<script>
    export default {
        name: "picker",
        props: [
            'reservedDays',
            'selectedBarber',
            'johnReservedDays',
            'filipReservedDays',
        ],
        data() {
            return{
                allowedTimes: {
                    hours: ["13:00"],
                    minutes: []
                },
                picker:'12:00',
                reservedDaysFrom: [],
                workday:[],
                test:[],
                filteredDays:[],
                worksDays:
                    [
                    {time:'08:00:00', reserved:false},
                    {time:'08:30:00', reserved:false},
                    {time:'09:00:00', reserved:false},
                    {time:'09:30:00', reserved:false},
                    {time:'10:00:00', reserved:false},
                    {time:'10:30:00', reserved:false},
                    {time:'11:00:00', reserved:false},
                    {time:'11:30:00', reserved:false},
                    {time:'12:00:00', reserved:false},
                    {time:'12:30:00', reserved:false},
                    {time:'13:00:00', reserved:false},
                    {time:'13:30:00', reserved:false},
                    {time:'14:00:00', reserved:false},
                    {time:'14:30:00', reserved:false},
                    {time:'15:00:00', reserved:false},
                    {time:'15:30:00', reserved:false},
                    ],
                ww:
                    [
                    {time:'08:00:00', reserved:false},
                    {time:'08:30:00', reserved:false},
                    {time:'09:00:00', reserved:false},
                    {time:'09:30:00', reserved:false},
                    {time:'10:00:00', reserved:false},
                    {time:'10:30:00', reserved:false},
                    {time:'11:00:00', reserved:false},
                    {time:'11:30:00', reserved:false},
                    {time:'12:00:00', reserved:false},
                    {time:'12:30:00', reserved:false},
                    {time:'13:00:00', reserved:false},
                    {time:'13:30:00', reserved:false},
                    {time:'14:00:00', reserved:false},
                    {time:'14:30:00', reserved:false},
                    {time:'15:00:00', reserved:false},
                    {time:'15:30:00', reserved:false},
                    ],
            }
        },
        methods:{
            allowedMinutes: m => m % 30 === 0,
            emitToParent (event) {
                this.$emit('childToParent', this.picker)
            }
        },
        computed:{
            reservedDaysLoop(){

                //celou dobu kvuli druhe podmince
                var array
                if (this.selectedBarber === this.johnReservedDays.barber){
                    array = this.johnReservedDays
                } else {
                    array = this.filipReservedDays
                }

                array.forEach((item,index) => {
                     for (index = 0; index < this.worksDays.length; index++){
                         if (item.from === this.worksDays[index].time){
                             this.worksDays[index].reserved = 'true'}
                         // } else {
                         //     this.worksDays[index].reserved = false
                         // }
                     }
                 })
                this.filteredDays = this.ww
            }
        }
    }
</script>
