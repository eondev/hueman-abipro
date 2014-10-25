<!DOCTYPE html> 
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php wp_title(''); ?></title>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	
	<?php wp_head(); ?>

	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/slideshow/js/modernizr.custom.86080.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slideshow/css/style4.css" />

	<!--[if lt IE 10 ]> <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/ie.css" /> <![endif]-->
    <!--[if lt IE 8 ]>
	    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/ie_old.css" /> 
	    <script type="text/javascript"> 
	    	location = '<?php print dirname($_SERVER['PHP_SELF']) ?>/simple'; 
	    </script> 
    <![endif]-->
    
	<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
</head>

<body <?php body_class(); ?>>

	<ul class="cb-slideshow">
	    <li><span>01</span><div><h3>bartending</h3></div></li>
	    <li><span>02</span><div><h3>mixology</h3></div></li>
	    <li><span>03</span><div><h3>professionalità</h3></div></li>
	    <li><span>04</span><div><h3>esperienza</h3></div></li>
	    <li><span>05</span><div><h3>tradizione</h3></div></li>
	    <li><span>06</span><div><h3>innovazione</h3></div></li>
	</ul>
    
	<div id="wrapper">

		<header id="header">
		
			<?php if ( has_nav_menu('topbar') ): ?>
				<nav class="nav-container group" id="nav-topbar">
					<div class="nav-toggle"><i class="fa fa-bars"></i></div>
					<div class="nav-text"><!-- put your mobile menu text here --></div>
					<div class="nav-wrap container"><?php wp_nav_menu(array('theme_location'=>'topbar','menu_class'=>'nav container-inner group','container'=>'','menu_id' => '','fallback_cb'=> false)); ?></div>
					
					<div class="container">
						<div class="container-inner">		
							<div class="toggle-search"><i class="fa fa-search"></i></div>
							<div class="search-expand">
								<div class="search-expand-inner">
									<?php get_search_form(); ?>
								</div>
							</div>
						</div><!--/.container-inner-->
					</div><!--/.container-->
					
				</nav><!--/#nav-topbar-->
			<?php endif; ?>
			
			<div class="container group">
				<div class="container-inner">
					
					<?php if ( ot_get_option('header-image') == '' ): ?>
					<div class="group pad">
						<?php echo alx_site_title(); ?>
						<?php if ( ot_get_option('site-description') != 'off' ): ?><p class="site-description"><?php bloginfo( 'description' ); ?></p><?php endif; ?>
					</div>
					<?php endif; ?>
					<?php if ( ot_get_option('header-image') ): ?>
						<a href="<?php echo home_url('/'); ?>" rel="home">
							<img class="site-image" src="<?php echo ot_get_option('header-image'); ?>" alt="<?php get_bloginfo('name'); ?>">
						</a>
					<?php endif; ?>
					
					<?php if ( has_nav_menu('header') ): ?>
						<nav class="nav-container group" id="nav-header">
							<div class="nav-toggle"><i class="fa fa-bars"></i></div>
							<div class="nav-text"><!-- put your mobile menu text here --></div>
							<div class="nav-wrap container"><?php wp_nav_menu(array('theme_location'=>'header','menu_class'=>'nav container-inner group','container'=>'','menu_id' => '','fallback_cb'=> false)); ?></div>
						</nav><!--/#nav-header-->
					<?php endif; ?>
					
				</div><!--/.container-inner-->
			</div><!--/.container-->
			
		</header><!--/#header-->
		
		<div class="container" id="page">
			<div class="container-inner">			
				<div class="main">
					<div class="main-inner group">