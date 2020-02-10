<?php
ob_start();
$title = "CSU-NVB - Stupéfiants";
?>

<div class="row m-2">
    <h1>Contrôle de stupéfiants Hebdomadaire</h1>
    <form>
    <table>
        <thead><tr><th></th><th>Stupéfiants</th></tr></thead>
        <tbody><tr>
            <td>Morphine N*</td>
            <?php
            $compteur3 = 0;
            $compteur4 = 0;
            for($compteur=0;$compteur<14;$compteur++){


                if ($compteur==$compteur3){
                    echo " <td id='rowh1cel$compteur3' rowspan='2'>[___]</td>";
                    $compteur3 = $compteur3 + 2;
                }

                if ($compteur==$compteur4){
                    echo " <td id='colh1cel$compteur4' colspan='5'>[___]</td>";

                   $compteur4 = $compteur4 + 2;

                }

                echo "<td id='h1cel$compteur'>[___]</td>";


            }
            ?>
        </tr>
        <tr>
            <?php
            for($compteur2=0;$compteur2<50;$compteur2++){




                echo "<td id='h2cel$compteur2'>[___]</td>";



            }
            ?>
        </tr>

            <?php
            for ($compteur5=0;$compteur5<27;$compteur5++) {

              echo  "<tr>";
                for ($compteur = 0; $compteur < 57; $compteur++) {


                    echo "<td id='lig{$compteur5}cel{$compteur}' >[___]</td>";

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
