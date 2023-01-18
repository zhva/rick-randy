<?php
/*
Template Name: Consulting Template
 */
 ?>
<?php wp_body_open();?>
    <?php get_header(); ?>
    <main class="content-wrapper">
        <div class="consulting-info info-wrapper">
            <div>
                <h2>Your <span>wish</span> is my <span>command</span></h2>
                <p>Over the past years I gained a lot of expertise in my department and customer service.<br>
                    I want to share this knowledge with every web developer who is willing to learn and get
                    better in their field. <br>You can either book the free package or full premium package.
                    You can also customize a package for you business needs.</p>
            </div>
        </div>
        <div class="cards">
            <div class="card-wrapper">
                <div class="card-body">
                    <h2><span>Free</span></h2>
                    <p class="card-money"><span>$</span>0</p>
                    <p class="card-heading">Free includes</p><br>
                    <ul>
                        <li>Review for one application of your choice</li><br>
                        <li>30 minute video call where you can ask me anything</li><br>
                    </ul>
                </div> 
                <a href="#" class="button button-primary">Request</a>   
            </div>
            <div class="card-wrapper">
                <div class="card-body">
                    <div class="card-header">
                        <p>Most popular</p>
                    </div>
                    <h2><span>Premium</span></h2>
                    <p class="card-money"><span>$</span>400</p>
                    <p class="card-heading">Premium includes</p><br>
                    <ul>
                        <li>Review for application(s) of your choice</li><br>
                        <li>Video call where you can ask me anything</li><br>
                        <li>Consulting for your web development project </li><br>
                        <li>SEO and Google Analytics consulting</li><br>
                    </ul>  
                </div>
                <a href="#" class="button button-primary">Request</a>
            </div>
            <div class="card-wrapper">
                <div class="card-body">
                    <h2><span>Custom</span></h2>
                    <p class="card-custom">Design a custom package for your business needs</p><br>
                    <p class="card-heading">Custom pricing</p><br>
                    <ul>
                        <li>Write a request with any service you require (pricing may vary)</li><br>
                        <li>Video call where you can ask me anything</li><br>
                    </ul>
                </div>
                <a href="#" class="button button-primary">Request</a>
            </div>
        </div>
    </main>
    <br>
    <?php get_footer(); ?>

