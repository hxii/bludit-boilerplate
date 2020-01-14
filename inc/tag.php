<main>
	<article>
		<section class="article-meta">
			<h1 class="page-title">
				<?php echo $url->slug(); ?>
			</h1>
		</section>
		<section class="article-list">
			<?php
			$tagKey = $url->slug();
			$tag = new Tag( $tagKey );
			?>
			<?php foreach ( $tag->pages() as $page_key ): ?>
			<?php $page = new Page( $page_key ); ?>
			<article class="list-article<?php if ( $page->custom( 'important' ) ) { echo ' important'; } ?>">
				<section class="article-name">
					<a href="<?php echo $page->permalink(); ?>"><?php echo $page->title(); ?></a>
					<?php if ( $page->description() ) : ?>
						<span><?php echo $page->description(); ?></span>
					<?php endif; ?>
				</section>
				<aside class="article-meta"><time datetime='<?php echo $page->date( 'Y-m-d H:i' ); ?>'><?php echo $page->date( 'F jS Y' ); ?></time> in <?php echo $page->categoryKey(); ?></aside>
			</article>
			<?php endforeach; ?>
		</section>
	</article>
</main>