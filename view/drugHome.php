<?php
ob_start();
$title = "CSU-NVB - Stupéfiants";
?>

<div class="row m-2 ">

    <h1>Contrôle de stupéfiants Hebdomadaire</h1><br>
    <a href="index.php?action=drugAdd"><button class="btn btn-primary m-1 pull-right">Ajouter</button></a>
    <form method="post" action="index.php?action=finish">

        <table  id="dtHorizontalExample"  width="100%">

            <tbody class="col-lg-6"><tr >

                <?php




                ?>
                <?php
                $compteur3 = 1;
                $compteur4 = 0;
                $compteur6 = 1;
                $compteur7 = 1;
                $compteur8 = 1;
                $compteur9 = 1;
                $drug = "";
                $data = $_POST;


                echo "Semaine N°";   echo "<input id='semaine' type='text' name='semaine' required>";  echo"<select id='site' size='1' name='site'><option name='Saintloup'>Saint-loup<option name='Payerne'>Payerne<option name='ValleydeJoux'>Valley-de-Joux<option name='Yverdon'>Yverdon</select>";
                echo " <td id='rowh1cel0' height='100' ><p class='' onmouseover='getDate(this)' ></p></td>";
                setlocale(LC_TIME, "fr");
                $dateday = -1;
                $dateday2 = idate("w") - idate("w") + 1;

                $dateyear = idate("Y");
                $datemonth = idate("m");
                for($compteur=1;$compteur<14;$compteur++){


                    if ($compteur==$compteur3){


                            $dailydate= idate("d")-idate("w")+1;


            echo " <th  id='rowh1cel$compteur3' height='100' colspan='4' class='center'>". strftime("%A", mktime(0, 0, 0, 0 ,  $dateday, 0 ))  .  strftime(" %d %B %Y", mktime(0, 0, 0,$datemonth , $dailydate + $dateday + 1 , $dateyear )). "</th>";


                        $dateday++;
                        $compteur3 = $compteur3 + 2;
                    }
                    if (1 == idate('w')){
                        $var = 1;

                    }
                    if (2 == idate('w')){
                        $var = 5;
                    }
                    if (3 == idate('w')){
                        $var = 9;
                    }
                    if (4 == idate('w')){
                        $var = 13;
                    }
                    if (5 == idate('w')){
                        $var = 17;
                    }
                    if (6 == idate('w')){
                        $var = 21;
                    }
                    if (0 == idate('w')){
                        $var = 25;
                    }
                    $temp = $var;


                }
                ?>
            </tr>

            <tr>

                <?php

                echo "<td id='h2cel0' class='cel0'><p id='ph2cel$compteur' class='input'></p></td>";
                for($compteur2=1;$compteur2<23;$compteur2++){



                    if($compteur2 == $compteur8) {
                        echo "<td id='h2cel$compteur2' class='celsmall' ><p id='ph2cel$compteur' class= 'input'  >pharma</p></td>";
                        if($compteur2 == $compteur8 && ($compteur2 != 1 && $compteur2 != 22)) {
                            echo "<td id='h2cel{$compteur2}2' class='celsmall' ><p id='ph2cel$compteur' class='input'  >pharma</p></td>";

                        }
                        $compteur8 = $compteur8 + 3;
                    }else{
                        echo "<td id='h2cel$compteur2'><input type='text' name='inputph2cel{$compteur}'  class='input' value=''></td>";
                    }


                }
                ?>
            </tr>

            <?php
            for ($compteur5=0;$compteur5<=28;$compteur5++) {


                if($compteur5 == 0){
                    $drug = "Morphine";
                }elseif($compteur5 == 11){
                    $drug = "Fentanyl";
                }elseif($compteur5 == 21){
                    $drug = "TEMESTA";
                }

                echo  "<tr>";


                for ($compteur = 0; $compteur < 29; $compteur++) {

                    if($compteur5 == 0 && $compteur == 0){
                        echo "<td id='{$drug}lig{$compteur5}cel{$compteur}' class='cel{$compteur}'  >Morphine</td>";
                    }else if ($compteur5 == 11 && $compteur == 0){

                        echo "<td id='{$drug}lig{$compteur5}cel{$compteur}' class='cel{$compteur}' >Fentanyl</td>";

                    }else if ($compteur5 == 21 && $compteur == 0) {

                        echo "<td id='{$drug}lig{$compteur5}cel{$compteur}' class='cel{$compteur}' >TEMESTA</td>";
                    } else if ($compteur5 == 27 && $compteur == 0) {
                        echo "<td id='{$drug}lig{$compteur5}cel{$compteur}' class='cel{$compteur}'  >VISA</td>";
                    } else if ($compteur5 == 28 && $compteur == 0) {
                        echo "<td id='lig{$compteur5}cel{$compteur}' class='cel{$compteur}'  >Modifications</td>";
                    }else{ if ($var == date ('d')){
                        echo '<td><input readonly   ></td>';

                    }
                    else{


                        if($compteur == 0){

                            if (!isset($data["inputlig{$compteur5}cel{$compteur}"])) {
                                echo "<td id='{$drug}lig{$compteur5}cel{$compteur}' class='cel{$compteur}' ><input type='text' name='{$drug}inputlig{$compteur5}cel{$compteur}'  class='input' value=''></td>";
                            } else {
                                echo "<td id='{$drug}lig{$compteur5}cel{$compteur}' class='cel{$compteur}' ><input type='text' name='{$drug}inputlig{$compteur5}cel{$compteur}'  class='input' value='{$data["inputlig{$compteur5}cel{$compteur}"]}'></td>";
                            }

                        }else{
                            if($compteur5 == 0 && $compteur <= 22){
                                if($compteur == $compteur6){
                                echo "<td id='lig{$compteur5}cel{$compteur}' ><input type='text' name='{$drug}inputlig{$compteur5}cel{$compteur}'  class='input' value='-' disabled></td>";
                                if($compteur == $compteur6 && ($compteur != 1 && $compteur != 22)) {
                                    echo "<td id='lig{$compteur5}cel{$compteur}2' ><input type='text' name='{$drug}inputlig{$compteur5}cel{$compteur}'  class='input' value='-' disabled></td>";
                                }
                                    $compteur6 = $compteur6 + 3;
                                }elseif($compteur <= 22){
                                    if (isset($data["inputlig{$compteur5}cel{$compteur}"])) {
                                      if($compteur <= $var+3){

                                          echo "<td id='{$drug}lig{$compteur5}cel{$compteur}' ><input type='text' name='{$drug}inputlig{$compteur5}cel{$compteur}'  class='input' value='{$data["inputlig{$compteur5}cel{$compteur}"]}'></td>";



                                      }else {

                                          echo "<td id='{$drug}lig{$compteur5}cel{$compteur}' ><input type='text' name='{$drug}inputlig{$compteur5}cel{$compteur}'  class='input' value='{$data["inputlig{$compteur5}cel{$compteur}"]}' readonly></td>";
                                      }
                                    }else{
                                        if($compteur <= $var+3 && $compteur >= $var){



                                            echo "<td id='{$drug}lig{$compteur5}cel{$compteur}' ><input type='text' name='{$drug}inputlig{$compteur5}cel{$compteur}'  class='input' value=''></td>";


                                        }else {

                                            echo "<td id='{$drug}lig{$compteur5}cel{$compteur}' ><input type='text' name='{$drug}inputlig{$compteur5}cel{$compteur}'  class='input' value='' readonly></td>";
                                        }
                                    }

                                }



                            }elseif($compteur5 != 0){
                                if($compteur == $compteur7 && $compteur5 == 27){
                                    if($compteur7 == $var){
                                        echo "<td id='{$drug}lig{$compteur5}cel{$compteur}' class='cel{$compteur}' colspan='4'><input type='text' name='{$drug}inputlig{$compteur5}cel{$compteur}'  class='input' value='' ></td>";
                                    }else{
                                    echo "<td id='{$drug}lig{$compteur5}cel{$compteur}' class='cel{$compteur}' colspan='4'><input type='text' name='{$drug}inputlig{$compteur5}cel{$compteur}'  class='input' value='' readonly></td>";
                                    }
                                    $compteur7 = $compteur7 + 4;
                                }
                                else if ( $compteur5 != 27 && $compteur5 != 28)
                                    {
                                    if (!isset($data["inputlig{$compteur5}cel{$compteur}"])) {
                                        if($compteur <= $var+3) {
                                            echo "<td id='{$drug}lig{$compteur5}cel{$compteur}' ><input type='text' name='{$drug}inputlig{$compteur5}cel{$compteur}'  class='input' value=''></td>";
                                        }else{
                                                echo "<td id='{$drug}lig{$compteur5}cel{$compteur}' ><input type='text' name='{$drug}inputlig{$compteur5}cel{$compteur}'  class='input' value='' readonly></td>";
                                            }
                                    } else {
                                        if($compteur <= $var+3 && $compteur >= $var) {

                                            echo "<td id='{$drug}lig{$compteur5}cel{$compteur}' ><input type='text' name='{$drug}inputlig{$compteur5}cel{$compteur}'  class='input' value='{$data["inputlig{$compteur5}cel{$compteur}"]}'></td>";
                                        }else {

                                            echo "<td id='{$drug}lig{$compteur5}cel{$compteur}' ><input type='text' name='{$drug}inputlig{$compteur5}cel{$compteur}'  class='input' value='{$data["inputlig{$compteur5}cel{$compteur}"]}' readonly></td>";
                                        }
                                    }
                                }else if ($compteur == $compteur9 && $compteur5 == 28) {

                                    if($compteur9 == $var){

                                        echo "<td id='{$drug}lig{$compteur5}cel{$compteur}' class='cel{$compteur}' colspan='4'><a href='index.php?action=drugAdd&day={$compteur}'><button class='btn btn-primary w-100' type='button'>Modifier</button></a></td>";
                                    }else {
                                        echo "<td id='{$drug}lig{$compteur5}cel{$compteur}' class='cel{$compteur}' colspan='4'><a ><button class='btn btn-primary w-100' type='button' disabled>Modifier</button></a></td>";

                                    }
                                    $compteur9 = $compteur9 + 4;
                                }
                            }
                        }

                    }
                }   }
                echo  "</tr>";








            }
            ?>
           </tbody>

        </table>
<?php if(0 != idate('w')): ?>
        <button class="btn btn-primary w-100" disabled>Cloturer</button>
        <?php else: ?>
    <button class="btn btn-primary w-100" >Cloturer</button>
        <?php endif; ?>
    </form>










</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
