<?php
/*
Template Name: About Me Template
 */
 ?>
<?php wp_body_open();?>
    <?php get_header(); ?>
    <main class="content-wrapper">
        <div class="heading">
        <?php
            $heading = new WP_Query(array('category_name' => 'About me heading', 'order' => 'ASC'));
            if ($heading -> have_posts()) :
                while ($heading -> have_posts()) :
                    $heading -> the_post();
        ?>
            <h1><?php  the_title(); ?></h1>
            <?php
                endwhile;
            endif;
            wp_reset_postdata();
        ?>
        </div>
        <div class="content-grid">
        <?php
            $about_me = new WP_Query(array('category_name' => 'About me page', 'order' => 'ASC'));
            if ($about_me -> have_posts()) :
                while ($about_me -> have_posts()) :
                    $about_me -> the_post();
        ?>
            <div class="grid-elem">
                <?php the_post_thumbnail();?>
            </div>
            <div class="grid-elem">
                <div class="grid-item">
                    <h2><?php  the_title(); ?></h2>
                    <div>
                        <?php the_content(); ?>
                    </div>
                    <a href="#" class="button button-secondary"><?php echo get_post_custom_values("btn-text")[0]; ?></a>
                </div>
            </div>
        <?php
                endwhile;
            endif;
            wp_reset_postdata();
        ?>
            </div>

    </main>
    <?php get_footer(); ?>

