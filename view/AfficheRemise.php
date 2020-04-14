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

<div>
    <h1></h1>
</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
