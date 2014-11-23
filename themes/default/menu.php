<?php get_template_part( 'header', 'appdeck' ); ?>

<div data-role="page">
  <div data-role="content">
  <?php wp_nav_menu( array( 
	'theme_location'  => 'appdeck_top',
	'items_wrap'      => '<ul data-role="listview" data-inset="true" id="%1$s" class="%2$s">%3$s</ul>'
  ) ); ?>
  </div><!-- /content -->
</div><!-- /page -->

<?php get_template_part( 'footer', 'appdeck' ); ?>