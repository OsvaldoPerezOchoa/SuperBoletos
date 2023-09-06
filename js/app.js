// Inicio codigo js para el formulario

const formOpenBtn = document.querySelector("#form-open"),
	home = document.querySelector(".home"),
	formContainer = document.querySelector(".form_container"),
	formCloseBtn = document.querySelector(".form_close"),
	signupBtn = document.querySelector("#signup"),
	loginBtn = document.querySelector("#login"),
	pwShowHide = document.querySelectorAll(".pw_hide");

formOpenBtn.addEventListener("click", () => home.classList.add("show"));
formCloseBtn.addEventListener("click", () => home.classList.remove("show"));

pwShowHide.forEach((icon) => {
	icon.addEventListener("click", () => {
		let getPwInput = icon.parentElement.querySelector("input");
		if (getPwInput.type === "password") {
			getPwInput.type = "text";
			icon.classList.replace("uil-eye-slash", "uil-eye");
		} else {
			getPwInput.type = "password";
			icon.classList.replace("uil-eye", "uil-eye-slash");
		}
	});
});

signupBtn.addEventListener("click", (e) => {
	e.preventDefault();
	formContainer.classList.add("active");
});
loginBtn.addEventListener("click", (e) => {
	e.preventDefault();
	formContainer.classList.remove("active");
});

// Fin codigo js para el formulario


// Inicio codigo js para el carrusel

window.addEventListener('load', function () {
	new Glider(document.querySelector('.carousel__lista'), {
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: '.carousel__indicadores',
		arrows: {
			prev: '.carousel__anterior',
			next: '.carousel__siguiente'
		},
		responsive: [
			{
				// screens greater than >=775pxx
				breakpoint: 720,
				settings: {
					// Set to `auto` and provide item width to adjust to viewport
					slidesToShow: 2,
					slidesToScroll: 2
				}
			}, {
				// screens greater than >= 1024px
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3
				}
			}, {
				breakpoint: 1400,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 4
				}
			}
		]
	});
});

// Fin codigo js para el formulario

window.addEventListener('load', function () {
	new Glider(document.querySelector('.carousel__lista2'), {
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: '.carousel__indicadores2',
		arrows: {
			prev: '.carousel__anterior2',
			next: '.carousel__siguiente2'
		},
		responsive: [
			{
				// screens greater than >=775pxx
				breakpoint: 420,
				settings: {
					// Set to `auto` and provide item width to adjust to viewport
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}, {
				// screens greater than >=775pxx
				breakpoint: 720,
				settings: {
					// Set to `auto` and provide item width to adjust to viewport
					slidesToShow: 2,
					slidesToScroll: 2
				}
			}, {
				// screens greater than >= 1024px
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3
				}
			}, {
				breakpoint: 1400,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 4
				}
			}
		]
	});
});

// Contador  boletos generales
const btnMinus = document.getElementById('mas');
const btnPlus = document.getElementById('menos');
const inputField = document.getElementById('contado1');

// Agregar un evento de clic al botón de resta
btnMinus.addEventListener('click', () => {
	if (inputField.value > 0) {
		inputField.value--;
	}
});

// Agregar un evento de clic al botón de suma
btnPlus.addEventListener('click', () => {
	inputField.value++;
});

// Contador 2 boletos prefentes
var contador2 = document.getElementById("contado2");
var mas2 = document.getElementById("mas2");
var menos2 = document.getElementById("menos2");

mas2.addEventListener("click", function() {
  contador2.value++;
});

menos2.addEventListener("click", function() {
  if (contador2.value > 0) {
	contador2.value--;
  }
});


//Contador  boletos vip
var contador3 = document.getElementById("contado3");
var mas3 = document.getElementById("mas3");
var menos3 = document.getElementById("menos3");

mas3.addEventListener("click", function() {
  contador3.value++;
});

menos3.addEventListener("click", function() {
  if (contador3.value > 0) {
	contador3.value--;
  }
});