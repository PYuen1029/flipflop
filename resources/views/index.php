<!DOCTYPE html>
<html ng-app="FlipFlopApp">
  <head lang="en">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>FlipFlops - NobisNews</title>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,400italic">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,400italic,300italic,300,500,500italic,700,900">

	<!-- styles -->
	<link rel="stylesheet" href="/bower_components/fontawesome/css/font-awesome.css"/>
	<link rel="stylesheet" href="/bower_components/animate.css/animate.css"/>
	<link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" href="css/hover-min.css">
	<link rel="stylesheet" href="css/templatemo-style.css">
	<link rel="stylesheet" href="css/fancy-list-items.css">

	<link rel="stylesheet" href="/css/main.css"/>
	<link rel="stylesheet" href="/css/modalDialog.css"/>
	<link rel="stylesheet" href="/css/submit.css"/>
	<link rel="stylesheet" href="css/templatemo-misc.css">
	<link rel="stylesheet" href="css/politicians.css">
	
	<script src="/bower_components/templatemo_423_artcore/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>

  </head>
  <body>
	<div class="container-fluid">
		<section id="pageloader">
			<div class="loader-item fa fa-spin colored-border"></div>
		</section> <!-- /#pageloader -->
		<header class="site-header container-fluid">
			<div class="main-header">
				<div class="row">
					<div class="logo col-md-3 col-sm 6 col-xs 8">
						<h1><a href="#!/"><em>Flip</em>Flop</a></h1>
						<span>A NobisNews Project</span>
					</div>
					<div class="menu-wrapper col-md-9 col-sm-6 col-xs-4">
						<a href="#" class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></a>
						<ul class="sf-menu hidden-xs hidden-sm">
							<li><a href="#!/">Home</a></li>
							<li><a href="#!/submit">Submit</a></li>
							<li><a href="#!/about">About</a></li>
							<li><a href="#!/politicians">Politicians</a></li>
						</ul>
					</div> <!-- /.menu-wrapper -->
				</div> <!-- /.row -->
			</div> <!-- /.main-header -->
			<div id="responsive-menu">
				<ul class="sf-menu hidden-xs hidden-sm">
					<li><a href="#!/">Home</a></li>
					<li><a href="#!/submit">Submit</a></li>
					<li><a href="#!/about">About</a></li>
				</ul>
			</div>
		</header> <!-- /.site-header -->
		<!-- views -->
		<div class="main__view-container content-wrapper">
			<div class="inner-container container">
				<div class="main__view" ng-view>
				</div>
			</div>
		</div>
	</div>
	<!-- scripts -->
	<script src="https://www.youtube.com/iframe_api"></script>
	<script src="/bower_components/jquery/dist/jquery.js"></script>
	<script src="/bower_components/bootstrap/dist/js/bootstrap.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-sanitize/1.5.8/angular-sanitize.js"></script>
	<script src="/bower_components/templatemo_423_artcore/js/main.js" type="text/javascript"></script>
	<script src="/bower_components/templatemo_423_artcore/js/plugins.js" type="text/javascript"></script>
	<script src="/build/js/bundled.js" type="text/javascript"></script>
	<!-- Preloader -->
	<script type="text/javascript">
		//<![CDATA[
		// $(window).load(function() { 
		// 	$('.loader-item').fadeOut(); 
		// 	$('#pageloader').delay(1000).fadeOut('slow');
		// 	$('body').delay(1000).css({'overflow-y':'visible'});
		// });
		//]]>
	</script>
  </body>
</html>