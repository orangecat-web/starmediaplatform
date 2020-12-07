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
				<dd onclick="location.href='p_actor.php'" class="col-sm-4 active">
					<p>找演員</p>
					<span><i class="fas fa-caret-down"></i></span>
				</dd>
				<dd onclick="location.href='p_team.php'" class="col-sm-4">
					<p>找工作團隊</p>
					<span><i class="fas fa-caret-down"></i></span>
				</dd>
				<dd onclick="location.href='p_jobs.php'" class="col-sm-4">
					<p>演出/工作機會</p>
					<span><i class="fas fa-caret-down"></i></span>
				</dd>
			</dl>
			<!--content selector-->
			<div class="row mx-auto">
				<!--desktop 手機版在最下面-->
				<aside class="col-md-3">
					<dl id="accordion" class="accordion actorSelector deskTopTablets">
						<dt class="mb-3"><a href="#">重設篩選<i class="fas fa-sync"></i></a></dt>
						<dd>
							<div class="d-flex justify-content-between link">性別<i class="fas fa-caret-down"></i></div>
							<dl class="submenu">
								<dd>
									<p><input type="checkbox"> 男</p>
									<p><input type="checkbox"> 女</p>
								</dd>
							</dl>
						</dd>
						<dd>
							<div class="d-flex justify-content-between link">年齡<i class="fas fa-caret-down"></i></div>
							<dl class="submenu">
								<dd class="d-flex justify-content-between">
									<select name="" id="">
										<option value="">-</option>
									</select>
									<p class="px-2">-</p>
									<select name="" id="">
										<option value="">-</option>
									</select>
								</dd>
							</dl>
						</dd>
						<dd>
							<div class="d-flex justify-content-between link">是否有經紀人<i class="fas fa-caret-down"></i></div>
							<dl class="submenu">
								<dd>
									<p><input type="radio"> 是</p>
									<p><input type="radio"> 否</p>
								</dd>
							</dl>
						</dd>
						<dd>
							<div class="d-flex justify-content-between link">國籍<i class="fas fa-caret-down"></i></div>
							<dl class="submenu">
								<dd class="d-flex justify-content-between">
									<select name="" id="">
										<option value="">-</option>
									</select>
								</dd>
							</dl>
						</dd>
						<dd>
							<div class="d-flex justify-content-between link">族群<i class="fas fa-caret-down"></i></div>
							<dl class="submenu">
								<dd class="d-flex justify-content-between">
									<select name="" id="">
										<option value="">-</option>
									</select>
								</dd>
							</dl>
						</dd>
						<dd>
							<div class="d-flex justify-content-between link">語言<i class="fas fa-caret-down"></i></div>
							<dl class="submenu">
								<dd>
									<p><input type="checkbox"> 中文</p>
									<p><input type="checkbox"> 台語</p>
								</dd>
							</dl>
						</dd>
						<dd>
							<div class="d-flex justify-content-between link">身型<i class="fas fa-caret-down"></i></div>
							<dl class="submenu">
								<dd class="d-flex justify-content-between">
									<select name="" id="">
										<option value="">-</option>
									</select>
								</dd>
							</dl>
						</dd>
						<dd>
							<div class="d-flex justify-content-between link">髮色<i class="fas fa-caret-down"></i></div>
							<dl class="submenu">
								<dd class="d-flex justify-content-between">
									<select name="" id="">
										<option value="">-</option>
									</select>
								</dd>
							</dl>
						</dd>
						<dd>
							<div class="d-flex justify-content-between link">專長<i class="fas fa-caret-down"></i></div>
							<dl class="submenu">
								<dd>
									<p><input type="checkbox"> 專長</p>
									<p><input type="checkbox"> 專長</p>
								</dd>
							</dl>
						</dd>
						<dd>
							<div class="d-flex justify-content-between link">工作地點<i class="fas fa-caret-down"></i></div>
							<dl class="submenu">
								<dd>
									<p><input type="checkbox"> 工作地點</p>
									<p><input type="checkbox"> 工作地點</p>
								</dd>
							</dl>
						</dd>
					</dl>
					<!--mobile-->
					<div class="Mobile">
						<button type="button" data-toggle="modal" data-target=".bd-example-modal-lg">進階搜尋</button>
					</div>
				</aside>
				<div class="col-md-9">
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
										<p class="align-items-center"><a href="p_actor_detail.php"><img src="upload/img-prod.jpg" alt=""></a></p>
										<figcaption>
											<h3>莉莉 Lily</h3>
										</figcaption>
									</figure>
								</dd>
								<!--end-->
								<dd class="col-lg-3 col-md-4 col-sm-6 px-sm-1">
									<figure>
										<p class="align-items-center"><a href="p_actor_detail.php"><img src="upload/img-prod.jpg" alt=""></a></p>
										<figcaption>
											<h3>莉莉 Lily</h3>
										</figcaption>
									</figure>
								</dd>
								<dd class="col-lg-3 col-md-4 col-sm-6 px-sm-1">
									<figure>
										<p class="align-items-center"><a href="p_actor_detail.php"><img src="upload/img-prod.jpg" alt=""></a></p>
										<figcaption>
											<h3>莉莉 Lily</h3>
										</figcaption>
									</figure>
								</dd>
								<dd class="col-lg-3 col-md-4 col-sm-6 px-sm-1">
									<figure>
										<p class="align-items-center"><a href="p_actor_detail.php"><img src="upload/img-prod.jpg" alt=""></a></p>
										<figcaption>
											<h3>莉莉 Lily</h3>
										</figcaption>
									</figure>
								</dd>
								<dd class="col-lg-3 col-md-4 col-sm-6 px-sm-1">
									<figure>
										<p class="align-items-center"><a href="p_actor_detail.php"><img src="upload/img-prod.jpg" alt=""></a></p>
										<figcaption>
											<h3>莉莉 Lily</h3>
										</figcaption>
									</figure>
								</dd>
								<dd class="col-lg-3 col-md-4 col-sm-6 px-sm-1">
									<figure>
										<p class="align-items-center"><a href="p_actor_detail.php"><img src="upload/img-prod.jpg" alt=""></a></p>
										<figcaption>
											<h3>莉莉 Lily</h3>
										</figcaption>
									</figure>
								</dd>
								<dd class="col-lg-3 col-md-4 col-sm-6 px-sm-1">
									<figure>
										<p class="align-items-center"><a href="p_actor_detail.php"><img src="upload/img-prod.jpg" alt=""></a></p>
										<figcaption>
											<h3>莉莉 Lily</h3>
										</figcaption>
									</figure>
								</dd>
								<dd class="col-lg-3 col-md-4 col-sm-6 px-sm-1">
									<figure>
										<p class="align-items-center"><a href="p_actor_detail.php"><img src="upload/img-prod.jpg" alt=""></a></p>
										<figcaption>
											<h3>莉莉 Lily</h3>
										</figcaption>
									</figure>
								</dd>
							</dl>
						</div>
						<div class="tab-pane fade" id="nav-spokes02" role="tabpanel" aria-labelledby="nav-spokes02-tab">
							<!--start-->
							<div onclick="location.href='p_actor_detail.php'" class="row mx-auto matchsList align-items-center">
								<div class="col-md-3">
									<img src="upload/img-prod.jpg" alt="">
								</div>
								<div class="col-md-9">
									<dl class="row mx-auto mb-4 align-items-end matchsList">
										<dt class="col-md-4">莉 莉 Lily  / 20歲</dt>
									</dl>
								</div>
							</div>
							<!--end-->

							<div onclick="location.href='p_actor_detail.php'" class="row mx-auto matchsList align-items-center">
								<div class="col-md-3">
									<img src="upload/img-prod.jpg" alt="">
								</div>
								<div class="col-md-9">
									<dl class="row mx-auto mb-4 align-items-end matchsList">
										<dt class="col-md-4">莉 莉 Lily  / 20歲</dt>
									</dl>
								</div>
							</div>
							<div onclick="location.href='p_actor_detail.php'" class="row mx-auto matchsList align-items-center">
								<div class="col-md-3">
									<img src="upload/img-prod.jpg" alt="">
								</div>
								<div class="col-md-9">
									<dl class="row mx-auto mb-4 align-items-end matchsList">
										<dt class="col-md-4">莉 莉 Lily  / 20歲</dt>
									</dl>
								</div>
							</div>
							<div onclick="location.href='p_actor_detail.php'" class="row mx-auto matchsList align-items-center">
								<div class="col-md-3">
									<img src="upload/img-prod.jpg" alt="">
								</div>
								<div class="col-md-9">
									<dl class="row mx-auto mb-4 align-items-end matchsList">
										<dt class="col-md-4">莉 莉 Lily  / 20歲</dt>
									</dl>
								</div>
							</div>
							<div onclick="location.href='p_actor_detail.php'" class="row mx-auto matchsList align-items-center">
								<div class="col-md-3">
									<img src="upload/img-prod.jpg" alt="">
								</div>
								<div class="col-md-9">
									<dl class="row mx-auto mb-4 align-items-end matchsList">
										<dt class="col-md-4">莉 莉 Lily  / 20歲</dt>
									</dl>
								</div>
							</div>
							<div onclick="location.href='p_actor_detail.php'" class="row mx-auto matchsList align-items-center">
								<div class="col-md-3">
									<img src="upload/img-prod.jpg" alt="">
								</div>
								<div class="col-md-9">
									<dl class="row mx-auto mb-4 align-items-end matchsList">
										<dt class="col-md-4">莉 莉 Lily  / 20歲</dt>
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
			</div>
		</div>
	</section>
