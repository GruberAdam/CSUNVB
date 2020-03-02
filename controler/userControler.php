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
    $_GET['action'] = "register";

    /* Security in case URL is copied, the user still has to be an admin */
    if (@$_SESSION['admin'] == true) {
        /* Get the form inputs */
        $userType = @$_POST['register-account_type'];
        $email = strtolower(@$_POST['register-email']);
        $password = password_hash(@$_POST['register-password'], PASSWORD_DEFAULT);

        /* Checks if inputs were completed */
        if (isset($userType) && isset($email) && isset($password)) {
            $result = checkIfUserInJson($email); // Checks if there is already an email in the json


            if ($result) {
                $_GET['register-success'] = true; // This will display a success in registerHome.php
                addUser($userType, $email, $password); // Adds a user in the json file
                require_once "view/registerHome.php";
            } else {
                $_GET['register-error'] = true; // This will display an error in registerHome.php
                require_once "view/registerHome.php";
            }
        } else {
            require_once "view/registerHome.php";
        }
    } else {
        require_once "view/adminError.php";
    }

}