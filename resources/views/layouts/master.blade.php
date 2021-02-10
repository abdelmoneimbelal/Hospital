
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    @include('layouts.head-css')


<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

    <!-- Preloader -->
	<div class="page-wrapper">

		<div class="page-wrapper rtl">
			
		
		<div class="preloader"></div>

		@include('layouts.main-header')
	
		<!-- End Main Header -->
		
		<!-- Main Slider Three -->
		
		@include('layouts.main-sidebar')
	
	
		<!-- End Main Slider -->
		
	
	
		@yield('content')
	

		<!--Main Footer-->
	
	

	

		<div class="preloader"></div>

	
		<!--Main Footer-->
	
		@include('layouts.main-footer')

	</div>

	
<!--End pagewrapper-->


<!--Scroll to top-->
@include('layouts.scroll-top')



@include('layouts.footer-js')

</body>
</html>