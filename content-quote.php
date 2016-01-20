<?php
/**
 * The template for displaying posts in the Quote post format
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( is_single() ) : ?>
		
		<div class="entry-content">
			<?php the_content( __( 'Continua Leyendo <span class="meta-nav">&rarr;</span>', 'thebox' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Páginas:', 'thebox' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		
	<?php else : ?>
	
		<div class="entry-summary">
			
			<?php the_content( __( 'Continua Leyendo <span class="meta-nav">&rarr;</span>', 'thebox' ) ); ?>
			
		</div><!-- .entry-summary -->
		
	<?php endif; ?>
		
</article><!-- #post-<?php the_ID(); ?> -->