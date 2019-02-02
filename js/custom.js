/**	
	Custom JS
	1. SLIDE COMERCIAL
	2. FIXED MENU
	3. CLIENT SLIDE (SLICK SLIDER)
	4. SCROLL TOP BUTTON 
	5. SIDE BAR
	6. PRELOADER 
	7. WOW ANIMATION 	
	8. BUSCA CEP 
	**/

	jQuery(function($){
		/* ----------------------------------------------------------- */
	/*  1. SLIDE COMERCIAL
	/* ----------------------------------------------------------- */	

	var swiper = new Swiper('#slide-comercial', {
		loop: 'true',
		pagination: {
			el: '.swiper-pagination',
			dynamicBullets: true,
		},
		autoplay: {
			delay: 5000,
			disableOnInteraction: true,
		},
		navigation: {
			nextEl: '.proximo',
			prevEl: '.voltar',
		},
	});

	/* ----------------------------------------------------------- */
	/*  2. FIXED MENU
	/* ----------------------------------------------------------- */
	jQuery(window).bind('scroll', function () {
		height = $(window).height() * 1/5;
		if ($(window).scrollTop() > height) {
			$('.main-navbar').addClass('navbar-fixed-top');
			$('.logo').addClass('logo-compressed');
			$('.main-nav li a').addClass('less-padding');
			$('.search-area').addClass('search-area_bottom');
			$('.search-area').css('height','44');
			$('.search-area input[type="text"]').css('top','35%');


		} else {
			$('.main-navbar').removeClass('navbar-fixed-top');
			$('.logo').removeClass('logo-compressed');
			$('.main-nav li a').removeClass('less-padding');
			$('.search-area').removeClass('search-area_bottom');
			$('.search-area').css('height','60');
			$('.search-area input[type="text"]').css('top','11%');
		}
	});

	/* ----------------------------------------------------------- */
	/*  3. CLIENT SLIDE (SLICK SLIDER)
	/* ----------------------------------------------------------- */

	var swiper = new Swiper('#logos-infoco', {
		slidesPerView: 3,
		spaceBetween: 10,
		loop: true,
		autoplay: {
			delay: 4000,
		},
		breakpoints: {
			1920: {
				slidesPerView: 5,
				spaceBetween: 15,
			},
			420: {
				slidesPerView: 3,
				spaceBetween: 15,
			},
			320: {
				slidesPerView: 2,
				spaceBetween: 10,
			}
		}
	});

	/* ----------------------------------------------------------- */
	/*  4. SCROLL TOP BUTTON
	/* ----------------------------------------------------------- */

	//Check to see if the window is top if not then display button

	jQuery(window).scroll(function(){
		if ($(this).scrollTop() > 300) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});

	  //Click event to scroll to top

	  jQuery('.scrollToTop').click(function(){
	  	$('html, body').animate({scrollTop : 0},500);
	  	return false;
	  });
	  /* ----------------------------------------------------------- */
	/*  5. SIDE BAR
	/* ----------------------------------------------------------- */ 

	$(document).ready(function() {
		$('.menu').click(function () {
			$('#nav').toggleClass('show'); 
		});

		$('#fechar').click(function () { 
			$('#nav').toggleClass('show');
		});
	});

	/* ----------------------------------------------------------- */
	/*  6. PRELOADER 
	/* ----------------------------------------------------------- */ 

	jQuery(window).load(function() { // makes sure the whole site is loaded
      jQuery('.loader').fadeOut(); // will first fade out the loading animation
      jQuery('#preloader').delay(100).fadeOut('slow'); // will fade out the white DIV that covers the website.
      jQuery('body').delay(100).css({'overflow':'visible'});
  })

	/* ----------------------------------------------------------- */
	/*  7. WOW ANIMATION
	/* ----------------------------------------------------------- */ 

	wow = new WOW(
	{
		animateClass: 'animated',
		offset:       100,
		callback:     function(box) {
			console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
		}
	}
	);
	wow.init();

});

	/* ----------------------------------------------------------- */
	/*  8. BUSCA CEP
	/* ----------------------------------------------------------- */ 

	/**********************Buscador de CEP***************/

	function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('endereco').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('municipio').value=("");
            document.getElementById('uf').value=("");

        }

        function meu_callback(conteudo) {
        	if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('endereco').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('municipio').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }

    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('endereco').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('municipio').value="...";
                document.getElementById('uf').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };


