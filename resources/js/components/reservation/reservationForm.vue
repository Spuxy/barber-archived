<template>
   <v-app id="inspire">
      <v-btn
              v-show="fab"
              fab
              dark
              fixed
              bottom
              right
              color="primary"
              @click="scrollUp()"
      >
         <v-icon>mdi-arrow-up</v-icon>
      </v-btn>
      <v-container class="rcorner primary_color" id="top">
         <v-row no-gutters class="topPadding">
            <v-col xs12 >
               <div class="d-block text-white accent-4 " >
                  <h4 class="font-weight-light display-3 text-center">Reservation</h4>
               </div>
            </v-col>
         </v-row>
         <v-row>
            <v-col xs12>
               <v-form @submit.prevent="send">
                  <v-container>
                     <v-row justify="center">
                        <v-col cols="12" sm="6" md="3">
                           <v-text-field
                                   name="name"
                                   color="white"
                                   label="Name"
                                   id-="name"
                                   v-model="name"
                                   append-icon="mdi-account-circle"
                           ></v-text-field>
                        </v-col>
                     </v-row>
                     <v-row justify="center">
                        <v-col cols="12" sm="6" md="3">
                           <v-text-field
                                   name="lastName"
                                   color="white"
                                   label="Lastname"
                                   id-="lastName"
                                   v-model="lastName"
                                   append-icon="mdi-account-circle"
                           ></v-text-field>
                        </v-col>
                     </v-row>
                     <v-row justify="center">
                        <v-col cols="12" sm="6" md="3">
                           <v-text-field
                                   name="phone"
                                   label="Phone"
                                   color="white"
                                   id-="phone"
                                   v-model="phone"
                                   append-icon="mdi-phone"
                           ></v-text-field>
                        </v-col>
                     </v-row>
                     <v-row justify="center">
                        <v-col cols="12" sm="6" md="3">
                           <v-text-field
                                   name="email"
                                   label="E-mail"
                                   color="white"
                                   :dark="false"
                                   id-="email"
                                   v-model="email"
                                   append-icon="mdi-email"
                           ></v-text-field>
                        </v-col>
                     </v-row>
                     <v-row justify="center">
                        <v-col class="d-flex" cols="12" sm="6" md="3">
                           <v-select
                                   :items="barbers"
                                   v-model="nameOfBarber"
                                   label="Outlined style"
                                   outlined
                           ></v-select>
                        </v-col>
                     </v-row>
                     <div v-waypoint="{ active: true, callback: onWaypoint }"></div>
                     <v-row justify="center" id="myFandy">
                        <v-col md="4"></v-col>
                        <v-col md="4" align="center">
                           <v-date-picker v-model="picker" color="red lighten-1"></v-date-picker>
                        </v-col>
                        <v-col md="4">
                        </v-col>
                     </v-row>
                     <v-row justify="center">
                        <v-col md="4"></v-col>
                        <v-col class="centerRadios" md="4">
                           <picker :date="picker" :reservedDays="reservedDays" v-on:childToParent="onChildClick" @onNumChange="changeHandler"></picker>
                        </v-col>
                        <v-col md="4">
                        </v-col>
                     </v-row>
                     <v-row justify="center">
                        <v-col md="4"></v-col>
                        <v-col cols="12" sm="5" md="4" align="center">
                           <v-btn class="cyan" type="submit" :disabled="!formIsValid">
                              Reserve my haircut !  <v-progress-circular :indeterminate="isSending" v-show="this.working!==false"></v-progress-circular>
                              <v-icon>mdi-clipboard-tick-outline</v-icon>
                           </v-btn>
                        </v-col>
                        <v-col md="4"></v-col>
                     </v-row>
                  </v-container>
               {{reservedDayOfBarber}}
               </v-form>
            </v-col>
         </v-row>
      </v-container>
   </v-app>
</template>

<script>
   import picker from "./picker";
   import datePicker from "./date-picker"
   import jump from "jump.js";
    export default {
       components: {
          'picker': picker,
          'datePicker': datePicker
       },

       data(){
          return {
             picker: new Date().toISOString().substr(0, 10),
               barbers: [],
               time:'',
             fab:'',
             barber:'',
             nameOfBarber:'',
               johnReservedDays:[],
               filipReservedDays:[],
               date: '',
               name: '',
               lastName: '',
               phone: '',
               email: '',
             working: false,
               reservedDays: [],
          }
       },
        mounted() {
           axios.get('/get-barbers').then(response => {
              response.data.forEach((item) =>{
                  this.barbers.push(item.firstname)
              })
           })
           axios.get('/reserved-days-john').then(response=>{
              this.johnReservedDays = response.data
              console.log(response.data)
              this.johnReservedDays.barber = 'John'
           })
           axios.get('/reserved-days-filip').then(response=>{
              this.filipReservedDays = response.data
              console.log(response.data)
              this.filipReservedDays.barber = 'Filip'
           })
              // axios.get('/get-reserved-days').then(response => {
              //    this.reservedDays = response.data
              // })

        },
       methods: {
          onWaypoint ({ going, direction }) {
             // going: in, out
             // direction: top, right, bottom, left
             if (going === this.$waypointMap.GOING_IN) {
                console.log('jdu dovnitr')
               this.fab = false
             } else {
                console.log('jdu ven')
                this.fab = true
             }
             if(direction === this.$waypointMap.DIRECTION_BOTTOM){
                this.fab = false
             }
          },
          changeHandler(value) {
             this.time = value
          },
          onChildClick(dateUserWants){
            this.date = dateUserWants
          },
          showMenu(){
            console.log('wtf')
          },
          scrollUp(){
             console.log('mrd')
             const target = document.getElementById('top')
             console.log(target,'mrd')
             jump(target,{
                offset: -300
             })
          },
          send(){
             if (!this.formIsValid){
                return
             }
             this.working = true
             axios.post('/reservation/reserveDate',{
                name: this.name,
                lastName: this.lastName,
                phone: this.phone,
                from: this.time,
                email: this.email,
                day: this.picker,
                barber_id: this.nameOfBarber
             })
                     .then(response =>{
                        this.working = false
                        window.location.href = '/'
                     })
          }
       },
       computed:{
          reservedDayOfBarber(){
             switch(this.nameOfBarber) {
                case 'Filip':
                   this.reservedDays = this.filipReservedDays
                   break;
                case 'John':
                   this.reservedDays = this.johnReservedDays
                   break;
             }
          },
          isSending() {
             return this.working
          },
          formIsValid() {
             return this.name !== '' && this.lastName !== '' && this.phone !== '' && this.email !== '' && this.picker !== '' && this.time !== ''
          }
       }
    }
</script>
<style>
   .primary_color{
      background-color: rgb(0, 209, 178);
   }
   .rcorner{
      border-radius: 25px
   }
   .centerRadios{
      display: flex;
      flex-direction: column;
      align-items: center;
   }
   .topPadding{
      padding-top: 20px;
   }
   .theme--light.v-input:not(.v-input--is-enabled) input{
      color:#fff;
   }
</style>