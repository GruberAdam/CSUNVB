<?php
ob_start();
$title = "CSU-NVB - Remise Accueil";
?>
<div class="row m-2">
    <a class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center" href="?action=remiseformnuitjour">Formulaire</a>
    <a class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center" href="?action=remiseTable">Tableau</a>
</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
