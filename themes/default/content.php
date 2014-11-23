<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">

		<?php
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		?>

	</header><!-- .entry-header -->

	<div class="entry-content" onClick="document.location.href='<?php echo get_permalink(); ?>';">
		<?php
			$content = preg_replace(

				/** Strip links **/ 
				'/<\/?a[^>]*>/i', '', 
				get_the_content()
			);
			if( has_post_thumbnail() ) {

				the_post_thumbnail( array( 150, 150 ) );

			} else {

				/** Get first image in content **/
				preg_match(
					'/<\/?img[^>]*>/i',
					$content, $matches
				);
				if( isset( $matches[0] ) )
					echo $matches[0];
			}
			
			echo preg_replace(
			
				/** Strip images **/
				'/<\/?img[^>]*>/i', '',
				$content
			);
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->