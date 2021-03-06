<?php

	/*

	Template Name: Portfolio Two Column
	
	*/

?>

<?php get_header(); ?>


<div class="container content portfolio-container" id="portfolioContent">
	

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
	


			<!-- <div class="col-md-4 col-md-offset-1 col-sm-6 col-xs-12">
				<div class="clientContainer">
					<div class="clientInformation">
						<h1><?php echo get_the_title($projects->ID); ?></h1>
						<p><?php the_field('project_roles', $projects->ID); ?></p>
						<p class="platformIcons"><?php
							$platform = get_field('platforms', $projects->ID);
							if ( $platform != false ) {
								if ( in_array('tv', $platform) ) {
									echo '<i class="fa fa-television"></i>';
								}
								if ( in_array('desktop', $platform) ) {
									echo '<i class="fa fa-laptop"></i>';
								}
								if ( in_array('tablet', $platform) ) {
									echo '<i class="fa fa-tablet"></i>';
								}
								if ( in_array('mobile', $platform) ) {
									echo '<i class="fa fa-mobile"></i>';
								}
							}

							?>

							
						</p>



						<div class="clientButton">
							<a href="<?php echo get_page_link($projects->ID) ?>">
								View Project
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<img src="<?php the_field('cover_image', $projects->ID); ?>" class="img-responsive" />
			</div>
		</div> -->
	
	<?php
	}
	?>
	
</div>

<div class="container content">
	<div class="about-me">
		<img src="<?php the_field('bio_image'); ?>" alt="Yo!" class="img-responsive">

		<div class="row">
			

		<div class="col-sm-3 col-xs-12 text-center">
			<a href="<?php the_field('resume'); ?>">Resume</a>
			<a href="mailto:<?php the_field('email'); ?>">Email</a>
		</div>

		<div class="col-sm-9 col-xs-12">
			<h2>About me</h2>
			<div class="divider-bar margin-left-none"></div>
			<p><?php the_field('bio'); ?></p>
		</div>
	</div>

		</div>

</div>

<div class="container content thanks text-center">
	<div class="row">
		<img src="<?php bloginfo('template_directory'); ?>/images/dino.png" alt="#Rexlife">
		<p>Thank you for viewing</p>
	</div>

</div>


<?php get_footer(); ?>