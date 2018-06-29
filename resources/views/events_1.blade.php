@extends('layout')
@section('title', '成果展')
@section('content')
@section('require')
<script type="text/javascript" src="js/sean_event.js"></script>
@endsection
<script>window.event = 'wedding'</script>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">  
	<!-- banner -->
	<div class="w3ls-banner-1"> 
	</div>
	<!--Events --> 
		<div class="events-agileits-w3layouts">
		<div class="container event_wedding">
		<h2 class="heading-agileinfo">婚禮紀錄
		<span>婚禮故事，我們攝影師想呈現出不只是新人二人畫面</span>
		<span>而是更多人與人之間的互動，所構成的回憶故事錄。</span>
		<span>然而"婚攝也是新人的另一雙眼"</span>
		<span>因此我們將透過鏡頭與思緒</span>
		<span>來為您完整的記錄最感動的時刻。</span>
		</h2>
		@foreach ($weddings->chunk(3) as $chunk)
		<div class="popular-grids">
			@foreach ($chunk as $wedding)
			<div class="col-md-4 popular-grid">
				<img src="{{$wedding->img_path}}" class="img-responsive" alt=""/>
				<div class="popular-text">
					<h5><a href="gallery?event=wedding&id={{$wedding->id}}">{{$wedding->title}}</a></h5>
					<div class="detail-bottom">
						<ul>
							<li><i class="fa fa-calendar" aria-hidden="true"></i>{{$wedding->date}}</li>
							<li><i class="fa fa-map-marker" aria-hidden="true"></i>{{$wedding->locaton}}</li>
						</ul>
						<p>{{$wedding->body}}</p>
					</div>
				</div>
			</div>
			@endforeach
			<div class="clearfix"></div>
		</div>
		@endforeach
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
						<p><h4><a class="pull-right" href="gallery">查看更多</a></h4></p>
					</div>
			</div>
		</div>
	</div>
</div>
</body> 
<!-- //Events --> 
@endsection