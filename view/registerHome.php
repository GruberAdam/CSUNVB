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
        <label for="exampleFormControlInput1">Email-adresse</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Mot de passe</label>
        <select class="form-control" id="exampleFormControlSelect1">
            <option>Utilisateur</option>
            <option>Administrateur</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
</form>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>