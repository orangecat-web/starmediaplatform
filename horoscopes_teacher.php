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
		<div class="title bc-360abf d-md-flex justify-content-between align-items-end px-3">
			<h2>星情<span>Horoscopes</span></h2>
			<div class="navi">
				<span><a href=".">首頁</a></span>
				<span>星情</span>
			</div>
		</div>

		<div class="container-fluid row mx-auto px-lg-5 py-4">
			<aside class="col-md-3 horoTeacher">
				<div class="teacherInfo">
					<img src="upload/img-horoscopes.jpg" alt="">
					<h2 class="mt-3">占星師 艾薇老師</h2>
					<p>專長：事件占星學、心理占星學、塔羅牌占卜、生命靈數學、神秘色彩學。</p>
				</div>
				<dl class="mt-5 horoLink">
					<dd><a href="horoscopes_teacher.php">藝人訪談</a></dd>
					<dd><a href="horoscopes_star.php">星座運勢</a></dd>
					<dd><a href="horoscopes_divination.php">占星小常識&amp;小占卜</a></dd>
					<dd><a href="#" target="_blank">艾薇FB</a></dd>
				</dl>
			</aside>

			<!--content-->
			<div class="col-md-9 row mx-auto horoContent">
				<div class="col-12 mb-3">
					<div class="viedo">
						<iframe src="https://www.youtube.com/embed/Hqb2dqam4UY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
					<div class="title bc-360abf">
						<h2>藝人訪談<span>Artist Interview</span></h2>
					</div>
				</div>
				<div class="col-md-6 pr-md-1">
					<a href="horoscopes_star.php">
						<img src="upload/btn-horoscopes01.jpg" alt="">
					</a>
					<div class="title bc-360abf">
						<h2>星座運勢<span>Horoscopes</span></h2>
					</div>
				</div>
				<div class="col-md-6 pl-md-1">
					<a href="horoscopes_divination.php">
						<img src="upload/btn-horoscopes02.jpg" alt="">
					</a>
					<div class="title bc-360abf">
						<h2>占星小常識&amp;小占卜<span>Divination</span></h2>
					</div>
				</div>
			</div>
		</div>
	</section>
</section>
<?php include("footer.php")?>
</body>
</html>