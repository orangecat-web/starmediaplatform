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
		<div class="title bc-f22433 d-md-flex justify-content-between align-items-end px-3">
			<h1>商品代言媒合區<span>Product Endorsement</span></h1>
			<div class="navi">
				<span><a href=".">首頁</a></span>
				<span>商品代言媒合區</span>
			</div>
		</div>

		<div class="container pb-4">
			<!--page project-->
			<dl class="row mx-0 no-gutters Match productEndorsment bc-f22433">
				<dd onclick="location.href='p_spokesperson.php'" class="col-6 active">
					<p>找商品代言人</p>
					<span><i class="fas fa-caret-down"></i></span>
				</dd>
				<dd onclick="location.href='p_endorsement.php'" class="col-6">
					<p>找代言工作機會</p>
					<span><i class="fas fa-caret-down"></i></span>
				</dd>
			</dl>
			<!--porject search items-->
			<nav class="col-lg-9 mx-auto mb-4 mobileSM">
				<div class="nav nav-pills d-flex justify-content-between" id="nav-tab" role="tablist">
					<a class="nav-item nav-link active" id="nav-items01-tab" data-toggle="tab" href="#nav-items01" role="tab" aria-controls="nav-items01" aria-selected="false">代言人類型</a>
					<a class="nav-item nav-link" id="nav-items02-tab" data-toggle="tab" href="#nav-items02" role="tab" aria-controls="nav-items02" aria-selected="false">喜好商品類型</a>
					<a class="nav-item nav-link" id="nav-items03-tab" data-toggle="tab" href="#nav-items03" role="tab" aria-controls="nav-items03" aria-selected="false">媒體平台</a>
					<a class="nav-item nav-link" id="nav-items04-tab" data-toggle="tab" href="#nav-items04" role="tab" aria-controls="nav-items04" aria-selected="false">合作方式</a>
					<a class="nav-item nav-link" id="nav-items05-tab" data-toggle="tab" href="#nav-items05" role="tab" aria-controls="nav-items05" aria-selected="false">工作地點</a>
				</div>
			</nav>
			<!--mobile-->
			<div class="mb-4 searchItems mobileXS">
				<a class="btn btn-secondary dropdown-toggle searchItems" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span>商品類別</span>
				</a>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					<nav class="searchItems">
						<div class="nav nav-pills" id="nav-tab" role="tablist">
							<a class="nav-item nav-link active" id="nav-items01-tab" data-toggle="tab" href="#nav-items01" role="tab" aria-controls="nav-items01" aria-selected="false">代言人類型</a>
							<a class="nav-item nav-link" id="nav-items02-tab" data-toggle="tab" href="#nav-items02" role="tab" aria-controls="nav-items02" aria-selected="false">喜好商品類型</a>
							<a class="nav-item nav-link" id="nav-items03-tab" data-toggle="tab" href="#nav-items03" role="tab" aria-controls="nav-items03" aria-selected="false">媒體平台</a>
							<a class="nav-item nav-link" id="nav-items04-tab" data-toggle="tab" href="#nav-items04" role="tab" aria-controls="nav-items04" aria-selected="false">合作方式</a>
							<a class="nav-item nav-link" id="nav-items05-tab" data-toggle="tab" href="#nav-items05" role="tab" aria-controls="nav-items05" aria-selected="false">工作地點</a>
						</div>
					</nav>
				</div>
			</div>

			<div class="col-lg-9 mx-auto tab-content" id="nav-tabContent">
				<div class="tab-pane fade show active" id="nav-items01" role="tabpanel" aria-labelledby="nav-items01-tab">
					<dl class="row searchItems">
						<dd class="col-sm-3 col-6">
							<input type="checkbox"> <label for="">美妝</label>
						</dd>
						<dd class="col-sm-3 col-6">
							<input type="checkbox"> <label for="">保養</label>
						</dd>
						<dd class="col-sm-3 col-6">
							<input type="checkbox"> <label for="">穿搭</label>
						</dd>
						<dd class="col-sm-3 col-6">
							<input type="checkbox"> <label for="">美容美髮</label>
						</dd>
						<dd class="col-sm-3 col-6">
							<input type="checkbox"> <label for="">美妝</label>
						</dd>
						<dd class="col-sm-3 col-6">
							<input type="checkbox"> <label for="">美容美髮</label>
						</dd>
						<dd class="col-sm-3 col-6">
							<input type="checkbox"> <label for="">保養</label>
						</dd>
						<dd class="col-sm-3 col-6">
							<input type="checkbox"> <label for="">穿搭</label>
						</dd>
						<dd class="col-12 mt-4">
							<button type="reset">重設</button>
							<button type="submit">搜尋</button>
						</dd>
					</dl>
				</div>
				<div class="tab-pane fade" id="nav-items02" role="tabpanel" aria-labelledby="nav-items02-tab">
					<dl class="row searchItems">
						<dd class="col-sm-3 col-6">
							<input type="checkbox"> <label for="">美妝</label>
						</dd>
						<dd class="col-sm-3 col-6">
							<input type="checkbox"> <label for="">保養</label>
						</dd>
						<dd class="col-sm-3 col-6">
							<input type="checkbox"> <label for="">穿搭</label>
						</dd>
						<dd class="col-sm-3 col-6">
							<input type="checkbox"> <label for="">美容美髮</label>
						</dd>
						<dd class="col-sm-3 col-6">
							<input type="checkbox"> <label for="">美妝</label>
						</dd>
						<dd class="col-sm-3 col-6">
							<input type="checkbox"> <label for="">美容美髮</label>
						</dd>
						<dd class="col-sm-3 col-6">
							<input type="checkbox"> <label for="">保養</label>
						</dd>
						<dd class="col-sm-3 col-6">
							<input type="checkbox"> <label for="">穿搭</label>
						</dd>
						<dd class="col-12 mt-4">
							<button type="reset">重設</button>
							<button type="submit">搜尋</button>
						</dd>
					</dl>
				</div>
				<div class="tab-pane fade" id="nav-items03" role="tabpanel" aria-labelledby="nav-items03-tab">
					<dl class="row searchItems">
						<dd class="col-sm-3 col-6">
							<input type="checkbox"> <label for="">美妝</label>
						</dd>
						<dd class="col-sm-3 col-6">
							<input type="checkbox"> <label for="">保養</label>
						</dd>
						<dd class="col-sm-3 col-6">
							<input type="checkbox"> <label for="">穿搭</label>
						</dd>
						<dd class="col-sm-3 col-6">
							<input type="checkbox"> <label for="">美容美髮</label>
						</dd>
						<dd class="col-sm-3 col-6">
							<input type="checkbox"> <label for="">美妝</label>
						</dd>
						<dd class="col-sm-3 col-6">
							<input type="checkbox"> <label for="">美容美髮</label>
						</dd>
						<dd class="col-sm-3 col-6">
							<input type="checkbox"> <label for="">保養</label>
						</dd>
						<dd class="col-sm-3 col-6">
							<input type="checkbox"> <label for="">穿搭</label>
						</dd>
						<dd class="col-12 mt-4">
							<button type="reset">重設</button>
							<button type="submit">搜尋</button>
						</dd>
					</dl>
				</div>
				<div class="tab-pane fade" id="nav-items04" role="tabpanel" aria-labelledby="nav-items04-tab">
					<dl class="row searchItems">
						<dd class="col-sm-3 col-6">
							<input type="checkbox"> <label for="">美妝</label>
						</dd>
						<dd class="col-sm-3 col-6">
							<input type="checkbox"> <label for="">保養</label>
						</dd>
						<dd class="col-sm-3 col-6">
							<input type="checkbox"> <label for="">穿搭</label>
						</dd>
						<dd class="col-sm-3 col-6">
							<input type="checkbox"> <label for="">美容美髮</label>
						</dd>
						<dd class="col-sm-3 col-6">
							<input type="checkbox"> <label for="">美妝</label>
						</dd>
						<dd class="col-sm-3 col-6">
							<input type="checkbox"> <label for="">美容美髮</label>
						</dd>
						<dd class="col-sm-3 col-6">
							<input type="checkbox"> <label for="">保養</label>
						</dd>
						<dd class="col-sm-3 col-6">
							<input type="checkbox"> <label for="">穿搭</label>
						</dd>
						<dd class="col-12 mt-4">
							<button type="reset">重設</button>
							<button type="submit">搜尋</button>
						</dd>
					</dl>
				</div>
				<div class="tab-pane fade" id="nav-items05" role="tabpanel" aria-labelledby="nav-items05-tab">
					<dl class="row city">
						<dd class="col-md-3 col-6">
							<select name="" id="">
								<option value="" selected>- 縣市 -</option>
							</select>
						</dd>
						<dd class="col-md-3 col-6">
							<select name="" id="">
								<option value="" selected>- 地區 -</option>
							</select>
						</dd>
						<dd class="col-md-6">
							<input type="text">
						</dd>
						<dd class="col-12 mt-4">
							<button type="reset">重設</button>
							<button type="submit">搜尋</button>
						</dd>
					</dl>
				</div>
			</div>
			<!--content selector-->
			<nav class="mb-4">
				<div class="nav nav-pills d-flex justify-content-start Actor" id="nav-tab" role="tablist">
					<p class="mb-0">顯示模式</p>
					<a class="nav-item nav-link active" id="nav-spokes01-tab" data-toggle="tab" href="#nav-spokes01" role="tab" aria-controls="nav-spokes01" aria-selected="false"><i class="fas fa-th"></i></a>
					<a class="nav-item nav-link" id="nav-spokes02-tab" data-toggle="tab" href="#nav-spokes02" role="tab" aria-controls="nav-spokes02" aria-selected="false"><i class="fas fa-list"></i></a>
				</div>
			</nav>
			<!--project content-->
			<div class="tab-content" id="nav-tabContent">
				<div class="tab-pane fade show active" id="nav-spokes01" role="tabpanel" aria-labelledby="nav-spokes01-tab">
					<dl class="row mx-auto matchsSuare">
						<!--start-->
						<dd class="col-lg-3 col-md-4 col-sm-6">
							<figure>
								<p class="align-items-center"><a href="p_spokesperson_detail.php"><img src="upload/img-prod.jpg" alt=""></a></p>
								<figcaption>
									<h3>莉莉 Lily</h3>
									<p>
										評價
										<i class="fas fa-star"></i>
										<i class="far fa-star"></i>
										<i class="far fa-star"></i>
										<i class="far fa-star"></i>
										<i class="far fa-star"></i>
										(99999)
									</p>
									<p class="d-flex justify-content-between Actor">
										<span>一日外拍 8小時</span>
										<span>NT850</span>
									</p>
									<p class="d-flex justify-content-between">
										<span>一日外拍 8小時</span>
										<span>NT88850</span>
									</p>
								</figcaption>
							</figure>
						</dd>
						<!--end-->
						<dd class="col-lg-3 col-md-4 col-sm-6">
							<figure>
								<p class="align-items-center"><a href="p_spokesperson_detail.php"><img src="upload/img-prod.jpg" alt=""></a></p>
								<figcaption>
									<h3>莉莉 Lily</h3>
									<p>
										評價
										<i class="fas fa-star"></i>
										<i class="far fa-star"></i>
										<i class="far fa-star"></i>
										<i class="far fa-star"></i>
										<i class="far fa-star"></i>
										(99999)
									</p>
									<p class="d-flex justify-content-between Actor">
										<span>一日外拍 8小時</span>
										<span>NT850</span>
									</p>
									<p class="d-flex justify-content-between">
										<span>一日外拍 8小時</span>
										<span>NT88850</span>
									</p>
								</figcaption>
							</figure>
						</dd>
						<dd class="col-lg-3 col-md-4 col-sm-6">
							<figure>
								<p class="align-items-center"><a href="p_spokesperson_detail.php"><img src="upload/img-prod.jpg" alt=""></a></p>
								<figcaption>
									<h3>莉莉 Lily</h3>
									<p>
										評價
										<i class="fas fa-star"></i>
										<i class="far fa-star"></i>
										<i class="far fa-star"></i>
										<i class="far fa-star"></i>
										<i class="far fa-star"></i>
										(99999)
									</p>
									<p class="d-flex justify-content-between Actor">
										<span>一日外拍 8小時</span>
										<span>NT850</span>
									</p>
									<p class="d-flex justify-content-between">
										<span>一日外拍 8小時</span>
										<span>NT88850</span>
									</p>
								</figcaption>
							</figure>
						</dd>
						<dd class="col-lg-3 col-md-4 col-sm-6">
							<figure>
								<p class="align-items-center"><a href="p_spokesperson_detail.php"><img src="upload/img-prod.jpg" alt=""></a></p>
								<figcaption>
									<h3>莉莉 Lily</h3>
									<p>
										評價
										<i class="fas fa-star"></i>
										<i class="far fa-star"></i>
										<i class="far fa-star"></i>
										<i class="far fa-star"></i>
										<i class="far fa-star"></i>
										(99999)
									</p>
									<p class="d-flex justify-content-between Actor">
										<span>一日外拍 8小時</span>
										<span>NT850</span>
									</p>
									<p class="d-flex justify-content-between">
										<span>一日外拍 8小時</span>
										<span>NT88850</span>
									</p>
								</figcaption>
							</figure>
						</dd>
						<dd class="col-lg-3 col-md-4 col-sm-6">
							<figure>
								<p class="align-items-center"><a href="p_spokesperson_detail.php"><img src="upload/img-prod.jpg" alt=""></a></p>
								<figcaption>
									<h3>莉莉 Lily</h3>
									<p>
										評價
										<i class="fas fa-star"></i>
										<i class="far fa-star"></i>
										<i class="far fa-star"></i>
										<i class="far fa-star"></i>
										<i class="far fa-star"></i>
										(99999)
									</p>
									<p class="d-flex justify-content-between Actor">
										<span>一日外拍 8小時</span>
										<span>NT850</span>
									</p>
									<p class="d-flex justify-content-between">
										<span>一日外拍 8小時</span>
										<span>NT88850</span>
									</p>
								</figcaption>
							</figure>
						</dd>
						<dd class="col-lg-3 col-md-4 col-sm-6">
							<figure>
								<p class="align-items-center"><a href="p_spokesperson_detail.php"><img src="upload/img-prod.jpg" alt=""></a></p>
								<figcaption>
									<h3>莉莉 Lily</h3>
									<p>
										評價
										<i class="fas fa-star"></i>
										<i class="far fa-star"></i>
										<i class="far fa-star"></i>
										<i class="far fa-star"></i>
										<i class="far fa-star"></i>
										(99999)
									</p>
									<p class="d-flex justify-content-between Actor">
										<span>一日外拍 8小時</span>
										<span>NT850</span>
									</p>
									<p class="d-flex justify-content-between">
										<span>一日外拍 8小時</span>
										<span>NT88850</span>
									</p>
								</figcaption>
							</figure>
						</dd>
						<dd class="col-lg-3 col-md-4 col-sm-6">
							<figure>
								<p class="align-items-center"><a href="p_spokesperson_detail.php"><img src="upload/img-prod.jpg" alt=""></a></p>
								<figcaption>
									<h3>莉莉 Lily</h3>
									<p>
										評價
										<i class="fas fa-star"></i>
										<i class="far fa-star"></i>
										<i class="far fa-star"></i>
										<i class="far fa-star"></i>
										<i class="far fa-star"></i>
										(99999)
									</p>
									<p class="d-flex justify-content-between Actor">
										<span>一日外拍 8小時</span>
										<span>NT850</span>
									</p>
									<p class="d-flex justify-content-between">
										<span>一日外拍 8小時</span>
										<span>NT88850</span>
									</p>
								</figcaption>
							</figure>
						</dd>
						<dd class="col-lg-3 col-md-4 col-sm-6">
							<figure>
								<p class="align-items-center"><a href="p_spokesperson_detail.php"><img src="upload/img-prod.jpg" alt=""></a></p>
								<figcaption>
									<h3>莉莉 Lily</h3>
									<p>
										評價
										<i class="fas fa-star"></i>
										<i class="far fa-star"></i>
										<i class="far fa-star"></i>
										<i class="far fa-star"></i>
										<i class="far fa-star"></i>
										(99999)
									</p>
									<p class="d-flex justify-content-between Actor">
										<span>一日外拍 8小時</span>
										<span>NT850</span>
									</p>
									<p class="d-flex justify-content-between">
										<span>一日外拍 8小時</span>
										<span>NT88850</span>
									</p>
								</figcaption>
							</figure>
						</dd>
					</dl>
				</div>
				<div class="tab-pane fade" id="nav-spokes02" role="tabpanel" aria-labelledby="nav-spokes02-tab">
					<!--start-->
					<div class="row mx-auto matchsList align-items-center">
						<div class="col-md-3">
							<img src="upload/img-prod.jpg" alt="">
						</div>
						<div class="col-md-9">
							<dl class="row mx-auto mb-4 align-items-end matchsList">
								<dt class="col-md-4">莉 莉 Lily  / 20歲</dt>
								<dd class="col-md-4 col-sm-6">有無經紀人 : 有經紀人</dd>
								<dd class="col-md-4 col-sm-6">可工作地點: 台北.台中</dd>
							</dl>
							<dl class="row mx-auto matchsList">
								<dd class="col-sm-4 d-flex justify-content-between"><span>一日外拍 8 小時</span> <span>NT10000</span></dd>
								<dd class="col-sm-5">
									評價
									<i class="fas fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									(99999)
								</dd>
							</dl>
							<dl class="row mx-auto matchsList">
								<dd class="col-sm-4 d-flex justify-content-between"><span>直播 1 小時</span> <span>NT1000</span></dd>
								<dd class="col-sm-5">
									評價
									<i class="fas fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									(99999)
								</dd>
							</dl>
						</div>
					</div>
					<!--end-->

					<div class="row mx-auto matchsList align-items-center">
						<div class="col-md-3">
							<img src="upload/img-prod.jpg" alt="">
						</div>
						<div class="col-md-9">
							<dl class="row mx-auto mb-4 align-items-end matchsList">
								<dt class="col-md-4">莉 莉 Lily  / 20歲</dt>
								<dd class="col-md-4 col-sm-6">有無經紀人 : 有經紀人</dd>
								<dd class="col-md-4 col-sm-6">可工作地點: 台北.台中</dd>
							</dl>
							<dl class="row mx-auto matchsList">
								<dd class="col-sm-4 d-flex justify-content-between"><span>一日外拍 8 小時</span> <span>NT10000</span></dd>
								<dd class="col-sm-5">
									評價
									<i class="fas fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									(99999)
								</dd>
							</dl>
							<dl class="row mx-auto matchsList">
								<dd class="col-sm-4 d-flex justify-content-between"><span>直播 1 小時</span> <span>NT1000</span></dd>
								<dd class="col-sm-5">
									評價
									<i class="fas fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									(99999)
								</dd>
							</dl>
						</div>
					</div>
					<div class="row mx-auto matchsList align-items-center">
						<div class="col-md-3">
							<img src="upload/img-prod.jpg" alt="">
						</div>
						<div class="col-md-9">
							<dl class="row mx-auto mb-4 align-items-end matchsList">
								<dt class="col-md-4">莉 莉 Lily  / 20歲</dt>
								<dd class="col-md-4 col-sm-6">有無經紀人 : 有經紀人</dd>
								<dd class="col-md-4 col-sm-6">可工作地點: 台北.台中</dd>
							</dl>
							<dl class="row mx-auto matchsList">
								<dd class="col-sm-4 d-flex justify-content-between"><span>一日外拍 8 小時</span> <span>NT10000</span></dd>
								<dd class="col-sm-5">
									評價
									<i class="fas fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									(99999)
								</dd>
							</dl>
							<dl class="row mx-auto matchsList">
								<dd class="col-sm-4 d-flex justify-content-between"><span>直播 1 小時</span> <span>NT1000</span></dd>
								<dd class="col-sm-5">
									評價
									<i class="fas fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									(99999)
								</dd>
							</dl>
						</div>
					</div>
					<div class="row mx-auto matchsList align-items-center">
						<div class="col-md-3">
							<img src="upload/img-prod.jpg" alt="">
						</div>
						<div class="col-md-9">
							<dl class="row mx-auto mb-4 align-items-end matchsList">
								<dt class="col-md-4">莉 莉 Lily  / 20歲</dt>
								<dd class="col-md-4 col-sm-6">有無經紀人 : 有經紀人</dd>
								<dd class="col-md-4 col-sm-6">可工作地點: 台北.台中</dd>
							</dl>
							<dl class="row mx-auto matchsList">
								<dd class="col-sm-4 d-flex justify-content-between"><span>一日外拍 8 小時</span> <span>NT10000</span></dd>
								<dd class="col-sm-5">
									評價
									<i class="fas fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									(99999)
								</dd>
							</dl>
							<dl class="row mx-auto matchsList">
								<dd class="col-sm-4 d-flex justify-content-between"><span>直播 1 小時</span> <span>NT1000</span></dd>
								<dd class="col-sm-5">
									評價
									<i class="fas fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									(99999)
								</dd>
							</dl>
						</div>
					</div>
					<div class="row mx-auto matchsList align-items-center">
						<div class="col-md-3">
							<img src="upload/img-prod.jpg" alt="">
						</div>
						<div class="col-md-9">
							<dl class="row mx-auto mb-4 align-items-end matchsList">
								<dt class="col-md-4">莉 莉 Lily  / 20歲</dt>
								<dd class="col-md-4 col-sm-6">有無經紀人 : 有經紀人</dd>
								<dd class="col-md-4 col-sm-6">可工作地點: 台北.台中</dd>
							</dl>
							<dl class="row mx-auto matchsList">
								<dd class="col-sm-4 d-flex justify-content-between"><span>一日外拍 8 小時</span> <span>NT10000</span></dd>
								<dd class="col-sm-5">
									評價
									<i class="fas fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									(99999)
								</dd>
							</dl>
							<dl class="row mx-auto matchsList">
								<dd class="col-sm-4 d-flex justify-content-between"><span>直播 1 小時</span> <span>NT1000</span></dd>
								<dd class="col-sm-5">
									評價
									<i class="fas fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									(99999)
								</dd>
							</dl>
						</div>
					</div>
					<div class="row mx-auto matchsList align-items-center">
						<div class="col-md-3">
							<img src="upload/img-prod.jpg" alt="">
						</div>
						<div class="col-md-9">
							<dl class="row mx-auto mb-4 align-items-end matchsList">
								<dt class="col-md-4">莉 莉 Lily  / 20歲</dt>
								<dd class="col-md-4 col-sm-6">有無經紀人 : 有經紀人</dd>
								<dd class="col-md-4 col-sm-6">可工作地點: 台北.台中</dd>
							</dl>
							<dl class="row mx-auto matchsList">
								<dd class="col-sm-4 d-flex justify-content-between"><span>一日外拍 8 小時</span> <span>NT10000</span></dd>
								<dd class="col-sm-5">
									評價
									<i class="fas fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									(99999)
								</dd>
							</dl>
							<dl class="row mx-auto matchsList">
								<dd class="col-sm-4 d-flex justify-content-between"><span>直播 1 小時</span> <span>NT1000</span></dd>
								<dd class="col-sm-5">
									評價
									<i class="fas fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									(99999)
								</dd>
							</dl>
						</div>
					</div>
				</div>
			</div>


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
	</section>
</section>

<?php include("footer.php")?>
</body>
</html>