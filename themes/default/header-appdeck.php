<!DOCTYPE html>
<html>
<head>
  
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no" />
  <?php if( is_single() ) : ?>
  	<?php $prev_post = get_previous_post(); ?>
	<?php $next_post = get_next_post(); ?>
	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'medium' ); ?>
	<meta name="appdeck-menu-entry" content="javascript:app.share('<?php echo get_the_title(); ?>', '<?php the_permalink(); ?>', '<?php echo $thumb[0]; ?>');" icon="!action" type="button" >
	<meta name="appdeck-next-page" content="<?php echo get_permalink($next_post->ID); ?>" />
	<meta name="appdeck-previous-page" content="<?php echo get_permalink($prev_post->ID); ?>" />
  <?php endif; ?>
  
  <link rel="stylesheet" href="http://code.jquery.com/mobile/latest/jquery.mobile.min.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
  
  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="http://code.jquery.com/mobile/latest/jquery.mobile.js"></script>  
  <script type="text/javascript">
    $.mobile.ajaxEnabled = false;
  </script>

  </head>
<body>