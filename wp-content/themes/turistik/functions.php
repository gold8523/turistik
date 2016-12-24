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

class MenuWalker extends Walker_Nav_Menu
{

    function start_el(&$output, $object, $depth = 3, $args = array(), $current_object_id = 0)
    {
        if ($object->object_id == get_the_ID()) {
            $active = "main-nav__link_active";
        } else {
            $active = "";
        }
        $output .= '<li class="nav-list__nav-item '.$active.'"><a href="' . $object->url . '" class="nav-list__nav-item__nav-link">
       ' . $object->title . '</a>
        </li>';
    }


}
acf_add_options_page('Опции');

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');