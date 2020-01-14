<main>
	<article>
		<section class="article-meta">
			<h1 class="page-title">
				<?php
				$categories = new Categories();
				$category_key = $url->slug();
				$category = new Category( $category_key );
				?>
				<?php echo $category->name(); ?>
			</h1>
				<?php if ( ! empty( $category->description() ) ): ?>
					<div class="page-description"><?php echo $category->description(); ?></div>
				<?php endif; ?>
		</section>
		<section class="article-list">
			<?php foreach ( $content as $page ): ?>
			<article class="list-article<?php if ( $page->custom( 'important' ) ) { echo ' important'; } ?>">
				<section class="article-name">
					<a href="<?php echo $page->permalink(); ?>"><?php echo $page->title(); ?></a>
					<?php if ( $page->description() ) : ?>
						<span><?php echo $page->description(); ?></span>
					<?php endif; ?>
				</section>
				<aside class="article-meta"><time datetime='<?php echo $page->date( 'Y-m-d H:i' ); ?>'><?php echo $page->date( 'F jS Y' ); ?></time></aside>
			</article>
			<?php endforeach; ?>
		</section>
	</article>
</main>