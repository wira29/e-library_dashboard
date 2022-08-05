<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->

<!-- Mirrored from exprostudio.com/html/book_library/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jul 2022 08:36:37 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BootStrap HTML5 CSS3 Theme</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="{{ asset('assets') }}/front/apple-touch-icon.png">
	<link rel="stylesheet" href="{{ asset('assets') }}/front/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('assets') }}/front/css/normalize.css">
	<link rel="stylesheet" href="{{ asset('assets') }}/front/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('assets') }}/front/css/icomoon.css">
	<link rel="stylesheet" href="{{ asset('assets') }}/front/css/jquery-ui.css">
	<link rel="stylesheet" href="{{ asset('assets') }}/front/css/owl.carousel.css">
	<link rel="stylesheet" href="{{ asset('assets') }}/front/css/transitions.css">
	<link rel="stylesheet" href="{{ asset('assets') }}/front/css/main.css">
	<link rel="stylesheet" href="{{ asset('assets') }}/front/css/color.css">
	<link rel="stylesheet" href="{{ asset('assets') }}/front/css/responsive.css">
	<script src="{{ asset('assets') }}/front/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body class="tg-home tg-homeone">
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!--************************************
			Wrapper Start
	*************************************-->
	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
		<!--************************************
				Header Start
		*************************************-->
		@include('layouts.front.header')
		<!--************************************
				Header End
		*************************************-->
		@yield('content')
		<!--************************************
				Footer Start
		*************************************-->
		@include('layouts.front.footer')
		<!--************************************
				Footer End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<script src="{{  asset('assets')  }}/front/js/vendor/jquery-library.js"></script>
	<script src="{{  asset('assets')  }}/front/js/vendor/bootstrap.min.js"></script>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
	<script src="{{  asset('assets')  }}/front/js/owl.carousel.min.js"></script>
	<script src="{{  asset('assets')  }}/front/js/jquery.vide.min.js"></script>
	<script src="{{  asset('assets')  }}/front/js/countdown.js"></script>
	<script src="{{  asset('assets')  }}/front/js/jquery-ui.js"></script>
	<script src="{{  asset('assets')  }}/front/js/parallax.js"></script>
	<script src="{{  asset('assets')  }}/front/js/countTo.js"></script>
	<script src="{{  asset('assets')  }}/front/js/appear.js"></script>
	<script src="{{  asset('assets')  }}/front/js/gmap3.js"></script>
	<script src="{{  asset('assets')  }}/front/js/main.js"></script>
</body>

<!-- Mirrored from exprostudio.com/html/book_library/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jul 2022 08:38:19 GMT -->
</html>