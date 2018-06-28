@extends('layout')
@section('title', '寫真影像')
@section('content')
    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">  
	<!-- banner -->

	<div id="home" class="w3ls-banner"> 

		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">

				@foreach ($banners as $banner)
				    <li>
						<div class="w3layouts-banner-top" style="background: url({{$banner->img_path}}) no-repeat 0px 0px; ">
							<div class="container">
								<div class="agileits-banner-info">
									<h3>{{$banner->title_1}}<span>{{$banner->title_2}}</span></h3>
									<p>{{$banner->body}}</p>
									<div class="agileits_w3layouts_more menu__item">
										<a href="events_{{$banner->num}}" class="menu__link" >看更多</a>
									</div>
								</div>	
							</div>
						</div>
					</li>
				@endforeach
				</ul>
			</div>
			<div class="clearfix"> </div>
			
			<!--banner Slider starts Here-->
		</div>
	</div>	
	<!-- //banner --> 
	 
			<!-- header -->	
		<!-- //header -->
		<!-- ser_agile -->
		<div class="ser_agile">
			<div class="container">
			<h3 class="heading-agileinfo">服務項目<span>專業品質貼心服務brabrabra</span></h3>
			<p>輸入文案 bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra</p>
			<div class="ser_w3l">  
			  <div class="outer-wrapper">
				<div class="inner-wrapper">
				  <div class="icon-wrapper">
					<i class="fa fa-birthday-cake" aria-hidden="true"></i>
				  </div>
				  <div class="content-wrapper">
					<h4>專業攝影</h4>
					<p>輸入文案 bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra</p>
				  </div>
				</div>
			  </div>
			  <div class="outer-wrapper">
				<div class="inner-wrapper">
				  <div class="icon-wrapper">
					<i class="fa fa-headphones" aria-hidden="true"></i>
				  </div>
				  <div class="content-wrapper">
					<h4>圖片編排</h4>
					<p>輸入文案 bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra</p>
				  </div>
				</div>
			  </div>
			  <div class="outer-wrapper">
				<div class="inner-wrapper">
				  <div class="icon-wrapper">
					<i class="fa fa-globe" aria-hidden="true"></i>
				  </div>
				  <div class="content-wrapper">
					<h4>修圖</h4>
					<p>輸入文案 bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra</p>
				  </div>
				</div>
			  </div>
			  <!-- <div class="outer-wrapper">
				<div class="inner-wrapper">
				  <div class="icon-wrapper">
					<i class="fa fa-camera" aria-hidden="true"></i>
				  </div>
				  <div class="content-wrapper">
					<h4>Photography</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, magni.</p>
				  </div>
				</div>
			  </div>
			  <div class="outer-wrapper">
				<div class="inner-wrapper">
				  <div class="icon-wrapper">
					<i class="fa fa-cutlery" aria-hidden="true"></i>
				  </div>
				  <div class="content-wrapper">
					<h4>Catering</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, magni.</p>
				  </div>
				</div>
			  </div>
			  <div class="outer-wrapper">
				<div class="inner-wrapper">
				  <div class="icon-wrapper">
					<i class="fa fa-tasks" aria-hidden="true"></i>
				  </div>
				  <div class="content-wrapper">
					<h4>Promotions</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, magni.</p>
				  </div>
				</div>
			  </div> -->
			  <div class="clearfix"></div>
			  </div>
			</div>
		</div>
	<!-- //ser_agile -->
