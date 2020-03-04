<?php

function remiseformnuitjour(){
    $_GET['action'] = "remiseformnuitjour";
    require "view/remiseFromNuitJour.php";
}

function remisewrite()
{
    $_GET['action'] = "remise";
    $date = @$_POST["date"]; // récupère le nom d'utilisateur
    $responsablenuit = @$_POST['responsablenuit']; // récupère le mot de passe

    if ($date == "" || $responsablenuit == "") // si le nom d'utilisateur ou le mot de passe est vide, alors retourner sur la page "login"
    {
        require "view/remise.php";
    } else // sinon vérifier si les identifiants sont justes
    {

        $mdp = $date;
        $user = $responsablenuit;
        $falseuser = 'model/dataStorage/remise.json';     // fichier json pour faux identifiants

        if (file_get_contents($falseuser) == "") // si le fichier est vide, il va créer les nouveaux données
        {


            $Array = array([
                'false-username' => $user,
                'password' => $mdp]);


            $Array = json_encode($Array, true);
            file_put_contents($falseuser, $Array);

        } else      // sinon, il va ajouter ces données à ceux déjà créés.
        {


            $Array = array(
                'false-username' => $user,
                'password' => $mdp);

            $sArray = file_get_contents($falseuser);
            $sArray = json_decode($sArray, true);
            array_push($sArray, $Array);
            $dataArray = json_encode($sArray, true);
            file_put_contents($falseuser, $dataArray);
        }
    }
    require "view/remise.php";      // besoin de la page de "loginfalse"
}

