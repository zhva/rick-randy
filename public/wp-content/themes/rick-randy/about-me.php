<?php
/*
Template Name: About Me Template
 */
 ?>
<?php wp_body_open();?>
    <?php get_header(); ?>
    <main class="content-wrapper">
        <div class="heading">
            <h2>About <span>me</span></h2>
        </div>
        <div class="content-grid">
            <div class="grid-elem">
                <img src="<?php echo get_template_directory_uri();?>/images/Photo-who-am-i.webp" alt="Picture of Rick sitting in front of his laptop" srcset="">
            </div>
            <div class="grid-elem">
                <div class="grid-elem-top">
                    <h3>Who<span> am I</span></h3>
                    <div>
                        <p>
                            It all starts with a “Hello World”! <br> Or for me it was a book about HTML I found in my local
                            library when I was 15. <br>Since then, my whole life has been dedicated to coding. I went to
                            university and finished my Bachelor degree.
                        </p>
                        <p>
                            While working for several companies I found my passion in teaching other people. I never
                            thought of myself as a teacher who likes to educate people but ironically that is what I
                            end up loving now.
                        </p>
                        <p>
                            Five years ago, I started my book-series “Why you rightfully hate JavaScript”. Two years
                            ago, I build up my YouTube channel, which has now over 150.000 subscribers.
                        </p>
                        <br>
                        <br>
                    </div>
                    <a href="#" class="button button-secondary">My YouTube</a>
                </div>
            </div>
            <div class="grid-elem">
                <div class="grid-elem-bottom">
                    <h3>Work<span> experience</span></h3>
                    <div>
                        <p>Over the last years of me working in this business I’ve worked with many companies from
                            all over the world, like AP MEDIA in Hamburg, Utility in New York or Blink22 in Singapore.
                        </p>
                        <p>
                            While working in several countries I was also able to meet lots of freelancers with whom I’m
                            working until this day. Because of working in the international business, I was able to work
                            for lots of companies from all over the world remotely too.
                        </p>
                        <p>
                            I’m in the web development business
                            for over 10 years now and a certified trainer for the past three years. Today I’m a senior web
                            developer while offering workshops and doing consulting.
                         </p>
                        <br>
                        <br>
                    </div>
                    <a href="#" class="button button-secondary">My LinkedIn</a>
                </div>
            </div>
            <div class="grid-elem">
                <img src="<?php echo get_template_directory_uri();?>/images/Photo-work-experience.webp" alt="Picture of three people sitting at a desk coding" srcset="">
            </div>
        
    </main>
    <?php get_footer(); ?>