</section>

<?php include("footer.php")?>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">進階搜尋</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<dl class="accordion actorSelector p-3">
				<dt class="mb-3"><a href="#">重設篩選<i class="fas fa-sync"></i></a></dt>
				<dd>
					<div class="d-flex justify-content-between link mb-3">性別</div>
					<dl class="">
						<dd>
							<p><input type="checkbox"> 男</p>
							<p><input type="checkbox"> 女</p>
						</dd>
					</dl>
				</dd>
				<dd>
					<div class="d-flex justify-content-between link mb-3">年齡</div>
					<dl class="">
						<dd class="d-flex justify-content-between">
							<select name="" id="">
								<option value="">-</option>
							</select>
							<p class="px-2">-</p>
							<select name="" id="">
								<option value="">-</option>
							</select>
						</dd>
					</dl>
				</dd>
				<dd>
					<div class="d-flex justify-content-between link mb-3">是否有經紀人</div>
					<dl class="">
						<dd>
							<p><input type="radio"> 是</p>
							<p><input type="radio"> 否</p>
						</dd>
					</dl>
				</dd>
				<dd>
					<div class="d-flex justify-content-between link mb-3">國籍</div>
					<dl class="">
						<dd class="d-flex justify-content-between">
							<select name="" id="">
								<option value="">-</option>
							</select>
						</dd>
					</dl>
				</dd>
				<dd>
					<div class="d-flex justify-content-between link mb-3">族群</div>
					<dl class="">
						<dd class="d-flex justify-content-between">
							<select name="" id="">
								<option value="">-</option>
							</select>
						</dd>
					</dl>
				</dd>
				<dd>
					<div class="d-flex justify-content-between link mb-3">語言</div>
					<dl class="">
						<dd>
							<p><input type="checkbox"> 中文</p>
							<p><input type="checkbox"> 台語</p>
						</dd>
					</dl>
				</dd>
				<dd>
					<div class="d-flex justify-content-between link mb-3">身型</div>
					<dl class="">
						<dd class="d-flex justify-content-between">
							<select name="" id="">
								<option value="">-</option>
							</select>
						</dd>
					</dl>
				</dd>
				<dd>
					<div class="d-flex justify-content-between link mb-3">髮色</div>
					<dl class="">
						<dd class="d-flex justify-content-between">
							<select name="" id="">
								<option value="">-</option>
							</select>
						</dd>
					</dl>
				</dd>
				<dd>
					<div class="d-flex justify-content-between link mb-3">專長</div>
					<dl class="">
						<dd>
							<p><input type="checkbox"> 專長</p>
							<p><input type="checkbox"> 專長</p>
						</dd>
					</dl>
				</dd>
				<dd>
					<div class="d-flex justify-content-between link mb-3">工作地點</div>
					<dl class="">
						<dd>
							<p><input type="checkbox"> 工作地點</p>
							<p><input type="checkbox"> 工作地點</p>
						</dd>
					</dl>
				</dd>
			</dl>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
	$(function() {
		var Accordion = function(el, multiple) {
			this.el = el || {};
			this.multiple = multiple || false;

			// Variables privadas
			var links = this.el.find('.link');
			// Evento
			links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
		}

		Accordion.prototype.dropdown = function(e) {
			var $el = e.data.el;
			$this = $(this),
				$next = $this.next();

			$next.slideToggle();
			$this.parent().toggleClass('open');

			if (!e.data.multiple) {
				$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
			};
		}	

		var accordion = new Accordion($('#accordion'), false);
	});
</script>
</body>
</html>