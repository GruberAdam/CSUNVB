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
function readDrugItems($day)
{

    $path = "model/dataStorage/daystups{$day}.json";

    if(file_exists (  $path )) {
    $read = fopen($path, 'r');
    $itemLecture = fread($read, filesize($path));
    $json_decode = json_decode($itemLecture);
        $array = (array) $json_decode;
    }else{
        $fr=  fopen($path, "x");
        fclose($fr);
    }

    return $array;

}
function writedrugItems($json_decode, $day)
{

    $file = "model/dataStorage/daystups{$day}.json";
    if(file_exists (  $file )) {
        $write = fopen($file, 'w')
        or die ("Error opening output file");
        fwrite($write, json_encode($json_decode, JSON_UNESCAPED_UNICODE));
        fclose($write);
    }else{
       $fr = fopen($file, "x");
        fclose($fr);
    }
}



/**
 * Retourne un item précis, identifié par son id
 * ...
 */
function readDrugItem($id)
{
    $items = getDrugItems();
    // TODO: coder la recherche de l'item demandé
    return $item;
}

/**
 * Sauve l'ensemble des items dans le fichier json
 * ...
 */
function updateDrugItems($items)
{
    file_put_contents("model/dataStorage/items.json",json_encode($items));
}

/**
 * Modifie un item précis
 * Le paramètre $item est un item complet (donc un tableau associatif)
 * ...
 */
function updateDrugItem($item)
{
    $items = getDrugItems();
    // TODO: retrouver l'item donnée en paramètre et le modifier dans le tableau $items
    saveDrugItem($items);
}

/**
 * Détruit un item précis, identifié par son id
 * ...
 */
function destroyDrugItem($id)
{
    $items = getDrugItems();
    // TODO: coder la recherche de l'item demandé et sa destruction dans le tableau
    saveDrugItem($items);
}

/**
 * Ajoute un nouvel item
 * Le paramètre $item est un item complet (donc un tableau associatif), sauf que la valeur de son id n'est pas valable
 * puisque le modèle ne l'a pas encore traité
 * ...
 */
function createDrugItem($item)
{
    $items = getDrugItems();
    // TODO: trouver un id libre pour le nouvel id et ajouter le nouvel item dans le tableau
    saveDrugItem($items);
    return ($item); // Pour que l'appelant connaisse l'id qui a été donné
}



?>
