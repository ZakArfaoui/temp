var i = 1;
var code = document.querySelector('#inputcode');
var x = document.querySelector('#nomcm');
var pays = document.querySelector('#PaysC');
var ville = document.querySelector('#villeC');
var codepostale = document.querySelector('#CodeP');



document.getElementById("idForm").addEventListener("submit", (e) => {
    var error = 0;
    if (code.value == "" || code.value.length != 8) {
        document.getElementById('erreurCode').innerHTML = "verifier votre code";
        error++;
    }
    if (x.value == "" || x.value != "hopital" || x.value != "cabinet" || x.value != "clinique") {
        document.getElementById('erreurNom').innerHTML = "verifier votre nom";
        error++;
    }

    if (pays.selectedIndex < 1) {
        document.getElementById('erreurPays').innerHTML = "choisir votre pays";
        error++;
    }
    if (ville.selectedIndex < 1) {
        document.getElementById('erreurVille').innerHTML = "choisir votre ville";
        error++;
    }

    if (codepostale.value.length != 4) {
        document.getElementById('erreurCodePostale').innerHTML = "saisir votre code postale";
        error++;
    }
    if (error > 0)
        e.preventDefault();
    alert(error);


})