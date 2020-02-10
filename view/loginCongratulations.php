<?php
/**
 * Created by PhpStorm.
 * User: Akame
 * Date: 07/02/2020
 * Time: 22:17
 */

ob_start();
?>
<br><br>
<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Connexion réussie!</h4>
    <p>Vous êtes bien connecté sur <?php echo "<b> $_SESSION[mail]</b>" ?></p>
    <hr>
    <div class="alert alert-success" role="alert">
        Revenir a la page <a href="index.php?action=home" class="alert-link">d'acceuil</a>.
    </div>
</div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
