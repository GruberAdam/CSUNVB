<?php
/**
Kaarthi
09/04/2020
1.0

/**
 * Retourne tous les items dans un tableau indexé de tableaux associatifs
 * Des points seront également retirés au groupe qui osera laisser une des fonctions de ce fichier telle quelle
 * sans l'adapter au niveau de son nom et de son code pour qu'elle dise plus précisément de quelles données elle traite
 */
function readShiftEndItems()
{
    return json_decode(file_get_contents("model/dataStorage/items.json"), true);
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
    file_put_contents("model/dataStorage/items.json", json_encode($items));
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


function jsonDecodeRemise()
{
    $userArray = file_get_contents("model/dataStorage/remise.json");
    $userArray = json_decode($userArray, true);

    return $userArray; // Returns json array
}

function registerToJson($prtdelajournee, $radiochx, $remarqueradio, $detecteurchx, $remarquedetecteur, $telephonechx, $remarquetelephone, $gtinfoavisechx, $remarquegtinfoavise, $annoncechx, $remarqueannonce, $pleinessencechx, $remarquepleinessence, $operationnelchx, $remarqueoperationnel, $rdvgaragechx, $remarquerdvgarage, $gtvhcavisechx, $remarquegtvhcavise, $fiftychfpresentchx, $remarquefiftychfpresent, $probinterchx, $remarqueprobinter, $base, $date, $responsablejour, $equipedejour, $vehiculedesjour, $responsablenuit, $equipedenuit, $vehiculedesnuit)
{
    $file = 'model/dataStorage/remise.json';


    if (file_get_contents($file) == "") {


        $dataArray = array([
            'partie de la journee' => $prtdelajournee,
            'base' => $base,
            'date' => $date,
            'responsable jour' => $responsablejour,
            'equipe de jour' => $equipedejour,
            'vehicule de service / jour' => $vehiculedesjour,
            'responsable nuit' => $responsablenuit,
            'equipe de nuit' => $equipedenuit,
            'vehicule de service / nuit' => $vehiculedesnuit,
            'radio' => $radiochx,
            'radio remarques' => $remarqueradio,
            'detecteur' => $detecteurchx,
            'detecteur remarques' => $remarquedetecteur,
            'telephone' => $telephonechx,
            'telephone remarques' => $remarquetelephone,
            'Gt info avise' => $gtinfoavisechx,
            'Gt info avise remarques' => $remarquegtinfoavise,
            'annonce 144' => $annoncechx,
            'annonce 144 remarques' => $remarqueannonce,
            'plein essence' => $pleinessencechx,
            'plein essence remarques' => $remarquepleinessence,
            'operationnel' => $operationnelchx,
            'operationnel remarques' => $remarqueoperationnel,
            'rdv garage' => $rdvgaragechx,
            'rdv garage remarques' => $remarquerdvgarage,
            'Gt vhc avise' => $gtvhcavisechx,
            'Gt vhc avise remarques' => $remarquegtvhcavise,
            '50 chf present' => $fiftychfpresentchx,
            '50 chf present remarques' => $remarquefiftychfpresent,
            'probleme intervention hors vehicules' => $probinterchx,
            'probleme intervention hors vehicules remarques' => $remarqueprobinter

        ]);

        $dataArray = json_encode($dataArray, true);
        file_put_contents($file, $dataArray);

    } else {


        $dataArray = array(
            'partie de la journee' => 'jour',
            'base' => $base,
            'date' => $date,
            'responsable jour' => $responsablejour,
            'equipe de jour' => $equipedejour,
            'vehicule de service / jour' => $vehiculedesjour,
            'responsable nuit' => $responsablenuit,
            'equipe de nuit' => $equipedenuit,
            'vehicule de service / nuit' => $vehiculedesnuit,
            'radio' => $radiochx,
            'radio remarques' => $remarqueradio,
            'detecteur' => $detecteurchx,
            'detecteur remarques' => $remarquedetecteur,
            'telephone' => $telephonechx,
            'telephone remarques' => $remarquetelephone,
            'Gt info avise' => $gtinfoavisechx,
            'Gt info avise remarques' => $remarquegtinfoavise,
            'annonce 144' => $annoncechx,
            'annonce 144 remarques' => $remarqueannonce,
            'plein essence' => $pleinessencechx,
            'plein essence remarques' => $remarquepleinessence,
            'operationnel' => $operationnelchx,
            'operationnel remarques' => $remarqueoperationnel,
            'rdv garage' => $rdvgaragechx,
            'rdv garage remarques' => $remarquerdvgarage,
            'Gt vhc avise' => $gtvhcavisechx,
            'Gt vhc avise remarques' => $remarquegtvhcavise,
            '50 chf present' => $fiftychfpresentchx,
            '50 chf present remarques' => $remarquefiftychfpresent,
            'probleme intervention hors vehicules' => $probinterchx,
            'probleme intervention hors vehicules remarques' => $remarqueprobinter);


        $tempArray = file_get_contents($file);
        $tempArray = json_decode($tempArray, true);
        array_push($tempArray, $dataArray);
        $dataArray = json_encode($tempArray, true);
        file_put_contents($file, $dataArray);
    }

}

function modifyRemiseById($id, $prtdelajournee, $radiochx, $remarqueradio, $detecteurchx, $remarquedetecteur, $telephonechx, $remarquetelephone, $gtinfoavisechx, $remarquegtinfoavise, $annoncechx, $remarqueannonce, $pleinessencechx, $remarquepleinessence, $operationnelchx, $remarqueoperationnel, $rdvgaragechx, $remarquerdvgarage, $gtvhcavisechx, $remarquegtvhcavise, $fiftychfpresentchx, $remarquefiftychfpresent, $probinterchx, $remarqueprobinter, $base, $date, $responsablejour, $equipedejour, $vehiculedesjour, $responsablenuit, $equipedenuit, $vehiculedesnuit){
    $file = 'model/dataStorage/remise.json';
    $values = file_get_contents($file);
    $values = json_decode($values, true);

    $values[$id]['partie de la journee'] = $prtdelajournee;
    $values[$id]['base'] = $base;
    $values[$id]['date'] = $date;
    $values[$id]['responsable jour'] = $responsablejour;
    $values[$id]['equipe de jour'] = $equipedejour;
    $values[$id]['vehicule de service / jour'] = $vehiculedesjour;
    $values[$id]['responsable nuit'] = $responsablenuit;
    $values[$id]['equipe de nuit'] = $equipedenuit;
    $values[$id]['vehicule de service / nuit'] = $vehiculedesnuit;
    $values[$id]['radio'] = $radiochx;
    $values[$id]['radio remarques'] = $remarqueradio;
    $values[$id]['detecteur'] = $detecteurchx;
    $values[$id]['detecteur remarques'] = $remarquedetecteur;
    $values[$id]['telephone'] = $telephonechx;
    $values[$id]['telephone remarques'] = $remarquetelephone;
    $values[$id]['Gt info avise'] = $gtinfoavisechx;
    $values[$id]['Gt info avise remarques'] = $remarquegtinfoavise;
    $values[$id]['annonce 144'] = $annoncechx;
    $values[$id]['annonce 144 remarques'] = $remarqueannonce;
    $values[$id]['plein essence'] = $pleinessencechx;
    $values[$id]['plein essence remarques'] = $remarquepleinessence;
    $values[$id]['operationnel'] = $operationnelchx;
    $values[$id]['operationnel remarques'] = $remarqueoperationnel;
    $values[$id]['rdv garage'] = $rdvgaragechx;
    $values[$id]['rdv garage remarques'] = $remarquerdvgarage;
    $values[$id]['Gt vhc avise'] = $gtvhcavisechx;
    $values[$id]['Gt vhc avise remarques'] = $remarquegtvhcavise;
    $values[$id]['50 chf present'] = $fiftychfpresentchx;
    $values[$id]['50 chf present remarques'] = $remarquefiftychfpresent;
    $values[$id]['probleme intervention hors vehicules'] = $probinterchx;
    $values[$id]['probleme intervention hors vehicules remarques'] = $remarqueprobinter;
    file_put_contents('model/dataStorage/remise.json', json_encode($values));
}

/* This deletes a remise ny id */
function deleteARemise($id){
    $result = jsonDecodeRemise();
    array_splice($result, $id, 1);

    $array = json_encode($result, true);
    file_put_contents("model/dataStorage/remise.json", $array);
}








?>
