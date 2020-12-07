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
		<div class="title bc-f12433 d-md-flex justify-content-between align-items-end px-3">
			<h2>會員專區<span>Memeber</span></h2>
			<div class="navi">
				<span><a href=".">首頁</a></span>
				<span>會員專區</span>
				<span>代言人</span>
			</div>
		</div>

		<div class="row mx-auto col-lg-10 py-4">
			<aside class="col-lg-3 col-md-4">
				<div class="nav flex-column nav-pills mTabs tb-f12433" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<a class="nav-link active" id="v-pills-mTab01-tab" data-toggle="pill" href="#v-pills-mTab01" role="tab" aria-controls="v-pills-mTab01" aria-selected="true">基本資料</a>
					<a class="nav-link" id="v-pills-mTab02-tab" data-toggle="pill" href="#v-pills-mTab02" role="tab" aria-controls="v-pills-mTab02" aria-selected="false">學歷/經歷</a>
					<a class="nav-link" id="v-pills-mTab03-tab" data-toggle="pill" href="#v-pills-mTab03" role="tab" aria-controls="v-pills-mTab03" aria-selected="false">作品</a>
					<a class="nav-link" id="v-pills-mTab04-tab" data-toggle="pill" href="#v-pills-mTab04" role="tab" aria-controls="v-pills-mTab04" aria-selected="false">合作方式</a>
					<a class="nav-link" id="v-pills-mTab05-tab" data-toggle="pill" href="#v-pills-mTab05" role="tab" aria-controls="v-pills-mTab05" aria-selected="false">自我介紹</a>
					<a class="nav-link" id="v-pills-mTab06-tab" data-toggle="pill" href="#v-pills-mTab06" role="tab" aria-controls="v-pills-mTab06" aria-selected="false">購買紀錄</a>
					<a class="nav-link" id="v-pills-mTab07-tab" data-toggle="pill" href="#v-pills-mTab07" role="tab" aria-controls="v-pills-mTab07" aria-selected="false">我的訂單</a>
					<a class="nav-link" id="v-pills-mTab08-tab" data-toggle="pill" href="#v-pills-mTab08" role="tab" aria-controls="v-pills-mTab08" aria-selected="false">我的服務</a>
					<a class="nav-link" id="v-pills-mTab09-tab" data-toggle="pill" href="#v-pills-mTab09" role="tab" aria-controls="v-pills-mTab09" aria-selected="false">收款帳戶</a>
					<a class="nav-link" id="v-pills-mTab10-tab" data-toggle="pill" href="#v-pills-mTab10" role="tab" aria-controls="v-pills-mTab10" aria-selected="false">修改密碼</a>
				</div>
			</aside>
			<!--container-->
			<section class="col-lg-9 col-md-8">
				<div class="tab-content" id="v-pills-tabContent">
					<!--基本資料-->
					<div class="tab-pane fade show active" id="v-pills-mTab01" role="tabpanel" aria-labelledby="v-pills-mTab01-tab">
						<div class="pTitle">
							<h1>基本資料</h1>
						</div>
						<form action="member_a.php" class="p-4">
							<div class="row mx-auto">
								<div class="col-lg-8 order-lg-1 order-2">
									<div class="text">
										<p>您好，為維護平台品質，張貼工作機會前，請先完成身分認證，</p>
										<p>填寫以下資料及上傳相關文件，我們會再2~3個工作天內審查並回信通知結果!</p>
									</div>
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
												<sup>*</sup>藝名
											</label>
											<input type="text" placeholder="請輸入藝名" required>
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
										<dd class="d-sm-flex justify-content-start align-items-center">
											<label for="" class="col-auto">
												<sup>*</sup>國籍
											</label>
											<p>
												<label for="" class="mr-4"><input class="mr-2" type="radio" name="nationality" id="taiwan" required> 本國籍</label>
												<label for=""><input class="mr-2" type="radio" name="nationality" id="other" required> 非本國籍</label>
											</p>
										</dd>
										<dd class="d-sm-flex justify-content-between align-items-center">
											<label for="" class="col-auto">
												<sup>*</sup>族群
											</label>
											<select name="" id="" required>
												<option value="" selected>-</option>
												<option value="">亞洲</option>
											</select>
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
												<sup>*</sup>身高
											</label>
											<input type="text" placeholder="請輸入身高" required>
											<p class="col-auto pr-0">公分</p>
										</dd>
										<dd class="d-sm-flex justify-content-between align-items-center">
											<label for="" class="col-auto">
												<sup>*</sup>體重
											</label>
											<input type="text" placeholder="請輸入體重" required>
											<p class="col-auto pr-0">公斤</p>
										</dd>
										<dd class="d-sm-flex justify-content-between align-items-center">
											<label for="" class="col-auto">
												<sup>*</sup>身型
											</label>
											<select name="" id="" required>
												<option value="" selected>-</option>
												<option value="">纖細</option>
											</select>
										</dd>
										<dd class="d-sm-flex justify-content-between align-items-center">
											<label for="" class="col-auto">
												<sup>*</sup>髮色
											</label>
											<select name="" id="" required>
												<option value="" selected>-</option>
												<option value="">黑</option>
											</select>
										</dd>
										<dd class="d-sm-flex justify-content-start align-items-center">
											<label for="" class="col-auto">
												<sup>*</sup>語言
											</label>
											<div class="row mx-auto align-items-center">
												<label for="" class="col-auto"><input type="checkbox"> 中文</label>
												<label for="" class="col-auto"><input type="checkbox"> 台語</label>
												<label for="" class="col-auto"><input type="checkbox"> 英文</label>
												<label for="" class="col-auto"><input type="checkbox"> 日文</label>
												<label for="" class="col-auto"><input type="checkbox"> 韓文</label>
												<label for="" class="col-auto"><input type="checkbox"> 廣東話</label>
												<label for="" class="col-auto d-sm-flex justify-content-start align-items-center"><input type="checkbox"><p class="col-auto">其他</p> <input type="text"></label>
											</div>
										</dd>
										<dd class="d-sm-flex justify-content-between align-items-center">
											<label for="" class="col-auto">
												<sup>*</sup>可工作地點
											</label>
											<select name="" id="" required>
												<option value="" selected>-</option>
												<option value="">台北</option>
											</select>
										</dd>
										<dd class="d-sm-flex justify-content-start align-items-center">
											<label for="" class="col-auto">
												<sup>*</sup>經紀人
											</label>
											<p>
												<label for="" class="mr-4"><input class="mr-2" type="radio" name="broker" id="yes" required> 有經紀人</label>
												<label for=""><input class="mr-2" type="radio" name="broker" id="no" required> 無經紀人</label>
											</p>
										</dd>
										<dd class="d-sm-flex justify-content-start align-items-center">
											<label for="" class="col-auto">
												<sup>*</sup>專長
											</label>
											<div class="row align-items-center">
												<label for="" class="col-auto"><input type="checkbox"> 唱歌</label>
												<label for="" class="col-auto"><input type="checkbox"> 唱歌</label>
												<label for="" class="col-auto"><input type="checkbox"> 唱歌</label>
												<label for="" class="col-auto"><input type="checkbox"> 唱歌</label>
												<label for="" class="col-auto"><input type="checkbox"> 唱歌</label>
												<label for="" class="col-auto"><input type="checkbox"> 唱歌</label>
												<label for="" class="col-auto d-sm-flex justify-content-start align-items-center"><input type="checkbox"><p class="col-auto">其他</p> <input type="text"></label>
											</div>
										</dd>
									</dl>
									<dl class="signup">
										<dd class="d-sm-flex justify-content-between align-items-center">
											<label for="" class="col-auto">
												<sup>*</sup>聯絡電話
											</label>
											<input type="tel" placeholder="請輸入聯絡電話" required>
											<p class="col-auto">
												<label for="" class="mr-4"><input class="mr-2" type="radio" name="phone" id="yes" required> 公開</label>
												<label for=""><input class="mr-2" type="radio" name="phone" id="no" required> 隱藏</label>
											</p>
										</dd>
										<dd class="d-sm-flex justify-content-between align-items-center">
											<label for="" class="col-auto">
												<sup>*</sup>電子郵件
											</label>
											<input type="email" placeholder="請輸入電子郵件" required>
										</dd>
										<dd class="d-sm-flex justify-content-between align-items-center">
											<label for="" class="col-auto">
												Line 帳號
											</label>
											<input type="tel" placeholder="請輸入 Line 帳號">
										</dd>
										<dd class="d-sm-flex justify-content-between align-items-center">
											<label for="" class="col-auto">
												Instagram
											</label>
											<input type="tel" placeholder="請輸入 Instagram 連結">
										</dd>
										<dd class="d-sm-flex justify-content-between align-items-center">
											<label for="" class="col-auto">
												Facebook
											</label>
											<input type="tel" placeholder="請輸入 Facebook 連結">
										</dd>
										<dd class="d-sm-flex justify-content-between align-items-center">
											<label for="" class="col-auto">
												其他社群網站
											</label>
											<input type="tel" placeholder="請輸入其他社群網站連結">
										</dd>
										<dd class="d-sm-flex justify-content-between align-items-center mb-0">
											<label for="" class="col-auto">
												<sup>*</sup>身分證正面影本
											</label>
											<div class="input-group">
												<input type="text" class="form-control" placeholder="請上傳身分證影本正面" aria-label="Recipient's username" aria-describedby="button-addon2" required>
												<div class="input-group-append">
													<button class="btn btn-outline-secondary" type="button" id="button-addon2">瀏覽</button>
												</div>
											</div>
										</dd>
										<dd class="col-12 mb-3 d-sm-flex justify-content-end align-items-center"><span class="col-auto">(不會顯示於公開資料中)</span></dd>
										<dd class="d-sm-flex justify-content-between align-items-center">
											<label for="" class="col-auto">
												<sup>*</sup>驗證碼
											</label>
											<input type="text" placeholder="驗證碼不分大小寫" required>
											<img src="imgcode/securimage_show.png" alt="">
										</dd>
										<dd class="col-12">
											<button type="submit">確認送出</button>
										</dd>
									</dl>
								</div>
								<div class="col-lg-4 order-lg-2 order-1">
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
						</form>
					</div>
					<!--學歷/經歷-->
					<div class="tab-pane fade" id="v-pills-mTab02" role="tabpanel" aria-labelledby="v-pills-mTab02-tab">
						<div class="pTitle">
							<h1>學歷/經歷</h1>
						</div>
						<dl class="row mx-auto resumeUpload">
							<dt class="col-12 d-sm-flex justify-content-sm-between align-items-center">
								<span>演出經驗</span>
								<button type="button" class="btn tb-f37216" data-toggle="modal" data-target="#resumeUpload">
									新增<i class="fas fa-plus"></i>
								</button>
							</dt>
							<dt class="col-md-3 TabletsMobile"></dt>
						</dl>
						<table class="deskTop resumeUpload">
							<tr>
								<th>作品類型</th>
								<th>片名/作品名</th>
								<th>所擔任角色</th>
								<th>執導/發行公司</th>
								<th>地區</th>
								<th>演出期間</th>
							</tr>
							<tr>
								<td>微電影</td>
								<td>123</td>
								<td>主角</td>
								<td>公司</td>
								<td>台北</td>
								<td>2018-06-25~2018-07-01</td>
							</tr>
						</table>

						<dl class="row mx-auto mt-4 resumeUpload">
							<dt class="col-12 d-sm-flex justify-content-sm-between align-items-center">
								<span>學歷</span>
								<button type="button" class="btn tb-f37216" data-toggle="modal" data-target="#educationUpload">
									新增<i class="fas fa-plus"></i>
								</button>
							</dt>
							<dt class="col-md-3 TabletsMobile"></dt>
						</dl>
						<table class="deskTop resumeUpload">
							<tr>
								<th>學校名稱</th>
								<th>科系名稱</th>
								<th>學位</th>
								<th>地區</th>
								<th>就學期間</th>
							</tr>
							<tr>
								<td>台灣藝術大學</td>
								<td>表演藝術學系</td>
								<td>學士 / 畢業</td>
								<td>台北</td>
								<td>2014-09~2018-06</td>
							</tr>
						</table>
					</div>
					<!--作品-->
					<div class="tab-pane fade" id="v-pills-mTab03" role="tabpanel" aria-labelledby="v-pills-mTab03-tab">
						<div class="pTitle">
							<h1>作品</h1>
						</div>
						<dl class="row mx-auto mb-4 photoUpload">
							<dt class="col-12">試鏡照</dt>
							<dd class="col-lg-3 col-md-4 col-sm-6"><img src="https://via.placeholder.com/350x350" alt=""></dd>
							<dd class="col-lg-3 col-md-4 col-sm-6"><img src="https://via.placeholder.com/350x350" alt=""></dd>
							<dd class="col-lg-3 col-md-4 col-sm-6"><img src="https://via.placeholder.com/350x350" alt=""></dd>
							<dd class="col-lg-3 col-md-4 col-sm-6"><img src="https://via.placeholder.com/350x350" alt=""></dd>
							<dd class="col-12">
								<div class="input-group mb-3">
									<input type="text" class="form-control" placeholder="未選擇檔案" aria-label="Recipient's username" aria-describedby="button-addon2">
									<div class="input-group-append">
										<button class="btn btn-outline-secondary" type="button" id="button-addon2">瀏覽</button>
									</div>
								</div>
							</dd>
						</dl>
						<dl class="videoUpload signup">
							<dt class="col-12">影音作品</dt>
							<dd><input type="text" placeholder="請輸入youtube網址連結"></dd>
							<dd><input type="text" placeholder="請輸入youtube網址連結"></dd>
							<dd><input type="text" placeholder="請輸入youtube網址連結"></dd>
							<dd><input type="text" placeholder="請輸入youtube網址連結"></dd>
							<dd><input type="text" placeholder="請輸入youtube網址連結"></dd>
							<dd>
								<button type="reset">取消</button>
								<button type="submit">確定上傳</button>
							</dd>
						</dl>
					</div>
					<!--合作方式-->
					<div class="tab-pane fade" id="v-pills-mTab04" role="tabpanel" aria-labelledby="v-pills-mTab04-tab">
						<div class="pTitle">
							<h1>合作方式</h1>
						</div>
						<div class="introduction">
							<dl class="row mx-auto signup">
								<dd class="col-12 d-sm-flex justify-content-start align-items-center mb-0">
									<label for="">
										合作方式 (可複選)
									</label>
								</dd>
								<dd class="col-lg-3 col-md-3 col-6 d-sm-flex justify-content-start align-items-center">
									<input type="checkbox">
									<label for="" class="col-auto">拍廣告</label>
								</dd>
								<dd class="col-lg-3 col-md-3 col-6 d-sm-flex justify-content-start align-items-center">
									<input type="checkbox">
									<label for="" class="col-auto">外拍</label>
								</dd>
							</dl>
							<dl class="row mx-auto signup">
								<dd class="col-12 d-sm-flex justify-content-start align-items-center mb-0">
									<label for="">
										喜好商品類型 (可複選)
									</label>
								</dd>
								<dd class="col-lg-3 col-md-3 col-6 d-sm-flex justify-content-start align-items-center">
									<input type="checkbox">
									<label for="" class="col-auto">居家生活</label>
								</dd>
								<dd class="col-lg-3 col-md-3 col-6 d-sm-flex justify-content-start align-items-center">
									<input type="checkbox">
									<label for="" class="col-auto">旅遊</label>
								</dd>
							</dl>
							<div class="mt-4 lastBtn">
								<button type="reset">取消</button>
								<button type="submit">確定儲存</button>
							</div>
						</div>
					</div>
					<!--自我介紹-->
					<div class="tab-pane fade" id="v-pills-mTab05" role="tabpanel" aria-labelledby="v-pills-mTab05-tab">
						<div class="pTitle">
							<h1>自我介紹</h1>
						</div>
						<div class="introduction">
							<div class="editor p-3">
								自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹自我介紹
							</div>
							<div class="mt-4 lastBtn">
								<button type="reset">取消</button>
								<button type="submit">確定儲存</button>
							</div>
						</div>
					</div>
					<!--購買紀錄-->
					<div class="tab-pane fade" id="v-pills-mTab06" role="tabpanel" aria-labelledby="v-pills-mTab06-tab">
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
					<!--我的訂單-->
					<div class="tab-pane fade" id="v-pills-mTab07" role="tabpanel" aria-labelledby="v-pills-mTab07-tab">
						<div class="pTitle">
							<h1>我的訂單</h1>
						</div>
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
					<!--我的服務-->
					<div class="tab-pane fade" id="v-pills-mTab08" role="tabpanel" aria-labelledby="v-pills-mTab08-tab">
						<div class="pTitle d-sm-flex justify-content-between align-items-center">
							<h1>我的服務</h1>
							<button type="button" class="btn addItems" data-toggle="modal" data-target="#addMyService">
								增加服務項目 <i class="fas fa-plus-circle"></i>
							</button>
						</div>
						<dl class="row mx-auto">
							<!--start 最多 12 筆-->
							<dd class="col-md-4 col-sm-6">
								<figure class="myService">
									<img src="https://via.placeholder.com/350x350" alt="">
									<figcaption>
										<p class="d-flex justify-content-between">
											<button type="button" class="btn" data-toggle="modal" data-target="#editMyService">
												<i class="fas fa-pencil-alt"></i>
											</button>
											<button><i class="far fa-trash-alt"></i></button>
										</p>
										<p class="d-flex justify-content-between px-2">
											<span>一日外拍 8小時</span>
											<span>NT850</span>
										</p>
										<p class="d-sm-flex justify-content-sm-end align-items-center px-2">
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											(1)
										</p>
									</figcaption>
								</figure>
							</dd>
							<!--end-->
							<dd class="col-md-4 col-sm-6">
								<figure class="myService">
									<img src="https://via.placeholder.com/350x350" alt="">
									<figcaption>
										<p class="d-flex justify-content-between">
											<button type="button" class="btn" data-toggle="modal" data-target="#editMyService">
												<i class="fas fa-pencil-alt"></i>
											</button>
											<button><i class="far fa-trash-alt"></i></button>
										</p>
										<p class="d-flex justify-content-between px-2">
											<span>一日外拍 8小時</span>
											<span>NT850</span>
										</p>
										<p class="d-sm-flex justify-content-sm-end align-items-center px-2">
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											(1)
										</p>
									</figcaption>
								</figure>
							</dd>
							<dd class="col-md-4 col-sm-6">
								<figure class="myService">
									<img src="https://via.placeholder.com/350x350" alt="">
									<figcaption>
										<p class="d-flex justify-content-between">
											<button type="button" class="btn" data-toggle="modal" data-target="#editMyService">
												<i class="fas fa-pencil-alt"></i>
											</button>
											<button><i class="far fa-trash-alt"></i></button>
										</p>
										<p class="d-flex justify-content-between px-2">
											<span>一日外拍 8小時</span>
											<span>NT850</span>
										</p>
										<p class="d-sm-flex justify-content-sm-end align-items-center px-2">
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											(1)
										</p>
									</figcaption>
								</figure>
							</dd>
						</dl>
						<nav aria-label="Page navigation">
							<ul class="pagination justify-content-center">
								<li class="page-item disabled">
									<a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a>
								</li>
								<li class="page-item"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item">
									<a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
								</li>
							</ul>
						</nav>
					</div>
					<!--收款帳戶-->
					<div class="tab-pane fade" id="v-pills-mTab09" role="tabpanel" aria-labelledby="v-pills-mTab09-tab">
						<div class="pTitle">
							<h1>收款帳戶</h1>
						</div>
						<dl class="col-lg-8 mx-auto signup">
							<form action="">
								<dd class="d-sm-flex justify-content-between align-items-center">
									<label for="" class="col-auto">
										<sup>*</sup>姓名
									</label>
									<input type="text" placeholder="請輸入姓名" required>
								</dd>
								<dd class="d-sm-flex justify-content-between align-items-center">
									<label for="" class="col-auto">
										<sup>*</sup>身份證字號 (統一編號)
									</label>
									<input type="text" placeholder="請輸入身份證字號 (統一編號)" required>
								</dd>
								<dd class="d-sm-flex justify-content-between align-items-center">
									<label for="" class="col-auto">
										<sup>*</sup>銀行名稱
									</label>
									<input type="text" placeholder="請輸入銀行名稱" required>
								</dd>
								<dd class="d-sm-flex justify-content-between align-items-center">
									<label for="" class="col-auto">
										<sup>*</sup>銀行帳號
									</label>
									<input type="text" placeholder="請輸入銀行帳號" required>
								</dd>
								<div class="input-group mb-3">
									<input type="text" class="form-control" placeholder="未選擇檔案" aria-label="Recipient's username" aria-describedby="button-addon2">
									<div class="input-group-append">
										<button class="btn btn-outline-secondary" type="button" id="button-addon2">瀏覽</button>
									</div>
								</div>
								<dd>
									<button type="reset">取消</button>
									<button type="submit">確定儲存</button>
								</dd>
							</form>
						</dl>
					</div>
					<!--修改密碼-->
					<div class="tab-pane fade" id="v-pills-mTab10" role="tabpanel" aria-labelledby="v-pills-mTab10-tab">
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
<!--新增演出經驗-->
<div class="modal fade" id="resumeUpload" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="ModalCenterTitle">新增演出經驗</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<dl class="signup">
					<dd class="d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							作品類型
						</label>
						<select name="" id="">
							<option value="" selected>-</option>
							<option value="">1452</option>
						</select>
					</dd>
					<dd class="d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							片名/作品名
						</label>
						<input type="text" placeholder="請輸入片名/作品名">
					</dd>
					<dd class="d-sm-flex justify-content-start align-items-center">
						<label for="" class="col-auto">
							擔任角色
						</label>
						<input type="text" placeholder="請輸入擔任角色">
					</dd>
					<dd class="d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							執導/發行公司
						</label>
						<input type="tel" placeholder="請輸入執導/發行公司">
					</dd>
					<dd class="d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							地區
						</label>
						<select name="" id="">
							<option value="" selected>-</option>
							<option value="">地區</option>
						</select>
						<select name="" id="">
							<option value="" selected>-</option>
							<option value="">地區</option>
						</select>
					</dd>

					<dd class="d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							時間
						</label>
						<p class="col-auto">開始</p>
						<select name="" id="">
							<option value="" selected>-</option>
							<option value="">年</option>
						</select>
						<p class="col-auto">年</p>
						<select name="" id="">
							<option value="" selected>-</option>
							<option value="">月</option>
						</select>
						<p class="col-auto">月</p>
						<select name="" id="">
							<option value="" selected>-</option>
							<option value="">日</option>
						</select>
						<p class="col-auto">日</p>
					</dd>
					<dd class="d-sm-flex justify-content-end align-items-center">
						<p class="col-auto">結束</p>
						<select name="" id="">
							<option value="" selected>-</option>
							<option value="">年</option>
						</select>
						<p class="col-auto">年</p>
						<select name="" id="">
							<option value="" selected>-</option>
							<option value="">月</option>
						</select>
						<p class="col-auto">月</p>
						<select name="" id="">
							<option value="" selected>-</option>
							<option value="">日</option>
						</select>
						<p class="col-auto">日</p>
					</dd>

				</dl>
			</div>
			<div class="modal-footer">
				<button type="reset" class="btn">取消</button>
				<button type="submit" class="btn">儲存</button>
			</div>
		</div>
	</div>
