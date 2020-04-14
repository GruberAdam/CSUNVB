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
    <br><br><br><br>
    <div class="divTable">
        <?php foreach ($results

                       as $result) { ?>

            <?php foreach ($result as $auj => &$todo) { ?>

                <div class="divTableHeading">
                    <div class="divTableRow">
                        <div class="divTableHead"><?= $auj ?></div>

                        <div class="divTableHead"><a href="#" class="btn btn-success">
                                <button class="icon-hand-right"></button>
                                Nouvelle tache
                            </a></div>

                    </div>
                </div>

                <?php foreach ($todo as $values) { ?>

                    <div class="divTableCell">
                        <div class="container">
                            <?php foreach ($values as $key => &$value) {
                                if ($key != 'value') {
                                    if ($key == 'description') {
                                        ?>
                                        <br><textarea class="textarea" disabled><?= $value ?></textarea><br><br>
                                    <?php } else { ?>
                                        <?= $key . ' : ' ?>
                                        <?= $value ?>
                                        <br>
                                    <?php }
                                } ?>
                            <?php } ?>
                            <div class="btn-holder">
                                <a  class="btn btn-danger" href="index.php?action=removeItem&idItem=<?= $values["id"] ?>&base=<?= $values["base"] ?>&day=<?= $auj ?>">
                                    <span class="icon-remove"></span> Supprimer
                                </a>
                            </div>

                        </div>
                    </div>

                <?php } ?>
                <br><br>

            <?php } ?>


        <?php } ?>
    </div>
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

<style>


</style>
<?php

$content = ob_get_clean();
require "gabarit.php";
?>
