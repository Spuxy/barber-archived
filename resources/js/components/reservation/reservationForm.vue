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
                           {{barbersLooped}}
                        </v-col>
                     </v-row>
                     <v-row justify="center">
                        <v-col cols="3" sm="4" md="2">
                           <date-picker></date-picker>
                           <picker :selectedBarber="barbersLooped" :filipReservedDays="filipReservedDays" :johnReservedDays="johnReservedDays" :reservedDays="reservedDays" v-on:childToParent="onChildClick"></picker>
                        </v-col>
                     </v-row>
                     <v-row justify="center">
                        <v-col cols="7" sm="5" md="1">
                           <v-btn class="cyan" type="submit" :disabled="!formIsValid">Reserve my haircut !  <v-progress-circular :indeterminate="idk" v-show="this.bool!==false"></v-progress-circular></v-btn>
                        </v-col>
                     </v-row>
                  </v-container>
               </v-form>
            </v-col>
         </v-row>
      </v-container>
   </v-app>
</template>

<script>
   import picker from "./picker";
   import datePicker from "./date-picker";
    export default {
       components: {
          'picker': picker,
          'datePicker': datePicker
       },
       data(){
          return {
               barbers: [],
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
              axios.get('/get-reserved-days').then(response => {
                 this.reservedDays = response.data
              })

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
                from: this.date,
                email: this.email
             })
                     .then(response =>{
                        this.bool = false
                        window.location.href = '/'
                     })
          }
       },
       computed:{
            barbersLooped(){
               return this.wat
            },
            idk(){
               return this.bool
            },
            formIsValid(){
               return this.name !== '' && this.lastName !== '' && this.phone !== '' && this.email !== '' && this.date !== ''
            }
       }
    }
</script>
