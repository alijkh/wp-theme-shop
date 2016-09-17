<html>
 <head>
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ermile.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
 </head>
<body>
 <div class="container">
  <header class="row">
   <h1><a href="<?php bloginfo('url'); ?>"><i class='fa fa-home'></i> <?php bloginfo('name'); ?></a></h1>
   <h2><?php bloginfo('description'); ?></h2>
<?php wp_nav_menu(['theme_location' => 'menu_header', 'depth' => '2',]); ?>
  </header>