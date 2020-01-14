<header>
	<div class="content">
		<div class="logo">
			<h2><a href="<?php echo Theme::siteUrl() ?>"><?php echo $site->title(); ?></a></h2>
			<div class="slogan"><?php echo $site->slogan(); ?></div>
		</div>
		<nav class="main-navigation">
			<ul class="nav">
				<?php $categories = getCategories();
					foreach ( $categories as $category ) {
						if ( count( $category->pages() ) ) {
							echo "<li><a href='{$category->permalink()}'>{$category->name()}</a></li>";
						}
					}
				?>
				<?php foreach ( $staticContent as $staticPage ) {
					if ( isset( $staticPage->tags( true )['menu'] ) ) {
						echo "<li><a href='{$staticPage->permalink()}' title=''>{$staticPage->title()}</a></li>";
					}
				} ?>
			</ul>
		</nav>
		<hr>
	</div>
</header>
