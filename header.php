<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
		<link href="https://intranet.teq.com/wp-content/themes/FoundationPress-master/assets/stylesheets/teq-foundation.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet" type="text/css">




		<link rel="stylesheet" id="wp-block-library-css" href="https://intranet.teq.com/wp-includes/css/dist/block-library/style.min.css?ver=1613163650" type="text/css" media="all">
		<link rel="stylesheet" id="main-stylesheet-css" href="https://intranet.teq.com/wp-content/themes/FoundationPress-master/assets/stylesheets/foundation.css?ver=1613163650" type="text/css" media="all">
		<link rel="https://api.w.org/" href="https://intranet.teq.com/wp-json/">
		<link rel="alternate" type="application/json+oembed" href="https://intranet.teq.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fintranet.teq.com%2Fsales%2F">
		<link href="https://intranet.teq.com/wp-content/themes/FoundationPress-master/assets/stylesheets/teq-foundation.css" rel="stylesheet" type="text/css">



<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-67374790-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-67374790-3');
</script>

	</head>
	<body <?php body_class(); ?>>

	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<?php do_action( 'foundationpress_after_header' );
