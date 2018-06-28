@extends('layout')
@section('title', '成果展')
@section('content')
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">  
	<!-- banner -->
	<div class="w3ls-banner-1"> 
	</div>
	<!--Events --> 
		<div class="events-agileits-w3layouts">
		<div class="container">
		<h2 class="heading-agileinfo">寶寶<span>文案簡單介紹</span></h2>

		<div class="popular-grids">
			<div class="col-md-4 popular-grid">
				<img src="images/g7.jpg" class="img-responsive" alt=""/>
				<div class="popular-text">
					<h5><a href="#" data-toggle="modal" data-target="#myModal">Birthday 2017</a></h5>
					<div class="detail-bottom">
						<ul>
							<li><i class="fa fa-calendar" aria-hidden="true"></i>30 May</li>
							<li><i class="fa fa-map-marker" aria-hidden="true"></i>LONDON, UK</li>
						</ul>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod tempor incididunt ut labore</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 popular-grid">
				<img src="images/g8.jpg" class="img-responsive" alt=""/>
				<div class="popular-text">
					<h5><a href="#" data-toggle="modal" data-target="#myModal">Weddings</a></h5>
					<div class="detail-bottom">
						<ul>
							<li><i class="fa fa-calendar" aria-hidden="true"></i>15 June</li>
							<li><i class="fa fa-map-marker" aria-hidden="true"></i>BERLIN, GERMANY</li>
						</ul>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod tempor incididunt ut labore</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 popular-grid">
				<img src="images/g9.jpg" class="img-responsive" alt=""/>
				<div class="popular-text">
					<h5><a href="#" data-toggle="modal" data-target="#myModal">Photography</a></h5>
					<div class="detail-bottom">
						<ul>
							<li><i class="fa fa-calendar" aria-hidden="true"></i>25June</li>
							<li><i class="fa fa-map-marker" aria-hidden="true"></i>VENICE, ITALY</li>
						</ul>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod tempor incididunt ut labore</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 popular-grid">
				<img src="images/g6.jpg" class="img-responsive" alt=""/>
				<div class="popular-text">
					<h5><a href="#" data-toggle="modal" data-target="#myModal">Catering</a></h5>
					<div class="detail-bottom">
						<ul>
							<li><i class="fa fa-calendar" aria-hidden="true"></i>01 July</li>
							<li><i class="fa fa-map-marker" aria-hidden="true"></i>NEWYORK, USA</li>
						</ul>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod tempor incididunt ut labore</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 popular-grid">
				<img src="images/g3.jpg" class="img-responsive" alt=""/>
				<div class="popular-text">
					<h5><a href="#" data-toggle="modal" data-target="#myModal">Promotions</a></h5>
					<div class="detail-bottom">
						<ul>
							<li><i class="fa fa-calendar" aria-hidden="true"></i>30 May</li>
							<li><i class="fa fa-map-marker" aria-hidden="true"></i>LONDON, UK</li>
						</ul>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod tempor incididunt ut labore</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 popular-grid">
				<img src="images/g2.jpg" class="img-responsive" alt=""/>
				<div class="popular-text">
					<h5><a href="#" data-toggle="modal" data-target="#myModal">Sangeet</a></h5>
					<div class="detail-bottom">
						<ul>
							<li><i class="fa fa-calendar" aria-hidden="true"></i>15 June</li>
							<li><i class="fa fa-map-marker" aria-hidden="true"></i>BERLIN, GERMANY</li>
						</ul>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod tempor incididunt ut labore</p>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- bootstrap-modal-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Events
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
					<div class="modal-body">
						<img src="images/g8.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<!-- <i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i> --></p>
						<p><h3><a class="pull-right" href="gallery">更多</a></h3></p>
					</div>
			</div>
		</div>
	</div>
	</div>
</body> 
<!-- //bootstrap-modal-pop-up --> 
<!-- //Events --> 
@endsection