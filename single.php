
<?php get_header(); the_post();?>

<div class="portfolioItemContainer">

	<div class="interiorHeaderContent">
		<img src="<?php the_field('hero_image'); ?>" class="img-responsive">
	</div>

	<div class="container-fluid itemOverview">
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

			<div class="col-md-2 col-sm-12 col-xs-12 rollPlatform">
				<div class="linkButton">
					<a href="<?php the_field('project_url'); ?>" target="_blank">
						Visit Site
					</a>
				</div>
			</div>
		</div>
	</div>

<div class="container-fluid itemContent">

	<h1 style="text-align: center; font-size: 50px;">The Results</h1>
	<div class="redBar" style="margin-bottom: 55px;"></div>
	
		<?php if ( have_rows('case_study_images') ):
				while ( have_rows('case_study_images') ) : the_row(); ?>

					<div class="col-sm-<?php the_sub_field('column_number'); ?> col-xs-12 caseImage">
						<img src="<?php the_sub_field('individual_image'); ?>" class="img-responsive" alt="<?php echo get_the_title(); ?>"/>
					</div>

			<?php endwhile; endif; ?>
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
</div>

<?php get_footer(); ?>