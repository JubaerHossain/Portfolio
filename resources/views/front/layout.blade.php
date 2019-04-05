<!DOCTYPE html>
<html>
  <head>
   @include('front.inc.head')
  </head>
  <body>
    @include('front.inc.header')
    <!-- Intro Image-->
    @yield('content')

    @include('front.inc.footer')

    <!-- JavaScript files-->
   @include('front.inc.js')
  </body>
</html>
