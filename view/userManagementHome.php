<?php
ob_start();
$title = "CSU-NVB - Modifications des comptes";
?>
    <h1>Veuillez selectionner un utilisateur</h1>
    <table width="100%">
        <tr>
            <th>Status</th>
            <th>Email</th>
            <th>Type de compte</th>
        </tr>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?= $user['status'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['admin'] ?></td>
                <td><a href="index.php?action=" class="btn btn-primary m-1 pull-right" style="color: white">Modifier</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>