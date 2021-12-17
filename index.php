<?php
    include_once('assets/php/connection.php');
    $sql1 = mysqli_query($conn, "SELECT * FROM testimonials ORDER BY id DESC LIMIT 1;");
    $print1 = mysqli_fetch_row($sql1);
    $sql2 = mysqli_query($conn, "SELECT * FROM testimonials ORDER BY id DESC LIMIT 1 OFFSET 1;");
    $print2 = mysqli_fetch_row($sql2);
    $sql3 = mysqli_query($conn, "SELECT * FROM testimonials ORDER BY id DESC LIMIT 1 OFFSET 2;");
    $print3 = mysqli_fetch_row($sql3);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">
        <title>Learn@Home</title>
        <link rel="icon" type="image/png" href="assets/images/icon.png">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>
    <body>
        <div id="preloader">
            <div class="jumper">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>  
        <header class="header-area header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="main-nav">
                            <a href="#" class="logo">
                                <img src="assets/images/logo.png" alt="Learn@Home"/>
                            </a>
                            <ul class="nav">
                                <li><a href="#welcome" class="active">Home</a></li>
                                <li><a href="#features">About</a></li>
                                <li><a href="#testimonials">Testimonials</a></li>
                                <li><a href="#courses">Find Courses</a></li>
                                <li><a href="#add-review">Add Review</a></li>
                            </ul>
                            <a class='menu-trigger'>
                                <span>Menu</span>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <div class="welcome-area" id="welcome">
            <div class="header-text">
                <div class="container">
                    <div class="row">
                        <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                            <h1>We provide the best <strong>courses</strong><br>available on the <strong>internet</strong></h1>
                            <p>Learn@Home is a small initiative for empowering women at the grass root level by assisting housewives and home ridden ladies to capture an experience and grow at home with ease.</p>
                            <a href="#features" class="main-button-slider">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="section home-feature">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                                <div class="features-small-item">
                                    <div class="icon">
                                        <i><img src="assets/images/featured-item-01.png" alt=""></i>
                                    </div>
                                    <h5 class="features-title">Women Empowerment</h5>
                                    <p>Empowering women at the grass root level by assisting them.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                                <div class="features-small-item">
                                    <div class="icon">
                                        <i><img src="assets/images/featured-item-01.png" alt=""></i>
                                    </div>
                                    <h5 class="features-title">Develop a new Skill</h5>
                                    <p>Learn a new skill practically at the comfort of your home.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                                <div class="features-small-item">
                                    <div class="icon">
                                        <i><img src="assets/images/featured-item-01.png" alt=""></i>
                                    </div>
                                    <h5 class="features-title">Quality Content</h5>
                                    <p>Experience Quality learning from the experts throughout web.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section padding-top-70 padding-bottom-0" id="features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <img src="assets/images/left-image.png" class="rounded img-fluid d-block mx-auto" alt="App">
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                        <div class="left-heading">
                            <h2 class="section-title">About Learn@Home</h2>
                        </div>
                        <div class="left-text">
                            <p>Learn@Home is a small initiative for empowering women at the grass root level by assisting housewives and home ridden ladies to capture an experience and grow at home with ease. We aspire to assimilate women to come out at front and always have an equal stand at every front and understanding the basic necessary amenities and skills to be never felt "backward"</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hr"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section padding-bottom-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                        <div class="left-heading">
                            <h2 class="section-title">What we do?</h2>
                        </div>
                        <div class="left-text">
                            <p>Our responsive and interactive webpage works to helping out all women and girls and even those in need, a platform to explore their field of interest. We bring about shortlisted best courses out of web to facilitate the process of hunting for the rightful course for them. So come, learn and grow to a  morning of flowers in their mind and weave a stronger front for the future.</p>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <img src="assets/images/right-image.png" class="rounded img-fluid d-block mx-auto" alt="App">
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Counter Parallax Start ***** -->
        <section class="counter">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="count-item decoration-bottom">
                                <strong>126</strong>
                                <span>Projects</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="count-item decoration-top">
                                <strong>63</strong>
                                <span>Happy Clients</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="count-item decoration-bottom">
                                <strong>18</strong>
                                <span>Awards Wins</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="count-item">
                                <strong>27</strong>
                                <span>Countries</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Counter Parallax End ***** --> 
        <section class="section" id="testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="center-heading">
                            <h2 class="section-title">What do they say?</h2>
                        </div>
                    </div>
                    <div class="offset-lg-3 col-lg-6">
                        <div class="center-text">
                            <p>Recent reviews from various users have been mentioned below. To add yours, go to add review section.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="team-item">
                            <div class="team-content">
                                <i><img src="assets/images/testimonial-icon.png" alt=""></i>
                                <?php
                                    echo '<p>';
                                    echo $print1[4];
                                    echo '</p>';
                                ?>
                                <div class="user-image">
                                    <img src="assets/images/person1.png" width="60" height="60" alt="">
                                </div>
                                <?php
                                    echo '<div class="team-info">';
                                    echo '<h3 class="user-name">';
                                    echo $print1[1];
                                    echo '</h3>';
                                    echo '<span>';
                                    echo $print1[2];
                                    echo '</span>';
                                    echo '</div>';
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="team-item">
                            <div class="team-content">
                                <i><img src="assets/images/testimonial-icon.png" alt=""></i>
                                <?php
                                    echo '<p>';
                                    echo $print2[4];
                                    echo '</p>';
                                ?>
                                <div class="user-image">
                                    <img src="assets/images/person2.png" width="60" height="60" alt="">
                                </div>
                                <?php
                                    echo '<div class="team-info">';
                                    echo '<h3 class="user-name">';
                                    echo $print2[1];
                                    echo '</h3>';
                                    echo '<span>';
                                    echo $print2[2];
                                    echo '</span>';
                                    echo '</div>';
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="team-item">
                            <div class="team-content">
                                <i><img src="assets/images/testimonial-icon.png" alt=""></i>
                                <?php
                                    echo '<p>';
                                    echo $print3[4];
                                    echo '</p>';
                                ?>
                                <div class="user-image">
                                    <img src="assets/images/person3.png" width="60" height="60" alt="">
                                </div>
                                <?php
                                    echo '<div class="team-info">';
                                    echo '<h3 class="user-name">';
                                    echo $print3[1];
                                    echo '</h3>';
                                    echo '<span>';
                                    echo $print3[2];
                                    echo '</span>';
                                    echo '</div>';
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mini" id="courses">
            <div class="mini-content">
                <div class="container">
                    <div class="row">
                        <div class="offset-lg-3 col-lg-6">
                            <div class="info">
                                <h1>Course Categories</h1>
                                <p>Please choose a category from the below mentioned ones that makes you feel comfortable.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                            <a href="assets/html/artisticThoughts.html" class="mini-box">
                                <i><img src="assets/images/work-process-item-01.png" alt=""></i>
                                <strong>Creativity</strong>
                                <span>Art, Music, Creativity and much more.</span>
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                            <a href="assets/html/fitnessAndExercise.html" class="mini-box">
                                <i><img src="assets/images/work-process-item-01.png" alt=""></i>
                                <strong>Fitness</strong>
                                <span>Learn yoga and exercises from experts.</span>
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                            <a href="assets/html/educational-techfriendly.html" class="mini-box">
                                <i><img src="assets/images/work-process-item-01.png" alt=""></i>
                                <strong>Tech Ed</strong>
                                <span>Learn how to use technology at ease.</span>
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                            <a href="assets/html/household_ease_at_home.html" class="mini-box">
                                <i><img src="assets/images/work-process-item-01.png" alt=""></i>
                                <strong>Household</strong>
                                <span>Cooking, Gardening and much more.</span>
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                            <a href="assets\html\selfDefenseAndHealth.html" class="mini-box">
                                <i><img src="assets/images/work-process-item-01.png" alt=""></i>
                                <strong>Protection</strong>
                                <span>Learn Self Defense & medical tips.</span>
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                            <a href="assets\html\learningPersonalityEnhancementSkills.html" class="mini-box">
                                <i><img src="assets/images/work-process-item-01.png" alt=""></i>
                                <strong>Others</strong>
                                <span>Personality Development & other things.</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section colored" id="add-review">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="center-heading">
                            <h2 class="section-title">Your Views Matters</h2>
                        </div>
                    </div>
                    <div class="offset-lg-3 col-lg-6">
                        <div class="center-text">
                            <p>Let us know what you think about this site. Tell us how this has changed your life and get featured.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <h5 class="margin-bottom-30">Keep in touch</h5>
                        <div class="contact-text">
                            <p>Jaypee Institute of Information Technology, Sector-128, Noida (U.P.)
                            <br>201304</p>
                            <p>Please do not submit any personal detail like phone number or email through the message section. This message will be displayed on the webpage once submitted.</p>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        <div class="contact-form">
                            <form id="contact" action="./assets/php/submitTestimonial.php" method="post">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                                </fieldset>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="designation" type="text" class="form-control" id="designation" placeholder="Designation" required="">
                                </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="E-Mail Address" required="">
                                </fieldset>
                                </div>
                                <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                                </fieldset>
                                </div>
                                <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button">Submit your views</button>
                                </fieldset>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <ul class="social">
                            <li><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <p class="copyright">Copyright &copy; 2021 Learn@Home</p>
                    </div>
                </div>
            </div>
        </footer>
        <script src="assets/js/jquery-2.1.0.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/scrollreveal.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/imgfix.min.js"></script> 
        <script src="assets/js/custom.js"></script>
    </body>
</html>