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
		<div class="title bc-01a9ae d-md-flex justify-content-between align-items-end px-3">
			<h1>培訓課程<span>Course</span></h1>
			<div class="navi">
				<span><a href=".">首頁</a></span>
				<span>培訓課程</span>
			</div>
		</div>

		<div class="container py-4">
			<!--課程明細-->
			<div class="col-lg-11 mx-auto mb-5 px-sm-3 px-0 checkout bc-01a9a">
				<h3>課程明細</h3>
				<!--電腦＆平板-->
				<table class="col-12 mb-3 coursePrice mobileSM">
					<tr>
						<th>課程明細</th>
						<th>課程時間</th>
						<th>課程費用</th>
					</tr>
					<tr>
						<td>試鏡入門訓練</td>
						<td>
							2018/08/01~2018/08/03 
							1:00~3:00pm
						</td>
						<td>
							$2,000
						</td>
					</tr>
					<tr>
						<td>試鏡入門訓練</td>
						<td>
							2018/08/01~2018/08/03 1:00~3:00pm
						</td>
						<td>
							$2,000
						</td>
					</tr>
				</table>
				<!--手機-->
				<dl class="row mx-auto no-gutters align-items-stretch coursePrice mobileXS">
					<dt class="col-3">課程明細</dt>
					<dd class="col-9 pl-2">試鏡入門訓練</dd>
					<dt class="col-3">課程時間</dt>
					<dd class="col-9 pl-2">2018/08/01~2018/08/03 1:00~3:00pm</dd>
					<dt class="col-3">課程費用</dt>
					<dd class="col-9 pl-2">$2,000</dd>
					<dt class="col-3">課程明細</dt>
					<dd class="col-9 pl-2">試鏡入門訓練</dd>
					<dt class="col-3">課程時間</dt>
					<dd class="col-9 pl-2">2018/08/01~2018/08/03 1:00~3:00pm</dd>
					<dt class="col-3">課程費用</dt>
					<dd class="col-9 pl-2">$2,000</dd>
				</dl>
				<!--total price-->
				<dl class="totalPrice">
					<dd class="d-flex justify-content-sm-end justify-content-between">
						<span>小記金額 NT$</span>
						<span>20,000 元</span>
					</dd>
					<dd class="d-flex justify-content-sm-end justify-content-between">
						<span>手續費 NT$</span>
						<span>0 元</span>
					</dd>
					<dd class="d-flex justify-content-sm-end justify-content-between">
						<span>本課程所需付款金額 NT$</span>
						<span>20,000 元</span>
					</dd>
				</dl>
			</div>
			<!--付款方式-->
			<div class="col-lg-11 mx-auto mb-5 px-sm-3 px-0 checkout bc-01a9a">
				<h3>付款方式</h3>
				<div class="col-lg-8 mx-auto py-4">
					<p>轉   帳</p>
					<p>戶   名 : 星光藝意傳媒有限公司</p>
					<p>銀　　行：國泰世華銀行</p>
					<p>銀行代碼：013</p>
					<p>帳　　號：000123456789</p>
				</div>
			</div>
			<!--報名人資訊-->
			<div class="col-lg-11 mx-auto mb-5 px-sm-3 px-0 checkout bc-01a9a">
				<h3>報名人資訊</h3>
				<form action="course_checkout03.php">
					<dl class="col-lg-8 mx-auto py-4 checkoutForm">
						<dd class="col-12">
							<label for="">姓名</label> Lee	
						</dd>
						<dd class="col-12">
							<label for="">聯絡電話</label> 0911-010-123
						</dd>
						<dd class="col-12">
							<label for="">電子信箱</label> lee00@gamil.com
						</dd>
						<dd class="col-12">
							<label for="">聯絡地址</label>
							台北市信義區基隆路一段
						</dd>
						<dd class="pt-5">
							<button type="reset" onclick="location.href='course_checkout01.php'"><i class="fas fa-angle-left"></i>上一步</button>
							<button type="submit">確認結帳<i class="fas fa-angle-right"></i></button>
						</dd>
					</dl>
				</form>
			</div>
		</div>
	</section>
</section>

<?php include("footer.php")?>
</body>
</html>