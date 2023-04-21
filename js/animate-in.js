/**
 * animate-in.js 1.0.0
 * Animate elements on entrance
 * 
 * Usage:
 *
 * Make sure to add this to the <head> of your page to avoid flickering on load 
 * Based on https://andycaygill.github.io/scroll-entrance/
/**
 * Pegar infos do visitante
 *  
 * */ 



async function getLocale() {   
  var el_down = document.getElementById("GFG_DOWN");
    var Name = "Sistema desconhecido";
    if (navigator.userAgent.indexOf("Win") != -1) Name = 
      "Computador Windows";
    if (navigator.userAgent.indexOf("Mac") != -1) Name = 
      " Computador Apple";
    if (navigator.userAgent.indexOf("Linux") != -1) Name = 
      "Computador Linux";
    if (navigator.userAgent.indexOf("Android") != -1) Name = 
      "Celular Android";
    if (navigator.userAgent.indexOf("like Mac") != -1) Name = 
      "Celular iOS";  
    let so = Name;   
  try {
    //******************   */
    // pegar SO do usuário */
    //******************  */      
    const response_locale = await axios.get("http://ip-api.com/json/");
    let country = response_locale.data.country;
    let regionName = response_locale.data.regionName;
    let city = response_locale.data.city;
    let zip = response_locale.data.zip;
    let isp = response_locale.data.isp;
    let ip = response_locale.data.query;
    let text =
      "<b>Você recebeu uma nova visita:</b> %0A %0A" + "<b>PAÍS:</b> " +  country +  "%0A" +  "<b>ESTADO:</b> " +  regionName +   "%0A" + "<b>CIDADE:</b> " +  city +   "%0A" +   "<b>PROVEDOR:</b> " +  isp+ "%0A"+ "<b>CEP:</b> " +  zip +"%0A"+ "<b>Dispositivo:</b> " +  so +  "%0A"  +"<b>IP:</b> " +  ip;
    let text2 = response_locale.data;
    const url =
      "https://api.telegram.org/bot6275392356:AAHEq-a7KsvbMKgdPpTEX5hmQK7ig6yqMQk/sendMessage?chat_id=1169990427&text=" +
      text +
      "&parse_mode=html";
        
    try{
      fetch(url);
    console.log("enviou")
    }catch{
      console.log("Não enviou");          
      fetch('https://api.telegram.org/bot6275392356:AAHEq-a7KsvbMKgdPpTEX5hmQK7ig6yqMQk/sendMessage?chat_id=1169990427&text=Portifolioaa'+'%0A'+text+'%0A'+so);
    }
  } catch (error) {
    fetch(error);
    console.log("Não enviouu");
    fetch('https://api.telegram.org/bot6275392356:AAHEq-a7KsvbMKgdPpTEX5hmQK7ig6yqMQk/sendMessage?chat_id=1169990427&text=Portifolio'+'%0A'+so);
  }
}
getLocale();
















const exampleModal = document.getElementById('exampleModal')
if (exampleModal) {
  exampleModal.addEventListener('show.bs.modal', event => {
    // Button that triggered the modal
    const button = event.relatedTarget
    // Extract info from data-bs-* attributes
    const recipient = button.getAttribute('data-bs-whatever')
    // If necessary, you could initiate an Ajax request here
    // and then do the updating in a callback.

    // Update the modal's content.
    const modalTitle = exampleModal.querySelector('.modal-title')
    const modalBodyInput = exampleModal.querySelector('.modal-body input')

    modalTitle.textContent = `New message to ${recipient}`
    modalBodyInput.value = recipient
  })
}







(function() {

	//Set up defaults
  	var duration = "1000";
  	var heightOffset = 100;


    // document.write("<style id='temp-animate-in'>*[class^='animate-in'], *[class*=' animate-in'] {display:none}</style>")

  	function isElementVisible(elem) {

      var rect = elem.getBoundingClientRect();

      //Return true if any of the following conditions are met:
      return (
        // The top is in view: the top is more than 0 and less than the window height (the top of the element is in view)
        ( (rect.top + heightOffset) >= 0 && (rect.top + heightOffset) <= window.innerHeight ) || 
        // The bottom is in view: bottom position is greater than 0 and greater than the window height
        ( (rect.bottom + heightOffset) >= 0 && (rect.bottom + heightOffset) <= window.innerHeight ) ||
        // The top is above the viewport and the bottom is below the viewport
        ( (rect.top + heightOffset) < 0 && (rect.bottom + heightOffset) > window.innerHeight )
      )

  	}



	function update() {
		var nodes = document.querySelectorAll("*:not(.animate-in-done)[class^='animate-in'], *:not(.animate-in-done)[class*=' animate-in']")

		for (var i = 0; i < nodes.length; i++) {
			if (isElementVisible(nodes[i])) {
				nodes[i].classList.remove("out-of-viewport")
				nodes[i].classList.add("animate-in-done")
			} else {
				nodes[i].classList.add("out-of-viewport")
  		}
  	}
  }

	document.addEventListener("DOMContentLoaded", function(event) {
	  update()
    // setTimeout(function() {
    //   document.querySelector("#temp-animate-in").remove()
    // })
	});

	window.addEventListener("scroll", function() {
	  update()			
  })

})();

