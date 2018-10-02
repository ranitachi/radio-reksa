<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.bootstrap-template.com/templates/bootstrap-templates/300111718/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Sep 2018 11:44:31 GMT -->
<head>
@yield('title')
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
@include('includes.front.link')
		
<!--[if lt IE 8]>
		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg"border="0"alt=""/></a></div>  
	<![endif]-->    

<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>      
  <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>

<body class="main">
    <div id="main">

        @include('includes.front.navbar')

        <div id="inner">

            @include('includes.front.menu')

        <div id="content">
            <div class="container">
                @yield('konten')
            </div>	
        </div>
        @include('includes.front.footer')
        </div>
    </div>
</body>
</html>
@yield('footscript')
<script>
$(document).ready(function() {
	// camera
	$('#camera_wrap').camera({
		//thumbnails: true
		autoAdvance			: true,		
		mobileAutoAdvance	: true,
		//fx					: 'simpleFade',
		height: '55%',
		hover: false,
		loader: 'none',
		navigation: true,
		navigationHover: false,
		mobileNavHover: false,
		playPause: false,
		pauseOnClick: false,
		pagination			: false,
		time: 7000,
		transPeriod: 1000,
		minHeight: '200px'
	});

	//	carouFredSel
	$('#slider3 .carousel.main ul').carouFredSel({
		auto: {
			timeoutDuration: 8000					
		},
		responsive: true,
		prev: '.prev3',
		next: '.next3',
		width: '100%',
		scroll: {
			items: 1,
			duration: 1000,
			easing: "easeOutExpo"
		},			
		items: {
        	width: '350',
			height: 'variable',	//	optionally resize item-height			  
			visible: {
				min: 1,
				max: 2
			}
		},
		mousewheel: false,
		swipe: {
			onMouse: true,
			onTouch: true
			}
	});
	$(window).bind("resize",updateSizes_vat).bind("load",updateSizes_vat);
	function updateSizes_vat(){		
		$('#slider3 .carousel.main ul').trigger("updateSizes");
	}
	updateSizes_vat();

	

}); //
$(window).load(function() {
	//

}); //
</script>