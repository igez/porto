<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,700' rel='stylesheet' type='text/css'>
	<link href="http://fonts.googleapis.com/css?family=ABeeZee&subset=latin" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/css/font-awesome.css">
	<link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/css/animate.css">
	<link rel="stylesheet" href="<?=bloginfo('stylesheet_url');?>">
	
</head>
<body style="display: block;">
	<header>
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="logo">ROBBYPRIMA.</div>
				</div>
				<div class="col-lg-8">
					<div class="row">
						<div class="nav">
							<ul class="nav-home">
								<li class="mainmenu">
									<a href="#">Menu <i class="icon-angle-down"></i></a>
									<ul class="submenu">
										<li><a href="#">About.</a></li>
										<li><a href="#">What I Do.</a></li>
										<li><a href="#">Contact.</a></li>
									</ul>
								</li>
								<li class="mainmenu">
									<a href="#">Works <i class="icon-angle-down"></i></a>
									<?php wp_nav_menu( array('menu' => 'nav-works','menu_class'  => 'submenu')); ?>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
		
	<section class="welcome-hero">
		<div class="container project-row">
			<div class="row">
				<div class="col-lg-12">
					<div class="front-big">
						<?=get_post('23')->post_content;?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php 
		global $query_string;
		query_posts($query_string . '&orderby=modified');
	?>
	<?php if($wp_query->posts) : ?>
		<?php foreach($wp_query->posts as $post) : ?>
			<section data-stellar-background-ratio="0.2" data-stellar-offset-parent="true" data-stellar-vertical-offset="-180" data-target="<?=the_slug();?>" style="background: url(<?=bloginfo('template_url');?>/assets/img/<?=custom_field('project_bg', $post->ID);?>) no-repeat fixed; background-size: cover;" class="works">
				<div class="bg-1"></div>
				<div class="project-row" data-title="<?=the_slug();?>">
					<div class="portofolio-single pull-left">
						<div class="container">
							<div class="project-desc col-lg-4 transparent animated fadeInLeft" id="animate">
								<h2 class="project-name"><?=$post->post_title;?></h2>
								<?=custom_field('project_detail', $post->ID); ?>
								<div class="link-to-project">
									<a href="http://<?=custom_field('project_url', $post->ID); ?>" class="btn btn-new" target="_blank">View Site <i class="icon-long-arrow-right"></i></a>
									<a href="#" id="view-proj" data-section="<?=the_slug();?>" class="btn btn-new">View Project <i class="icon-long-arrow-right"></i></a>
								</div>
							</div>
							<div class="project-macbook col-lg-8 hide animated fadeInRight" id="animate">
								<img src="<?=bloginfo('template_url');?>/assets/img/<?=custom_field('project_mockup', $post->ID); ?> " alt="">
							</div>
						</div>
					</div>
					<div class="project-detail pull-left hide animated fadeInUp">
						<div class="container">
							<div class="row">
								<div class="col-lg-12">
									<h1 class="project-name text-center"><?=$post->post_title;?></h1>
									<p class="text-center"><?=custom_field('project_url', $post->ID); ?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-3 work-detail">
									<?=$post->post_content;?>
									<div class="row text-right" style="margin-top: 20px;">
										<div class="col-lg-12">
											<div class="link-to-project">
												<a href="#" id="back" data-section="<?=the_slug();?>" class="btn btn-new">Back</a>
												<a href="http://nootsjeans.com" target="_blank" class="btn btn-new">Visit Site</a>
											</div>
										</div>
									</div>
											
								</div>
								<div class="col-lg-9 text-center">
									<img src="<?=bloginfo('template_url');?>/assets/img/<?=custom_field('project_showcase', $post->ID); ?> " alt="<?=$post->title;?>">
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</section>
		<?php endforeach;?>
	<?php endif;?>
	<footer>
		<div class="container">
			<p>&copy 2013 RobbyPrima.com. All Rights Reserved.</p>
		</div>
	</footer>
	<script src="<?=bloginfo('template_url');?>/assets/js/jquery.min.js"></script>
	<script src="<?=bloginfo('template_url');?>/assets/js/stellar.min.js"></script>
	<script src="<?=bloginfo('template_url');?>/assets/js/jquery.scrollTo.js"></script>
	<script src="<?=bloginfo('template_url');?>/assets/js/jquery.viewport.min.js"></script>
	<script src="<?=bloginfo('template_url');?>/assets/js/jquery.transition.min.js"></script>
	<script src="<?=bloginfo('template_url');?>/assets/js/custom.js"></script>
	<script>

	</script>
</body>
</html>