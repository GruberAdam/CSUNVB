<?php
/**
 * Ce cartouche vaudra quelques points en moins au groupe qui osera le laisser là tel quel ...
 * Auteur: X. Carrel
 * Date: Février 2020
 **/

require_once 'model/shiftEndModel.php';

function shiftEndHomePage()
{
    require 'view/AccueilRemise.php';
}

function remiseformnuitjour(){
    $_GET['action'] = "remiseformnuitjour";
    require "view/remiseFromNuitJour.php";
}


function remiseformjour(){
    $_GET['action'] = "remiseformjour";


    $date = @$_POST['date'];
    $responsablejour = @$_POST['responsablejour'];
    $responsablenuit = @$_POST['responsablenuit'];

    if (!isset($date) || !isset($responsablejour) || !isset($responsablenuit)){
        require "view/FormulaireJour.php";
    }
    else {
        require "model/shiftEndModel.php";
        registerToJson($date, $responsablejour, $responsablenuit);
        require "view/home.php";
    }
}

function remiseformnuit(){
    $_GET['action'] = "remiseformnuit";
    require "view/RemiseFormulaireNuit.php";
}

?>