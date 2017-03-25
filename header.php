<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/app.css">

		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<header class="header clear" role="banner">
	    <div class="bgColor"></div>
	    <div class="bgImage">
	      <div class="headerImage">
	        <div class="overlayLoader">
	          <svg class="circular" viewBox="25 25 50 50">
	            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
	          </svg>
	        </div>
	        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/soon.jpg" />
	      </div>
	    </div>
	    <div class="menu">
	      <div class="wrap vCenter">
	        <span class="col100 logo">4 Pixels</span>
	      </div>
	    </div>
	    <div class="wrap">
	      <div class="col100 headerContent">
	        <h3>Events</h3>
	        <h1>Coming soon</h1>
	        <h2><span class="date">We hebben op dit moment nog geen events op de planning staan</span> <!--<span class="city"></span> --></h2>
	        <!-- <div class="actions">
	          <a href="#">Koop tickets</a>
	          <a class="ghost" href="#">Meer informatie</a>
	        </div> -->
	      </div>
	    </div>

			<nav class="nav" role="navigation">
				<?php html5blank_nav(); ?>
			</nav>
	  </header>
		<!-- /header -->
