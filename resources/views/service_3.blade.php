@extends('layout')
@section('title', '海外婚紗')
@section('require')
    	<link rel="stylesheet" type="text/css" href="banner/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="banner/css/slicebox.css" />
		<link rel="stylesheet" type="text/css" href="banner/css/custom.css" />
		<link href="css/sean_service3.css" type="text/css" rel="stylesheet" media="all">
		<script type="text/javascript" src="banner/js/modernizr.custom.46884.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/sean_service.js"></script>
@endsection
@section('content')
<div class="container"> 
	<div class="copywriting">
		<h2 class="heading-agileinfo">海外拍婚紗渡蜜月
		<span>婚紗照的籌備總讓新人忙翻天，從拍婚紗準備到結婚典禮，不但精神與體力都用光了，連預算也都花得差不多，</span>
		<span>最期待的蜜月旅行反而變得遙遙無期～讓蜜月旅行就在所有行程的最前端，和心愛的他來一趟婚紗輕旅行，就讓婚紗旅拍與度蜜月同時進行吧！</span>
		<span>我們將不定期招募海外婚紗拍攝</span>
		<span>拍攝國家目前以日本島及沖繩為主，費用詳情請看底下說明。</span>
		</h2>
	</div>

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
	<div class="col-lg-12 col-md-12 col-sm-12 title">
		<h2 class="heading-agileinfo">費用及詳情</h2>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 img">
		<div>
			<img src="banner/images/111.jpg" alt="..." class="img-thumbnail">
		</div>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 img">
		<div>
			<img src="banner/images/111.jpg" alt="..." class="img-thumbnail">
		</div>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 img">
		<div>
			<img src="banner/images/111.jpg" alt="..." class="img-thumbnail">
		</div>
	</div>
</div>
@endsection