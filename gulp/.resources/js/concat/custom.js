$(document).ready(function(){
$("#portfolio").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#portfolio-section").offset().top
    }, 2000);
});

$("#testimonials").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#testimonials-section").offset().top
    }, 2000);
});

$("#contact").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#contact-section").offset().top
    }, 2000);
});

$("#audit").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#contact-section").offset().top
    }, 2000);
});

$("#portfolio-bot").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#portfolio-section").offset().top
    }, 2000);
});

$("#testimonials-bot").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#testimonials-section").offset().top
    }, 2000);
});

$("#contact-bot").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#contact-section").offset().top
    }, 2000);
});

$("#audit-bot").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#contact-section").offset().top
    }, 2000);
});

/* Open */
$("#toggle-button").click(function() {
    console.log('testarino');
    $(".overlay").addClass("overlay-open");
});

/* Close */
$(".overlay-close").click(function() {
    $(".overlay").removeClass("overlay-open");
});
// When the user scrolls down 20px from the top of the document, show the button
$('#myBtn').click(function(){
    topFunction();
    console.log('asd');
});

window.onscroll = function() {scrollFunction();};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#hero-section").offset().top
    }, 1300);
}
$(document).ready(function() {
	$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1], // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				// return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
			}
		}
	});

});

});