//-------------------------------------------------
// Navegador Sticky
//-------------------------------------------------
window.onscroll = function () {
  stickyNavBar()
};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function stickyNavBar() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }

}


//-------------------------------------------------
// Navbar + Burger Menú | Responsive
//-------------------------------------------------
const navSlide = () => {
  const burger = document.querySelector('.burger');
  const nav = document.querySelector('.nav-links');
  const navLinks = document.querySelectorAll('.nav-links li');

  burger.addEventListener('click', () => {
    //Toogle Nav
    nav.classList.toggle('nav-active');

    //Animate Links
    navLinks.forEach((link, index) => {
      if (link.style.animation) {
        link.style.animation = '';
      } else {
        link.style.animation = 'navLinkFade 0.5s ease forwards ${index / 7 + 1.5}s';
      }
    });
    //Burger Animation
    burger.classList.toggle('toggle');
  });
}

navSlide();

//Quito clase toggle
$('#navbar li').on('click', function () {
  $('.nav-links').removeClass('nav-active');
  $('.burger').removeClass('toggle');
});



//-------------------------------------------------
// Comportamiento del Scrolling
//-------------------------------------------------
$('.menu a').on('click', function (e) {
  if (this.hash !== '') {
    e.preventDefault();

    const hash = this.hash;

    $('html, body')
      .animate({
        scrollTop: $(hash).offset().top
      }, 800);
  }
});


//-------------------------------------------------
// SLIDES ANIMATION | SECTION HEADER
//-------------------------------------------------

$(document).ready(function () {
  $('.headphones').animate({ bottom: 0 }, 1400);
  $('.keyboard').animate({ bottom: 30 }, 1600);
  $('.mouse').animate({ bottom: 30 }, 1700);
  //mouse hover para desktop
  $('.mouse').hover(function () {
    $(this).attr('src', 'images/hero-mouse-on.png');
  }, function () {
    $(this).attr('src', 'images/hero-mouse.png');
  });
}); 

//-------------------------------------------------
// TYPEWRITTER | SECTION ABOUT
//-------------------------------------------------
$("#about").ready(function(){
})
document.addEventListener('DOMContentLoaded',function(event){
    var dataText = [ "Creativo", "Curioso", "con Diseño UX & UI", "con algo de Back", "& Solucionador"];
    
    function typeWriter(text, i, fnCallback) {
      if (i < (text.length)) {
       document.querySelector(".typewrite-txt").innerHTML = text.substring(0, i+1) +'<span aria-hidden="true"></span>';
          
        setTimeout(function() {
          typeWriter(text, i + 1, fnCallback)
        }, 50);
      }
      else if (typeof fnCallback == 'function') {
        setTimeout(fnCallback, 1200);
      }
    }
     function StartTextAnimation(i) {
       if (typeof dataText[i] == 'undefined'){
          setTimeout(function() {
            StartTextAnimation(0);
          }, 2000);
       }
    if (i < dataText[i].length) {
       typeWriter(dataText[i], 0, function(){
         StartTextAnimation(i + 1);
       });
      }
    }
    StartTextAnimation(0);
  });



//-------------------------------------------------
// SLIDER FLEXSLIDER | SECTION TOOLS
//-------------------------------------------------

$(document).ready(function () {
  $('.flexslider').flexslider({
    animation: "fade", 
    animationSpeed: 300,
    pauseOnAction: true,
    rtl: true
  });
});

// -------------------------------------------------
// LINKS ONCLICK| WORKS
//-------------------------------------------------
function linkA() {
  window.open("https://www.museuolimpicbcn.cat/es/");
}
function linkB() {
	  window.open("https://light-eyes.com/es/");
	}
function linkC() {
	  window.open("https://restauranteelcenador.com/");
	}
function linkD() {
	  window.open("https://www.construmat.com/");
	}
function linkE() {
	  window.open("https://impars.uic.es/es/impars/");
	}
function linkF() {
	  window.open("https://restaurantecataria.com/");
	}
function linkG() {
	  window.open("https://5elementsuk.com/shop/");
	}
function linkH() {
	  window.open("https://ultimatefitnessbootcampspain.co.uk/");
	}
function linkI() {
	  window.open("https://www.fundaciobarcelonaolimpica.es/es/");
	}
function linkJ() {
	  window.open("https://katagiblau.com/");
	}
function linkK() {
	  window.open("https://5elementsuk.com/");
  }
  function linkL() {
	  window.open("http://eldeveloper.dx.am/api");
  }
  function linkM() {
	  window.open("https://github.com/luisferDev");
  }
  function linkN() {
	  window.open("https://es.linkedin.com/in/luis-marin-webdesign");
  }
  function linkO() {
	  window.open("mailto:luifermarin@gmail.com");
	}
  function linkP() {
	  window.open("http://eldeveloper.dx.am/");
	}
// -------------------------------------------------
// SLIDER JQUERY MODALS | SECTION WORKS
//-------------------------------------------------

jQuery(document).ready(function() {
	jQuery('.bxslider').bxSlider({
		auto : true,
		controls : true,
		pager : true,
		speed : 600,		
		autoHover: true,
		pause: 1000
	});
	jQuery('.bxsliderModal').bxSlider({
        auto: false,
        mode: 'fade',
        randomStart: false,
        controls: true,
        pager: true,
        speed: 600,
    });
});


// -------------------------------------------------
// FORM CONTENT BOX SHOW | SECTION LOGIN
//-------------------------------------------------
$(document).ready(function(){
  $("#open").click(function(){
    $("#pr").show();
  });
});

// -------------------------------------------------
// TAB | SECTION WORKS
//-------------------------------------------------
var triggerTabList = [].slice.call(document.querySelectorAll('#works a'))
triggerTabList.forEach(function (triggerEl) {
  var tabTrigger = new bootstrap.Tab(triggerEl)

  triggerEl.addEventListener('click', function (event) {
    event.preventDefault()
    tabTrigger.show()
  })
})
