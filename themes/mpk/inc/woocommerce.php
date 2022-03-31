<?php
/**
 * functions which enhance the theme by utilizing Woocommerce
 *
 * @package Mountain_Peak
 */

function mpk_use_block_editor_for_post_type( $use_block_editor, $post_type ){
    if ( 'product' === $post_type ) {
        $use_block_editor = true;
    }
    return $use_block_editor;
}
add_filter('use_block_editor_for_post_type', 'mpk_use_block_editor_for_post_type', 10, 2 );