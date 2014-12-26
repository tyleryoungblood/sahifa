<?php get_header(); ?>

	<?php
		if( tie_get_option( 'slider_pos' ) == 'big')
			get_template_part('includes/slider');// Get Slider template ?>

<div class="content">
	<?php 
		if( tie_get_option( 'slider_pos' ) != 'big')
			get_template_part('includes/slider'); // Get Slider template ?>

	<?php
	if( tie_get_option('on_home') != 'boxes' ){

		get_template_part( 'loop', 'index' );
		if ($wp_query->max_num_pages > 1) tie_pagenavi();

	}else{

		$cats = get_option( 'tie_home_cats' ) ;
		if($cats)
			foreach ($cats as $cat)	tie_get_home_cats($cat);
		else _e( 'You can use Homepage builder to build your homepage' , 'tie' );

		tie_home_tabs();
	}
	?>		
</div><!-- .content /-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>