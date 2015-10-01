<html>
  <head>
    
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
  	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
  	
    <title>
  		<?php
  		global $page, $paged;
  		wp_title( '|', true, 'right' );
  		bloginfo( 'name' );
  		$site_description = get_bloginfo( 'description', 'display' );
  		if ( $site_description && ( is_home() || is_front_page() ) )
  		echo " | $site_description";
  		?>
  	</title>
  	
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/style.css">
    
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.js"></script>
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/dojo.js"></script>
    
  </head>
<body>
  
<div class="main-container">

<div class="nav">
	<div class="safearea">
		<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"></a>
		<ul>
<!-- 			<li><a href="#resources">Resources</a></li> -->
			<li><a href="#register">Register</a></li>
      <li><a href="<?php echo home_url(); ?>/episodes">Previous Episodes</a></li>
      <li><a href="#programs">Our Programs</a></li>
      <li><a href="<?php echo home_url(); ?>/about-us">About us</a></li>
		</ul>
	</div>
</div>