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
<body>
	<i class="loader"></i>
	<div class="stage">
	<header>
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-4 col-sm-4 col-xs-12">
					<div class="logo"><a href="/">ROBBYPRIMA.</a></div>
				</div>
				<div class="col-lg-3 col-md-8 col-sm-8 col-xs-12">
					<div class="row">
						<div class="nav">
							<ul class="nav-home text-right">
								<li class="mainmenu"><a href="#">About.</a></li>
								<li class="mainmenu"><a href="#">Works.</a></li>
								<li class="mainmenu"><a href="#">Contact.</a></li>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
