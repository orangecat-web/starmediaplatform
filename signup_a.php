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
		<div class="title bc-f37216 d-md-flex justify-content-between align-items-end px-3">
			<h1>加入會員<span>Register</span></h1>
			<div class="navi">
				<span><a href=".">首頁</a></span>
				<span>加入會員</span>
				<span>演員/表演工作者</span>
			</div>
		</div>
		<section class="container">
			<form action="member_a.php" class="p-4">
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
							<sup>*</sup>藝名
						</label>
						<input type="text" placeholder="請輸入藝名" required>
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
					<dd class="col-lg-6 d-sm-flex justify-content-start align-items-center">
						<label for="" class="col-auto">
							<sup>*</sup>國籍
						</label>
						<p>
							<label for="" class="mr-4"><input class="mr-2" type="radio" name="nationality" id="taiwan" required> 本國籍</label>
							<label for=""><input class="mr-2" type="radio" name="nationality" id="other" required> 非本國籍</label>
						</p>
					</dd>
					<dd class="col-lg-6 d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							<sup>*</sup>族群
						</label>
						<select name="" id="" required>
							<option value="" selected>-</option>
							<option value="">亞洲</option>
						</select>
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
					<dd class="col-lg-3 col-md-6 d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							<sup>*</sup>身高
						</label>
						<input type="text" placeholder="請輸入身高" required>
						<p class="col-auto pr-0">公分</p>
					</dd>
					<dd class="col-lg-3 col-md-6 d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							<sup>*</sup>體重
						</label>
						<input type="text" placeholder="請輸入體重" required>
						<p class="col-auto pr-0">公斤</p>
					</dd>
					<dd class="col-lg-3 col-md-6 d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							<sup>*</sup>身型
						</label>
						<select name="" id="" required>
							<option value="" selected>-</option>
							<option value="">纖細</option>
						</select>
					</dd>
					<dd class="col-lg-3 col-md-6 d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							<sup>*</sup>髮色
						</label>
						<select name="" id="" required>
							<option value="" selected>-</option>
							<option value="">黑</option>
						</select>
					</dd>
					<dd class="col-lg-12 d-sm-flex justify-content-start align-items-center">
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
							<label for="" class="col-auto d-sm-flex justify-content-start align-items-center pl-4"><input type="checkbox"><p class="col-auto">其他</p> <input type="text"></label>
						</div>
					</dd>
					<dd class="col-lg-6 d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							<sup>*</sup>可工作地點
						</label>
						<select name="" id="" required>
							<option value="" selected>-</option>
							<option value="">台北</option>
						</select>
					</dd>
					<dd class="col-lg-6 d-sm-flex justify-content-start align-items-center">
						<label for="" class="col-auto">
							<sup>*</sup>經紀人
						</label>
						<p>
							<label for="" class="mr-4"><input class="mr-2" type="radio" name="broker" id="yes" required> 有經紀人</label>
							<label for=""><input class="mr-2" type="radio" name="broker" id="no" required> 無經紀人</label>
						</p>
					</dd>
					<dd class="col-lg-12 d-sm-flex justify-content-start align-items-center">
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
							<label for="" class="col-auto d-sm-flex justify-content-start align-items-center pl-4"><input type="checkbox"><p class="col-auto">其他</p> <input type="text"></label>
						</div>
					</dd>
				</dl>
				<dl class="row col-lg-12 col-md-10 mx-auto signup">
					<dd class="col-lg-6 d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							<sup>*</sup>聯絡電話
						</label>
						<input type="tel" placeholder="請輸入聯絡電話" required>
						<p class="col-auto">
							<label for="" class="mr-4"><input class="mr-2" type="radio" name="phone" id="yes" required> 公開</label>
							<label for=""><input class="mr-2" type="radio" name="phone" id="no" required> 隱藏</label>
						</p>
					</dd>
					<dd class="col-lg-6 d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							<sup>*</sup>電子郵件
						</label>
						<input type="email" placeholder="請輸入電子郵件" required>
					</dd>
					<dd class="col-lg-6 d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							Line 帳號
						</label>
						<input type="tel" placeholder="請輸入 Line 帳號">
					</dd>
					<dd class="col-lg-6 d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							Instagram
						</label>
						<input type="tel" placeholder="請輸入 Instagram 連結">
					</dd>
					<dd class="col-lg-6 d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							Facebook
						</label>
						<input type="tel" placeholder="請輸入 Facebook 連結">
					</dd>
					<dd class="col-lg-6 d-sm-flex justify-content-between align-items-center">
						<label for="" class="col-auto">
							其他社群網站
						</label>
						<input type="tel" placeholder="請輸入其他社群網站連結">
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