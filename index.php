<?php

// Include all controllers
require "controler/adminControler.php";
require "controler/shiftEndControler.php";
require "controler/todoListControler.php";
require "controler/drugControler.php";
require "controler/userControler.php";

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
    case 'drugs':
        drugHomePage();
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

    default: // unknown action
        require_once 'view/home.php';
        break;
}

?>