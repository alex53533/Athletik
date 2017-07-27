var btn = document.getElementById('valider');
var toto = document.getElementById('time');
var totoage = document.getElementById('age');
var points = document.getElementById('points');

btn.addEventListener("click", calcul); 

function calcul() {
    var time = toto.value;
     console.log(time);
    var age = totoage.value;
    var coeff;
    if (age <= 11){
        coeff = 1.5;
    } else if(age <= 13){
        coeff = 1.42;
    } else if(age <= 15){
        coeff = 1.35;
    } else if(age <= 17){
        coeff = 1.21;
    } else if(age <= 19){
        coeff = 1.18;
    } else if(age <= 22){
        coeff = 1.09;
    } else if(age <= 40){
        coeff = 1;
    } else {
        coeff = 1.35;
    }
    var nbpoints = Math.round((1000/time)*coeff);
    
    points.value = nbpoints;
     
    console.log(nbpoints);
    alert("Score calculé: " + nbpoints);
}
