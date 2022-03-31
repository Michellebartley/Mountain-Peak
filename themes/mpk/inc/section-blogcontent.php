<?php

if( have_posts()): while( have_posts()): the_post();?>

    <section class="page-wrap">
        <div class="container">

        <p><?php echo get_the_date();?></p>

        <?php the_content();?>

        <?php 
        $fname = get_the_author_meta('first_name');
        $lname = get_the_author_meta('last_name');
        ?>

        </div>
    </section>

<?php endwhile; else: endif;?>