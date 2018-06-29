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
					<div class="col-md-12 gallery-grid">
						<div class="grid">
							<figure class="effect-apollo">
								<a class="example-image-link" href="{{$data}}" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
									<img src="{{$data}}" alt="" />
									<figcaption>
										<p>Proin vitae luctus dui, sit amet ultricies leo</p>
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