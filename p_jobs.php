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
				<dd onclick="location.href='p_team.php'" class="col-sm-4">
					<p>找工作團隊</p>
					<span><i class="fas fa-caret-down"></i></span>
				</dd>
				<dd onclick="location.href='p_jobs.php'" class="col-sm-4 active">
					<p>演出/工作機會</p>
					<span><i class="fas fa-caret-down"></i></span>
				</dd>
			</dl>
			<!--porject search items-->
			<nav class="col-lg-9 mx-auto mb-4 mobileSM">
				<div class="nav nav-pills d-flex justify-content-around" id="nav-tab" role="tablist">
					<a class="nav-item nav-link active" id="nav-items01-tab" data-toggle="tab" href="#nav-items01" role="tab" aria-controls="nav-items01" aria-selected="false">職業類型</a>
					<a class="nav-item nav-link" id="nav-items02-tab" data-toggle="tab" href="#nav-items02" role="tab" aria-controls="nav-items02" aria-selected="false">工作地點</a>
					<a class="nav-item nav-link" id="nav-items03-tab" data-toggle="tab" href="#nav-items03" role="tab" aria-controls="nav-items03" aria-selected="false">播放媒體</a>
					<a class="nav-item nav-link" id="nav-items04-tab" data-toggle="tab" href="#nav-items04" role="tab" aria-controls="nav-items04" aria-selected="false">合作方式</a>
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
							<a class="nav-item nav-link" id="nav-items03-tab" data-toggle="tab" href="#nav-items03" role="tab" aria-controls="nav-items03" aria-selected="false">播放媒體</a>
							<a class="nav-item nav-link" id="nav-items04-tab" data-toggle="tab" href="#nav-items04" role="tab" aria-controls="nav-items04" aria-selected="false">合作方式</a>
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
						<dd class="col-6">
							<select name="" id="">
								<option value="" selected>- 縣市 -</option>
							</select>
						</dd>
						<dd class="col-6">
							<select name="" id="">
								<option value="" selected>- 地區 -</option>
							</select>
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
							<input type="checkbox"> <label for="">合作方式</label>
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
							<input type="checkbox"> <label for="">播放媒體</label>
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
				<div class="col-sm-4 d-flex justify-content-start contentSelector Selector-f37216">
					<p><img src="images/long-arrow-alt-up-solid.svg" alt=""></p>
					<p>排序方式</p>
					<p><a class="active" href="#">刊登日期</a></p>
					<p><a href="#">截止日期</a></p>
				</div>
				<div class="addProd addProd-f37216">
					<a class="active" href="#">我要刊登 <i class="fas fa-plus-circle"></i></a>
				</div>
			</div>

			<!--jobs-->
			<dl class="col-lg-10 row mx-auto Jobs">
				<!--start-->
				<dd onclick="location.href='p_jobs_detail.php'" class="col-sm-6">
					<h3>網路微電影 徵演員</h3>
					<p>專案期間: 2017-08-01</p>
					<p>試鏡日期: 2017-07-02</p>
					<p>面試地點: 北部地區</p>
				</dd>
				<dd class="col-sm-6 d-sm-flex justify-content-end align-items-start">
					<span>刊登日期 2018-06-21</span>
				</dd>
				<dd class="col-12">
					<p>類型片：劇情片 影片長度：10-15分鐘 【故事大綱】 男女主角彼此交往了很長一段時間，雖然爭吵，有時也會感到不安，但他們還算恩愛，還算穩定，直到男主角的大學同學出現，女主角開始動搖，漸漸對彼此的關係失去自信，在現實、煩惱及情感中糾結</p>
				</dd>
				<!--end-->
				<dd onclick="location.href='p_jobs_detail.php'" class="col-sm-6">
					<h3>網路微電影 徵演員</h3>
					<p>專案期間: 2017-08-01</p>
					<p>試鏡日期: 2017-07-02</p>
					<p>面試地點: 北部地區</p>
				</dd>
				<dd class="col-sm-6 d-sm-flex justify-content-end align-items-start">
					<span cl>刊登日期 2018-06-21</span>
				</dd>
				<dd class="col-12">
					<p>類型片：劇情片 影片長度：10-15分鐘 【故事大綱】 男女主角彼此交往了很長一段時間，雖然爭吵，有時也會感到不安，但他們還算恩愛，還算穩定，直到男主角的大學同學出現，女主角開始動搖，漸漸對彼此的關係失去自信，在現實、煩惱及情感中糾結</p>
				</dd>
				<dd onclick="location.href='p_jobs_detail.php'" class="col-sm-6">
					<h3>網路微電影 徵演員</h3>
					<p>專案期間: 2017-08-01</p>
					<p>試鏡日期: 2017-07-02</p>
					<p>面試地點: 北部地區</p>
				</dd>
				<dd class="col-sm-6 d-sm-flex justify-content-end align-items-start">
					<span>刊登日期 2018-06-21</span>
				</dd>
				<dd class="col-12">
					<p>類型片：劇情片 影片長度：10-15分鐘 【故事大綱】 男女主角彼此交往了很長一段時間，雖然爭吵，有時也會感到不安，但他們還算恩愛，還算穩定，直到男主角的大學同學出現，女主角開始動搖，漸漸對彼此的關係失去自信，在現實、煩惱及情感中糾結</p>
				</dd>
				<dd onclick="location.href='p_jobs_detail.php'" class="col-sm-6">
					<h3>網路微電影 徵演員</h3>
					<p>專案期間: 2017-08-01</p>
					<p>試鏡日期: 2017-07-02</p>
					<p>面試地點: 北部地區</p>
				</dd>
				<dd class="col-sm-6 d-sm-flex justify-content-end align-items-start">
					<span>刊登日期 2018-06-21</span>
				</dd>
				<dd class="col-12">
					<p>類型片：劇情片 影片長度：10-15分鐘 【故事大綱】 男女主角彼此交往了很長一段時間，雖然爭吵，有時也會感到不安，但他們還算恩愛，還算穩定，直到男主角的大學同學出現，女主角開始動搖，漸漸對彼此的關係失去自信，在現實、煩惱及情感中糾結</p>
				</dd>
				<dd onclick="location.href='p_jobs_detail.php'" class="col-sm-6">
					<h3>網路微電影 徵演員</h3>
					<p>專案期間: 2017-08-01</p>
					<p>試鏡日期: 2017-07-02</p>
					<p>面試地點: 北部地區</p>
				</dd>
				<dd class="col-sm-6 d-sm-flex justify-content-end align-items-start">
					<span>刊登日期 2018-06-21</span>
				</dd>
				<dd class="col-12">
					<p>類型片：劇情片 影片長度：10-15分鐘 【故事大綱】 男女主角彼此交往了很長一段時間，雖然爭吵，有時也會感到不安，但他們還算恩愛，還算穩定，直到男主角的大學同學出現，女主角開始動搖，漸漸對彼此的關係失去自信，在現實、煩惱及情感中糾結</p>
				</dd>
				<dd onclick="location.href='p_jobs_detail.php'" class="col-sm-6">
					<h3>網路微電影 徵演員</h3>
					<p>專案期間: 2017-08-01</p>
					<p>試鏡日期: 2017-07-02</p>
					<p>面試地點: 北部地區</p>
				</dd>
				<dd class="col-sm-6 d-sm-flex justify-content-end align-items-start">
					<span>刊登日期 2018-06-21</span>
				</dd>
				<dd class="col-12">
					<p>類型片：劇情片 影片長度：10-15分鐘 【故事大綱】 男女主角彼此交往了很長一段時間，雖然爭吵，有時也會感到不安，但他們還算恩愛，還算穩定，直到男主角的大學同學出現，女主角開始動搖，漸漸對彼此的關係失去自信，在現實、煩惱及情感中糾結</p>
				</dd>
				<dd onclick="location.href='p_jobs_detail.php'" class="col-sm-6">
					<h3>網路微電影 徵演員</h3>
					<p>專案期間: 2017-08-01</p>
					<p>試鏡日期: 2017-07-02</p>
					<p>面試地點: 北部地區</p>
				</dd>
				<dd class="col-sm-6 d-sm-flex justify-content-end align-items-start">
					<span>刊登日期 2018-06-21</span>
				</dd>
				<dd class="col-12">
					<p>類型片：劇情片 影片長度：10-15分鐘 【故事大綱】 男女主角彼此交往了很長一段時間，雖然爭吵，有時也會感到不安，但他們還算恩愛，還算穩定，直到男主角的大學同學出現，女主角開始動搖，漸漸對彼此的關係失去自信，在現實、煩惱及情感中糾結</p>
				</dd>
				<dd onclick="location.href='p_jobs_detail.php'" class="col-sm-6">
					<h3>網路微電影 徵演員</h3>
					<p>專案期間: 2017-08-01</p>
					<p>試鏡日期: 2017-07-02</p>
					<p>面試地點: 北部地區</p>
				</dd>
				<dd class="col-sm-6 d-sm-flex justify-content-end align-items-start">
					<span>刊登日期 2018-06-21</span>
				</dd>
				<dd class="col-12">
					<p>類型片：劇情片 影片長度：10-15分鐘 【故事大綱】 男女主角彼此交往了很長一段時間，雖然爭吵，有時也會感到不安，但他們還算恩愛，還算穩定，直到男主角的大學同學出現，女主角開始動搖，漸漸對彼此的關係失去自信，在現實、煩惱及情感中糾結</p>
				</dd>
				<dd onclick="location.href='p_jobs_detail.php'" class="col-sm-6">
					<h3>網路微電影 徵演員</h3>
					<p>專案期間: 2017-08-01</p>
					<p>試鏡日期: 2017-07-02</p>
					<p>面試地點: 北部地區</p>
				</dd>
				<dd class="col-sm-6 d-sm-flex justify-content-end align-items-start">
					<span>刊登日期 2018-06-21</span>
				</dd>
				<dd class="col-12">
					<p>類型片：劇情片 影片長度：10-15分鐘 【故事大綱】 男女主角彼此交往了很長一段時間，雖然爭吵，有時也會感到不安，但他們還算恩愛，還算穩定，直到男主角的大學同學出現，女主角開始動搖，漸漸對彼此的關係失去自信，在現實、煩惱及情感中糾結</p>
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