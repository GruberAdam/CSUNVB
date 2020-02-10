<?php
/*  Autor : Adam Gruber
    Date : Insert date
    Version : 1.0 
    Project : Insert Project Name
*/
ob_start();
$title = "CSU-NVB - Administration";
?>
    <br><br><br>
    <form method="post" action="index.php?action=login">
        <div class="form-group">
            <label for="user-email">Adresse E-mail</label>
            <input type="email" name="user-email" class="form-control" id="user-email" aria-describedby="emailHelp"
                   placeholder="Enter email" required>
        </div>
        <div class="form-group">
            <label for="user-password">Mot de passe</label>
            <input type="password" name="user-password" class="form-control" id="user-password" placeholder="Password"
                   required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>