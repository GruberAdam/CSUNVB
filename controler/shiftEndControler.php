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
    $radiochx = @$_POST['radioRadio1'];
    $remarqueradio = @$_POST['remarqueradio'];
    $detecteurchx = @$_POST['detecteurRadio'];
    $remarquedetecteur = @$_POST['remarquedetecteurco'];
    $telephonechx = @$_POST['telephoneRadio'];
    $remarquetelephone = @$_POST['remarquetelephone'];
    $gtinfoavisechx = @$_POST['gtinfoaviseRadio'];
    $remarquegtinfoavise = @$_POST['remarquegtinfoavise'];
    $annoncechx = @$_POST['annonceRadio'];
    $remarqueannonce = @$_POST['remarqueannonce'];

    $pleinessencechx = @$_POST['pleinessenceRadio'];
    $remarquepleinessence = @$_POST['remarquepleinessence'];
    $operationnelchx = @$_POST['operationnelRadio'];
    $remarqueoperationnel = @$_POST['remarqueoperationnel'];
    $rdvgaragechx = @$_POST['rdvgarageRadio'];
    $remarquerdvgarage = @$_POST['remarquerdvgarage'];
    $gtvhcavisechx = @$_POST['gtvhcaviseRadio'];
    $remarquegtvhcavise = @$_POST['remarquegtvhcavise'];
    $fiftychfpresentchx = @$_POST['fiftychfpresentRadio'];
    $remarquefiftychfpresent = @$_POST['remarquefiftychfpresent'];
    $probinterchx = @$_POST['probinterRadio'];
    $remarqueprobinter = @$_POST['remarqueprobinter'];


    //echo $date. '<br>'. $responsablejour. '<br>'. $responsablenuit. '<br>';


    if (!isset($date) || !isset($responsablejour) || !isset($responsablenuit)){
        require "view/FormulaireJour.php";
    }
    else {
        registerToJson($radiochx, $remarqueradio, $detecteurchx, $remarquedetecteur, $base, $date, $responsablejour, $equipedejour, $vehiculedesjour, $responsablenuit, $equipedenuit, $vehiculedesnuit);
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

function modifyRemise($id){
    $base = $_POST['modify'];

    test($id);
}

function remiseManagement($id)
{
    /* Checks if user is an admin */
    if (adminCheck($_SESSION['mail'])) {
        $remise = displayJson();
        /* Checks if the user clicked on a mdofiy button */
        if (isset($id)) {
            $remises = getUserById($id);
            require_once "view/tableauRemise.php";
        } else {
            require_once "view/tableauRemise.php";
        }
    } else {
        require_once "view/adminError.php";
    }


}


?>


