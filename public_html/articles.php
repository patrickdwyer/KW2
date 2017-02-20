<?php include '_includes/header.php';?>

	<header class="header page-title" style="background-image: url(/img/bg-articles.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<p class="eyebrow">Us </p>
					<h1 class="title">Articles</h1>
					<p class="description">Lorem ipsum dolor sit amet,   <a href="#" class="">consectetur </a>  adipiscing elit. Aenean euismod.</p>
				</div>
			</div>
		</div>
	</header>

	<section class="bg-secondary featured-article" style="background-image: url(/img/bg-downtown-madison-wi-arts-entertainment-and-politics-1.jpg);">
		<div class="container content-container">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-2">
					<p class="subtitle">Featured Article</p>
					<h2 class="title"><a href="#">Headline to a paradigm-shifting article we wrote…are you prepared?</a></h2>
					<a href="#" class="btn btn-default btn-white btn-outline btn-lg">Read More</a>
					<p class="desc">Let’s tease you a little bit. You like this teaser? Is it engaging? Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam bibendum nibh id fermentum consectetur. Morbi ac porta odio. In vehicula aliquet nibh.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-base">
		<div class="container content-container">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-2">
					<!--start content-->
					<ul class="list-inline text-center">
						<li ><a href="#" class="btn btn-primary btn-noborder active">All</a></li>
						<li><a href="#" class="btn btn-primary btn-noborder">Integrated Marketing</a></li>
						<li><a href="#" class="btn btn-primary btn-noborder">Digital</a></li>
						<li><a href="#" class="btn btn-primary btn-noborder">Public Sector</a></li>
					</ul>

					<?php include '_includes/articles-list.php';?>

					<div class="text-center">
						<a href="#" class="btn btn-primary btn-lg">Load More</a>
					</div>
					<!--end content-->
				</div>
			</div>
		</div>
	</section>

<?php include '_includes/footer.php';?>
