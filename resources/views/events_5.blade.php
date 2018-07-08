@extends('layout')
@section('title', '成果展|嬰兒、親子、兒童寫真')
@section('content')
@section('require')
<script>window.event = 'baby'</script>
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
		@foreach ($babys as $baby)
		<div class="col-lg-4 col-md-6 col-sm-12 evendev">
			<div class="evendev-img">
				<img src="{{$baby->img_path}}"/>
			</div>
			<div class="evendev-section">
				<section>
				<div>
					<header>
						<h3>{{$baby->img_header}}</h3>
					</header>
				</div>
				<div class="evendev-section-body">
					<body>{{$baby->img_body}}</body>
				</div>
				<div class="evendev-section-footer">
					<footer>{{$baby->img_footer}}</footer>
				</div>
					
				</section>
			</div>
			<div class="evendev-button">
				<input type="button" value="details" onclick="javascript:location.href='gallery?event=baby&id={{$baby->id}}'">
			</div>
		</div>
		@endforeach
				
	</div>
</body> 
<!-- //bootstrap-modal-pop-up --> 
<!-- //Events --> 
@endsection