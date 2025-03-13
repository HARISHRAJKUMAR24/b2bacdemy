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
                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.3s">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">About Us</h4>
                    <h1 class="text-dark mb-4 display-5">We Learn Smart Way To Build Bright Futute For Your Children</h1>
                    <p class="text-dark mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </p>
                    <div class="row mb-4">
                        <div class="col-lg-6">
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2"></i>Sport Activites</h6>
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Outdoor Games</h6>
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-secondary"></i>Nutritious Foods</h6>
                        </div>
                        <div class="col-lg-6">
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2"></i>Highly Secured</h6>
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Friendly Environment</h6>
                            <h6><i class="fas fa-check-circle me-2 text-secondary"></i>Qualified Teacher</h6>
                        </div>
                    </div>
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
                    <p>Our academy started with a vision to provide quality education and holistic development for every student...</p>
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
                        <i class="fas fa-chalkboard-teacher fa-3x text-primary mb-3"></i>
                        <h5>Experienced Teachers</h5>
                        <p>Our dedicated educators bring years of experience and passion to nurture every child's potential.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="p-4 border rounded bg-white text-center">
                        <i class="fas fa-user-graduate fa-3x text-secondary mb-3"></i>
                        <h5>Proven Success Rates</h5>
                        <p>We pride ourselves on producing top achievers with excellent academic performance.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-4 border rounded bg-white text-center">
                        <i class="fas fa-child fa-3x text-primary mb-3"></i>
                        <h5>Personalized Learning Plans</h5>
                        <p>Tailored study methods to match individual learning styles for better results.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.7s">
                    <div class="p-4 border rounded bg-white text-center">
                        <i class="fas fa-shield-alt fa-3x text-secondary mb-3"></i>
                        <h5>Safe Learning Environment</h5>
                        <p>Our secure campus ensures your child's well-being and comfort at all times.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.9s">
                    <div class="p-4 border rounded bg-white text-center">
                        <i class="fas fa-medal fa-3x text-primary mb-3"></i>
                        <h5>Outstanding Achievements</h5>
                        <p>Our students regularly win competitions, awards, and academic distinctions.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="1.1s">
                    <div class="p-4 border rounded bg-white text-center">
                        <i class="fas fa-comments fa-3x text-secondary mb-3"></i>
                        <h5>Strong Parent Communication</h5>
                        <p>We provide regular updates on your child's progress to keep you informed.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5 wow fadeIn" data-wow-delay="0.3s">
                <a href="/contact" class="btn btn-primary px-5 py-3 btn-border-radius">Get a Free Demo Class</a>
            </div>
        </div>
    </div>


    <!-- Meet Our Team Section 
        <div class="row g-5 align-items-center mt-5">
            <div class="col-12 text-center wow fadeIn" data-wow-delay="0.1s">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Meet Our Team</h4>
            </div>
            <div class="col-lg-4 text-center wow fadeIn" data-wow-delay="0.1s">
                <img src="img/team-1.jpg" class="img-fluid rounded-circle w-50 mb-3" alt="Teacher 1">
                <h5>John Doe</h5>
                <p>Mathematics Expert</p>
            </div>
            <div class="col-lg-4 text-center wow fadeIn" data-wow-delay="0.3s">
                <img src="img/team-2.jpg" class="img-fluid rounded-circle w-50 mb-3" alt="Teacher 2">
                <h5>Jane Smith</h5>
                <p>Science Specialist</p>
            </div>
            <div class="col-lg-4 text-center wow fadeIn" data-wow-delay="0.5s">
                <img src="img/team-3.jpg" class="img-fluid rounded-circle w-50 mb-3" alt="Teacher 3">
                <h5>Michael Brown</h5>
                <p>English Language Coach</p>
            </div>
        </div>-->

    <!-- Success Stories Section -->
    <div class="text-center mt-5  wow fadeIn" data-wow-delay="0.1s">
        <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Success Stories</h4>
        <p>Our students have achieved outstanding results, earning scholarships, excelling in competitions, and securing top scores in board exams.</p>
    </div>



    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="footer-item">
                        <h2 class="fw-bold mb-3"><span class="text-primary mb-0">Baby</span><span class="text-secondary">Care</span></h2>
                        <p class="mb-4">There cursus massa at urnaaculis estieSed aliquamellus vitae ultrs condmentum leo massamollis its estiegittis miristum.</p>
                        <div class="border border-primary p-3 rounded bg-light">
                            <h5 class="mb-3">Newsletter</h5>
                            <div class="position-relative mx-auto border border-primary rounded" style="max-width: 400px;">
                                <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                                <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2 text-white">SignUp</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="footer-item">
                        <div class="d-flex flex-column p-4 ps-5 text-dark border border-primary"
                            style="border-radius: 50% 20% / 10% 40%;">
                            <p>Monday: 8am to 5pm</p>
                            <p>Tuesday: 8am to 5pm</p>
                            <p>Wednes: 8am to 5pm</p>
                            <p>Thursday: 8am to 5pm</p>
                            <p>Friday: 8am to 5pm</p>
                            <p>Saturday: 8am to 5pm</p>
                            <p class="mb-0">Sunday: Closed</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="footer-item">
                        <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">LOCATION</h4>
                        <div class="d-flex flex-column align-items-start">
                            <a href="" class="text-body mb-4"><i class="fa fa-map-marker-alt text-primary me-2"></i> 104 North tower New York, USA</a>
                            <a href="" class="text-start rounded-0 text-body mb-4"><i class="fa fa-phone-alt text-primary me-2"></i> (+012) 3456 7890 123</a>
                            <a href="" class="text-start rounded-0 text-body mb-4"><i class="fas fa-envelope text-primary me-2"></i> exampleemail@gmail.com</a>
                            <a href="" class="text-start rounded-0 text-body mb-4"><i class="fa fa-clock text-primary me-2"></i> 26/7 Hours Service</a>
                            <div class="footer-icon d-flex">
                                <a class="btn btn-primary btn-sm-square me-3 rounded-circle text-white" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square me-3 rounded-circle text-white" href=""><i class="fab fa-twitter"></i></a>
                                <a href="#" class="btn btn-primary btn-sm-square me-3 rounded-circle text-white"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="btn btn-primary btn-sm-square rounded-circle text-white"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="footer-item">
                        <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">OUR GALLARY</h4>
                        <div class="row g-3">
                            <div class="col-4">
                                <div class="footer-galary-img rounded-circle border border-primary">
                                    <img src="img/galary-1.jpg" class="img-fluid rounded-circle p-2" alt="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="footer-galary-img rounded-circle border border-primary">
                                    <img src="img/galary-2.jpg" class="img-fluid rounded-circle p-2" alt="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="footer-galary-img rounded-circle border border-primary">
                                    <img src="img/galary-3.jpg" class="img-fluid rounded-circle p-2" alt="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="footer-galary-img rounded-circle border border-primary">
                                    <img src="img/galary-4.jpg" class="img-fluid rounded-circle p-2" alt="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="footer-galary-img rounded-circle border border-primary">
                                    <img src="img/galary-5.jpg" class="img-fluid rounded-circle p-2" alt="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="footer-galary-img rounded-circle border border-primary">
                                    <img src="img/galary-6.jpg" class="img-fluid rounded-circle p-2" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                </div>
                <div class="col-md-6 my-auto text-center text-md-end text-white">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a clas="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


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