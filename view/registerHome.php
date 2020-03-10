<?php
/*  Autor : Adam Gruber
    Date : Insert date
    Version : 1.0
    Project : Insert Project Name
*/
ob_start();
$title = "CSU-NVB - Création de compte";
?>


    <form id="register-form" action="index.php?action=register" method="post">

        <!-- Display an error if email was already used -->
        <?php if (@$_GET['register-error']) : ?>
            <div class="alert alert-danger" role="alert">
                L'E-mail du compte a déjà été utilisé!
            </div>
        <?php endif; ?>

        <!-- Display a success if the account was added to json -->
        <?php if (@$_GET['register-success']) : ?>
            <div class="alert alert-success" style="margin-top: 10px" role="alert">
                <h4 class="alert-heading">Réussite!</h4>
                <p>Le compte a bien été crée</p>
            </div>
        <?php endif; ?>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Status</label>
            <select class="form-control" id="exampleFormControlSelect1" name="register-account_status">
                <option>Nouveau</option>
                <option>Membre</option>
            </select>

            <div class="form-group" style="margin-top: 10px">
                <label for="exampleFormControlSelect1">Type de compte</label>
                <select class="form-control" id="exampleFormControlSelect1" name="register-account_type">
                    <option>Utilisateur</option>
                    <option>Administrateur</option>
                </select>
            </div>
            <div class="form-group">
                <label for="register-email">Email-adresse</label>
                <input type="email" class="form-control" id="user-email" placeholder="name@example.com"
                       name="register-email" required>
            </div>
            <div class="form-group">
                <label for="register-password">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="register-password" required>
            </div>
            <div class="form-group">
                <label for="register-password-confirmation">Confirmation du mot de passe</label>
                <input type="password" class="form-control" id="password-confirmation"
                       name="register-password-confirmation" required>
            </div>

            <input type="submit" class="btn btn-primary" id="button-validation">
    </form>

    <script src="js/users.js" type="text/javascript" rel="script"></script>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>