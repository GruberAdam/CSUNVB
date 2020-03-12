<?php
/**
 * Ce cartouche vaudra quelques points en moins au groupe qui osera le laisser là tel quel ...
 * Auteur: X. Carrel
 * Date: Février 2020
 **/

/**
 * Retourne tous les items dans un tableau indexé de tableaux associatifs
 * Des points seront également retirés au groupe qui osera laisser une des fonctions de ce fichier telle quelle
 * sans l'adapter au niveau de son nom et de son code pour qu'elle dise plus précisément de quelles données elle traite
 */
function readShiftEndItems()
{
    return json_decode(file_get_contents("model/dataStorage/items.json"),true);
}

/**
 * Retourne un item précis, identifié par son id
 * ...
 */
function readShiftEndItem($id)
{
    $items = getShiftEndItems();
    // TODO: coder la recherche de l'item demandé
    return $item;
}

/**
 * Sauve l'ensemble des items dans le fichier json
 * ...
 */
function updateShiftEndItems($items)
{
    file_put_contents("model/dataStorage/items.json",json_encode($items));
}

/**
 * Modifie un item précis
 * Le paramètre $item est un item complet (donc un tableau associatif)
 * ...
 */
function updateShiftEndItem($item)
{
    $items = getShiftEndItems();
    // TODO: retrouver l'item donnée en paramètre et le modifier dans le tableau $items
    saveShiftEndItem($items);
}

/**
 * Détruit un item précis, identifié par son id
 * ...
 */
function destroyShiftEndItem($id)
{
    $items = getShiftEndItems();
    // TODO: coder la recherche de l'item demandé et sa destruction dans le tableau
    saveShiftEndItem($items);
}

/**
 * Ajoute un nouvel item
 * Le paramètre $item est un item complet (donc un tableau associatif), sauf que la valeur de son id n'est pas valable
 * puisque le modèle ne l'a pas encore traité
 * ...
 */
function createShiftEndItem($item)
{
    $items = getShiftEndItems();
    // TODO: trouver un id libre pour le nouvel id et ajouter le nouvel item dans le tableau
    saveShiftEndItem($items);
    return ($item); // Pour que l'appelant connaisse l'id qui a été donné
}


function registerToJson($base, $date, $responsablejour, $equipedejour, $vehiculedesjour, $responsablenuit, $equipedenuit, $vehiculedesnuit)
{
    $file = 'model/dataStorage/remise.json';


    if (file_get_contents($file) == "") {


        $dataArray = array([
            'base' => $base,
            'date' => $date,
            'responsable jour' => $responsablejour,
            'equipe de jour' => $equipedejour,
            'vehicule de service / jour' => $vehiculedesjour,
            'responsable nuit' => $responsablenuit,
            'equipe de nuit' => $equipedenuit,
            'vehicule de service / nuit' => $vehiculedesnuit
        ]);

        $dataArray = json_encode($dataArray, true);
        file_put_contents($file, $dataArray);

    } else {


        $dataArray = array(
            'base' => $base,
            'date' => $date,
            'responsable jour' => $responsablejour,
            'equipe de jour' => $equipedejour,
            'vehicule de service / jour' => $vehiculedesjour,
            'responsable nuit' => $responsablenuit,
            'equipe de nuit' => $equipedenuit,
            'vehicule de service / nuit' => $vehiculedesnuit);


        $tempArray = file_get_contents($file);
        $tempArray = json_decode($tempArray, true);
        array_push($tempArray, $dataArray);
        $dataArray = json_encode($tempArray, true);
        file_put_contents($file, $dataArray);
    }
}



?>
