<?php
// Register Custom Post Type
function sale() {

$labels = array(
'name'                  => _x( 'Акции', 'Post Type General Name', 'sale' ),
'singular_name'         => _x( 'Акция', 'Post Type Singular Name', 'sale' ),
'menu_name'             => __( 'Акции', 'sale' ),
'name_admin_bar'        => __( 'Акции', 'sale' ),
'archives'              => __( 'Архив акций', 'sale' ),
'attributes'            => __( 'Item Attributes', 'sale' ),
'parent_item_colon'     => __( 'Родительская акция', 'sale' ),
'all_items'             => __( 'Все акции', 'sale' ),
'add_new_item'          => __( 'Добавить новую акцию', 'sale' ),
'add_new'               => __( 'Добавить новую', 'sale' ),
'new_item'              => __( 'Новая акция', 'sale' ),
'edit_item'             => __( 'Редактировать акцию', 'sale' ),
'update_item'           => __( 'Обновить акцию', 'sale' ),
'view_item'             => __( 'Просмотреть акцию', 'sale' ),
'view_items'            => __( 'Просмотреть акции', 'sale' ),
'search_items'          => __( 'Поиск акции', 'sale' ),
'not_found'             => __( 'Не найдено', 'sale' ),
'not_found_in_trash'    => __( 'Не найдено', 'sale' ),
'featured_image'        => __( 'Изображение акции', 'sale' ),
'set_featured_image'    => __( 'Установить изображение акции', 'sale' ),
'remove_featured_image' => __( 'Удалить изображение акции', 'sale' ),
'use_featured_image'    => __( 'Использовать как изображение', 'sale' ),
'insert_into_item'      => __( 'Вставить в акцию', 'sale' ),
'uploaded_to_this_item' => __( 'Загрузить к этой акции', 'sale' ),
'items_list'            => __( 'Список акций', 'sale' ),
'items_list_navigation' => __( 'Items list navigation', 'sale' ),
'filter_items_list'     => __( 'Filter items list', 'sale' ),
);
$args = array(
'label'                 => __( 'Акция', 'sale' ),
'description'           => __( 'Post Type Description', 'sale' ),
'labels'                => $labels,
'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'custom-fields', ),
'taxonomies'            => array( 'category', 'post_tag' ),
'hierarchical'          => false,
'public'                => true,
'show_ui'               => true,
'show_in_menu'          => true,
'menu_position'         => 5,
'show_in_admin_bar'     => true,
'show_in_nav_menus'     => true,
'can_export'            => true,
'has_archive'           => true,
'exclude_from_search'   => false,
'publicly_queryable'    => true,
'capability_type'       => 'page',
);
register_post_type( 'sale', $args );

}
add_action( 'init', 'sale', 0 );