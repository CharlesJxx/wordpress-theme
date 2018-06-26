<?php
//使WordPress支持post thumbnail
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}

if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'customized-post-thumb', 100, 120 );
}

// 自适应图片删除width和height  
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );  
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );  
   
function remove_width_attribute( $html ) {  
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );  
   return $html;  
}  
?>