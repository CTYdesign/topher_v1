<?php

	/*

	Template Name: Case Study
	
	*/

?>

<?php get_header(); the_post();?>

<div class="interiorHeaderContent">
		<img src="<?php echo get_post_meta($post->ID, 'headerImage', true); ?>" class="img-responsive">
	</div>

<div class="container-fluid itemOverview">
	<h1><?php echo get_the_title(); ?></h1>
	<div class="redBar"></div>

	<div class="overviewText">
		<p><?php echo get_post_meta($post->ID, 'overview', true); ?></p>

		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 rollPlatform">
			<h2 class="greyColor">Roll</h2>
			<div class="redBar"></div>
			<p><?php echo get_post_meta($post->ID, 'detailRoles', true); ?></p>
		</div>

		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 rollPlatform">
			<h2 class="greyColor">Platform</h2>
			<div class="redBar"></div>
			<p><?php echo get_post_meta($post->ID, 'platform', true); ?></p>
		</div>

	</div>
</div>

<div class="container-fluid itemContent">
	<p>
		<?php the_content(); ?>
	</p>
</div>


<h1 class="viewMore">Check out my other work</h1>
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

</div>

<?php get_footer(); ?>