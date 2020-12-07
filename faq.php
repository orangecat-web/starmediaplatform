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
		<div class="title bc-f12433 d-md-flex justify-content-between align-items-end px-3">
			<h1>常見問題<span>Q&amp;A</span></h1>
			<div class="navi">
				<span><a href=".">首頁</a></span>
				<span>常見問題</span>
			</div>
		</div>

		<!--editor-->
		<div class="container py-4">
			<div id="accordion" class="col-lg-10 mx-auto">
				<div class="card faq">
					<div class="card-header faqHeader" id="heading1">
						<h5 class="mb-0">
							<button class="btn btn-link col-12 faq" data-toggle="collapse" data-target="#faq1" aria-expanded="true" aria-controls="faq1">
								<span>Q1</span>問題1？
							</button>
						</h5>
					</div>

					<div id="faq1" class="collapse faqContent" aria-labelledby="heading1" data-parent="#accordion">
						<div class="card-body">
							<div class="editor">
								<!--以下編輯器內容-->
								<p class="mb-0">編輯器內容</p>
							</div>
						</div>
					</div>
				</div>

				<div class="card faq">
					<div class="card-header faqHeader" id="heading2">
						<h5 class="mb-0">
							<button class="btn btn-link col-12 faq" data-toggle="collapse" data-target="#faq2" aria-expanded="true" aria-controls="faq2">
								<span>Q2</span>問題2？
							</button>
						</h5>
					</div>

					<div id="faq2" class="collapse faqContent" aria-labelledby="heading2" data-parent="#accordion">
						<div class="card-body">
							<div class="editor mx-md-5">
								<!--以下編輯器內容-->
								<p class="mb-0">編輯器內容</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</section>

<?php include("footer.php")?>
</body>
</html>