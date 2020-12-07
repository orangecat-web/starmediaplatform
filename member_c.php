<?php include("header.php")?>
<!--note: pages css-->
<link rel="stylesheet"  href="css/member.css">
<link rel="stylesheet"  href="css/d-member.css">

<!--banner-->
<section class="banner mb-4">
	<img src="upload/img-page-banner.jpg" alt="">
</section>

<section class="container-fluid px-4">
	<section class="inPage col-12 px-0">
		<!--title-->
		<div class="title bc-444444 d-md-flex justify-content-between align-items-end px-3">
			<h2>會員專區<span>Memeber</span></h2>
			<div class="navi">
				<span><a href=".">首頁</a></span>
				<span>會員專區</span>
				<span>會員資料管理</span>
			</div>
		</div>

		<div class="row mx-auto container py-4">
			<aside class="col-lg-3 col-md-4">
				<div class="nav flex-column nav-pills mTabs tb-444444" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<a class="nav-link active" id="v-pills-mTab01-tab" data-toggle="pill" href="#v-pills-mTab01" role="tab" aria-controls="v-pills-mTab01" aria-selected="true">基本資料</a>
					<a class="nav-link" id="v-pills-mTab02-tab" data-toggle="pill" href="#v-pills-mTab02" role="tab" aria-controls="v-pills-mTab02" aria-selected="false">購買紀錄</a>
					<a class="nav-link" id="v-pills-mTab03-tab" data-toggle="pill" href="#v-pills-mTab03" role="tab" aria-controls="v-pills-mTab03" aria-selected="false">修改密碼</a>
				</div>
			</aside>
			<!--container-->
			<section class="col-lg-9 col-md-4">
				<div class="tab-content" id="v-pills-tabContent">
					<!--基本資料-->
					<div class="tab-pane fade show active" id="v-pills-mTab01" role="tabpanel" aria-labelledby="v-pills-mTab01-tab">
						<div class="pTitle">
							<h1>基本資料</h1>
						</div>
						<div class="row mx-auto">
							<div class="col-lg-8 col-md-9">
								<section class="container">
									<form action="member_c.php" class="p-4">
										<div class="col-12 pTitle">
											<h3>會員帳號</h3>
										</div>
										<dl class="signup">
											<dd class="d-sm-flex justify-content-between align-items-center">
												<label for="" class="col-auto">
													會員帳號
												</label>
												<input type="email" value="mail@mail.com" disabled>
											</dd>
										</dl>

										<div class="col-12 pTitle">
											<h3>基本資料 <span>(*為必填項目)</span></h3>
										</div>
										<dl class="signup">
											<dd class="d-sm-flex justify-content-between align-items-center">
												<label for="" class="col-auto">
													<sup>*</sup>姓名
												</label>
												<input type="text" placeholder="請輸入姓名" required>
												<span class="col-auto">(不會顯示於公開資料中)</span>
											</dd>
											<dd class="d-sm-flex justify-content-between align-items-center">
												<label for="" class="col-auto">
													<sup>*</sup>暱稱
												</label>
												<input type="text" placeholder="請輸入暱稱" required>
											</dd>
											<dd class="d-sm-flex justify-content-start align-items-center">
												<label for="" class="col-auto">
													<sup>*</sup>性別
												</label>
												<p>
													<label for="" class="mr-4"><input class="mr-2" type="radio" name="gender" id="male" required> 男</label>
													<label for=""><input class="mr-2" type="radio" name="gender" id="female" required> 女</label>
												</p>
											</dd>
											<dd class="d-sm-flex justify-content-between align-items-center">
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
											<dd class="d-sm-flex justify-content-between align-items-center">
												<label for="" class="col-auto">
													<sup>*</sup>聯絡電話
												</label>
												<input type="tel" placeholder="請輸入聯絡電話" required>
											</dd>
											<dd class="d-sm-flex justify-content-between align-items-center">
												<label for="" class="col-auto">
													<sup>*</sup>電子郵件
												</label>
												<input type="email" placeholder="請輸入電子郵件" required>
											</dd>
											<dd class="d-sm-flex justify-content-between align-items-center">
												<label for="" class="col-auto">
													<sup>*</sup>驗證碼
												</label>
												<input type="text" placeholder="驗證碼不分大小寫" required>
												<img src="imgcode/securimage_show.png" alt="">
											</dd>
											<dd class="col-12">
												<button type="submit">確定儲存</button>
											</dd>
										</dl>
									</form>
								</section>
							</div>
							<div class="col-lg-4 col-md-3">
								<img src="https://via.placeholder.com/350x350" alt="">
								<p>更新您的大頭貼</p>
								<div class="input-group mb-3">
									<input type="text" class="form-control" placeholder="未選擇檔案" aria-label="Recipient's username" aria-describedby="button-addon2">
									<div class="input-group-append">
										<button class="btn btn-outline-secondary" type="button" id="button-addon2">瀏覽</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--購買紀錄-->
					<div class="tab-pane fade" id="v-pills-mTab02" role="tabpanel" aria-labelledby="v-pills-mTab02-tab">
						<div class="pTitle">
							<h1>購買紀錄</h1>
						</div>
						<nav class="mb-4">
							<div class="nav nav-pills d-flex justify-content-start" id="nav-tab" role="tablist">
								<a class="nav-item nav-link mr-sm-3 active" id="nav-items01-tab" data-toggle="tab" href="#nav-items01" role="tab" aria-controls="nav-items01" aria-selected="false">購買</a>
								<a class="nav-item nav-link" id="nav-items02-tab" data-toggle="tab" href="#nav-items02" role="tab" aria-controls="nav-items02" aria-selected="false">課程</a>
							</div>
						</nav>

						<div class="tab-content" id="nav-tabContent">
							<div class="tab-pane fade show active" id="nav-items01" role="tabpanel" aria-labelledby="nav-items01-tab">
								<dl class="shopHistory">
									<dd onclick="location.href='order_detail.php'" class="py-3">
										<dl class="row mx-auto historyIntro">
											<dd class="col-lg-3 col-md-4">
												<img src="https://via.placeholder.com/350x350" alt="">
											</dd>
											<dd class="col-lg-9 col-md-8">
												<p>日期 : 2018-09-06</p>
												<p class="d-sm-flex justify-content-between">
													<span>訂單 : 一日外拍 8小時</span>
													<span>總計 <span>NT850</span></span>
												</p>
												<p>賣家 : <span>lily</span></p>
											</dd>
										</dl>
									</dd>
								</dl>
							</div>
							<div class="tab-pane fade" id="nav-items02" role="tabpanel" aria-labelledby="nav-items02-tab">
								<dl class="shopHistory">
									<dd onclick="location.href='order_detail.php'" class="py-3">
										<dl class="row mx-auto historyIntro">
											<dd class="col-lg-3 col-md-4">
												<img src="https://via.placeholder.com/350x350" alt="">
											</dd>
											<dd class="col-lg-9 col-md-8">
												<p>日期 : 2018-09-06</p>
												<p class="d-sm-flex justify-content-between">
													<span>訂單 : 一日外拍 8小時</span>
													<span>總計 <span>NT850</span></span>
												</p>
												<p>賣家 : <span>lily</span></p>
											</dd>
										</dl>
									</dd>
								</dl>
							</div>
						</div>
					</div>
					<!--修改密碼-->
					<div class="tab-pane fade" id="v-pills-mTab03" role="tabpanel" aria-labelledby="v-pills-mTab03-tab">
						<div class="pTitle">
							<h1>修改密碼</h1>
						</div>
						<dl class="col-lg-8 mx-auto signup">
							<dd class="d-sm-flex justify-content-between align-items-center">
								<label for="" class="col-auto">
									<sup>*</sup>修改密碼
								</label>
								<input type="password" placeholder="請輸入密碼" required>
							</dd>
							<dd class="d-sm-flex justify-content-between align-items-center">
								<label for="" class="col-auto">
									<sup>*</sup>確認密碼
								</label>
								<input type="password" placeholder="請再次輸入密碼" required>
							</dd>
							<dd>
								<button type="reset">取消</button>
								<button type="submit">確定儲存</button>
							</dd>
						</dl>
					</div>
				</div>
			</section>
		</div>
	</section>
</section>

<?php include("footer.php")?>
</body>
</html>