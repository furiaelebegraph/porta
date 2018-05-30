window.onscroll = function() {myFunction()};

var header = document.getElementById("quienes");
var inicio = document.getElementById("inicio");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    inicio.classList.add("sticky");
    inicio.classList.add("si-display");
  } else {
    inicio.classList.remove("sticky");
    inicio.classList.remove("si-display");
  }
}

$( document ).ready(function() {
  $('.btn_menu').on('click', function(){
    $('.menu').toggleClass('abierto');
    $(this).toggleClass('abierto_btn');
  });






$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
    $('.menu').removeClass('abierto');
    $('.btn_menu').removeClass('abierto_btn');

      }

    }
  });

});