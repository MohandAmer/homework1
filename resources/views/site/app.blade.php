
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>themelight @yield('title','themelight_SITE')</title>
		
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- google fonts -->

		<!-- include style -->
		@include('site.partials.style')

	</head>
	<body id="top">
	
	<!-- include header -->
    @include('site.partials.header')


	<div class="wrapper">
        <!-- include banner -->
        @include('site.partials.banner')
          
        @yield('content')

        <!-- include features -->
        @include('site.partials.features')
	
        <!-- include counter -->
        @include('site.partials.counter')      

		<!-- include portfolio -->
        @include('site.partials.portfolio')
	
        <!-- include play-video -->
        @include('site.partials.play-video')
		
        <!-- include team -->
        @include('site.partials.team')

        <!-- include pricing-table -->
        @include('site.partials.pricing-table')
		
		<!-- include blog -->
        @include('site.partials.blog')

		<!-- include testimonial -->
        @include('site.partials.testimonial')

        <!-- include client-logo -->
        @include('site.partials.client-logo')
		
		<!-- include contact-form -->
        @include('site.partials.contact-form')
		
        <!-- include footer -->
        @include('site.partials.footer')
	
	</div>

      <!-- include footer -->
      @include('site.partials.footer')
		<!-- load Js -->
	  <!-- include script -->
      @include('site.partials.script')
	</body>
</html>