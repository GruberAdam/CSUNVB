<?php
/*  Autor : Adam Gruber
    Date : Insert date
    Version : 1.0
    Project : Insert Project Name
*/
ob_start();
$title = "CSU-NVB - Error";
?>
<br>
<br>
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading"></h4>
        <p>Vous ne pouvez pas accéder à cette page.<br>Pour plus d'informations contacter un admin.</p>
        <hr>
        <div class="alert alert-danger" role="alert">
            Revenir a la page <a href="index.php?action=home" class="alert-link">d'acceuil</a>.
        </div>
    </div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>