<?php include("header.php")?>
<!--note: pages css-->
<link rel="stylesheet"  href="css/member.css">
<link rel="stylesheet"  href="css/d-member.css">

<!--banner-->
<section class="banner mb-4">
	<img src="upload/img-page-banner.jpg" alt="">
</section>

<!--n member signup-->
<section class="container-fluid px-4">
	<section class="col-12 px-0 inPage">
		<!--title-->
		<div class="title bc-444444 d-md-flex justify-content-between align-items-end px-3">
			<h1>加入會員<span>Register</span></h1>
			<div class="navi">
				<span><a href=".">首頁</a></span>
				<span>加入會員</span>
				<span>一般會員</span>
			</div>
		</div>
		<section class="container">
			<form action="member_c.php" class="p-4">
				<div class="col-12 pTitle">
					<h3>會員帳號 <span>(*為必填項目)</span></h3>
				</div>
				<dl class="row col-lg-12 col-md-10 mx-auto signup">
					<dd class="col-lg-4 d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							<sup>*</sup>會員帳號
						</label>
						<input type="email" placeholder="(信箱即為登入帳號)" required>
					</dd>
					<dd class="col-lg-4 d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							<sup>*</sup>會員密碼
						</label>
						<input type="password" placeholder="請輸入密碼" required>
					</dd>
					<dd class="col-lg-4 d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							<sup>*</sup>確認密碼
						</label>
						<input type="password" placeholder="請再次輸入密碼" required>
					</dd>
				</dl>

				<div class="col-12 pTitle">
					<h3>基本資料 <span>(*為必填項目)</span></h3>
				</div>
				<dl class="row col-lg-12 col-md-10 mx-auto signup">
					<dd class="col-lg-6 d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							<sup>*</sup>姓名
						</label>
						<input type="text" placeholder="請輸入姓名" required>
						<span class="col-auto">(不會顯示於公開資料中)</span>
					</dd>
					<dd class="col-lg-6 d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							<sup>*</sup>暱稱
						</label>
						<input type="text" placeholder="請輸入暱稱" required>
					</dd>
					<dd class="col-lg-6 d-sm-flex justify-content-start align-items-center">
						<label for="" class="col-auto">
							<sup>*</sup>性別
						</label>
						<p>
							<label for="" class="mr-4"><input class="mr-2" type="radio" name="gender" id="male" required> 男</label>
							<label for=""><input class="mr-2" type="radio" name="gender" id="female" required> 女</label>
						</p>
					</dd>
					<dd class="col-lg-6 d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							<sup>*</sup>生日
						</label>
						<select name="" id="" required>
							<option value="" selected>-</option>
							<option value="">1452</option>
						</select>
						<p class="col-auto">年</p>
						<select name="" id="" required>
							<option value="" selected>-</option>
							<option value="">04</option>
						</select>
						<p class="col-auto">月</p>
						<select name="" id="" required>
							<option value="" selected>-</option>
							<option value="">23</option>
						</select>
						<p class="col-auto">日</p>
					</dd>
					<dd class="col-lg-6 d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							<sup>*</sup>聯絡電話
						</label>
						<input type="tel" placeholder="請輸入聯絡電話" required>
					</dd>
					<dd class="col-lg-6 d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							<sup>*</sup>電子郵件
						</label>
						<input type="email" placeholder="請輸入電子郵件" required>
					</dd>
					<dd class="col-lg-6 d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							<sup>*</sup>驗證碼
						</label>
						<input type="text" placeholder="驗證碼不分大小寫" required>
						<img src="imgcode/securimage_show.png" alt="">
					</dd>
					<dd class="col-12 mt-3">
						<input type="checkbox" required> 我已經閱讀並同意條款 <a href="privacy.php">隱私權聲明</a>
					</dd>
					<dd class="col-12">
						<button type="submit">確認送出</button>
					</dd>
				</dl>
			</form>
		</section>
	</section>
</section>
<?php include("footer.php")?>
</body>
</html>