<!--
 __    __  ______  __  __  ______       ______  ______  __      __  ______  ______  
/\ "-./  \/\  __ \/\ \/ / /\  ___\     /\  == \/\  ___\/\ \    /\ \/\  ___\/\  ___\ 
\ \ \-./\ \ \  __ \ \  _"-\ \  __\     \ \  __<\ \  __\\ \ \___\ \ \ \  __\\ \  __\ 
 \ \_\ \ \_\ \_\ \_\ \_\ \_\ \_____\    \ \_____\ \_____\ \_____\ \_\ \_____\ \_\   
  \/_/  \/_/\/_/\/_/\/_/\/_/\/_____/     \/_____/\/_____/\/_____/\/_/\/_____/\/_/             
-->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title><?php wp_title(' | ', true, 'right'); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    
    <?php wp_head(); ?>

  </head>

<body <?php body_class(); ?>>
<?php get_template_part( 'templates/modules/topbar' ); ?>

<div id="wrap" class="page-wrap">
	<?php get_template_part( 'templates/modules/header' ); ?>