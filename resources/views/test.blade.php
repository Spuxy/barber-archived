   @section('content')
   <!-- Begin About Me Section -->
   @include('about.index')
      <!-- End About Me Content -->
     
      <!-- Begin Services Content -->
      @include('service.index')
      <!-- End Services Content -->
      <!-- Begin Work Content -->
      @include('galery.index')
      <!-- End Work Content -->
      <!-- Begin Contact Content -->
      @include('contact.index')
      <!-- End Contact Content -->
      <v-btn
                                v-show="fab"
                                fab
                                dark
                                fixed
                                bottom
                                right
                                color="primary"
                                @click="jumpFromMenu('.menu')"
                        >
                            <v-icon>mdi-arrow-up</v-icon>
                        </v-btn>@endsection