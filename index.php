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
        break;
    case 'remiseformnuitjour':
        remiseformnuitjour();
        break;
    case 'remiseformnuit':
        remiseformnuit();
        break;
    case 'remiseformjour':
        remiseformjour();
        break;
    case 'tableauRemise':
        tableauRemise();
        break;
    case 'remiseManagement' :
        $id = @$_GET['id'];
        remiseManagement($id);
        break;
    case 'modifyremise' :
        $id = @$_GET['id'];
        modifyRemise($id);
        break;
    case 'deleteremise':
        $id = $_GET['deletedId'];
        deleteRemise($id);
        break;
    default: // unknown action
        require_once 'view/home.php';
        break;
}

?>
