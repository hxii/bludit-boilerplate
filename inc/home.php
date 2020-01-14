<main>
	<article>
		<?php $blog_posts = $pages->getList( 1, -1, true, false ); ?>
		<section class="article-meta">
			<h1 class="page-title">
				<?php echo $L->get( 'homepage' ); ?>
			</h1>
		</section>
		<section class="article-content">
			<section class="article-list">
				<?php foreach ( $blog_posts as $page ): ?>
					<?php $page = new Page( $page ); ?>
					<article class="list-article">
						<section class="article-name"><a href="<?php echo $page->permalink(); ?>"><?php echo $page->title(); ?></a>
							<?php if ( $page->description() ) : ?>
								<span><?php echo $page->description(); ?></span>
							<?php endif; ?>
						</section>
						<aside class="article-meta"><time><?php echo $page->date( "F jS Y" ); ?></time></aside>
					</article>
				<?php endforeach; ?>
			</section>
		</section>
	</article>
</main>
