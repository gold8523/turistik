<?php get_header(); ?>
    <div class="main-content">
        <div class="content-wrapper">
            <div class="content">
                <?php if( have_posts()) : while ( have_posts()) : the_post(); ?>
                    <h1 class="title-page"><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                <?php endwhile; else: ?>
                    Ничего не найдено
                <?php endif; ?>
<!--                <div class="page-navigation">-->
<!--                    <div class="page-navigation-wrap"><a href="#" class="page-navigation__prev-page"><i class="icon icon-angle-double-left"></i>Предыдущая статья</a></div>-->
<!--                    <div class="page-navigation-wrap"><a href="#" class="page-navigation__next-page">Сдедующая статья<i class="icon icon-angle-double-right"></i></a></div>-->
<!--                </div>-->
            </div>
            <?php get_template_part('parts/sidebar'); ?>
        </div>
    </div>
<?php get_footer(); ?>