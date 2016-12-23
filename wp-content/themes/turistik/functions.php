<?php
function get_pic($id) {
    $thumb_id = get_post_thumbnail_id($id);
    $url = wp_get_attachment_image_src($thumb_id);

    return  $url ? $url[0] : "/img/post_thumb/thumb_1.jpg";
}

add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
    return '
	<div class="pagenavi-post-wrap %1$s" role="navigation">
		%3$s
	</div>
	';
}
add_theme_support('menus');