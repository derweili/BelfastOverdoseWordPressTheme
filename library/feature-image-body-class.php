<?php
add_action('body_class', 'bo_if_featured_image_class' );
function bo_if_featured_image_class($classes) {
 if(!is_singular()) return $classes;
 if ( has_post_thumbnail() ) {
   array_push($classes, 'has-featured-image');
 }else{
   array_push($classes, 'no-featured-image');
 }
 return $classes;
}
