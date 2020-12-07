<?php include("header.php")?>
<!--note: pages css-->
<link rel="stylesheet"  href="css/pages.css">
<link rel="stylesheet"  href="css/d-pages.css">

<!--banner-->
<section class="banner mb-4">
	<img src="upload/img-page-banner.jpg" alt="">
</section>

<section class="container-fluid px-4">
	<section class="inPage col-12 px-0">
		<!--title-->
		<div class="title bc-f12433 d-md-flex justify-content-between align-items-end px-3">
			<h1>付款資訊<span>Payment information</span></h1>
			<div class="navi">
				<span><a href=".">首頁</a></span>
				<span>付款資訊</span>
			</div>
		</div>

		<!--editor-->
		<div class="container py-4">
			<!--課程明細-->
			<div class="col-lg-11 mx-auto mb-5 px-sm-3 px-0 checkout bc-f12433">
				<h4>信用卡刷卡請選綠界ECPAY、海外用戶可加選Paypal付款</h4>
				<dl class="d-sm-flex justify-content-sm-between payment">
					<dd class="px-lg-3 px-sm-2">
						<a href="cart_payment.php"><img src="https://via.placeholder.com/350x350" alt=""></a>
					</dd>
					<dd class="px-lg-3 px-sm-2">
						<a href="cart_payment.php"><img src="https://via.placeholder.com/350x350" alt=""></a>
					</dd>
					<dd class="px-lg-3 px-sm-2">
						<a href="cart_payment.php"><img src="https://via.placeholder.com/350x350" alt=""></a>
					</dd>
				</dl>
			</div>
		</div>
	</section>
</section>

<?php include("footer.php")?>
</body>
</html>