<?php
ob_start();
$title = "CSU-NVB - Stupéfiants";
?>
<div class="row m-2">
    <h1>Stupéfiants</h1>

    <table>
        <thead><tr><th>Test</th></tr></thead>
        <tbody><tr><td>Oui Oui</td></tr></tbody>
    </table>
</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
