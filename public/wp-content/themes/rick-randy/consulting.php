<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='<?php echo get_template_directory_uri();?>/style.css'>
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri();?>/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri();?>/images/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri();?>/images/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri();?>/images/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title>Rick Randy - Consulting</title>
    <?php wp_head();?>
</head>
<body>
<?php wp_body_open();?>
    <header class="header-wrapper">
        <div class="logo-wrapper">
            <img src="" alt="" srcset="">
        </div>
        <nav class="nav-wrapper">
            <ul class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Me</a></li>
                <li><a href="#">Books</a></li>
                <li><a href="#">workshops</a></li>
                <li><a href="#">Consulting</a></li>
            </ul>
        </nav>
        <div>
            <a href="#" class="button button-primary">Login</a>
            <a href="#" class="button button-secondary">Sign Up</a>
        </div>
    </header>
    <main class="content-wrapper">
        <div class="consulting-info info-wrapper">
            <div>
                <h1>Your <span>wish</span> is my <span>command</span></h1>
                <p>Over the past years I gained a lot of expertise in my department and customer service.
                    I want to share this knowledge with every web developer who is willing to learn and get
                    better in their field. You can either book the free package or full premium package.
                    You can also customize a package for you business needs.</p>
            </div>
        </div>
        <div>
            <div class="card-wrapper">
                <div>
                    <h2>Free</h2>
                    <p><span>$</span>0</p>
                    <p>Free includes</p>
                    <ul>
                        <li>Review for one application of your choice</li>
                        <li>30 minute video call where you can ask me anything</li>
                    </ul>
                    <a href="#" class="button button-primary">Request</a>
                </div>
            </div>
            <div class="card-wrapper">
                <div class="card-header">
                    <p>Most popular</p>
                </div>
                <div>
                    <h2>Premimum</h2>
                    <p><span>$</span>400</p>
                    <p>Premium includes</p>
                    <ul>
                        <li>Review for application(s) of your choice</li>
                        <li>Video call where you can ask me anything</li>
                        <li>Consulting for your web development project </li>
                        <li>SEO and Google Analytics consulting</li>
                    </ul>
                    <a href="#" class="button button-primary">Request</a>
                </div>
            </div>
            <div class="card-wrapper">
                <div>
                    <h2>Custom</h2>
                    <p>Design a custom package for your business needs</p>
                    <p>Custom includes</p>
                    <ul>
                        <li>Write a request with any service you require (pricing may vary)</li>
                        <li>Video call where you can ask me anything</li>
                    </ul>
                    <a href="#" class="button button-primary">Request</a>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer-wrapper">
    </footer>
    <?php wp_footer();?>
</body>
</html>
