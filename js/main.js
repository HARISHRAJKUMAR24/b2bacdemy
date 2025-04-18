(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner(0);


    // Initiate the wowjs
    new WOW().init();


    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });


    // Testimonial carousel

    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        center: true,
        dots: true,
        loop: true,
        margin: 50,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 2
            },
            1200: {
                items: 3
            }
        }
    });


    // Modal Video
    $(document).ready(function () {
        var $videoSrc;
        $('.btn-play').click(function () {
            $videoSrc = $(this).data("src");
        });
        console.log($videoSrc);

        $('#videoModal').on('shown.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
        })

        $('#videoModal').on('hide.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc);
        })
    });



})(jQuery);




document.getElementById("btn-student-login").addEventListener("click", function () {
    document.getElementById("student-login").classList.remove("d-none");
    document.getElementById("staff-login").classList.add("d-none");
    this.classList.add("btn-primary");
    this.classList.remove("btn-secondary");
    document.getElementById("btn-staff-login").classList.add("btn-secondary");
    document.getElementById("btn-staff-login").classList.remove("btn-primary");
});

document.getElementById("btn-staff-login").addEventListener("click", function () {
    document.getElementById("staff-login").classList.remove("d-none");
    document.getElementById("student-login").classList.add("d-none");
    this.classList.add("btn-primary");
    this.classList.remove("btn-secondary");
    document.getElementById("btn-student-login").classList.add("btn-secondary");
    document.getElementById("btn-student-login").classList.remove("btn-primary");
});


let isPopupOpen = false;

function openPopup(imageSrc) {
    if (isPopupOpen) return;
    document.getElementById("popupImage").src = imageSrc;
    const popup = document.getElementById("imagePopup");
    popup.classList.add("active");
    isPopupOpen = true;
}

function closePopup(event) {
    if (event) event.stopPropagation();
    const popup = document.getElementById("imagePopup");
    popup.classList.remove("active");
    isPopupOpen = false;
}
