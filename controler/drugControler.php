<?php
/**
 * Ce cartouche vaudra quelques points en moins au groupe qui osera le laisser là tel quel ...
 * Auteur: X. Carrel
 * Date: Février 2020
 **/

require_once 'model/drugModel.php';

function drugHomePage()
{
    $currentday = @$_GET["currentday"];
    writedrugItems($_POST, $currentday);
    for($day2 = 1; $day2 <= 5; $day2 = $day2 + 4) {
        $_POST += readDrugItems($day2);

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
?>