<article id="post-<?php the_ID(); ?>" <?php post_class('singular'); ?>>

	<header class="entry-header">

		<?php
			the_title( '<h1 class="entry-title">', '</h1>' );
		?>

	</header><!-- .entry-header -->

	<div class="entry-content" onClick="document.location.href='<?php echo get_permalink(); ?>';">
		<?php
			the_content();
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->