<?php
/*  Autor : Adam Gruber
    Date : Insert date
    Version : 1.0 
    Project : Insert Project Name
*/

require_once "model/loginModel.php";

function login(){

    /* Get the inputs (if there are ? ) */
    $email = @$_POST['user-email'];
    $password = @$_POST['user-password'];


    if (isset($email) && isset($password)){
        $connexion = check_login($email, $password);
        if ($connexion){

            // Credentials right
            require_once "view/home.php";
        }
        else{

            //Credentials wrong
        }
    }
    else{
        require_once "view/loginHome.php";
    }

}