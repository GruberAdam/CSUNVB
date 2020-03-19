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
    $radiooui = @$_POST['radioRadio1'];
    $radionon = @$_POST['radioRadio2'];
    $remarqueradio = @$_POST['remarqueradio'];
    $detecteuroui = @$_POST['detecteurRadio1'];
    $detecteurnon = @$_POST['detecteurRadio2'];
    $remarquedetecteur = @$_POST['remarquedetecteurco'];



    echo $date. '<br>'. $responsablejour. '<br>'. $responsablenuit. '<br>';


    if (!isset($date) || !isset($responsablejour) || !isset($responsablenuit)){
        require "view/FormulaireJour.php";
    }
    else {
        registerToJson($base, $date, $responsablejour, $equipedejour, $vehiculedesjour, $responsablenuit, $equipedenuit, $vehiculedesnuit);
        require "view/home.php";
    }
}

function remiseformnuit(){
    $_GET['action'] = "remiseformnuit";
    require "view/RemiseFormulaireNuit.php";
}

function tableauRemise(){

    $_GET['action'] = "tableauRemise";
    require 'view/tableauRemise.php';

    $tonObjJson = file_get_contents("model/dataStorage/remise.json");
    $result = json_decode($tonObjJson,true);

    echo "<table>";
    foreach($result  as $R=>$D){
        echo "<tr id='Tr_".$R."'>";
        foreach($D as $key=>$Value){
            echo "<td id='Td_".$R."_".$key."'>".$Value."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

?>


