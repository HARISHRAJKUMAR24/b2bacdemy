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
        .row {
            margin-left: 0;
            margin-right: 0;
        }
    </style>

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

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4">Contact Us</h1>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Information Start -->
    <div class="container py-5 bg">
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="bg-light p-4 rounded shadow">
                    <h4 class="text-primary mb-4">Get in Touch</h4>

                    <!-- Address -->
                    <p>
                        <i class="fas fa-map-marker-alt me-2"></i>
                        237, 3rd St, Natarajapuram South, Thulajapuram Colony, Ramani Nagar, Thanjavur, Tamil Nadu 613007
                    </p>

                    <!-- Phone Numbers with Correct Alignment -->
                    <div class="d-flex align-items-start">
    <i class="fas fa-phone-alt mt-1 me-2 text-primary"></i>
    <div>
        <a href="tel:+919994564528" class="text-dark fw-bold d-block">+91 99945 64528</a>
        <a href="tel:+917708199587" class="text-dark fw-bold">+91 7708 199 587</a>
    </div>
</div>


                    <!-- Email -->
                    <p class="mt-3">
                        <i class="fas fa-envelope me-2"></i>
                        <a href="mailto:contact@academy.com" class="text-dark fw-bold">contact@academy.com</a>
                    </p>

                    <!-- Google Map -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.570413480858!2d79.1144928!3d10.7675536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baab92023b523db%3A0x1c93e0f83a48c0e!2sB2B%20Academy!5e0!3m2!1sen!2sin!4v1742029324148!5m2!1sen!2sin"
                        width="100%"
                        height="300"
                        style="border:0; border-radius:10px;"
                        allowfullscreen=""
                        loading="lazy">
                    </iframe>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="bg-light p-4 rounded shadow">
                    <h4 class="text-primary mb-4">Send Us a Message</h4>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Your Email" required>
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="Subject" required>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Information End -->

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