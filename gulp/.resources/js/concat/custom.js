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
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
});

/* Close */
$("#closeNav").click(function() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
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
    }, 2000);
}});