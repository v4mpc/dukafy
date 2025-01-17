/* -------------------------------------------

Name: 		App Showcase
Author:		Nazar Miller (millerDigitalDesign)
Portfolio:  https://themeforest.net/user/millerdigitaldesign/portfolio?ref=MillerDigitalDesign

p.s. I am available for Freelance hire (UI design, web development). mail: miller.themes@gmail.com

------------------------------------------- */

//color switcher
$(document).ready(function () {
    // Color switcher
    $('.cog').on('click', function () {
        $('#color-sw').toggleClass('active-switcher');
    });


    $('#quaterly').click(function () {
        $('.per-month-a').html('<p class="bold price">TZS <span>25,000</span>/Month</p><p style="font-size: 14px;" class="text-muted">(TZS 75,000 Billed quaterly)</p>');
        $('.per-month-b').html('<p class="bold price">TZS <span>35,000</span>/Month</p><p style="font-size: 14px;" class="text-muted">(TZS 105,000 Billed quaterly)</p>');
        $('.per-month-c').html('<p class="bold price">TZS <span>55,000</span>/Month</p><p style="font-size: 14px;" class="text-muted">(TZS ' + calculate_total_price(55000, 3) + ' Billed quaterly)</p>');
        $('.per-month-d').html('<p class="bold price">TZS <span>105,000</span>/Month</p><p style="font-size: 14px;" class="text-muted">(TZS ' + calculate_total_price(105000, 3) + ' Billed quaterly)</p>');


    });


    $('#yearly').click(function () {
        $('.per-month-a').html('<p class="bold price">TZS <span>19,000</span>/Month</p><p style="font-size: 14px;" class="text-muted">(TZS ' + calculate_total_price(19000, 12) + ' Billed yearly)</p>');
        $('.per-month-b').html('<p class="bold price">TZS <span>29,000</span>/Month</p><p style="font-size: 14px;" class="text-muted">(TZS ' + calculate_total_price(29000, 12) + ' Billed yearly)</p>');
        $('.per-month-c').html('<p class="bold price">TZS <span>49,000</span>/Month</p><p style="font-size: 14px;" class="text-muted">(TZS ' + calculate_total_price(49000, 12) + ' Billed yearly)</p>');
        $('.per-month-d').html('<p class="bold price">TZS <span>99,000</span>/Month</p><p style="font-size: 14px;" class="text-muted">(TZS ' + calculate_total_price(99000, 12) + ' Billed yearly)</p>');


    });




    //packages js
    $('.plan-A').change(function () {
        if (this.value == 1) {

            $('.total-A').html("Total TZS <span>" + calculate_total_price(19000, 1) + "</span>");
            $('.detail-A').html('<li>Up to 50 Products</li> <li>Free Domain</li><li>Free Hosting</li><li>Mobile App Uploads</li><li>Different Templates</li> ');
        } else if (this.value == 2) {
            $('.per-month-a').html('<p class="bold price">TZS <span>25,000</span>/Month</p>');
            $('.total-A').html("Total TZS <span>" + calculate_total_price(25000, 3) + "</span>");
            $('.detail-A').html('<li>Up to 50 Products</li> <li>Free Domain</li><li>Free Hosting</li><li>Mobile App Uploads</li><li>Different Templates</li> ');

        } else if (this.value == 3) {
            $('.total-A').html("Total TZS <span>" + calculate_total_price(19000, 6) + "</span>");
            $('.detail-A').html('<li>Up to 50 Products</li> <li>Free Domain</li><li>Free Hosting</li><li>Mobile App Uploads</li><li>Different Templates</li> <li>1 Month Free</li>');

        } else if (this.value == 4) {
            $('.total-A').html("Total TZS <span>" + calculate_total_price(19000, 12) + "</span>");
            $('.detail-A').html('<li>Up to 50 Products</li> <li>Free Domain</li><li>Free Hosting</li><li>Mobile App Uploads</li><li>Different Templates</li> ');
            $('.per-month-a').html('<p class="bold price">TZS <span>19,000</span>/Month</p>');

        }
    });

    $('.plan-B').change(function () {
        if (this.value == 1) {

            $('.total-B').html("Total TZS <span>" + calculate_total_price(29000, 1) + "</span>");
            $('.detail-B').html('<li>Up to 400 Products</li> <li>Free Domain</li><li>Free Hosting</li><li>Mobile App Uploads</li><li>Different Templates</li> ');
        } else if (this.value == 2) {
            $('.per-month-b').html('<p class="bold price">TZS <span>35,000</span>/Month</p>');
            $('.total-B').html("Total TZS <span>" + calculate_total_price(35000, 3) + "</span>");
            $('.detail-B').html('<li>Up to 400 Products</li> <li>Free Domain</li><li>Free Hosting</li><li>Mobile App Uploads</li><li>Different Templates</li> ');

        } else if (this.value == 3) {
            $('.total-B').html("Total TZS <span>" + calculate_total_price(29000, 6) + "</span>");
            $('.detail-B').html('<li>Up to 400 Products</li> <li>Free Domain</li><li>Free Hosting</li><li>Mobile App Uploads</li><li>Different Templates</li> <li>1 Month Free</li>');

        } else if (this.value == 4) {
            $('.total-B').html("Total TZS <span>" + calculate_total_price(29000, 12) + "</span>");
            $('.detail-B').html('<li>Up to 400 Products</li> <li>Free Domain</li><li>Free Hosting</li><li>Mobile App Uploads</li><li>Different Templates</li>');
            $('.per-month-b').html('<p class="bold price">TZS <span>29,000</span>/Month</p>');
        }
    });


    $('.plan-C').change(function () {
        if (this.value == 1) {
            $('.total-C').html("Total TZS <span>" + calculate_total_price(49000, 1) + "</span>");
            $('.detail-C').html('<li>Up to 1000 Products</li> <li>Free Domain</li><li>Free Hosting</li><li>Mobile App Uploads</li><li>Different Templates</li> ');
            $('.per-month-a').html('<p class="bold price">TZS <span>49,000</span>/Month</p>');
        } else if (this.value == 2) {
            $('.total-C').html("Total TZS <span>" + calculate_total_price(55000, 3) + "</span>");
            $('.detail-C').html('<li>Up to 1000 Products</li> <li>Free Domain</li><li>Free Hosting</li><li>Mobile App Uploads</li><li>Different Templates</li> ');
            $('.per-month-c').html('<p class="bold price">TZS <span>55,000</span>/Month</p>');

        } else if (this.value == 3) {
            $('.total-C').html("Total TZS <span>" + calculate_total_price(49000, 6) + "</span>");
            $('.detail-C').html('<li>Up to 1000 Products</li> <li>Free Domain</li><li>Free Hosting</li><li>Mobile App Uploads</li><li>Different Templates</li> <li>1 Month Free</li>');

        } else if (this.value == 4) {
            $('.total-C').html("Total TZS <span>" + calculate_total_price(49000, 12) + "</span>");
            $('.detail-C').html('<li>Up to 1000 Products</li> <li>Free Domain</li><li>Free Hosting</li><li>Mobile App Uploads</li><li>Different Templates</li> ');
            $('.per-month-c').html('<p class="bold price">TZS <span>49,000</span>/Month</p>');
        }
    });






    $('.plan-D').change(function () {
        if (this.value == 1) {
            $('.total-D').html("Total TZS <span>" + calculate_total_price(99000, 1) + "</span>");
            $('.detail-D').html('<li>Unlimited Products</li> <li>Free Domain</li><li>Free Hosting</li><li>Mobile App Uploads</li><li>Different Templates</li> ');
        } else if (this.value == 2) {
            $('.total-D').html("Total TZS <span>" + calculate_total_price(105000, 3) + "</span>");
            $('.detail-D').html('<li>Unlimited Products</li> <li>Free Domain</li><li>Free Hosting</li><li>Mobile App Uploads</li><li>Different Templates</li> ');
            $('.per-month-d').html('<p class="bold price">TZS <span>105,000</span>/Month</p>');

        } else if (this.value == 3) {
            $('.total-D').html("Total TZS <span>" + calculate_total_price(99000, 6) + "</span>");
            $('.detail-D').html('<li>Unlimited Products</li> <li>Free Domain</li><li>Free Hosting</li><li>Mobile App Uploads</li><li>Different Templates</li> <li>1 Month Free</li>');

        } else if (this.value == 4) {
            $('.total-D').html("Total TZS <span>" + calculate_total_price(99000, 12) + "</span>");
            $('.detail-D').html('<li>Unlimited Products</li> <li>Free Domain</li><li>Free Hosting</li><li>Mobile App Uploads</li><li>Different Templates</li> ');
            $('.per-month-d').html('<p class="bold price">TZS <span>99,000</span>/Month</p>');
        }
    });

    function calculate_total_price(price, duration) {

        return addCommas(price * duration);
    }

    function addCommas(nStr) {
        nStr += '';
        var x = nStr.split('.');
        var x1 = x[0];
        var x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        return x1 + x2;
    }
});

