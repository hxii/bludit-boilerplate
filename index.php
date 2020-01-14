<!DOCTYPE html>
<html lang="en">
	<head>
		<?php $loadtime = microtime(true); ?>
		<!--
			######################################################
			Bludit Boilerplate. No Bullshit. Build YOUR OWN theme.
			by Paul (hxii) Glushak
			######################################################
			https://paulglushak.com/bludit-boilerplate/
			######################################################
		-->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="icon" href="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=">
		<?php echo Theme::metaTags( 'title' ); ?>
		<?php echo Theme::metaTags( 'description' ); ?>
		<?php echo Theme::css( 'css/style.min.css' ); ?>
		<?php Theme::plugins( 'siteHead' ) ?>
	</head>
	<body>
		<div class="container<?php echo ' template-'.$page->template(); ?>">
			<?php Theme::plugins( 'siteBodyBegin' ) ?>
			<?php include( 'inc/header.php' ); ?>
			<?php if ( $WHERE_AM_I === 'page' ) {
				if ( ! empty( $page->template() ) && file_exists( PATH_THEMES.$site->theme().'/inc/'.$page->template().'.php' ) ) {
					include( "inc/{$page->template()}.php" );
				} else {
					include( 'inc/page.php' );
				}
			} elseif ( $WHERE_AM_I === 'category' ) {
				include( 'inc/category.php' );
			} elseif ( $WHERE_AM_I === 'tag' ) {
				include ( 'inc/tag.php' );
			} else {
				include( 'inc/home.php' );
			} ?>
			<?php include( 'inc/footer.php' ); ?>
		</div>
	</body>
</html>
