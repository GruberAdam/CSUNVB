<?php
ob_start();
$title = "CSU-NVB - Stupéfiants";
?>

<div class="row m-2">

    <h1>Contrôle de stupéfiants Hebdomadaire</h1><br>
    <a href="index.php?action=drugAdd"><button class="btn btn-primary m-1 pull-right">Ajouter</button></a>
    <form hidden>
    <table>
        <thead><tr><th></th><th>Stupéfiants</th></tr></thead>
        <tbody><tr >
            <td>Morphine N*</td>
            <?php
            $compteur3 = 0;
            $compteur4 = 0;
            for($compteur=0;$compteur<14;$compteur++){


                if ($compteur==$compteur3){
                    echo " <td id='rowh1cel$compteur3' rowspan='2' height='100'><p class='sideway'>Pharmacie</p></td>";
                    $compteur3 = $compteur3 + 2;
                }

                if ($compteur==$compteur4){
                    echo " <td id='colh1cel$compteur4' colspan='7' onmouseover='getDate(this)' ><p id='pcolh1cel$compteur4' ></p></td>";

                   $compteur4 = $compteur4 + 2;

                }



            }
            ?>
        </tr>
        <tr>
            <?php
            for($compteur2=0;$compteur2<6;$compteur2++){




                echo "<td id='h2cel$compteur2'><p id='ph2cel$compteur'></p></td>";



            }
            ?>
        </tr>

            <?php
            for ($compteur5=0;$compteur5<27;$compteur5++) {

              echo  "<tr>";
                for ($compteur = 0; $compteur < 57; $compteur++) {


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
