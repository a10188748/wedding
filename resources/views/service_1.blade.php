@extends('layout')
@section('title', '婚禮紀錄')
@section('require')
    	<link rel="stylesheet" type="text/css" href="banner/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="banner/css/slicebox.css" />
		<link rel="stylesheet" type="text/css" href="banner/css/custom.css" />
		<link href="css/sean_service1.css" type="text/css" rel="stylesheet" media="all">
		<script type="text/javascript" src="banner/js/modernizr.custom.46884.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/sean_service.js"></script>
@endsection
@section('content')
<div class="container"> 
	<div class="copywriting">
		<h2 class="heading-agileinfo">婚禮紀錄
		<span>婚禮故事，我們想呈現出不只是新人二人畫面</span>
		<span>而是更多人與人之間的互動，所構成的回憶故事錄。</span>
		<span>然而"婚攝也是新人的另一雙眼"</span>
		<span>因此我們將透過鏡頭與思緒</span>
		<span>來為您完整的記錄最感動的時刻。</span>
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
	<div >
		<div class="col-lg-12 col-md-12 col-sm-12 title">
			<h2 class="heading-agileinfo">一、方案價格</h2>
		</div>
		<section class="case ">
			<div class="col-lg-3 col-md-3 col-sm-12" >
				<article class>
					<header>
						<div class="header">
							<span><h4>Ａ.單宴會 / 單儀式 </h4></span>
						</div> 
					</header>
					<hr>
					<section>
						<div class="section">
							<span>NT 10,000</span>
						</div>
					</section>
					<footer>
					</footer>
				</article>
		
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12">
				<article class>
					<header>
						<div class="header">
							<span><h4>Ｂ.早儀式</h4></span><br>
							<span><h4>+</h4></span><br>
							<span><h4>午宴</h4></span>
						</div>
					</header>
					<hr>
					<section>
						<div class="section">
							<span>NT 13,800</span>
						</div>
					</section>
					<footer>
					</footer>
				</article>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12">
				<article class>
					<header>
						<div class="header">
							<span><h4>Ｃ.早儀式</h4></span><br>
							<span><h4>+</h4></span><br>
							<span><h4>晚宴</h4></span>
						</div>
					</header>
					<hr>
					<section>
						<div class="section">
							<span>NT 15,000</span>
						</div>
					</section>
					<footer>
					</footer>
				</article>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12">
				<article class>
					<header>
						<div class="header">
						<span><h4>Ｄ.訂婚歸寧</h4></span><br>
						<span><h4>+</h4></span><br>
						<span><h4>迎娶結婚宴兩天包套</h4></span>
						</div>
					</header>
					<hr>
					<section>
						<div class="section">
							<span>NT 25,000</span>
						</div>
					</section>
					<footer>
					</footer>
				</article>
			</div>
		</section>
		<div class="col-lg-12 col-md-12 col-sm-12 span" style="padding-top: 20px;">
			<!-- <h3>備註：</h3> -->
			<h5>- 車馬費 ＋</h5>
			<p style="padding:10px 0 0 30px;">
				<span>南部免車馬費</span><br>
				<span>中部(台中、彰化、雲林、南投)車馬費2000元</span><br>
				<span>北部(台北、桃園、新竹、苗栗)車馬費3000元</span>
			</p>
			<br>
			<h5>- 其他費用 ＋</h5>
			<p style="padding:10px 0 0 30px;">
				<span>中北部新人需提供住宿費用或由新人替攝影師安排住宿地方</span><br>
				<span>燈光助理  NT1,000元</span><br>
				<span>第二(副)攝影師  NT3,000元 / NT6,000元(半天/全天)</span><br>
			</p>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 title">
			<h2 class="heading-agileinfo">二、成品細項</h2>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 span">
			<p>
				<span>＋ 單儀式或單宴客約200張，儀式+宴客約400張1000萬畫素照片，若拍攝張數超過之照片均會全數給予</span><br>
				<span>＋ 照片每張皆會做色溫、曝光度、飽和度、對比度、銳利修正..等修圖調整處理，目的為確保照片色調、亮度、銳利等有較好的表現</span><br>
				<span>＋ 婚禮精選流程照片 50-150 張</span><br>
				<span>＋ 精緻相片寫真書乙本(婚禮當天的精選照片入冊寫真書...此為贈品，不得要求替換更改產品且不提供挑片與校稿)</span><br>
				<span>＋ 精美光碟殼，DVD光碟片(收納當天所有電子檔照片)</span><br>
			</p>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 span">
			<h3>備註：</h3>
			<p>
				<span>※實體成品與照片，交件時間約為6~10週，視當時案量而定。</span><br>
				<span>※免費婚禮習俗與流程諮詢與引導</span><br>
				<span>※梳妝至送客結束完整流程拍攝</span><br>
				<span>※全程使用高畫質RAW檔&千萬畫素拍攝，當日所有拍攝均調整色調</span><br>
				<span>※流程時間內會協助新人拍攝"全家福、類婚紗"</span><br>
				<span>※提供客戶將來孕婦照、兒童寫真優惠價</span><br>
			</p>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 title">
			<h2 class="heading-agileinfo">三、預約流程概述</h2>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 span">
			<p>
				<span>1.來信或電洽告知預約之檔期</span><br>
				<span>2.方案選擇</span><br>
				<span>3.mail簽訂合約拍攝內容</span><br>
				<span>4.支付訂金</span><br>
				<span>5.預約完成</span><br>
				<span>6.拍攝前1週左右與攝影師討論婚禮細節活動流程</span><br>
				<span>7.婚禮結束後，當日或三天內付清尾款</span><br>
			</p>
		</div>
		
	</div>
</div>
@endsection