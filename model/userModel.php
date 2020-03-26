<?php
/*  Autor : Adam Gruber
    Date : Insert date
    Version : 1.0 
    Project : Insert Project Name
*/

//Decodes the json of the login
function jsonDecodeUsers()
{
    $userArray = file_get_contents("model/dataStorage/login.json");
    $userArray = json_decode($userArray, true);

    return $userArray; // Returns json array
}

function jsonPutFiles($array)
{
    $tempArray = json_encode($array);
    file_put_contents("model/dataStorage/login.json", $tempArray);
}

/* This function will find the user id with the email given */
function getUserId($mail)
{
    $result = jsonDecodeUsers();
    $id = 0;

    foreach ($result as $user) {
        if ($user['email'] == $mail) {
            return $id;
        }
        $id++;
    }
    return false; // ERROR
}

// Check if user is an admin
function adminCheck($mail)
{
    $userArray = jsonDecodeUsers();

    // Read the hole json file and checks if the session is an admin
    foreach ($userArray as $user) {
        if ($user['email'] == $mail && $user['admin'] == true) {
            return true; // Returns true if admin
        }
    }
    return false; // Returns false if not admin
}

/* Check if the password and the email are correct */
function check_login($mail, $psw)
{
    //Get the user in the json file
    $userArray = jsonDecodeUsers();

    //Checks if the email exists
    foreach ($userArray as $user) {
        if ($user['email'] == $mail && password_verify($psw, $user['password'])) {
            return true; //Returns true if credentials are right
        }
    }
    return false; //Returns false if credentials are wrong
}


/* This function will add a user to the json file */
function addUser($status, $type, $mail, $psw)
{
    /* This will change user type to true or false (case of admin) */
    if ($type == "Utilisateur") {
        $type = false;
    } else {
        $type = true;
    }

    $file = 'model/dataStorage/login.json';

    // If json file is empty we put the array
    // else we append data
    if (file_get_contents($file) == "") {

        //Creates an array of the user inputs
        $dataArray = array([
            'status' => $status,
            'email' => $mail,
            'password' => $psw,
            'admin' => $type]);

        //Encode and put the content
        $dataArray = json_encode($dataArray, true);
        file_put_contents($file, $dataArray);

    } else {

        //Array based on if json file had already data
        $dataArray = array(
            'status' => $status,
            'email' => $mail,
            'password' => $psw,
            'admin' => $type);

        //This basically takes out the json file, decode it, push it with the new array, and put it back in the json
        $tempArray = file_get_contents($file);
        $tempArray = json_decode($tempArray, true);
        array_push($tempArray, $dataArray);
        $dataArray = json_encode($tempArray, true);
        file_put_contents($file, $dataArray);
    }
}

/* This function will check if the user that wants to be add has a identical email in the json */
function checkIfUserInJson($mail)
{
    $users = jsonDecodeUsers();

    foreach ($users as $user) {
        if ($user['email'] == $mail) {
            return false;
        }
    }
    return true;
}

/* Checks witch status has the user */
/* Returns the name of the status (string) */
function statusCheck($mail)
{
    $users = jsonDecodeUsers();

    foreach ($users as $user) {
        if ($user['status'] == "membre" && $mail == $user['email']) {
            return "membre";
        }
    }
    return "nouveau";
}


/* Changes the user status with the argument "status" given */
function changeStatus($id, $status)
{
    $result = jsonDecodeUsers();

    /* Changes the value */
    $result[$id]['status'] = $status;
    jsonPutFiles($result);
}

/* Changes the user email with argument "email" given */
function changeEmail($id, $email)
{

    $result = jsonDecodeUsers();
    $counter = 0;
    $error = 0;

    foreach ($result as $user){
        if ($user['email'] == $email && $counter != $id){
            $_GET['error-email-settings'] = true;
            $error = 1;
        }
        $counter++;
    }

    if ($error != 1){
        /* Changes the value */
        $result[$id]['email'] = strtolower($email);
        $_GET['settings-success'] = true;
        jsonPutFiles($result);
    }
}


/* Changes the user status with the argument "password" given */
function changePassword($id, $password)
{
    $result = jsonDecodeUsers();

    /* Changes the value */
    $result[$id]['password'] = password_hash($password, PASSWORD_DEFAULT);
    jsonPutFiles($result);

    $_POST['password_generation'] = $password;
}

/* Changes the user admin status */
function changeAdmin($id, $admin)
{
    if ($admin == "Administrateur") {
        $admin = true;
        $_SESSION['admin'] = true;
    } else {
        $admin = false;
        $_SESSION['admin'] = false;
    }
    $result = jsonDecodeUsers();

    /* Changes the value */
    $result[$id]['admin'] = $admin;
    jsonPutFiles($result);
}

/* If we need to display something in the json, this will beautify it */
function displayJson()
{
    $result = jsonDecodeUsers();
    $counter = 0;

    foreach ($result as $user) {
        if ($user['admin']) {
            $result[$counter]['admin'] = "Administrateur";
        } else {
            $result[$counter]['admin'] = "Utilisateur";
        }
        if ($user['status'] == 'membre') {
            $result[$counter]['status'] = "Membre";
        } else {
            $result[$counter]['status'] = "Nouveau";
        }
        $counter++;
    }
    return $result;
}

/* From an id get the user's array */
function getUserById($id)
{
    $counter = 0;
    $result = jsonDecodeUsers();

    foreach ($result as $user) {
        if ($counter == $id) {
            return $user;
        }
        $counter++;
    }
    return false; /* ERROR */
}

function deleteAccountById($id)
{
    $result = jsonDecodeUsers();
    $counter = 0;
    unset($result[$id]);

    jsonPutFiles($result);
}

?>