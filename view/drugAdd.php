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
$day = 1;
$day2 = 1;
if(idate("w") == 0){

    $currentday = 6;
}else {
    $currentday = idate("w")-1;
}

for($a = 0; $a <= 6; $a++){
    if($currentday == 0) {
        $day = 1;
    $day2 = 1;
    }
    if($currentday == 1){
        $day = 4;
        $day2 = 5;

    }
    if($currentday == 2){
        $day = 7;
        $day2 = 9;

    }
    if($currentday == 3){
        $day = 10;
        $day2 = 13;

    }
    if($currentday == 4){
        $day = 13;
        $day2 = 17;

    }
    if($currentday == 5){
        $day = 16;
        $day2 = 21;

    }
    if($currentday == 6){
        $day = 19;
        $day2 = 25;

    }
}

?>

<div class="row m-2">

    <h1>Contrôle de stupéfiants Hebdomadaire</h1><br>
    <button class="btn btn-primary m-1 pull-right">Ajouter</button>
    <form action="index.php?action=drugs&currentday=<?php if(isset($_GET["day"])){ echo $_GET["day"];
    }else{
        echo $day2;
    }?>"  method="post">

    <table id="tableAdd">

        <tbody id="tbodyAdd"><tr class="trh">
            <?php


            $compteur3 = 0;
            $compteur4 = 0;

            ?>
        </tr>
        <tr>
            <?php

            ?>
        </tr>

            <?php



                  if(isset($_GET["day"])){
                      $sim_day = $_GET["day"];
                      $data = @$_POST;
                         for ($compteur5 = 0; $compteur5 < 27; $compteur5++) {
                             echo "<tr>";

                               for ($compteur = $sim_day; $compteur <= 3+ $sim_day; $compteur++) {
                                   if($sim_day >= 9){

                                       if($sim_day == 13){
                                           $buff_compteur = $compteur - 3;

                                       }elseif($sim_day == 17){
                                           $buff_compteur = $compteur - 4;
                                       }elseif($sim_day == 21){
                                           $buff_compteur = $compteur - 5;
                                       }elseif($sim_day == 25){
                                           $buff_compteur = $compteur - 6;
                                       }else {
                                           $buff_compteur = $compteur - 2;
                                       }

                                   }else {
                                       $buff_compteur = $compteur - 1;
                                   }
                                   if ($compteur == $sim_day && $compteur5 == 0 ) {
                                       echo "<td id='lig{$compteur5}cel{$buff_compteur}'  class='tdAdd'><input type='text' name='inputlig{$compteur5}cel{$buff_compteur}'  class='input' disabled value='-'></td>";
                                   } elseif ($compteur == $sim_day + 3 && $compteur5 == 0 ) {
                                       echo "<td id='lig{$compteur5}cel{$buff_compteur}'  class='tdAdd'><input type='text' name='inputlig{$compteur5}cel{$buff_compteur}'  class='input' disabled value='-'></td>";
                                   } else { if(isset($data["inputlig{$compteur5}cel{$compteur}"]) && $compteur5 != 0) {


                                       echo "<td id='lig{$compteur5}cel{$compteur}'  class='tdAdd'><input type='text' name='inputlig{$compteur5}cel{$compteur}'  class='input' value='{$data["inputlig{$compteur5}cel{$compteur}"]}' ></td>";
                                   }else if( $compteur5 != 0) {
                                       echo "<td id='lig{$compteur5}cel{$compteur}'  class='tdAdd'><input type='text' name='inputlig{$compteur5}cel{$compteur}'  class='input' value=''></td>";
                                   }else{
                                       echo "<td id='lig{$compteur5}cel{$buff_compteur}'  class='tdAdd'><input type='text' name='inputlig{$compteur5}cel{$buff_compteur}'  class='input'  value='{$data["inputlig{$compteur5}cel{$buff_compteur}"]}'></td>";
                                   }
                                   }





                               }
                             echo "</tr>";
                         }
                  }  else {

                      for ($compteur5 = 0; $compteur5 < 1; $compteur5++) {

                          echo "<tr>";
                          for ($compteur = $day; $compteur < 4 + $day; $compteur++) {

                              if ($compteur == $day) {
                                  echo "<td id='lig{$compteur5}cel{$compteur}'  class='tdAdd'><input type='text' name='inputlig{$compteur5}cel{$compteur}'  class='input' disabled value='-'></td>";
                              } elseif ($compteur == $day + 3) {
                                  echo "<td id='lig{$compteur5}cel{$compteur}'  class='tdAdd'><input type='text' name='inputlig{$compteur5}cel{$compteur}'  class='input' disabled value='-'></td>";
                              } else {

                                  echo "<td id='lig{$compteur5}cel{$compteur}'  class='tdAdd'><input type='text' name='inputlig{$compteur5}cel{$compteur}'  class='input' value='' ></td>";
                              }
                          }
                          echo "</tr>";
                      }
                  }
            ?>
        </tbody>

    </table>

        <input type="submit"  class='btn btn-primary w-100'>
    </form>
    <?php if(isset($_GET["day"])):?>
    <button disabled onclick="addRows()"  class='btn btn-primary w-100'>Ajouter ligne</button>
    <?php else: ?>
        <button  onclick="addRows() "  class='btn btn-primary w-100'>Ajouter ligne</button>
    <?php endif; ?>
</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
