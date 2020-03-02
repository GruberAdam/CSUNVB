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

/* This function will add a user to the json file */
function addUser($type, $mail, $psw)
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
            'email' => $mail,
            'password' => $psw,
            'admin' => $type]);

        //Encode and put the content
        $dataArray = json_encode($dataArray, true);
        file_put_contents($file, $dataArray);

    } else {

        //Array based on if json file had already data
        $dataArray = array(
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

?>