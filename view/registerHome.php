<?php
/*  Autor : Adam Gruber
    Date : Insert date
    Version : 1.0
    Project : Insert Project Name
*/
ob_start();
$title = "CSU-NVB - Administration";
?>

<form>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Type de compte</label>
        <select class="form-control" id="exampleFormControlSelect1">
            <option>Utilisateur</option>
            <option>Administrateur</option>
        </select>
    </div>
    <div class="form-group">
        <label for="register-email">Email-adresse</label>
        <input type="email" class="form-control" id="register-email" placeholder="name@example.com" name="register-email">
    </div>
    <div class="form-group">
        <label for="register-password">Mot de passe</label>
        <input type="password" class="form-control" id="register-password" name="register-password">
    </div>

    <div class="form-group">
        <label for="register-password-confirmation">Confirmation du mot de passe</label>
        <input type="password" class="form-control" id="register-password-confirmation" name="register-password-confirmation">
    </div>

    <button type="submit" class="btn btn-primary" id="register-button-validation">Valider</button>

    <script src="js/admin.js"></script>

</form>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>