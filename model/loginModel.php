<?php
/*  Autor : Adam Gruber
    Date : Insert date
    Version : 1.0 
    Project : Insert Project Name
*/

//Decodes the json of the login
function jsonDecodeLogin(){
    $userArray = file_get_contents("model/dataStorage/login.json");
    $userArray = json_decode($userArray, true);

    return $userArray; // Returns json array
}

/* Check if the password and the email are correct */
function check_login($mail, $psw){
    //Get the user in the json file
    $userArray = jsonDecodeLogin();

    //Checks if the email exists
    foreach ($userArray as $user) {
        if ($user['email'] == $mail && $user['password'] == $psw){
            return true; //Returns true if credentials are right
        }
    }
    return false; //Returns false if credentials are wrong
}

// Check if user is an admin
function adminCheck($mail){
    $userArray = jsonDecodeLogin();

    // Read the hole json file and checks if the session is an admin
    foreach ($userArray as $user){
        if ($user['email'] == $mail && $user['admin'] == true){
            return true; // Returns true if admin
        }
    }
    return false; // Returns false if not admin
}

?>