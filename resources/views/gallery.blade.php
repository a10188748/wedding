@extends('layout')
@section('title', '	展示')
@section('content')
<link rel="stylesheet" href="css/lightbox.css">
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">  
	<div class="w3ls-banner-1">
	</div>
	<div class="gallery">
		<div class="container">
			<h2 class="heading-agileinfo">{{$alldata[0]['title']}}<span>{{$alldata[0]['body']}}</span></h2>
			<div class="gallery-grids">
				@foreach ($alldata[0]['child_img_path'] as $data)
				<!-- {{print_r($data)}} -->
					<div class="col-md-12 col-md-12 col-sm-12">
						<div class="grid">
							<figure class="effect-apollo">
								<a class="example-image-link" href="{{$data}}" data-lightbox="example-set" data-title="">
									<img src="{{$data}}" alt="" />
									<figcaption>
										<p>阿昌幸福影像工坊</p>
									</figcaption>	
								</a>
							</figure>
						</div>
					</div>
					@endforeach
					
					<div class="clearfix"> </div>
					<script src="js/lightbox-plus-jquery.min.js"> </script>
			</div>
		</div>
	</div>
	
</body>
@endsection