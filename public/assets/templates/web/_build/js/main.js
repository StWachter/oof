$(document).ready(function() {


    // * * * * * * * * * * * * * * * * * * * * * * * * *
    // * teleport links
    // *
    // * @set outer parent element class: js-href-teleport-wrapper
    // * @set link (<a> tag) element class: js-href-teleport-link
    // * @set element to add the link to class: js-href-teleport
    // *
    // * This adds a link tag (<a>) to other elements within a wrapper
    // * links comes from a link. Example: add a link to h2, image etc. inside a teaser
    // *
    $(".js-href-teleport").each(function(){
        var $link = $(this).parents(".js-href-teleport-wrapper").find(".js-href-teleport-link"),
            href = $link.attr("href"),
            target = $link.attr("target") ? $link.attr("target") : '_self';

        if (href) {
            $(this).wrapInner('<a href="' + href + '" target="' + target + '"></a>');
        }
    });



    // * * * * * * * * * * * * * * * * * * * * * * * * *
    // * parent clickable elements (excludes links inside)
    // *
    // * @set outer parent element class: js-click-item-parent
    // * @set link (<a> tag) element class: js-click-item-link
    // *
    // * This makes the whole element clickable and still
    // * makes other links inside clickable with their target
    // *
    $(".js-click-item-parent").delegate('a', 'click', function(e){
		var target = $(this).attr("target"),
			url = $(this).attr("href");

		if (target == "_blank") {
			window.open(url);
		}else {
			window.location = url;
		}
        return false;
    }).click(function(){
		var target = $(this).find("a.js-click-item-link").attr("target"),
			url = $(this).find("a.js-click-item-link").attr("href");

		if (target == "_blank") {
			window.open(url);
		}else {
			window.location = url;
		}
        return false;
    });​



    // * * * * * * * * * * * * * * * * * * * * * * * * *
    // * Scroll-To
    // *
    // * Smooth-Scroll to targets on page
    // *
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                scrollTo(target);
            return false;
            }
        }
    });

    function scrollTo(element) {
        $('html, body').animate({
            scrollTop: element.offset().top - 100
        }, 1000);
    }



    // * * * * * * * * * * * * * * * * * * * * * * * * *
	// * cookie-message
	// *
	// *
	var cookieMessage = Cookies.get('cookie-message');

	$(".js-cookie-message-btn").click(function(){
		$(this).parents(".js-cookie-message").fadeOut();
		Cookies.set('cookie-message', '1', { expires: 365 });
	});

	if (!cookieMessage) {
		$(".js-cookie-message").show();
	}


    // * * * * * * * * * * * * * * * * * * * * * * * * *
    // * animateIn
    // *
    // *
    var offset = 0; // Distance from Browserbottom where the animation should start

    function fadeInElements(){
        var viewPort = $(window).scrollTop() + $(window).height();

        $(".animateIn:visible").each(function(){
            var elementTop = $(this).offset().top;

            if ((elementTop + offset) <= viewPort) {
                var delay = $(this).data("animation-delay");
                $(this).css("transition-delay", delay + "s").addClass("animateIn--active");
            }
        });
    }

    $(window).scroll(function() {
        fadeInElements();
    });

    fadeInElements();


    // * * * * * * * * * * * * * * * * * * * * * * * * *
    // * add target blank to external links
    // *
    // *
    $('a:not([data-targetblank=ignore])').each(function() {
        if(location.hostname === this.hostname || !this.hostname.length) {
            // ... do nothing?
        }else {
            $(this).attr('target','_blank');
        }
    });



    // * * * * * * * * * * * * * * * * * * * * * * * * *
    // * mobileNavigation
    // *
    // *
    $(".js-nav-mobile-button").click(function(){
        $(".js-nav-mobile-button").toggleClass("active");
        $(".js-nav-mobile").toggleClass("active");
        $(".js-nav-splash").toggleClass("active");
        $('html, body').toggleClass('freeze');
    });



    // * * * * * * * * * * * * * * * * * * * * * * * * *
    // * increment input
    // *
    // *

    $(".js-increment-plus").click(function(){
        var oldVal = $(this).parents(".js-increment-wrapper").find(".js-increment-counter").val();
        var newVal = parseFloat(oldVal) + 1;
        $(this).parents(".js-increment-wrapper").find(".js-increment-counter").val(newVal);
    });

    $(".js-increment-minus").click(function(){
        var oldVal = $(this).parents(".js-increment-wrapper").find(".js-increment-counter").val();
        if (oldVal > 1) {
            var newVal = parseFloat(oldVal) - 1;
        } else {
            newVal = 1;
        }
        $(this).parents(".js-increment-wrapper").find(".js-increment-counter").val(newVal);
    });


    // * * * * * * * * * * * * * * * * * * * * * * * * *
    // * Fancybox
    // *
    // *

    $('[data-fancybox="gallery"]').fancybox({
        buttons: [
            "close"
        ]
    });



    // * * * * * * * * * * * * * * * * * * * * * * * * *
    // * filter products
    // *
    // *
    if ($(".js-filter-elements").length) {

        var initialFilter = '.all';
        var hash = window.location.hash.replace(/^#/g, '');

        if (hash) {
            initialFilter = '.' + hash;
        }

        var mixer = mixitup('.js-filter-elements', {
            selectors: {
                target: '.js-filter-element'
            },
            load: {
                filter: initialFilter
            }
        });
    }


});

// * * * * * * * * * * * * * * * * * * * * * * * * *
// * bookingButton: add Class to header if window scrolls up or down
// *
// *
var position = $(window).scrollTop(),
    $header = $(".js-header");

$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if(scroll > position) {
        //scroll down
        $header.addClass("scroll-down").removeClass("scroll-up");
        // setTimeout(function() {
        //     $header.addClass("scroll-up").removeClass("scroll-down");
        // }, 2000);
    } else {
        // scroll up
        $header.addClass("scroll-up").removeClass("scroll-down");
    }

    position = scroll;
});


$(window).on("load", function (e) {
    // * * * * * * * * * * * * * * * * * * * * * * * * *
    // * startTeaser
    // *
    // *
    $('.js-portfolio').masonry({
        itemSelector: '.js-portfolio-item',
        columnWidth: '.js-portfolio-item',
        gutter: 80,
    });

});
