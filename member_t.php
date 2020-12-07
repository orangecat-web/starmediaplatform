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
		<div class="title bc-f37216 d-md-flex justify-content-between align-items-end px-3">
			<h2>會員專區<span>Memeber</span></h2>
			<div class="navi">
				<span><a href=".">首頁</a></span>
				<span>會員專區</span>
				<span>劇組/工作人員</span>
			</div>
		</div>

		<div class="row mx-auto container py-4">
			<aside class="col-lg-3 col-md-4">
				<div class="nav flex-column nav-pills mTabs tb-f37216" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<a class="nav-link active" id="v-pills-mTab01-tab" data-toggle="pill" href="#v-pills-mTab01" role="tab" aria-controls="v-pills-mTab01" aria-selected="true">基本資料</a>
					<a class="nav-link" id="v-pills-mTab02-tab" data-toggle="pill" href="#v-pills-mTab02" role="tab" aria-controls="v-pills-mTab02" aria-selected="false">學歷/經歷</a>
					<a class="nav-link" id="v-pills-mTab03-tab" data-toggle="pill" href="#v-pills-mTab03" role="tab" aria-controls="v-pills-mTab03" aria-selected="false">作品</a>
					<a class="nav-link" id="v-pills-mTab04-tab" data-toggle="pill" href="#v-pills-mTab04" role="tab" aria-controls="v-pills-mTab04" aria-selected="false">自我介紹</a>
					<a class="nav-link" id="v-pills-mTab05-tab" data-toggle="pill" href="#v-pills-mTab05" role="tab" aria-controls="v-pills-mTab05" aria-selected="false">修改密碼</a>
				</div>
			</aside>
			<!--container-->
			<section class="col-lg-9 col-md-4">
				<div class="tab-content" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="v-pills-mTab01" role="tabpanel" aria-labelledby="v-pills-mTab01-tab">
						<form action="member_a.php" class="p-4">
							<div class="row mx-auto">
								<div class="col-lg-8 col-md-9">
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
												<sup>*</sup>職業類型
											</label>
											<input type="text" placeholder="請輸入職業類型" required>
										</dd>
										<dd class="d-sm-flex justify-content-start align-items-center">
											<label for="" class="col-auto">
												<sup>*</sup>工作專長
											</label>
											<input type="text" placeholder="請輸入職業類型, 請以逗號分開" required>
										</dd>

										<dd class="d-sm-flex justify-content-between align-items-center">
											<label for="" class="col-auto">
												<sup>*</sup>工作地點
											</label>
											<select name="" id="" required>
												<option value="" selected>-</option>
												<option value="">台北</option>
											</select>
										</dd>
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
												<sup>*</sup>驗證碼
											</label>
											<input type="text" placeholder="驗證碼不分大小寫" required>
											<img src="imgcode/securimage_show.png" alt="">
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
										<dd class="col-12">
											<button type="submit">確認送出</button>
										</dd>
									</dl>
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
						</form>
					</div>

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
								<th>工作類型</th>
								<th>執導/發行公司</th>
								<th>地區</th>
								<th>演出期間</th>
							</tr>
							<tr>
								<td>微電影</td>
								<td>123</td>
								<td>燈光師</td>
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

					<div class="tab-pane fade" id="v-pills-mTab04" role="tabpanel" aria-labelledby="v-pills-mTab04-tab">
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

					<div class="tab-pane fade" id="v-pills-mTab05" role="tabpanel" aria-labelledby="v-pills-mTab05-tab">
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
</body>
</html>