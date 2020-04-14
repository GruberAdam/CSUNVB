<?php
ob_start();
$title = "CSU-NVB - Accueil";
?>

<?php if (@$_GET['settings-success']) : ?>
    <div class="alert alert-success" role="alert" style="margin-top: 30px">
        <h4 class="alert-heading">Modifications accomplies!</h4>
    </div>
<?php endif; ?>

<div class="row m-2">
    <a class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center" href="?action=admin">Administration</a>
    <a class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center"
       href="?action=shiftend">Remise de garde</a>
    <a class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center"
       href="?action=todolist">Tâches hebdomadaires</a>
    <a class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center" href="?action=drugs">Stupéfiants</a>
</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
