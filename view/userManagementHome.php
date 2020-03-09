<?php
ob_start();
$title = "CSU-NVB - Modifications des comptes";
?>
    <h1>Veuillez selectionner un utilisateur</h1>
    <table id="user-table">
        <tr>
            <th>Status</th>
            <th>Email</th>
            <th>Type de compte</th>
        </tr>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td class="td-data"><?= $user['status'] ?></td>
                <td class="td-data"><?= $user['email'] ?></td>
                <td class="td-data"><?= $user['admin'] ?></td>
                <td><a class="btn btn-primary m-1 pull-right modify-button" style="color: white" href="inde.php?action"">Modifier</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <form id="user-modifications">
        <div class="form-group div-spaces">
            <label>Status</label>
            <select class="form-control">
                <option>Nouveau</option>
                <option>Membre</option>
            </select>
        </div>
        <div class="form-group div-spaces">
            <label>E-mail</label>
            <input type="email" class="form-control">
        </div>
        <div class="form-group div-spaces">
            <label>Mot de passe</label>
            <input type="password" class="form-control">
        </div>
        <div class="form-group div-spaces">
        <label>Type de compte</label>
        <select class="form-control">
            <option>Utilisateur</option>
            <option>Administrateur</option>
        </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Confirmer" id="button-validation">
    </form>

<script type="text/javascript" src="js/userManagement.js" rel="script"></script>

<?php


$content = ob_get_clean();
require "gabarit.php";
?>