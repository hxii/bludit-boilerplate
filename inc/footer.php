<footer>
	<hr>
	<div class="content">
	  <?php Theme::plugins( 'siteSidebar' ) ?>
	  <?php Theme::plugins( 'siteBodyEnd' ) ?>
	  <section class="social">
	  	<?php foreach ( Theme::socialNetworks() as $key=>$label ) : ?>
	  		<a href="<?php echo $site->{$key}(); ?>"><?php echo $label; ?></a> /
	  	<?php endforeach; ?>
		<a href="https://paulglushak.com/bludit-boilerplate" target="_blank">BLBP</a>
		<span class="loading-time"> / <?php echo round( ( microtime( true ) - $loadtime )*1000, 4 ) . 'ms'; ?></span>
	  </section>
	  <section class="copyright"><?php echo $site->footer(); ?></section>
    </div>
</footer>
