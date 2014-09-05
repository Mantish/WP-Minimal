<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<title><?php bloginfo('name'); ?><?php wp_title(' | '); ?></title>

	<meta name="description" content="<?php bloginfo('description'); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/styles.css">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!--[if lt IE 9]><script src="<?php bloginfo('template_directory'); ?>/js/html5shiv.js" media="all"></script><![endif]-->

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<header role="banner">
		<h1><a href="<?php echo home_url(); ?>/" rel="home"><?php bloginfo('name');?></a></h1>

		<nav role="navigation">
			<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
		</nav>
	</header>

	<!-- If you want to use an element as a wrapper, i.e. for styling only, then <div> is still the element to use -->
	<div class="wrap">
