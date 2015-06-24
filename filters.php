<?php 
/**
 * Show metabox if post format equals provided value
 * @author Oren Havshush
 * @link https://github.com/orenhavshush/cmb2-post-format-show_on-filter
 *
 * @param bool $display
 * @param array $post_format
 * @return bool display metabox
 */
function cmb_show_on_post_format( $display, $post_format ) {

    if ( ! isset( $post_format['show_on']['key'] ) ) {
        return $display;
    }

    $post_id = 0;

    // If we're showing it based on ID, get the current ID
    if ( isset( $_GET['post'] ) ) {
        $post_id = $_GET['post'];
    } elseif ( isset( $_POST['post_ID'] ) ) {
        $post_id = $_POST['post_ID'];
    }

    if ( ! $post_id ) {
        return $display;
    }

    $value  = get_post_format($post_id);
 
    if ( empty( $post_format['show_on']['key'] ) ) {
        return (bool) $value;
    }

    return $value == $post_format['show_on']['value'];
}
add_filter( 'cmb2_show_on', 'cmb_show_on_post_format', 10, 2 );
