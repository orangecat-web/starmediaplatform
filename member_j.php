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
				<span>演出/工作機會發起人</span>
			</div>
		</div>

		<div class="row mx-auto container py-4">
			<aside class="col-lg-3 col-md-4">
				<div class="nav flex-column nav-pills mTabs tb-f37216" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<a class="nav-link active" id="v-pills-mTab01-tab" data-toggle="pill" href="#v-pills-mTab01" role="tab" aria-controls="v-pills-mTab01" aria-selected="true">基本資料</a>
					<a class="nav-link" id="v-pills-mTab02-tab" data-toggle="pill" href="#v-pills-mTab02" role="tab" aria-controls="v-pills-mTab02" aria-selected="false">公司簡介</a>
					<a class="nav-link" id="v-pills-mTab03-tab" data-toggle="pill" href="#v-pills-mTab03" role="tab" aria-controls="v-pills-mTab03" aria-selected="false">演出機會</a>
					<a class="nav-link" id="v-pills-mTab04-tab" data-toggle="pill" href="#v-pills-mTab04" role="tab" aria-controls="v-pills-mTab04" aria-selected="false">工作機會</a>
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
										<dd class="d-sm-flex justify-content-start align-items-center">
											<label for="" class="col-auto">
												<sup>*</sup>身份
											</label>
											<p>
												<label for="" class="mr-4"><input class="mr-2" type="radio" name="identity" id="personal" required> 個人</label>
												<label for=""><input class="mr-2" type="radio" name="identity" id="company" required> 公司/工作室/劇組</label>
											</p>
										</dd>
										<dd class="d-sm-flex justify-content-between align-items-center">
											<label for="" class="col-auto">
												<sup>*</sup>發起者名稱
											</label>
											<input type="text" placeholder="請輸入發起者名稱" required>
										</dd>
										<dd class="d-sm-flex justify-content-between align-items-center">
											<label for="" class="col-auto">
												<sup>*</sup>負責人姓名
											</label>
											<input type="text" placeholder="請輸入負責人姓名" required>
											<span class="col-auto">(不會顯示於公開資料中)</span>
										</dd>
										<dd class="d-sm-flex justify-content-between align-items-center">
											<label for="" class="col-auto">
												<sup>*</sup>負責身分證字號
											</label>
											<input type="text" placeholder="請輸入負責身分證字號" required>
											<span class="col-auto">(不會顯示於公開資料中)</span>
										</dd>
										<dd class="d-sm-flex justify-content-between align-items-center">
											<label for="" class="col-auto">
												統一編號
											</label>
											<input type="text" placeholder="請輸入統一編號">
										</dd>
									</dl>
									<div class="col-12 pTitle">
										<h3>聯絡人資料 <span>(*為必填項目)</span></h3>
									</div>
									<dl class="signup">
										<dd class="d-sm-flex justify-content-between align-items-center">
											<label for="" class="col-auto">
												<sup>*</sup>聯絡人姓名
											</label>
											<input type="text" placeholder="請輸入聯絡人姓名" required>
										</dd>
										<dd class="d-sm-flex justify-content-between align-items-center">
											<label for="" class="col-auto">
												<sup>*</sup>聯絡人電話
											</label>
											<input type="tel" placeholder="請輸入聯絡人電話" required>
											<p class="col-auto">
												<label for="" class="mr-4"><input class="mr-2" type="radio" name="phone" id="yes" required> 公開</label>
												<label for=""><input class="mr-2" type="radio" name="phone" id="no" required> 隱藏</label>
											</p>
										</dd>
										<dd class="d-sm-flex justify-content-start align-items-center">
											<label for="" class="col-auto">
												<sup>*</sup>聯絡地址
											</label>
											<select name="" id="" class="col-auto mr-2" required>
												<option value="" selected>-</option>
												<option value="">台北市</option>
											</select>
											<select name="" id="" class="col-auto mr-2" required>
												<option value="" selected>-</option>
												<option value="">信義區</option>
											</select>
										</dd>
										<dd class="d-sm-flex justify-content-between align-items-center">
											<input type="tel" placeholder="請輸入聯絡地址" required>
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
												公司網站
											</label>
											<input type="tel" placeholder="請輸入公司網站">
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
							<h1>公司(發起人)簡介</h1>
						</div>
						<div class="introduction">
							<div class="editor p-3">
								公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介公司簡介
							</div>
							<div class="mt-4 lastBtn">
								<button type="reset">取消</button>
								<button type="submit">確定儲存</button>
							</div>
						</div>
					</div>

					<div class="tab-pane fade" id="v-pills-mTab03" role="tabpanel" aria-labelledby="v-pills-mTab03-tab">
						<div class="pTitle d-sm-flex justify-content-sm-between align-items-center">
							<h1>演出機會</h1>
							<button type="button" class="btn tb-f37216" data-toggle="modal" data-target="#resumeUpload">
								新增<i class="fas fa-plus"></i>
							</button>
						</div>
						<div id="accordion">
							<div class="card faq">
								<div class="card-header faqHeader" id="heading1">
									<h5 class="mb-0">
										<button class="btn btn-link col-12 d-sm-flex justify-content-sm-between faq" data-toggle="collapse" data-target="#job1-1" aria-expanded="true" aria-controls="faq1">
											<p><i class="fas fa-file-alt"></i> OOOOOOO專案名稱</p>
											<p>刊登期間 2018/07/01 至 2018/07/15</p>
										</button>
									</h5>
								</div>

								<div id="job1-1" class="collapse faqContent" aria-labelledby="heading1" data-parent="#accordion">
									<div class="row mx-auto card-body">
										<div class="col-lg-6">
											<ul class="prodList">
												<li>發起者名稱 : XXX股份有限公司</li>
												<li>專案名稱 : OOOOOOO</li>
												<li>專案類型 : 微電影</li>
												<li>專案敘述 : 文字敘述</li>
												<li>專案到期日 : 2018-09-20</li>
												<li>試鏡日期: 2018-07-01~2018-08-20</li>
												<li>試鏡地點 : 台北市XX區XX路XX號</li>
												<li>試鏡注意事項 : 無</li>
												<li>合作相關事宜 : 文字敘述</li>
												<li>聯絡信箱 : 123456@mail.com</li>
												<li>聯絡電話:02-0202020202</li>
											</ul>
										</div>
										<div class="col-lg-6">
											<dl class="row mx-auto prodList">
												<dd class="col-12">專案圖片</dd>
												<dd class="col-lg-6 mb-4">
													<img src="https://via.placeholder.com/350x350" alt="">
												</dd>
												<dd class="col-lg-6 mb-4">
													<img src="https://via.placeholder.com/350x350" alt="">
												</dd>
												<dd class="col-lg-6 mb-4">
													<img src="https://via.placeholder.com/350x350" alt="">
												</dd>
												<dd class="col-lg-6 mb-4">
													<img src="https://via.placeholder.com/350x350" alt="">
												</dd>
											</dl>
										</div>
										<table class="col-12 resumeUpload">
											<tr>
												<th>角色</th>
												<th>人數</th>
												<th>族群</th>
												<th>語言</th>
												<th>報酬</th>
												<th>腳色敘述</th>
											</tr>
											<tr>
												<td>男主角</td>
												<td>1 名</td>
												<td>華人</td>
												<td>中文</td>
												<td>有報酬</td>
												<td>參考角色XXXXXX</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="tab-pane fade" id="v-pills-mTab04" role="tabpanel" aria-labelledby="v-pills-mTab04-tab">
						<div class="pTitle d-sm-flex justify-content-sm-between align-items-center">
							<h1>工作機會</h1>
							<button type="button" class="btn tb-f37216" data-toggle="modal" data-target="#jobsUpload">
								新增<i class="fas fa-plus"></i>
							</button>
						</div>
						<div id="accordion">
							<div class="card faq">
								<div class="card-header faqHeader" id="heading1">
									<h5 class="mb-0">
										<button class="btn btn-link col-12 d-sm-flex justify-content-sm-between faq" data-toggle="collapse" data-target="#job2-1" aria-expanded="true" aria-controls="faq1">
											<p><i class="fas fa-file-alt"></i> OOOOOOO專案名稱</p>
											<p>刊登期間 2018/07/01 至 2018/07/15</p>
										</button>
									</h5>
								</div>

								<div id="job2-1" class="collapse faqContent" aria-labelledby="heading1" data-parent="#accordion">
									<div class="row mx-auto card-body">
										<div class="col-lg-6">
											<ul class="prodList">
												<li>發起者名稱 : XXX股份有限公司</li>
												<li>專案名稱 : OOOOOOO</li>
												<li>專案類型 : 微電影</li>
												<li>專案敘述 : 文字敘述</li>
												<li>專案到期日 : 2018-09-20</li>
												<li>試鏡日期: 2018-07-01~2018-08-20</li>
												<li>試鏡地點 : 台北市XX區XX路XX號</li>
												<li>試鏡注意事項 : 無</li>
												<li>合作相關事宜 : 文字敘述</li>
												<li>聯絡信箱 : 123456@mail.com</li>
												<li>聯絡電話:02-0202020202</li>
											</ul>
										</div>
										<div class="col-lg-6">
											<dl class="row mx-auto prodList">
												<dd class="col-12">專案圖片</dd>
												<dd class="col-lg-6 mb-4">
													<img src="https://via.placeholder.com/350x350" alt="">
												</dd>
												<dd class="col-lg-6 mb-4">
													<img src="https://via.placeholder.com/350x350" alt="">
												</dd>
												<dd class="col-lg-6 mb-4">
													<img src="https://via.placeholder.com/350x350" alt="">
												</dd>
												<dd class="col-lg-6 mb-4">
													<img src="https://via.placeholder.com/350x350" alt="">
												</dd>
											</dl>
										</div>
										<table class="col-12 resumeUpload">
											<tr>
												<th>角色</th>
												<th>人數</th>
												<th>族群</th>
												<th>語言</th>
												<th>報酬</th>
												<th>腳色敘述</th>
											</tr>
											<tr>
												<td>男主角</td>
												<td>1 名</td>
												<td>華人</td>
												<td>中文</td>
												<td>有報酬</td>
												<td>參考角色XXXXXX</td>
											</tr>
										</table>
									</div>
								</div>
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
				<h5 class="modal-title" id="ModalCenterTitle">新增代言工作</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<dl class="signup">
					<dd class="d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							<sup>*</sup>發起者名稱
						</label>
						<input type="text" placeholder="請輸入發起者名稱" required>
					</dd>
					<dd class="d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							<sup>*</sup>專案名稱
						</label>
						<input type="text" placeholder="請輸入專案名稱" required>
					</dd>
					<dd class="d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							<sup>*</sup>專案類型
						</label>
						<select name="" id="" required>
							<option value="" selected>-</option>
							<option value="">專案類型</option>
						</select>
					</dd>
					<dd class="d-sm-flex justify-content-between align-items-start">
						<label for="" class="col-auto">
							<sup>*</sup>專案敘述
						</label>
						<textarea name="" id="" cols="30" rows="10" placeholder="請輸入專案敘述"></textarea>
					</dd>
					<dd class="d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							<sup>*</sup>專案期間
						</label>
						<p class="col-auto">開始</p>
						<select name="" id="" required>
							<option value="" selected>-</option>
							<option value="">年</option>
						</select>
						<p class="col-auto">年</p>
						<select name="" id="" required>
							<option value="" selected>-</option>
							<option value="">月</option>
						</select>
						<p class="col-auto">月</p>
						<select name="" id="" required>
							<option value="" selected>-</option>
							<option value="">日</option>
						</select>
						<p class="col-auto">日</p>
					</dd>
					<dd class="d-sm-flex justify-content-between align-items-center">
						<p class="col-auto ml-lg-5 pl-lg-5">結束</p>
						<select name="" id="" required>
							<option value="" selected>-</option>
							<option value="">年</option>
						</select>
						<p class="col-auto">年</p>
						<select name="" id="" required>
							<option value="" selected>-</option>
							<option value="">月</option>
						</select>
						<p class="col-auto">月</p>
						<select name="" id="" required>
							<option value="" selected>-</option>
							<option value="">日</option>
						</select>
						<p class="col-auto">日</p>
					</dd>
					<dd class="d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							<sup>*</sup>試鏡日期
						</label>
						<p class="col-auto">開始</p>
						<select name="" id="" required>
							<option value="" selected>-</option>
							<option value="">年</option>
						</select>
						<p class="col-auto">年</p>
						<select name="" id="" required>
							<option value="" selected>-</option>
							<option value="">月</option>
						</select>
						<p class="col-auto">月</p>
						<select name="" id="" required>
							<option value="" selected>-</option>
							<option value="">日</option>
						</select>
						<p class="col-auto">日</p>
					</dd>
					<dd class="d-sm-flex justify-content-end align-items-center">
						<a href="#" class="addItems">新增試鏡日期<i class="fas fa-plus-circle"></i></a>
					</dd>
					<dd class="d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							<sup>*</sup>試鏡地點
						</label>
						<select name="" id="" class="col-auto mr-lg-2" required>
							<option value="" selected>-</option>
							<option value="">地區</option>
						</select>
						<select name="" id="" class="col-auto mr-lg-2" required>
							<option value="" selected>-</option>
							<option value="">地區</option>
						</select>
						<input type="text">
					</dd>
					<dd class="d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							合作相關事宜
						</label>
						<input type="text" placeholder="請輸入合作相關事宜">
					</dd>
					<dd class="d-sm-flex justify-content-start align-items-center">
						<label for="" class="col-auto">
							<sup>*</sup>聯絡信箱
						</label>
						<input type="email" placeholder="請輸入聯絡信箱" required>
					</dd>
					<dd class="d-sm-flex justify-content-start align-items-center">
						<label for="" class="col-auto">
							<sup>*</sup>聯絡電話
						</label>
						<input type="tel" placeholder="請輸入聯絡電話" required>
					</dd>
					<dd class="d-sm-flex justify-content-start align-items-center">
						<label for="" class="col-auto">
							<sup>*</sup>角色列表
						</label>
					</dd>
					<dd class="d-sm-flex justify-content-start align-items-center">
						<p class="col-auto"><b>角色 1</b></p>
						<label for="" class="col-auto">需求角色</label>
						<input type="text" placeholder="請輸入需求角色">
						<label for="" class="col-auto">人數</label>
						<input type="text" placeholder="請輸入需求人數" required><p>人</p>
					</dd>
					<dd class="d-sm-flex justify-content-start align-items-center">
						<label for="" class="col-auto">角色年紀</label>
						<select name="" id="" required>
							<option value="" selected>-</option>
							<option value="">角色年紀</option>
						</select>
						<label for="" class="col-auto">族群</label>
						<select name="" id="">
							<option value="" selected>-</option>
							<option value="">族群</option>
						</select>
					</dd>
					<dd class="d-sm-flex justify-content-start align-items-center">
						<label for="" class="col-auto">語言</label>
						<select name="" id="" required>
							<option value="" selected>-</option>
							<option value="">語言</option>
						</select>
						<label for="" class="col-auto">報酬</label>
						<select name="" id="">
							<option value="" selected>-</option>
							<option value="">報酬</option>
						</select>
					</dd>
					<dd class="d-sm-flex justify-content-start align-items-start">
						<label for="" class="col-auto">角色描述</label>
						<textarea name="" id="" cols="30" rows="10" placeholder="請輸入角色描述"></textarea>
					</dd>
					<dd class="d-sm-flex justify-content-end align-items-center">
						<a href="#" class="addItems">新增角色<i class="fas fa-plus-circle"></i></a>
					</dd>

					<dd class="d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							專案圖片
						</label>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="請上傳身分證影本正面" aria-label="Recipient's username" aria-describedby="button-addon2" required>
							<div class="input-group-append">
								<button class="btn btn-outline-secondary" type="button" id="button-addon2">瀏覽</button>
							</div>
						</div>
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

