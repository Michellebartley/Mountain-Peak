<?php

if ( is_page('our-story') ) :
    get_header('ourstory');
elseif ( is_page(124) ) :
    get_header('shop');    
else :
    get_header();
endif;
?>

<section class="page-wrap">
	<div class="container">

		<?php get_template_part( 'inc/section', 'archive' );?>
		<?php 
		
		global $wp_query;
		$big = 999999999; // need an unlikely integer
		echo paginate_links( array(
			'base'		=> str_replace($big, '%#%', esc_url( get_pagenum_link( $big))),
			'format'	=> '?paged=%#%',
			'current'	=> max( 1, get_query_var('page')),
			'total'		=> $wp_query->max_num_pages
		));
		?>

	</div>
</section>

<?php
get_sidebar();
get_footer();?>
