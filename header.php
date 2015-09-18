<!-- 
  _____ ___  ___ _  _ ___ ___ 
 |_   _/   \|   \ || | __|   \
   | ||     |  _/ __ | __|   /
   |_| \___/|_| |_||_|___|_|_\

  hello@topheryoungdesign.com   

 -->

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( ' | ', true, 'right' ); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

// <script src="<?php bloginfo('template_directory'); ?>/scripts/jquery.smoothState.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--[if lt IE 10]>
  <p class="browsehappy">Shame! Are you really using an <strong>outdated</strong> browser? Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<header>
	<div class="container-fluid">
		<div class="row">

			<div class="col-lg-3 col-md-5 col-sm-5 col-xs-12 text-center logo">
				<a href="<?php echo get_site_url(); ?>">
					<img src="<?php bloginfo('template_directory'); ?>/images/topher-logo-sketch.png" class="img-responsive">
				</a>


				<a href="#" class="toggle-nav">
					<div class="nav-trigger">
						<span class="trigger-top"></span>
						<span class="trigger-middle"></span>
						<span class="trigger-bottom"></span>
					</div>
				</a>
			</div>

			<div class="col-lg-9 col-md-7 col-sm-7 col-xs-12 navigation">
				<nav>
					<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
				</nav>
			</div>
		
		</div>

	</div>
</header>

<div id="main">