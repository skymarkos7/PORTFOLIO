/**
 * smooth-scroll.js 1.0.0
 * Make your page scrolling smooth
 * Requires JQuery - Does not work with JQuery slim 
 * Based on https://css-tricks.com/snippets/jquery/smooth-scrolling/
 */
function servico(){
  let nome = document.getElementById("descricaoServico").value;
  let servicoDescricao = document.getElementById("nomeServico").value;
  console.log(servicoDescricao);
  // window.open('https://api.whatsapp.com/send?phone=5582996909200&amp;text=Oi,%20Enviei%20essa%20mensagem%20pelo%20portfolio#');    // abrir em outra aba
  window.location="https://api.whatsapp.com/send?phone=5582996909200&text="+servicoDescricao; // abrir na mesma aba


  console.log(nome, servicoDescricao);
}

(function() {

  var duration = 500

  $('a[href*="#"]')
    // Remova os links que realmente não direcionam a nada
    .not('[href="#"]')
    .click(function(event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
        && 
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']')
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault()
          
          $('html, body').animate({
            scrollTop: target.offset().top
          },
          duration, function() {
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
        }
      }
    });

})();
