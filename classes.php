<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BabyCare - Daycare Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@600;700&family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">



</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar start -->
    <?php include('./section/nav.php') ?>
    <!-- Navbar End -->


    <!-- Login Page -->

    <?php include('./section/login.php') ?>

    <!-- Login Page End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4">Our Classes</h1>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Programs Start -->
    <div class="container-fluid py-5 about bg-light">
        <div class="container py-5">

            <!-- Spoken English -->
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-image border img-border-radius overflow-hidden">
                        <img src="./img/about1.jpg" class="img-fluid w-100" alt="Spoken English">
                    </div>
                </div>
                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.3s">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Spoken English</h4>
                    <p><strong>Unlock Confidence Through Language:</strong> Develop fluency, pronunciation, and conversation skills to excel in academics and life.</p>
                    <h6 class="mb-3"><i class="fas fa-check-circle me-2"></i>Grammar Mastery</h6>
                    <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Conversation Skills</h6>
                    <h6><i class="fas fa-check-circle me-2 text-secondary"></i>Vocabulary Building</h6>
                </div>
            </div>

            <!-- Spoken/Written Hindi -->
            <div class="row g-5 align-items-center mt-5">
                <div class="col-lg-7 order-2 order-lg-1 wow fadeIn" data-wow-delay="0.1s">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Spoken/Written Hindi</h4>
                    <p><strong>Master India's National Language:</strong> Build strong foundations in reading, writing, and speaking Hindi for improved communication skills.</p>
                    <h6 class="mb-3"><i class="fas fa-check-circle me-2"></i>Hindi Reading Skills</h6>
                    <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Writing Practice</h6>
                    <h6><i class="fas fa-check-circle me-2 text-secondary"></i>Hindi Conversation</h6>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-image border img-border-radius overflow-hidden">
                        <img src="./img/about2.jpg" class="img-fluid w-100" alt="Hindi Class">
                    </div>
                </div>
            </div>

            <!-- Calligraphy -->
            <div class="row g-5 align-items-center mt-5">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-image border img-border-radius overflow-hidden">
                        <img src="./img/about3.jpg" class="img-fluid w-100" alt="Calligraphy">
                    </div>
                </div>
                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.3s">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Calligraphy</h4>
                    <p><strong>Transform Writing into Art:</strong> Enhance handwriting skills while exploring artistic creativity.</p>
                    <h6 class="mb-3"><i class="fas fa-check-circle me-2"></i>Letter Formation Techniques</h6>
                    <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Beautiful Handwriting</h6>
                    <h6><i class="fas fa-check-circle me-2 text-secondary"></i>Creative Writing Skills</h6>
                </div>
            </div>

            <!-- Language Club -->
            <div class="row g-5 align-items-center mt-5">
                <div class="col-lg-7 order-2 order-lg-1 wow fadeIn" data-wow-delay="0.1s">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Language Club (Tamil, English, Hindi)</h4>
                    <p><strong>Learn Languages with Fun & Games!</strong> Explore Tamil, English, and Hindi through exciting activities that make learning enjoyable</p>
                    <h6 class="mb-3"><i class="fas fa-check-circle me-2"></i>Puzzle-Based Learning</h6>
                    <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Interactive Games & Activities</h6>
                    <h6><i class="fas fa-check-circle me-2 text-secondary"></i>Boosts Communication Skills</h6>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-image border img-border-radius overflow-hidden">
                        <img src="./img/about4.jpg" class="img-fluid w-100" alt="Language Club">
                    </div>
                </div>
            </div>

            <!-- Drawing -->
            <div class="row g-5 align-items-center mt-5">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-image border img-border-radius overflow-hidden">
                        <img src="./img/about5.jpg" class="img-fluid w-100" alt="Drawing">
                    </div>
                </div>
                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.3s">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Drawing</h4>
                    <p><strong>Express Creativity with Every Stroke!</strong> Develop artistic talent and sharpen focus through creative drawing techniques.</p>
                    <h6 class="mb-3"><i class="fas fa-check-circle me-2"></i>Step-by-Step Drawing Skills</h6>
                    <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Imagination Boosting Exercises</h6>
                    <h6><i class="fas fa-check-circle me-2 text-secondary"></i>Fun & Engaging Art Projects</h6>
                </div>
            </div>

            <!-- Art & Craft -->
            <div class="row g-5 align-items-center mt-5">
                <div class="col-lg-7 order-2 order-lg-1 wow fadeIn" data-wow-delay="0.1s">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Art & Craft</h4>
                    <p><strong>50% Art, 100% Creativity!</strong> A perfect blend of drawing and craft to inspire creativity and hands-on skills.</p>
                    <h6 class="mb-3"><i class="fas fa-check-circle me-2"></i>Creative Craft Projects</h6>
                    <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Imaginative Drawing Skills</h6>
                    <h6><i class="fas fa-check-circle me-2 text-secondary"></i>Fun-Filled Creative Sessions</h6>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-image border img-border-radius overflow-hidden">
                        <img src="./img/about4.jpg" class="img-fluid w-100" alt="Language Club">
                    </div>
                </div>
            </div>


            <!-- LSRW-->
            <div class="row g-5 align-items-center mt-5">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-image border img-border-radius overflow-hidden">
                        <img src="./img/about3.jpg" class="img-fluid w-100" alt="Calligraphy">
                    </div>
                </div>
                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.3s">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">LSRW</h4>
                    <p><strong>Master Communication with Confidence!</strong> Build strong Listening, Speaking, Reading, and Writing skills for success.</p>
                    <h6 class="mb-3"><i class="fas fa-check-circle me-2"></i>Interactive Learning Methods</h6>
                    <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Focus on Language Fluency</h6>
                    <h6><i class="fas fa-check-circle me-2 text-secondary"></i>Boosts Confidence in Communication</h6>
                </div>
            </div>

            <!-- Vocal -->
            <div class="row g-5 align-items-center mt-5">
                <div class="col-lg-7 order-2 order-lg-1 wow fadeIn" data-wow-delay="0.1s">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Vocal</h4>
                    <p><strong>Celebrate Multilingual Skills:</strong> Learn multiple languages while improving communication skills in a fun, interactive way.</p>
                    <h6 class="mb-3"><i class="fas fa-check-circle me-2"></i>Melodic Training</h6>
                    <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Voice Modulation</h6>
                    <h6><i class="fas fa-check-circle me-2 text-secondary"></i>Rhythm Mastery</h6>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-image border img-border-radius overflow-hidden">
                        <img src="./img/about4.jpg" class="img-fluid w-100" alt="Language Club">
                    </div>
                </div>
            </div>

            <!-- Chees -->
            <div class="row g-5 align-items-center mt-5">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-image border img-border-radius overflow-hidden">
                        <img src="./img/about5.jpg" class="img-fluid w-100" alt="Drawing">
                    </div>
                </div>
                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.3s">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Chees</h4>
                    <p><strong>Build Strategy, Focus & Patience</strong> Through chess, students develop critical thinking, problem-solving, and strategic planning skills.</p>
                    <h6 class="mb-3"><i class="fas fa-check-circle me-2"></i>Smart Moves</h6>
                    <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Brain-Boosting Challenges</h6>
                    <h6><i class="fas fa-check-circle me-2 text-secondary"></i>Winning Strategies
                    </h6>
                </div>
            </div>

        </div>
    </div>

    <!-- Program End -->


    <!-- Footer Start -->
    <?php include('./section/footer.php') ?>
    <!-- Footer End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>