</div>
<!--新增學歷-->
<div class="modal fade" id="educationUpload" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="ModalCenterTitle">新增學歷</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<dl class="signup">
					<dd class="d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							學校名稱
						</label>
						<input type="text" placeholder="學校名稱">
					</dd>
					<dd class="d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							學歷
						</label>
						<select name="" id="">
							<option value="" selected>-</option>
							<option value="">學歷</option>
						</select>
					</dd>
					<dd class="d-sm-flex justify-content-start align-items-center">
						<label for="" class="col-auto">
							科系名稱
						</label>
						<input type="text" placeholder="請輸入科系名稱">
					</dd>
					<dd class="d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							地區
						</label>
						<select name="" id="">
							<option value="" selected>-</option>
							<option value="">地區</option>
						</select>
						<select name="" id="">
							<option value="" selected>-</option>
							<option value="">地區</option>
						</select>
					</dd>

					<dd class="d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							就學期間
						</label>
						<p class="col-auto">開始</p>
						<select name="" id="">
							<option value="" selected>-</option>
							<option value="">年</option>
						</select>
						<p class="col-auto">年</p>
						<select name="" id="">
							<option value="" selected>-</option>
							<option value="">月</option>
						</select>
						<p class="col-auto">月</p>
					<dd class="d-sm-flex justify-content-end align-items-center">
						<p class="col-auto">結束</p>
						<select name="" id="">
							<option value="" selected>-</option>
							<option value="">年</option>
						</select>
						<p class="col-auto">年</p>
						<select name="" id="">
							<option value="" selected>-</option>
							<option value="">月</option>
						</select>
						<p class="col-auto">月</p>
					</dd>
				</dl>
			</div>
			<div class="modal-footer">
				<button type="reset" class="btn">取消</button>
				<button type="submit" class="btn">儲存</button>
			</div>
		</div>
	</div>
