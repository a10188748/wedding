@extends('layout')
@section('title', '自助婚紗')
@section('require')
    	<link rel="stylesheet" type="text/css" href="banner/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="banner/css/slicebox.css" />
		<link rel="stylesheet" type="text/css" href="banner/css/custom.css" />
		<link href="css/sean_service5.css" type="text/css" rel="stylesheet" media="all">
		<script type="text/javascript" src="banner/js/modernizr.custom.46884.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/sean_service.js"></script>
@endsection
@section('content')
<div class="container"> 
	<div class="copywriting">
		<h2 class="heading-agileinfo">自助婚紗
		<span>何為自助婚紗-自己的婚紗自己決定</span>
		<span>新人可以與攝影師面對面溝通自己想要拍攝的畫面以及各式不同的題材，例如：唯美風格與雄偉大景風格或俏皮逗趣等風格...</span>
		<span>我們會依照需求規劃專屬的拍攝行程或風格，量身打造屬於自己的婚紗。</span>
		<span>這也自助婚紗與傳統婚紗公司最大的不同。</span>
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
		<h2 class="heading-agileinfo">一、自助婚紗包套價格</h2>
	</div>
	<div class="col-lg-4 col-md-6 col-sm-12 block">
		<div class="program">
			<h3>A方案：36,000元</h3>
			<h4>服務：</h4>
			<p>
				<span>攝影戶外全天拍攝</span><br>
				<span>新秘全天跟妝</span><br>
			</p>
			<h4>提供：</h4>
			<p>
				<span>禮服套數：婚紗3套，3造型(一白紗，二禮服)</span><br>
				<span>基本款西裝拍攝1套</span><br>
			</p>
			<h4>成品：</h4>
			<p>
				<span>*拍攝毛片全給</span><br>
				<span>*自選30組+攝影師加贈10組，共40組精修照片美編入相冊</span><br>
				<span>*精美光碟殼，DVD光碟片</span><br>
				<span>*水晶相本18吋X1，精緻皮革箱X1</span><br>
				<span>*婚紗MV音樂幻燈片</span><br>
				<span>*謝卡400張</span><br>
			</p>
		</div>
	</div>
	<div class="col-lg-4 col-md-6 col-sm-12 block">
		<div class="program">
			<h3>B方案：52,000元</h3>
			<h4>服務：</h4>
			<p>
				<span>攝影戶外全天拍攝</span><br>
				<span>新秘全天跟妝</span><br>
			</p>
			<h4>提供：</h4>
			<p>
				<span>禮服套數：婚紗3套，3造型(一白紗，二禮服)</span><br>
				<span>基本款西裝拍攝1套</span><br>
				<span>訂、結婚宴客禮服：3套(一白紗，二禮服)</span><br>
				<span>總計：6套婚紗禮服、西裝1套</span><br>
			</p>
			<h4>成品：</h4>
			<p>
				<span>*拍攝毛片全給</span><br>
				<span>*自選30組+攝影師加贈10組，共40組精修照片美編入相冊</span><br>
				<span>*精美光碟殼，DVD光碟片</span><br>
				<span>*水晶相本18吋X1，精緻皮革箱X1</span><br>
				<span>*婚紗MV音樂幻燈片</span><br>
				<span>*36吋無框畫X1</span><br>
				<span>*謝卡400張</span><br>
			</p>
		</div>
	</div>
	<div class="col-lg-4 col-md-6 col-sm-12 block">
		<div class="program">
			<h3>小資優惠方案：28,800元</h3>
			<h4>服務：</h4>
			<p>
				<span>攝影戶外全天拍攝</span><br>
				<span>新秘全天跟妝</span><br>
			</p>
			<h4>提供：</h4>
			<p>
				<span>禮服套數：婚紗2套，2造型(一白紗，一禮服)</span><br>
			</p>
			<h4>成品：</h4>
			<p>
				<span>*拍攝毛片全給</span><br>
				<span>*自選20組+攝影師加贈10組，共30組精修照片美編入相冊</span><br>
				<span>*精美光碟殼，DVD光碟片</span><br>
				<span>*水晶相本18吋X1，精緻皮革箱X1</span><br>
			</p>
		</div>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 remark">
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
		<h2 class="heading-agileinfo">二、洽談流程概述</h2>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 remark">
		<p>
			<span>1.碰面構想討論及確定拍攝日期及方案(建議新人可事先做功課，找網路範本照片風格數張與攝影師碰面時討論。攝影師也會適時的提供一些拍攝建議)。</span><br>
			<span>2.簽約付訂</span><br>
			<span>3.挑禮服</span><br>
			<span>4.行程與地點規劃</span><br>
			<span>5.拍攝</span><br>
			<span>6.挑圖選片</span><br>
			<span>7.精修與校稿</span><br>
			<span>8.製作成品與校稿並交付</span><br>
		</p>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 title">
		<h2 class="heading-agileinfo">三、合作婚紗禮服商</h2>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 remark">
		<div>
			<h4>台南：</h4>
			<p>
				<span>伊樂禮服工作室</span><br>
				<span>婕莉禮服旗艦館</span><br>
			</p>
			<h4>高雄：</h4>
			<p>
				<span>希拉婚禮‧精緻手工婚紗</span><br>
				<span>N.W.D-Natty wedding dresses 婚紗</span><br>
			</p>
		</div>
	</div>
</div>
@endsection