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


function remiseformjour(){
    $_GET['action'] = "remiseformjour";

    $prtdelajournee = @$_POST['prtjourneRadio'];
    $date = @$_POST['date'];
    $base = @$_POST['base'];
    $responsablejour = @$_POST['responsablejour'];
    $equipedejour = @$_POST['equipedejour'];
    $vehiculedesjour = @$_POST['vehiculedesjour'];
    $responsablenuit = @$_POST['responsablenuit'];
    $equipedenuit = @$_POST['equipedenuit'];
    $vehiculedesnuit = @$_POST['vehiculedesnuit'];
    $radiochx = @$_POST['radioRadio'];
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
        registerToJson($prtdelajournee, $radiochx, $remarqueradio, $detecteurchx, $remarquedetecteur, $telephonechx, $remarquetelephone, $gtinfoavisechx, $remarquegtinfoavise, $annoncechx, $remarqueannonce, $pleinessencechx, $remarquepleinessence, $operationnelchx, $remarqueoperationnel, $rdvgaragechx, $remarquerdvgarage, $gtvhcavisechx, $remarquegtvhcavise, $fiftychfpresentchx, $remarquefiftychfpresent, $probinterchx, $remarqueprobinter, $base, $date, $responsablejour, $equipedejour, $vehiculedesjour, $responsablenuit, $equipedenuit, $vehiculedesnuit);
        require "view/home.php";
    }
}

function tableauRemise(){
    $_GET['action'] = "tableauRemise";
    $tonObjJson = file_get_contents("model/dataStorage/remise.json");
    $remise = json_decode($tonObjJson,true);

    require 'view/tableauRemise.php';
}

function modifyRemise($id){

    $_GET['action'] = "remiseformjour";

    $prtdelajournee = @$_POST['mjprtjourneRadio'];
    $date = @$_POST['mjdate'];
    $base = @$_POST['mjbase'];
    $responsablejour = @$_POST['mjresponsablejour'];
    $equipedejour = @$_POST['mjequipedejour'];
    $vehiculedesjour = @$_POST['mjvehiculedesjour'];
    $responsablenuit = @$_POST['mjresponsablenuit'];
    $equipedenuit = @$_POST['mjequipedenuit'];
    $vehiculedesnuit = @$_POST['mjvehiculedesnuit'];
    $radiochx = @$_POST['mjradioRadio'];
    $remarqueradio = @$_POST['mjremarqueradio'];
    $detecteurchx = @$_POST['mjdetecteurRadio'];
    $remarquedetecteur = @$_POST['mjremarquedetecteurco'];
    $telephonechx = @$_POST['mjtelephoneRadio'];
    $remarquetelephone = @$_POST['mjremarquetelephone'];
    $gtinfoavisechx = @$_POST['mjgtinfoaviseRadio'];
    $remarquegtinfoavise = @$_POST['mjremarquegtinfoavise'];
    $annoncechx = @$_POST['mjannonceRadio'];
    $remarqueannonce = @$_POST['mjremarqueannonce'];

    $pleinessencechx = @$_POST['mjpleinessenceRadio'];
    $remarquepleinessence = @$_POST['mjremarquepleinessence'];
    $operationnelchx = @$_POST['mjoperationnelRadio'];
    $remarqueoperationnel = @$_POST['mjremarqueoperationnel'];
    $rdvgaragechx = @$_POST['mjrdvgarageRadio'];
    $remarquerdvgarage = @$_POST['mjremarquerdvgarage'];
    $gtvhcavisechx = @$_POST['mjgtvhcaviseRadio'];
    $remarquegtvhcavise = @$_POST['mjremarquegtvhcavise'];
    $fiftychfpresentchx = @$_POST['mjfiftychfpresentRadio'];
    $remarquefiftychfpresent = @$_POST['mjremarquefiftychfpresent'];
    $probinterchx = @$_POST['mjprobinterRadio'];
    $remarqueprobinter = @$_POST['mjremarqueprobinter'];

    if (!isset($date) || !isset($remarqueprobinter) || !isset($remarquetelephone)){
        $remise = jsonDecodeRemise();
        require_once "view/FromulaireJourModifier.php";
    }else{
        modifyRemiseById($id, $prtdelajournee, $radiochx, $remarqueradio, $detecteurchx, $remarquedetecteur, $telephonechx, $remarquetelephone, $gtinfoavisechx, $remarquegtinfoavise, $annoncechx, $remarqueannonce, $pleinessencechx, $remarquepleinessence, $operationnelchx, $remarqueoperationnel, $rdvgaragechx, $remarquerdvgarage, $gtvhcavisechx, $remarquegtvhcavise, $fiftychfpresentchx, $remarquefiftychfpresent, $probinterchx, $remarqueprobinter, $base, $date, $responsablejour, $equipedejour, $vehiculedesjour, $responsablenuit, $equipedenuit, $vehiculedesnuit);
        tableauRemise();
    }


}

function deleteRemise($id){
    deleteARemise($id);

    tableauRemise();
}



?>


