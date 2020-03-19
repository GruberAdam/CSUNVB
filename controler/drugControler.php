<?php
/**
 * Ce cartouche vaudra quelques points en moins au groupe qui osera le laisser là tel quel ...
 * Auteur: X. Carrel
 * Date: Février 2020
 **/

require_once 'model/drugModel.php';

function drugHomePage()
{
    $dayout = 1;
    $currentday = @$_GET["currentday"];
    writedrugItems($_POST, $currentday);
    for($day2 = 1; $day2 <= 7; $day2++) {
        $_POST += readDrugItems($dayout);
        $dayout = $dayout + 4;

    }
    require_once 'view/drugHome.php';
}
function drugAdd(){
    if(isset($_GET["day"])) {
        $day = @$_GET["day"];
    }else{
        $day = 1;
    }

        $_POST = readDrugItems($day);


    require_once  'view/drugAdd.php';
}

function finish($data){

    require_once  "view/drugHome.php";
writeFinish($data);

    require_once  'view/drugHome.php';
}
?>