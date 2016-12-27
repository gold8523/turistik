<?php
// Register Custom Post Type
function discounts() {

    $labels = array(
        'name'                  => _x( 'discounts', 'Post Type General Name', 'discounts' ),
        'singular_name'         => _x( 'discount', 'Post Type Singular Name', 'discounts' ),
        'menu_name'             => __( 'Акции', 'discounts' ),
        'name_admin_bar'        => __( 'Акции', 'discounts' ),
        'archives'              => __( 'Архив акция', 'discounts' ),
        'parent_item_colon'     => __( 'Родительская акция', 'discounts' ),
        'all_items'             => __( 'Все акции', 'discounts' ),
        'add_new_item'          => __( 'Добавить акцию', 'discounts' ),
        'add_new'               => __( 'Добавить акцию', 'discounts' ),
        'new_item'              => __( 'Новая акция', 'discounts' ),
        'edit_item'             => __( 'Редактировать акцию', 'discounts' ),
        'update_item'           => __( 'Обновить акцию', 'discounts' ),
        'view_item'             => __( 'Просмотреть акцию', 'discounts' ),
        'search_items'          => __( 'Поиск акции', 'discounts' ),
        'not_found'             => __( 'Не найдено', 'discounts' ),
        'not_found_in_trash'    => __( 'Не найдено', 'discounts' ),
        'featured_image'        => __( 'Изображение акции', 'discounts' ),
        'set_featured_image'    => __( 'Установить изображение акции', 'discounts' ),
        'remove_featured_image' => __( 'Удалить изображение', 'discounts' ),
        'use_featured_image'    => __( 'Использовать изображение', 'discounts' ),
        'insert_into_item'      => __( 'Вставить в', 'discounts' ),
        'uploaded_to_this_item' => __( 'Загрузить к', 'discounts' ),
        'items_list'            => __( 'Список', 'discounts' ),
        'items_list_navigation' => __( 'Items list navigation', 'discounts' ),
        'filter_items_list'     => __( 'Filter items list', 'discounts' ),
    );
    $args = array(
        'label'                 => __( 'discount', 'discounts' ),
        'description'           => __( 'Discounts', 'discounts' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments', ),
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
    register_post_type( 'discount', $args );

}
add_action( 'init', 'discounts', 0 );