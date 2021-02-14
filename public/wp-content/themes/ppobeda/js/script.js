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
                    stagePadding: 15,
                },
                576: {
                    items: 3,
                    loop: true,
                },
                768: {
                    items: 3,
                    loop: true,
                    margin: 30,
                },
                992: {
                    items: 4,
                    loop: true,
                },
                1140: {
                    items: 6,
                    loop: true,
                    margin: 15,
                }
            }
        });
    });
})(jQuery)