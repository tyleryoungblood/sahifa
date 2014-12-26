<p class="post-meta">
<?php if( tie_get_option( 'box_meta_score' ) ) tie_get_score(); ?>
<?php if( tie_get_option( 'box_meta_author' ) ): ?>		
	<span><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) )?>" title="<?php sprintf( esc_attr__( 'View all posts by %s', 'tie' ), get_the_author() ) ?>"><?php echo get_the_author() ?> </a></span>
<?php endif; ?>	
<?php if( tie_get_option( 'box_meta_date' ) ): ?>		
	<?php tie_get_time() ?>
<?php endif; ?>	
<?php if( tie_get_option( 'box_meta_cats' ) ): ?>
	<span><?php printf('%1$s', get_the_category_list( ', ' ) ); ?></span>
<?php endif; ?>	
<?php if( tie_get_option( 'box_meta_comments' ) ): ?>
	<span><?php comments_popup_link( __( 'Leave a comment', 'tie' ), __( '1 Comment', 'tie' ), __( '% Comments', 'tie' ) ); ?></span>
<?php endif; ?>
</p>
