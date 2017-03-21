<?php 

// Custom Excerpt function for Advanced Custom Fields, use in Template: echo custom_field_excerpt();
function custom_field_excerpt() {
    global $post;
    $text = get_field('your_field_name'); //Replace 'your_field_name'
    if ( '' != $text ) {
        $text = strip_shortcodes( $text );
        $text = apply_filters('the_content', $text);
        $text = str_replace(']]&gt;', ']]&gt;', $text);
        $excerpt_length = 20; // 20 words
        $excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
        $text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
    }
    return apply_filters('the_excerpt', $text);
}

 ?>