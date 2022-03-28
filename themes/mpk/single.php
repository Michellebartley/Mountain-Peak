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
	<div class="container">
		<h3><?php the_title();?></h3>
		<?php get_template_part( 'inc/section', 'blogcontent' );?>
	</div>
</section>

<?php
get_sidebar();
get_footer();