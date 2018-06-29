@extends('layout')
@section('title', '寫真影像')
@section('require')
    	<link rel="stylesheet" type="text/css" href="banner/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="banner/css/slicebox.css" />
		<link rel="stylesheet" type="text/css" href="banner/css/custom.css" />
		<script type="text/javascript" src="banner/js/modernizr.custom.46884.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript">
			$(function() {
				
				var Page = (function() {

					var $navArrows = $( '#nav-arrows' ).hide(),
						$shadow = $( '#shadow' ).hide(),
						slicebox = $( '#sb-slider' ).slicebox( {
							onReady : function() {

								$navArrows.show();
								$shadow.show();

							},
							orientation : 'r',
							cuboidsRandom : true,
							disperseFactor : 30
						} ),
						
						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							// add navigation events
							$navArrows.children( ':first' ).on( 'click', function() {

								slicebox.next();
								return false;

							} );

							$navArrows.children( ':last' ).on( 'click', function() {
								
								slicebox.previous();
								return false;

							} );

						};

						return { init : init };

				})();

				Page.init();

			});
		</script>
@endsection
@section('content')
<div class="wrapper">

				<ul id="sb-slider" class="sb-slider">
					<li>
						<a target="_blank"><img src="banner/images/111.jpg" alt="image1"/></a>
						<!-- <div class="sb-description">
							<h3>寶寶ＸＸ</h3>
						</div> -->
					</li>
					<li>
						<a target="_blank"><img src="banner/images/111.jpg" alt="image2"/></a>
						<!-- <div class="sb-description">
							<h3>寶寶ＸＸ</h3>
						</div> -->
					</li>
					<li>
						<a target="_blank"><img src="banner/images/111.jpg" alt="image1"/></a>
						<!-- <div class="sb-description">
							<h3>寶寶ＸＸ</h3>
						</div> -->
					</li>
					<li>
						<a target="_blank"><img src="banner/images/111.jpg" alt="image1"/></a>
						<!-- <div class="sb-description" data-toggle="modal" data-target="#myModal4">
							<h3>寶寶ＸＸ</h3>
						</div> -->
					</li>
				</ul>

				<div id="shadow" class="shadow"></div>

				<div id="nav-arrows" class="nav-arrows">
					<a href="#">Next</a>
					<a href="#">Previous</a>
				</div>
		</div>
@endsection