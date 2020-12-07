<?php include("header.php")?>
<!--note: pages css-->
<link rel="stylesheet"  href="css/pages.css">
<link rel="stylesheet"  href="css/d-pages.css">

<!--banner-->
<section class="banner mb-4">
	<img src="upload/img-page-banner.jpg" alt="">
</section>

<section class="container-fluid px-4">
	<section class="inPage col-12 px-0 pb-3">
		<!--title-->
		<div class="title bc-f12433 d-md-flex justify-content-between align-items-end px-3">
			<h1>聯絡我們<span>Contact us</span></h1>
			<div class="navi">
				<span><a href=".">首頁</a></span>
				<span>聯絡我們</span>
			</div>
		</div>

		<div class="py-4 contactIntro">
			<p class="mb-0">有任何問題,您可以填寫下列表格,我們會盡快與您聯繫,感謝您~</p>
			<p>(*為必填項目)</p>
		</div>
		<!--contact form-->
		<form action="">
			<dl class="form row col-md-8 mx-auto align-items-center">
				<dt class="col-lg-2 col-md-3"><label for="name"><sup>*</sup>聯絡人</label></dt>
				<dd class="col-lg-10 col-md-9 d-sm-flex justify-content-start align-items-center">
					<input class="col-lg-9 col-sm-7 mb-sm-0 mb-3" type="text" name="name" required>
					<input class="ml-sm-3" type="radio"> 先生
					<input class="ml-3" type="radio"> 小姐
				</dd>
				<dt class="col-lg-2 col-md-3"><label for="tel"><sup>*</sup>連絡電話</label></dt>
				<dd class="col-lg-10 col-md-9"><input type="tel" name="tel" required></dd>
				<dt class="col-lg-2 col-md-3"><label for="email">電子信箱</label></dt>
				<dd class="col-lg-10 col-md-9"><input type="email" name="email"></dd>
				<dt class="col-lg-2 col-md-3"><label for="subject">標題</label></dt>
				<dd class="col-lg-10 col-md-9"><input type="text" name="subject"></dd>
				<dt class="col-lg-2 col-md-3 align-self-start"><label for="content">內容</label></dt>
				<dd class="col-lg-10 col-md-9"><textarea name="" id="" cols="30" rows="10"></textarea></dd>
				<dt class="col-lg-2 col-md-3"><label for="code"><sup>*</sup>驗證碼</label></dt>
				<dd class="col-lg-10 col-md-9">
					<input style="width:45%" type="text" name="code">
					<img style="width:25%" src="imgcode/securimage_show.png" alt="">
				</dd>
				<dd class="w-100">
					<button type="reset">重新填寫</button>
					<button type="submit">確認送出</button>
				</dd>
			</dl>
		</form>
	</section>
</section>


<?php include("footer.php")?>

</body>
</html>