<?php
ob_start();

$title = "CSU-NVB - Tâches hebdomadaires";
?>
<br>
<br>

<link rel="icon" type="image/png" href="assets/images/logo.png" />
    <title>Choisissez Votre Base</title>

<div>

    <a href=index.php?action=todolist&base=saint-loup>
        <button class="btn btn-primary btn-lg" type="submit" name="saint-loup" value="saint">Saint-loup</button>
    </a>

    <a href=index.php?action=todolist&base=payerne>
        <button class="btn btn-success btn-lg" type="button" name="payerne" value="payerne">Payerne</button>
    </a>

    <a href=index.php?action=todolist&base=yverdon>
        <button class="btn btn-primary btn-lg" type="button" name="yverdon" value="yverdon">Yverdon</button>
    </a>

    <a href=index.php?action=todolist&base=valee-de-joux>
        <button class="btn btn-success btn-lg" type="button" name="valee" value="valee">Valee</button>
    </a>

    <a href=index.php?action=todolist&base=specificite>
        <button class="btn btn-primary btn-lg" type="button" name="specificite" value="specificite">specificite</button>
    </a>
</div>


<br>
<br>
<br>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
