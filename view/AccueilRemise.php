<?php
ob_start();
$title = "CSU-NVB - Remise Accueil";

$_GET['action'] = "shiftend";
?>
<ul class="nav">
    <li class="nav-item">
        <a class="nav-link active" href="?action=home">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link disabled" href="?action=shiftend" tabindex="0" aria-disabled="true">Remise</a>
    </li>
</ul>

<div class="row m-2">
    <a class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center" href="?action=remiseformjour">Formulaire</a>
    <a class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center" href="?action=tableauRemise">Tableau</a>
</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
