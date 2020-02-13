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
        <div class="center">
        <label>Site:</label><select onchange="ambulances(this)">
            <option name="Payerne">Payerne</option>
            <option name="Sainte-croix">Sainte-croix</option>
            <option name="Yverdon">Yverdon</option>
        </select>
        </div>
    <table id="tableAdd">

        <tbody id="tbodyAdd"><tr class="trh">
            <td>Morphine N*</td>
            <?php


            $compteur3 = 0;
            $compteur4 = 0;
            for($compteur=0;$compteur<9;$compteur++){


                if ($compteur==$compteur3){
                    echo " <td id='rowh1cel$compteur3' rowspan='2' height='100'><p class='sideway' >Pharmacie</p></td>";

                }

                if ($compteur==$compteur4){
                    echo " <td id='colh1cel$compteur4' colspan='7' onmouseover='getDate(this)' class='center cellh100 big-text' height='100'  >". date("l d M y") . " <p id='pcolh1cel$compteur4' ></p></td>";
                    

                }



            }
            ?>
        </tr>
        <tr>
            <?php
            for($compteur2=0;$compteur2<7
            ;$compteur2++){
                if($compteur2 > 0) {
                    $ambulance = $compteur2 + 50;
                }else{
                    $ambulance = "";
                }

                echo "<td id='h2cel$compteur2'><p id='ph2cel$compteur'>$ambulance</p></td>";



            }
            ?>
        </tr>

            <?php
            for ($compteur5=0;$compteur5<1;$compteur5++) {

              echo  "<tr>";
                for ($compteur = 0; $compteur < 8; $compteur++) {


                    echo "<td id='lig{$compteur5}cel{$compteur}' ><input type='text' name='inputlig{$compteur5}cel{$compteur}'  class='input'></td>";

                }
                echo  "</tr>";
            }
            ?>
        </tbody>

    </table>

        <input type="submit">
    </form>
    <button  onclick="addRows()">Ajouter ligne</button>
</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
