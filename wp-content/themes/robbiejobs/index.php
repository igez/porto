<?php get_header(); ?>
		<section class="welcome-hero" style="background: url('<?=bloginfo('template_url');?>/assets/img/wallpaper-1268899.jpg') no-repeat fixed; background-size: cover;">
			<div class="bg-yellow" style="background:#fff;width:100%;opacity:.4;position:absolute;top:0;"></div>
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
		<div class="project_stage" style="background:#222;">
			<div class="container">
				<div class="row" id="ajax_load_post">
				</div>
			</div>
		</div>
		<div class="projects">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="hero-title">Recent Projects</h1>
						<div class="hero-loading hide"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="project_grid">
			<div class="container">
				<div class="row">
				<?php $posts = get_posts(array('posts_per_page' => '99', 'category' => 'portofolio')); ?>
				<?php foreach ($posts as $post) : ?>
				<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'your_thumb_handle' ); ?>
					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 project_grid" style="padding-top:20px;">
						<a href="#" id="show_project" data-post="<?=$post->ID;?>">
							<img src="<?=$thumb[0];?>">
						</a>
					</div>
				<?php endforeach; ?>
				</div>
			</div>
		</div>
		<section class="welcome-hero" style="background: url('<?=bloginfo('template_url');?>/assets/img/wallpaper-1268899.jpg') no-repeat fixed; background-size: cover;">
			<div class="bg-yellow" style="background:#fff;width:100%;opacity:.4;position:absolute;top:0;"></div>
			<div class="container project-row">
				<div class="row">
					<div class="col-lg-12">
						<div class="front-big">
							<h1 class="text-center">CONTACT FORM SHOULD RIGHT OVER HERE!</h1>
						</div>
					</div>
				</div>
			</div>
		</section>
<?php get_footer(); ?>
