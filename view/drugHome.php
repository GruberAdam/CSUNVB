<?php
ob_start();
$title = "CSU-NVB - Stupéfiants";
?>

<div class="row m-2">

    <h1>Contrôle de stupéfiants Hebdomadaire</h1><br>
    <a href="index.php?action=drugAdd"><button class="btn btn-primary m-1 pull-right">Ajouter</button></a>
    <form>
        <table class="input">
            <tbody><tr >
                <td style="weight=100px ;">Morphine N*</td>
                <?php

                $file = 'model/dataStorage/daystups.json';

                $fs = fopen($file, "w");

                $data = json_encode($_POST);
                fwrite($fs, $data);
                fclose($fs);


                ?>
                <?php
                $compteur3 = 0;
                $compteur4 = 0;
                $data = $_POST;
                var_dump($_POST);
                for($compteur=0;$compteur<14;$compteur++){


                    if ($compteur==$compteur3){
                        echo " <td id='rowh1cel$compteur3' rowspan='2' height='100'><p class='sideway center'>Pharmacie</p></td>";
                        $compteur3 = $compteur3 + 2;
                    }

                    if ($compteur==$compteur4){
                        echo " <td id='colh1cel$compteur4' colspan='8' onmouseover='getDate(this)' class='input2'><p id='pcolh1cel$compteur4' ></p></td>";

                        $compteur4 = $compteur4 + 2;

                    }



                }
                ?>
            </tr>
            <tr>
                <?php
                for($compteur2=0;$compteur2<56;$compteur2++){




                    echo "<td id='h2cel$compteur2' class='input'><p id='ph2cel$compteur' class='input'></p></td>";



                }
                ?>
            </tr>

            <?php
            for ($compteur5=0;$compteur5<27;$compteur5++) {

                echo  "<tr>";
                for ($compteur = 0; $compteur < 64; $compteur++) {

                    if(!isset( $data["inputlig{$compteur5}cel{$compteur}"])){
                        echo "<td id='lig{$compteur5}cel{$compteur}' ><input type='text' name='inputlig{$compteur5}cel{$compteur}'  class='input' value='0'></td>";
                    }
                    else {
                        echo "<td id='lig{$compteur5}cel{$compteur}' ><input type='text' name='inputlig{$compteur5}cel{$compteur}'  class='input' value='{$data["inputlig{$compteur5}cel{$compteur}"]}'></td>";
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
