<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no" />
  <link rel="stylesheet" href="http://code.jquery.com/mobile/latest/jquery.mobile.min.css" />
  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="http://code.jquery.com/mobile/latest/jquery.mobile.js"></script>  
  <script type="text/javascript">
    $.mobile.ajaxEnabled = false;
  </script>
</head>
<body>

<div id="primary" class="content-area" data-role="page" data-theme="a">
  <div id="content" class="site-content" role="main" data-role="content" data-theme="a">
  <?php
	  // Start the Loop.
	  while ( have_posts() ) : the_post();
	  
	  get_template_part( 'content', get_post_format() );
	  
	  endwhile;
  ?>
  </div><!-- /content -->
</div><!-- /page -->

</body>
</html>