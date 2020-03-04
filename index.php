<?php
// Include all controllers
require "controler/adminControler.php";
require "controler/shiftEndControler.php";
require "controler/todoListControler.php";
require "controler/drugControler.php";
require "controler/remiseControler.php";

$action = $_GET['action'];

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
    case 'drugs':
        drugHomePage();
    case 'remiseformnuitjour':
        remiseformnuitjour();
    case 'remiseformnuit':
        remiseformnuit();
    case 'remiseformjour':
        remiseformjour();
    case 'remise':
        remisewrite();
        break;
    default: // unknown action
        require_once 'view/home.php';
        break;
}

?>
