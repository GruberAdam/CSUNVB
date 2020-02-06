<?php
/*  Autor : Adam Gruber
    Date : Insert date
    Version : 1.0 
    Project : Insert Project Name
*/



/* Check if the password and the email are correct */
function check_login($mail, $psw){
    //Get the user in the json file
    $userArray = file_get_contents("model/dataStorage/login.json");
    $userArray = json_decode($userArray, true);

    //Checks if the email exists
    foreach ($userArray as $user) {
        if ($user['email'] == $mail && $user['password'] == $psw){
            return true; //Returns true if credentials are right
        }
    }
    return false; //Returns false if credentials are wrong
}

?>