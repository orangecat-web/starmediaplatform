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
			<h1>影音作品創作平台<span>Film &amp; Video</span></h1>
			<div class="navi">
				<span><a href=".">首頁</a></span>
				<span>影音作品創作平台</span>
			</div>
		</div>

		<div class="container py-4">
			<section class="col-lg-10 mx-auto slider">
				<!--影片-->
				<div id="slider" class="flexslider">
					<ul class="slides">
						<li>
							<iframe src="https://www.youtube.com/embed/HlSVoL1qwRM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						</li>
						<li>
							<iframe src="https://www.youtube.com/embed/YjroU04xOpU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						</li>
						<li>
							<iframe src="https://www.youtube.com/embed/TEFCW-7k9kg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						</li>
					</ul>
				</div>
				<!--影片縮圖-->
				<div id="carousel" class="flexslider">
					<ul class="col-12 row mx-auto slides">
						<li class="col-sm-4">
							<a href="https://www.youtube.com/embed/HlSVoL1qwRM">
								<img src="https://img.youtube.com/vi/HlSVoL1qwRM/maxresdefault.jpg" alt="">
							</a>
						</li>
						<li class="col-sm-4">
							<a href="https://www.youtube.com/embed/YjroU04xOpU">
								<img src="https://img.youtube.com/vi/YjroU04xOpU/maxresdefault.jpg" alt="">
							</a>
						</li>
						<li class="col-sm-4">
							<a href="https://www.youtube.com/embed/TEFCW-7k9kg">
								<img src="https://img.youtube.com/vi/TEFCW-7k9kg/maxresdefault.jpg" alt="">
							</a>
						</li>
					</ul>
				</div>
			</section>

			<section class="col-lg-10 mt-5 mx-auto videolist">
				<nav class="mb-3">
					<div class="nav nav-pills" id="nav-tab" role="tablist">
						<a class="nav-item nav-link mr-4 active" id="nav-latest-tab" data-toggle="tab" href="#nav-latest" role="tab" aria-controls="nav-latest" aria-selected="true">最新影片</a>
						<a class="nav-item nav-link" id="nav-popular-tab" data-toggle="tab" href="#nav-popular" role="tab" aria-controls="nav-popular" aria-selected="false">熱門影片</a>
					</div>
				</nav>
				<div class="tab-content" id="nav-tabContent">
					<!--最新影片-->
					<div class="tab-pane fade show active" id="nav-latest" role="tabpanel" aria-labelledby="nav-latest-tab">
						<dl class="row mx-auto align-items-center videoList">
							<dd class="col-lg-5 col-sm-6">
								<a class="btn" href="//www.youtube.com/watch?v=HlSVoL1qwRM" data-lity>
									<img src="https://img.youtube.com/vi/HlSVoL1qwRM/maxresdefault.jpg" alt="">
								</a>
							</dd>
							<dd class="col-lg-7 col-sm-6">
								<h3 class="mb-3">影片標題影片標題影片標題影片標題影片標題影片標題影片標題</h3>
								<p>文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明</p>
							</dd>
							<dd class="col-lg-5 col-sm-6">
								<a class="btn" href="//www.youtube.com/watch?v=HlSVoL1qwRM" data-lity>
									<img src="https://img.youtube.com/vi/HlSVoL1qwRM/maxresdefault.jpg" alt="">
								</a>
							</dd>
							<dd class="col-lg-7 col-sm-6">
								<h3 class="mb-3">影片標題影片標題影片標題影片標題影片標題影片標題影片標題</h3>
								<p>文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明</p>
							</dd>
							<dd class="col-lg-5 col-sm-6">
								<a class="btn" href="//www.youtube.com/watch?v=HlSVoL1qwRM" data-lity>
									<img src="https://img.youtube.com/vi/HlSVoL1qwRM/maxresdefault.jpg" alt="">
								</a>
							</dd>
							<dd class="col-lg-7 col-sm-6">
								<h3 class="mb-3">影片標題影片標題影片標題影片標題影片標題影片標題影片標題</h3>
								<p>文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明</p>
							</dd>
							<dd class="col-lg-5 col-sm-6">
								<a class="btn" href="//www.youtube.com/watch?v=HlSVoL1qwRM" data-lity>
									<img src="https://img.youtube.com/vi/HlSVoL1qwRM/maxresdefault.jpg" alt="">
								</a>
							</dd>
							<dd class="col-lg-7 col-sm-6">
								<h3 class="mb-3">影片標題影片標題影片標題影片標題影片標題影片標題影片標題</h3>
								<p>文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明</p>
							</dd>
							<dd class="col-lg-5 col-sm-6">
								<a class="btn" href="//www.youtube.com/watch?v=HlSVoL1qwRM" data-lity>
									<img src="https://img.youtube.com/vi/HlSVoL1qwRM/maxresdefault.jpg" alt="">
								</a>
							</dd>
							<dd class="col-lg-7 col-sm-6">
								<h3 class="mb-3">影片標題影片標題影片標題影片標題影片標題影片標題影片標題</h3>
								<p>文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明</p>
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
					<!--熱門影片-->
					<div class="tab-pane fade" id="nav-popular" role="tabpanel" aria-labelledby="nav-popular-tab">
						<a class="btn" href="//www.youtube.com/watch?v=XSGBVzeBUbk" data-lity>YouTube</a>
					</div>
				</div>
			</section>
		</div>
	</section>
</section>
<?php include("footer.php")?>
<!--video FlexSlider-->
<link rel="stylesheet" href="js/flexslider/flexslider.css">
<script src="js/flexslider/jquery.flexslider.js"></script>
<script type="text/javascript">
	$(function(){
		SyntaxHighlighter.all();
	});
	$(window).load(function(){
		$('#slider').flexslider({
			animation: "slide",
			controlNav: false,
			animationLoop: false,
			directionNav: false,
			slideshow: false,
			sync: "#carousel",
			start: function(slider){
				$('body').removeClass('loading');
			}
		});
		$('#carousel').flexslider({
			animation: "slide",
			controlNav: false,
			animationLoop: false,
			slideshow: false,
			itemMargin: 0,
			asNavFor: '#slider',
			directionNav: false,
			keyboard: false
		});
	});
</script>
<!--video lightbox-->
<link rel="stylesheet" href="js/lity/dist/lity.css">
<script src="js/lity/dist/lity.js"></script>
</body>
</html>