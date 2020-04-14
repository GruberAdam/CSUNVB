<?php
/**
 * Ce cartouche vaudra quelques points en moins au groupe qui osera le laisser là tel quel ...
 * Auteur: X. Carrel
 * Date: Février 2020
 **/

//require_once 'model/todoListModel.php';

function todoListHomePage()
{

    $base=$_GET["base"];
    require 'model/todoListModel.php';
    $results = readTodoListItems($base);


    require_once 'view/todoListHome.php';

}

function base()
{
 //   require 'model/todoListModel.php';
 //   $results = readTodoListItems();


    require_once 'view/base.php';

}

function search()
{
    $id = $_GET["idItem"];
    $base = $_GET["base"];
    $day=$_GET["day"];
    require_once 'model/todoListModel.php';
    $itemSearch = readTodoListItem2($base,$id,$day);
    require_once 'view/selectedItem.php';

}

function toggleItem()
{
    $currentValue=$_GET["currentValue"];
    $id = $_GET["idItem"];
    $base = $_GET["base"];
    $day=$_GET["day"];
    $user=$_GET["user"];
    require_once 'model/todoListModel.php';
    updateteToggleItem($base,$id,$day,$currentValue,$user);
  //  require_once 'view/selectedItem.php';
    $results = readTodoListItems($base);


    require_once 'view/todoListHome.php';

}

function modificationItem()
{

    $id = $_GET["idItem"];
    $base = $_GET["base"];
    $day=$_GET["day"];
    require_once 'model/todoListModel.php';
    $itemSearch = readTodoListItem2($base, $id, $day);
    require_once "view/modificationItem.php";
/*
    require_once "view/modificationItem.php";
    $tableauModification [0] = $_POST['id'];
    $tableauModification [1] = $_POST['date'];
    $tableauModification [2] = $_POST['base'];
    $tableauModification [3] = $_POST['nightjob'];
    $tableauModification [4] = $_POST['description'];
    $tableauModification [5] = $_POST['acknowledged_by'];
    $tableauModification [6] = $_POST['type'];
    $tableauModification [7] = $_POST['value'];
    replacementItem($tableauModification);*/
}


function updatedItem(){
    $id= (int)$_POST["idItem"];
    $tableauModification ['id'] = $_POST["idItem"];
  //  $tableauModification ['date'] = $_POST['date'];
    $tableauModification ['base'] = $_POST['base'];
    $tableauModification ['nightjob'] = $_POST['nightjob'];
    $tableauModification ['description'] = $_POST['description'];
    $tableauModification ['acknowledged_by'] = $_POST['acknowledged_by'];
    $tableauModification ['type'] = $_POST['type'];
 $tableauModification ['value'] = $_POST['value'];
    $day = $_POST['day'];
    $base=$tableauModification ['base'];
    require_once "model/todoListModel.php";
    $_GET['base']=$base;
    updateItem($id,$tableauModification,$day, $base);
   // adminPage($_GET);
    $results = readTodoListItems($base);
    require "view/todoListHome.php";

}


function adminPage()
{
    $base=$_GET['base'];
    require_once "model/todoListModel.php";
    $results = readTodoListItems($base);
    require_once 'view/adminPage.php';

}


function delteAnItem()
{
    require_once "model/todoListModel.php";
    $id = $_POST["id"];
    delteItem($id);
    // todoListHomePage();
    adminPage();

    require_once 'view/adminPage.php';

}


function download()
{
    $id=$_POST['idItem'];
    require_once 'model/todoListModel.php';
    $itemToDownload = readTodoListItem2($id);
   // require 'model/todoListModel.php';
    $results = readTodoListItems();
    require_once 'pdf.php';
    printer($results);


    require_once 'view/todoListHome.php';

}



function resetAllTasks($base){
    $base=$base["base"];
    require_once "model/todoListModel.php";
    resetAllTasksRequest($base);


    $results = readTodoListItems($base);
    require "view/todoListHome.php";

}


?>