<!-- Stats -->
	<div class="stats-agileits">
	<div class="container">
		<h3 class="heading-agileinfo white-w3ls">我的攝影經歷<span class="black-w3ls">數據化呈現攝影經歷</span></h3>
	</div>
		<div class="stats-info agileits w3layouts">
		<div class="container">
			<div class="col-md-4 col-sm-4agileits w3layouts stats-grid stats-grid-1">
				<i class="fa fa-users" aria-hidden="true"></i>
				<div class="numscroller agileits-w3layouts" data-slno='1' data-min='0' data-max='2500' data-delay='3' data-increment="2">2500</div>
				<div class="stat-info-w3ls">
					<h4 class="agileits w3layouts">累積客戶</h4>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 agileits w3layouts stats-grid stats-grid-2">
				<i class="fa fa-lightbulb-o" aria-hidden="true"></i>
				<div class="numscroller agileits-w3layouts" data-slno='1' data-min='0' data-max='1000' data-delay='3' data-increment="2">1000</div>
				<div class="stat-info-w3ls">
					<h4 class="agileits w3layouts">累積活動</h4>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 stats-grid agileits w3layouts stats-grid-3">
			<i class="fa fa-cog" aria-hidden="true"></i>
				<div class="numscroller agileits-w3layouts" data-slno='1' data-min='0' data-max='3421' data-delay='3' data-increment="2">3421</div>
				<div class="stat-info-w3ls">
					<h4 class="agileits w3layouts">攝影時數</h4>
				</div>
			</div>
			<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //Stats -->
	
	<!-- showcase_w3layouts -->	
	<div class="showcase_w3layouts">
		<div class="container">
		<h3 class="heading-agileinfo">攝影活動<span>捕捉您寶貴的時刻</span></h3>
			<div class="our_agile-info">
			<div class="showcase">
				<div class="thumbnail thumbnail--awesome">
					<div class="thumbnail__overlay">
						
					</div>
				</div>
				<div class="desc">
				
					<h4>慶生</h4>
					<p>輸入文案 bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra
					</p>
				</div>
			</div>
			
			<div class="showcase showcase--inverted">
				<div class="desc">
					
					<h4>婚禮</h4>
					<p>輸入文案 bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra
					</p>
				</div>
				<div class="thumbnail thumbnail--awesome1">
					<div class="thumbnail__overlay">
						
					</div>
				</div>
			</div>
			<div class="showcase">
				<div class="thumbnail thumbnail--awesome2">
					<div class="thumbnail__overlay">
						
					</div>
				</div>
				<div class="desc">
				
					<h4>寶寶紀錄</h4>
					<p>輸入文案 bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra
					</p>
				</div>
			</div>
			<div class="showcase showcase--inverted">
				<div class="desc">
					
					<h4>餐會</h4>
					<p>輸入文案 bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra
					</p>
				</div>
				<div class="thumbnail thumbnail--awesome3">
					<div class="thumbnail__overlay">
					
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			</div>
		</div>
	</div>
<!-- //showcase_w3layouts -->	
	<!--testimonials-->
<div class="testimonials">
	<div class="container">
		<h3 class="heading-agileinfo">客戶如何敘述我們<span>如果您對服務有疑慮,看看其他人怎麼說</span></h3>
		<div class="flex-slider">
			<ul id="flexiselDemo1">			
				<li>
					<div class="laptop">
						<div class="col-md-8 team-right">
							<p>說些什麼bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra </p>
							<div class="name-w3ls">
								<h5>林先生</h5>
								<span>2018/01/01</span>
							</div>
						</div>
						<div class="col-md-4 team-left">
							<img class="img-responsive" src="images/t1.jpg" alt=" " />
						</div>
						<div class="clearfix"></div>
					</div>
				</li>
				<li>
					<div class="laptop">
						<div class="col-md-8 team-right">
							<p>說些什麼bra bra bra bra bra bra bra bra bra bra bra bra bra bra bra </p>
							<div class="name-w3ls">
								<h5>謝先生</h5>
								<span>2018/01/01</span>
							</div>
						</div>
						<div class="col-md-4 team-left">
							<img class="img-responsive" src="images/t2.jpg" alt=" " />
						</div>
						<div class="clearfix"></div>
					</div>
				</li>
			</ul>
			
		</div>

	</div>
</div>
<!--//testimonials-->


	
<!-- skills -->

						<!-- <script src="js/responsiveslides.min.js"></script> -->
			<script>
						// You can also use "$(window).load(function() {"
						$( document ).ready(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
			<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:false,
									nav:true,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>

<!-- start-smoth-scrolling -->
<!-- OnScroll-Number-Increase-JavaScript -->
	<!-- <script type="text/javascript" src="js/numscroller-1.0.js"></script> -->
<!-- //OnScroll-Number-Increase-JavaScript -->
<!--flexiselDemo1 -->
 <script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 2,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems: 1
										},
										tablet: { 
											changePoint:991,
											visibleItems: 1
										}
									}
								});
								
							});
			</script>
			<!-- <script type="text/javascript" src="js/jquery.flexisel.js"></script> -->
<!--//flexiselDemo1 -->


<!-- //here ends scrolling icon -->
</body>
@endsection