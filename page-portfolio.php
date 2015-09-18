<?php

	/*

	Template Name: Portfolio
	
	*/

?>

<?php get_header(); ?>


<div class="container-fluid content" id="portfolioContent">

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

	<div class="row client fadeInUp" style="background-color:<?php the_field('background_color', $projects->ID); ?>">
			<div class="col-sm-4 col-sm-offset-1">
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
			<div class="col-sm-6">
				<img src="<?php the_field('cover_image', $projects->ID); ?>" class="img-responsive" />
			</div>
		</div>
	
	<?php
	}
	?>
	

</div>


<?php get_footer(); ?>