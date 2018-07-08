@extends('layout')
@section('title', '孕之寫真')
@section('require')
    	<link rel="stylesheet" type="text/css" href="banner/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="banner/css/slicebox.css" />
		<link rel="stylesheet" type="text/css" href="banner/css/custom.css" />
		<link href="css/sean_service4.css" type="text/css" rel="stylesheet" media="all">
		<script type="text/javascript" src="banner/js/modernizr.custom.46884.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/sean_service.js"></script>
@endsection
@section('content')
<div class="container"> 
	<div class="copywriting">
		<h2 class="heading-agileinfo">孕之寫真
		<span>生命，是一場愛的旅程</span>
		<span>在這生命的起點，我們透過相機鏡頭，將懷孕最美麗的過程用影像記錄下來。</span>
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
		<h2 class="heading-agileinfo">一、孕婦寫真方案</h2>
	</div>
	<div class="col-lg-4 col-md-6 col-sm-12 block">
		<div class="program">
			<h3>A方案：5,800元</h3>
			<h4>寫真服務說明/檔案/成品：</h4>
			<p>
				<span>*全程自備便服1~3套拍攝</span><br>
				<span>*外景或室內民宿與攝影棚；場景若為室內，可拍攝有尺度的唯美畫面。(民宿或租棚費用另計)</span><br>
				<span>*妝髮自理</span><br>
				<span>*拍攝時間2h</span><br>
				<span>*拍攝毛片全給</span><br>
				<span>*攝影師自選20組精修風格照片</span><br>
				<span>*精美光碟殼，DVD光碟片電子檔</span><br>
			</p>
		</div>
	</div>
	<div class="col-lg-4 col-md-6 col-sm-12 block">
		<div class="program">
			<h3>B方案：8,800元</h3>
			<h4>寫真服務說明/檔案/成品：</h4>
			<p>
				<span>*孕媽咪基本款禮服1套，自備便服1~2套</span><br>
				<span>*外景或室內民宿與攝影棚；場景若為室內，可拍攝有尺度的唯美畫面。(民宿或租棚費用另計)</span><br>
				<span>*新秘造型：2髮妝造型隨拍妝髮處理</span><br>
				<span>*拍攝時間2h</span><br>
				<span>*拍攝毛片全給</span><br>
				<span>*攝影師自選20組精修風格照片</span><br>
				<span>**精美光碟殼，DVD光碟片電子檔</span><br>
			</p>
		</div>
	</div>
	<div class="col-lg-4 col-md-6 col-sm-12 block">
		<div class="program">
			<h3>花魁孕媽咪寫真方案：8,000元</h3>
			<h4>花魁孕媽咪寫真服務說明/檔案/成品：</h4>
			<p>
				<span>*花魁服裝2套</span><br>
				<span>*花魁專屬攝影棚</span><br>
				<span>*新秘造型：2髮妝造型隨拍妝髮處理</span><br>
				<span>*拍攝時間2h</span><br>
				<span>*拍攝毛片全給</span><br>
				<span>*攝影師自選10組精修風格照片</span><br>
				<span>*精美光碟殼，DVD光碟片電子檔</span><br>
			</p>
		</div>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 remark">
		<h3>備註：</h3>
		<p>
			<span>＋家庭成員均可入鏡，不包含長輩、親友＋</span><br>
			<span>＋拍攝地區僅限台南或高雄與屏東花魁攝影棚＋</span><br>
			<span>＋作品交期約4週～6週＋</span><br>
			<span>＋預約拍攝需預付訂金NT1,000元，尾款於拍攝當天付清＋</span><br>
		</p>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 title">
		<h2 class="heading-agileinfo">二、注意事項</h2>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 remark">
		<p>
			<span>1.建議孕媽咪拍攝週數約在30-34周都可以來拍攝，此刻身材孕形是最美的時間點。若超過之週數，孕媽咪體力活動較會受限且考量安全問題，恕不提供拍攝。</span><br>
			<span>2.若有小朋友要一同前往拍攝，需要有另一位家長陪同前往，方便現場照顧小孩，避免影響孕媽咪拍攝進度。</span><br>
			<span>3.拍攝前一天請養足精神；若當天有造型師，拍攝前一晚請將頭髮清洗乾淨，勿使用任何造型品塗抹噴頭髮，並請刮除腋下毛髮。</span><br>
			<span>4.除拍攝服裝以外，孕媽咪需自備胸貼、Nubar、膚色丁字褲或黑色白色內衣褲等衣物</span><br>
			<span>5.建議孕媽咪可以準備一些小道具，例如：嬰兒有關的生活用品、寶寶超音波照片(麻繩跟木夾)</span><br>
		</p>
	</div>
</div>
@endsection