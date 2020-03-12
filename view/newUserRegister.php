<?php
/*  Autor : Adam Gruber
    Date : Insert date
    Version : 1.0 
    Project : Insert Project Name
*/
ob_start();
$title = "CSU-NVB - Administration";
echo $id;
?>

    <h1>Première connection</h1>

    <h5>Veuillez remplir les champs suivants</h5>
    <form method="post" action="index.php?action=accountChanges&id=<?=$id?>&status=1&email=0&password=1&admin=0" style="margin-top: 15px">
        <div class="form-group">
            <input type="hidden" name="status_change" value="membre">
            <label for="password">Nouveau mot de passe</label>
            <input type="password" name="password_change" class="form-control" id="password"
                   placeholder="Entrez votre nouveau mot de passe ici" required>
        </div>
        <div class="form-group">
            <label for="password-confirmation">Confirmation du mot de passe</label>
            <input type="password" class="form-control" id="password-confirmation"
                   placeholder="Entrez la confirmation de votre mot de passe ici"
                   required>
        </div>
        <input type="submit" class="btn btn-primary" value="Confirmer" id="button-validation">
    </form>
<script src="js/users.js" type="text/javascript" rel="script"></script>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>