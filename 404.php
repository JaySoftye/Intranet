<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="header-bar">
  <video style="width:100%;height:auto;" loop autoplay>
    <source src="<?php echo get_template_directory_uri(); ?>/images/page-not-found-error.mp4" type="video/mp4">
  </video>
  <div style="position:absolute;z-index:100;top:15%;right:0;left:0;text-align:center;color:#ffffff;">
    <h1 style="padding-top:5%;color:#ffffff;"><strong>404 Error</strong></h1>
    <h4 style="padding:2% 10%;color:#ffffff;">This page cannot be found.<br />But don't worry, we've got our best people on it...</h4>
  </div>
</div>
</body>
</html>
