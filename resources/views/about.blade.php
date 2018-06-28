@extends('layout')
@section('title', '關於我')
@section('content')
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">  
	<!-- banner -->

	<div class="w3ls-banner-1">
	</div>
<!-- about -->
	<div class="about">
		<div class="container">
		<h2 class="heading-agileinfo">關於ＸＸＸ<span>簡單介紹文字</span></h2>
			<div class="about-grids-1">
				<div class="col-md-6 wthree-about-left">
					<div class="wthree-about-left-info">
						<img src="{{$about->img_path}}" alt="" />
					</div>
				</div>
				<div class="col-md-6 agileits-about-right">
					<h5>{{$about->title}}</h5>
					<p>{{$about->body}} 
					<span>{{$about->foot}}</span>
					</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about -->
	<!-- offers -->
	<div class="offers">
		<div class="container">
			
			<h3 class="heading-agileinfo white-w3ls">近期優惠項目<span class="black-w3ls">文案介紹 bra bra</span></h3>
			<div class="offers-grids">
				<div class="col-md-6 wthree-offers-left">
					<div class="offers-left-heading">
						<h4>優惠資格</h4>
					</div>
					<div class="offers-left-grids">
						<div class="offers-number">
							<p>1</p>
						</div>
						<div class="offers-text">
							<p>資格1 bra bra bra bra bra bra bra</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="offers-left-grids offers-left-middle">
						<div class="offers-number">
							<p>2</p>
						</div>
						<div class="offers-text">
							<p>資格2 bra bra bra bra bra bra bra</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="offers-left-grids">
						<div class="offers-number">
							<p>3</p>
						</div>
						<div class="offers-text">
							<p>資格3 bra bra bra bra bra bra bra</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-6 wthree-offers-right">
					<h5>滿足上述資格  bra bra bra bra bra bra bra bra bra bra bra bra bra bra</h5>
					<p>滿足上述資格  bra bra bra bra bra bra bra bra bra bra bra bra bra bra</p>
					<ul>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i>婚禮攝影</a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i>寶寶攝影</a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i>派對攝影</a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i>餐會攝影</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- offers -->
		<!-- about-team -->
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
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
			</div>
		</div>
	</div>
	<!-- //about-team -->
<!-- about -->
</body>
@endsection