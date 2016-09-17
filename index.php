<?php get_header(); ?>

 <div class="row">
  <div class="span8">



   <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
   <h1><a href='<?php the_permalink() ?>'><?php the_title(); ?></a></h1>
   <p><?php
   if(is_home())
   {
		if ( has_post_thumbnail() ) {
			echo "<a href='".get_permalink()."'>";
			the_post_thumbnail( 'thumbnail');
			echo "</a>";
		}
		the_excerpt();
   }
   else
   {
		the_content();
   }
   ?></p>
   <hr> <?php endwhile; else: ?>
   <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
  </div>

 <?php get_sidebar(); ?>

 </div>
 <div id="delimiter"></div>

<?php get_footer(); ?>