<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="IE=edge, chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--以下 SEO 用 SEO 用 SEO 用 很重要所以打三次-->
		<!--測試網址用 , 啟用正式網址前請先修改成 "index,follow"-->
		<meta name="robots" content="noindex,nofollow">

		<!--標籤上的 icon-->
		<link rel="icon" href="favicon.png">
		<link rel="icon" href="favicon.ico?v=1.1">

		<!--搜尋引擎用 尤其是 google-->
		<title>星光藝意傳媒 - 貝爾校稿網站</title>
		<meta name="author" content="貝爾網站國際有限公司">
		<meta name="copyright" content="星光藝意傳媒">
		<meta name="description" content="">

		<!-- Open Graph data --> 
		<meta property="og:title" content="貝爾網站國際有限公司"><!--這個是連結頁面的網址-->
		<meta property="og:url" content=" http://www.example.com/"><!--這個是連結頁面的網址-->
		<meta property="og:image" content=" http://example.com/image.jpg"><!--這個是 FB 分享畫面的圖片路徑 解析須200x200至1500x1500之間，檔案大小在5MB以內-->
		<meta property="og:description" content="Description Here"> <!--這個是連結頁面文章的敘述-->
		<meta property="fb:admins" content="Facebook numberic ID"><!--這個是 FB 使用者 ID-->

		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

		<!--note: slidebars-->
		<link rel="stylesheet" href="css/slidebars/slidebars.css">
		<link rel="stylesheet" href="css/slidebars/style.css">

		<!--note: layout-->
		<link rel="stylesheet"  href="css/layout.css">
		<link rel="stylesheet"  href="css/d-layout.css">
	</head>

	<body>
		<!--member signin / signup-->
		<div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<!--tabs-->
						<nav class="col-11">
							<div class="nav nav-pills d-flex justify-content-around member" id="nav-tab" role="tablist">
								<a class="nav-item nav-link active" id="nav-signin-tab" data-toggle="tab" href="#nav-signin" role="tab" aria-controls="nav-signin" aria-selected="true">會員登入</a>
								<a class="nav-item nav-link" id="nav-signup-tab" data-toggle="tab" href="#nav-signup" role="tab" aria-controls="nav-signup" aria-selected="false">新會員註冊</a>
							</div>
						</nav>

						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="tab-content" id="nav-tabContent">
							<div class="tab-pane fade show active" id="nav-signin" role="tabpanel" aria-labelledby="nav-signin-tab">
								<!--signin-->
								<form action="member.php">
									<dl class="signin">
										<dd>
											<input type="email" placeholder="請輸入電子信箱" required>
										</dd>
										<dd>
											<input type="password" placeholder="請輸入密碼" required>
										</dd>
										<dd class="d-sm-flex justify-content-between">
											<input class="verificationCode" type="text" placeholder="驗證碼(不分大小寫)" required>
											<img src="imgcode/securimage_show.png" alt="">
										</dd>
										<dd class="d-sm-flex justify-content-sm-between">
											<button type="submit">登入</button>
											<button class="btnFB"><i class="fab fa-facebook"></i>使用 Facebook 登入</button>
										</dd>
									</dl>
								</form>
								<div class="forgetPW"><a href="forget_pw.php">忘記密碼?</a></div>
							</div>

							<!--signup-->
							<div class="tab-pane fade" id="nav-signup" role="tabpanel" aria-labelledby="nav-signup-tab">
								<dl class="row mx-auto iSignup">
									<dd class="col-sm-4 col-6 p-2">
										<figure onclick="location.href='signup_c.php'" class="memberSort">
											<figcaption class="d-flex justify-content-center align-items-center p-2">
												<p>一般會員</p>
											</figcaption>
											<!--圖片後台能換-->
											<img src="https://via.placeholder.com/350x350" alt="">
										</figure>
									</dd>
									<dd class="col-sm-4 col-6 p-2">
										<figure onclick="location.href='signup_s.php'" class="memberSort">
											<figcaption class="d-flex justify-content-center align-items-center p-2">
												<p>代言人</p>
											</figcaption>
											<!--圖片後台能換-->
											<img src="https://via.placeholder.com/350x350" alt="">
										</figure>
									</dd>
									<dd class="col-sm-4 col-6 p-2">
										<figure onclick="location.href='signup_v.php'" class="memberSort">
											<figcaption class="d-flex justify-content-center align-items-center p-2">
												<p>商品代言廠商</p>
											</figcaption>
											<!--圖片後台能換-->
											<img src="https://via.placeholder.com/350x350" alt="">
										</figure>
									</dd>
									<dd class="col-sm-4 col-6 p-2">
										<figure onclick="location.href='signup_a.php'" class="memberSort">
											<figcaption class="d-flex justify-content-center align-items-center p-2">
												<p>演員/表演工作者</p>
											</figcaption>
											<!--圖片後台能換-->
											<img src="https://via.placeholder.com/350x350" alt="">
										</figure>
									</dd>
									<dd class="col-sm-4 col-6 p-2">
										<figure onclick="location.href='signup_t.php'" class="memberSort">
											<figcaption class="d-flex justify-content-center align-items-center p-2">
												<p>劇組/工作人員</p>
											</figcaption>
											<!--圖片後台能換-->
											<img src="https://via.placeholder.com/350x350" alt="">
										</figure>
									</dd>
									<dd class="col-sm-4 col-6 p-2">
										<figure onclick="location.href='signup_j.php'" class="memberSort">
											<figcaption class="d-flex justify-content-center align-items-center p-2">
												<p>演出/工作機會發起人</p>
											</figcaption>
											<!--圖片後台能換-->
											<img src="https://via.placeholder.com/350x350" alt="">
										</figure>
									</dd>
								</dl>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<header class="sticky-top">
			<!--header 右上區塊-->
			<section class="d-flex justify-content-end social px-3 py-2">
				<dl class="d-flex justify-content-end align-items-center social">
					<!--搜尋-->
					<dd>
						<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<img src="images/layout/btn-topbar01.svg" alt="">
						</a>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							<form action="search.php" class="form-inline my-2 my-lg-0 searchTop">
								<input class="form-control mr-sm-2" type="search" placeholder="請輸入搜尋關鍵字" aria-label="Search">
								<button class="btn btn-outline-success my-2 my-sm-0" type="submit">搜尋</button>
							</form>
						</div>
					</dd>
					<!--cart 課程培訓限定-->
					<dd>
						<a href="course_checkout01.php"><img src="images/layout/btn-topbar02.svg" alt=""></a>
					</dd>
					<!--member-->
					<dd style="border-right:1px solid #ccc;" class="pr-2">
						<button type="button" class="btn" data-toggle="modal" data-target="#ModalCenter">
							會員 登入/註冊
						</button>
					</dd>
					<!--youtube website link-->
					<dd>
						<a href="#" target="_blank"><img src="images/layout/btn-topbar03.svg" alt=""></a>
					</dd>
					<!--fackbook website link-->
					<dd>
						<a href="#" target="_blank"><img src="images/layout/btn-topbar04.svg" alt=""></a>
					</dd>
				</dl>
			</section>
			<!--nav-->
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="."><img src="images/layout/logo.png" alt=""></a>
				<button class="navbar-toggler navbar-toggler-right js-toggle-right-slidebar"><i class="fas fa-bars"></i></button>
				<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
					<ul class="navbar-nav pt-2">
						<li class="nav-item active">
							<a class="nav-item nav-link" href="about.php">關於我們<br><span>About us</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-item nav-link" href="bulletin.php">公告<br><span>Bulletin</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-item nav-link" href="p_spokesperson.php">商品代言<br><span>Product Endorsement</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-item nav-link" href="p_actor.php">演出/工作機會<br><span>Perform  Opportunities</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-item nav-link" href="video.php">影音作品創作<br><span>Film &amp; Video</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-item nav-link" href="course.php">培訓課程<br><span>Course</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-item nav-link" href="donate.php">眾籌專區<br><span>Donate</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-item nav-link" href="events.php">最新活動<br><span>Event</span></a>
						</li>
					</ul>
				</div>
			</nav>
			<!--nav for mobile-->
			<div off-canvas="slidebar-2 left overlay" class="slidebars">
				<div class="closeBtn"><button class="js-close-right-slidebar btn_close"><i class="fas fa-times"></i></button></div>
				<dl class="row mx-auto slidebarNav">
					<dd class="col-6">
						<a class="nav-item nav-link" href="about.php">關於我們<br><span>About us</span></a>
					</dd>
					<dd class="col-6">
						<a class="nav-item nav-link" href="bulletin.php">公告<br><span>Bulletin</span></a>
					</dd>
					<dd class="col-6">
						<a class="nav-item nav-link" href="p_spokesperson.php">商品代言<br><span>Product Endorsement</span></a>
					</dd>
					<dd class="col-6">
						<a class="nav-item nav-link" href="p_actor.php">演出/工作機會<br><span>Perform  Opportunities</span></a>
					</dd>
					<dd class="col-6">
						<a class="nav-item nav-link" href="video.php">影音作品創作<br><span>Film &amp; Video</span></a>
					</dd>
					<dd class="col-6">
						<a class="nav-item nav-link" href="course.php">培訓課程<br><span>Course</span></a>
					</dd>
					<dd class="col-6">
						<a class="nav-item nav-link" href="donate.php">眾籌專區<br><span>Donate</span></a>
					</dd>
					<dd class="col-6">
						<a class="nav-item nav-link" href="events.php">最新活動<br><span>Event</span></a>
					</dd>
				</dl>
				<dl class="row mx-auto slidebarNav" style="margin-top: 2rem; padding-top:2rem">
					<dd class="col-6">
						<a class="nav-item nav-link" href="faq.php">常見問題</a>
					</dd>
					<dd class="col-6">
						<a class="nav-item nav-link" href="contact.php">聯絡我們</a>
					</dd>
					<dd class="col-6">
						<a class="nav-item nav-link" href="privacy.php">隱私權聲明</a>
					</dd>
					<dd class="col-6">
						<a class="nav-item nav-link" href="horoscopes_teacher.php">星情</a>
					</dd>
					<dd class="col-6">
						<a class="nav-item nav-link" href="bulletin.php">公告區</a>
					</dd>
					<dd class="col-6">
						<a class="nav-item nav-link" href="advertisecy.php">刊登廣告</a>
					</dd>
				</dl>
			</div>
		</header>
		<article class="" canvas="container">