</div>
<!--增加服務項目-->
<div class="modal fade" id="addMyService" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="ModalCenterTitle">增加服務項目</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<dl class="row mx-auto signup myService">
					<dd class="col-12 d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto pl-0">
							<sup>*</sup>服務名稱
						</label>
						<input type="text" placeholder="請輸入服務名稱" required>
					</dd>
					<dd class="col-sm-6">
						<label for="" class="col-auto pl-0">
							<sup>*</sup>價格
						</label>
						<input type="text" placeholder="請輸入價格" required>
					</dd>
					<dd class="col-sm-6">
						<label for="" class="col-auto pl-0">
							<sup>*</sup>預計完成天數
						</label>
						<input type="text" placeholder="請輸入預計完成天數" required>
					</dd>
					<dd class="col-12 d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto pl-0">
							圖片上傳
						</label>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="未選擇檔案" aria-label="Recipient's username" aria-describedby="button-addon2">
							<div class="input-group-append">
								<button class="btn btn-outline-secondary" type="button" id="button-addon2">瀏覽</button>
							</div>
						</div>
					</dd>
					<dd class="col-12 row">
						<p class="col-md-4 col-6">
							<img src="https://via.placeholder.com/350x350" alt="">
						</p>
						<p class="col-md-4 col-6">
							<img src="https://via.placeholder.com/350x350" alt="">
						</p>
						<p class="col-md-4 col-6">
							<img src="https://via.placeholder.com/350x350" alt="">
						</p>
					</dd>
					<dd class="col-12">
						<label for="" class="col-auto pl-0">
							<sup>*</sup>服務介紹
						</label>
						<textarea name="" id="" rows="5" placeholder="請輸入服務介紹" required></textarea>
					</dd>
					<dd class="col-12">
						<label for="" class="col-auto pl-0">
							加值服務
						</label>
						<p class="d-sm-flex justify-content-between align-items-center">
							<input type="text" placeholder="請輸入加值服務">
							<span class="px-2">NT$</span>
							<input class="col-auto" type="text" placeholder="請輸入價格">
							<button><i class="fas fa-times"></i></button>
						</p>
						<p class="mt-3"><a href="#" class="addItems">增加服務項目<i class="fas fa-plus-circle"></i></a></p>
					</dd>
				</dl>
			</div>
			<div class="modal-footer">
				<button type="reset" class="btn">取消</button>
				<button type="submit" class="btn">儲存</button>
			</div>
		</div>
	</div>
