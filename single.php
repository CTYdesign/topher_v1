
<?php get_header( 'interior' ); the_post();?>

<div class="portfolioItemContainer">

	<nav>
		<a href="<?php echo get_site_url(); ?>">
			<i class="fa fa-times"></i>
		</a>

		<div class="interior-logo">
			<img src="<?php bloginfo('template_directory'); ?>/images/chris-topher-young-white.png">
		</div>
	</nav>

	<div class="portfolio-shift">

		<div class="clientHero text-center" id="clientHero" style="background-color: <?php the_field('background_color'); ?> ">
			<div class="overlayContainer">
	            <div class="overlayContent">
					<img src="<?php the_field('hero_image'); ?>" alt="<?php echo get_the_title(); ?>" class="img-responsive">
					<img src="<?php bloginfo('template_directory'); ?>/images/down-arrow.png" alt="Let's Do this" class="down-arrow">
				</div>
			</div>
		</div>


		<div class="interiorHeaderContent">
			<img src="<?php the_field('mock_up'); ?>" class="img-responsive">
		</div>


	<div class="container-fluid itemOverview padding-top-md padding-bottom-md text-center">

		<h2><?php echo get_the_title(); ?></h2>
		<div class="divider-bar"></div>

		<p><?php the_field('project_overview'); ?></p>

		<div class="row padding-top-md">
			<div class="col-md-6 col-sm-12 col-xs-12 rollPlatform">
				<h2 class="greyColor">Detailed Roll</h2>
				<div class="divider-bar"></div>
				<p><?php the_field('detailed_roles'); ?></p>
			</div>

			<div class="col-md-6 col-sm-12 col-xs-12 rollPlatform">
				<h2 class="greyColor">Platform</h2>
				<div class="divider-bar"></div>
				<p><?php the_field('development_platforms'); ?></p>
			</div>
		</div>

	</div>

	<div class="container-fluid itemContent">
		<div class="caseImageContainer">
	
		<?php if ( have_rows('case_study_images') ):
				while ( have_rows('case_study_images') ) : the_row(); ?>

				<div class="col-sm-<?php the_sub_field('column_number'); ?> col-xs-12 caseImage">
					<img src="<?php the_sub_field('individual_image'); ?>" class="img-responsive" alt="<?php echo get_the_title(); ?>"/>
				</div>


		<?php endwhile; endif; ?>
		</div>

		<?php if ( get_field('project_url') !=  "" ) { ?>
			<div class="col-sm-2 col-sm-offset-5 col-xs-12 rollPlatform margin-top-lg">
				<div class="linkButton">
					<a href="<?php the_field('project_url'); ?>" target="_blank">
						Visit Site
					</a>
				</div>
			</div>
		<?php } ?>

	</div>



	<div class="container-fluid text-center">
		<div class="row">
			<div class="clientNavContainer">
				<div class="clientNav clientList">
					<a href="<?php echo get_site_url(); ?>">
						<i class="fa fa-eye"></i>
						<p>View All Projects</p>
					</a>
				</div>		
			</div>
		</div>
	</div>


<!--  <div class="project-list-container">
	<div class="container content project-list text-center">

		<h2 class="font-mid-grey">View more of my work</h2>
		<div class="divider-bar margin-bottom-lg"></div>

		<?php
		$args = array (
				'order' => 'ASC',
				'meta_key' => 'client_order',
				'orderby' => 'meta_value_num',
				'nopaging' => true,
				'post_type' => 'project'
			);

		$posts = get_posts($args);
		foreach($posts as $projects)
		{
			?>

			
				<div class="col-sm-6 col-xs-12 client-cover">
					<a href="<?php echo get_page_link($projects->ID) ?>">

						<div style="background-color:<?php the_field('background_color', $projects->ID); ?>">
							<img src="<?php the_field('cover_image', $projects->ID); ?>" class="img-responsive" />

							<?php if ( get_field('client_order', $projects->ID) % 2 == 1 ) { ?>

							<div class="client-information-left">
								<h1><?php echo get_the_title($projects->ID); ?></h1>
								<div class="line-break"></div>
								<p><?php the_field('project_roles', $projects->ID); ?></p>

							</div>	

							<?php } else { ?>

							<div class="client-information-right">
								<h1><?php echo get_the_title($projects->ID); ?></h1>
								<div class="line-break"></div>
								<p><?php the_field('project_roles', $projects->ID); ?></p>

							</div>	
							<?php } ?>


						</div>
					</a>
				</div>
		
		<?php
		}
		?>
	</div>
</div>  -->

</div>
</div>

<?php get_footer( 'interior'); ?>