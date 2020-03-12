<?php
ob_start();
$title = "CSU-NVB - Remise Jour Nuit";

$_GET['action'] = "remiseformnuitjour";
?>
<ul class="nav">
    <li class="nav-item">
        <a class="nav-link" href="?action=home">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="?action=shiftend">Remise</a>
    </li>
    <li class="nav-item">
        <a class="nav-link disabled" href="?action=remiseformnuitjour" tabindex="-1" aria-disabled="true">Formulaire</a>
    </li>
</ul>

<div class="row m-2">
    <a class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center" href="?action=remiseformjour">Jour</a>
    <a class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center" href="?action=remiseformnuit">Nuit</a>
</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
