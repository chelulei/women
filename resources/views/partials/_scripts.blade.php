<!-- JS here -->

		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{asset('/js/vendor/modernizr-3.5.0.min.js')}}"></script>

		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{asset('/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('/js/popper.min.js')}}"></script>
        <script src="{{asset('/js/bootstrap.min.js')}}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{asset('/js/jquery.slicknav.min.js')}}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{asset('/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('/js/slick.min.js')}}"></script>
        <!-- Date Picker -->
        <script src="{{asset('/js/gijgo.min.js')}}"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="{{asset('/js/wow.min.js')}}"></script>
		<script src="{{asset('/js/animated.headline.js')}}"></script>
        <script src="{{asset('/js/jquery.magnific-popup.js')}}"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="{{asset('/js/jquery.scrollUp.min.js')}}"></script>
        <script src="{{asset('/js/jquery.nice-select.min.js')}}"></script>
		<script src="{{asset('/js/jquery.sticky.js')}}"></script>

        <!-- contact js -->
        <script src="{{asset('/js/contact.js')}}"></script>
        <script src="{{asset('/js/jquery.form.js')}}"></script>
        <script src="{{asset('/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('/js/mail-script.js')}}"></script>
        <script src="{{asset('/js/jquery.ajaxchimp.min.js')}}"></script>

		<!-- Jquery Plugins, main Jquery -->
        <script src="{{asset('/js/plugins.js')}}"></script>
        <script src="{{asset('/js/main.js')}}"></script>
 <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            disableDaysOfWeek: [0, 0],
        //     icons: {
        //      rightIcon: '<span class="fa fa-caret-down"></span>'
        //  }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

        });
        var timepicker = $('#timepicker').timepicker({
         format: 'HH.MM'
     });
    </script>