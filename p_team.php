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
		<div class="title bc-f37216 d-md-flex justify-content-between align-items-end px-3">
			<h1>演出/工作機會<span>Perform Opportunities</span></h1>
			<div class="navi">
				<span><a href=".">首頁</a></span>
				<span>演出/工作機會</span>
			</div>
		</div>

		<div class="container pb-4">
			<!--page project-->
			<dl class="row mx-0 no-gutters Match productEndorsment bc-f37216">
				<dd onclick="location.href='p_actor.php'" class="col-sm-4">
					<p>找演員</p>
					<span><i class="fas fa-caret-down"></i></span>
				</dd>
				<dd onclick="location.href='p_team.php'" class="col-sm-4 active">
					<p>找工作團隊</p>
					<span><i class="fas fa-caret-down"></i></span>
				</dd>
				<dd onclick="location.href='p_jobs.php'" class="col-sm-4">
					<p>演出/工作機會</p>
					<span><i class="fas fa-caret-down"></i></span>
				</dd>
			</dl>
			<!--porject search items-->
			<nav class="col-lg-9 mx-auto mb-4 mobileSM">
				<div class="nav nav-pills d-flex justify-content-around" id="nav-tab" role="tablist">
					<a class="nav-item nav-link active" id="nav-items01-tab" data-toggle="tab" href="#nav-items01" role="tab" aria-controls="nav-items01" aria-selected="false">職業類型</a>
					<a class="nav-item nav-link" id="nav-items02-tab" data-toggle="tab" href="#nav-items02" role="tab" aria-controls="nav-items02" aria-selected="false">工作地點</a>
				</div>
			</nav>
			<!--mobile-->
			<div class="mb-4 searchItems mobileXS">
				<a class="btn btn-secondary dropdown-toggle searchItems" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span>職業類型</span>
				</a>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					<nav class="searchItems">
						<div class="nav nav-pills" id="nav-tab" role="tablist">
							<a class="nav-item nav-link active" id="nav-items01-tab" data-toggle="tab" href="#nav-items01" role="tab" aria-controls="nav-items01" aria-selected="false">職業類型</a>
							<a class="nav-item nav-link" id="nav-items02-tab" data-toggle="tab" href="#nav-items02" role="tab" aria-controls="nav-items02" aria-selected="false">工作地點</a>
						</div>
					</nav>
				</div>
			</div>
			<div class="col-lg-9 mx-auto tab-content" id="nav-tabContent">
				<div class="tab-pane fade show active" id="nav-items01" role="tabpanel" aria-labelledby="nav-items01-tab">
					<dl class="row searchItems">
						<dd class="col-sm-3 col-6">
							<input type="checkbox"> <label for="">燈光師</label>
						</dd>
						<dd class="col-12 mt-4">
							<button type="reset">重設</button>
							<button type="submit">搜尋</button>
						</dd>
					</dl>
				</div>
				<div class="tab-pane fade" id="nav-items02" role="tabpanel" aria-labelledby="nav-items02-tab">
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

			<!--desktop-->
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
					<dl class="row mx-auto no-gutters matchsSuare">
						<!--start-->
						<dd class="col-lg-3 col-md-4 col-sm-6 px-sm-1">
							<figure>
								<p class="align-items-center"><a href="p_team_detail.php"><img src="upload/img-prod.jpg" alt=""></a></p>
								<figcaption>
									<h3>莉莉 Lily</h3>
								</figcaption>
							</figure>
						</dd>
						<!--end-->
						<dd class="col-lg-3 col-md-4 col-sm-6 px-sm-1">
							<figure>
								<p class="align-items-center"><a href="p_team_detail.php"><img src="upload/img-prod.jpg" alt=""></a></p>
								<figcaption>
									<h3>莉莉 Lily</h3>
								</figcaption>
							</figure>
						</dd>
						<dd class="col-lg-3 col-md-4 col-sm-6 px-sm-1">
							<figure>
								<p class="align-items-center"><a href="p_team_detail.php"><img src="upload/img-prod.jpg" alt=""></a></p>
								<figcaption>
									<h3>莉莉 Lily</h3>
								</figcaption>
							</figure>
						</dd>
						<dd class="col-lg-3 col-md-4 col-sm-6 px-sm-1">
							<figure>
								<p class="align-items-center"><a href="p_team_detail.php"><img src="upload/img-prod.jpg" alt=""></a></p>
								<figcaption>
									<h3>莉莉 Lily</h3>
								</figcaption>
							</figure>
						</dd>
						<dd class="col-lg-3 col-md-4 col-sm-6 px-sm-1">
							<figure>
								<p class="align-items-center"><a href="p_team_detail.php"><img src="upload/img-prod.jpg" alt=""></a></p>
								<figcaption>
									<h3>莉莉 Lily</h3>
								</figcaption>
							</figure>
						</dd>
						<dd class="col-lg-3 col-md-4 col-sm-6 px-sm-1">
							<figure>
								<p class="align-items-center"><a href="p_team_detail.php"><img src="upload/img-prod.jpg" alt=""></a></p>
								<figcaption>
									<h3>莉莉 Lily</h3>
								</figcaption>
							</figure>
						</dd>
						<dd class="col-lg-3 col-md-4 col-sm-6 px-sm-1">
							<figure>
								<p class="align-items-center"><a href="p_team_detail.php"><img src="upload/img-prod.jpg" alt=""></a></p>
								<figcaption>
									<h3>莉莉 Lily</h3>
								</figcaption>
							</figure>
						</dd>
						<dd class="col-lg-3 col-md-4 col-sm-6 px-sm-1">
							<figure>
								<p class="align-items-center"><a href="p_team_detail.php"><img src="upload/img-prod.jpg" alt=""></a></p>
								<figcaption>
									<h3>莉莉 Lily</h3>
								</figcaption>
							</figure>
						</dd>
					</dl>
				</div>
				<div class="tab-pane fade" id="nav-spokes02" role="tabpanel" aria-labelledby="nav-spokes02-tab">


					<table class="col-lg-10 mx-auto Team mobileSM">
						<tr>
							<th></th>
							<th>姓名</th>
							<th>職業類型</th>
							<th>可工作地點</th>
						</tr>
						<!--start-->
						<tr onclick="location.href='p_team_detail.php'">
							<td><img src="upload/img-prod.jpg" alt=""></td>
							<td>Lee</td>
							<td>燈光師</td>
							<td>台北　台中</td>
						</tr>
						<!--end-->
						<tr onclick="location.href='p_team_detail.php'">
							<td><img src="upload/img-prod.jpg" alt=""></td>
							<td>Lee</td>
							<td>燈光師</td>
							<td>台北　台中</td>
						</tr>
						<tr onclick="location.href='p_team_detail.php'">
							<td><img src="upload/img-prod.jpg" alt=""></td>
							<td>Lee</td>
							<td>燈光師</td>
							<td>台北　台中</td>
						</tr>
						<tr onclick="location.href='p_team_detail.php'">
							<td><img src="upload/img-prod.jpg" alt=""></td>
							<td>Lee</td>
							<td>燈光師</td>
							<td>台北　台中</td>
						</tr>
						<tr onclick="location.href='p_team_detail.php'">
							<td><img src="upload/img-prod.jpg" alt=""></td>
							<td>Lee</td>
							<td>燈光師</td>
							<td>台北　台中</td>
						</tr>
						<tr onclick="location.href='p_team_detail.php'">
							<td><img src="upload/img-prod.jpg" alt=""></td>
							<td>Lee</td>
							<td>燈光師</td>
							<td>台北　台中</td>
						</tr>
						<tr onclick="location.href='p_team_detail.php'">
							<td><img src="upload/img-prod.jpg" alt=""></td>
							<td>Lee</td>
							<td>燈光師</td>
							<td>台北　台中</td>
						</tr>
						<tr onclick="location.href='p_team_detail.php'">
							<td><img src="upload/img-prod.jpg" alt=""></td>
							<td>Lee</td>
							<td>燈光師</td>
							<td>台北　台中</td>
						</tr>
						<tr onclick="location.href='p_team_detail.php'">
							<td><img src="upload/img-prod.jpg" alt=""></td>
							<td>Lee</td>
							<td>燈光師</td>
							<td>台北　台中</td>
						</tr>
						<tr onclick="location.href='p_team_detail.php'">
							<td><img src="upload/img-prod.jpg" alt=""></td>
							<td>Lee</td>
							<td>燈光師</td>
							<td>台北　台中</td>
						</tr>
						<tr onclick="location.href='p_team_detail.php'">
							<td><img src="upload/img-prod.jpg" alt=""></td>
							<td>Lee</td>
							<td>燈光師</td>
							<td>台北　台中</td>
						</tr>
					</table>
					<!--mobile-->
					<dl class="mobileXS">
						<!--start-->
						<dd onclick="location.href='p_team_detail.php'">
							<dl class="row mx-auto Team">
								<dd class="col-12"><img src="upload/img-prod.jpg" alt=""></dd>
								<dt class="col-5">姓名</dt>
								<dd class="col-7">Lee</dd>
								<dt class="col-5">職業類型</dt>
								<dd class="col-7">Lee</dd>
								<dt class="col-5">可工作地點</dt>
								<dd class="col-7">台北　台中</dd>
							</dl>
						</dd>
						<!--end-->
						<dd onclick="location.href='p_team_detail.php'">
							<dl class="row mx-auto Team">
								<dd class="col-12"><img src="upload/img-prod.jpg" alt=""></dd>
								<dt class="col-5">姓名</dt>
								<dd class="col-7">Lee</dd>
								<dt class="col-5">職業類型</dt>
								<dd class="col-7">Lee</dd>
								<dt class="col-5">可工作地點</dt>
								<dd class="col-7">台北　台中</dd>
							</dl>
						</dd>
						<dd onclick="location.href='p_team_detail.php'">
							<dl class="row mx-auto Team">
								<dd class="col-12"><img src="upload/img-prod.jpg" alt=""></dd>
								<dt class="col-5">姓名</dt>
								<dd class="col-7">Lee</dd>
								<dt class="col-5">職業類型</dt>
								<dd class="col-7">Lee</dd>
								<dt class="col-5">可工作地點</dt>
								<dd class="col-7">台北　台中</dd>
							</dl>
						</dd>
						<dd onclick="location.href='p_team_detail.php'">
							<dl class="row mx-auto Team">
								<dd class="col-12"><img src="upload/img-prod.jpg" alt=""></dd>
								<dt class="col-5">姓名</dt>
								<dd class="col-7">Lee</dd>
								<dt class="col-5">職業類型</dt>
								<dd class="col-7">Lee</dd>
								<dt class="col-5">可工作地點</dt>
								<dd class="col-7">台北　台中</dd>
							</dl>
						</dd>
						<dd onclick="location.href='p_team_detail.php'">
							<dl class="row mx-auto Team">
								<dd class="col-12"><img src="upload/img-prod.jpg" alt=""></dd>
								<dt class="col-5">姓名</dt>
								<dd class="col-7">Lee</dd>
								<dt class="col-5">職業類型</dt>
								<dd class="col-7">Lee</dd>
								<dt class="col-5">可工作地點</dt>
								<dd class="col-7">台北　台中</dd>
							</dl>
						</dd>
						<dd onclick="location.href='p_team_detail.php'">
							<dl class="row mx-auto Team">
								<dd class="col-12"><img src="upload/img-prod.jpg" alt=""></dd>
								<dt class="col-5">姓名</dt>
								<dd class="col-7">Lee</dd>
								<dt class="col-5">職業類型</dt>
								<dd class="col-7">Lee</dd>
								<dt class="col-5">可工作地點</dt>
								<dd class="col-7">台北　台中</dd>
							</dl>
						</dd>
						<dd onclick="location.href='p_team_detail.php'">
							<dl class="row mx-auto Team">
								<dd class="col-12"><img src="upload/img-prod.jpg" alt=""></dd>
								<dt class="col-5">姓名</dt>
								<dd class="col-7">Lee</dd>
								<dt class="col-5">職業類型</dt>
								<dd class="col-7">Lee</dd>
								<dt class="col-5">可工作地點</dt>
								<dd class="col-7">台北　台中</dd>
							</dl>
						</dd>
						<dd onclick="location.href='p_team_detail.php'">
							<dl class="row mx-auto Team">
								<dd class="col-12"><img src="upload/img-prod.jpg" alt=""></dd>
								<dt class="col-5">姓名</dt>
								<dd class="col-7">Lee</dd>
								<dt class="col-5">職業類型</dt>
								<dd class="col-7">Lee</dd>
								<dt class="col-5">可工作地點</dt>
								<dd class="col-7">台北　台中</dd>
							</dl>
						</dd>
						<dd onclick="location.href='p_team_detail.php'">
							<dl class="row mx-auto Team">
								<dd class="col-12"><img src="upload/img-prod.jpg" alt=""></dd>
								<dt class="col-5">姓名</dt>
								<dd class="col-7">Lee</dd>
								<dt class="col-5">職業類型</dt>
								<dd class="col-7">Lee</dd>
								<dt class="col-5">可工作地點</dt>
								<dd class="col-7">台北　台中</dd>
							</dl>
						</dd>
					</dl>
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