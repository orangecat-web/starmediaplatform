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
				<dd onclick="location.href='p_spokesperson.php'" class="col-6">
					<p>找商品代言人</p>
					<span><i class="fas fa-caret-down"></i></span>
				</dd>
				<dd onclick="location.href='p_endorsement.php'" class="col-6 active">
					<p>找代言工作機會</p>
					<span><i class="fas fa-caret-down"></i></span>
				</dd>
			</dl>
			<!--porject search items-->
			<nav class="col-lg-9 mx-auto mb-4 mobileSM">
				<div class="nav nav-pills d-flex justify-content-between" id="nav-tab" role="tablist">
					<a class="nav-item nav-link active" id="nav-items01-tab" data-toggle="tab" href="#nav-items01" role="tab" aria-controls="nav-items01" aria-selected="false">商品類別</a>
					<a class="nav-item nav-link" id="nav-items02-tab" data-toggle="tab" href="#nav-items02" role="tab" aria-controls="nav-items02" aria-selected="false">媒體平台</a>
					<a class="nav-item nav-link" id="nav-items03-tab" data-toggle="tab" href="#nav-items03" role="tab" aria-controls="nav-items03" aria-selected="false">合作待遇</a>
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
							<a class="nav-item nav-link active" id="nav-items01-tab" data-toggle="tab" href="#nav-items01" role="tab" aria-controls="nav-items01" aria-selected="false">商品類別</a>
							<a class="nav-item nav-link" id="nav-items02-tab" data-toggle="tab" href="#nav-items02" role="tab" aria-controls="nav-items02" aria-selected="false">媒體平台</a>
							<a class="nav-item nav-link" id="nav-items03-tab" data-toggle="tab" href="#nav-items03" role="tab" aria-controls="nav-items03" aria-selected="false">合作待遇</a>
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
			<div class="d-sm-flex justify-content-between mb-5">
				<div class="col-sm-4 d-flex justify-content-start contentSelector">
					<p><img src="images/long-arrow-alt-up-solid.svg" alt=""></p>
					<p>排序方式</p>
					<p><a class="active" href="#">刊登日期</a></p>
					<p><a href="#">截止日期</a></p>
				</div>
				<div class="addProd">
					<a class="active" href="#">我要刊登 <i class="fas fa-plus-circle"></i></a>
				</div>
			</div>
			<!--project content-->
			<dl class="row mx-auto matchsSuare Endors">
				<dd class="col-lg-3 col-md-4 col-sm-6">
					<figure>
						<p class="align-items-center"><a href="p_endorsement_detail.php"><img src="upload/img-prod.jpg" alt=""></a></p>
						<figcaption>
							<p class="d-flex justify-content-between">
								<span>OOO公司</span>
								<span><i class="fas fa-map-marker-alt"></i>不限</span>
							</p>
							<p>卸妝油試用PO文</p>
						</figcaption>
					</figure>
				</dd>
				<dd class="col-lg-3 col-md-4 col-sm-6">
					<figure>
						<p class="align-items-center"><a href="p_endorsement_detail.php"><img src="upload/img-prod.jpg" alt=""></a></p>
						<figcaption>
							<p class="d-flex justify-content-between">
								<span>OOO公司</span>
								<span><i class="fas fa-map-marker-alt"></i>不限</span>
							</p>
							<p>卸妝油試用PO文</p>
						</figcaption>
					</figure>
				</dd>
				<dd class="col-lg-3 col-md-4 col-sm-6">
					<figure>
						<p class="align-items-center"><a href="p_endorsement_detail.php"><img src="upload/img-prod.jpg" alt=""></a></p>
						<figcaption>
							<p class="d-flex justify-content-between">
								<span>OOO公司</span>
								<span><i class="fas fa-map-marker-alt"></i>不限</span>
							</p>
							<p>卸妝油試用PO文</p>
						</figcaption>
					</figure>
				</dd>
				<dd class="col-lg-3 col-md-4 col-sm-6">
					<figure>
						<p class="align-items-center"><a href="p_endorsement_detail.php"><img src="upload/img-prod.jpg" alt=""></a></p>
						<figcaption>
							<p class="d-flex justify-content-between">
								<span>OOO公司</span>
								<span><i class="fas fa-map-marker-alt"></i>不限</span>
							</p>
							<p>卸妝油試用PO文</p>
						</figcaption>
					</figure>
				</dd>
				<dd class="col-lg-3 col-md-4 col-sm-6">
					<figure>
						<p class="align-items-center"><a href="p_endorsement_detail.php"><img src="upload/img-prod.jpg" alt=""></a></p>
						<figcaption>
							<p class="d-flex justify-content-between">
								<span>OOO公司</span>
								<span><i class="fas fa-map-marker-alt"></i>不限</span>
							</p>
							<p>卸妝油試用PO文</p>
						</figcaption>
					</figure>
				</dd>
				<dd class="col-lg-3 col-md-4 col-sm-6">
					<figure>
						<p class="align-items-center"><a href="p_endorsement_detail.php"><img src="upload/img-prod.jpg" alt=""></a></p>
						<figcaption>
							<p class="d-flex justify-content-between">
								<span>OOO公司</span>
								<span><i class="fas fa-map-marker-alt"></i>不限</span>
							</p>
							<p>卸妝油試用PO文</p>
						</figcaption>
					</figure>
				</dd>
				<dd class="col-lg-3 col-md-4 col-sm-6">
					<figure>
						<p class="align-items-center"><a href="p_endorsement_detail.php"><img src="upload/img-prod.jpg" alt=""></a></p>
						<figcaption>
							<p class="d-flex justify-content-between">
								<span>OOO公司</span>
								<span><i class="fas fa-map-marker-alt"></i>不限</span>
							</p>
							<p>卸妝油試用PO文</p>
						</figcaption>
					</figure>
				</dd>
				<dd class="col-lg-3 col-md-4 col-sm-6">
					<figure>
						<p class="align-items-center"><a href="p_endorsement_detail.php"><img src="upload/img-prod.jpg" alt=""></a></p>
						<figcaption>
							<p class="d-flex justify-content-between">
								<span>OOO公司</span>
								<span><i class="fas fa-map-marker-alt"></i>不限</span>
							</p>
							<p>卸妝油試用PO文</p>
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
	</section>
</section>

<?php include("footer.php")?>
</body>
</html>