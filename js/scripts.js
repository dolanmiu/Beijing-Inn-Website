jQuery(document).ready(function($) {


    $(window).stellar();
    //$("html").niceScroll();
    //initJarallax();
    getPictureURLs();


    var links = $('.navigation').find('li');
    slide = $('.slide');
    button = $('.button');
    mywindow = $(window);
    htmlbody = $('html,body');

    slide.waypoint(function(event, direction) {

        dataslide = $(this).attr('data-slide');

        if (direction === 'down') {
            $('.navigation li[data-slide="' + dataslide + '"]').addClass('active').prev().removeClass('active');
        } else {
            $('.navigation li[data-slide="' + dataslide + '"]').addClass('active').next().removeClass('active');
        }

    });

    mywindow.scroll(function() {
        if (mywindow.scrollTop() == 0) {
            $('.navigation li[data-slide="1"]').addClass('active');
            $('.navigation li[data-slide="2"]').removeClass('active');
        }
    });

    function goToByScroll(dataslide) {
        htmlbody.animate({
            scrollTop: $('.slide[data-slide="' + dataslide + '"]').offset().top
        }, 500, 'easeInOutQuint');
    }

    function getPictureURLs() {
        $.ajax({
            url: "/photos",
            success: function(data) {
                $(data).find("a:contains(.JPG)").each(function() {
                    // will loop through 
                    //alert("Found a file: " + $(this).attr("href"));
                    $("#gallery").append('<div id="picture" class="grid_3 omega"><a class="image-link" href="photos/' + $(this).attr("href") + '" data-lightbox="image-1"><div class="image"><img src="photos/' + $(this).attr("href") + '" /></div></a></div>');
                });
            }
        });
    }

    function initialize() {
        var mapProp = {
            center: new google.maps.LatLng(51.508742, -0.120850),
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
    }

    function initJarallax() {
        var jarallax = new Jarallax(new ControllerScroll(true));
    }

    links.click(function(e) {
        e.preventDefault();
        dataslide = $(this).attr('data-slide');
        goToByScroll(dataslide);
    });

    button.click(function(e) {
        e.preventDefault();
        dataslide = $(this).attr('data-slide');
        goToByScroll(dataslide);

    });

});