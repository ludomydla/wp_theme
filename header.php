<?php 
  $name = get_bloginfo('name');
  $desc = get_bloginfo('description');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,400i,700&amp;subset=latin-ext">
  <link href="https://fonts.googleapis.com/css?family=Oswald:400,700&amp;subset=latin-ext" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
  <title><?php echo $name.' - '.$desc; ?></title>
</head>
<body>
<header>
  <h1 class="blog-title"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
	<p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
</header>