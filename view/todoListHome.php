<?php
ob_start();
$rows = 0; // Column count

$title = "CSU-NVB - Tâches hebdomadaires";
?>


<link rel="icon" type="image/png" href="assets/images/logo.png"/>

<?php
$date = getdate();
?>


<script type="text/javascript"
        src="http://code.jquery.com/jquery-1.10.1.min.js"></script>


<article>

    <br>

    <div class="divTable">

        <?php foreach ($results

                       as $result) { ?>
            <?php foreach ($result as $auj => &$todo) {
                switch ($auj) {
                    case 'lundi':
                        $day = 'Monday';
                        $today = $auj;
                        break;

                    case 'mardi':
                        $day = 'Tuesday';
                        $today = $auj;
                        break;

                    case 'mercredi':
                        $day = 'Wednesday';
                        $today = $auj;
                        break;

                    case 'jeudi':
                        $day = 'Thursday';
                        $today = $auj;
                        break;

                    case 'vendredi':
                        $day = 'Friday';
                        $today = $auj;
                        break;

                    case 'samedi':
                        $day = 'Saturday';
                        $today = $auj;
                        break;

                    case 'dimanche':
                        $day = 'Sunday';
                        $today = $auj;
                        break;
                } ?>


                <?php if ($day == $date['weekday']) { ?>

                    <div class="divTableHeading">
                        <div class="divTableRow">
                            <div class="divTableHead"><h5>Journée en cours</h5><?= ucfirst($today) ?> à <?= $base ?>
                            </div>
                            <div class="divTableHead"><p align="center"><?= date("Y/m/d") ?></p></div>
                            <div class="divTableHead"><p id="show" align="center"></p></div>
                        </div>
                    </div>

                    <div class="divTableBody">
                        <?php foreach ($todo as $values) { ?>
                            <div class="divTableCell" id="element">
                                <form hidden id="myForm" method="get">
                                    <input name="idItem" id="idItem" type="hidden" value="<?= $values["id"] ?>"/><br/>
                                    <input name="base" id="base" type="hidden" value="<?= $values["base"] ?>"/><br/>
                                    <input name="day" id="day" type="hidden" value="<?= $auj ?>"/><br/>
                                </form>


                                <a href="index.php?action=selctedItem&idItem=<?= $values["id"] ?>&base=<?= $values["base"] ?>&day=<?= $auj ?>">
                                    <button class="btn btn-primary"> Détails</button>
                                </a>
                                <br> <br>

                                <?php foreach ($values as $key => &$value) {
                                    if ($key != 'value') {

                                        if ($key == 'description') { ?>
                                            <br>  <textarea class="textarea" disabled><?= $value ?></textarea><br> <br>
                                        <?php }

                                        if ($key == 'nightjob') {
                                            if ($value == 1) {

                                                echo '<img src="assets/images/Layer-95_48px.png" alt=""><br>';
                                            }

                                            if ($value == 0) {

                                                echo '<img src="assets/images/Layer-93_48px.png" alt=""><br>';
                                            }
                                        }

                                        if ($key == 'base') { ?>
                                            <p><?= $value ?></p>
                                        <?php }
                                        if ($key == 'acknowledged_by') { ?>
                                            <p><strong>Fait par : </strong><?= $value ?></p>
                                        <?php }

                                        if ($key == 'type') { ?>
                                            <p><strong>Type : </strong><?= $value ?></p>
                                        <?php }
                                    }
                                } ?>

                                <?php if ($values["value"] == 1): ?>

                                    <form id="myForm" method="get">
                                        <input name="idItem" id="idItem" type="hidden" value="<?= $values["id"] ?>">
                                        <input name="base" id="base" type="hidden" value="<?= $values["base"] ?>">
                                        <input name="action" id="action" type="hidden" value="toggleItem"/>
                                        <input name="day" id="day" type="hidden" value="<?= $auj ?>"/>
                                        <input name="currentValue" id="base" type="hidden"
                                               value="<?= $values["value"] ?>"/>
                                    </form>

                                    <a href="index.php?action=toggleItem&idItem=<?= $values["id"] ?>&base=<?= $values["base"] ?>&day=<?= $auj ?>&user=<?=$_SESSION["mail"]?>&currentValue=<?= $values["value"] ?>">

                                        <input id="submitFormData" onclick="SubmitFormData();" value="Submit"
                                               type="image" src="assets/images/check.png" alt="Submit" width="48"
                                               height="48">
                                    </a>
                                <?php elseif ($values["value"] == 0) : ?>


                                    <form id="myForm" method="get">
                                        <input name="idItem" id="idItem" type="hidden" value="<?= $values["id"] ?>">
                                        <input name="base" id="base" type="hidden" value="<?= $values["base"] ?>">
                                        <input name="action" id="action" type="hidden" value="toggleItem"/>
                                        <input name="day" id="day" type="hidden" value="<?= $auj ?>"/>
                                        <input name="currentValue" id="currentValue" type="hidden"
                                               value="<?= $values["value"] ?>"/>


                                    </form>


                                    <a href="index.php?action=toggleItem&idItem=<?= $values["id"] ?>&base=<?= $values["base"] ?>&day=<?= $auj ?>&user=<?=$_SESSION["mail"]?>&currentValue=<?= $values["value"] ?>">
                                        <input id="input" type="image" src="assets/images/uncheck.png" alt="Submit"
                                               width="48"
                                               height="48">
                                    </a>
                                <?php endif; ?>

                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            <?php } ?>
        <?php } ?>
    </div>
</article>

<article>
    <br><br><br><br>
    <div class="divTable">
        <?php foreach ($results

        as $result) { ?>
        <?php foreach ($result as $auj => &$todo) { ?>
            <div class="divTableHeading" id="header-fixed">
                <div class="divTableRow">
                    <div class="divTableHead"><?= $auj ?></div>
                </div>
            </div>
            <?php foreach ($todo as $values) { ?>
                <div class="divTableCell">
                    <a href="index.php?action=selctedItem&idItem=<?= $values["id"] ?>&base=<?= $values["base"] ?>&day=<?= $auj ?>">
                        <button class="btn btn-primary"> Détails</button>
                    </a>

                    <?php foreach ($values as $key => &$value) {
                        if ($key != 'value') {

                            if ($key == 'description') { ?>
                                <br>  <textarea class="textarea" disabled><?= $value ?></textarea><br>
                            <?php }

                            if ($key == 'nightjob') {

                                if ($value == 1) {

                                    echo '<img src="assets/images/Layer-95_48px.png" alt=""><br>';
                                }

                                if ($value == 0) {

                                  echo '<img src="assets/images/Layer-93_48px.png" alt=""><br>';
                                }
                            }

                            if ($key == 'base') { ?>
                                <p><?= $value ?></p>
                            <?php }
                            if ($key == 'acknowledged_by') { ?>
                                <p><strong>Fait par : </strong><?= $value ?></p>
                            <?php }

                            if ($key == 'type') { ?>
                                <p><strong>Type : </strong><?= $value ?></p>
                            <?php }
                        }
                    } ?>
                    <?php if ($values["value"] == 1): ?>
                        <a href="index.php?action=toggleItem&idItem=<?= $values["id"] ?>&base=<?= $values["base"] ?>&day=<?= $auj ?>&user=<?=$_SESSION["mail"]?>&currentValue=<?= $values["value"] ?>#someanchor">
                            <input type="image" src="assets/images/check.png" alt="Submit" width="48" height="48">
                        </a>
                    <?php elseif ($values["value"] == 0) : ?>
                        <a href="index.php?action=toggleItem&idItem=<?= $values["id"] ?>&base=<?= $values["base"] ?>&day=<?= $auj ?>&user=<?=$_SESSION["mail"]?>&currentValue=<?= $values["value"] ?>#someanchor">
                            <input id="input" type="image" src="assets/images/uncheck.png" alt="Submit" width="48"
                                   height="48">
                        </a>
                    <?php endif; ?>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
    <?php } ?>
    <br><br><br>

    <a href="index.php?action=resetAllTasks&base=<?= $base ?>">
        <button class="btn btn-dark btn-lg" type="button" name="valee" value="valee"> Toutes les taches à zéro</button>
    </a>

    <a href="index.php?action=adminPage&base=<?= $base ?>">
        <button class="btn btn-danger btn-lg" type="button" name="specificite" value="specificite"> Administrer les
            taches
        </button>
    </a>


    <br><br><br><br>
</article>

<script>
    $(document).ready(
        function () {
            setInterval(function () {
                var today = new Date();
                var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
                $('#show').text(
                    'Heure:'
                    + time);
            }, 1000);
        });
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {

        if (localStorage.getItem("my_app_name_here-quote-scroll") != null) {
            $(window).scrollTop(localStorage.getItem("my_app_name_here-quote-scroll"));
        }

        $(window).on("scroll", function () {
            localStorage.setItem("my_app_name_here-quote-scroll", $(window).scrollTop());
        });

    });
</script>


<?php

$content = ob_get_clean();
require "gabarit.php";
?>
