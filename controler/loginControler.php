<?php
/*  Autor : Adam Gruber
    Date : Insert date
    Version : 1.0 
    Project : Insert Project Name
*/

require_once "model/loginModel.php";


session_start();

/* Check if the login form has something and redirects to a
    function witch checks the login
*/
function login()
{

    /* Get the inputs (if there are ? ) */
    $email = @$_POST['user-email'];
    $password = @$_POST['user-password'];

    /* Checks if email or password has been filled */
    if (isset($email) && isset($password)) {

        /* Checks the login */
        $connexion = check_login($email, $password);
        if ($connexion) {
            // Credentials right
            $_SESSION['mail'] = $email;
            require_once "view/loginCongratulations.php";
        } else {
            //Credentials wrong
            require_once "view/loginError.php";
        }
    } else {
        require_once "view/loginHome.php";
    }

}

function logout()
{
    $_GET["action"] = "logout";
    $_SESSION = session_destroy();
    require_once 'view/home.php';

}