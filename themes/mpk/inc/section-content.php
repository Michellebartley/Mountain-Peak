<?php

if ( is_page('our-story') ) :
    get_header('ourstory');
elseif ( is_page('special-page') ) :
    get_header('special');    
else :
    get_header();
endif;
?>

<section class="page-wrap">
	<div class="coontainer">
        
		<?php get_template_part( 'inc/section', 'archive' );?>



	</div>
</section>

<?php
get_sidebar();
get_footer();