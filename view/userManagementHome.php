<?php
ob_start();
$title = "CSU-NVB - Modifications des comptes";
$counter = 0;
?>
    <h1>Veuillez selectionner un utilisateur</h1>
    <table id="user-table">
        <tr>
            <th>Status</th>
            <th>Email</th>
            <th>Type de compte</th>
        </tr>
        <?php foreach ($users as $person) : ?>
            <tr>
                <td class="td-data"><?= $person['status'] ?></td>
                <td class="td-data"><?= $person['email'] ?></td>
                <td class="td-data"><?= $person['admin'] ?></td>
                <td><a class="btn btn-primary m-1 pull-right modify-button" style="color: white"
                       href="index.php?action=userManagement&id=<?= $counter ?>">Modifier</a>
                </td>
            </tr>
            <?php $counter++; endforeach; ?>
    </table>


    <form id="user-modifications"
        <?php if (!isset($_GET['id'])) : ?>
            style="display: none"
        <?php endif; ?>>
        <div class="form-group div-spaces">
            <label>Status</label>
            <select class="form-control">
                <?php if ($user['status'] == "nouveau") :?>
                <option>Nouveau</option>
                <option>Membre</option>
                <?php else: ?>
                <option>Membre</option>
                <option>Nouveau</option>
                <?php endif; ?>
            </select>
        </div>
        <div class="form-group div-spaces">
            <label>E-mail</label>
            <input type="email" class="form-control" value="<?= $user['email']; ?>">
        </div>
        <div class="form-group div-spaces">
            <label>Mot de passe</label>
            <input type="password" class="form-control" value="<?= $user['password']; ?>">
        </div>
        <div class="form-group div-spaces">
            <label>Type de compte</label>
            <select class="form-control">
                <?php if ($user['admin'] == true) :?>
                <option>Administrateur</option>
                <option>Utilisateur</option>
                <?php else: ?>
                <option>Utilisateur</option>
                <option>Administrateur</option>
                <?php endif; ?>
            </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Confirmer" id="button-validation">
    </form>

    <script type="text/javascript" src="js/userManagement.js" rel="script"></script>

<?php


$content = ob_get_clean();
require "gabarit.php";
?>