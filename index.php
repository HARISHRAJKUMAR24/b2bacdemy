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


    <style>
        .modal-backdrop {
            background-color: rgba(255, 255, 255, 0.9) !important;
            /* More intense white */
            backdrop-filter: blur(10px);
            /* Increase blur for enhanced effect */
        }
    </style>
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!------------------ Navbar start ------------------>

    <?php include('./section/nav.php'); ?>

    <!------------------ Navbar End ------------------>

    <!------------------ Login Page ------------------>

    <?php include('./section/login.php') ?>

    <!------------------ Login Page End------------------>


    <!------------------ Header ------------------>
    <div class="container-fluid py-5 hero-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7 col-md-12">
                    <h2 class="mb-3 text-primary heads">The Right Education, The Right Values </h2>
                    <h1 class="mb-5 display-1 text-white"> The Academy That Transforms Future</h1>
                    <a href="" class="btn btn-primary px-4 py-3 px-md-5  me-4 btn-border-radius">Get Started</a>
                    <a href="./sfdb/sfdashboard.php" class="btn btn-primary px-4 py-3 px-md-5 btn-border-radius">Go To Dashboard</a>
                </div>
            </div>
        </div>
    </div>
    <!------------------ Header End ------------------>


    <!------------------ About Start ------------------>
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
                        At B<span class="b2b_academy_name_para">2</span>B Academy, we partner with parents to create a personalized learning experience that unlocks every child's potential. Watch your child grow with confidence, knowledge, and skills that last a lifetime.
                    </p>
                    <p class="text-dark mb-4">Join the B<span class="b2b_academy_name_para">2</span>B Academy Family Today!</p>

                    <a href="" class="btn btn-primary px-5 py-3 btn-border-radius">More Details</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Youtube Video -->
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
    <!------------------ About End ------------------>


    <!------------------ What We Do Best Start ------------------>
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">What We Do</h4>
                <h1 class="mb-5 display-3">Giving Your Child the Edge to Succeed</h1>
            </div>
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="text-center border-primary border bg-white service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-award fa-6x text-primary"></i></div>
                                <a href="#" class="h4">Instilling Discipline <br>& Confidence</a>
                                <p class="my-3">We nurture key values like discipline, punctuality, and responsibility, shaping students into future-ready achievers.</p>
                                <a href="#" class="btn btn-primary text-white px-4 py-2 my-2 btn-border-radius">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="text-center border-primary border bg-white service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-bullseye fa-6x text-primary"></i></div>
                                <a href="#" class="h4">Focused Learning for Better Results</a>
                                <p class="my-3">Our structured, small-batch teaching approach ensures focused attention, making learning easy and effective for every student.</p>
                                <a href="#" class="btn btn-primary text-white px-4 py-2 my-2 btn-border-radius">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="text-center border-primary border bg-white service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-book-reader fa-6x text-primary"></i></div>
                                <a href="#" class="h4">Expert Teachers, Exceptional Learning</a>
                                <p class="my-3">With highly experienced teachers, we provide a learning experience that is engaging, insightful, and impactful.</p>
                                <a href="#" class="btn btn-primary text-white px-4 py-2 my-2 btn-border-radius">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="text-center border-primary border bg-white service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-graduation-cap fa-6x text-primary"></i></div>
                                <a href="#" class="h4">Proven Success with Top Results</a>
                                <p class="my-3">Our commitment to excellence guarantees 100% results, helping students achieve top scores and academic success.</p>
                                <a href="#" class="btn btn-primary text-white px-4 py-2 my-2 btn-border-radius">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------------ What We Do Best End------------------>


    <!------------------ Classes Start ------------------>
    <div class="container-fluid program py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Our Classes</h4>
                <h1 class="mb-5 display-3">Shaping Your Child's Future with Classes</h1>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="program-item rounded">
                        <div class="program-img position-relative">
                            <div class="overflow-hidden img-border-radius">
                                <img src="img/program-1.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="px-4 py-2 bg-primary text-white program-rate">$60.99</div>
                        </div>
                        <div class="program-text bg-white px-4 pb-3">
                            <div class="program-text-inner">
                                <a href="./classes.php#sph" class="h4">Spoken/Written Hindi</a>
                                <p class="mt-3 mb-0">Guiding your child to read, write, and speak Hindi with confidence and accuracy.</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between px-4 py-2 bg-primary rounded-bottom">
                            <small class="text-white"><i class="fas fa-wheelchair me-1"></i> 30 Sits</small>
                            <small class="text-white"><i class="fas fa-book me-1"></i> 11 Lessons</small>
                            <small class="text-white"><i class="fas fa-clock me-1"></i> 60 Hours</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="program-item rounded">
                        <div class="program-img position-relative">
                            <div class="overflow-hidden img-border-radius">
                                <img src="img/program-2.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="px-4 py-2 bg-primary text-white program-rate">$60.99</div>
                        </div>
                        <div class="program-text bg-white px-4 pb-3">
                            <div class="program-text-inner">
                                <a href="./classes.php#calg" class="h4">Calligraphy</a>
                                <p class="mt-3 mb-0">Transforming handwriting into a creative, beautiful, and skillful art form with precision.</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between px-4 py-2 bg-primary rounded-bottom">
                            <small class="text-white"><i class="fas fa-wheelchair me-1"></i> 30 Sits</small>
                            <small class="text-white"><i class="fas fa-book me-1"></i> 11 Lessons</small>
                            <small class="text-white"><i class="fas fa-clock me-1"></i> 60 Hours</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="program-item rounded">
                        <div class="program-img position-relative">
                            <div class="overflow-hidden img-border-radius">
                                <img src="img/program-3.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="px-4 py-2 bg-primary text-white program-rate">$60.99</div>
                        </div>
                        <div class="program-text bg-white px-4 pb-3">
                            <div class="program-text-inner">
                                <a href="./classes.php#spe" class="h4">Spoken English</a>
                                <p class="mt-3 mb-0">Helping your child speak fluently, clearly, and with ease for confident communication.</p>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between px-4 py-2 bg-primary rounded-bottom">
                            <small class="text-white"><i class="fas fa-wheelchair me-1"></i> 30 Sits</small>
                            <small class="text-white"><i class="fas fa-book me-1"></i> 11 Lessons</small>
                            <small class="text-white"><i class="fas fa-clock me-1"></i> 60 Hours</small>
                        </div>
                    </div>
                </div>
                <div class="d-inline-block text-center wow fadeIn" data-wow-delay="0.1s">
                    <a href="#" class="btn btn-primary px-5 py-3 text-white btn-border-radius">Vew All Programs</a>
                </div>
            </div>
        </div>
    </div>
    <!------------------ Classes End------------------>


    <!------------------ Why Choose Us? Start ------------------>

    <div class="container-fluid py-5 about bg-light">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.3s">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Why Choose Us?</h4>
                    <h1 class="text-dark mb-4 display-5">The Right Choice for Your Child’s Success</h1>
                    <p class="text-dark mb-4">Every parent wants the best for their child. At B<span class="b2b_academy_name_para">2</span>B Academy, we don’t just teach; we inspire, empower, and transform students into confident achievers. With our specialized courses, expert faculty, and proven results, your child is set for success!</p>
                    <div class="row mb-4">
                        <div class="col-lg-6">
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2"></i>Best Hindi Coaching</h6>
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Elite Calligraphy Training</h6>
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-secondary"></i>Fluent English Mastery</h6>
                        </div>
                        <div class="col-lg-6">
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2"></i>No.1 LSRW Program</h6>
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Top Academic Results</h6>
                            <h6><i class="fas fa-check-circle me-2 text-secondary"></i>Essential Life Skills</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-image border img-border-radius overflow-hidden">
                        <img src="./img/about.jpg" class="img-fluid w-100" alt="About Our Academy">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------------ Why Choose Us? End ------------------>





    <!------------------ Hand Writting Change Proof Start ------------------>
    <!-- Image Popup Overlay -->
    <div id="imagePopup" class="popup-overlay" onclick="closePopup()">
        <div class="popup-content-wrapper">
            <span class="close-btn" onclick="closePopup(event)">&times;</span>
            <img id="popupImage" class="popup-content" src="" alt="Popup Image">
        </div>
    </div>


    <div class="container-fluid proof-section py-5 bg-light">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Success Story</h4>
                <h1 class="mb-5 display-3">Remarkable Achievement!</h1>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-image border img-border-radius overflow-hidden" onclick="openPopup('./img/hand-writting_proof-1.jpg')">
                        <img src="./img/hand-writting_proof-1.jpg" class="img-fluid w-100" alt="Student 1">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-image border img-border-radius overflow-hidden" onclick="openPopup('./img/hand-writting_proof-2.jpg')">
                        <img src="./img/hand-writting_proof-2.jpg" class="img-fluid w-100" alt="Student 2">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!------------------ Hand Writting Change Proof End ------------------>



    <!------------------ Testimonial Start ------------------>
    <div class="container-fluid testimonial py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Our Testimonials</h4>
                <h1 class="mb-5 display-3">Parents Say About Us</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.3s">
                <div class="testimonial-item img-border-radius bg-light border border-primary p-4">
                    <div class="p-4 position-relative">
                        <i class="fa fa-quote-right fa-2x text-primary position-absolute" style="top: 15px; right: 15px;"></i>
                        <div class="d-flex align-items-center">
                            <div class="border border-primary bg-white rounded-circle">
                                <img src="img/testimonial-2.jpg" class="rounded-circle p-2" style="width: 80px; height: 80px; border-style: dotted; border-color: var(--bs-primary);" alt="">
                            </div>
                            <div class="ms-4">
                                <h4 class="text-dark">Client Name</h4>
                                <p class="m-0 pb-3">Profession</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top border-primary mt-4 pt-3">
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item img-border-radius bg-light border border-primary p-4">
                    <div class="p-4 position-relative">
                        <i class="fa fa-quote-right fa-2x text-primary position-absolute" style="top: 15px; right: 15px;"></i>
                        <div class="d-flex align-items-center">
                            <div class="border border-primary bg-white rounded-circle">
                                <img src="img/testimonial-2.jpg" class="rounded-circle p-2" style="width: 80px; height: 80px; border-style: dotted; border-color: var(--bs-primary);" alt="">
                            </div>
                            <div class="ms-4">
                                <h4 class="text-dark">Client Name</h4>
                                <p class="m-0 pb-3">Profession</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top border-primary mt-4 pt-3">
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item img-border-radius bg-light border border-primary p-4">
                    <div class="p-4 position-relative">
                        <i class="fa fa-quote-right fa-2x text-primary position-absolute" style="top: 15px; right: 15px;"></i>
                        <div class="d-flex align-items-center">
                            <div class="border border-primary bg-white rounded-circle">
                                <img src="img/testimonial-2.jpg" class="rounded-circle p-2" style="width: 80px; height: 80px; border-style: dotted; border-color: var(--bs-primary);" alt="">
                            </div>
                            <div class="ms-4">
                                <h4 class="text-dark">Client Name</h4>
                                <p class="m-0 pb-3">Profession</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top border-primary mt-4 pt-3">
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------------ Testimonial End ------------------>


    <!------------------ Event Start ------------------>
    <div class="container-fluid events py-5 bg-light">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Our Events</h4>
                <h1 class="mb-5 display-3">Our Upcoming Events</h1>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="events-item bg-primary rounded">
                        <div class="events-inner position-relative">
                            <div class="events-img overflow-hidden rounded-circle position-relative">
                                <img src="img/event-1.jpg" class="img-fluid w-100 rounded-circle" alt="Image">
                                <div class="event-overlay">
                                    <a href="img/event-1.jpg" data-lightbox="event-1"><i class="fas fa-search-plus text-white fa-2x"></i></a>
                                </div>
                            </div>
                            <div class="px-4 py-2 bg-secondary text-white text-center events-rate">29 Nov</div>
                            <div class="d-flex justify-content-between px-4 py-2 bg-secondary">
                                <small class="text-white"><i class="fas fa-calendar me-1 text-primary"></i> 10:00am - 12:00pm</small>
                                <small class="text-white"><i class="fas fa-map-marker-alt me-1 text-primary"></i> New York</small>
                            </div>
                        </div>
                        <div class="events-text p-4 border border-primary bg-white border-top-0 rounded-bottom">
                            <a href="#" class="h4">Music & drawing workshop</a>
                            <p class="mb-0 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus consectetur,</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="events-item bg-primary rounded">
                        <div class="events-inner position-relative">
                            <div class="events-img overflow-hidden rounded-circle position-relative">
                                <img src="img/event-2.jpg" class="img-fluid w-100 rounded-circle" alt="Image">
                                <div class="event-overlay">
                                    <a href="img/event-3.jpg" data-lightbox="event-1"><i class="fas fa-search-plus text-white fa-2x"></i></a>
                                </div>
                            </div>
                            <div class="px-4 py-2 bg-secondary text-white text-center events-rate">29 Nov</div>
                            <div class="d-flex justify-content-between px-4 py-2 bg-secondary">
                                <small class="text-white"><i class="fas fa-calendar me-1 text-primary"></i> 10:00am - 12:00pm</small>
                                <small class="text-white"><i class="fas fa-map-marker-alt me-1 text-primary"></i> New York</small>
                            </div>
                        </div>
                        <div class="events-text p-4 border border-primary bg-white border-top-0 rounded-bottom">
                            <a href="#" class="h4">Why need study</a>
                            <p class="mb-0 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus consectetur,</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="events-item bg-primary rounded">
                        <div class="events-inner position-relative">
                            <div class="events-img overflow-hidden rounded-circle position-relative">
                                <img src="img/event-3.jpg" class="img-fluid w-100 rounded-circle" alt="Image">
                                <div class="event-overlay">
                                    <a href="img/event-3.jpg" data-lightbox="event-1"><i class="fas fa-search-plus text-white fa-2x"></i></a>
                                </div>
                            </div>
                            <div class="px-4 py-2 bg-secondary text-white text-center events-rate">29 Nov</div>
                            <div class="d-flex justify-content-between px-4 py-2 bg-secondary">
                                <small class="text-white"><i class="fas fa-calendar me-1 text-primary"></i> 10:00am - 12:00pm</small>
                                <small class="text-white"><i class="fas fa-map-marker-alt me-1 text-primary"></i> New York</small>
                            </div>
                        </div>
                        <div class="events-text p-4 border border-primary bg-white border-top-0 rounded-bottom">
                            <a href="#" class="h4">Child health consciousness</a>
                            <p class="mb-0 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus consectetur,</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------------ Event End ------------------>

    <!------------------ Certificate Section Start ------------------>
    <div class="container-fluid certificate-section py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Certificate of Appreciation</h4>
                <h1 class="mb-5 display-3">We Recognize Every Achievement!</h1>
                <p class="text-muted">Celebrating the dedication and success of our students through events, competitions, and skill development programs.</p>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-md-6 col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="image-container border border-primary img-border-radius overflow-hidden">
                        <img src="./img/program-1.jpg" class="img-fluid w-100" alt="Event Certificate">
                    </div>
                    <h4 class="text-primary text-center mt-3">Spoken English Workshop</h4>
                    <p class="text-muted text-center">Successfully conducted with enthusiastic student participation</p>
                </div>
                <div class="col-md-6 col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="image-container border border-primary img-border-radius overflow-hidden">
                        <img src="./img/program-2.jpg" class="img-fluid w-100" alt="Event Certificate">
                    </div>
                    <h4 class="text-primary text-center mt-3">Cybersecurity Awareness Camp</h4>
                    <p class="text-muted text-center">Empowering students with safety skills online</p>
                </div>
            </div>
        </div>
    </div>
    <!------------------ Certificate Section End  ------------------>

    <!------------------ Our Gallery Start ------------------>
    <div class="container-fluid gallery bg-light py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Our Gallery</h4>
                <h1 class="mb-5 display-3">Memorable Moments at Our Academy</h1>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="gallery-item border border-primary img-border-radius overflow-hidden">
                        <img src="./img/galary-1.jpg" class="img-fluid w-100" alt="Academy Event 1">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="gallery-item border border-primary img-border-radius overflow-hidden">
                        <img src="./img/galary-2.jpg" class="img-fluid w-100" alt="Academy Event 2">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="gallery-item border border-primary img-border-radius overflow-hidden">
                        <img src="./img/galary-3.jpg" class="img-fluid w-100" alt="Academy Event 3">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="gallery-item border border-primary img-border-radius overflow-hidden">
                        <img src="./img/galary-4.jpg" class="img-fluid w-100" alt="Academy Event 4">
                    </div>
                </div>
            </div>
            <div class="text-center mt-5 wow fadeIn" data-wow-delay="0.9s">
                <a href="" class="btn btn-primary px-5 py-3 btn-border-radius">More Details</a>
            </div>
        </div>
    </div>
    <!------------------ Our Gallery End ------------------>

    <!------------------ Blog Start ----------------
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Latest News & Blog</h4>
                <h1 class="mb-5 display-3">Read Our Latest News & Blog</h1>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="blog-item rounded-bottom">
                        <div class="blog-img overflow-hidden position-relative img-border-radius">
                            <img src="img/blog-1.jpg" class="img-fluid w-100" alt="Image">
                        </div>
                        <div class="d-flex justify-content-between px-4 py-3 bg-light border-bottom border-primary blog-date-comments">
                            <small class="text-dark"><i class="fas fa-calendar me-1 text-dark"></i> 29 Nov 2023</small>
                            <small class="text-dark"><i class="fas fa-comment-alt me-1 text-dark"></i> Comments (15)</small>
                        </div>
                        <div class="blog-content d-flex align-items-center px-4 py-3 bg-light">
                            <div class="overflow-hidden rounded-circle rounded-top border border-primary">
                                <img src="img/program-teacher.jpg" class="img-fluid rounded-circle p-2 rounded-top" alt="Image" style="width: 70px; height: 70px; border-style: dotted; border-color: var(--bs-primary) !important;">
                            </div>
                            <div class="ms-3">
                                <h6 class="text-primary">Mary Mordern</h6>
                                <p class="text-muted">Baby Care</p>
                            </div>
                        </div>
                        <div class="px-4 pb-4 bg-light rounded-bottom">
                            <div class="blog-text-inner">
                                <a href="#" class="h4">How to pay attention to your child?</a>
                                <p class="mt-3 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus</p>
                            </div>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary text-white px-4 py-2 mb-3 btn-border-radius">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="blog-item rounded-bottom">
                        <div class="blog-img overflow-hidden position-relative img-border-radius">
                            <img src="img/blog-2.jpg" class="img-fluid w-100" alt="Image">
                        </div>
                        <div class="d-flex justify-content-between px-4 py-3 bg-light border-bottom border-primary blog-date-comments">
                            <small class="text-dark"><i class="fas fa-calendar me-1 text-dark"></i> 29 Nov 2023</small>
                            <small class="text-dark"><i class="fas fa-comment-alt me-1 text-dark"></i> Comments (15)</small>
                        </div>
                        <div class="blog-content d-flex align-items-center px-4 py-3 bg-light">
                            <div class="overflow-hidden rounded-circle rounded-top border border-primary">
                                <img src="img/program-teacher.jpg" class="img-fluid rounded-circle p-2 rounded-top" alt="" style="width: 70px; height: 70px; border-style: dotted; border-color: var(--bs-primary) !important;">
                            </div>
                            <div class="ms-3">
                                <h6 class="text-primary">Mary Mordern</h6>
                                <p class="text-muted">Baby Care</p>
                            </div>
                        </div>
                        <div class="px-4 pb-4 bg-light rounded-bottom">
                            <div class="blog-text-inner">
                                <a href="#" class="h4">Play outdoor sports with your child</a>
                                <p class="mt-3 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus</p>
                            </div>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary text-white px-4 py-2 mb-3 btn-border-radius">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="blog-item rounded-bottom">
                        <div class="blog-img overflow-hidden position-relative img-border-radius">
                            <img src="img/blog-3.jpg" class="img-fluid w-100" alt="Image">
                        </div>
                        <div class="d-flex justify-content-between px-4 py-3 bg-light border-bottom border-primary blog-date-comments">
                            <small class="text-dark"><i class="fas fa-calendar me-1 text-dark"></i> 29 Nov 2023</small>
                            <small class="text-dark"><i class="fas fa-comment-alt me-1 text-dark"></i> Comments (15)</small>
                        </div>
                        <div class="blog-content d-flex align-items-center px-4 py-3 bg-light">
                            <div class="overflow-hidden rounded-circle rounded-top border border-primary">
                                <img src="img/program-teacher.jpg" class="img-fluid rounded-circle p-2 rounded-top" alt="" style="width: 70px; height: 70px; border-style: dotted; border-color: var(--bs-primary) !important;">
                            </div>
                            <div class="ms-3">
                                <h6 class="text-primary">Mary Mordern</h6>
                                <p class="text-muted">Baby Care</p>
                            </div>
                        </div>
                        <div class="px-4 pb-4 bg-light rounded-bottom">
                            <div class="blog-text-inner">
                                <a href="#" class="h4">How to make time for your kids?</a>
                                <p class="mt-3 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus</p>
                            </div>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary text-white px-4 py-2 mb-3 btn-border-radius">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   ---------------- Blog End ------------------>


    <!------------------ Footer Start ------------------>
    <?php include('./section/footer.php') ?>
    <!------------------ Footer End ------------------>


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