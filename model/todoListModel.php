<?php

/**
 * Ce cartouche vaudra quelques points en moins au groupe qui osera le laisser là tel quel ...
 * Auteur: X. Carrel
 * Date: Février 2020
 **/
{


    /**
     * Retourne tous les items dans un tableau indexé de tableaux associatifs
     * Des points seront également retirés au groupe qui osera laisser une des fonctions de ce fichier telle quelle
     * sans l'adapter au niveau de son nom et de son code pour qu'elle dise plus précisément de quelles données elle traite
     * done
     * @param $base
     * @return
     */
    function readTodoListItems($base)
    {

        $data = json_decode(file_get_contents("model/dataStorage/todos.json"), true);
        $index = 0;

        foreach ($data as $baseData) {
            foreach ($baseData as $key => &$val) {
                if ($key == $base) {
                    // $yes = $data[1];
                    // $baseData[$base] == 'saint-loup';
                    $data = $val;
                    $index++;
                }
            }
        }
        $index = 0;
        return $data;
    }


    /**
     * Retourne un item précis, identifié par son id
     * ...
     * DONE
     * @param $base
     * @param $id
     * @param $day
     * @return
     */
    function readTodoListItem2($base, $id, $day)
    {
        $contents = readTodoListItems($base);
        foreach ($contents as $content) {
            foreach ($content as $kesDay => &$valueList) {

                foreach ($content[$day] as $value)
                    if ($kesDay == $day && $value["id"] == $id) {
                        $searchTotal = $value;
                    }

            }
        }
        return $searchTotal;
    }

    function updateteToggleItem($base, $id, $day, $currentValue,$user)
    {
        $data = json_decode(file_get_contents("model/dataStorage/todos.json"), true);

        if ($base == 'saint-loup') {
            $arrayPos = 0;
        }
        if ($base == 'payerne') {
            $arrayPos = 1;
        }
        if ($base == 'yverdon') {
            $arrayPos = 2;
        }
        if ($base == 'valee-de-joux') {
            $arrayPos = 3;
        }
        if ($base == 'sainte-croix') {
            $arrayPos = 4;
        }
        $newData = $data;
        $index = 0;
        foreach ($newData[$arrayPos][$base][0][$day] as $dayPos) {
            if ($dayPos['id'] == $id) {
                $newData[$arrayPos][$base][0][$day][$index]['value'] = !$newData[$arrayPos][$base][0][$day][$index]['value'];
                $newData[$arrayPos][$base][0][$day][$index]['acknowledged_by']=$user;
            }
            $index++;
        }
        file_put_contents("model/dataStorage/todos.json", json_encode($newData));

    }

    /**
     * TODO Sauve l'ensemble des items dans le fichier json
     * ...
     */
    function updateTodoListItems($items)
    {
        file_put_contents("model/dataStorage/items.json", json_encode($items));
    }

    /**
     * Modifie un item précis
     * Le paramètre $item est un item complet (donc un tableau associatif)
     * ...
     */
    function replacementItem($tableauModification, $id)
    {
        $reads = readTodoListItems();
        $compteur = 0;
        $compteur2 = 0;
        $compteur3 = 0;
        foreach ($reads as $value) {
            if ($value ['id'] == $id) {
                $reads[$compteur] = $tableauModification;
            }
            $compteur++;
        }


        /*$items = getTodoListItems();
        // TODO: retrouver l'item donnée en paramètre et le modifier dans le tableau $items
        saveTodoListItem($items);*/
    }

    /**
     * Détruit un item précis, identifié par son id
     * ...
     */

    function delteItem($id)
    {
        $data = json_decode(file_get_contents("model/dataStorage/todos.json"), true);
        $index = 0;
        foreach ($data as $value) {
            if ($value ['id'] == $id) {
                unset($data[$index]);
                $newData = array_values($data);
                file_put_contents("model/dataStorage/todos.json", json_encode($newData));


                //  $searchTotal = $value;
            }
            $index++;
        }
        // return $searchTotal;
//    return $data;
    }

    /**
     * Ajoute un nouvel item
     * Le paramètre $item est un item complet (donc un tableau associatif), sauf que la valeur de son id n'est pas valable
     * puisque le modèle ne l'a pas encore traité
     * ...
     */
    function createTodoListItem($item)
    {
        $items = getTodoListItems();
        // TODO: trouver un id libre pour le nouvel id et ajouter le nouvel item dans le tableau
        saveTodoListItem($items);
        return ($item); // Pour que l'appelant connaisse l'id qui a été donné
    }


    function updateItem($id, $tableauModification, $day, $base)

    {


        $data = json_decode(file_get_contents("model/dataStorage/todos.json"), true);

        if ($base == 'saint-loup') {
            $arrayPos = 0;
        }
        if ($base == 'payerne') {
            $arrayPos = 1;
        }
        if ($base == 'yverdon') {
            $arrayPos = 2;
        }
        if ($base == 'valee-de-joux') {
            $arrayPos = 3;
        }
        if ($base == 'sainte-croix') {
            $arrayPos = 4;
        }
        $newData = $data;
        $index = 0;
        foreach ($newData[$arrayPos][$base][0][$day] as $dayPos) {
            if ($dayPos['id'] == $id) {
                $newData[$arrayPos][$base][0][$day][$index] = $tableauModification;

            }
            $index++;
        }
        file_put_contents("model/dataStorage/todos.json", json_encode($newData));


        /*
            $data = readTodoListItems();
            $index = 0;
            foreach ($data as $value) {
                if ($value ['id'] == $id) {
                    $data[$index] = $tableauModification;
                    $newData = array_values($data);
                    file_put_contents("model/dataStorage/todos.json", json_encode($newData));


                    //  $searchTotal = $value;
                }
                $index++;
            }*/
        // return $searchTotal;
//    return $data;
    }

}


