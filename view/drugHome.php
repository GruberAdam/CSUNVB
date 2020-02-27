<?php
ob_start();
$title = "CSU-NVB - Stupéfiants";
?>

<div class="row m-2">

    <h1>Contrôle de stupéfiants Hebdomadaire</h1><br>
    <a href="index.php?action=drugAdd"><button class="btn btn-primary m-1 pull-right">Ajouter</button></a>
    <form>
        <table class="">
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
                var_dump($_POST);
                echo " <td id='rowh1cel0' height='100' ><p class='' onmouseover='getDate(this)' ></p></td>";
                for($compteur=1;$compteur<15;$compteur++){

                    if ($compteur==$compteur3){
                        echo " <td id='rowh1cel$compteur3' height='100' colspan='4'><p class='  FirstCase' onmouseover='getDate(this)' ></p></td>";
                        $compteur3 = $compteur3 + 2;
                    }




                }
                ?>
            </tr>

            <tr>

                <?php
                echo "<td id='h2cel0' class='input'><p id='ph2cel$compteur' class='input'></p></td>";
                for($compteur2=1;$compteur2<30;$compteur2++){




                    echo "<td id='h2cel$compteur2' class='input'><p id='ph2cel$compteur' class='input'></p></td>";



                }
                ?>
            </tr>

            <?php
            for ($compteur5=0;$compteur5<27;$compteur5++) {

                echo  "<tr>";
                for ($compteur = 0; $compteur < 29; $compteur++) {

                    if(!isset( $data["inputlig{$compteur5}cel{$compteur}"])){
                        echo "<td id='lig{$compteur5}cel{$compteur}' ><input type='text' name='inputlig{$compteur5}cel{$compteur}'  class='Case' value='0'></td>";
                    }
                    else {
                        echo "<td id='lig{$compteur5}cel{$compteur}' ><input type='text' name='inputlig{$compteur5}cel{$compteur}'  class='Case' value='{$data["inputlig{$compteur5}cel{$compteur}"]}'></td>";
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
