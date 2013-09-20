<?php $bloginfo = get_bloginfo( $show, $filter ); ?> 
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta description="Personal Portofolio of Robby Prima">
	<title><?=$bloginfo;?> | Personal Portofolio</title>
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,700' rel='stylesheet' type='text/css'>
	<link href="http://fonts.googleapis.com/css?family=ABeeZee&subset=latin" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/css/font-awesome.css">
	<link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/css/animate.css">
	<link rel="stylesheet" href="<?=bloginfo('stylesheet_url');?>">
	
</head>
<body style="display: none;">
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
