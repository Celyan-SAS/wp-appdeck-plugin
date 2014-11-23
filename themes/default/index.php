<?php get_template_part( 'header', 'appdeck' ); ?>

<div id="primary" class="content-area" data-role="page" data-theme="a">
  <div id="content" class="site-content" role="main" data-role="content" data-theme="a">
  <?php
	  if ( have_posts() ) :
		  // Start the Loop.
		  while ( have_posts() ) : the_post();
		  
	  		if( is_singular() )	{
		  		get_template_part( 'content', 'singular' );
	  		} else {
				get_template_part( 'content', 'list' );
			}
		  
		  endwhile;
	  
	  else :
		  // If no content, include the "No posts found" template.
		  get_template_part( 'content', 'none' );
	  
	  endif;
  ?>
  </div><!-- /content -->
</div><!-- /page -->

<?php get_template_part( 'footer', 'appdeck' ); ?>