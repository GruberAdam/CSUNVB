<?php
ob_start();
$title = "CSU-NVB - Accueil";
?>
<div class="row m-2">
    <a class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center" href="?action=remiseformjour">Jour</a>
    <a class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center" href="?action=remiseformnuitn">Nuit</a>
</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
