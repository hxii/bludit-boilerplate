<main>
	<article>
		<section class="article-meta">
			<?php if ( $page->coverImage() ): ?>
				<figure class="cover-image"><img alt="Cover Image" src="<?php echo $page->coverImage(); ?>"/></figure>
			<?php endif ?>
			<h1 class="page-title">
				<?php echo $page->title(); ?>
			</h1>
			<?php if ( ! empty( $page->description() ) ): ?>
				<div class="page-description"><?php echo $page->description(); ?></div>
			<?php endif; ?>
			<?php if ( ! $page->isStatic() && ! $url->notFound() ): ?>
				<aside class="article-meta"><?php echo $page->readingTime(); ?> read, posted <time datetime='<?php echo $page->date( 'Y-m-d H:i' ); ?>'><?php echo $page->date( 'D F jS Y' ); ?></time> in <a href="<?php echo $page->categoryPermalink(); ?>"><?php echo $page->categoryKey(); ?></a></aside>
			<?php endif; ?>
		</section>
		<section class="article-content">
			<?php echo $page->content(); ?>
		</section>
		<?php if ( $page->hasChildren() ): ?>
			<section class="article-children">
				<h3>More about <?php echo $page->title(); ?></h3>
				<ol class="children">
					<?php $children = $page->children();
					foreach ( $children as $child ): ?>
					<li><a href="<?php echo $child->permalink(); ?>"><?php echo $child->title(); ?></a></li>
					<?php endforeach; ?>
				</ol>
			</section>
		<?php endif; ?>
		<?php if ( $page->tags( true ) ): ?>
			<section class="article-tags">
				<h3>Tags</h3>
				<ul class="tags">
					<?php foreach( $page->tags( true ) as $tagKey=>$tagName ) :?>
						<li><a href="<?php echo DOMAIN_TAGS.$tagKey ?>" rel="tag"><?php echo $tagName ?></a></li>
					<?php endforeach; ?>
				</ul>
			</section>
		<?php endif; ?>
	</article>
</main>