<div class="modal fade" id="jobsUpload" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="ModalCenterTitle">新增工作機會</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<dl class="signup">
					<dd class="d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							<sup>*</sup>發起者名稱
						</label>
						<input type="text" placeholder="請輸入發起者名稱" required>
					</dd>
					<dd class="d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							<sup>*</sup>專案名稱
						</label>
						<input type="text" placeholder="請輸入專案名稱" required>
					</dd>
					<dd class="d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							<sup>*</sup>專案類型
						</label>
						<select name="" id="" required>
							<option value="" selected>-</option>
							<option value="">專案類型</option>
						</select>
					</dd>
					<dd class="d-sm-flex justify-content-between align-items-start">
						<label for="" class="col-auto">
							<sup>*</sup>專案敘述
						</label>
						<textarea name="" id="" cols="30" rows="10" placeholder="請輸入專案敘述"></textarea>
					</dd>
					<dd class="d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							<sup>*</sup>專案期間
						</label>
						<p class="col-auto">開始</p>
						<select name="" id="" required>
							<option value="" selected>-</option>
							<option value="">年</option>
						</select>
						<p class="col-auto">年</p>
						<select name="" id="" required>
							<option value="" selected>-</option>
							<option value="">月</option>
						</select>
						<p class="col-auto">月</p>
						<select name="" id="" required>
							<option value="" selected>-</option>
							<option value="">日</option>
						</select>
						<p class="col-auto">日</p>
					</dd>
					<dd class="d-sm-flex justify-content-between align-items-center">
						<p class="col-auto ml-lg-5 pl-lg-5">結束</p>
						<select name="" id="" required>
							<option value="" selected>-</option>
							<option value="">年</option>
						</select>
						<p class="col-auto">年</p>
						<select name="" id="" required>
							<option value="" selected>-</option>
							<option value="">月</option>
						</select>
						<p class="col-auto">月</p>
						<select name="" id="" required>
							<option value="" selected>-</option>
							<option value="">日</option>
						</select>
						<p class="col-auto">日</p>
					</dd>
					<dd class="d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							<sup>*</sup>面試日期
						</label>
						<p class="col-auto">開始</p>
						<select name="" id="" required>
							<option value="" selected>-</option>
							<option value="">年</option>
						</select>
						<p class="col-auto">年</p>
						<select name="" id="" required>
							<option value="" selected>-</option>
							<option value="">月</option>
						</select>
						<p class="col-auto">月</p>
						<select name="" id="" required>
							<option value="" selected>-</option>
							<option value="">日</option>
						</select>
						<p class="col-auto">日</p>
					</dd>
					<dd class="d-sm-flex justify-content-end align-items-center">
						<a href="#" class="addItems">新增面試日期<i class="fas fa-plus-circle"></i></a>
					</dd>
					<dd class="d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							<sup>*</sup>面試地點
						</label>
						<select name="" id="" class="col-auto mr-lg-2" required>
							<option value="" selected>-</option>
							<option value="">地區</option>
						</select>
						<select name="" id="" class="col-auto mr-lg-2" required>
							<option value="" selected>-</option>
							<option value="">地區</option>
						</select>
						<input type="text">
					</dd>
					<dd class="d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							合作相關事宜
						</label>
						<input type="text" placeholder="請輸入合作相關事宜">
					</dd>
					<dd class="d-sm-flex justify-content-start align-items-center">
						<label for="" class="col-auto">
							<sup>*</sup>聯絡信箱
						</label>
						<input type="email" placeholder="請輸入聯絡信箱" required>
					</dd>
					<dd class="d-sm-flex justify-content-start align-items-center">
						<label for="" class="col-auto">
							<sup>*</sup>聯絡電話
						</label>
						<input type="tel" placeholder="請輸入聯絡電話" required>
					</dd>
					<dd class="d-sm-flex justify-content-start align-items-center">
						<label for="" class="col-auto">
							<sup>*</sup>角色列表
						</label>
					</dd>
					<dd class="d-sm-flex justify-content-start align-items-center">
						<p class="col-auto"><b>角色 1</b></p>
						<label for="" class="col-auto">需求角色</label>
						<input type="text" placeholder="請輸入需求角色">
						<label for="" class="col-auto">人數</label>
						<input type="text" placeholder="請輸入需求人數" required><p>人</p>
					</dd>
					<dd class="d-sm-flex justify-content-end align-items-center">
						<a href="#" class="addItems">新增角色<i class="fas fa-plus-circle"></i></a>
					</dd>

					<dd class="d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							專案圖片
						</label>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="請上傳身分證影本正面" aria-label="Recipient's username" aria-describedby="button-addon2" required>
							<div class="input-group-append">
								<button class="btn btn-outline-secondary" type="button" id="button-addon2">瀏覽</button>
							</div>
						</div>
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