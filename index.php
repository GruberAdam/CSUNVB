<?php

// Include all controllers
require "controler/adminControler.php";
require "controler/shiftEndControler.php";
require "controler/todoListControler.php";
require "controler/drugControler.php";

require "controler/userControler.php";
require "controler/remiseControler.php";


$action = @$_GET['action'];

switch ($action) {
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
    case 'logout' :
        logout();
        break;
    case 'register':
        register();
        break;
    case 'userManagement' :
        $id = @$_GET['id'];
        userManagement($id);
        break;
    case 'accountChanges':
        /* Take the query string to see what he wants to modify */
        $status = $_GET['status'];
        $email = $_GET['email'];
        $password = $_GET['password'];
        $admin = $_GET['admin'];
        accountChanges($status, $email, $password, $admin, $_GET['id']);
        break;
    case 'deleteAccount':
        $id = $_GET['deletedId'];
        deleteAccount($id);
        break;

    case 'login':
        login();
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

    case 'selctedItem':
        search();
        break;

    case 'base':
        base();
        break;

    case 'modificationItem' :
        modificationItem($_GET);
        break;

    case 'toggleItem' :
        toggleItem();
        break;

    case 'updatedItem' :
        updatedItem($_GET);
        break;

    case 'adminPage' :
        adminPage($_GET);
        break;

    case 'delItem' :
        delteAnItem();
        break;

    case 'resetAllTasks' :
        resetAllTasks($_GET);
        break;

    case 'download' :
        download();
        break;


    default: // unknown action
        require_once 'view/home.php';
        break;
}

?>