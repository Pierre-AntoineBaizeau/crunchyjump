<?php
/*
  Template Name: recrutement
  
*/
	get_header();
	if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  
		<article class="post">
      
        	<?php the_post_thumbnail(); ?>
            
            
            <?php the_content(); ?>
 
		</article>
	<?php endwhile; endif;
	get_footer();
?>