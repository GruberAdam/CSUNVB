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
                    echo " <td rowspan='2'>[___]</td>";
                    $compteur3 = $compteur3 + 2;
                }

                if ($compteur==$compteur4){
                    echo " <td colspan='5'>[___]</td>";

                   $compteur4 = $compteur4 + 2;

                }

                echo "<td>[___]</td>";


            }
            ?>
        </tr>
        <tr>
            <?php
            for($compteur2=0;$compteur2<50;$compteur2++){




                echo "<td>[___]</td>";



            }
            ?>
        </tr></tbody>

    </table>
    </form>
</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
