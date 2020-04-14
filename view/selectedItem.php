<?php
ob_start();
?>
<div class="row m-2">
    <h1>Tâche selectionnée</h1>
</div>



<head>
    <title></title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $("#btnPrint").live("click", function () {
            var divContents = $("#dvContainer").html();
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head><title>DIV Contents</title>');
            printWindow.document.write('</head><body >');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        });
    </script>
</head>


<div>
<form id="form1">

        <br>
        <div>
            <dl>
                <dt><u>ID tâche</u></dt>
                <dd><h5><?= $itemSearch ['id'] ?></h5></dd>
            </dl>
            <dl>
                <dt><u>Base</u></dt>
                <dd><?= $itemSearch ['base'] ?></dd>
            </dl>
            <dl>
                <dt><u>Night Job</u></dt>
                <dd><?= $itemSearch ['nightjob'] ?></dd>
            </dl>
            <dl>
                <dt><u>Description</u></dt>
                <dd><?= $itemSearch ['description'] ?></dd>
            </dl>
            <dl>
                <dt><u>Fait par :</u></dt>
                <dd><?= $itemSearch['acknowledged_by'] ?></dd>
            </dl>
            <dl>
                <dt><u>Type</u></dt>
                <dd><?= $itemSearch ['type'] ?></dd>
            </dl>
            <dl>
                <dt><u>Valeur</u></dt>
                <dd><?= $itemSearch ['value'] ?></dd>
            </dl>

            <br>
            <?php
            ?>
        </div>


</form>
</div>

<!--<a href="index.php?action=modificationItem&idItem=--><?//=$itemSearch ['id'] ?><!--&base=--><?//=  $itemSearch ['base'] ?><!--&day=--><?//= $_GET["day"] ?><!--">-->
<!--<button type="submit" class="btn btn-primary" name="btn-save">-->
<!--    <span class="glyphicon glyphicon-plus"></span> Enrengister-->
<!--</button>-->
<!--</a>-->

<a href="index.php?action=modificationItem&idItem=<?=$itemSearch ['id'] ?>&base=<?=  $itemSearch ['base'] ?>&day=<?= $_GET["day"] ?>">
    <button  class="btn btn-primary"> Modifier </button>
</a>
<a>
<button  class="btn btn-primary" type="button" value="Télécharger" id="btnPrint">Télécharger</button>
</a>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
