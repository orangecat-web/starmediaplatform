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
			<div class="row mx-auto">
				<dl class="col-lg-3 col-md-4 matchsSuare">
					<dd>
						<figure>
							<p class="align-items-center"><a href="p_spokesperson_detail.php"><img src="upload/img-prod.jpg" alt=""></a></p>
							<figcaption>
								<h3>莉莉 Lily</h3>
								<p>
									評價
									<i class="fas fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									(99999)
								</p>
								<p class="d-flex justify-content-between Actor">
									<span>一日外拍 8小時</span>
									<span>NT850</span>
								</p>
							</figcaption>
						</figure>
					</dd>
				</dl>
				<div class="col-lg-9 col-md-8">
					<!--注意事項-->
					<div class="mb-5 px-sm-3 px-0 checkout bc-f12433">
						<h3>服務介紹</h3>
						<div class="eidtor">
							<p>服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹</p>
							<p>服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹</p>
						</div>
					</div>
					<!--加值服務-->
					<div class="mb-5 px-sm-3 px-0 checkout bc-f12433">
						<h3>加值服務</h3>
						<dl class="buyMore">
							<dd class="d-sm-flex justify-content-sm-between">
								<p><input type="checkbox"> 試用文</p>
								<p>NT 200</p>
							</dd>
						</dl>
					</div>
					<!--total price-->
					<dl class="px-sm-3 px-0 totalPrice">
						<dd class="d-flex justify-content-sm-end justify-content-between">
							<span>小記金額 NT$</span>
							<span>20,000 元</span>
						</dd>
						<dd class="d-flex justify-content-sm-end justify-content-between">
							<span>其他費用 NT$</span>
							<span>0 元</span>
						</dd>
						<dd class="d-flex justify-content-sm-end justify-content-between">
							<span>總金額</span>
							<span>20,000 元</span>
						</dd>
					</dl>
					<!--購買者資訊-->
					<div class="mb-5 px-sm-3 px-0 checkout bc-f12433">
						<h3>購買者資訊</h3>
						<form action="cart_check.php">
							<dl class="py-4 checkoutForm">
								<dd class="col-12">
									<label for="">姓名</label>
									<input type="text" required> 
								</dd>
								<dd class="col-12">
									<label for="">聯絡電話</label>
									<input type="tel" required> 
								</dd>
								<dd class="col-12">
									<label for="">電子信箱</label>
									<input type="email" required> 
								</dd>
								<dd class="row col-12 mx-auto d-flex justify-content-between">
									<label class="col-12 px-0" for="">留言</label>
									<textarea name="" id="" cols="30" rows="10"></textarea>
								</dd>
								<dd>
									<button type="reset" onclick="location.href='course_detail.php'"><i class="fas fa-angle-left"></i>上一步</button>
									<button type="submit">確認訂單<i class="fas fa-angle-right"></i></button>
								</dd>
							</dl>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</section>

<?php include("footer.php")?>
</body>
</html>