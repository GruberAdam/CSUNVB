<?php
/**
 * Created by PhpStorm
 * Project's name :
 * Use :
 * User : Jessy.BORCARD
 * Date : 10.02.2020
 * Time : 11:20
 *
 *
 */

ob_start();
$title = "CSU-NVB - Stupéfiants";
?>

<div class="row m-2">

    <h1>Contrôle de stupéfiants Hebdomadaire</h1><br>
    <button class="btn btn-primary m-1 pull-right">Ajouter</button>
    <form >
    <table>
        <thead><tr><th></th><th>Stupéfiants</th></tr></thead>
        <tbody><tr style="height: 100px;">
            <td>Morphine N*</td>
            <?php
            $compteur3 = 0;
            $compteur4 = 0;
            for($compteur=0;$compteur<7;$compteur++){


                if ($compteur==$compteur3){
                    echo " <td id='rowh1cel$compteur3' rowspan='2'><p class='sideway'>Pharmacie</p></td>";

                }

                if ($compteur==$compteur4){
                    echo " <td id='colh1cel$compteur4' colspan='7' onmouseover='getDate(this)' ><p id='pcolh1cel$compteur4' ></p></td>";
                    

                }



            }
            ?>
        </tr>
        <tr>
            <?php
            for($compteur2=0;$compteur2<50
            ;$compteur2++){




                echo "<td id='h2cel$compteur2'><p id='ph2cel$compteur'></p></td>";



            }
            ?>
        </tr>

            <?php
            for ($compteur5=0;$compteur5<1;$compteur5++) {

              echo  "<tr>";
                for ($compteur = 0; $compteur < 7; $compteur++) {


                    echo "<td id='lig{$compteur5}cel{$compteur}' ><input type='text' name='inputlig{$compteur5}cel{$compteur}'  class='input'></td>";

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
