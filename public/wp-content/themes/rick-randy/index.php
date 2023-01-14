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
    <title>Rick Randy - Web Developer</title>
    <?php wp_head();?>
</head>
<body>
<?php wp_body_open();?>
    <header class="header-wrapper">
        <div class="logo-wrapper">
            <img src="" alt="" srcset="">
        </div>
        <nav>
            <div class="nav-left">
                <img src="<?php echo get_template_directory_uri();?>/images/Logo.svg" alt="Logo" />
            </div>
            <div class="wrapper">
            <div class="nav-center">
                <a href="#">Home</a>
                <a href="#">About Me</a>
                <a href="#">Books</a>
                <a href="#">Workshops</a>
                <a href="#">Consulting</a>
            </div>
            <div class="nav-right">
                <a href="#" class="button button-primary">Login</a>
                <a href="#" class="button button-secondary">Sign Up</a>
            </div>
            </div>
        </nav>
    </header>
    <main class="content-wrapper">
        <section class="section-hero">
            <div class="hero-content-wrapper">
                <span>Rick Randy</span>
                <h1>Why you rightfully <span>hate</span>JavaScript</h1>
                <p>The most loved book series in the web community in 2021. The series has won the "Best Book
                    for Web Developers" award for the past 3 years. The final book in this series, "JavaScript -
                    The Apocalypse Is Coming", is coming soon. Get your copy here!
                </p>
                <a href="#" class="button button-primary">Learn More</a>
            </div>
            <div class="hero-image-wrapper">
                <img src="" alt="" srcset="">
            </div>
        </section>
        <section class="section-about">
            <div>
                <div>
                    <h2 class="about-content-wrapper">Hi I'm <span>Rick Randy</span></h2>
                    <div>
                        <p>I work as web developer and trainer. I can help you to build web products or improve your
                            existing applications. I’m available for freelance projects or specific knowledge trainings
                            and workshops. Feel free to contact me with your requirements.
                        </p>
                        <p>More than 10 years of experience working with companies from all over the world. I design
                            and develop web applications for business and personal use, and provide training to improve
                            the skills of people. To share my accumulated knowledge, I also write books.
                        </p>
                    </div>
                    <a href="#" class="button button-secondary">More about me</a>
                    <div class="quote-wrapper">
                        <blockquote>“Hold my beer, I’m going to learn a new JS Framework”</blockquote>
                    </div>
                </div>
            </div>
            <div class="about-image-wrapper">
                <img src="" alt="" srcset="">
            </div>
        </section>
        <section class="section-books">
            <div class="book-info info-wrapper">
                <div class="heading-wrapper-braces">
                    <h2>My true passion - <span>Books</span></h2>
                    <p>I want to share my expertise with everyone in the world who is interested in web development.
                        And I would never miss a chance to take the mick out of JavaScript! Five years ago, I published
                        the first book of my book-series "Why you rightfully hate JavaScript". It quickly became a
                        bestseller in its category. You can now preorder the last book of the series “JavaScript –
                        the Apocalypse is Coming”!
                    </p>
                </div>
            </div>
            <div class="books-content">
                <div class="book-promo">
                    <div class="block-container">
                        <img class="block" src="<?php echo get_template_directory_uri();?>/images/Book_Apocalypse.webp" alt="Cover of the book Javascript the Apocalypse is coming" srcset="">
                        <div class="border"></div>
                    </div>
                    <a href="#" class="button button-primary">Order now</a>
                </div>
                <div class="books-grid-container">
                    <div class="books-grid-item">
                        <img src="<?php echo get_template_directory_uri();?>/images/Book_Tears.webp" alt="Cover of the book The Comming of the Web People" srcset="">
                        <div class="books-hidden">
                            <h3>The Comming of the Web People</h3>
                            <p>The first book of the series - won over millions of readers. Describes the upcoming
                                development of the web industry
                            </p>
                        </div>
                    </div>
                    <div class="books-grid-item">
                        <img src="<?php echo get_template_directory_uri();?>/images/Book_People.webp" alt="Cover of the book Tears of the Web Developer" srcset="">
                        <div class="books-hidden">
                            <h3>Tears of the Web Developer</h3>
                            <p>The second book of the series -  is the ultimate guide for those who have ever felt
                                the frustration of trying to debug a line of code
                            </p>
                        </div>
                    </div>
                    <div class="books-grid-item">
                        <img src="<?php echo get_template_directory_uri();?>/images/Book_Code.webp" alt="Cover of the book The code of a web application" srcset="">
                        <div class="books-hidden">
                            <h3>The code of a web application</h3>
                            <p>Second book of the series - more serious but still provides great knowledge and
                                practical examples</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-work">
            <div class="work-cover-img">
            </div>
            <div class="work-wrapper">
                <h2>My latest<span>Work</span></h2>
                <p>Website for a company who’s doing private snowboard sessions in Zell am See, Austria. The main
                    goal was to give the website a laidback feeling, like snowboarding.
                </p>
                <a href="#" class="button button-secondary">Learn more</a>
            </div>
            <div class="work-example-wrapper">
                <div>
                    <img src="<?php echo get_template_directory_uri();?>/images/Work_example.webp" alt="Puicture of the Rick's latest work" srcset="">
                    <div class="border"></div>
                </div>
            </div>
            <div class="quote-wrapper">
                <blockquote>“JavaScript is a lot like English; No one knows how to use semicolons properly”</blockquote>
            </div>
        </section>
        <section class="section-contact">
            <div class="contact-heading"><h2>Contact <span>Me</span></h2></div>
            <div class="contact-info-wrapper" id="contact-info-wrapper">
                <div class="form-wrapper">
                    <form action="" method="post">
                        <input type="text" name="name" placeholder="Full Name">
                        <input type="email" name="email" placeholder="Email Address">
                        <textarea name="message" id="messageId" cols="30" rows="10" placeholder="Write youe message here"></textarea>
                        <a href="#" class="button button-primary">Send message</a>
                    </form>
                </div>
                <div class="contact-info" id="contact-info">
                    <div>
                        <p>My Cellphone</p>
                        <p>+436641234567</p>
                    </div>
                    <div>
                        <p>My Email</p>
                        <p>rick.randy@rr-studio.com</p>
                    </div>
                    <div class="stamp-wrapper">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer-wrapper">
    </footer>
    <?php wp_footer();?>
    <script src="<?php echo get_template_directory_uri();?>/js/main.js" defer></script>
</body>
</html>