function resetAllTasksRequest($base)

{
$yes =$base;

    $data = json_decode(file_get_contents("model/dataStorage/todos.json"), true);


//    $newData = $data;
//    $index = 0;
    $dayArray[0] = 'lundi';
    $dayArray[1] = 'mardi';
    $dayArray[2] = 'mercredi';
    $dayArray[3] = 'jeudi';
    $dayArray[4] = 'vendredi';
    $dayArray[5] = 'samedi';
    $dayArray[6] = 'dimanche';


    if ($base == 'saint-loup') {
        $arrayPos = 0;
    }
    if ($base == 'payerne') {
        $arrayPos = 1;
    }
    if ($base == 'yverdon') {
        $arrayPos = 2;
    }
    if ($base == 'valee-de-joux') {
        $arrayPos = 3;
    }
    if ($base == 'sainte-croix') {
        $arrayPos = 4;
    }

    if (isset($arrayPos)) {
        $datas = $data[$arrayPos][$base];
    }
    $newData = $data;
        foreach ($datas as $bases) {
            foreach ($bases as $baseContent) {
                $index = count($baseContent);
                $myIndex=0;
                foreach ($baseContent as $days) {


                    $array = $days;
                    $yes =$array;
                    $array["value"]=null;
                   // $newData[0]["saint-loup"][0]["lundi"][0]["value"]
                    $newData[$arrayPos][$base][0]['lundi'][$myIndex]["value"]=false;
                    $newData[$arrayPos][$base][0]['mardi'][$myIndex]["value"]=false;
                    $newData[$arrayPos][$base][0]['mercredi'][$myIndex]["value"]=false;
                    $newData[$arrayPos][$base][0]['jeudi'][$myIndex]["value"]=false;
                    $newData[$arrayPos][$base][0]['vendredi'][$myIndex]["value"]=false;
                    $newData[$arrayPos][$base][0]['samedi'][$myIndex]["value"]=false;
                    $newData[$arrayPos][$base][0]['dimanche'][$myIndex]["value"]=false;
                  //  $newData[$arrayPos][$base][0][$day]='false';
                    $myIndex++;

/*                    foreach ($day as $dayContent) {
                        $yes = 1;
                        $array = $dayContent;
                        $dayContent['value'] = false;
                        $array = $data[0][$base][0][$day][$dayContent];
                        $yes =$array;

                    }*/
                }
            }
        }



    /*    foreach ($dayArray as $day) {
            $dayIndex=0;
            foreach ($data[0][$base][0][$day] as $dayValues) {
                $index=0;
                foreach ($dayValues as $key => &$value) {
                    $newData[0]["saint-loup"][0][$dayIndex][$index]["value"]=false;
                    //$yes =$value;
                   // $dayValues["value"]=false;
                    //$array = $data[0][$base][0][$day][$dayIndex];
                    //$array['value'] = false;
                   // $newData[0][$base][0][$day][$dayIndex] = $array;
                    //   = false;
                    // $newData[0][$base][0][$day][$index]['value']
                 //   $dayIndex++;
                $index++;
                }
                $dayIndex++;
            }
        }*/

    // $newData = $data;
    file_put_contents("model/dataStorage/todos.json", json_encode($newData));


    /*
        $data = readTodoListItems();
        $index = 0;
        foreach ($data as $value) {
            if ($value ['id'] == $id) {
                $data[$index] = $tableauModification;
                $newData = array_values($data);
                file_put_contents("model/dataStorage/todos.json", json_encode($newData));


                //  $searchTotal = $value;
            }
            $index++;
        }*/
    // return $searchTotal;
//    return $data;


}

