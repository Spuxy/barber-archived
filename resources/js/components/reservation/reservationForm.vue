<template>
   <v-app id="inspire">
      <v-container style="background-color: rgb(0, 209, 178)">
         <v-row no-gutters>
            <v-col xs12>
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
                                   label="Name"
                                   id-="name"
                                   v-model="name"
                           ></v-text-field>
                        </v-col>
                     </v-row>
                     <v-row justify="center">
                        <v-col cols="12" sm="6" md="3">
                           <v-text-field
                                   name="lastName"
                                   label="Lastname"
                                   id-="lastName"
                                   v-model="lastName"
                           ></v-text-field>
                        </v-col>
                     </v-row>
                     <v-row justify="center">
                        <v-col cols="12" sm="6" md="3">
                           <v-text-field
                                   name="phone"
                                   label="Phone"
                                   id-="phone"
                                   v-model="phone"
                           ></v-text-field>
                        </v-col>
                     </v-row>
                     <v-row justify="center">
                        <v-col cols="12" sm="6" md="3">
                           <v-text-field
                                   name="email"
                                   label="E-mail"
                                   id-="email"
                                   v-model="email"
                           ></v-text-field>
                        </v-col>
                     </v-row>
                     <v-row justify="center">
                        <v-col class="d-flex" cols="12" sm="6" md="3">
                           <v-select
                                   :items="barbers"
                                   v-model="wat"
                                   label="Outlined style"
                                   outlined
                           ></v-select>
                        </v-col>
                     </v-row>
                     <v-row justify="center">
                        <v-col cols="3" sm="3" md="3">
                           <v-date-picker v-model="picker" color="green lighten-1"></v-date-picker>
<!--                           <picker :selectedBarber="barbersLooped" :filipReservedDays="filipReservedDays" :johnReservedDays="johnReservedDays" :reservedDays="reservedDays" v-on:childToParent="onChildClick"></picker>-->
                        </v-col>
                     </v-row>
                     <v-row justify="center">
                        <v-col cols="3" sm="3" md="3">
                           <v-row v-for="day in reservedDays" :key="day.id">
                              <div v-if="picker == day.day">

                                 <v-radio-group v-model="time" :mandatory="false">
                                    <v-radio color="red" :label="day.time" :value="day.time"></v-radio>
                                 </v-radio-group>
<!--                                 <input v-model="time" type="radio" :value="day.time">{{day.time}}-->
                              </div>
                           </v-row>
                        </v-col>
                     </v-row>
                     {{time}}
                     <v-row justify="center">
                        <v-col cols="7" sm="5" md="1">
                           <v-btn class="cyan" type="submit" :disabled="!formIsValid">Reserve my haircut !  <v-progress-circular :indeterminate="idk" v-show="this.bool!==false"></v-progress-circular></v-btn>
                        </v-col>
                     </v-row>
                  </v-container>
               {{barbe}}
               </v-form>
            </v-col>
         </v-row>

      </v-container>
      <v-container fluid>
         <p>{{ radios || 'null' }}</p>
         <v-radio-group v-model="radios" :mandatory="false">
            <v-radio label="Radio 1" value="radio-1"></v-radio>
            <v-radio label="Radio 2" value="radio-2"></v-radio>
         </v-radio-group>
      </v-container>
   </v-app>

</template>

<script>
   import picker from "./picker";
   import datePicker from "./date-picker"
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
             radios: 'radio-1',
             barber:'',
               wat:'',
               johnReservedDays:[],
               filipReservedDays:[],
               date: '',
               name: '',
               lastName: '',
               phone: '',
               email: '',
               bool: false,
               array: [],
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
              this.johnReservedDays.barber = 'John'
           })
           axios.get('/reserved-days-filip').then(response=>{
              this.filipReservedDays = response.data
              this.filipReservedDays.barber = 'Filip'
           })
              // axios.get('/get-reserved-days').then(response => {
              //    this.reservedDays = response.data
              // })

        },
       methods: {
          onChildClick(dateUserWants){
            this.date = dateUserWants
          },
          send(){
             if (!this.formIsValid){
                return
             }
             this.bool = true
             axios.post('/reservation/reserveDate',{
                name: this.name,
                lastName: this.lastName,
                phone: this.phone,
                from: this.time,
                email: this.email,
                day: this.picker,
                barber: this.wat
             })
                     .then(response =>{
                        this.bool = false
                        // window.location.href = '/'
                     })
          }
       },
       computed:{
          barbe(){
             console.log(this.wat)
             if (this.wat === 'Filip') {
                this.reservedDays = this.filipReservedDays
             }
             if (this.wat === 'John') {
                this.reservedDays = this.johnReservedDays
             }
          },
          idk() {
             return this.bool
          },
          formIsValid() {
             return this.name !== '' && this.lastName !== '' && this.phone !== '' && this.email !== '' && this.picker !== '' && this.time !== ''
          }
       }
    }
</script>