(function ($j) {
    switch_style = {
        onReady: function () {
            this.switch_style_click();
        },
        switch_style_click: function () {
            $(".box").click(function () {
                var id = $(this).attr("id");

                $("#switch_style").attr("href", "css/color-theme/" + id + ".css");
            });
        },
    };
    $j().ready(function () {
        switch_style.onReady();
    });

})(jQuery);

$(function () {

    "use strict";

    //preloader
    $(window).on('load', function () {
        $(".status").fadeOut();
        $(".preloader").delay(500).fadeOut("slow");
    })

    //navigation scrollspy
    var lastId,
        topMenu = $("#navigation"),
        topMenuHeight = topMenu.outerHeight() - 0,
        menuItems = topMenu.find("a"),
        scrollItems = menuItems.map(function () {
            var item = $($(this).attr("href"));
            if (item.length) {
                return item;
            }
        });

    //scrollspy smooth scroll 
    menuItems.on("click", function (e) {
        var href = $(this).attr("href"),
            offsetTop = href === "#" ? 0 : $(href).offset().top - topMenuHeight + 1;
        //default speed: 1200
        $('html, body').stop().animate({
            scrollTop: offsetTop
        }, 1200);
        e.preventDefault();
    });


    //Active nav link
    $(window).on("scroll", function () {
        var fromTop = $(this).scrollTop() + topMenuHeight;
        var cur = scrollItems.map(function () {
            if ($(this).offset().top < fromTop)
                return this;
        });
        cur = cur[cur.length - 1];
        var id = cur && cur.length ? cur[0].id : "";
        if (lastId !== id) {
            lastId = id;
            menuItems
                .parent().removeClass("active")
                .end().filter("[href='#" + id + "']").parent().addClass("active");
        }

        //navbar color after scroll
        var scroll = $(window).scrollTop();

        if (scroll >= 60) {
            $(".navbar").addClass("bg-scroll");
        } else {
            $(".navbar").removeClass("bg-scroll");
        }
    });

    // Testimonials slider
    $("#owl").owlCarousel({
        nav: true,
        loop: true,
        dots: false,
        navSpeed: 1000,
        navContainer: '.nav-container',
        navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            }
        }

    });

    // brands slider
    $('.brands-slider').owlCarousel({
        loop: true,
        nav: true,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplaySpeed: 2000,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });

    // close popup
    $(".popup").on('click', function () {
        $(".popup").removeClass("active-popup");
        $(".popup").addClass("n-active-popup");
    });



})(jQuery);
