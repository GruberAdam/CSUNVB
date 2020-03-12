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
    $base = @$_POST['base'];
    $responsablejour = @$_POST['responsablejour'];
    $equipedejour = @$_POST['equipedejour'];
    $vehiculedesjour = @$_POST['vehiculedesjour'];
    $responsablenuit = @$_POST['responsablenuit'];
    $equipedenuit = @$_POST['equipedenuit'];
    $vehiculedesnuit = @$_POST['vehiculedesnuit'];
    $radioradio = @$_POST['radioRadio'];
    $radiodetecteur = @$_POST['radiodetecteur'];


    echo $date. '<br>'. $responsablejour. '<br>'. $responsablenuit. '<br>';


    if (!isset($date) || !isset($responsablejour) || !isset($responsablenuit)){
        require "view/FormulaireJour.php";
    }
    else {
        registerToJson($date, $responsablejour, $responsablenuit, $base);
        require "view/home.php";
    }
}

function remiseformnuit(){
    $_GET['action'] = "remiseformnuit";
    require "view/RemiseFormulaireNuit.php";
}



?>


