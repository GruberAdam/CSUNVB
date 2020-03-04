<?php
/**
 * Ce cartouche vaudra quelques points en moins au groupe qui osera le laisser là tel quel ...
 * Auteur: X. Carrel
 * Date: Février 2020
 **/

require_once 'model/shiftEndModel.php';

function shiftEndHomePage()
{
    require_once 'view/AccueilRemise.php';
}


function remiseformjour(){
    $_GET['action'] = "remiseformjour";
    require "view/FormulaireJour.php";
}

function remiseformnuit(){
    $_GET['action'] = "remiseformnuit";
    require "view/RemiseFormulaireNuit.php";
}

?>

function remiseformjour()
