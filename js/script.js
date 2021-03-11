
    const formulaireLogin = document.querySelector(".formulaireLogin");
    const formulaireRegister = document.querySelector(".formulaireRegister");


$(document).ready(function() {
    $(".dropdown-toggle").dropdown();
});

function test(){

    formulaireLogin.style.display = "none";
    formulaireRegister.style.display = "block";
}