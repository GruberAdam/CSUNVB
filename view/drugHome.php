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
            for($compteur=1;$compteur<63;$compteur++){
                echo "<td>[___]</td>";
            }
            ?>
        </tr></tbody>
        <tbody><tr><td> ...</td>
            <?php
            for($compteur2=1;$compteur2<63;$compteur2++){
                echo "<td>[___]</td>";


                if ($compteur2==1){
                    echo " <td rowspan='2'></td>";
                }
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
