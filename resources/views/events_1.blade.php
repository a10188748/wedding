@extends('layout')
@section('title', '成果展|婚禮紀錄')
@section('content')
@section('require')
<script>window.event = 'wedding'</script>
<script type="text/javascript" src="js/sean_newevent.js"></script>
<link href="css/sean_overwedding.css" type="text/css" rel="stylesheet" media="all">
@endsection
<body style="background-color: #F5F5F5"id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">  
	<!-- banner -->
	<div class="w3ls-banner-1"> 
	</div>
	<!--Events --> 
	<div class="events-agileits-w3layouts">
		<div class="container addeven">
			<h2 class="heading-agileinfo">{{$copywrite[0]->title}}
				<span>{{$copywrite[0]->body1}}</span>
				<span>{{$copywrite[0]->body2}}</span>
				<span>{{$copywrite[0]->body3}}</span>
				<span>{{$copywrite[0]->body4}}</span>
				<span>{{$copywrite[0]->body5}}</span>
			</h2>
			@foreach ($weddings as $wedding)
			<div class="col-lg-4 col-md-6 col-sm-12 evendev">
				<div class="evendev-img">
					<img src="{{$wedding->img_path}}"/>
				</div>
				<div class="evendev-section">
					<section>
					<div>
						<header>
							<h3>{{$wedding->img_header or ''}}</h3>
						</header>
					</div>
					<div class="evendev-section-body">
						<body>{{$wedding->img_body or ''}}</body>
					</div>
					<div class="evendev-section-footer">
						<footer>{{$wedding->img_footer or ''}}</footer>
					</div>
						
					</section>
				</div>
				<div class="evendev-button">
					<input type="button" value="details" onclick="javascript:location.href='gallery?event=wedding&id={{$wedding->id or ''}}'">
				</div>
			</div>
			@endforeach
		</div>
	</div>
</body> 
<!-- //bootstrap-modal-pop-up --> 
<!-- //Events --> 
@endsection