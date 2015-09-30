
<?php get_header( 'interior' ); the_post();?>

<div class="portfolioItemContainer">

	<nav>
		<a href="<?php echo get_site_url(); ?>">
			<i class="fa fa-times-circle"></i>
		</a>

		<div class="interior-logo">
			<img src="<?php bloginfo('template_directory'); ?>/images/topher.png">
		</div>
	</nav>

	<div class="portfolio-shift">

	<div class="interiorHeaderContent">
		<img src="<?php the_field('hero_image'); ?>" class="img-responsive">
	</div>

	<div class="container-fluid itemOverview padding-bottom-md">
		<h1><?php echo get_the_title(); ?></h1>
		<div class="colorBar"></div>

		<p><?php the_field('project_overview'); ?></p>

		<div class="row">
			<div class="col-md-5 col-sm-12 col-xs-12 rollPlatform">
				<h2 class="greyColor">Detailed Roll</h2>
				<div class="colorBar"></div>
				<p><?php the_field('detailed_roles'); ?></p>
			</div>

			<div class="col-md-5 col-sm-12 col-xs-12 rollPlatform">
				<h2 class="greyColor">Platform</h2>
				<div class="colorBar"></div>
				<p><?php the_field('development_platforms'); ?></p>
			</div>
			
			<?php if ( get_field('project_url') !=  "" ) { ?>
			<div class="col-md-2 col-sm-12 col-xs-12 rollPlatform">
				<div class="linkButton">
					<a href="<?php the_field('project_url'); ?>" target="_blank">
						Visit Site
					</a>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>

<div class="container-fluid itemContent" style="background-color: <?php the_field('background_color'); ?> ">
	<div class="row">
		<div class="col-sm-6 col-xs-12 no-padding">
			<img src="<?php the_field('feature_image_one'); ?>" class="img-responsive" alt="<?php echo get_the_title(); ?>"/>
		</div>
		<div class="col-sm-6 col-xs-12 no-padding">
			<img src="<?php the_field('feature_image_two'); ?>" class="img-responsive" alt="<?php echo get_the_title(); ?>"/>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6 col-xs-12 no-padding">
			<img src="<?php the_field('feature_image_three'); ?>" class="img-responsive" alt="<?php echo get_the_title(); ?>"/>
		</div>
		<div class="col-sm-6 col-xs-12 no-padding">
			<img src="<?php the_field('feature_image_four'); ?>" class="img-responsive" alt="<?php echo get_the_title(); ?>"/>
		</div>
	</div>

<!-- 		<?php if ( have_rows('case_study_images') ):
				while ( have_rows('case_study_images') ) : the_row(); ?>

					<div class="col-sm-<?php the_sub_field('column_number'); ?> col-xs-12 caseImage">
						<img src="<?php the_sub_field('individual_image'); ?>" class="img-responsive" alt="<?php echo get_the_title(); ?>"/>
					</div>

			<?php endwhile; endif; ?> -->
</div>



<div class="container-fluid text-center">
	<div class="row">
		<div class="clientNavContainer">
			<!-- <div class="clientNav prevClient">
				<?php echo previous_post_link(); ?>
				<i class="fa fa-arrow-left"></i>
				
			</div> -->
			<div class="clientNav clientList">
				<a href="<?php echo get_site_url(); ?>">
					<i class="fa fa-eye"></i>
					<p>View All Projects</p>
				</a>
			</div>
	<!-- 		<div class="clientNav nextClient">
				<?php echo next_post_link(); ?>
				<i class="fa fa-arrow-right"></i>
			</div>		 -->		
		</div>
	</div>
</div>
</div>

<!-- <h1 class="viewMore">Check out my other work</h1>
<div class="redBar"></div>

<div class="container-fluid content">

	<?php
	$args = array (
			'order' => 'ASC',
			'orderby' => 'date',
			'nopaging' => true,
			'post_type' => 'project'
		);

	$posts = get_posts($args);
	foreach($posts as $projects)
	{
		?>

	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		<a href="<?php echo get_page_link($projects->ID) ?>">
			<div class="portfolioOverlay">
				<div class="overlayContent">
					<h2><?php echo get_the_title($projects->ID); ?></h2>
					<h5><?php the_field('project_roles', $projects->ID); ?></h5>
					<div class="overlayContentBar"></div>
					<p>View Project</p>
				</div>
			</div>
			<img src="<?php the_field('cover_image', $projects->ID); ?>" class="img-responsive" />
		</a>
	</div>
	
	<?php
	}
	?>
	

</div> -->
</div>

<?php get_footer(); ?>