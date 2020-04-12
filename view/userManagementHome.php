<?php
ob_start();
$title = "CSU-NVB - Modifications des comptes";
$counter = 0;
?>
<?php if (@$_GET['error-delete-own-account']) : ?>
    <div class="alert alert-danger" role="alert">Vous ne pouvez pas supprimer votre propre compte</div>
<?php endif; ?>

<?php if (@$_GET['settings-success']) : ?>
    <div class="alert alert-success" role="alert" style="margin-top: 30px">
        <h4 class="alert-heading">Modifications accomplies!</h4>
    </div>
<?php endif; ?>

<?php if (@$_GET['error-email-settings'] == true) : ?>
    <div class="alert alert-danger" role="alert">E-mail déjà utilisé</div>
<?php endif; ?>

<?php if (@$_GET['password'] == 1 && @$_GET['generation'] == true) : ?>
    <div class="alert alert-success" role="alert" style="margin-top: 30px">
        <h4 class="alert-heading">Le nouveau mot de passe est : <?= $_POST['password_generation'] ?></h4>
    </div>
<?php endif; ?>

<?php if (isset($_GET['id'])) : ?>
    <div id="overlay"></div>
<?php endif; ?>
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
                <td><a class="btn btn-danger m-1 pull-right modify-button <?php if ($_SESSION['mail'] == $person['email'])  :?> disabled <?php endif; ?>" style="color: white"
                       href="index.php?action=deleteAccount&deletedId=<?= $counter ?>">Suprimer</a>
                </td>
            </tr>
            <?php $counter++; endforeach; ?>
    </table>


    <div id="dialog-window"
        <?php if (!isset($_GET['id'])) : ?>
         style="display: none">
        <?php endif; ?>>
        <a class="btn btn-danger defade" style="float: right" role="button" href="index.php?action=userManagement"
           id="close-button">Quitter</a>
        <h1>Modifications</h1>
        <div id="button-parent">
            <form method="post"
                  action="index.php?action=accountChanges&id=<?= $_GET['id'] ?>&status=1&email=0&admin=0&password=1&generation=1"
                  id="password_generation_form">
                <input type="hidden" name="password_change" id="password_change_id">
                <input type="hidden" name="status_change" value="nouveau">
                <input type="submit" class="btn btn-primary" id="password-generator-button" style="float: right"
                       value="Générer un nouveau mot de passe">
            </form>
        </div>
        <form id="user-modifications" method="post"
              action="index.php?action=accountChanges&id=<?= $_GET['id'] ?>&status=1&email=1&admin=1&password=0">
            <div class="form-group div-spaces" style="margin-top: 25px">
                <label>Status</label>
                <select class="form-control" id="user-status" name="status_change">
                    <?php if ($user['status'] == "nouveau") : ?>
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
                <input type="email" class="form-control" value="<?= $user['email']; ?>" id="user-email"
                       name="email_change">
            </div>
            <div class="form-group div-spaces">
                <label>Type de compte</label>
                <select class="form-control" id="user-account_type" name="admin_change">
                    <?php if ($user['admin'] == true) : ?>
                        <option>Administrateur</option>
                        <option>Utilisateur</option>
                    <?php else: ?>
                        <option>Utilisateur</option>
                        <option>Administrateur</option>
                    <?php endif; ?>
                </select>
            </div>
            <input class="btn btn-primary" type="submit" value="Confirmer">
        </form>
    </div>


    <script type="text/javascript" src="js/userManagement.js" rel="script"></script>

<?php


$content = ob_get_clean();
require "gabarit.php";
?>