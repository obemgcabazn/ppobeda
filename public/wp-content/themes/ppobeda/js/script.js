;(function ($) {
    $(function () {
        // $('#accordion').collapse({
        //   toggle: false
        // });
        $(".owl-carousel").owlCarousel({
            margin: 45,
            responsive: {
                0: {
                    items: 2,
                    loop: true,
                    margin: 15,
                    stagePadding: 40,
                    center: true,
                },
                576: {
                    items: 3,
                    loop: true,
                    stagePadding: 50,
                    center: true,
                },
                768: {
                    items: 3,
                    loop: true,
                    margin: 30,
                    stagePadding: 70,
                },
                992: {
                    items: 4,
                    loop: true,
                },
                1140: {
                    items: 5,
                    loop: true,
                }
            }
        });
    });
})(jQuery)