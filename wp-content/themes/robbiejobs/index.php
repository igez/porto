<?php get_header(); ?>
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
		<article class="about" style="background:#ddd;">
			<div class="container">
				<div class="row">
					<div class="contact-page col-lg-12">
						<h1 class="article-title">About</h1>
						<p class="title-separator">/</p>
						<p class="about-img">
							<img src="<?=bloginfo('template_url');?>/assets/img/gez.jpg" alt="..." class="img-circle" height="140" width="140" style="width: auto;">
						</p>
						<h2>Robby Prima</h2>
						<p>Front-End Web Developer & UX Designer</p>
						<p>Bandung, Indonesia</p>
					</div>
				</div>
			</div>
				
		</article>
		<article>
			<div class="container">
				<div class="row">
					<div class="contact-page col-lg-12">
						<h1>Services</h1>
						<p class="title-separator">/</p>
						<p>My vision is simple. I want to create websites and applications with both high quality design and easy-to-access content.</p><p>The finished product will be totally unique and represent awesomeness.</p>
						<div class="row service-list" style="padding: 20px 0">
							<div class="col-lg-4">
								<i class="icon-code icon-4x"></i>
								<h4>Reusable Code</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit ducimus consectetur voluptates aperiam amet ullam nobis labore voluptas iste assumenda illum quibusdam magni modi dolores molestiae animi fugiat voluptatum iusto.</p>
							</div>
							<div class="col-lg-4">
								<i class="icon-cogs icon-4x"></i>
								<h4>Modular Components</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam omnis ipsam non natus dolorum officiis veritatis inventore porro id quae iusto a. Voluptatem quia ducimus quisquam perferendis in autem sint!</p>
							</div>
							<div class="col-lg-4">
								<i class="icon-camera-retro icon-4x"></i>
								<h4>UI & UX</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam omnis ipsam non natus dolorum officiis veritatis inventore porro id quae iusto a. Voluptatem quia ducimus quisquam perferendis in autem sint!</p>
							</div>
						</div>
						<div class="row service-list" style="padding: 20px 0">
							<div class="col-lg-4">
								<i class="icon-code icon-4x"></i>
								<h4>Reusable Code</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit ducimus consectetur voluptates aperiam amet ullam nobis labore voluptas iste assumenda illum quibusdam magni modi dolores molestiae animi fugiat voluptatum iusto.</p>
							</div>
							<div class="col-lg-4">
								<i class="icon-cogs icon-4x"></i>
								<h4>Modular Components</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam omnis ipsam non natus dolorum officiis veritatis inventore porro id quae iusto a. Voluptatem quia ducimus quisquam perferendis in autem sint!</p>
							</div>
							<div class="col-lg-4">
								<i class="icon-camera-retro icon-4x"></i>
								<h4>UI & UX</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam omnis ipsam non natus dolorum officiis veritatis inventore porro id quae iusto a. Voluptatem quia ducimus quisquam perferendis in autem sint!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</article>
		<?php 
			global $query_string;
			query_posts($query_string . '&orderby=modified');
		?>
		<?php query_posts('cat=2'); ?>
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
	<article style="background: #fff;">
		<div class="contact-page">
			<h1>Contact Me</h1>
			<p>/</p>
		</div>
	</article>
<?php get_footer(); ?>
