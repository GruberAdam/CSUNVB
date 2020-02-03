<?php
ob_start();
$title = "CSU-NVB - Stupéfiants";
?>
<div class="row m-2">
    <h1>Stupéfiants</h1>
    <table>
        <thead><tr><th></th><th>Col 1</th></tr></thead>
        <tbody><tr><td>Ligne 1</td><td onclick="changeColor(this)"></td></tr></tbody>
    </table>
</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
