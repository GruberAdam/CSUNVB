/**
 * Le fichier stups.js contient les fonctionnalités javascript qui ne sont utilisées que pour la gestion des stupéfiants
 *
 * Ce cartouche vaudra quelques points en moins au groupe qui osera le laisser là tel quel ...
 * Auteur: X. Carrel
 * Date: Février 2020
 **/
var input;
var line = 0;
function changeColor(input) {

    input.style.backgroundColor = "#004300";
}
function initAmbulance() {
    var base_element = 0;
    for (var i = 0; i <= 6; i++){
       base_element =  document.getElementById("h2cel" + i);
        base_element.style.visibility = "hidden";
    }

}

function ambulances(input) {
    var int = 1;
 var base_element = document.getElementById("h2cel" + int);
    if(input.selectedIndex === 0){
        for (var i = 1; i <= 2; i++){

        base_element = document.getElementById("h2cel" + i);
        base_element.style.visibility = "visible";

    }
        for (var a = 3; a <= 7; a++){
            base_element = document.getElementById("h2cel" + a);
            base_element.style.visibility = "hidden";
        }
    }

    if(input.selectedIndex === 1) {
        for (var e = 1; e <= 2; e++) {
            base_element = document.getElementById("h2cel" + e);
            base_element.style.visibility = "hidden";
        }
        for (var f = 3; f <= 4; f++) {

            base_element = document.getElementById("h2cel" + f);
            base_element.style.visibility = "visible";

        }
        for (var g = 5; g <= 7; g++) {
            base_element = document.getElementById("h2cel" + g);
            base_element.style.visibility = "hidden";
        }
    }
        if(input.selectedIndex === 2){
            for (var h = 1; h <= 4; h++){
                base_element = document.getElementById("h2cel" + h);
                base_element.style.visibility = "hidden";
            }
            for (var l = 5; l <= 7; l++){

                base_element = document.getElementById("h2cel" + l);
                base_element.style.visibility = "visible";

            }


    }

}

function addRows() {
    line++;
    var table = document.getElementById("tableAdd");
    var new_row =table.insertRow();
    for (var i = 0; i <=7; i++) {
        var new_input = document.createElement("input");
        new_input.type = "text";
        new_input.name = "input" + "lig" + line + "col" + i;
        new_input.className = "input";
        var new_cell = new_row.insertCell(i);
        new_cell.appendChild(new_input);
        new_cell.id = "lig" + line + "col" + i;
    }
}

function showData(input) {
    alert(input + "A");
}