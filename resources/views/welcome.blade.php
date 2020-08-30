<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Showcase - Personal Portfolio One Page Bulma Theme</title>
    <!-- Bulma Version 0.9.0-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
    <script
      src="https://kit.fontawesome.com/2828f7885a.js"
      integrity="sha384-WAsFbnLEQcpCk8lM1UTWesAf5rGTCvb2Y+8LvyjAAcxK1c3s5c0L+SYOgxvc6PWG"
      crossorigin="anonymous"
    ></script>
    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="stylesheet" href="css/showcase.css">
  </head>

  <body>
    <div id="app">
    <template>
  <div v-waypoint="{ active: true, callback: onWaypoint, options: intersectionOptions }"></div>
</template>

    <!-- Begin Scroll Up Button -->
    @include('scroll.button')
    <!-- End Scroll Up Button -->

    <!-- Begin Header -->
   @include('navbar.index')
    <!-- End Header -->

    <!-- Begin Main Content -->
    <div class="main-content">
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
                        </v-btn>
    </div>
    <!-- End Main Content -->

    <!-- Begin Footer -->
    @include('footer.index')
    <!-- End Footer -->
    </div>
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/showcase.js"></script>
    <script src="js/app.js"></script>
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script>
      AOS.init({
        easing: "ease-out",
        duration: 800,
      });
    </script>
  </body>
</html>