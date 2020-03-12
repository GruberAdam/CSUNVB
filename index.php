<?php
//Goes to login2
// Include all controllers
require "controler/adminControler.php";
require "controler/shiftEndControler.php";
require "controler/todoListControler.php";
require "controler/drugControler.php";
require "controler/loginControler.php";

$action = @$_GET['action'];

switch ($action)
{
    case 'admin':
        adminHomePage();
        break;
    case 'shiftend':
        shiftEndHomePage();
        break;
    case 'todolist':
        todoListHomePage();
        break;
    case 'drugAdd':
        drugAdd();
        break;
    case 'drugs':
        drugHomePage();
        break;
    case 'finish':
        finish($_POST);
        break;
    case 'login':
        login();
        break;
    default: // unknown action
        require_once 'view/home.php';
        break;
}

?>
