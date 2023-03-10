<?php wp_body_open();?>
    <?php get_header(); ?>
    <main class="content-wrapper">
        <section class="section-hero">
            <div class="hero-grid">
                <div>
                <?php
                    $hero_section = new WP_Query(array('category_name' => 'Hero', 'order' => 'ASC'));
                    if ($hero_section -> have_posts()) :
                        while ($hero_section -> have_posts()) :
                            $hero_section -> the_post();
                ?>
                    <div class="hero-name"><?php echo get_post_custom_values("author")[0]; ?></div>
                    <h1 class="hero-title"><?php  the_title(); ?></h1>
                    <?php the_content(); ?>
                    <button class="button button-primary"><?php echo get_post_custom_values("btn-text")[0]; ?></button>
                </div>
                <div>
                    <?php the_post_thumbnail();?>
                </div>
            <?php
                    endwhile;
                endif;
                wp_reset_postdata();
            ?>
            </div>
        </section>
        <section class="section-about">
            <div class="about-grid">
            <?php
                $about_section = new WP_Query(array('category_name' => 'About me section', 'order' => 'ASC'));
                if ($about_section -> have_posts()) :
                    while ($about_section -> have_posts()) :
                        $about_section -> the_post();
            ?>
                <div class="column">
                    <?php the_post_thumbnail();?>
                </div>
                <div class="column about-me">
                    <div class="dot dot-main">
                        <img width="40" height="40" src="<?php echo get_template_directory_uri();?>/images/Separator.svg" alt="" />
                    </div>
                    <h1 class=""><?php  the_title(); ?></h1>
                    <?php the_content(); ?>
                    <button class="button button-secondary"><?php echo get_post_custom_values("btn-text")[0]; ?></button>
                    <div class="about-me-joke">
                        <div class="dot dot-joke">
                            <img width="40" height="40" src="<?php echo get_template_directory_uri();?>/images/Separator.svg" alt="" />
                        </div>
                        <span><?php echo get_post_custom_values("joke-text")[0]; ?></span>
                    </div>
                </div>
        <?php
                endwhile;
            endif;
            wp_reset_postdata();
        ?>
            </div>
        </section>
        <section class="section-books" id="Books">
        <?php
            $books_section = new WP_Query(array('category_name' => 'Books section info', 'order' => 'ASC'));
            if ($books_section -> have_posts()) :
              while ($books_section -> have_posts()) :
                $books_section -> the_post();
        ?>
            <div class="book-info info-wrapper">
                <div class="heading-wrapper-braces">
                    <h2><?php  the_title(); ?></h2>
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="books-content">
                <div class="book-promo">
                    <div class="block-container">
                        <?php the_post_thumbnail();?>
                        <div class="border"></div>
                    </div>
                    <a href="#" class="button button-primary"><?php echo get_post_custom_values("btn-text")[0]; ?></a>
                </div>

        <?php
                endwhile;
            endif;
            wp_reset_postdata();
        ?>
                <div class="books-grid-container">
                <?php
                    $books = new WP_Query(array('category_name' => 'Book', 'order' => 'ASC'));
                    if ($books -> have_posts()) :
                        while ($books -> have_posts()) :
                            $books -> the_post();
                ?>
                    <div class="books-grid-item">
                        <?php the_post_thumbnail();?>
                        <div class="books-hidden">
                            <h3><?php  the_title(); ?></h3>
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();
                ?>
                </div>
            </div>
        </section>
        <section class="section-work" id="Workshops">
        <?php
            $workshops = new WP_Query(array('category_name' => 'Workshop', 'order' => 'ASC'));
            if ($workshops -> have_posts()) :
              while ($workshops -> have_posts()) :
                $workshops -> the_post();
        ?>
            <div class="work-cover-img">
            </div>
            <div class="work-wrapper">
                <h2><?php  the_title(); ?></h2>
                <?php the_content(); ?>
                <a href="#" class="button button-secondary"><?php echo get_post_custom_values("btn-text")[0]; ?></a>
            </div>
            <div class="work-example-wrapper">
                <div>
                    <?php the_post_thumbnail();?>
                    <div class="border"></div>
                </div>
            </div>
            <div class="quote-wrapper">
                <blockquote><?php echo get_post_custom_values("joke-text")[0]; ?></blockquote>
            </div>
        <?php
                endwhile;
            endif;
            wp_reset_postdata();
        ?>
        </section>
        <section class="section-contact">
            <div class="extra-bg">
            <?php
                $contact = new WP_Query(array('category_name' => 'Contact me', 'order' => 'ASC'));
                if ($contact -> have_posts()) :
                while ($contact -> have_posts()) :
                    $contact -> the_post();
            ?>
                <div class="contact-heading"><h2><?php  the_title(); ?></h2></div>
                <div class="contact-info-wrapper" id="contact-info-wrapper">
                    <div class="form-wrapper">
                        <?php
                        // ID bei Viktoriia 103, bei Katharina 80
                        // On Server id = 5
                            $form7 = wpcf7_contact_form(5);
                            echo $form7->form;
                        ?>
                    </div>
                    <div class="contact-info" id="contact-info">
                        <div>
                            <p><?php echo get_post_custom_values("text-phone")[0]; ?></p>
                            <p><?php echo get_post_custom_values("number-phone")[0]; ?></p>
                        </div>
                        <div>
                            <p><?php echo get_post_custom_values("text-email")[0]; ?></p>
                            <p><?php echo get_post_custom_values("email")[0]; ?></p>
                        </div>
                        <div class="stamp-wrapper">
                        </div>
                    </div>
                </div>
            <?php
                    endwhile;
                endif;
                wp_reset_postdata();
            ?>
            </div>
        </section>
        <div class="footer-additional-bg"></div>
    </main>
    <?php get_footer(); ?>
