<?php
/**
 * Ce cartouche vaudra quelques points en moins au groupe qui osera le laisser là tel quel ...
 * Auteur: X. Carrel
 * Date: Février 2020
 **/

require_once 'model/adminModel.php';


function adminHomePage()
{
    /* User has to be an admin the have access */
    if (@$_SESSION['admin'] == true){
        require_once "view/adminHome.php";
    }
    else{
        require_once "view/adminError.php";
    }
}

?>
