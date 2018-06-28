@extends('layout')
@section('title', '表單預約')
@section('content')
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">  
	<!-- banner -->
	<div class="w3ls-banner-1">
	</div>
	<!-- contact -->	
	<div class="w3ls_address_mail_footer_grids">
	<div class="container">
	<h2 class="heading-agileinfo">表單預約<span>有幸與您把握美好時刻</span></h2>
		<!-- <div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3539.812628729253!2d153.014155!3d-27.4750921!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b915a0835840a2f%3A0xdd5e3f5c208dc0e1!2sMelbourne+St%2C+South+Brisbane+QLD+4101%2C+Australia!5e0!3m2!1sen!2sin!4v1492257477691"></iframe>
		</div> -->
		<div class="col-md-12 contact-form">
				<h4 class="white-w3ls">Chang 寫真. 影像預約單</h4>
				<form action="#" method="post">
					<div class="styled-input agile-styled-input-top">
						<input type="text" name="Name" required="">
						<label>姓名*</label>
						<span></span>
					</div>
					<div class="styled-input agile-styled-input-top">
						<input type="text" name="Name" required="">
						<label>手機*</label>
						<span></span>
					</div>
					<div class="styled-input">
						<input type="email" name="Email" required=""> 
						<label>Email*</label>
						<span></span>
					</div> 
					<div class="styled-input">
						<input type="text" name="Subject" required="">
						<label>拍攝地點*</label>
						<span></span>
					</div>
					<div class="styled-input">
						<textarea name="Message" required=""></textarea>
						<label>Message</label>
						<span></span>
					</div>	 
					<input type="submit" value="立即預約">
				</form>
			</div>
			<div class="clearfix"> </div>
	</div>
</div>

<!-- //contact -->
<body>
@endsection