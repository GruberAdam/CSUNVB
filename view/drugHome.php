<?php
ob_start();
$title = "CSU-NVB - Stupéfiants";
?>

<div class="row m-2">

    <h1>Contrôle de stupéfiants Hebdomadaire</h1><br>
    <a href="index.php?action=drugAdd"><button class="btn btn-primary m-1 pull-right">Ajouter</button></a>
    <form>

        <table class=" ">

            <tbody ><tr >

                <?php

                $file = 'model/dataStorage/daystups.json';

                $fs = fopen($file, "w");

                $data = json_encode($_POST);
                fwrite($fs, $data);
                fclose($fs);


                ?>
                <?php
                $compteur3 = 1;
                $compteur4 = 0;
                $data = $_POST;
               echo "Semaine N°"; echo "<input id='semaine' type='text'>";   echo"<select id='site' size='1'><option>Saint-loup<option>Payerne<option>Valley-de-Joux<option>Yverdon</select>";
                echo " <td id='rowh1cel0' height='100' ><p class='' onmouseover='getDate(this)' ></p></td>";
                for($compteur=1;$compteur<14;$compteur++){

                    if ($compteur==$compteur3){
                        echo " <th id='rowh1cel$compteur3' height='100' colspan='4'><input type='text' class='FirstCase' onmouseover='getDate(this)' ></input></th>";
                        $compteur3 = $compteur3 + 2;
                    }




                }
                ?>
            </tr>

            <tr>

                <?php
                echo "<td id='h2cel0' class='input'><p id='ph2cel$compteur' class='input'></p></td>";
                for($compteur2=1;$compteur2<29;$compteur2++){




                    echo "<td id='h2cel$compteur2' class='input '><p id='ph2cel$compteur' class='input'></p></td>";



                }
                ?>
            </tr>

            <?php
            for ($compteur5=0;$compteur5<27;$compteur5++) {

                echo  "<tr>";

                    for ($compteur = 0; $compteur < 29; $compteur++) {
                        if($compteur5 == 0 && $compteur == 0){
                            echo "<td id='lig{$compteur5}cel{$compteur}' >Morphine</td>";
                        }else {
                        if (!isset($data["inputlig{$compteur5}cel{$compteur}"])) {
                            echo "<td id='lig{$compteur5}cel{$compteur}' ><input type='text' name='inputlig{$compteur5}cel{$compteur}'  class='input' value='0'></td>";
                        } else {
                            echo "<td id='lig{$compteur5}cel{$compteur}' ><input type='text' name='inputlig{$compteur5}cel{$compteur}'  class='input' value='{$data["inputlig{$compteur5}cel{$compteur}"]}'></td>";
                        }
                    }
                }
                echo  "</tr>";
            }
            ?>
            </tbody>

        </table>
    </form>










</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