</div>
<!--修改服務項目-->
<div class="modal fade" id="editMyService" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="ModalCenterTitle">增加服務項目</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<dl class="row mx-auto signup myService">
					<dd class="col-12 d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto pl-0">
							<sup>*</sup>服務名稱
						</label>
						<input type="text" placeholder="請輸入服務名稱" value="服務名稱" required>
					</dd>
					<dd class="col-sm-6">
						<label for="" class="col-auto pl-0">
							<sup>*</sup>價格
						</label>
						<input type="text" placeholder="請輸入價格" value="880" required>
					</dd>
					<dd class="col-sm-6">
						<label for="" class="col-auto pl-0">
							<sup>*</sup>預計完成天數
						</label>
						<input type="text" placeholder="請輸入預計完成天數" value="888" required>
					</dd>
					<dd class="col-12 d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto pl-0">
							圖片上傳
						</label>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="未選擇檔案" aria-label="Recipient's username" aria-describedby="button-addon2">
							<div class="input-group-append">
								<button class="btn btn-outline-secondary" type="button" id="button-addon2">瀏覽</button>
							</div>
						</div>
					</dd>
					<dd class="col-12 row">
						<p class="col-md-4 col-6">
							<img src="https://via.placeholder.com/350x350" alt="">
						</p>
						<p class="col-md-4 col-6">
							<img src="https://via.placeholder.com/350x350" alt="">
						</p>
						<p class="col-md-4 col-6">
							<img src="https://via.placeholder.com/350x350" alt="">
						</p>
					</dd>
					<dd class="col-12">
						<label for="" class="col-auto pl-0">
							<sup>*</sup>服務介紹
						</label>
						<textarea name="" id="" rows="5" placeholder="請輸入服務介紹" required>服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹服務介紹</textarea>
					</dd>
					<dd class="col-12">
						<label for="" class="col-auto pl-0">
							加值服務
						</label>
						<p class="d-sm-flex justify-content-between align-items-center">
							<input type="text" placeholder="請輸入加值服務" value="FB 發文">
							<span class="px-2">NT$</span>
							<input class="col-auto" type="text" placeholder="請輸入價格" value="880">
							<button><i class="fas fa-times"></i></button>
						</p>
						<p class="mt-3"><a href="#" class="addItems">增加服務項目<i class="fas fa-plus-circle"></i></a></p>
					</dd>
				</dl>
			</div>
			<div class="modal-footer">
				<button type="reset" class="btn">取消</button>
				<button type="submit" class="btn">儲存</button>
			</div>
		</div>
	</div>
</div>
</body>
</html>