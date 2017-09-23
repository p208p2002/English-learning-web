<!DOCTYPE html>
<html lang="en">
<head> @include('website.layouts.headContext')
</head>
<body>
	@include('website.layouts.topnav')
	<!--  -->
	@include('website.layouts.nav')
	
	<!--  -->
	<!-- start: Slider -->
	<div class="slider-wrapper">

		<div id="da-slider" class="da-slider">
			<div class="da-slide">
				<h2>Listen</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				<a href="#" class="da-link">Listen more</a>
				<div class="da-img"><img src="img/parallax-slider/twitter.png" alt="image01" /></div>
			</div>
			<div class="da-slide">
				<h2>Read</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				<a href="#" class="da-link">Read more</a>
				<div class="da-img"><img src="img/parallax-slider/responsive.png" alt="image02" /></div>
			</div>
			<div class="da-slide">
				<h2>Talk</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				<a href="#" class="da-link">Talk more</a>
				<div class="da-img"><img src="img/parallax-slider/html5.png" alt="image03" /></div>
			</div>
			<div class="da-slide">
				<h2>Write</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				<a href="#" class="da-link">Write more</a>
				<div class="da-img"><img src="img/parallax-slider/css3.png" alt="image04" /></div>
			</div>
			<nav class="da-arrows">
				<span class="da-arrows-prev"></span>
				<span class="da-arrows-next"></span>
			</nav>
		</div>

	</div>
	<!-- end: Slider -->


	<!--start: Wrapper-->
	<div id="wrapper">

		<!--start: Container -->
    	<div class="container">
		<br>
		<div class="newNewstable">
			<h3 class="text-center">最新消息</h3>
			<hr>
			<table class="table table-sm">
				<thead class="thead-default border border-success">
					<tr>
						<th style="width: 5%"></th>
						<th style="width: 10%">#</th>
						<th style="width: 10%">分類</th>		
						<th style="width: 50%" class="text-center">標題</th>
						<th style="width: 20%">發佈時間</th>
						<th style="width: 5%"></th>
					</tr>
				</thead>
				<tbody>
				
				@foreach($datas as $data)
				<tr>
					<td></td>
					<td>{{ $data->id }}</td>
					<td>{{ App\Newnewsarticle::find($data->id)->getClassName() }}</td>
					<td  class="text-center">{{ $data->title }}</td>
					<td> {{ $data->	createtime }}</td>
					<td></td>
				</tr>
				@endforeach

				</tbody>
			  </table>
			  <div class="row">
				  <div class="col text-right">
						<button type="button" class="btn btn-success">more</button>
				  </div>
			  </div>
		</div>

		<hr>



			<!-- start: Row -->
			<div class="row">
			<div class="col">
				<div class="card border-0">
				<div class="card-body">
					<div class="text-center">
					<img src="https://image.flaticon.com/icons/svg/235/235296.svg" width="150" alt="..." class="rounded">
					<br><br>
					<div class="title"><h3>課程大綱</h3></div>
					</div>
					<p class="card-text text-secondary text-center">With supporting text below as a natural lead-in to additional content.</p>
				</div>
				</div>
			</div>
			<div class="col">
				<div class="card border-0">
				<div class="card-body">
					<div class="text-center">
						<img src="https://image.flaticon.com/icons/svg/148/148990.svg" width="150" alt="..." class="rounded">
						<br><br>
						<div class="title"><h3>好文閱讀</h3></div>
					</div>
					<p class="card-text text-secondary text-center">With supporting text below as a natural lead-in to additional content.</p>
				</div>
				</div>
			</div>
				<div class="col">
					<div class="card border-0">
					<div class="card-body">
						<div class="text-center">
							<img src="https://image.flaticon.com/icons/svg/234/234694.svg" width="150" alt="..." class="rounded">
							<br><br>
							<div class="title"><h3>教學觀摩</h3></div>
						</div>
						<p class="card-text text-secondary text-center">With supporting text below as a natural lead-in to additional content.</p>
					</div>
					</div>
				</div>
			</div>
			<!-- end: Row -->

			<!--  -->
			<div class="row">

				<div class="col">
						<div class="card border-0">
						<div class="card-body">
							<div class="text-center">
								<img src="https://image.flaticon.com/icons/svg/201/201578.svg" width="150" alt="..." class="rounded">
								<br><br>
								<div class="title"><h3>影音之旅</h3></div>
							</div>
							<p class="card-text text-secondary text-center">With supporting text below as a natural lead-in to additional content.</p>
						</div>
						</div>
				</div>

				<div class="col">
					<div class="card border-0">
					<div class="card-body">
						<div class="text-center">
							<img src="https://image.flaticon.com/icons/svg/344/344422.svg" width="150" alt="..." class="rounded">
							<br><br>
							<div class="title"><h3>經典著作分享</h3></div>
						</div>
						<p class="card-text text-secondary text-center">With supporting text below as a natural lead-in to additional content.</p>
					</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-0">
					<div class="card-body">
						<div class="text-center">
							<img src="https://image.flaticon.com/icons/svg/201/201595.svg" width="150" alt="..." class="rounded">
							<br><br>
							<div class="title"><h3>學生成果展示</h3></div>
						</div>
						<p class="card-text text-secondary text-center">With supporting text below as a natural lead-in to additional content.</p>
					</div>
					</div>
				</div>

				</div>
				<!-- end: Row -->

			<hr>

		</div>
		<!--end: Container-->

	</div>
	<!-- end: Wrapper  -->

   @include('website.layouts.footer')




<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
@include('website.layouts.jsFileAsBody')
<!-- end: Java Script -->
</body>
</html>