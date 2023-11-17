
// botones de la seccion bienvenido

var btniniciar = document.getElementById("iniciar"),
btnregistrar= document.getElementById("registrar"),

formRegister = document.querySelector(".register"),
formLogin = document.querySelector(".login ");

btniniciar.addEventListener("click", e => {
    formRegister.classList.add("hide");
    formLogin.classList.remove("hide");

});

btnregistrar.addEventListener("click", e => {
    formLogin.classList.add("hide");
    formRegister.classList.remove("hide")
});

var boton_de_iniciar_sesion = document.getElementById("iniciar-sesion");
boton_de_iniciar_sesion.addEventListener('click', e => {
    console.log("clickeando el boton iniciar sesion");
    
});

