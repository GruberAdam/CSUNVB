<?php
/*  Autor : Adam Gruber
    Date : Insert date
    Version : 1.0 
    Project : Insert Project Name
*/

require_once "model/userModel.php";


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
            $admin = adminCheck($email); // Checks if user is an admin

            // Creates session on EMAIL and if he is an admin
            $_SESSION['mail'] = $email;
            $_SESSION['admin'] = $admin;
            require "view/loginCongratulations.php";
        } else {
            //Credentials wrong
            $_GET['error'] = true;
            require_once "view/loginHome.php";
        }
    } else {
        require_once "view/loginHome.php";
    }

}

/* This function will destroy the session */
function logout()
{
    $_SESSION = session_destroy();
    require_once 'view/home.php';

}

function register()
{
    /* Security in case URL is copied, the user still has to be an admin */
    if (@$_SESSION['admin'] == true) {
        /* Get the form inputs */
        $userType = @$_POST['register-account_type'];
        $email = strtolower(@$_POST['register-email']);
        $password = @$_POST['register-password'];

        if (isset($userType)) {
            addUser($userType, $email, $password);
            $_SESSION['test'] = "in";
        } else {
            require_once "view/registerHome.php";
            $_SESSION['test'] = "out";
        }

    } else {
        require_once "view/adminError.php";
    }

}