@extends('welcome')
@section('content')
    <div class="p-b-xl">
        @include('navbar.navbar')
    </div>
   <div class="container p-t-xl">
       <div id="reservation">
           <div>
               <reservation-form></reservation-form>
           </div>
       </div>
   </div>
    <script src="js/reservation/app.js"></script>

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.timekit.io/booking-js/v2/booking.min.js" defer></script>
@endsection
