<?php
/*Template Name: Homepage*/
get_header();
?>
<div class="main">
	<header>
		<nav id="navbar_top" class="navbar navbar-expand-lg navbar-light">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="<?php echo get_template_directory_uri() ?>/images/logo.png" /></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="main_nav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="#"> Menu item1 </a></li>
						<li class="nav-item"><a class="nav-link" href="#"> Menu item2 </a></li>
						<li class="nav-item"><a class="nav-link" href="#"> Menu item3 </a></li>
						<li class="nav-item"><button class="btn btn-primary">Book now</button></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<div class="carousel" id="carousel">
		<div class="slider-item">
			<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/images/52.jpg" />
		</div>
		<div class="slider-item">
			<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/images/jumera.jpg" />
		</div>
		<div class="slider-item">
			<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/images/52.jpg" />
		</div>
	</div>
</div>
<div style="height:600px">

<?php
get_footer();
?>
</div>

