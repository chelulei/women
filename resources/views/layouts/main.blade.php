<!doctype html>
<html class="no-js" lang="zxx">

 @include('partials._head')
   <body>
    <header>
        <!-- Header Start -->
         @include('partials._header')
        <!-- Header End -->
    </header>
    <main>

    @yield('content')

    </main>
   <footer>
       <!-- Footer Start-->
      @include('partials._footer')
       <!-- Footer End-->
   </footer>

	@include('partials._scripts')
    </body>
</html>