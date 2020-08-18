// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    var x = document.getElementById("affix");
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("gotoTop").style.display = "block";
        x.classList.add("show-color-background-affix");
    } else {
        document.getElementById("gotoTop").style.display = "none";
        x.classList.remove("show-color-background-affix");
    }
   
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
 
     $('html').animate({scrollTop:0}, 'fast');
}