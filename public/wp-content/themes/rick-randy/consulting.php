<?php
/*
Template Name: Consulting Template
 */
 ?>
<?php wp_body_open();?>
    <?php get_header(); ?>
    <main class="content-wrapper consulting-wrapper">
        <div class="consulting-info info-wrapper">
        <?php
            $consulting_info = new WP_Query(array('category_name' => 'Consulting info', 'order' => 'ASC'));
            if ($consulting_info -> have_posts()) :
                while ($consulting_info -> have_posts()) :
                    $consulting_info -> the_post();
        ?>
            <div class="heading-wrapper-braces">
                <h2><?php  the_title(); ?></h2>
                <?php the_content(); ?>
            </div>
        <?php
                endwhile;
            endif;
            wp_reset_postdata();
        ?>
        </div>
        <div class="cards">
        <?php
            $consulting_card = new WP_Query(array('category_name' => 'Consulting card', 'order' => 'ASC'));
            if ($consulting_card -> have_posts()) :
                while ($consulting_card -> have_posts()) :
                    $consulting_card -> the_post();
        ?>
            <div class="card-wrapper">
                <div class="card-body">
                    <div class="card-header <?php if(get_the_title() != "<span>Premium</span>") echo "d-none" ?>">
                        <p><?php echo get_post_custom_values("service-heading")[0]; ?></p>
                    </div>
                    <div class="card-info">
                        <h2><?php  the_title(); ?></h2>
                        <p class="<?php echo (get_the_title() == "<span>Custom</span>") ? "card-custom" : "card-money" ?>"> <?php echo get_post_custom_values("service-cost")[0]; ?></p>
                        <p class="card-heading"><?php echo get_post_custom_values("service-contents")[0]; ?></p><br>
                        <ul>
                            <?php the_content(); ?>
                        </ul>
                    </div>
                </div>
                <a href="#" class="button button-primary"><?php echo get_post_custom_values("btn-text")[0]; ?></a>
            </div>
            <?php
                endwhile;
            endif;
            wp_reset_postdata();
        ?>
        </div>
    </main>
    <br>
    <?php get_footer(); ?>

