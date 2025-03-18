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
            <h1 class="display-2 text-white mb-4">About Us</h1>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5 about bg-light">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="video border">
                        <button type="button" class="btn btn-play"
                            data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/Hz9WdJqlRcI"
                            data-bs-target="#videoModal">
                            <span></span>
                        </button>

                        <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.3s">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">About Us</h4>
                    <h1 class="text-dark mb-4 display-5">Welcome to B<span class="b2b_academy_name_heading">2</span>B Academy Shaping Young Minds for a Brighter Future</h1>
                    <p class="text-dark mb-2">Your Child Deserves the Best Start
                    Empowering students for over 9 years, B<span class="b2b_academy_name_para">2</span>B Academy has proudly guided more than 500+ students to academic success and personal growth. Our experienced educators are dedicated to nurturing confident, well-rounded achievers by blending strong academics with essential life skills and values. At B<span class="b2b_academy_name_para">2</span>B Academy, we believe every child deserves the best start — a journey of knowledge, confidence, and lasting success. 
                    </p>
                    <p class="text-dark mb-4">Join the B<span class="b2b_academy_name_para">2</span>B Academy family and watch your child thrive!</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Video -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Our Story -->
    <div class="container-fluid py-5 about bg-light">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 order-2 order-lg-1 wow fadeIn" data-wow-delay="0.1s">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Our Story</h4>
                    <h1 class="text-dark mb-4 display-5">Empowering Students for a Brighter Future</h1>
                    <p>B<span class="b2b_academy_name_para">2</span>B Academy was founded by passionate educators <span class="bg_style">Mr. Muthu Kumaran</span> & <span class="bg_style">Ms. Ruby</span> with a vision to empower students through knowledge, discipline, and life skills. With over 9 years of dedicated service, we have guided 500+ students to achieve academic excellence and personal growth.</p>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-image border img-border-radius overflow-hidden">
                        <img src="./img/about.jpg" class="img-fluid w-100" alt="About Our Academy">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Story End -->

    <!-- Why Choose Us Section -->
    <div class="container-fluid py-5 bg-light">
    <div class="container py-5">
        <div class="text-center wow fadeIn" data-wow-delay="0.1s">
            <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Why Choose Us?</h4>
            <h1 class="mb-5 display-4">Your Child's Future Begins Here</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="p-4 border rounded bg-white text-center">
                    <i class="fas fa-award fa-3x text-primary mb-3"></i>
                    <h5>Discipline First, Success Follows</h5>
                    <p>We teach values like punctuality, responsibility, and respect — building strong character in every student.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="p-4 border rounded bg-white text-center">
                    <i class="fas fa-brain fa-3x text-secondary mb-3"></i>
                    <h5>Learning Made Simple</h5>
                    <p>Our small-batch teaching method ensures students get personal attention, making complex subjects easier to understand.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-4 border rounded bg-white text-center">
                    <i class="fas fa-chalkboard-teacher fa-3x text-primary mb-3"></i>
                    <h5>Guided by Experts</h5>
                    <p>Our experienced educators inspire curiosity and confidence, delivering insightful lessons that leave a lasting impact.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.7s">
                <div class="p-4 border rounded bg-white text-center">
                    <i class="fas fa-graduation-cap fa-3x text-secondary mb-3"></i>
                    <h5>Proven Results Every Year</h5>
                    <p>With a 100% success record, we consistently help students achieve outstanding academic performance.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.9s">
                <div class="p-4 border rounded bg-white text-center">
                    <i class="fas fa-lightbulb fa-3x text-primary mb-3"></i>
                    <h5>Confidence Beyond Books</h5>
                    <p>We ignite creativity, leadership, and communication skills to prepare students for life’s challenges.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="1.1s">
                <div class="p-4 border rounded bg-white text-center">
                    <i class="fas fa-handshake fa-3x text-secondary mb-3"></i>
                    <h5>Empowering Bright Futures</h5>
                    <p>Our nurturing environment helps students discover their strengths and reach their fullest potential.</p>
                </div>
            </div>
        </div>
        <div class="text-center mt-5 wow fadeIn" data-wow-delay="0.3s">
            <a href="/contact" class="btn btn-primary px-5 py-3 btn-border-radius">Get a Free Demo Class</a>
        </div>
    </div>
</div>

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