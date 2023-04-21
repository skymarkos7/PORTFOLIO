/**
 * smooth-scroll.js 1.0.0
 * Make your page scrolling smooth
 * Requires JQuery - Does not work with JQuery slim 
 * Based on https://css-tricks.com/snippets/jquery/smooth-scrolling/
 */
function servico(){
  let nome = document.getElementById("nomeServico").value;
  let servicoDescricao = document.getElementById("descricaoServico").value;
  console.log(servicoDescricao);
  // window.open('https://api.whatsapp.com/send?phone=5582996909200&amp;text=Oi,%20Enviei%20essa%20mensagem%20pelo%20portfolio#');    // abrir em outra aba
  window.location="https://api.whatsapp.com/send?phone=5582996909200&text=Meu nome é: "+nome+" o serviço é: "+servicoDescricao; // abrir na mesma aba
  // console.log(nome, servicoDescricao);
}

function msg(){

   document.getElementById("btnmsg").removeAttribute("hidden");
}

function send() {
  let nome = document.getElementById("namemsg").value;
  let msg  = document.getElementById("msg").value;

  if(!msg){
    alert("Mensagem vazia, preencha o campo de mensagem");
  }else{
    console.log(nome, msg);
    
    fetch("https://api.telegram.org/bot6275392356:AAHEq-a7KsvbMKgdPpTEX5hmQK7ig6yqMQk/sendMessage?chat_id=1169990427&text=portifolio%0A"+nome+"%0A"+msg);

    // document.getElementById("btnmsg").removeAttribute("hidden");
    // document.getElementById("btnmsg").setAttribute("hidden")

    document.getElementById("btnmsg").setAttribute("style","visibility:hidden")
    document.getElementById("msg").setAttribute("style","visibility:hidden")
    document.getElementById("namemsg").setAttribute("style","visibility:hidden")
    document.getElementById("msg2").removeAttribute("hidden");

    document.getElementById("pedido").innerHTML = "Obrigado por sua mensagem";

    
  }

  
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
